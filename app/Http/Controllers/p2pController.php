<?php

namespace App\Http\Controllers;

use App\Account;
use App\Rates;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class p2pController extends Controller
{
    public function createPaymentOrder(Request $request){


            if (!Auth::check()) {
                return redirect()->route('login');
            }

            $user = Auth::user();
            $apikey = env("p2p_api_key");
            $project_id =  env("p2p_project_id");
            $order_id = mt_rand(1, 999999);
            $amount = $request->summ;
            $currency = $request->currency;



            $data = [
                'project_id' => $project_id,
                'apikey' => $apikey,
                'order_id' => $order_id,
                'amount' => $amount,

            ];

            $ch = curl_init('https://p2pkassa.online/api/v1/link');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data, '', '&'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HEADER, false);

            $result = curl_exec($ch);
            curl_close($ch);
            $result = json_decode($result, true);
            if(!isset($result["error"])){
                $transaction = new Transaction();
                $transaction->order_id = $order_id;
                $transaction->user_id = $user->id;
                $transaction->type = "p2p";
                $transaction->currency = $currency;
                $transaction->amount = $amount;
                $transaction->status = 0;
                $transaction->save();
                return response()->json(["url" => $result["link"]]);
            }
            else{
                return response()->json(['error' => $result["message"]]);
            }



    }

    public function checkPayment(Request $request){
        $apikey = env("p2p_api_key");
        $project_id =  env("p2p_project_id");
        $order_id = $request->order_id;


        $sign = hash('sha256', implode(':', [$request->id, $order_id, $project_id, $apikey]));

        if (!hash_equals($_POST['sign'], $sign)) {
            die("wrong sign");
        }

        $payment = Transaction::where("order_id", $order_id)->first();
        $payment->status = 1;
        $payment->save();

        $user = User::find($payment['user_id']);

        $currency = strtoupper($payment->currency);
        $amount = $payment['amount'] * 100000;
        if($currency == "USD"){
            $rate = Rates::where("pair", "rub_usd")->first();
            $amount = $rate['rate'] * $amount;

        }
        $balance = Account::whereRaw("BINARY currency = ?", [$currency])
            ->where("user_id", $user['id'])
            ->first();
        $balance->balance = $balance['balance'] + $amount;
        $balance->save();
    }
}
