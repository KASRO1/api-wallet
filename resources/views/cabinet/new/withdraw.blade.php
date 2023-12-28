@extends('layouts.cabinet')

@section('title', __("Withdraw"))
@section('content')
@include('cabinet.new._header', ['user'=>$user])

<section id="withdraw">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section__heading py-4 mb-4">{{__("Funds withdrawal")}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                @if($errors->isNotEmpty())
                <ul class="">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="calculate__block withdraw__block">
                    <form id="withdraw-form" action="{{route('cabinet.withdraw')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="calculate__field field">
                                    <label class="calculate__label">{{__("Currency")}}</label>
                                    <div class="field-payment">
                                        <div class="field-payment__icon">
                                            <img src="{{asset('assets/images/currency/BTC.svg')}}" alt="">
                                        </div>
                                        <input id="paySstm" type="text" hidden name="payment_system" value="{{\App\Outcome::BITCOIN}}">
                                        <select class="js-select-payment" name="currency" id="PSys">
                                            {{--@foreach(\App\Outcome::getSystems() as $systemKey => $systemName)
                                                <option value="BTC" data-icon-src="{{asset('assets/images/currency/BTC.svg')}}">
                                            Bitcoin
                                            </option>
                                            @endforeach--}}
                                            <option value="BTC" data-icon-src="{{asset('assets/images/currency/BTC.svg')}}">
                                                Bitcoin
                                            </option>
                                            <option value="ETH" data-icon-src="{{asset('assets/images/currency/ETH.svg')}}">
                                                Ethereum
                                            </option>
                                            <option value="LTC" data-icon-src="{{asset('assets/images/currency/LTC.svg')}}">
                                                Litecoin
                                            </option>
                                            <option value="DOGE" data-icon-src="{{asset('assets/images/currency/DOGE.svg')}}">
                                                Dogecoin
                                            </option>
                                            <option value="BNB" data-icon-src="{{asset('assets/images/currency/BNB.svg')}}">BNB
                                                (BEP20)
                                            </option>
                                            <option value="DASH" data-icon-src="{{asset('assets/images/currency/DASH.svg')}}">
                                                DASH
                                            </option>
                                            {{--<option value="XMR" data-icon-src="{{asset('assets/images/currency/XMR.svg')}}">
                                            Monero
                                            </option>--}}
                                            <option value="ATOM" data-icon-src="{{asset('assets/images/currency/ATOM.svg')}}">
                                                ATOM
                                            </option>
                                            <option value="UMEE" data-icon-src="{{asset('assets/images/currency/UMEE.png')}}">
                                                UMEE
                                            </option>
                                            <option value="DOT" data-icon-src="{{asset('assets/images/currency/DOT.svg')}}">
                                                Polkadot (BEP-20)
                                            </option>
                                            <option value="XRP" data-icon-src="{{asset('assets/images/currency/XRP.svg')}}">
                                                Ripple
                                            </option>
                                            <option value="TRX" data-icon-src="{{asset('assets/images/currency/TRX.svg')}}">
                                                TRON
                                            </option>
                                            <option value="TON" data-icon-src="{{asset('assets/images/currency/TON.svg')}}">
                                                TON (BEP-20)
                                            </option>
                                            <option value="USDT" data-icon-src="{{asset('assets/images/currency/USDT (TRC20).svg')}}">USDT
                                                (TRC20)
                                            </option>
                                            <option value="USD" data-icon-src="{{asset('assets/images/currency/USD.svg')}}">
                                                Perfect Money
                                            </option>
                                            <option value="USDC" data-icon-src="{{asset('assets/images/currency/USDC.svg')}}">USDC
                                                (BEP20)
                                            </option>
                                            <option value="BUSD" data-icon-src="{{asset('assets/images/currency/BUSD (BEP20).svg')}}">BUSD
                                                (BEP20)
                                            </option>
                                            <option value="APY" data-icon-src="{{asset('assets/images/currency/APY.png')}}">APY
                                            </option>
                                            <option value="RUB_BANK" data-sys="RUB_BANK" data-icon-src="{{asset('assets/images/currency/Bank Card.svg')}}">Bank Card
                                            </option>
                                            <option value="RUB_QIWI" data-sys="RUB_QIWI" data-icon-src="{{asset('assets/images/currency/Qiwi.svg')}}">Qiwi
                                            </option>
                                            <option value="RUB_PAYEER" data-sys="RUB_PAYEER" data-icon-src="{{asset('assets/images/currency/Payeer.png')}}">Payeer
                                            </option>
                                            <option value="RUB_YAD" data-sys="RUB_YAD" data-icon-src="{{asset('assets/images/currency/Yandex Money.svg')}}">Yandex Money
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-4 mb-md-0">
                                <p class="calculate__label">{{__("Account balance")}}:</p>
                                <p id="balance-val" class="balance__value"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="calculate__label">{{__("Enter the amount")}}:</p>
                                <input type="text" name="amount" class="form-control">
                                <p class="commission">{{__("Fees:")}} <span class="balance">0.5 APY</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="calculate__label">{{__("Enter fin password")}}:</p>
                                <input type="password" name="fin_password" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <button type="submit" class="btn">{{__("Withdraw")}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 mt-4 mt-md-0">
                <h3 class="section__subheading mb-4">{{__("Enter your wallet details for the funds withdrawal in the settings.")}}</h3>
                <h3 class="section__subheading">{{__("Funds withdrawal in just a few seconds")}}:</h3>
                <ol class="numbers-list mt-4">
                    <li>{{__("Enter your wallet details in settings")}}</li>
                    <li>{{__("Enter the avaliable amount")}}</li>
                    <li>{{__("Receive a payout to your wallet")}}</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<script>
    const userAccounts = JSON.parse('{!! $user->accounts !!}')

    rate = 1;
    ccc = {
        BTC: ['BTC', 16897.80],
        ETH: ['ETH', 1267.73],
        LTC: ['LTC', 78],
        DOGE: ['DOGE', 0.105],
        BNB: ['BNB', 300.3],
        XRP: ['XRP', 0.4011],
        TRX: ['TRX', 0.05996],
        USDT: ['USDT', 1],
        USD: ['USD', 1],
        USDC: ['USDC', 0.9998],
        BUSD: ['BUSD', 0.9997],
        DAI: ['DAI', 1.0189],
        DASH: ['DASH', 43.52],
        ATOM: ['ATOM', 10.52],
        BCH: ['BCH', 112.52],
        UMEE: ['UMEE', 0.007503],
        DOT: ['DOT', 5.52],
        TON: ['TON', 1.75],
        BLD: ['BLD', 0.42],
        APY: ['APY', 0.0034],
        RUB: ['RUB', 62.82],
    };

    function sch() {
        cid = $('#PSys').val();
        if (cid.includes('RUB')) {
            cid = 'RUB';
        }
        curr = ccc[cid][0];
        rate = ccc[cid][1];
        $('#curr').html(curr);
        $('#calc1curr').html(curr);
        $('#calc2curr').html(curr);
        $('#calc3curr').html(curr);
        $('#paySstm').val(cid)
        $('#balance-val').text(`${userAccounts.find(i=>i.currency===curr).balance / 100000} ${curr}`)
        recalc();
    }

    sch();
    $('#PSys').change(sch);
    setInterval(sch, 250);

    function recalc() {
        z = 1 * $('#Sum').val();
        cid = $('#PSys').val();
        $('#calc1').html(1 * ((z * 2 / 100).toFixed(6)));
        $('#calc2').html(1 * ((z * 60 / 100).toFixed(6)));
        $('#calc3').html(1 * ((z * 730 / 100).toFixed(6)));
    }

    function showBalance() {

    }
    $('#Sum').on('change', recalc);
    $('#withdraw-form').on('formdata', e => {
        let form = e.originalEvent.formData;
        form.set('payment_system', form.get('currency'));
        if (form.get('currency').includes('RUB')) {
            form.set('currency', 'RUB');
        }
        return true;
    })
</script>
<div class="mobile-menu">
    <div class="mobile-menu__close">
        <svg class="svg-icon">
            <use href="assets/icons/sprite.svg#icon-cross"></use>
        </svg>
    </div>
    <div class="mobile-menu__inner">
        <div class="mobile-menu__top"><a class="btn btn--calypso btn--size-small mobile-menu__btn" href="{{route('login')}}">
                <span>{{__("Log in")}}</span></a><a class="btn btn--calypso btn--line-black btn--size-small mobile-menu__btn" href="{{route('register')}}"> <span>{{__("Sign Up")}}</span></a></div>
        <div class="profile-navigation"><a class="profile-navigation__user" href="profile-account.html"><span class="profile-navigation__avatar"> <img src="assets/images/profile/ava.png" alt=""></span><span class="profile-navigation__username"> </span></a>
            <ul class="profile-navigation__list">
                <li><a href="/cabinet">
                        <span class="svg-icon">
                            @include('cabinet.new.icons.user-ico')
                        </span>
                        <span>{{__("Account")}}</span></a></li>
                <li><a href="/deposits">
                        <span class="svg-icon">
                            @include('cabinet.new.icons.deposit-ico')
                        </span>
                        <span>{{__("My deposits")}}</span></a></li>
                <li><a href="/conversion">
                        <span class="svg-icon">
                            @include('cabinet.new.icons.swap')
                        </span>
                        <span>{{__("Swap")}} </span></a></li>
                <li><a href="/promo">
                        <span class="svg-icon">
                            @include('cabinet.new.icons.promo-ico')
                        </span>
                        <span>{{__("Promo material")}}</span></a></li>
                <li><a href="/operation?add=CASHOUT">
                        <span class="svg-icon">
                            @include('cabinet.new.icons.withdraw-ico')
                        </span>
                        <span>{{__("Funds withdrawal")}}</span></a></li>
                <li><a href="/operations">
                        <span class="svg-icon">
                            @include('cabinet.new.icons.transaction-ico')
                        </span>
                        <span>{{__("My transactions")}}</span></a></li>
                <li><a href="/wallets">
                        <span class="svg-icon">
                            @include('cabinet.new.icons.wallets-ico')
                        </span>
                        <span>{{__("My wallets")}}</span></a></li>
                <li><a href="/account">
                        <span class="svg-icon">
                            @include('cabinet.new.icons.settings-ico')
                        </span>
                        <span>{{__("Settings")}}</span></a></li>
            </ul>
        </div>
        <nav class="mobile-menu__nav">
            <ul>
                <li><a href="{{route('page.company')}}">{{__("Company")}}</a></li>
                <li><a href="{{route('page.apybot')}}">{{__("Investments")}}</a></li>
                <li><a href="{{route('page.ref')}}">{{__("Ref Program")}}</a></li>
                <li><a href="{{route('page.token')}}">{{__("Token")}}</a></li>
            </ul>
        </nav>
    </div>
</div>

@endsection