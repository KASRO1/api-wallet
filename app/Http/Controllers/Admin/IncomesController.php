<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Income;
use Illuminate\Http\Request;

class IncomesController extends Controller
{
    /**
     * @param Income $income
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Income $income, Request $request)
    {
        if ($request->has('requisites')) {
            $income->update(['requisites' => $request->get('requisites')]);
        } elseif ($request->has('comment')) {
            $income->update(['comment' => $request->get('comment')]);
        } else {
            $income->update(['amount' => $request->get('amount', $income->amount) * 100000]);
        }

        $income->save();

        return back()->with('success', true);
    }

    /**
     * @param Income $income
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function success(Income $income)
    {
        $income->update(['status' => Income::STATUS_SUCCESS]);

        $account = $income->user->accounts->where('currency', $income->currency)->first();

        $amount = $income->amount;

        if($income->promocode_id !== null) {
            $amount += ($income->amount / 100) * $income->promocode->value;
        }

        if($income->invite_bonus !== 0) {
            $amount += ($income->amount / 100) * $income->invite_bonus;
        }

        $account->increment('balance', $amount);
        $account->save();

        return back()->with('success', true);
    }

    /**
     * @param Income $income
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function cancel(Income $income)
    {
        $income->update(['status' => Income::STATUS_CANCELED]);

        return back()->with('success', true);
    }

    /**
     * @param Income $income
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function error(Income $income)
    {
        $income->update(['status' => Income::STATUS_ERROR]);

        return back()->with('success', true);
    }
}
