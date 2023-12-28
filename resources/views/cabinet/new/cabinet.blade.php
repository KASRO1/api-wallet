@extends('layouts.cabinet')
@section('title', __("Home"))
@section('content')
@include('cabinet.new._header', ['user'=>$user])

<div id="cabinet" class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="section__heading py-4">{{__("Your")}} <span class="c-violet">{{__("investments")}}</span></h1>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-4">
            <h3 class="section__subheading mb-4 mb-md-0">
                {{__("3 steps")}}
                <i>{{__("towards success")}}</i>
            </h3>
        </div>
        <div class="col-md-8 pt-4">
            <ol class="gradient-list">
                <li>{!! __("Choose the <br> investment plan") !!}</li>
                <li>{!! __("Create <br> a deposit") !!}</li>
                <li>{!! __("Enjoy your <br> daily profits!") !!}</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-4 d-flex position-relative  my-4">
            <div class="investments-block investments-block--color-1">
                <div class="lastPr">{{__("profit_APY")}}<span>{{__("PROFIT LAST MONTH")}}</span></div>
                <style>
                    .lastPr {
                        border-radius: 100px;
                        position: relative;
                        background: #1E2B4E;
                        color: #fff;
                        font-weight: bold;
                        font-size: 30px;
                        text-align: center;
                        padding: 7px 0;
                        margin-bottom: 10px;
                    }

                    .lastPr span {
                        font-weight: normal;
                        font-size: 13px;
                        display: block;
                        width: 100%;
                    }
                </style>
                <div style="align-self: flex-start;" class="percent_info">
                    <span class="apy">APY</span>
                    <span>{{__("apy_APY")}}</span>
                </div>
                {{--<img class="investments-block__img" src="assets/images/investments/ftx.png"
                             alt="" role="presentation"/>--}}
                <h4 class="investments-block__title my-4">{{__("APY trading bot")}}</h4>
                <p class="investments-block__info">{{__("Highly accurate algorithmic bot, making more than 1000 deals in 24 hours")}}</p>
                <ul class="investments-block__inlist">
                    {{--
                                                        <li>{{__("APY up to")}} <strong>{{__("apy_APY")}}</strong></li>
                    --}}
                    <li>{!! __("Automated trading") !!}</li>
                    <li>{!! __("Flexible terms") !!}</li>
                    <li>{{__("Profit is accrued")}} <strong>{{__("every day!")}}</strong></li>
                    <li>{{__("Profit withdrawal")}} <strong>{{__("without commissions!")}}</strong></li>
                    <li>{!! __("First income after 24 hours") !!}</strong></li>
                </ul>
                <a href="{{route('investplan.ftx')}}" class="investments-block__button mt-4">{{__("Invest now")}}</a>
            </div>

        </div>
        <div class="col-md-6 col-lg-4 d-flex position-relative  my-4">
            <div style="color: #ffffff;" class="investments-block investments-block--color-2">
                <div class="lastPr">{{__("profit_sAPY")}}<span>{{__("PROFIT LAST MONTH")}}</span></div>
                <div style="align-self: flex-start;" class="percent_info">
                    <span class="apy">APY</span>
                    <span>{{__("apy_sAPY")}}</span>
                </div>
                <h4 class="investments-block__title my-4">{{__("APY staking")}}</h4>
                <p class="investments-block__info">{{__("A utility token for use within the products of the ecosystem.")}}</p>
                <ul class="investments-block__inlist">
                    {{-- <li>{{__("APY up to")}} <strong>{{__("apy_sAPY")}}</strong></li>--}}
                    <li>{!! __("Burning tokens") !!}</li>
                    <li>{!! __("Guaranteed allocation") !!}</li>
                    <li>{!! __("AirDrop for holders") !!}</li>
                    <li>{{__("Profit is accrued")}} <strong>{{__("every day!")}}</strong></li>
                    {{-- <li>{{__("Profit withdrawal")}} <strong>{{__("without commissions!")}}</strong></li>
                    <li>{!! __("First income after 24 hours") !!}</strong></li>--}}
                </ul>
                <a href="{{route('investplan.isolated')}}" class="investments-block__button mt-4">{{__("Invest now")}}</a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex position-relative my-4">
            <div class="investments-block investments-block--color-4">
                <div class="lastPr">{{__("profit_Land")}}<span>{{__("PROFIT LAST MONTH")}}</span></div>
                <div style="align-self: flex-start;" class="percent_info">
                    <span class="apy">APY</span>
                    <span>{{__("apy_Classic")}}</span>
                </div>
                <h4 class="investments-block__title my-4">{{__("Classic Staking")}}</h4>
                <p class="investments-block__info">{{__("Placing cryptocurrency assets with the aim of receiving rewards for maintaining the blockchain's operability and network security.")}}</p>
                <ul class="investments-block__inlist">
                    <li>{!! __("Secure asset storage") !!}</li>
                    <li>{!! __("Fixed rate") !!}</li>
                    <li>{!! __("No commissions") !!}</li>
                    <li>{!! __("Support for multiple assets") !!}</li>
                    <li>{!! __("Low entry threshold") !!}</li>
                </ul>
                <a href="{{route('investplan.stock')}}" class="investments-block__button mt-4">{{__("Invest now")}}</a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex position-relative mmy-4">
            <div @if($user->special_product == 0) data-phrase="{{__("Sold Out")}}" @endif class="investments-block investments-block--color-4 @if($user->special_product == 0) inactive @endif ">
                {{-- <div class="lastPr">+18.38%<span>{{__("PROFIT LAST MONTH")}}</span>
            </div>--}}
            <div style="align-self: flex-start;" class="percent_info">
            </div>
            <h4 class="investments-block__title my-4">{{__("Investments into the IDO pools")}}</h4>
            <p class="investments-block__info">{{__("A crowdfunding method that allows crypto projects to launch their own token through decentralized exchanges.")}}</p>
            <ul class="investments-block__inlist">
                {{-- <li>{{__("Profit is accrued")}} <strong>{{__("every day!")}}</strong></li>--}}
                <li>{!! __("Providing liquidity") !!}</li>
                <li>{!! __("Listing of top projects") !!}</li>
                <li>{!! __("No commission fees") !!}</li>
                {{-- <li>{!! __("First income after 24 hours") !!}</strong></li>--}}
            </ul>
            <a href="{{route('investplan.ido')}}" class="investments-block__button mt-4">{{__("Invest now")}}</a>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 d-flex position-relative my-4">
        <div class="investments-block investments-block--color-5" style="opacity: 1; visibility: inherit; transform: translate(0px);">
            <div class="lastPr">{{__("profit_Liq")}}<span>{{__("PROFIT LAST MONTH")}}</span></div>
            <div style="align-self: flex-start;" class="percent_info">
                <span class="apy">APY</span>
                <span>{{__("apy_Liq")}}</span>
            </div>
            <h4 class="investments-block__title my-4">{{__("Liquidity pools")}}</h4>
            <p class="investments-block__info">{{__("Token pools that provide the trading process of currency pairs with liquidity from users who, in return, receive rewards from the project depending on the share they invested.")}}</p>
            <ul class="investments-block__inlist">
                {{-- <li>{{__("APY up to")}} <strong>{{__("apy_Liq")}}</strong></li>--}}
                <li>{!! __("Profitable pairs") !!}</li>
                <li>{!! __("Only current directions") !!} </li>
                <li>{!! __("Flexible terms") !!} </li>
                <li>{!! __("APY token farming") !!}</strong></li>
            </ul>
            <a href="{{route('investplan.liquidity')}}" class="investments-block__button mt-4">{{__("Invest now")}}</a>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 d-flex position-relative my-4">
        <div class="investments-block investments-block--color-6" style="opacity: 1; visibility: inherit; transform: translate(0px);">
            <div class="lastPr">{{__("profit_DeFi")}}<span>{{__("PROFIT LAST MONTH")}}</span></div>
            <div style="align-self: flex-start;" class="percent_info">
                <span class="apy">APY</span>
                <span>{{__("apy_DeFi")}}</span>
            </div>
            <h4 class="investments-block__title my-4">{{__("DeFI staking")}}</h4>
            <p class="investments-block__info">{{__("DeFi provides automatic execution of transactions according to pre-established conditions.")}}</p>
            <ul class="investments-block__inlist">
                {{-- <li>{{__("APY up to")}} <strong>{{__("apy_DeFi")}}</strong></li>--}}
                <li>{!! __("Most favorable conditions") !!}</li>
                <li>{!! __("High profitability") !!}</li>
                <li>{!! __("No commissions") !!}</li>
                <li>{!! __("Fixed rate") !!}</li>
                <li>{!! __("First income after 24 hours") !!}</strong></li>
            </ul>
            <a href="{{route('investplan.stacking')}}" class="investments-block__button mt-4">{{__("Invest now")}}</a>
        </div>
    </div>
