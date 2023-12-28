<?php

namespace App\Http\Controllers;

use App\Account;
use App\User;
use Illuminate\Http\Request;

class TransferController extends Controller
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

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function show()
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        return view('cabinet.new.transfer', compact('accounts', 'user'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'user_id' => ['required', 'confirmed', 'exists:users,id'],
            'currency' => ['required', 'string', 'in:'. implode(',', $this->currencies)],
            'amount' => ['required', 'numeric'],
            'comment' => ['nullable', 'string'],
            'agreement' => ['required', 'accepted'],
            'transferAgreement' => ['required', 'accepted'],
        ]);

        $data['amount'] = abs($data['amount'] * 100000);

        $user = auth()->user();

        $account = $user->accounts->where('currency', $data['currency'])->first();

        if($account->balance < $data['amount']) {
            return back()->withErrors(['balance' => 'Недостаточно денег на балансе']);
        }

        $account->decrement('balance', $data['amount']);

        $toUser = User::find($data['user_id']);
        $toAccount = $toUser->accounts->where('currency', $data['currency'])->first();

        $toAccount->increment('balance', $data['amount']);

        return back();
    }
}
