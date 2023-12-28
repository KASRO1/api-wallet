<?php

namespace App\Http\Controllers\Admin;

use App\Account;
use App\Deposit;
use App\Http\Controllers\Controller;
use App\Support\Helpers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DepositsController extends Controller
{
    /**
     * @var array
     */
    protected $currencies = [
        Account::CURRENCY_RUB,
        Account::CURRENCY_USD_PM,
        Account::CURRENCY_EUR,
        Account::CURRENCY_BTC_ONE,
        Account::CURRENCY_BTC_TWO,
        Account::CURRENCY_BNB,
        Account::CURRENCY_BUSD,
        Account::CURRENCY_DAI,
        Account::CURRENCY_DOGE,
        Account::CURRENCY_ETH,
        Account::CURRENCY_BTC,
        Account::CURRENCY_XRP,
        Account::CURRENCY_LTC,
        Account::CURRENCY_TRX,
        Account::CURRENCY_USDT,
        Account::CURRENCY_USDC,
        Account::CURRENCY_DASH,
        Account::CURRENCY_ATOM,
        Account::CURRENCY_BCH,
        Account::CURRENCY_XMR,
        Account::CURRENCY_DOT,
        Account::CURRENCY_UMEE,
        Account::CURRENCY_BLD,
        Account::CURRENCY_APY
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, User $user)
    {

        $data = $this->validate($request, [
            'amount' => ['required'],
            'days' => ['required', 'min:7', 'numeric'],
            'currency' => ['required', 'string', 'in:'. implode(',', $this->currencies)],
            'start_time' => ['required'],
            'pack'=>['required', 'in:'.implode(',',array_keys(config('tariffs')))],
        ]);

        if(in_array($data['currency'], [Account::CURRENCY_RUB])) {
            $this->validate($request, [
                'amount' => ['required', 'min:'. config('tariffs.0.from.rub') / 100000, 'numeric'],
            ]);
        }

        if(in_array($data['currency'], [Account::CURRENCY_USD])) {
            $this->validate($request, [
                'amount' => ['required', 'min:'. config('tariffs.0.from.usd') / 100000, 'numeric'],
            ]);
        }

        if(in_array($data['currency'], [Account::CURRENCY_EUR])) {
            $this->validate($request, [
                'amount' => ['required', 'min:'. config('tariffs.0.from.eur') / 100000, 'numeric'],
            ]);
        }

        if(in_array($data['currency'], [Account::CURRENCY_BTC_ONE])) {
            $this->validate($request, [
                'amount' => ['required', 'min:'. config('tariffs.0.from.btc_one') / 100000],
            ]);
        }

        if(in_array($data['currency'], [Account::CURRENCY_BTC_TWO])) {
            $this->validate($request, [
                'amount' => ['required', 'min:'. config('tariffs.0.from.btc_two') / 100000],
            ]);
        }

        $data['amount'] = ((float) $data['amount']) * 100000;

        $date = Carbon::parse($data['start_time']);

        $account = $user->accounts->where('currency', $data['currency'])->first();

        $account->decrement('balance', $data['amount']);

        $user->deposits()->create([
            'name' => config('tariffs.'.$data['pack'].'.title'),
            'amount' => $data['amount'],
            'balance' => $data['amount'],
            'currency' => $data['currency'],
            'start_time' => $date,
            'end_time' => $date->clone()->addDays($data['days']),
            'percent' => $this->getPercent($data['amount'], $data['currency']),
            'status' => Deposit::STATUS_OPENED,
            'referal_percent' => $this->getReferalsPercent($user),
        ]);

        if($user->referal_id !== null) {
//            $user->referal->accounts()->where('currency', Account::CURRENCY_USD)->increment('balance', 10 * 100);
            $user->referal->deposits()->where('status', Deposit::STATUS_OPENED)->increment('referal_percent', 0.3);

            if($user->referal->referal !== null) {
//                $user->referal->referal->accounts()->where('currency', Account::CURRENCY_USD)->increment('balance', 5 * 100);
                $user->referal->referal->deposits()->where('status', Deposit::STATUS_OPENED)->increment('referal_percent', 0.15);

                if($user->referal->referal->referal !== null) {
//                    $user->referal->referal->referal->accounts()->where('currency', Account::CURRENCY_USD)->increment('balance', 2.5 * 100);
                    $user->referal->referal->referal->deposits()->where('status', Deposit::STATUS_OPENED)->increment('referal_percent', 0.1);
                }
            }
        }

        return redirect()->route('admin.users.edit', $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $deposit = Deposit::find($id);

        if($request->has('referal_percent')) {
            $deposit->update([
                'referal_percent' => $request->get('referal_percent'),
            ]);
        }

        if($request->has('percent')) {
            $deposit->update([
                'percent' => $request->get('percent'),
            ]);
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Deposit $deposit
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Deposit $deposit)
    {
        $deposit->delete();

        return back();
    }

    /**
     * @param Deposit $deposit
     * @return \Illuminate\Http\RedirectResponse
     */
    public function close(Deposit $deposit)
    {
        $deposit->update(['status' => Deposit::STATUS_CLOSED]);

        $deposit->user->accounts()->where('currency', $deposit->currency)->increment('balance', $deposit->balance);

        return back();
    }

    /**
     * @param Deposit $deposit
     * @return \Illuminate\Http\RedirectResponse
     */
    public function open(Deposit $deposit)
    {
        $deposit->update(['status' => Deposit::STATUS_OPENED]);

        //$deposit->user->accounts()->where('currency', $deposit->currency)->increment('balance', $deposit->balance);

        return back();
    }

    /**
     * @param User $user
     * @return float
     */
    protected function getReferalsPercent(User $user)
    {
        $referals = [];

        $referals[0] = $user->referals()->isDepositet()->get();

        $referals[1] = collect();

        foreach ($referals[0] as $referal) {
            $referals[1] = $referals[1]->merge($referal->referals()->isDepositet()->get());
        }

        $referals[2] = collect();

        foreach ($referals[1] as $referal) {
            $referals[2] = $referals[2]->merge($referal->referals()->isDepositet()->get());
        }

        return ((count($referals[0]) * 0.3) + (count($referals[1]) * 0.15) + (count($referals[2]) * 0.1)) ?? 0;
    }

    /**
     * @param $sum
     * @param string $currency
     * @return float
     */
    protected function getPercent($sum, $currency = Account::CURRENCY_RUB)
    {
        return Helpers::getTariff($sum, $currency)['percent'];
    }
}
