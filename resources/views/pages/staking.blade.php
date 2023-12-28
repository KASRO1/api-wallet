@extends('layouts.front_app')

@section('content')
<article class="main-layout__content"><!-- Begin page-->
    <section class="investments-intro">
        <div class="container">
            <div class="investments-intro__row">
                <div class="investments-intro__col">
                    <div class="investments-intro__content">
                        <h1 class="investments-intro__title title"><span class="color-primary">{{__("Staking")}} </span> {{__("APY token")}}</h1>
                        <div class="investments-intro__description">
                            <p>{{__("APY_info1")}} </p>
                        </div>
                    </div>
                </div>
                <div class="investments-intro__col">
                    <div class="investments-intro__earn">
                        <div class="investments-intro__earn-icon">
                            <svg class="svg-icon">
                                <use href="assets/icons/sprite.svg#icon-wallet"></use>
                            </svg>
                        </div>
                        <p class="investments-intro__earn-label">{{__("Earn up to")}}</p>
                        <p class="investments-intro__earn-value">{{__("apy_sAPY")}}</p>
                        <p class="investments-intro__earn-subtext">{{__("a year")}}</p>
                    </div>
                </div>
            </div>
            <div class="investments-intro__swiper swiper-container js-investments-swiper swiper-no-swiping">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="investments-swiper-item">
                            <div class="investments-swiper-item__icon">
                                <svg class="svg-icon">
                                    <use href="assets/icons/sprite.svg#icon-group2"></use>
                                </svg>
                            </div>
                            <p class="investments-swiper-item__title">{{__("TOTAL CLIENTS")}}</p>
                            <p class="investments-swiper-item__value">3.4K</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="investments-swiper-item">
                            <div class="investments-swiper-item__icon">
                                <svg class="svg-icon">
                                    <use href="assets/icons/sprite.svg#icon-inftx"></use>
                                </svg>
                            </div>
                            <p class="investments-swiper-item__title">{{__("INVESTED")}}</p>
                            <p class="investments-swiper-item__value">$9.2M</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="investments-swiper-item">
                            <div class="investments-swiper-item__icon">
                                <svg class="svg-icon">
                                    <use href="assets/icons/sprite.svg#icon-monets"></use>
                                </svg>
                            </div>
                            <p class="investments-swiper-item__title">{{__("CLIENT'S INCOME")}}</p>
                            <p class="investments-swiper-item__value">$2.8M</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="investments-swiper-item">
                            <div class="investments-swiper-item__icon">
                                <svg class="svg-icon">
                                    <use href="assets/icons/sprite.svg#icon-wallet2"></use>
                                </svg>
                            </div>
                            <p class="investments-swiper-item__title">{{__("AVERAGE DEPOSIT")}}</p>
                            <p class="investments-swiper-item__value">$2.7M</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="growing">
        <div class="container">
            <div class="growing__row">
                <div class="growing__content">
                    <p class="growing__subtitle">{{__("Last 30 days")}}</p>
                    <h3 class="growing__title h2">{{__("Growing")}}</h3>
                </div>
                <div class="growing__media"><img class="growing__image" src="assets/images/growing/chart.png" alt="" role="presentation" /></div>
            </div>
        </div>
    </section>
    <section class="calculate">
        <div class="container">
            <h2 class="calculate__title title">
                <span class="color-primary">{{__("Calculate")}}</span>
                {{__("Your Income")}}
            </h2>
            <div class="calculate__block">
                <form>
                    <div class="calculate__block-row">
                        <div class="calculate__block-col">
                            <div class="calculate__field field"><label class="calculate__label">Currency</label>
                                <div class="field-payment">
                                    <div class="field-payment__icon"><img src="{{asset('assets/images/currency/APY.png')}}" alt=""></div>
                                    <select class="js-select-payment" name="currency" id="PSys">
                                        <option value="APY" data-icon-src="{{asset('assets/images/currency/APY.png')}}">APY
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <p class="calculate__block-value-label">{{__("Average Income Per Year")}}</p>
                            <p class="calculate__block-value">{{__("apy_sAPY")}}</p>
                            <a href="{{route('investplan.isolated')}}" class="btn btn--primary-gr calculate__btn">{{__("Invest now")}}</a>
                        </div>
                        <div class="calculate__block-col">
                            <div class="calculate__field field"><label class="calculate__label">{{__("Deposit Total")}}</label>
                                <div class="calculate__field-group js-slider-field" min="100" max="1000000" step="10"><input type="number" min="100" max="1000000" value="100" name="total" id="Sum">
                                    <div class="calculate__field-group-after" id="curr"></div>
                                </div>
                                <div class="calculate__progress">
                                    <div class="calculate__progress-labels">
                                        <p>100</p>
                                        <p>1,000,000</p>
                                    </div>
                                </div>
                            </div>
                            <table class="calculate__block-table">
                                <tbody>
                                    <tr>
                                        <td>{{__("Daily Income")}}</td>
                                        <td><strong class="color-success"><span id="calc1">0</span> <span id="calc1curr"></span></strong></td>
                                    </tr>
                                    <tr>
                                        <td>{{__("Monthly Income")}}</td>
                                        <td><strong class="color-success"><span id="calc2">0</span> <span id="calc2curr"></span></strong></td>
                                    </tr>
                                    <tr>
                                        <td>{{__("Yearly Income")}}</td>
                                        <td><strong class="color-success"><span id="calc3">0</span> <span id="calc3curr"></span></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script>
        function sch() {
            cid = $('#PSys').val();
            $('#curr').html(curr);
            $('#calc1curr').html(cid);
            $('#calc2curr').html(cid);
            $('#calc3curr').html(cid);
            recalc();
        }

        sch();
        $('#PSys').change(sch);
        setInterval(sch, 250);

        function recalc() {
            z = 1 * $('#Sum').val();
            cid = $('#PSys').val();
            $('#calc1').html(1 * ((z * 0.65 / 100).toFixed(6)));
            $('#calc2').html(1 * ((z * 0.65 * 30 / 100).toFixed(6)));
            $('#calc3').html(1 * ((z * 0.65 * 364 / 100).toFixed(6)));
        }

        $('#Sum').on('change', recalc);

    </script>
    <section class="trading-bot">
        <div class="container">
            <div class="trading-bot__row">
                <div class="trading-bot__content">
                    <h2 class="trading-bot__title title">
                        <span class="color-primary">{{__("Advantages of staking")}} </span> {{__("APY token")}}
                    </h2>
                    <div class="trading-bot__text typography">
                        <p>{!! __("APY_info2") !!}</p>
                        <p>{!! __("APY_info3") !!}</p>
                        <p>{!! __("APY_info4") !!}</p>
                        <p>{!! __("APY_info5") !!}</p>
                    </div>
                    <div class="trading-bot__buttons"><a class="btn btn--primary-gr trading-bot__btn" href="{{route("register")}}"> <span>{{__("Invest now")}}</span></a></div>
                </div>
                <div class="trading-bot__media"><img class="trading-bot__image" src="assets/images/trading-bot/image.png" alt="" role="presentation" /></div>
            </div>
        </div>
    </section><!-- End page  -->
</article>
@endsection