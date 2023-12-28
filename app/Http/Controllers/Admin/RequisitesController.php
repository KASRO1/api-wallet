<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Requisite;

class RequisitesController extends Controller
{
    /**
     * @param Requisite $requisite
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function delete(Requisite $requisite)
    {
        $requisite->delete();

        return back();
    }
}
