<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    //

    protected $fillable = [
        'currency',
        'address',
        'user_id'
    ];
}
