<?php

namespace App\Http\Controllers;

use App\Account;
use App\Rates;
use App\Transaction;
use App\User;
use App\Wallet;
use Illuminate\Http\Request;
use WestWallet\WestWallet\Client;

class WestWalletController extends Controller
{
    public function generateWallets(){
        $domain = route("payment.notify");
        $client = new Client(getenv("WESTWALLET_PUBLIC_KEY"), getenv("WESTWALLET_PRIVATE_KEY"));
        $addresses = [];
        $coins = ["BTC", "ETH", "USDT", "USDCTRC", "XRP", "LTC", "DASH", "DOGE", "BNB", "TRX", "TON"];
        foreach ($coins as $coin){
            try {
                $address = $client->generateAddress($coin, $domain );
                $Wallet = new Wallet();
                $Wallet->currency = $coin;
                $Wallet->address = $address['address'];
                $Wallet->user_id = auth()->user()->id;
                $Wallet->save();
            } catch (\Exception $exception){

                dd($exception);
            }


        }

        return json_encode($addresses);
    }
    public function checkPayment(Request $request){

        $address = $request->address;
        $user = Wallet::find($address);
        $currency = strtoupper($request->currency);
        $amount = $request->amount * 100000;

        $balance = Account::whereRaw("BINARY currency = ?", [$currency])
            ->where("user_id", $user['id'])
            ->first();
        $balance->balance = $balance['balance'] + $amount;
        $balance->save();
    }
}
