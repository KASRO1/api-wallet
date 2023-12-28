@extends('layouts.front_app')

@section('content')
<article class="main-layout__content"><!-- Begin page-->
    <section class="company">
        <div class="container">
            <h1 class="company__title title">{{__("APY Technology")}}</h1>
            <div class="company__text typography">
                <p><strong>{!! __("B55_comp_1") !!} </strong></p>
                <p>{!! __("B55_comp_2") !!} </p>
                <p> {!! __("B55_comp_3") !!} </p>
                <p> {!! __("B55_comp_4") !!} </p>
            </div>
            <div class="statistics company__statistics">
                <div class="statistics__row">
                    <div class="statistics__col-left">
                        <h2 class="title title--small title--line statistics__title">{{__("B55 finance statistics and information")}}</h2>
                    </div>
                    <div class="statistics__col-right">
                        <ul class="statistics__list">
                            <li>
                                <p class="statistics__value"><span class="js-count" data-count="30">30</span><small>K</small></p>
                                <div class="statistics__description">
                                    <p>{{__("over 30 thousand customers worldwide")}}</p>
                                </div>
                            </li>
                            <li>
                                <p class="statistics__value"><span class="js-count" data-count="50">50</span><small>mln$</small>
                                </p>
                                <div class="statistics__description">
                                    <p>{{__("of daily trading volume")}} </p>
                                </div>
                            </li>
                            <li>
                                <p class="statistics__value"><span class="js-count" data-count="75">75</span><small>%</small></p>
                                <div class="statistics__description">
                                    <p>{{__("of customers recommend us to their friends")}}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="documents">
        <div class="container">
            <div class="documents__swiper swiper-container js-documents-swiper swiper-no-swiping">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="documents__row">
                            <div class="documents__col">
                                <div class="documents__media"><img class="documents__image" src="{{asset('pdf/doc2.png')}}" alt="" role="presentation" /></div>
                            </div>
                            <div class="documents__col">
                                <div class="documents__content">
                                    <h2 class="documents__title title"><span class="color-primary">{{__("APY information document")}} </span></h2>
                                    <div class="documents__text typography">
                                        <p>{!! __("legal_address") !!}</p>
                                    </div>
                                    <a class="doc-link" href="{{asset('pdf/apy_wallet_docs.pdf')}}" download="download">
                                        <span>{{__("Download PDF")}}</span><span class="doc-link__icon"><svg class="svg-icon">
                                                <use href="assets/icons/sprite.svg#icon-pdf"></use>
                                            </svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="documents__row">
                            <div class="documents__col">
                                <div class="documents__media"><img class="documents__image" src="{{asset('pdf/doc.png')}}" alt="" role="presentation" /></div>
                            </div>
                            <div class="documents__col">
                                <div class="documents__content">
                                    <h2 class="documents__title title"><span class="color-primary">{{__("APY information document")}} </span></h2>
                                    <div class="documents__text typography">
                                        <p>{!! __("legal_address") !!} </p>
                                    </div>
                                    <a class="doc-link" href="{{asset('pdf/apy_wallet_docs.pdf')}}" download="download">
                                        <span>{{__("Download PDF")}}</span><span class="doc-link__icon"><svg class="svg-icon">
                                                <use href="assets/icons/sprite.svg#icon-pdf"></use>
                                            </svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="documents__swiper-arrows">
                    <div style="transform: rotate(180deg)" class="documents__swiper-left" ref="prev">
                        @include('cabinet.new.icons.arrow-back')
                    </div>
                    <div style="transform: rotate(180deg)" class="documents__swiper-right" ref="next">
                        @include('cabinet.new.icons.arrow-back')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="media-about">
        <div class="container">
            <h2 class="title media-about__title">{{__("THEY TALK")}} <span class="color-primary"> {{__("ABOUT US …")}}</span>
            </h2>
            <div class="media-about__swiper">
                <div class="swiper-container js-media-about-swiper swiper-no-swiping">
                    <div class="media-about__swiper-right" ref="next">
                        <svg class="svg-icon">
                            <use href="assets/icons/sprite.svg#icon-arrow2"></use>
                        </svg>
                    </div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><a href="https://medium.com/@apywellys23/apy-wallet-a9eed9dca508" target="_blank" style="text-decoration: none; color: #4A4A4A;">
                                <div class="media-about-item">
                                    <div class="media-about-item__icon"><img src="{{asset('assets/images/media-about/quote.png')}}" alt=""></div>
                                    <div class="media-about-item__description">
                                        <h4 style="margin-bottom: 10px; font-weight:bold;">About multi-currency crypto wallet</h4>
                                        <p>APY is a cryptocurrency exchange that combines advanced financial tools with decentralization. The main functionality of the wallet is based on built -in swaps (which allow users to trade cryptocurrency from the inside of their wallet).</p>
                                    </div>
                                    <div class="media-about-item__image"><img src="{{asset('assets/images/media-about/medium-logo.png')}}" style="width: 190px;"></div>
                                </div>
                            </a></div>
                        <div class="swiper-slide"><a href="https://medium.com/@apy_wallet/apy-crypto-lending-99993d9e58a3" target="_blank" style="text-decoration: none; color: #4A4A4A;">
                                <div class="media-about-item">
                                    <div class="media-about-item__icon"><img src="{{asset('assets/images/media-about/quote.png')}}" alt=""></div>
                                    <div class="media-about-item__description">
                                        <h5 style="margin-bottom: 10px; font-weight:bold;">APY Crypto Lending</h5>
                                        <p>The advent of crypto lending was a crucial breakthrough in DeFi. Lenders could suddenly generate passive yields from formerly illiquid assets. Borrowers could immediately receive cash for....</p>
                                    </div>
                                    <div class="media-about-item__image"><img src="{{asset('assets/images/media-about/medium-logo.png')}}" style="width: 150px;">
                                    </div>
                                </div>
                            </a></div>
                        <div class="swiper-slide"><a href="https://medium.com/@apy_wallet/apy-liquidity-pools-1f1ddec12740" target="_blank" style="text-decoration: none; color: #4A4A4A;">
                                <div class="media-about-item">
                                    <div class="media-about-item__icon"><img src="{{asset('assets/images/media-about/quote.png')}}" alt=""></div>
                                    <div class="media-about-item__description">
                                        <h5 style="margin-bottom: 10px; font-weight:bold;">APY Liquidity Pools</h5>
                                        <p>Liquidity pools are one of the foundational technologies behind the current DeFi ecosystem. They are an essential part of automated market makers..</p>
                                    </div>
                                    <div class="media-about-item__image">
                                        <img src="{{asset('assets/images/media-about/medium-logo.png')}}" style="width: 200px;">
                                    </div>
                                </div>
                            </a></div>
                        <div class="swiper-slide"><a href="https://medium.com/@apy_wallet/apy-defi-staking-96581684662b" target="_blank" style="text-decoration: none; color: #4A4A4A;">
                                <div class="media-about-item">
                                    <div class="media-about-item__icon"><img src="{{asset('assets/images/media-about/quote.png')}}" alt=""></div>
                                    <div class="media-about-item__description">
                                        <h5 style="margin-bottom: 10px; font-weight:bold;">APY De-Fi staking</h5>
                                        <p>DeFi staking is the process of locking crypto assets into a smart contract in exchange for rewards and generating passive income...</p>
                                    </div>
                                    <div class="media-about-item__image">
                                        <img src="{{asset('assets/images/media-about/medium-logo.png')}}" style="width: 200px;">
                                    </div>
                                </div>
                            </a></div>
                        {{-- <div class="swiper-slide">
                                <div class="media-about-item">
                                    <div class="media-about-item__icon"><img
                                            src="assets/images/media-about/quote.png" alt=""></div>
                                    <div class="media-about-item__description"><p>At Yahoo Finance, you get free
                                            stock quotes, up-to-date news, portfolio management resources,
                                            international market data, social interaction and mortgage...</p>
                                    </div>
                                    <div class="media-about-item__image"><img
                                            src="assets/images/media-about/yahoo.png" alt=""></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="media-about-item">
                                    <div class="media-about-item__icon"><img
                                            src="assets/images/media-about/quote.png" alt=""></div>
                                    <div class="media-about-item__description"><p>NewsBTC is a cryptocurrency
                                            news service that covers bitcoin news today, technical analysis &
                                            forecasts for bitcoin price and other altcoins.</p></div>
                                    <div class="media-about-item__image"><img
                                            src="assets/images/media-about/news.png" alt=""></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="media-about-item">
                                    <div class="media-about-item__icon"><img
                                            src="assets/images/media-about/quote.png" alt=""></div>
                                    <div class="media-about-item__description"><p>Die aktuellsten Nachrichten
                                            zur Kryptobranche auf Cointelegraph. Aktuelle Nachrichten zu
                                            Bitcoin, Ethereum, Blockchain, Minig, Kryptowährungskurse und
                                            mehr. </p></div>
                                    <div class="media-about-item__image"><img
                                            src="assets/images/media-about/coint.png" alt=""></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="media-about-item">
                                    <div class="media-about-item__icon"><img
                                            src="assets/images/media-about/quote.png" alt=""></div>
                                    <div class="media-about-item__description"><p>Forbes.pl -business, economy,
                                            finance. Ranking 'the richest poles', list of billionaires, life,
                                            career, leadership. </p></div>
                                    <div class="media-about-item__image"><img
                                            src="assets/images/media-about/fb.png" alt=""></div>
                                </div>
                            </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-team our-team--light">
        <div class="container">
            <div class="our-team__row">
                <div class="our-team__col">
                    <a class="media-block" href="http://vimeo.com/767749676" data-fancybox="our-team">
                        <img src="{{asset('media/promo_preview.jpg')}}" alt="">
                    </a>
                </div>
                <div class="our-team__col">
                    <div class="our-team__content">
                        <h2 class="title title--small our-team__title">{{__("Our team")}}</h2>
                        <div class="our-team__typography typography">
                            <p><strong>{{__("B55_team_1")}} </strong></p>
                            <p>{{__("B55_team_2")}} </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-swiper">
                <div class="swiper-container js-team-swiper swiper-no-swiping">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-item">
                                <div class="team-item__image"><img src="images/team/1-1.jpg" alt=""></div>
                                <p class="team-item__name">Clara Fowler</p>
                                <p class="team-item__description">{{__("Founder")}}</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item">
                                <div class="team-item__image"><img src="images/team/2.jpg" alt=""></div>
                                <p class="team-item__name">Juniper Mckinney</p>
                                <p class="team-item__description">{{__("Founder")}}</p>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item">
                                <div class="team-item__image"><img src="images/team/3.jpg" alt=""></div>
                                <p class="team-item__name">Sam Doughty</p>
                                <p class="team-item__description">{{__("Adviser")}}</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item">
                                <div class="team-item__image"><img src="images/team/4.jpg" alt=""></div>
                                <p class="team-item__name">Brandon Burum</p>
                                <p class="team-item__description">CTO</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item">
                                <div class="team-item__image"><img src="images/team/5.jpg" alt=""></div>
                                <p class="team-item__name">Brent Woods</p>
                                <p class="team-item__description">{{__("Creative Director")}}</p>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item">
                                <div class="team-item__image"><img src="images/team/6.jpg" alt=""></div>
                                <p class="team-item__name">Shanda Will</p>
                                <p class="team-item__description">{{__("Communications & PR")}}</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item">
                                <div class="team-item__image"><img src="images/team/7.jpg" alt=""></div>
                                <p class="team-item__name">Moris Hudson</p>
                                <p class="team-item__description">{{__("Partnership")}}</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item">
                                <div class="team-item__image"><img src="images/team/8.jpg" alt=""></div>
                                <p class="team-item__name">Lizbeth Wade</p>
                                <p class="team-item__description">{{__("Brand")}}</p>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item">
                                <div class="team-item__image"><img src="images/team/9.jpg" alt=""></div>
                                <p class="team-item__name">Aron Waters</p>
                                <p class="team-item__description">{{__("CFO")}}</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item">
                                <div class="team-item__image"><img src="images/team/10.jpg" alt=""></div>
                                <p class="team-item__name">Curtis Bond</p>
                                <p class="team-item__description">{{__("COO")}}</p>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item">
                                <div class="team-item__image"><img src="images/team/11.jpg" alt=""></div>
                                <p class="team-item__name">Julie Randall</p>
                                <p class="team-item__description">{{__("CCO")}}</p>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-item">
                                <div class="team-item__image"><img src="images/team/12.jpg" alt=""></div>
                                <p class="team-item__name">Justina Johnson</p>
                                <p class="team-item__description">{{__("Content")}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="reviews">--}}
    {{-- <div class="container"><h2 class="title reviews__title">{{__("Client")}}<br><span--}} {{--                        class="color-primary">{{__("reviews")}} </span></h2>--}}
        {{-- <div class="reviews__swiper">--}}
        {{-- <div class="swiper-container js-reviews-swiper">--}}
        {{-- <div class="swiper-wrapper">--}}
        {{-- <div class="swiper-slide"><a class="reviews-video"--}}
        {{-- href="https://www.youtube.com/shorts/QTCqJJXlsVY"--}}
        {{-- data-fancybox="reviews"><img--}}
        {{-- src="https://i.ytimg.com/vi/QTCqJJXlsVY/maxresdefault.jpg" alt=""></a></div>--}}
        {{-- <div class="swiper-slide"><a class="reviews-video"--}}
        {{-- href="https://www.youtube.com/shorts/RVnNw22RDcI"--}}
        {{-- data-fancybox="reviews"><img--}}
        {{-- src="https://i.ytimg.com/vi/RVnNw22RDcI/maxresdefault.jpg" alt=""></a></div>--}}
        {{-- <div class="swiper-slide"><a class="reviews-video"--}}
        {{-- href="https://www.youtube.com/shorts/u0xgXIlldd8"--}}
        {{-- data-fancybox="reviews"><img--}}
        {{-- src="https://i.ytimg.com/vi/u0xgXIlldd8/maxresdefault.jpg" alt=""></a></div>--}}
        {{-- <div class="swiper-slide"><a class="reviews-video"--}}
        {{-- href="https://www.youtube.com/shorts/pr1U_WSWMuI"--}}
        {{-- data-fancybox="reviews"><img--}}
        {{-- src="https://i.ytimg.com/vi/pr1U_WSWMuI/maxresdefault.jpg" alt=""></a></div>--}}
        {{-- <div class="swiper-slide"><a class="reviews-video"--}}
        {{-- href="https://www.youtube.com/shorts/sMKlSFcTK7g"--}}
        {{-- data-fancybox="reviews"><img--}}
        {{-- src="https://i.ytimg.com/vi/sMKlSFcTK7g/maxresdefault.jpg" alt=""></a></div>--}}
        {{-- <div class="swiper-slide"><a class="reviews-video"--}}
        {{-- href="https://www.youtube.com/watch?v=XcoEpKUEMmA"--}}
        {{-- data-fancybox="reviews"><img--}}
        {{-- src="https://i.ytimg.com/vi/XcoEpKUEMmA/maxresdefault.jpg" alt=""></a></div>--}}
        {{-- <div class="swiper-slide"><a class="reviews-video"--}}
        {{-- href="https://www.youtube.com/shorts/pLITpu1mXWU"--}}
        {{-- data-fancybox="reviews"><img--}}
        {{-- src="https://i.ytimg.com/vi/pLITpu1mXWU/maxresdefault.jpg" alt=""></a></div>--}}
        {{-- <div class="swiper-slide"><a class="reviews-video"--}}
        {{-- href="https://www.youtube.com/shorts/G-40KjJ1jSE"--}}
        {{-- data-fancybox="reviews"><img--}}
        {{-- src="https://i.ytimg.com/vi/G-40KjJ1jSE/maxresdefault.jpg" alt=""></a></div>--}}
        {{-- </div>--}}
        {{-- <div class="reviews__scrollbar swiper-scrollbar"></div>--}}
        {{-- </div>--}}
        {{-- </div>--}}
        {{-- </div>--}}
        {{-- </section>--}}
        <!-- End page  -->
</article>
@endsection