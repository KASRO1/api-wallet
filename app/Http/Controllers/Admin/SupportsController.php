<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SupportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Support $support
     * @return \Illuminate\Http\Response
     */
    public function index(Support $support)
    {
        $supports = $support->latest('created_at')->paginate(50);

        return view('admin.supports.index', compact('supports'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Support $support
     * @return void
     * @throws \Exception
     */
    public function destroy(Support $support)
    {
        $support->delete();

        return back()->with('success', true);
    }
}
