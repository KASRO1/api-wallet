<?php

use App\Account;
use Illuminate\Database\Seeder;

class BTCAccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var \App\User $user */
        foreach (\App\User::all() as $user) {
            if($user->accounts()->where('currency', \App\Account::CURRENCY_BTC_ONE)->doesntExist()) {
                $user->accounts()->create([
                    'currency' => Account::CURRENCY_BTC_ONE,
                ]);
            }

            if($user->accounts()->where('currency', \App\Account::CURRENCY_BTC_TWO)->doesntExist()) {
                $user->accounts()->create([
                    'currency' => Account::CURRENCY_BTC_TWO,
                ]);
            }
        }
    }
}