</div>

</div>
<section class="faq">
    <div class="container mt-4 py-4">
        <ul class="accordion">
            <li class="accordion__item">
                <h4 class="accordion__title" data-accordion="trigger"><span>{{__("How does it work?")}} </span>
                </h4>
                <div data-accordion="content-container">
                    <div class="accordion__content typography" data-accordion="content">
                        <p>{{__("B55_A_1")}} </p>
                    </div>
                </div>
            </li>
            <li class="accordion__item">
                <h4 class="accordion__title" data-accordion="trigger"><span>{{__("What is the minimum amount to top up the wallet?")}}</span>
                </h4>
                <div data-accordion="content-container">
                    <div class="accordion__content typography" data-accordion="content">
                        <p>{{__("B55_A_2")}} </p>
                    </div>
                </div>
            </li>
            <li class="accordion__item">
                <h4 class="accordion__title" data-accordion="trigger"><span>{{__("What is the withdrawal processing time?")}}</span>
                </h4>
                <div data-accordion="content-container">
                    <div class="accordion__content typography" data-accordion="content">
                        <p>{{__("B55_A_3")}} </p>
                    </div>
                </div>
            </li>
            <li class="accordion__item">
                <h4 class="accordion__title" data-accordion="trigger"><span>{{__("When will I be able to withdraw my assets from staking?")}}</span>
                </h4>
                <div data-accordion="content-container">
                    <div class="accordion__content typography" data-accordion="content">
                        <p>{{__("B55_A_4")}}</p>
                    </div>
                </div>
            </li>
            <li class="accordion__item">
                <h4 class="accordion__title" data-accordion="trigger"><span>{{__("How much will I earn if I invite a friend to the company?")}}</span>
                </h4>
                <div data-accordion="content-container">
                    <div class="accordion__content typography" data-accordion="content">
                        <p>{{__("B55_A_5")}} </p>
                    </div>
                </div>
            </li>
            <li class="accordion__item">
                <h4 class="accordion__title" data-accordion="trigger"><span>{{__("Should I invest to earn money in the partner program?")}}</span>
                </h4>
                <div data-accordion="content-container">
                    <div class="accordion__content typography" data-accordion="content">
                        <p>{{__("B55_A_6")}} </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
@endsection