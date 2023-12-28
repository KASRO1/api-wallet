<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Promocode;
use Illuminate\Http\Request;

class PromocodesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Promocode $promocode
     * @return \Illuminate\Http\Response
     */
    public function index(Promocode $promocode)
    {
        $promocodes = $promocode->latest()->paginate(50);

        return view('admin.promocodes.index', compact('promocodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.promocodes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'string'],
            'code' => ['required', 'string'],
            'value' => ['required', 'numeric'],
        ]);

        Promocode::create($data);

        return redirect()->route('admin.promocodes.index')->with('success', true);
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
     * @param Promocode $promocode
     * @return void
     */
    public function edit(Promocode $promocode)
    {
        return view('admin.promocodes.edit', compact('promocode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Promocode $promocode
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Promocode $promocode)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'string'],
            'code' => ['required', 'string'],
            'value' => ['required', 'numeric'],
        ]);

        $promocode->update($data);

        return redirect()->route('admin.promocodes.edit', $promocode)->with('success', true);
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
}
