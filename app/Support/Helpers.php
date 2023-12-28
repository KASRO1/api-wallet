<?php

namespace App\Support;

use App\Account;
use App\Deposit;
use App\User;
use Illuminate\Support\Facades\DB;

class Helpers
{
    /**
     * @param $sum
     * @param string $currency
     * @return array
     */
    static public function getTariff($sum, $currency = Account::CURRENCY_RUB)
    {
        if ($sum < config('tariffs.0.to.' . $currency)) {
            return config('tariffs.0');
        } elseif ($sum >= config('tariffs.1.from.' . $currency) && $sum < config('tariffs.1.to.' . $currency)) {
            return config('tariffs.1');
        } elseif ($sum >= config('tariffs.2.from.' . $currency) && $sum < config('tariffs.2.to.' . $currency)) {
            return config('tariffs.2');
        } elseif ($sum >= config('tariffs.3.from.' . $currency) && $sum < config('tariffs.3.to.' . $currency)) {
            return config('tariffs.3');
        } elseif ($sum >= config('tariffs.4.from.' . $currency) && $sum < config('tariffs.4.to.' . $currency)) {
            return config('tariffs.4');
        }

        return config('tariffs.5');
    }

    /**
     * @param User $user
     * @return mixed
     */
    static public function getReferalsBalance(User $user)
    {
        $referals = self::getReferals($user, true);
        $lastReferals = collect();
        foreach ($referals as $referal) {
            $lastReferals = $lastReferals->merge($referal);
        }

        $referalsBalance = $lastReferals->map(function (User $referal) {
            return self::getStructuralBalance($referal->accounts()) + self::getDepositsBalance($referal);
        })->sum();

        return $referalsBalance;
    }

    /**
     * @param User $user
     * @return string
     */
    static public function getUserTariff(User $user)
    {
        $balance = self::getStructuralBalance($user->accounts());

        $referalsBalance = self::getReferalsBalance($user);

        $balance = str_replace(' ', '', $balance) + $referalsBalance;

        if ($balance < 1000) {
            return "Start";
        }

        if ($balance >= 1000 && $balance < 10000) {
            return "Beginner";
        }

        if ($balance >= 10000 && $balance < 25000) {
            return "Middle";
        }

        if ($balance >= 25000 && $balance < 100000) {
            return "Professional";
        }

        if ($balance >= 100000 && $balance < 300000) {
            return "VIP";
        }

        if ($balance >= 300000) {
            return "Special";
        }

        return "Start";
    }

    /**
     * @param false $active
     * @return array
     */
    static public function getReferals($user, $active = false)
    {
        $referals = [];

        $referals[0] = $user->referals()->get();

        $referals[1] = collect();

        foreach ($referals[0] as $referal) {
            $referal = $referal->referals()->get();

            $referals[1] = $referals[1]->merge($referal);
        }

        $referals[2] = collect();

        foreach ($referals[1] as $referal) {
            $referal = $referal->referals()->get();

            $referals[2] = $referals[2]->merge($referal);
        }

        if ($active) {
            foreach ($referals as $index => $level) {
                $referals[$index] = $level->filter(function ($referal) {
                    return $referal->is_depositet;
                });
            }
        }

        return $referals;
    }

