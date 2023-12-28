@extends('layouts.front_app')

@section('content')
    <div class="main-layout">
        <a class="auth-layout__logo" href="/"><img src="assets/images/logo/logo.png" alt=""></a>
        <div class="auth-layout__row">
            <div class="auth-layout__content">
                <div class="auth-layout__inner"><!-- Begin auth page-->
                    @if(!$errors->isEmpty())
                        @foreach($errors->all() as $error)
                                <h4 style="font-size: 26px; margin-bottom: 10px;">{{ $error }}</h4>
                        @endforeach
                    @endif

                    <form class="auth-form" action="{{route('password.recovery')}}" method="post">
                        @csrf
                        <input name="user_id" type="hidden" value="{{$user->id}}">
                        <div class="auth-form__block">
                            <div class="auth-form__content">
                                <h1 class="title">{{__("Enter new password")}}</h1>
                            </div>
                        </div>
                        <div class="field _error">
                            <label>{{__("Enter new password")}}:</label>
                            <input name="password" type="password">
                        </div>
{{--                        <div class="field _error">
                            <label>Repeat password:</label>
                            <input name="password_confirmation" type="password">
                        </div>--}}
                        <div class="auth-form__bottom">
                            <button class="btn btn--primary-gr" name="login_frm_btn" type="submit">
                                <span>{{__("Reset password")}}</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="auth-layout__media">
                @if(app()->getLocale() == 'ru')
                    <img src="{{asset('assets/images/auth/b55_es(ru).png')}}" alt="">
                @elseif(app()->getLocale() == 'en')
                    <img src="{{asset('assets/images/auth/b55_es(eng).png')}}" alt="">
                @else
                    <img src="{{asset('assets/images/auth/b55_es(eng).png')}}" alt="">
                @endif
            </div>
        </div>
        <footer class="footer">
                <div class="container">
                    <div class="footer__top"><a class="footer__logo" href="/">
                            <img src="{{asset('assets/images/logo/logo.png')}}" alt="">
                        </a>
                        <nav class="footer__nav">
                            <ul>
                                <li><a href="{{route('page.company')}}">{{__("Company")}}</a></li>
                                <li><a href="{{route('page.apybot')}}">{{__("Investments")}}</a></li>
                                <li><a href="{{route('page.ref')}}">{{__("Ref Program")}}</a></li>
                                <li><a href="{{route('page.token')}}">{{__("Token")}}</a></li>
                            </ul>
                        </nav>
                        <div class="footer__col-right">
                            @auth
                                {{--<a href="{{route('cabinet')}}">
                                    <div style="max-width: 80px">
                                        @include('cabinet.new.icons.user-ico')
                                        <span>{{$user->name}}</span>
                                    </div>
                                </a>--}}
                                <a class="btn btn--size-small btn--calypso footer__btn" href="{{route('cabinet')}}"> <span>{{__("Cabinet")}}</span></a>
                            @endauth
                            @guest
                                    <a class="btn btn--size-small btn--calypso footer__btn"
                                       href="{{route('login')}}"> <span>{{__("Log in")}}</span></a>
                                    <a class="btn btn--line-black btn--calypso btn--size-small footer__btn" href="{{route('register')}}">
                                        <span>{{__("Sign Up")}}</span></a>
                            @endguest

                        </div>
                    </div>
                    <div class="footer_center">
                        <div class="footer_widget">
                            <div class="footer_title">{{__("Investment strategies")}}:</div>
                            <div class="footer_link">
                                <ul>
                                    <li><a href="{{route('page.defistaking')}}">{{__("DeFi staking")}}</a></li>
                                    <li><a href="{{route('page.classicstaking')}}">{{__("Classic Staking")}}</a></li>
                                    <li><a href="{{route('page.liquidity')}}">{{__("Liquidity pools")}}</a></li>
                                    <li><a href="{{route('page.staking')}}">{{__("APY staking")}}</a></li>
                                    <li><a href="{{route('page.investIDO')}}">{{__("IDO")}}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer_widget">
                            <div class="footer_title">{{__("TRADING BOTS")}}:</div>
                            <div class="footer_link">
                                <ul>
                                    <li><a href="{{route('page.apybot')}}">{{__("APY trading bot")}}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer_widget">
                            <div class="footer_title">{{__("LEGAL INFORMATION")}}:</div>
                            <div class="footer_link">
                                <ul>
                                    <li><a href="{{route('page.company')}}">{{__("About us")}}</a></li>
                                    <li>
                                        <a href="https://find-and-update.company-information.service.gov.uk/company/14277515"
                                           target="_blank">{{__("Check the information")}}</a></li>
                                    <li><a href="{{route('page.terms')}}">{{__("Terms of use")}}</a></li>
                                    <li><a href="{{asset('/pdf/Whitepaper.pdf')}}" target="_blank">{{__("White Paper")}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <style>.footer_center {
                            display: flex;
                            margin-top: 35px;
                            border-top: 2px solid #80C2F1;
                            padding-top: 20px;
                        }

                        .footer_widget {
                            width: 30%;
                        }

                        .footer_title {
                            text-transform: uppercase;
                            font-weight: bold;
                            margin-bottom: 15px;
                        }

                        .footer_link ul {
                            margin: 0;
                            padding: 0;
                        }

                        .footer_link ul li {
                            list-style: none;
                        }

                        .footer_link ul li a {
                            display: block;
                            padding: 7px 0;
                            color: #80C2F1;
                        }

                        @media screen and (max-width: 980px) {
                            .footer_center {
                                display: block;
                            }

                            .footer_widget {
                                width: 100%;
                                text-align: center;
                                margin-bottom: 20px;
                            }
                        }</style>
                    <div class="footer__bottom"><p class="footer__copyright">© <span class="js-current-year"></span>,
                            {{__("b55.io. All rights reserved.")}} <a
                                href="https://find-and-update.company-information.service.gov.uk/company/14080408"
                                target="_blank">{{__("Company number 14080408")}}</a></p></div>
                </div>
            </footer>
    </div>
@endsection
