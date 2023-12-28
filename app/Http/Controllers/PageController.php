<?php

namespace App\Http\Controllers;

use App\Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function liquidity()
    {
        $rates = $this->getRates();
        return view('pages.liquidity', compact('rates'));
    }

    protected function getRates()
    {
        $ratesDB = DB::table('exchange_rates')->where('pair', 'like', '%_usdt')->get();
        $rates = [];
        foreach ($ratesDB as $rate) {
            array_push($rates, [
                strtoupper(str_replace('_usdt', '', $rate->pair)),
                $rate->rate
            ]);
        }

        if (DB::table('configs')->where('field', 'apy_rate')->exists()) {
            $apy_rate = DB::table('configs')
                ->select('value')
                ->where('field', 'apy_rate')
                ->first()->value;
        } else {
            $apy_rate = config('currencies.apy_usdt');
        }

        array_push($rates, ['APY', (1 / floatval($apy_rate))]);
        return $rates;
    }
}
