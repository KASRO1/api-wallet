<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sonata\GoogleAuthenticator\GoogleAuthenticator;

class GoogleAuthenticatorController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function connect(Request $request)
    {
        $user = auth()->user();

        $ga = new GoogleAuthenticator();
        $code = $ga->getCode($user->ga_secret);
        if($code != $request->get('code')) {
            return back()->with('ga_error', true);
        }

       if ($user->is2FA == false) {
            $user->is2FA = true;
            $user->save();
        } else {
            $user->is2FA = false;
            $user->save();
        }

        return back();        
    }

}
