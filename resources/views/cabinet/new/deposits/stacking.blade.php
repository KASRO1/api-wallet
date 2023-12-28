@extends('layouts.cabinet')

@section('title', __("Invest"))

@section('content')
@include('cabinet.new._header', ['user'=>$user])
<section id="invest-ftx">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section__heading py-4 mb-4"><span class="c-violet">{{__("DeFi staking")}}</span></h1>
            </div>
        </div>
        <form action="{{route('cabinet.deposits.store')}}" method="POST">
            @csrf
            <input type="text" hidden name="pack" value="defi-staking">
            <div class="row">
                <div class="col-md-6">
                    <fieldset class="select-deposit">
                        <legend>{{__("Choose payment system")}}:</legend>
                        <div>
                            <input id="payment-blockchain" type="radio" name="payment-system" value="blockchain">
                            <label for="payment-blockchain">{{__("From Blockchain")}}</label>
                        </div>
                        <div>
                            <input checked id="payment-balance" type="radio" name="payment-system" value="balance">
                            <label for="payment-balance">{{__("From balance")}}
                                <div class="c-violet">{{__('Available')}}: <br><span id="currency-balance">0</span>
                                </div>
                            </label>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    @include('cabinet.new.deposits._defiCurrencySelect')
                </div>
            </div>
            <div class="row">
                <div class="col-12 py-4 my-4">
                    <label for="amount-input">{{__("Enter amount")}}:</label> <br>
                    @if($errors->any())
                    {!! implode('', $errors->all('<div class="error status--danger">:message</div>')) !!}
                    @endif
                    <input data-amount="0" type="text" value="0" class="wallet-item__info-box w-100" hidden name="amountUSD" id="amount-input">
                    <input type="text" value="0" class="wallet-item__info-box w-100" name="amount">
                    <p class="commission">{{__("Fees:")}} <span class="balance">0.5 APY</span></p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="amount-helper choose-helper mb-md-0 mb-4">
                        <div class="amount-helper__item choose-helper__item">
                            <button data-amount="100" class="choose-helper__btn amount-helper__btn">$100</button>
                        </div>
                        <div class="amount-helper__item choose-helper__item">
                            <button data-amount="1000" class="choose-helper__btn amount-helper__btn">$1000</button>
                        </div>
                        <div class="amount-helper__item choose-helper__item">
                            <button data-amount="10000" class="choose-helper__btn amount-helper__btn active">$10000</button>
                        </div>
                        <div class="amount-helper__item choose-helper__item">
                            <button data-amount="20000" class="choose-helper__btn amount-helper__btn">$20000</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="time-helper choose-helper my-md-0 my-4">
                        <input type="number" name="days" hidden id="time_frame_input" value="15">
                        <div class="choose-helper__item time-helper__item">
                            <button data-time="15" class="choose-helper__btn time-helper__btn active">15 {{__("days")}}</button>
                        </div>
                        <div class="choose-helper__item time-helper__item">
                            <button data-time="30" class="choose-helper__btn time-helper__btn">30 {{__("days")}}</button>
                        </div>
                        <div class="choose-helper__item time-helper__item">
                            <button data-time="60" class="choose-helper__btn time-helper__btn">60 {{__("days")}}</button>
                        </div>
                        <div class="choose-helper__item time-helper__item">
                            <button data-time="90" class="choose-helper__btn time-helper__btn">90 {{__("days")}}</button>
                        </div>
                        <div class="choose-helper__item time-helper__item">
                            <button data-time="120" class="choose-helper__btn time-helper__btn">120 {{__("days")}}</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4 profit-calculate">
                    <div class="profit-calculate-box">
                        <span>{{__("Daily Profit")}}:</span>
                        <p data-timeframe="d" data-currency="BTC">0</p>
                    </div>
                    <div class="profit-calculate-box">
                        <span>{{__("Monthly Profit")}}:</span>
                        <p data-timeframe="m" data-currency="BTC">0</p>
                    </div>
                    <div class="profit-calculate-box">
                        <span>{{__("Yearly Profit")}}:</span>
                        <p data-timeframe="y" data-currency="BTC">0</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 my-4">
                    <p class="invest-warning">"{{__("This is the maximum profit that you can get, in reality, the profit may be less than this amount")}}"</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" id="submit-invest" class="btn btn--primary-gr">{{__("Invest now")}}</button>
                </div>
            </div>
        </form>
    </div>
</section>
@include('cabinet.new.deposits._profitCalc',['accounts' => $user->accounts,'percent'=>$depositDetails['percent'],'rates'=>$rates])
@endsection