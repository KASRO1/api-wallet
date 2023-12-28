<?php

namespace App\Console\Commands;

use App\Account;
use App\Deposit;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;

class ProcessDeposits extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deposit:process';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process deposits';

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
     * @return mixed
     */
    public function handle()
    {
        $deposits = Deposit::where('status', Deposit::STATUS_OPENED)->get();
        foreach ($deposits as $deposit) {
            $referals = [];

            $referals[0] = $deposit->user->referals()->isDepositet()->get();

            $referals[1] = collect();

            foreach ($referals[0] as $referal) {
                $referals[1] = $referals[1]->merge($referal->referals()->isDepositet()->get());
            }

            $referals[2] = collect();

            foreach ($referals[1] as $referal) {
                $referals[2] = $referals[2]->merge($referal->referals()->isDepositet()->get());
            }

            $referal_percent = ((count($referals[0]) * Deposit::REFERAL_FIRST_PERCENT) + (count($referals[1]) * Deposit::REFERAL_SECOND_PERCENT) + (count($referals[2]) * Deposit::REFERAL_THIRD_PERCENT)) ?? 0;
            
            $percent = $deposit->percent + $referal_percent;
            $amount = (($deposit->amount / 100000) / 100) * $percent;

            $deposit->increment('balance', $amount * 100000);
            $deposit->referal_percent = $referal_percent;
            $deposit->save();

            if (now()->getTimestamp() > $deposit->end_time->getTimestamp()) {
                if ($deposit->name == 'Liquidity pools') {
                    if ($deposit->currency == Account::CURRENCY_BTC_ONE) {
                        $currency = 'btc';
                    } else if ($deposit->currency == Account::CURRENCY_BTC_TWO) {
                        $currency = 'eth';
                    } else {
                        $currency = $deposit->currency;
                    }

                    if (strtolower($currency) == 'usdt') {
                        $usdtRate = 1;
                    } else if (DB::table('exchange_rates')->where('pair', strtolower($currency) . '_usdt')->exists()) {
                        $usdtRate = DB::table('exchange_rates')->where('pair', strtolower($currency) . '_usdt')->first()->rate;
                    } else {
                        $usdtRate =  config('currencies.' . strtolower($currency) . '_usdt');
                    }

                    if (DB::table('configs')->where('field', 'apy_rate')->exists()) {
                        $apyRate = DB::table('configs')
                            ->select('value')
                            ->where('field', 'apy_rate')
                            ->first()->value;
                    } else {
                        $apyRate = config('currencies.apy_usdt');
                    }

                    $balance = $deposit->balance * $usdtRate * (1 / floatval($apyRate));
                    $deposit->user->accounts()->where('currency', Account::CURRENCY_APY)->increment('balance', $balance);
                } else {
                    $deposit->user->accounts()->where('currency', $deposit->currency)->increment('balance', $deposit->balance);
                }

                $deposit->update(['status' => Deposit::STATUS_CLOSED]);
            }
        }
    }
}
