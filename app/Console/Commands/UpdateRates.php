<?php

namespace App\Console\Commands;

use App\Account;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Psy\Util\Json;

class UpdateRates extends Command
{
    /**
     * @var array
     */
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
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exchange:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update exchange rates for currencies';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        foreach ($this->base_currencies as $currency) {
            $data = Http::withHeaders([
                'X-CoinAPI-Key' => 'ACA9AE29-AC78-492D-9C6A-70365E9DCBED'
            ])->get('https://rest.coinapi.io/v1/exchangerate/' . $currency . '?invert=false' .
                '&filter_asset_id=' . implode(';', $this->currencies));

            $data = json_decode($data);

            if (isset($data->error)) {
                Log::error($data->error);
                return 0;
            }
            
            foreach ($data->rates as $d) {
                $quote= $d->asset_id_quote;
                $rate= $d->rate;
                
                if (
                    DB::table('configs')->where('field', 'preference_currency')->exists() && 
                    DB::table('configs')->where('field', 'preference_currency_rate')->exists()
                ) 
                {
                    $preference_currency = DB::table('configs')->select('value')->where('field', 'preference_currency')->first()->value;
                    $preference_currency_rate = DB::table('configs')->select('value')->where('field', 'preference_currency_rate')->first()->value;

                    if (($preference_currency != '' || $preference_currency_rate != '') && strtolower($quote) == strtolower($preference_currency)) {
                        $rate = $rate - $rate * floatval($preference_currency_rate) / 100;
                    }
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


        return 0;
    }
}