    static protected function getRate($pair)
    {
        if (DB::table('exchange_rates')->where('pair', $pair)->exists()) {

            $ratesDB = DB::table('exchange_rates')->where('pair', $pair)->get();
            //dd($ratesDB);
            return floatval($ratesDB[0]->rate);
        } else {
            return false;
        }
    }
    /**
     * @param $accounts
     * @return float|int
     */
    static public function getStructuralBalance($accounts)
    {
        $accountsUsd = clone $accounts;
        //dd(self::getRate('eth_usdt'));

        if ($accountsUsd->where('currency', \App\Account::CURRENCY_USD_PM)->count() != 0) {
            $balance = $accountsUsd->where('currency', \App\Account::CURRENCY_USD_PM)->first()->balance / 100000;
        }

        if ($accountsUsd->where('currency', \App\Account::CURRENCY_USD)->count() != 0) {
            $balance = $accountsUsd->where('currency', \App\Account::CURRENCY_USD)->first()->balance / 100000;
        }

        $accountsEur = clone $accounts;
        if ($accountsEur->where('currency', \App\Account::CURRENCY_EUR)->count() != 0) {
            $balance += ($accountsEur->where('currency', \App\Account::CURRENCY_EUR)->first()->balance / 100000) * config('currencies.eur_usd');
        }
        $accounts2 = clone $accounts;
        if ($accountsEur->where('currency', \App\Account::CURRENCY_BTC)->count() != 0) {
            $balance += ($accounts2->where('currency', \App\Account::CURRENCY_BTC)->first()->balance / 100000) * self::getRate('btc_usdt') ?: config('currencies.btc_usdt');
        }
        $accounts3 = clone $accounts;

        if ($accountsEur->where('currency', \App\Account::CURRENCY_ETH)->count() != 0) {
            $balance += ($accounts3->where('currency', \App\Account::CURRENCY_ETH)->first()->balance / 100000) * self::getRate('eth_usdt') ?: config('currencies.eth_usdt');
        }
        $accounts4 = clone $accounts;

        if ($accountsEur->where('currency', \App\Account::CURRENCY_RUB_ACC)->count() != 0) {
            $balance += ($accounts4->where('currency', \App\Account::CURRENCY_RUB_ACC)->first()->balance / 100000) * self::getRate('rub_usdt') ?: config('currencies.rub_usdt');
        }
        $accounts5 = clone $accounts;
        if ($accountsEur->where('currency', \App\Account::CURRENCY_BCH)->count() != 0) {
            $balance += ($accounts5->where('currency', \App\Account::CURRENCY_BCH)->first()->balance / 100000) * self::getRate('bch_usdt') ?: config('currencies.bch_usdt');
        }
        $accounts6 = clone $accounts;

        if ($accountsEur->where('currency', \App\Account::CURRENCY_DASH)->count() != 0) {
            $balance += ($accounts6->where('currency', \App\Account::CURRENCY_DASH)->first()->balance / 100000) * self::getRate('dash_usdt') ?: config('currencies.dash_usdt');
        }
        $accounts7 = clone $accounts;

        if ($accountsEur->where('currency', \App\Account::CURRENCY_ATOM)->count() != 0) {
            $balance += ($accounts7->where('currency', \App\Account::CURRENCY_ATOM)->first()->balance / 100000) * self::getRate('atom_usdt') ?: config('currencies.atom_usdt');
        }
        $accounts8 = clone $accounts;

        if ($accountsEur->where('currency', \App\Account::CURRENCY_XRP)->count() != 0) {
            $balance += ($accounts8->where('currency', \App\Account::CURRENCY_XRP)->first()->balance / 100000) * self::getRate('xrp_usdt') ?: config('currencies.xrp_usdt');
        }
        $accounts9 = clone $accounts;

        if ($accountsEur->where('currency', \App\Account::CURRENCY_DOT)->count() != 0) {
            $balance += ($accounts9->where('currency', \App\Account::CURRENCY_DOT)->first()->balance / 100000) * self::getRate('dot_usdt') ?: config('currencies.dot_usdt');
        }
        $accounts1 = clone $accounts;

        if ($accountsEur->where('currency', \App\Account::CURRENCY_LTC)->count() != 0) {
            $balance += ($accounts1->where('currency', \App\Account::CURRENCY_LTC)->first()->balance / 100000) * self::getRate('ltc_usdt') ?: config('currencies.ltc_usdt');
        }

        $accounts11 = clone $accounts;
        if ($accountsEur->where('currency', \App\Account::CURRENCY_DOGE)->count() != 0) {
            $balance += ($accounts11->where('currency', \App\Account::CURRENCY_DOGE)->first()->balance / 100000) * self::getRate('doge_usdt') ?: config('currencies.doge_usdt');
        }

        $accounts12 = clone $accounts;
        if ($accountsEur->where('currency', \App\Account::CURRENCY_UMEE)->count() != 0) {
            $balance += ($accounts12->where('currency', \App\Account::CURRENCY_UMEE)->first()->balance / 100000) * self::getRate('umee_usdt') ?: config('currencies.umee_usdt');
        }

        $accounts13 = clone $accounts;
        if ($accountsEur->where('currency', \App\Account::CURRENCY_BNB)->count() != 0) {
            $balance += ($accounts13->where('currency', \App\Account::CURRENCY_BNB)->first()->balance / 100000) * self::getRate('bnb_usdt') ?: config('currencies.bnb_usdt');
        }

        $accounts14 = clone $accounts;
        if ($accountsEur->where('currency', \App\Account::CURRENCY_TRX)->count() != 0) {
            $balance += ($accounts14->where('currency', \App\Account::CURRENCY_TRX)->first()->balance / 100000) * self::getRate('trx_usdt') ?: config('currencies.trx_usdt');
        }

        $accounts15 = clone $accounts;
        if ($accountsEur->where('currency', \App\Account::CURRENCY_USDT)->count() != 0) {
            $balance += ($accounts15->where('currency', \App\Account::CURRENCY_USDT)->first()->balance / 100000);
        }

        $accounts16 = clone $accounts;
        if ($accountsEur->where('currency', \App\Account::CURRENCY_USDC)->count() != 0) {
            $balance += ($accounts16->where('currency', \App\Account::CURRENCY_USDC)->first()->balance / 100000) * self::getRate('usdc_usdt') ?: config('currencies.usdc_usdt');
        }

        $accounts17 = clone $accounts;
        if ($accountsEur->where('currency', \App\Account::CURRENCY_BUSD)->count() != 0) {
            $balance += ($accounts17->where('currency', \App\Account::CURRENCY_BUSD)->first()->balance / 100000) * self::getRate('busd_usdt') ?: config('currencies.busd_usdt');
        }

        $accounts18 = clone $accounts;
        if ($accountsEur->where('currency', \App\Account::CURRENCY_TON)->count() != 0) {
            $balance += ($accounts18->where('currency', \App\Account::CURRENCY_TON)->first()->balance / 100000) * self::getRate('ton_usdt') ?: config('currencies.ton_usdt');
        }

        $accounts19 = clone $accounts;
        if ($accountsEur->where('currency', \App\Account::CURRENCY_BLD)->count() != 0) {
            $balance += ($accounts19->where('currency', \App\Account::CURRENCY_BLD)->first()->balance / 100000) * self::getRate('bld_usdt') ?: config('currencies.bld_usdt');
        }

        $accounts20 = clone $accounts;
        if ($accountsEur->where('currency', \App\Account::CURRENCY_APY)->count() != 0) {
            $balance += ($accounts20->where('currency', \App\Account::CURRENCY_APY)->first()->balance / 100000) * config('currencies.apy_usd');
        }

        /*        $accountsRub = clone $accounts;
        $balance += ($accountsRub->where('currency', \App\Account::CURRENCY_RUB)->first()->balance / 100000) * config('currencies.rub_usd');

        $accountsBTCOne = clone $accounts;
        $balance += ($accountsBTCOne->where('currency', \App\Account::CURRENCY_BTC_ONE)->first()->balance / 100000) * config('currencies.btc_usd');

        $accountsBTCTwo = clone $accounts;
        $balance += ($accountsBTCTwo->where('currency', \App\Account::CURRENCY_BTC_TWO)->first()->balance / 100000) * config('currencies.eth_usd');*/

        return $balance;
    }

