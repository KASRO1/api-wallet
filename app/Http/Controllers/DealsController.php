<?php

namespace App\Http\Controllers;

use App\ConversionHistory;
use Illuminate\Http\Request;

class DealsController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        $conversions = $user->conversions;
        $claims = $user->claims;
        $incomes = $user->incomes;
        $outcomes = $user->outcomes;

        //$transactions = array_merge($incomes,$outcomes,$conversions);

        $mode = in_array($request->get('mode'), ['incomes', 'outcomes', 'conversions', 'claims'])
            ? $request->get('mode')
            : 'incomes';

        return view('cabinet.new.deals', compact('user', 'mode', 'accounts', 'conversions', 'claims', 'incomes', 'outcomes'));
    }
}
