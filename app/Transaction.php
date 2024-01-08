<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //

    protected $fillable = [
        'order_id',
        'type',
        'currency',
        'user_id',
        'amount',
        'status',
        'wallet',
    ];
}
