<?php

namespace App\Http\Controllers\Admin;

use App\Account;
use App\Calendar;
use App\Deposit;
use App\Config;
use App\Http\Controllers\Controller;
use App\Income;
use App\Outcome;
use App\TrackingItem;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tracking = TrackingItem::query()->latest('datetime')->get();

        $users = User::all();

        $incomes = Income::query()
            ->with('user')
            ->whereIn('status', [Income::STATUS_PAID_BY_USER, Income::STATUS_WAITING])
            ->latest()
            ->get();
        $deposits = Deposit::query()
            ->with('user')
            ->whereIn('status', [Deposit::STATUS_NOT_PAYED, Deposit::STATUS_PAYED, Deposit::STATUS_CANCELED])
            ->latest()
            ->get();

        $forVerifications = User::query()
            ->where('is_verified', 1)
            ->latest('updated_at')
            ->get();

        $forWithdrawals = Outcome::query()
            ->select('user_id')
            ->with('user')
            ->where('status', 0)
            ->groupBy('user_id')
            ->get();

        if (!Config::query()->where('field', 'apy_rate')->exists()) {
            $data = [
                'field' => 'apy_rate',
                'value' => floatval(config('currencies.apy_usdt'))
            ];
            Config::create($data);
        }

        if (!Config::query()->where('field', 'preference_currency')->exists()) {
            $data = [
                'field' => 'preference_currency',
                'value' => ''
            ];
            Config::create($data);
        }

        if (!Config::query()->where('field', 'preference_currency_rate')->exists()) {
            $data = [
                'field' => 'preference_currency_rate',
                'value' => ''
            ];
            Config::create($data);
        }

        $apy_rate = Config::query()
            ->select('value')
            ->where('field', 'apy_rate')
            ->first()->value;

        $preference_currency = Config::query()
            ->select('value')
            ->where('field', 'preference_currency')
            ->first()->value;
    
        $preference_currency_rate = Config::query()
            ->select('value')
            ->where('field', 'preference_currency_rate')
            ->first()->value;



        return view('admin.dashboard', compact('tracking', 'deposits', 'users', 'incomes', 'forVerifications', 'forWithdrawals', 'apy_rate', 'preference_currency', 'preference_currency_rate'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if (empty($request->input('datetime'))) {
            return back();
        }

        TrackingItem::updateOrCreate([
            'datetime' => $request->input('datetime'),
            'user_id' => $request->input('user_id') ?? null,
        ], [
            'high' => $request->input('high'),
            'low' => $request->input('low'),
            'open' => $request->input('open'),
            'close' => $request->input('close'),
        ]);

        return redirect()->route('admin.dashboard');
    }
}
