<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outcome extends Model
{
    const QIWI = 0;
    const PAYEER = 1;
    const PERFECT_MONEY = 2;
    const BITCOIN = 3;
    const CARD = 4;
    const ADVACASH = 5;
    const YANDEX = 6;
    const ETH = 7;
    const TETHER_TRC_20 = 8;
    const RIPPLE = 9;
    const LITECOIN = 10;
    const DASH = 11;
    const BITCOIN_CASH  = 12;
    const MONERO = 13;
    const BUSD = 14;
    const DODGE = 15;
    const ATOM = 16;
    const UMEE = 17;
    const BNB = 18;
    const USDC = 19;
    const DOT = 20;
    const TRON = 21;
    const TON = 22;
    const DAI = 23;

    const BLD = 24;

    const AVAX = 25;
    const KAVA = 26;
    const UNI = 27;
    const LINK = 28;
    const GRT = 29;
    const DYDX = 30;
    const DODO = 31;
    const COMP = 32;
    const DAO = 33;
    const AXL = 34;

    const APY = 35;
    const RUB_BANK = 36;
    const RUB_QIWI = 37;
    const RUB_PAYEER = 38;
    const RUB_YAD = 39;

    const STATUS_WAITING = 0;
    const STATUS_SUCCESS = 1;
    const STATUS_ERROR = 2;
    const STATUS_CANCELED = 3;

    /**
     * @return string[]
     */
    public static function getSystems()
    {
        return [
            //self::QIWI => 'Qiwi',
            //self::CARD => 'Банковская карта',
            //self::PAYEER => 'Payeer',
            self::PERFECT_MONEY => [
                'name'=>'Perfect Money',
                'short'=>'USD'
                ],
            self::BITCOIN => [
                'name'=>'Bitcoin',
                'short'=>'BTC'
            ],
            self::ETH => [
                'name'=>'Ethereum',
                'short'=>'ETH'
            ],
            self::TETHER_TRC_20 => [
                'name'=>'Tether (TRC-20)',
                'short'=>'USDT'
                ],
            self::RIPPLE => [
                'name'=>'Ripple (BEP-20)',
                'short'=>'XRP'
            ],
            self::LITECOIN => [
                'name'=>'Litecoin',
                'short'=>'LTC'
            ],
            self::DASH => ['name'=>'Dash','short'=>'DASH'],
            self::BITCOIN_CASH => ['name'=>'BitcoinCash','short'=>'BCH'],
            //self::MONERO => ['name'=>'Monero','short'=>'XMR'],
            self::BUSD=> ['name'=>'BUSD (BEP-20)','short'=>'BUSD'],
            self::DODGE=> ['name'=>'Dogecoin','short'=>'DOGE'],
            self::ATOM=> ['name'=>'Cosmos','short'=>'ATOM'],
            self::UMEE=> ['name'=>'UMEE','short'=>'UMEE'],
            self::BNB=> ['name'=>'BNB','short'=>'BNB'],
            self::USDC=> ['name'=>'USDC (BEP-20)','short'=>'USDC'],
            self::DOT=> ['name'=>'Polkadot (BEP-20)','short'=>'DOT'],
            self::TRON=> ['name'=>'TRON (BEP-20)','short'=>'TRX'],
            self::TON=> ['name'=>'TON (BEP-20)','short'=>'TON'],
            self::APY => ['name'=>'APY','short'=>'APY'],
            self::BLD => ['name'=>'Agoric','short'=>'BLD'],
            
            self::AVAX => ['name'=>'Avalanche','short'=>'AVAX'],
            self::KAVA => ['name'=>'Kava','short'=>'KAVA'],
            self::UNI => ['name'=>'Uniswap','short'=>'UNI'],
            self::LINK => ['name'=>'Chainlink','short'=>'LINK'],
            self::GRT => ['name'=>'The Graph','short'=>'GRT'],
            self::DYDX => ['name'=>'dYdX','short'=>'DYDX'],
            self::DODO => ['name'=>'DODO','short'=>'DODO'],
            self::COMP => ['name'=>'Compound','short'=>'COMP'],
            self::DAO => ['name'=>'DAO Maker','short'=>'DAO'],
            self::AXL => ['name'=>'Axelar','short'=>'AXL'],

            self::RUB_BANK => ['name'=>'Bank Card','short'=>'RUB'],
            self::RUB_QIWI => ['name'=>'Qiwi','short'=>'RUB'],
            self::RUB_PAYEER => ['name'=>'Payeer','short'=>'RUB'],
            self::RUB_YAD => ['name'=>'Yandex Money','short'=>'RUB']

        ];
    }

    /**
     * @return array[]
     */
    public static function currencyForSystem()
    {
        return [
            self::QIWI => [Account::CURRENCY_RUB, Account::CURRENCY_USD],
            self::PAYEER => [Account::CURRENCY_RUB, Account::CURRENCY_USD, Account::CURRENCY_EUR],
            self::PERFECT_MONEY => [Account::CURRENCY_USD, Account::CURRENCY_EUR],
            self::CARD => [Account::CURRENCY_RUB],
            self::BITCOIN => [Account::CURRENCY_BTC_ONE],
            self::ETH => [Account::CURRENCY_BTC_TWO],
            self::TETHER_TRC_20 => [Account::CURRENCY_USD],
            self::RIPPLE => [Account::CURRENCY_USD],
            self::LITECOIN => [Account::CURRENCY_USD],
            self::DASH => [Account::CURRENCY_USD],
            self::BITCOIN_CASH => [Account::CURRENCY_USD],
        ];
    }

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
}
