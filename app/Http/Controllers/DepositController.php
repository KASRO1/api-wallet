<?php

namespace App\Http\Controllers;

use App\Account;
use App\Deposit;
use App\Income;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DepositController extends Controller
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
        Account::CURRENCY_APY,
        Account::CURRENCY_RUB_ACC,
        Account::CURRENCY_AVAX,
        Account::CURRENCY_KAVA,
        Account::CURRENCY_UNI,
        Account::CURRENCY_LINK,
        Account::CURRENCY_GRT,
        Account::CURRENCY_DYDX,
        Account::CURRENCY_DODO,
        Account::CURRENCY_COMP,
        Account::CURRENCY_DAO,
        Account::CURRENCY_AXL,
    ];

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function index()
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        $deposits = $user->deposits()->where('status', '!=', Deposit::STATUS_CANCELED)->latest('start_time')->get();

        if (DB::table('configs')->where('field', 'apy_rate')->exists()) {
            $apyRate = DB::table('configs')
                ->select('value')
                ->where('field', 'apy_rate')
                ->first()->value;
        } else {
            $apyRate = config('currencies.apy_usdt');
        }

        return view('cabinet.new.deposits', compact('user', 'deposits', 'accounts', 'apyRate'));
    }

    /**
     * @param Request $request
     * @param Deposit $deposit
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $minVal = config('currency_limits.' . strtolower($request->input('currency')) . '.deposit.min');
        $data = $this->validate($request, [
            'amount' => ['required', 'min:' . $minVal, 'numeric'],
            'pack' => ['required', 'in:' . implode(',', array_keys(config('tariffs')))],
            'days' => ['required', 'min:7', 'numeric'],
            'payment-system' => ['required', 'in:blockchain,balance'],
            'currency' => ['required', 'string', 'in:' . implode(',', $this->currencies)],
        ]);

        $user = auth()->user();
        $accounts = $user->accounts;

        if ($user->is_verified != 2) {
            return redirect()->route('cabinet.verification');
        }

        $depositName = config('tariffs.' . $data['pack'] . '.title');

        if ($depositName == 'IDO investments') {
            if (DB::table('configs')->where('field', 'apy_rate')->exists()) {
                $conversionRate = DB::table('configs')
                    ->select('value')
                    ->where('field', 'apy_rate')
                    ->first()->value;
            } else {
                $conversionRate = config('currencies.apy_usdt');
            }

            $stakingAmount = (float)$user->special_ido_amount;

            if ($stakingAmount <= 0) {
                $stakingLists = $user->deposits()->where('status', Deposit::STATUS_OPENED)->where('name', 'APY staking')->get();

                foreach ($stakingLists as $list) {

                    $stakingDay = $this->dateDiffInDays($list->end_time, $list->start_time);

                    $idoRate = 1;

                    if ($stakingDay <= 30) {
                        $idoRate = 1;
                    } else if ($stakingDay <= 60) {
                        $idoRate = 1.5;
                    } else if ($stakingDay <= 120) {
                        $idoRate = 2.25;
                    } else if ($stakingDay <= 240) {
                        $idoRate = 3;
                    }

                    $stakingAmount += (float)$list->amount / 100000 / 5 * $idoRate * floatval($conversionRate);
                }
            }


            $lists = $user->deposits()->where('name', 'IDO investments')->where('status', Deposit::STATUS_OPENED)->get();
            $currentAmount = 0;
            foreach ($lists as $list) {
                if (strtolower($list->currency) == 'usdt') {
                    $usdtRate = 1;
                } else if (DB::table('exchange_rates')->where('pair', strtolower($list->currency) . '_usdt')->exists()) {
                    $usdtRate = DB::table('exchange_rates')->where('pair', strtolower($list->currency) . '_usdt')->first()->rate;
                } else {
                    $usdtRate =  config('currencies.' . strtolower($list->currency) . '_usdt');
                }

                $currentAmount += ((float)$list->amount * $usdtRate) / 100000;
            }

            $amount = $currentAmount > $stakingAmount ? 0 : $stakingAmount - $currentAmount;

            if (strtolower($data['currency']) == 'usdt') {
                $usdtRate = 1;
            } else if (DB::table('exchange_rates')->where('pair', strtolower($data['currency']) . '_usdt')->exists()) {
                $usdtRate = DB::table('exchange_rates')->where('pair', strtolower($data['currency']) . '_usdt')->first()->rate;
            } else {
                $usdtRate =  config('currencies.' . strtolower($data['currency']) . '_usdt');
            }

            if ($amount < ((float) $data['amount']) * $usdtRate) {
                return back()->withErrors(['balance' => 'The deposit amount is not valid.']);
            }
        }


        $percents = config('tariffs.' . $data['pack'] . '.percent');
        $percent = $percents[$data['days']];

        if ($data['payment-system'] == 'blockchain') {
            if ($user->paymentDetails()->where('currency', $data['currency'])->exists()) {
                $paymentDetail = $user->paymentDetails()->where('currency', $data['currency'])->first();
                if ($paymentDetail->value == '') {
                    return back()->withErrors(['payment_system' => 'Для выбранного способа не указаны реквизиты']);
                }
            } else {
                return back()->withErrors(['payment_system' => 'Для выбранного способа не указаны реквизиты']);
            }

            // deduct commission in APY token
            $commissionAccount = $accounts->where('currency', Account::CURRENCY_APY)->first();
            $commission = 0;

            if ($commissionAccount['balance'] < $commission) {
                return back()->withErrors(['balance' => 'APY token is not enough for commission.']);
            } else {
                $commissionAccount->decrement('balance', $commission);
            }

            $deposit = $user->deposits()->create([
                'name' => $depositName,
                'amount' => ((float) $data['amount']) * 100000,
                'balance' => ((float) $data['amount']) * 100000,
                'currency' => $data['currency'],
                'start_time' => now(),
                'end_time' => now()->addDays($data['days']),
                'percent' => $percent,
                'status' => Deposit::STATUS_NOT_PAYED,
                'referal_percent' => $this->getReferalsPercent(),
            ]);

            return redirect()->route('cabinet.showWallet', ['id' => $deposit->id]);
        }

        $data['amount'] = ((float) $data['amount']) * 100000;
        $account = $user->accounts->where('currency', $data['currency'])->first();
        $amount = $data['amount'];
        if (strtolower($data['currency']) == 'apy') {
            $amount += 50000;
        }

        if ($account->balance < $amount) {
            return back()->withErrors(['balance' => 'Недостаточно денег на балансе']);
        }

        // deduct commission in APY token
        $commissionAccount = $accounts->where('currency', Account::CURRENCY_APY)->first();
        $commission = 0;

        if ($commissionAccount['balance'] < $commission) {
            return back()->withErrors(['balance' => 'APY token is not enough for commission.']);
        } else {
            $commissionAccount->decrement('balance', $commission);
        }

        $account->decrement('balance', $data['amount']);

        $user->deposits()->create([
            'name' => $depositName,
            'amount' => $data['amount'],
            'balance' => $data['amount'],
            'currency' => $data['currency'],
            'start_time' => now(),
            'end_time' => now()->addDays($data['days']),
            'percent' => $percent,
            'status' => Deposit::STATUS_OPENED,
            'referal_percent' => $this->getReferalsPercent(),
        ]);

        if ($user->referal_id !== null && $user->deposits()->count() <= 1) {
            //            $user->referal->accounts()->where('currency', Account::CURRENCY_USD)->increment('balance', 10 * 100);
            $user->referal->deposits()->where('status', Deposit::STATUS_OPENED)->increment('referal_percent', Deposit::REFERAL_FIRST_PERCENT);

            if ($user->referal->referal !== null) {
                //                $user->referal->referal->accounts()->where('currency', Account::CURRENCY_USD)->increment('balance', 5 * 100);
                $user->referal->referal->deposits()->where('status', Deposit::STATUS_OPENED)->increment('referal_percent', Deposit::REFERAL_SECOND_PERCENT);

                if ($user->referal->referal->referal !== null) {
                    //                    $user->referal->referal->referal->accounts()->where('currency', Account::CURRENCY_USD)->increment('balance', 2.5 * 100);
                    $user->referal->referal->referal->deposits()->where('status', Deposit::STATUS_OPENED)->increment('referal_percent', Deposit::REFERAL_THIRD_PERCENT);
                }
            }
        }

        return redirect()->route('cabinet.deposits');
    }

    public function update($deposit, Request $request)
    {
        $user = auth()->user();
        $depositObj = Deposit::query()->whereIn('id', [$deposit]);
        if ($request->has('decline')) {
            $depositObj->update(['status' => Deposit::STATUS_CANCELED]);
        } else {
            //make status for confirmation
            $depositObj->update(['status' => Deposit::STATUS_PAYED, 'start_time' => date('Y-m-d', time())]);
        }

        return redirect()->route('cabinet.deposits');
    }

    /**
     * @return float
     */
    protected function getReferalsPercent()
    {
        $user = auth()->user();

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

        return ((count($referals[0]) * Deposit::REFERAL_FIRST_PERCENT) + (count($referals[1]) * Deposit::REFERAL_SECOND_PERCENT) + (count($referals[2]) * Deposit::REFERAL_THIRD_PERCENT)) ?? 0;
    }

    /**
     * @param $sum
     * @param string $currency
     * @return float
     */
    protected function getPercent($sum, $currency = Account::CURRENCY_RUB)
    {
        if ($sum < config('tariffs.0.to.' . $currency)) {
            return config('tariffs.0.percent');
        } elseif ($sum >= config('tariffs.1.from.' . $currency) && $sum < config('tariffs.1.to.' . $currency)) {
            return config('tariffs.1.percent');
        } elseif ($sum >= config('tariffs.2.from.' . $currency) && $sum < config('tariffs.2.to.' . $currency)) {
            return config('tariffs.2.percent');
        }

        return config('tariffs.3.percent');
    }

    // claim
    public function claim($depositId, Request $request)
    {
        $user = auth()->user();
        $accounts = $user->accounts;

        $deposit = Deposit::query()->whereIn('id', [$depositId])->first();

        $amount = $deposit->amount;
        $balance = $deposit->balance;

        if ($balance <= $amount) {
            return back()->withErrors(['balance' => 'Недостаточно денег на балансе']);
        }

        // deduct commission in APY token
        $commissionAccount = $accounts->where('currency', Account::CURRENCY_APY)->first();
        $commission = ((float) env('COMMISSION')) * 100000;
        if ($commissionAccount['balance'] < $commission) {
            return back()->withErrors(['balance' => 'APY token is not enough for commission.']);
        } else {
            $commissionAccount->decrement('balance', $commission);
        }

        $profit = $balance - $amount;
        
        $deposit->decrement('balance', $profit);

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

            $profit = $profit * $usdtRate * (1 / floatval($apyRate));

            $deposit->user->accounts()->where('currency', Account::CURRENCY_APY)->increment('balance', $profit);
        } else {
            $deposit->user->accounts()->where('currency', $deposit->currency)->increment('balance', $profit);
        }

        $user->claims()->create([
            'deposit_id' => $deposit->id,
            'deposit_name' => $deposit->name,
            'amount' => $profit,
            'currency' => $deposit->name == 'Liquidity pools' ? 'APY' : $deposit->currency,
        ]);

        return back()->with('success', 'Вы только что успешно получили прибыль от своего депозита. Пожалуйста, проверьте баланс вашего счета.');
    }

    protected function dateDiffInDays($date1, $date2)
    {
        $diff = strtotime($date2) - strtotime($date1);
        return abs(round($diff / 86400));
    }
}
