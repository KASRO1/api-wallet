<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Income;
use App\Promocode;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function show(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @param Promocode $promocode
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Promocode $promocode)
    {
        $users = $user->all();

        $promocodes = $promocode->all();

        $referals = [];

        $referals[0] = $user->referals;

        $referals[1] = collect();

        foreach ($referals[0] as $referal) {
            $referals[1] = $referals[1]->merge($referal->referals);
        }

        $referals[2] = collect();

        foreach ($referals[1] as $referal) {
            $referals[2] = $referals[2]->merge($referal->referals);
        }

        $percents = DB::table('ref_percent')->where('user_id', $user->id)->get()->first();


        return view('admin.users.edit', compact('user', 'users', 'promocodes', 'percents' , 'referals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User $user
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, User $user)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['nullable', 'string'],
            'referal_id' => ['nullable', 'exists:users,id'],
            'promocode_id' => ['nullable', 'exists:promocodes,id'],
            'special_promo_percent' => ['nullable', 'numeric'],
            'special_promo_date' => ['nullable', 'date'],
            'special_ido_amount' => ['nullable', 'numeric'],
        ]);

        if (isset($data['password']) ){
            $data['password'] = Hash::make($data['password']);
        }

        $user->update(array_filter($data));

        return back()->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back();
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(User $user)
    {
        $password = Str::random(10);
        //$fin_password = Str::random(10);

        $user->update(['password' => Hash::make($password)]);
        //$user->update(['fin_password' => $fin_password]);

        return back()->with(['password' => $password]);
    }

    public function referralPercent(Request $request, User $user){
        $data = $this->validate($request, [
            'percent' => ['required', 'max:100'],
            'refLevel' => ['required', 'max:3', 'min:1']
        ]);

        $refLevel = $data['refLevel'];
        if(DB::table('ref_percent')->where('user_id', $user->id)->get()->isEmpty()){
            DB::table('ref_percent')->insert([
                'ref'.$refLevel => $data['percent'] ,
                'user_id'=> $user->id]);
        }else{
            DB::table('ref_percent')->where('user_id', $user->id)->update([
                'ref'.$refLevel => $data['percent']
            ]);
        }

        return back()->with('success', true);
    }

    public function changeRequisites(Request $request, User $user){
        $data = $this->validate($request,[
           'system' => ['required', 'in:'.implode(',',Income::avaliableSystems())],
            'requisites' => ['required']
        ]);
        DB::table('requisites')->where('user_id',$user->id)->where('type',$data['system'])->update([
            'value' => $data['requisites']
        ]);

        return back()->with('success', true);
    }

    public function banUser( User $user){
        DB::table('users')->where('id',$user->id)->update([
            'is_banned' => !$user->is_banned
        ]);
        return back()->with('success', true);
    }

    public function specialProduct(User $user){
        $user->update(['special_product'=>!$user->special_product]);
        return back()->with('success', true);
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verify(User $user)
    {
        $user->update(['is_verified' => 2]);

        return back();
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function notVerify(User $user)
    {
        $user->update(['is_verified' => 0]);

        return back();
    }
}
