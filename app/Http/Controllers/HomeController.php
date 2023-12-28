<?php

namespace App\Http\Controllers;

use App\Calendar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $start = now()->startOfMonth()->startOfWeek();
        $end = now()->endOfMonth()->endOfWeek();

        $calendar = collect();

        for($current = $start->clone(); $current->getTimestamp() < $end->getTimestamp(); $current->addDay()) {
            $date = Calendar::query()->where('date', '=', $current->format('Y-m-d'))->first();
            $calendar->put($current->format('d-m'), [
                'date' => $current->clone(),
                'value' => $date,
            ]);
        }

        return view('welcome', compact('calendar'));
    }
}
