<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    const STATUS_OPENED = 1;
    const STATUS_CLOSED = 2;
    const STATUS_CANCELED = 3;
    const STATUS_NOT_PAYED = 4;
    const STATUS_PAYED = 5;

    const REFERAL_FIRST_PERCENT = 0.01;
    const REFERAL_SECOND_PERCENT = 0.005;
    const REFERAL_THIRD_PERCENT = 0.0025;

    /** The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        //
    ];

    /**
     * Guarded attributes.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'created_at',
    ];

    /**
     * Date casts.
     *
     * @var array
     */
    protected $dates = [
        'updated_at',
        'created_at',
        'start_time',
        'end_time',
    ];

    /**
     * Appends to JSON.
     *
     * @var array
     */
    protected $appends = [
        //
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        //
    ];

    /**
     * The relationship counts that should be eager loaded on every query.
     *
     * @var array
     */
    protected $withCount = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function claims()
    {
        return $this->hasMany(ClaimHistory::class);
    }
}
