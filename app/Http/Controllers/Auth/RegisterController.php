<?php

namespace App\Http\Controllers\Auth;

use App\Account;
use App\Deposit;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GoogleAuthenticatorController;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Sonata\GoogleAuthenticator\GoogleAuthenticator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::PHRASE;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
            'fin_password' => ['required', 'string', 'min:3'],
            'invite' => ['nullable', 'string'],
            'agreement' => ['required', 'boolean',],
//            'finance_agreement' => ['required', 'boolean'],
            'country' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $referal = null;

        if(isset($data['invite']) && ! is_null($data['invite'])) {
            $referal = User::where('code', $data['invite'])->first();

            if($referal) {
                $referal = $referal->id;
            }
        }
        $words = file(config_path('words_alpha.txt'),FILE_IGNORE_NEW_LINES);
        $keyPhraseKeys = array_rand($words,14);
        $keyPhrase = array();
        foreach ($keyPhraseKeys as $key){
            array_push($keyPhrase,$words[$key]);
        }
        $ga = new GoogleAuthenticator();
        $secret = $ga->generateSecret();
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'fin_password' => $data['fin_password'],
            'password' => Hash::make($data['password']),
            'referal_id' => $referal,
            'invite_bonus' => $referal === null ? 0 : rand(1, 10),
            'code' => Str::limit(md5(time()), 10, ''),
            'last_login_ip' => request()->getClientIp(),
            'last_login_time' => now(),
            'country' => $data['country'],
            'ga_secret' => $secret,
            'seed_phrase'=>implode(' ', $keyPhrase)
        ]);
    }
}
