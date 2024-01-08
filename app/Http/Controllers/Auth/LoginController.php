<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Sonata\GoogleAuthenticator\GoogleAuthenticator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * @param Request $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        $login = $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );

        if($login) {
            $user = auth()->user();
            if($user->is_banned == 1) {
                session()->flash('banned');
                auth()->logout();
                return false;
            }
            if($user->is2FA) {
                if(! empty($request->get('ga_code'))) {
                    $ga = new GoogleAuthenticator();
                    $code = $ga->getCode($user->ga_secret);

                    if($code == $request->get('ga_code')) {
                        return true;
                    }
                }

                session()->flash('2fa_needed', true);
                auth()->logout();;

                return false;
            }
        }

        return $login;
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        $user->update([
            'last_login_ip' => $request->getClientIp(),
            'last_login_time' => now(),
        ]);
    }
}
