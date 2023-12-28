<?php

namespace App\Http\Controllers;

use App\Outcome;
use Illuminate\Http\Request;

class RequisiteController extends Controller
{
    /**
     * @var array
     */
    protected $paymentSystems = [
        Outcome::QIWI,
        Outcome::PAYEER,
        Outcome::PERFECT_MONEY,
        Outcome::BITCOIN,
        Outcome::CARD,
        Outcome::ADVACASH,
        Outcome::YANDEX,
        Outcome::ETH,
    ];

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function show()
    {
        $user = auth()->user();

        $requisites = $user->requisites()->get()->keyBy(function ($item) {
            return $item->type .'_wallet';
        })->map(function ($item) {
            return $item->value;
        });

        $wallets = $this->paymentSystems;

        foreach ($wallets as $wallet) {
            if(! $requisites->has($wallet .'_wallet')) {
                $requisites->put($wallet .'_wallet', null);
            }
        }

        $accounts = $user->accounts;

        return view('cabinet.new.requisites', compact('requisites', 'accounts', 'user'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $wallets = array_keys(Outcome::getSystems());

        $data = $this->validate($request, [
            'fin_password' => ['required', 'string'],
        ]);

        $user = auth()->user();

        if($data['fin_password'] != $user->fin_password) {
            return back()->with('error', true);
        }

        foreach ($wallets as $wallet) {
            if($request->has($wallet .'_wallet')) {
                $user->requisites()->updateOrCreate([
                    'type' => $wallet
                ], [
                    'value' => $request->get($wallet .'_wallet') ?? "",
                ]);
            }
        }

        return back();
    }
}
