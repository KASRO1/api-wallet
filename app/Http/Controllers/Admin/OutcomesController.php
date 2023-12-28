<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Outcome;
use Illuminate\Http\Request;

class OutcomesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param Outcome $outcome
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function success(Outcome $outcome)
    {
        $outcome->update(['status' => Outcome::STATUS_SUCCESS]);

        return back()->with('success', true);
    }

    /**
     * @param Outcome $outcome
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function cancel(Outcome $outcome)
    {
        $outcome->update(['status' => Outcome::STATUS_CANCELED]);

        $account = $outcome->user->accounts->where('currency', $outcome->currency)->first();

        $account->decrement('balance', $outcome->amount);
        $account->save();

        return back()->with('success', true);
    }

    /**
     * @param Outcome $outcome
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function error(Outcome $outcome)
    {
        $outcome->update(['status' => Outcome::STATUS_ERROR]);

        $account = $outcome->user->accounts->where('currency', $outcome->currency)->first();

        $account->increment('balance', $outcome->amount);
        $account->save();

        return back()->with('success', true);
    }
}
