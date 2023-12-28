<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    //use Notifiable;

    /**
     * The attributes that are mass assignable.
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
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'promocode_used' => 'bool',
        'socials' => 'json',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'last_login_time',
        'special_promo_date',
        'created_at',
    ];
    /**
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::created(function (self $user) {
            $user->accounts()->create([
                'currency' => Account::CURRENCY_RUB,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_USD,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_EUR,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_BTC_ONE,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_BTC_TWO,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_BTC,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_ETH,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_DOGE,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_LTC,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_BNB,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_XRP,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_TRX,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_USDT,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_USDC,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_BUSD,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_DAI,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_TON,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_DASH,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_XMR,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_BCH,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_ATOM,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_USD_PM,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_UMEE,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_DOT,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_BLD,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_APY,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_RUB_ACC,
            ]);

            $user->accounts()->create([
                'currency' => Account::CURRENCY_AVAX,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_KAVA,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_UNI,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_LINK,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_GRT,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_DYDX,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_DODO,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_COMP,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_DAO,
            ]);
            $user->accounts()->create([
                'currency' => Account::CURRENCY_AXL,
            ]);

            // automatically create payment detail
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_RUB,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_USD,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_EUR,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_BTC_ONE,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_BTC_TWO,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_BTC,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_ETH,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_DOGE,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_LTC,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_BNB,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_XRP,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_TRX,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_USDT,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_USDC,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_BUSD,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_DAI,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_TON,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_DASH,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_XMR,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_BCH,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_ATOM,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_USD_PM,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_UMEE,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_DOT,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_BLD,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_APY,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_RUB_ACC,
            ]);

            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_AVAX,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_KAVA,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_UNI,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_LINK,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_GRT,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_DYDX,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_DODO,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_COMP,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_DAO,
            ]);
            $user->paymentDetails()->create([
                'currency' => Account::CURRENCY_AXL,
            ]);
        });
    }

    /**
     * @return string
     */
    public function getInvitedByAttribute()
    {
        if(is_null($this->referal_id)) {
            return "Без пригласителя";
        }

        return $this->referal->name;
    }

    /**
     * @return bool
     */
    public function getIsDepositetAttribute()
    {
        return $this->deposits()->whereIn('status', [Deposit::STATUS_OPENED, Deposit::STATUS_CLOSED])->exists();
    }

    public function scopeIsDepositet(Builder $query)
    {
        return $query->whereHas('deposits', function ($query) {
            return $query->whereIn('status', [Deposit::STATUS_OPENED, Deposit::STATUS_CLOSED]);
        });
    }

    public function getRefPercent($refLevel = 1){
        $customPercents = DB::table('ref_percent')->where('user_id',$this->id)->get();
        if ($customPercents->isEmpty()){
            switch ($refLevel){
                case 1: return Deposit::REFERAL_FIRST_PERCENT;
                case 2: return Deposit::REFERAL_SECOND_PERCENT;
                case 3: return Deposit::REFERAL_THIRD_PERCENT;
            }
        }else{
            $customPercents = $customPercents->first();

            switch ($refLevel){
                case 1: return isset($refLevel['ref1']) ? $customPercents : Deposit::REFERAL_FIRST_PERCENT;
                case 2: return isset($refLevel['ref2']) ? $customPercents : Deposit::REFERAL_SECOND_PERCENT;
                case 3: return isset($refLevel['ref3']) ? $customPercents : Deposit::REFERAL_THIRD_PERCENT;
            }
        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentDetails()
    {
        return $this->hasMany(PaymentDetail::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requisites()
    {
        return $this->hasMany(Requisite::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function outcomes()
    {
        return $this->hasMany(Outcome::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incomes()
    {
        return $this->hasMany(Income::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function referal()
    {
        return $this->belongsTo(self::class, 'referal_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function referals()
    {
        return $this->hasMany(self::class, 'referal_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function promocode()
    {
        return $this->belongsTo(Promocode::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conversions()
    {
        return $this->hasMany(ConversionHistory::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function claims()
    {
        return $this->hasMany(ClaimHistory::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    /**
     * @return string
     */
    public function getHiddenEmailAttribute()
    {
        $email = $this->email;

        $em   = explode("@",$email);
        $name = implode('@', array_slice($em, 0, count($em)-1));
        $len  = floor(strlen($name)/2);

        return substr($name,0, $len) . str_repeat('*', $len) . "@" . end($em);
    }

    /**
     * @return bool
     */
    public function specialPromoIsActive()
    {
        return optional($this->special_promo_date)->getTimeStamp() > now()->endOfDay()->getTimestamp();
    }
}
