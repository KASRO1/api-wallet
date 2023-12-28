<?php

namespace App\Http\Controllers;

use App\Account;

class ConversionController extends Controller
{
    /**
     * @var array
     */
    protected $currencies = [
        Account::CURRENCY_RUB,
        Account::CURRENCY_USD,
        Account::CURRENCY_EUR,
        Account::CURRENCY_BTC_ONE,
        Account::CURRENCY_BTC_TWO,
    ];

    public function show()
    {
        $user = auth()->user();

        $accounts = $user->accounts;


        return view('cabinet.new.conversion', compact('user', 'accounts'));
    }
}
