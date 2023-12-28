@extends('layouts.cabinet')

@section('title', __("Deposits"))
@section('content')
@include('cabinet.new._header', ['user'=>$user])

<section id="deposit">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section__heading py-4 mb-4">{{__("My deposits")}}</h1>
            </div>
        </div>
        @if (\Session::has('success'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                    {{__("Congratulation!")}}</strong> {!! \Session::get('success') !!}
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            @foreach($deposits as $key => $dep)
            <div class="col-12 mb-4">
                <div class="deposit__block
                        @if($dep->name == 'APY trading bot') investments-block--color-1 @endif
                        @if($dep->name == 'APY staking') investments-block--color-2 @endif
                        @if($dep->name == 'IDO investments') investments-block--color-3 @endif
                        @if($dep->name == 'Classic Stacking') investments-block--color-4 @endif
                        @if($dep->name == 'Liquidity pools') investments-block--color-5 @endif
                        @if($dep->name == 'DeFi стейкинг') investments-block--color-6 @endif
                        ">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                {{--<div class="percent_info">
                                            <span class="apy">APY</span><span> up to 730%</span>
                                        </div>--}}
                                <h5 class="package_name my-4">{{$dep->name}}</h5>
                                <p class="package_info">
                                    @if($dep->name == 'APY trading bot')
                                    {{__("Highly accurate algorithmic bot, making more than 1000 deals in 24 hours")}}
                                    @endif
                                    @if($dep->name == 'IDO investments')
                                    {{__("A crowdfunding method that allows crypto projects to launch their own token through decentralized exchanges.")}}
                                    @endif
                                    @if($dep->name == 'Liquidity pools')
                                    {{__("Token pools that provide the trading process of currency pairs with liquidity from users who, in return, receive rewards from the project depending on the share they invested.")}}
                                    @endif
                                    @if($dep->name == 'APY staking')
                                    {{__("A utility token for use within the products of the ecosystem.")}}
                                    @endif
                                    @if($dep->name == 'DeFi стейкинг')
                                    {{__("DeFi provides automatic execution of transactions according to pre-established conditions.")}}
                                    @endif
                                    @if($dep->name == 'Classic Stacking')
                                    {{__("Placing cryptocurrency assets with the aim of receiving rewards for maintaining the blockchain's operability and network security.")}}
                                    @endif
                                </p>
                                @if (($dep->name == 'APY trading bot' ||
                                $dep->name == 'APY staking' ||
                                $dep->name == 'Liquidity pools'
                                ) &&
                                now()->diffInDays($dep->start_time) >= 14 &&
                                $dep->status == \App\Deposit::STATUS_OPENED &&
                                $dep->balance > $dep->amount
                                )
                                <form method="POST" id="claim_form" action="{{route('cabinet.deposits.claim',['deposit'=>$dep->id])}}">
                                    @csrf
                                    <button class="claim_button">{{__("Receive a Profit")}}</button>
                                    <p class="commission">{{__("Fees:")}} <span class="balance">0.5 APY</span></p>
                                </form>
                                <!-- <a href="{{route('cabinet.deposits.claim',['deposit'=>$dep->id])}}" class="claim_button mt-4">{{__("Receive a Profit")}}</a> -->
                                @endif
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="profit_box">
                                    <div class="profit_ico">@include('cabinet.new.icons.coins')</div>
                                    <h6 class="my-4">{{__("Overall profit")}}</h6>
                                    @if ($dep->name == 'Liquidity pools')
                                    @if (strtolower($dep->currency) == 'usdt')
                                    <p class="profit_amount">{{number_format(($dep->balance - $dep->amount) / 100000 * (1 / floatval($apyRate)), 2, '.', '')}} APY</p>
                                    @elseif (Illuminate\Support\Facades\DB::table('exchange_rates')->where('pair', strtolower($dep->currency) . '_usdt')->exists())
                                    <p class="profit_amount">{{number_format(($dep->balance - $dep->amount) / 100000 * Illuminate\Support\Facades\DB::table('exchange_rates')->where('pair', strtolower($dep->currency) . '_usdt')->first()->rate * (1 / floatval($apyRate)), 2, '.', '')}} APY</p>
                                    @else
                                    <p class="profit_amount">{{number_format(($dep->balance - $dep->amount) / 100000 * config('currencies.' . strtolower($dep->currency) . '_usdt') * (1 / floatval($apyRate)), 2, '.', '')}} APY</p>
                                    @endif
                                    @else
                                    <p class="profit_amount">{{number_format(($dep->balance - $dep->amount) / 100000,strlen(($dep->balance - $dep->amount) / 100000) - 1,'.','')}} {{$dep->currency}}</p>
                                    @endif

                                    <!-- <p class="profit_amount">{{(float)(($dep->balance - $dep->amount) / 100000)}}</p> -->
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <ul class="deposit_status">
                                    <li><span class="status_heading">{{__("An amount")}}:</span> {{$dep->amount /100000}} {{$dep->currency}}</li>
                                    @if($dep->status != \App\Deposit::STATUS_NOT_PAYED)
                                    <li><span class="status_heading">{{__("Starting date")}}:</span> {{date('M d Y',strtotime($dep->start_time))}} </li>
                                    <li><span class="status_heading">{{__("Ending date")}}:</span> {{date('M d Y', strtotime($dep->end_time))}} </li>
                                    @endif
                                    @if($dep->referal_percent != 0)
                                    <li><span class="status_heading">{{__("Referral percent")}}:</span> +{{$dep->referal_percent}}%</li>
                                    @endif
                                    @if($dep->status == \App\Deposit::STATUS_NOT_PAYED)
                                    <li>{{__("Deposit is not paid yet!")}}</li>
                                    @if($user->is_verified == 2)
                                    <li><a href="{{route('cabinet.showWallet',['id'=>$dep->id])}}" class="status_heading">{{__("Pay")}}</a></li>
                                    @endif
                                    @if($user->is_verified == 0)
                                    <li><a href="{{route('cabinet.verification')}}" class="status_heading">{{__("Pay")}}</a></li>
                                    @endif
                                    @endif
                                    @if($dep->status == \App\Deposit::STATUS_CANCELED)
                                    <li>Deposit is canceled</li>
                                    @endif
                                    @if($dep->status == \App\Deposit::STATUS_PAYED)
                                    <li>{{__("Waiting for confirmation")}}</li>
                                    @endif
                                    <li><span class="status_heading">{{__("Days")}}:</span> <br> <span class="days">{{round((strtotime($dep->end_time) - strtotime($dep->start_time)) / (60*60*24))}}</span> </li>
                                    @if($dep->status == \App\Deposit::STATUS_OPENED)
                                    <progress class="w-100 c-violet" max="{{round((strtotime($dep->end_time) - strtotime($dep->start_time)) / (60*60*24))}}" value="{{round((strtotime($dep->end_time) - strtotime($dep->start_time) - (strtotime($dep->start_time) - time())) / (60*60*24)) - round((strtotime($dep->end_time) - strtotime($dep->start_time)) / (60*60*24))}}">
                                    </progress>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
            <div class="col-12">
                <a href="{{route('cabinet')}}" class="btn btn--primary-gr mb-4">{{__("Add new deposit")}}</a>
            </div>

        </div>
    </div>
</section>
@endsection