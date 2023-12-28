<?php

namespace App\Http\Controllers;

use App\Account;
use App\Income;
use App\Outcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncomeController extends Controller
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
        Account::CURRENCY_DOT,
        Account::CURRENCY_ATOM,
        Account::CURRENCY_BCH,
        Account::CURRENCY_XMR,
        Account::CURRENCY_UMEE,
        Account::CURRENCY_BLD,
        Account::CURRENCY_APY,
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

        $incomes = $user->incomes->reverse();

        $accounts = $user->accounts;

        return view('cabinet.income.index', compact('user', 'incomes', 'accounts'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $min = config('currency_limits.'.strtolower($request->input('currency')).'.income.min');
        $data = $this->validate($request, [
            'amount'=>['required','numeric','min:'.$min],
            'currency' => ['required', 'string', 'in:'. implode(',', $this->currencies)],
            'payment_system' => ['required', 'string'],
        ]);

        $user = auth()->user();

        if ($user->paymentDetails()->where('currency', $data['currency'])->exists()) {
            $paymentDetail = $user->paymentDetails()->where('currency', $data['currency'])->first();
            if ($paymentDetail->value == '') {
                return back()->withErrors(['payment_system' => 'Для выбранного способа не указаны реквизиты']);
            }
            $data['payment_detail'] = $paymentDetail->value;
        } else {
            return back()->withErrors(['payment_system' => 'Для выбранного способа не указаны реквизиты']);
        }

        if($user->promocode_id !== null && ! $user->promocode_used) {
            $data['promocode_id'] = $user->promocode_id;
        }

        if($user->incomes()->count() == 0) {
            // $data['invite_bonus'] = $user->invite_bonus;
        }

        if(isset($data['invite_bonus']) && isset($data['promocode_id'])) {
            if ($data['invite_bonus'] > $data['promocode_id']) {
                unset($data['promocode_id']);
            } else {
                unset($data['invite_bonus']);
            }
        }

        $data['amount'] = $data['amount'] * 100000;

        $income = $user->incomes()->create($data);

        if(isset($data['promocode_id'])) {
            $user->update(['promocode_used' => true]);
        }

        $user->update(['promocode_id' => null, 'promocode_used' => false]);

        return redirect()->route('cabinet.income.show',['id'=>$income->id]);
    }

    /**
     * @param Income $income
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function requisites(Income $income)
    {
        $user = auth()->user();

        if($user->is_verified != 2) {
            return redirect()->route('cabinet.verification', ['must_verify' => 'true']);
        }

        $accounts = $user->accounts;

        $requisites = $income->requisites ?? config('requisites.'. $income->payment_system .'.'. $income->currency);

        $comment = $income->comment ?? config('requisitesComments.'. $income->payment_system .'.'. $income->currency);

        return view('cabinet.income.requisites', compact('user', 'income', 'accounts', 'requisites', 'comment'));
    }

    /**
     * @param Income $income
     * @param Request $request
     * @return string
     */
    public function update($id, Request $request)
    {
        //$income = DB::table('incomes')->where('id',$id)->first();
        //$income = Income
        if($request->has('decline')) {
            DB::table('incomes')->where('id',$id)->update(['status' => Income::STATUS_CANCELED]);
        } else {
            DB::table('incomes')->where('id',$id)->update(['status' => Income::STATUS_PAID_BY_USER]);
        }

        return redirect()->route('cabinet.deals', ['mode=incomes']);
    }
}
