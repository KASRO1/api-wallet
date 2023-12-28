<?php

namespace App\Http\Controllers;

use App\TrackingItem;
use Illuminate\Support\Facades\DB;

class TrackingController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function __invoke()
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        /*$tracking = TrackingItem::query()
            ->where(function ($query) use ($user) {
                return $query
                    ->where('user_id', $user->id)
                    ->orWhereNull('user_id');
            })
            ->where('datetime', '<', now())
            ->latest('datetime')
            ->get();*/
        $tracking = DB::table('tracking_items')->whereDate('datetime', '<=', now())->get();

        //$tracking = DB::table('Bitcoin_Historical_Data')
        $trackingValues = $tracking->pluck('close')->map(function ($value) {
            $value = $value /100;
            return "{$value}";
        })->implode(', ');
        $trackingLow = $tracking->pluck('low')->map(function ($value) {
            $value = $value /100;
            return "{$value}";
        })->implode(', ');
        $trackingHigh = $tracking->pluck('high')->map(function ($value) {
            $value = $value /100;
            return "{$value}";
        })->implode(', ');
        $trackingOpen = $tracking->pluck('open')->map(function ($value) {
            $value = $value /100;
            return "{$value}";
        })->implode(', ');

        $trackingDates = $tracking->pluck('datetime')->map(function ($value) {
            return strtotime($value)."000";
        })->implode('; ');

        return view('cabinet.tracking', compact('accounts', 'user', 'tracking', 'trackingValues','trackingLow', 'trackingHigh','trackingOpen', 'trackingDates'));
    }
}
