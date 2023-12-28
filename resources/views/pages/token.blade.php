@extends('layouts.front_app')

@section('content')
    <article class="main-layout__content"><!-- Begin page-->
        <section class="token-intro">
            @include('components._header')
            <div class="container">
                <div class="token-intro__row">
                    <div class="token-intro__content"><h1 class="token-intro__title"><span>{{__("APY coin - is a utility token that is used within the products of the ecosystem")}}</span>
                        </h1>
                        <div class="token-intro__description"><p>{!! __("B55_token_info") !!}</p></div>
                        <ul class="token-intro__social">
                            <li><a href="{{asset('/pdf/Whitepaper.pdf')}}" target="_blank"><span
                                        class="token-intro__social-icon"></span><span>{{__("WhitePaper")}}</span></a></li>
                        </ul>
                    </div>
                    <div class="token-intro__media">
                        <div class="timeline"><h4 class="timeline__title">{{__("Timeline")}}</h4>
                            <div class="timeline__row">
                                <div class="timeline__col"><p class="timeline__year">{{__("token_step_1")}}</p>
                                    <div class="timeline__block">
                                        <div class="timeline__description"><p>{{__("token_step_1_info")}}</p>
                                        </div>
                                        <div class="timeline__free">✔</div>
                                    </div>
                                </div>
                                <div class="timeline__col"><p class="timeline__year">{{__("token_step_2")}}</p>
                                    <div class="timeline__block">
                                        <div class="timeline__description"><p>{{__("token_step_2_info")}}</p>
                                        </div>
                                        <div class="timeline__free">✔</div>
                                    </div>
                                </div>
                                <div class="timeline__col"><p class="timeline__year">{{__("token_step_3")}}</p>
                                    <div class="timeline__block">
                                        <div class="timeline__description"><p>{{__("token_step_3_info")}}</p>
                                        </div>
                                        <div class="timeline__free">✔</div>
                                    </div>
                                </div>
                                <div class="timeline__col"><p class="timeline__year">{{__("token_step_4")}}</p>
                                    <div class="timeline__block">
                                        <div class="timeline__description"><p>{{__("token_step_4_info")}} </p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__row">
                                <div class="timeline__col"><p class="timeline__year">{{__("token_step_5")}}</p>
                                    <div class="timeline__block">
                                        <div class="timeline__fire">
                                            <svg class="svg-icon">
                                                <use href="assets/icons/sprite.svg#icon-fire-long"></use>
                                            </svg>
                                        </div>
                                        <div class="timeline__description"><p>{{__("token_step_5_info")}} </p></div>
                                    </div>
                                </div>
                                <div class="timeline__col"><p class="timeline__year">{{__("token_step_6")}}</p>
                                    <div class="timeline__block">
                                        <div class="timeline__fire">
                                            <svg class="svg-icon">
                                                <use href="assets/icons/sprite.svg#icon-fire-long"></use>
                                            </svg>
                                        </div>
                                        <div class="timeline__description"><p>{{__("token_step_6_info")}}</p></div>
{{--                                        <div class="timeline__price"> {{__("7000 B55 tokens")}}</div>--}}
                                    </div>
                                </div>
                                <div class="timeline__col"><p class="timeline__year">{{__("token_step_7")}}</p>
                                    <div class="timeline__block">
                                        <div class="timeline__fire">
                                            <svg class="svg-icon">
                                                <use href="assets/icons/sprite.svg#icon-fire-long"></use>
                                            </svg>
                                        </div>
                                        <div class="timeline__description"><p>{{__("token_step_7_info")}}</p></div>
                                        <div class="timeline__price"></div>
                                    </div>
                                </div>
                                <div class="timeline__col"><p class="timeline__year">{{__("token_step_8")}}</p>
                                    <div class="timeline__block">
                                        <div class="timeline__fire">
                                            <svg class="svg-icon">
                                                <use href="assets/icons/sprite.svg#icon-fire-long"></use>
                                            </svg>
                                        </div>
                                        <div class="timeline__description"><p>{{__("token_step_8_info")}}</p></div>
                                        <div class="timeline__price"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="token-chart">
            <div class="container">
                <div class="token-chart__chart-wrapper">
                    <div class="token-chart__chart">
                        <svg class="token-chart__chart-line" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 396.8 135.6" style="enable-background:new 0 0 396.8 135.6" xml:space="preserve"><lineargradient id="a" gradientunits="userSpaceOnUse" x1="0" y1="67.807" x2="396.758" y2="67.807"><stop offset=".001" style="stop-color:#a0a9f1"></stop><stop
                                    offset="1" style="stop-color:#76c9f2"></stop></lineargradient><path
                                d="M1.5 135.5c-.7 0-1.3-.4-1.5-1.1-.2-.8.3-1.6 1.1-1.8 22.5-5.9 35.6-14.6 46-21.7 15.5-10.4 24.8-16.6 48.3 1.2 12.5 8.8 25.5 11 35.5 6.1 9.1-4.5 14.5-3.6 19.7-2.8 3.2.5 6.3 1 10.3.3 11.2-2.1 13.8-8 17.1-15.5 1-2.3 2.1-4.7 3.5-7.2 10.8-21.9 24.6-35.4 42-41.3 16-5.3 34.8-4 57.3 4.2 12.9 3 18.1-6.8 23.6-17.1 4.5-8.5 9.3-17.3 18.6-18.7 6.2-1 11.1-1.3 14.9-1.6 9.6-.7 13.6-1 21.3-9.3 4.7-5.1 13.2-5.9 21.4-6.6 5.3-.5 10.3-1 14-2.5.8-.3 1.6 0 2 .8.3.8 0 1.6-.8 2-4.1 1.7-9.4 2.2-14.9 2.7-7.7.7-15.6 1.4-19.5 5.7-8.5 9.2-13.4 9.5-23.3 10.3-3.8.3-8.6.6-14.7 1.6-7.9 1.2-12 9-16.4 17.2-5.5 10.3-11.8 22.1-27 18.5l-.2-.1c-45.2-16.4-75.7-5.1-95.8 35.6-1.3 2.4-2.4 4.7-3.4 7-3.4 7.7-6.5 14.9-19.2 17.3-4.5.8-8 .3-11.3-.2-5-.8-9.7-1.5-17.9 2.5-11 5.5-25.1 3.1-38.6-6.4-21.8-16.6-29.5-11.4-44.8-1.1-10.1 6.8-23.9 16.1-46.9 22.1-.2-.1-.3-.1-.4-.1z"
                                style="fill:url(#a)"></path></svg>
                        <div class="token-chart__chart-row">
                            <ul class="token-chart__chart-markers">
                                <li>{{__("token_chart_0")}}</li>
                                <li>{{__("token_chart_1")}}</li>
                                <li>{{__("token_chart_2")}}</li>
                                <li>{{__("token_chart_3")}}</li>
                                <li>{{__("token_chart_4")}}</li>
                            </ul>
                            <div class="token-chart__chart-col">
                                <div class="token-chart__chart-label">{{__("token_timeline_chart_1")}}</div>
                            </div>
                            <div class="token-chart__chart-col">
                                <div class="token-chart__chart-label">{{__("token_timeline_chart_2")}}</div>
                            </div>
                            <div class="token-chart__chart-col">
                                <div class="token-chart__chart-label">{{__("token_timeline_chart_3")}}</div>
                            </div>
                            <div class="token-chart__chart-col">
                                <div class="token-chart__chart-label">{{__("token_timeline_chart_4")}}</div>
                            </div>
                            <div class="token-chart__chart-col">
                                <div class="token-chart__chart-label">{{__("token_timeline_chart_5")}}</div>
                            </div>
                            <div class="token-chart__chart-col">
                                <div class="token-chart__chart-label">{{__("token_timeline_chart_6")}}</div>
                            </div>
                            <div class="token-chart__chart-col">
                                <div class="token-chart__chart-label">{{__("token_timeline_chart_7")}}</div>
                            </div>
                        </div>
                    </div>
                    {{--<div class="token-chart__chart-text"><p>{{__("End Free")}}</p>
                        <p>{{__("Trial Version")}}</p></div>--}}
                </div>
                <ul class="token-chart__list">
                    <li>
                        <div class="token-chart-item token-chart__item">
                            <div class="token-chart-item__icon">
                                <svg class="svg-icon">
                                    <use href="assets/icons/sprite.svg#icon-monets"></use>
                                </svg>
                            </div>
                            <p class="token-chart-item__label">{{__("Total")}}</p>
                            <p class="token-chart-item__value">1 000 000 000 APY</p></div>
                    </li>
                    <li>
                        <div class="token-chart-item token-chart-item--blue token-chart__item">
                            <div class="token-chart-item__icon">
                                <svg class="svg-icon">
                                    <use href="assets/icons/sprite.svg#icon-supply"></use>
                                </svg>
                            </div>
                            <p class="token-chart-item__label">{{__("MAX Supply")}}</p>
                            <p class="token-chart-item__value">1 000 000 APY</p></div>
                    </li>
                    <li>
                        <div class="token-chart-item token-chart-item--pink token-chart__item">
                            <div class="token-chart-item__icon">
                                <svg class="svg-icon">
                                    <use href="assets/icons/sprite.svg#icon-fire"></use>
                                </svg>
                            </div>
                            <p class="token-chart-item__label">{{__("Will be burned until 2025")}}</p>
                            <p class="token-chart-item__value">{{__("70% of the issue")}}</p></div>
                    </li>
                </ul>
                <div class="token-chart__buttons"><a class="token-chart__btn" href="{{route("cabinet")}}">{{__("Buy APY Token")}}<br>
{{--                        <span style="font-size: 13px;">{{__("Token sale starts on August 1, 2022")}}</span>--}}
                    </a></div>
            </div>
        </section><!-- End page  --></article>
@endsection
