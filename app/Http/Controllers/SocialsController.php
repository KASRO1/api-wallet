<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class SocialsController extends Controller
{
    public function show()
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        return view('cabinet.new.socials', compact('accounts', 'user'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        $user->update(['socials' => $request->get('socials')]);

        return back();
    }
}
