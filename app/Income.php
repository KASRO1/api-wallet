<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    const QIWI = 0;
    const PAYEER = 1;
    const PERFECT_MONEY = 2;
    const BITCOIN = 3;
    const CARD = 4;
    const ADVACASH = 5;
    const YANDEX = 6;
    const ETH = 7;
    const TETHER_ERC_20 = 8;
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
    const STATUS_PAID_BY_USER = 4;

    /**
     * @return string[]
     */
    public static function getSystems()
    {
        return [
//            self::QIWI => 'Qiwi',
//            self::PAYEER => 'Payeer',
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
/*            self::TETHER_ERC_20 => [
                'name'=>'Tether (TRC-20)',
                'short'=>'USDT'
            ],*/
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
            self::MONERO => ['name'=>'Monero','short'=>'XMR'],
            self::BUSD=> ['name'=>'BUSD','short'=>'BUSD'],
            self::DODGE=> ['name'=>'Dogecoin','short'=>'DOGE'],
            self::ATOM=> ['name'=>'Cosmos','short'=>'ATOM'],
            self::UMEE=> ['name'=>'UMEE','short'=>'UMEE'],
            self::BNB=> ['name'=>'BNB','short'=>'BNB'],
            self::USDC=> ['name'=>'USDC (BEP-20)','short'=>'USDC'],
            self::DOT=> ['name'=>'Polkadot (BEP-20)','short'=>'DOT'],
            self::TRON=> ['name'=>'TRON (BEP-20)','short'=>'TRX'],
            self::TON=> ['name'=>'TON (BEP-20)','short'=>'TON'],
            self::BLD=> ['name'=>'Agoric','short'=>'BLD'],
            self::APY=> ['name'=>'APY','short'=>'APY'],
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
        ];
    }

    /**
     * @return array[]
     */
    public static function currencyForSystem()
    {
        return [
            self::QIWI => [Account::CURRENCY_USD],
            self::PAYEER => [Account::CURRENCY_USD, Account::CURRENCY_EUR],
            self::PERFECT_MONEY => [Account::CURRENCY_USD, Account::CURRENCY_EUR],
            self::CARD => [Account::CURRENCY_RUB],
            self::BITCOIN => [Account::CURRENCY_BTC_ONE],
            self::ETH => [Account::CURRENCY_BTC_TWO],
            self::TETHER_ERC_20 => [Account::CURRENCY_USD],
            self::RIPPLE => [Account::CURRENCY_USD],
            self::LITECOIN => [Account::CURRENCY_USD],
            self::DASH => [Account::CURRENCY_USD],
            self::BITCOIN_CASH => [Account::CURRENCY_BTC_ONE],
            self::MONERO => [Account::CURRENCY_USD],
        ];
    }

    /**
     * @return array[]
     */

    public static function avaliableSystems(){
        return array(
            self::QIWI,
            self::PAYEER,
            self::PERFECT_MONEY,
            self::CARD,
            self::ADVACASH,
            self::YANDEX,
            self::BITCOIN,
            self::ETH,
            self::TETHER_ERC_20,
            self::RIPPLE,
            self::LITECOIN,
            self::DASH,
            self::BITCOIN_CASH,
            self::MONERO
        );
    }

    /**
     * @return numeric
     */

    public static function enumByString($num){

        switch ($num){
            case 'USD':return self::PERFECT_MONEY;
            case 'BTC':return self::BITCOIN;
            case 'ETH':return self::ETH;
            case 'LTC':return self::LITECOIN;
            case 'DOGE':return self::DODGE;
            case 'BNB':return self::BNB;
            case 'XRP':return self::RIPPLE;
            case 'TRX':return self::TRON;
            case 'USDT':return self::TETHER_ERC_20;
            case 'USDC':return self::USDC;
            case 'UMEE':return self::UMEE;
            case 'BUSD':return self::BUSD;
            case 'DAI':return self::DAI;
            case 'TON':return self::TON;
            case 'DOT':return self::DOT;
            case 'XMR':return self::MONERO;
            case 'BCH':return self::BITCOIN_CASH;
            case 'DASH':return self::DASH;
            case 'BLD':return self::BLD;
            case 'APY':return self::APY;
            case 'RUB_BANK':return self::RUB_BANK;
            case 'RUB_QIWI':return self::RUB_QIWI;
            case 'RUB_PAYEER':return self::RUB_PAYEER;
            case 'RUB_YAD':return self::RUB_YAD;
        }

        return self::PERFECT_MONEY;
    }

    /**
     * @return numeric
     */

    public static function stringByEnum($str){

        switch ($str){
            case self::PERFECT_MONEY:return 'USD';
            case self::BITCOIN:return 'BTC';
            case self::ETH:return 'ETH';
            case self::LITECOIN:return 'LTC';
            case self::DODGE:return 'DOGE';
            case self::BNB:return 'BNB';
            case self::RIPPLE:return 'XRP';
            case self::TRON:return 'TRX';
            case self::TETHER_ERC_20:return 'USDT';
            case self::USDC:return 'USDC';
            case self::UMEE:return 'UMEE';
            case self::BUSD:return 'BUSD';
            case self::DAI:return 'DAI';
            case self::TON:return 'TON';
            case self::DOT:return 'DOT';
            case self::MONERO:return 'XMR';
            case self::BITCOIN_CASH:return 'BCH';
            case self::DASH:return 'DASH';
            case self::BLD:return 'BLD';
            case self::APY:return 'APY';
            case self::RUB_BANK:return 'RUB_BANK';
            case self::RUB_QIWI:return 'RUB_QIWI';
            case self::RUB_PAYEER:return 'RUB_PAYEER';
            case self::RUB_YAD:return 'RUB_YAD';
        }

        return 'USD';
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function promocode()
    {
        return $this->belongsTo(Promocode::class);
    }
}