    /**
     * @param User $user
     * @return float|int
     */
    static public function getDepositsBalance(User $user)
    {
        $balance = 0;
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_RUB_ACC)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_RUB_ACC)->sum('amount') / 100000) * self::getRate('rub_usdt') ?: config('currencies.rub_usdt');
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_ETH)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_ETH)->sum('amount') / 100000) * self::getRate('eth_usdt') ?:  config('currencies.eth_usdt');
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_BTC)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_BTC)->sum('amount') / 100000) * self::getRate('btc_usdt') ?:  config('currencies.btc_usdt');
        }

        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_BCH)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_BCH)->sum('amount') / 100000) * self::getRate('bch_usdt') ?:  config('currencies.bch_usdt');
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_DASH)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_DASH)->sum('amount') / 100000) * self::getRate('dash_usdt') ?:  config('currencies.dash_usdt');
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_ATOM)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_ATOM)->sum('amount') / 100000) * self::getRate('atom_usdt') ?:  config('currencies.atom_usdt');
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_DOT)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_DOT)->sum('amount') / 100000) * self::getRate('dot_usdt') ?: config('currencies.dot_usdt');
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_LTC)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_LTC)->sum('amount') / 100000) * self::getRate('ltc_usdt') ?:  config('currencies.ltc_usdt');
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_DOGE)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_DOGE)->sum('amount') / 100000) * self::getRate('doge_usdt') ?: config('currencies.doge_usdt');
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_UMEE)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_UMEE)->sum('amount') / 100000) * self::getRate('umee_usdt') ?: config('currencies.umee_usdt');
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_BNB)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_BNB)->sum('amount') / 100000) * self::getRate('bnb_usdt') ?: config('currencies.bnb_usdt');
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_XRP)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_XRP)->sum('amount') / 100000) * self::getRate('xrp_usdt') ?: config('currencies.xrp_usdt');
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_TRX)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_TRX)->sum('amount') / 100000) * self::getRate('trx_usdt') ?: config('currencies.trx_usdt');
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_USDT)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_USDT)->sum('amount') / 100000);
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_USDC)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_USDC)->sum('amount') / 100000) * self::getRate('usdc_usdt') ?: config('currencies.usdc_usdt');
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_BUSD)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_BUSD)->sum('amount') / 100000) * self::getRate('busd_usdt') ?: config('currencies.busd_usdt');
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_DAI)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_DAI)->sum('amount') / 100000) * self::getRate('dai_usdt') ?: config('currencies.dai_usdt');
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_TON)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_TON)->sum('amount') / 100000) * self::getRate('ton_usdt') ?: config('currencies.ton_usdt');
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_BLD)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_BLD)->sum('amount') / 100000) * self::getRate('bld_usdt') ?: config('currencies.bld_usdt');
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_USD_PM)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_USD_PM)->sum('amount') / 100000);
        }
        if ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_APY)->count() != 0) {
            $balance += ($user->deposits()->where('status', Deposit::STATUS_OPENED)->where('currency', Account::CURRENCY_APY)->sum('amount') / 100000) * config('currencies.apy_usdt');
        }
        return $balance;
    }
}
