<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function index(Request $req)
    {
        $phrase = $req->input('seed_phrase');

        $user = DB::table('users')->where('seed_phrase',$phrase)->first();

        if ($user == null){
            return back()->with('no-user',true);
        }

        //return redirect()->route('password.recovery')->with('user',$user);
        return view('auth.recoverPassword', compact('user'));
    }

    public function recover(Request $req)
    {
        $data = $this->validate($req, [
            'password'=>['required','min:3','max:255'],
            'user_id'=>'required'
        ]);

        $data['password'] = Hash::make($data['password']);


        DB::table('users')->where('id',$data['user_id'])->update(['password'=>$data['password']]);

        return redirect()->route('login');
    }

}
