<?php

namespace App\Http\Controllers\Admin;

use App\Config;
use App\Account;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigsController extends Controller
{
    protected $base_currencies = [
        Account::CURRENCY_USDT,
        Account::CURRENCY_BUSD,
        Account::CURRENCY_USDC,
        Account::CURRENCY_APY,
        Account::CURRENCY_RUB_ACC
    ];
    protected $currencies = [
        Account::CURRENCY_USD_PM,
        Account::CURRENCY_BNB,
        Account::CURRENCY_DOGE,
        Account::CURRENCY_ETH,
        Account::CURRENCY_BTC,
        Account::CURRENCY_XRP,
        Account::CURRENCY_LTC,
        Account::CURRENCY_TRX,
        Account::CURRENCY_DASH,
        Account::CURRENCY_ATOM,
        Account::CURRENCY_BCH,
        Account::CURRENCY_TON,
        Account::CURRENCY_DOT,
        Account::CURRENCY_UMEE,
        Account::CURRENCY_BLD,
        Account::CURRENCY_AVAX,
        Account::CURRENCY_KAVA,
        Account::CURRENCY_UNI,
        Account::CURRENCY_DAI,
        Account::CURRENCY_LINK,
        Account::CURRENCY_GRT,
        Account::CURRENCY_DYDX,
        Account::CURRENCY_DODO,
        Account::CURRENCY_COMP,
        Account::CURRENCY_DAO,
        Account::CURRENCY_AXL,
    ];

    public function updateApyRate(Request $request)
    {
        $regex = "/^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?$/";
        $data = $this->validate($request, [
            'apy_rate' => ['required', 'regex:' . $regex],
        ]);

        DB::table('configs')->updateOrInsert(
            ['field' => 'apy_rate'],
            [
                'field' => 'apy_rate',
                'value' => ((float)$data['apy_rate'])
            ]
        );

        return back();
    }

    public function updatePreferenceRate(Request $request)
    {
        $regex = "/^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?$/";
        $data = $this->validate($request, [
            'preference_currency' => ['string'],
            'preference_currency_rate' => ['required', 'regex:' . $regex],
        ]);


        DB::table('configs')->updateOrInsert(
            ['field' => 'preference_currency'],
            [
                'field' => 'preference_currency',
                'value' => $data['preference_currency'] != 'NONE' ? $data['preference_currency'] : ''
            ]
        );

        DB::table('configs')->updateOrInsert(
            ['field' => 'preference_currency_rate'],
            [
                'field' => 'preference_currency_rate',
                'value' => ((float)$data['preference_currency_rate'])
            ]
        );

        foreach ($this->base_currencies as $currency) {
            $result = Http::withHeaders([
                'X-CoinAPI-Key' => 'ACA9AE29-AC78-492D-9C6A-70365E9DCBED'
            ])->get('https://rest.coinapi.io/v1/exchangerate/' . $currency . '?invert=false' .
                '&filter_asset_id=' . implode(';', $this->currencies));

            $result = json_decode($result);

            if (isset($result->error)) {
                Log::error($result->error);
                return back();
            }

            foreach ($result->rates as $d) {
                $quote = $d->asset_id_quote;
                $rate = $d->rate;

                if (strtolower($quote) == strtolower($data['preference_currency'])) {
                    $rate = $rate - $rate * ((float)$data['preference_currency_rate']) / 100;
                }

                DB::table('exchange_rates')->updateOrInsert(
                    ['pair' => strtolower($quote) . '_' . strtolower($currency)],
                    [
                        'pair' => strtolower($quote) . '_' . strtolower($currency),
                        'rate' => 1 / $rate
                    ]
                );

                DB::table('exchange_rates')->updateOrInsert(
                    ['pair' => strtolower($currency) . '_' . strtolower($quote)],
                    [
                        'pair' => strtolower($currency) . '_' . strtolower($quote),
                        'rate' => $rate
                    ]
                );
            }
        }

        return back();
    }
}
