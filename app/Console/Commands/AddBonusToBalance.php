<?php

namespace App\Console\Commands;

use App\Support\Helpers;
use App\User;
use Illuminate\Console\Command;

class AddBonusToBalance extends Command
{
    protected $signature = 'balance:bonus';

    protected $description = 'Add bonus to balance';

    public function handle()
    {
        $users = User::all();

        foreach ($users as $user) {
            $tariff = Helpers::getUserTariff($user);

            $bonus = 2.5;

            switch ($tariff) {
                case 'Beginner': $bonus = 3.33; break;
                case 'Middle': $bonus = 4; break;
                case 'Professional': $bonus = 5; break;
                case 'VIP': $bonus = 7; break;
                case 'Special': $bonus = 10; break;
            }

            $balance = Helpers::getStructuralBalance($user->accounts());

            $bonus = str_replace(' ', '', $balance) * ($bonus / 100);

            $user->accounts()
                ->where('currency', \App\Account::CURRENCY_USD)
                ->increment('balance', $bonus * 100000);
        }
    }
}
