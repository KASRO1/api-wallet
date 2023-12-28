<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    const CURRENCY_USD = 'usd';
    const CURRENCY_RUB = 'rub';
    const CURRENCY_EUR = 'eur';

    const CURRENCY_BTC_ONE = 'btc_one';
    const CURRENCY_BTC_TWO = 'btc_two';
    const CURRENCY_ETH = 'ETH';
    const CURRENCY_BTC = 'BTC';
    const CURRENCY_BCH = 'BCH';
    const CURRENCY_DASH = 'DASH';
    const CURRENCY_ATOM = 'ATOM';
    const CURRENCY_XMR = 'XMR';
    const CURRENCY_DOT = 'DOT';
    const CURRENCY_LTC = 'LTC';
    const CURRENCY_DOGE = 'DOGE';
    const CURRENCY_UMEE = 'UMEE';
    const CURRENCY_BNB = 'BNB';
    const CURRENCY_XRP = 'XRP';
    const CURRENCY_TRX = 'TRX';
    const CURRENCY_USDT = 'USDT';
    const CURRENCY_USDC = 'USDC';
    const CURRENCY_BUSD = 'BUSD';
    const CURRENCY_TON = 'TON';
    const CURRENCY_USD_PM = 'USD';
    const CURRENCY_BLD = 'BLD';

    const CURRENCY_AVAX = 'AVAX';
    const CURRENCY_KAVA = 'KAVA';
    const CURRENCY_UNI = 'UNI';
    const CURRENCY_DAI = 'DAI';
    const CURRENCY_LINK = 'LINK';
    const CURRENCY_GRT = 'GRT';
    const CURRENCY_DYDX = 'DYDX';
    const CURRENCY_DODO = 'DODO';
    const CURRENCY_COMP = 'COMP';
    const CURRENCY_DAO = 'DAO';
    const CURRENCY_AXL = 'AXL';

    const CURRENCY_APY = 'APY';
    const CURRENCY_RUB_ACC = 'RUB';

    const CURRENCY_RUB_BANK = 'RUB_BANK';
    const CURRENCY_RUB_QIWI = 'RUB_QIWI';
    const CURRENCY_RUB_PAYEER = 'RUB_PAYEER';
    const CURRENCY_RUB_YAD = 'RUB_YAD';

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
     * @return float|int
     */
    public function getAmountAttribute()
    {
        return number_format($this->balance / 100000, 2, '.', ' ');
    }

    /**
     * @return string
     */
    public function getExtendedAmountAttribute()
    {
        return number_format($this->balance / 100000, 4, '.', ' ');
    }

    /**
     * @return float|int
     */
    public function getDepositsAttribute()
    {
        return number_format($this->getDepositsBalanceAttribute(), 2, '.', ' ');
    }

    /**
     * @return float|int
     */
    public function getDepositsSumBalanceAttribute()
    {
        return $this->user->deposits()
            ->where('status', Deposit::STATUS_OPENED)
            ->where('currency', $this->currency)->sum('balance') / 100000;
    }

    /**
     * @return float|int
     */
    public function getExtendedDepositsAttribute()
    {
        return number_format($this->getDepositsBalanceAttribute(), 4, '.', ' ');
    }

    /**
     * @return float|int
     */
    public function getDepositsBalanceAttribute()
    {
        return $this->user->deposits()
                ->where('status', Deposit::STATUS_OPENED)
                ->where('currency', $this->currency)->sum('amount') / 100000;
    }

    /**
     * @return float|int
     */
    public function getBalanceAndDeposits()
    {
        return $this->getDepositsBalanceAttribute() + ($this->balance / 100000);
    }
}
