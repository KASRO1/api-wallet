@extends('layouts.front_app')

@section('content')
<main class="flex flex-column flex-grow trans-margin-left trans-0-3 news-page">
    <div data-v-6a617831="">
        <div data-v-6a617831="" class="ticker">
            <div data-v-6a617831="" class="tradingview-widget-container" style="width: 100%; height: 46px;">
                <iframe scrolling="no" allowtransparency="true" frameborder="0"
                        src="https://s.tradingview.com/embed-widget/ticker-tape/?locale=uk#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%5D%2C%22showSymbolLogo%22%3Afalse%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22displayMode%22%3A%22adaptive%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A74%2C%22"
                        style="box-sizing: border-box; height: 46px; width: 100%;"></iframe>
                <style>
                    .tradingview-widget-copyright {
                        font-size: 13px !important;
                        line-height: 32px !important;
                        text-align: center !important;
                        vertical-align: middle !important;
                        font-family: 'Trebuchet MS', Arial, sans-serif !important;
                        color: #9db2bd !important;
                    }

                    .tradingview-widget-copyright .blue-text {
                        color: #2196f3 !important;
                    }

                    .tradingview-widget-copyright a {
                        text-decoration: none !important;
                        color: #9db2bd !important;
                    }

                    .tradingview-widget-copyright a:visited {
                        color: #9db2bd !important;
                    }

                    .tradingview-widget-copyright a:hover .blue-text {
                        color: #38acdb !important;
                    }

                    .tradingview-widget-copyright a:active .blue-text {
                        color: #299dcd !important;
                    }

                    .tradingview-widget-copyright a:visited .blue-text {
                        color: #2196f3 !important;
                    }
                </style>
            </div>
        </div>
        <div data-v-6a617831="" class="box">
            <div data-v-6a617831="" class="relative margin-top-4">

                <div data-v-6a617831="" class="flex overflow-hidden color-white border-rounded-3">
                    @php
                        $tip = rand(1, 3);
                    @endphp

                    @if($tip == 1)
                    <div data-v-6a617831=""
                         class="slide flex items-center width-full grid bg-no-repeat bg-center bg-cover flex-no-shrink overflow-auto trans-transform trans-0-4 padding-x-3 padding-x-5--md padding-x-6--lg"
                         style="background-image: url(&quot;/img/steps.png&quot;); transform: translateX(0%);">
                        <div data-v-6a617831="" class="grid-column-12 grid-column-8--md padding-y-4"><h2
                                data-v-6a617831="" class="font-normal"> Важно знать </h2>
                            <p data-v-6a617831=""> Для того, чтобы начать инвестировать, вы должны войти в свой
                                аккаунт, нажать на кнопку «Пополнение» и затем, пользуясь подсказками системы,
                                осуществить вклад. Просто выберите инвестиционный план, на который вы хотите
                                разместить средства, сумму, которую вы планируете вложить в компании, а также
                                электронную платежную систему, которую вы планируете использовать для этого. </p>
                        </div>
                    </div>
                    @endif
                    @if($tip == 2)
                    <div data-v-6a617831=""
                         class="slide flex items-center width-full grid bg-no-repeat bg-center bg-cover flex-no-shrink overflow-auto trans-transform trans-0-4 padding-x-3 padding-x-5--md padding-x-6--lg"
                         style="background-image: url(&quot;/img/cash.png&quot;); transform: translateX(0%);">
                        <div data-v-6a617831="" class="grid-column-12 grid-column-8--md padding-y-4"><h2
                                data-v-6a617831="" class="font-normal"> Важно знать </h2>
                            <p data-v-6a617831=""> Все начисления по вкладам производятся ежедневно. Вывод средств осуществляется по завершению срока работы депозита. Срок депозита устанавливается на личное усмотрение. </p></div>
                    </div>
                    @endif
                    @if($tip == 3)
                    <div data-v-6a617831=""
                         class="slide flex items-center width-full grid bg-no-repeat bg-center bg-cover flex-no-shrink overflow-auto trans-transform trans-0-4 padding-x-3 padding-x-5--md padding-x-6--lg"
                         style="background-image: url(&quot;/img/charts.png&quot;); transform: translateX(0%);">
                        <div data-v-6a617831="" class="grid-column-12 grid-column-8--md padding-y-4"><h2
                                data-v-6a617831="" class="font-normal"> Важно знать </h2>
                            <p data-v-6a617831=""> Все запросы на вывод средств, обрабатываются автоматически системой безопасности.
                                Это может занять до 24 часов. </p></div>
                    </div>
                    @endif
                </div>
            </div>
            <div data-v-383f5412="" data-v-6a617831=""
                 class="grid grid-gap-3 grid-gap-4--lg margin-y-4 padding-left-0 no-list relative z-index-1">
                <div data-v-383f5412="" class=""></div>
                @foreach($news as $item)
                <a data-v-f6930a7e="" data-v-6a617831=""
                   href="{{ route('page.news.show', $item) }}"
                   class="news-card-horizontal news-card flex flex-row--md flex-column padding-bottom-3 grid-column-12"
                   id="480" data-v-383f5412="">
                    <div data-v-f6930a7e=""
                         class="news-card-horizontal__content flex flex-column flex-grow margin-right-3 justify-between">
                        <div data-v-f6930a7e=""
                             class="news-date flex items-center trans-transform trans-0-3 margin-top-3 margin-bottom-2 font-xs color-gray font-medium text-upper">
                            <span data-v-f6930a7e="">{{ $item->published_at->format('Y-m-d') }}</span><!----></div>
                        <div data-v-f6930a7e=""
                             class="news-title trans-transform trans-0-3 margin-bottom-2 text-tight font-medium color-default">
                            {{ $item->title }}
                        </div>
                        <div data-v-f6930a7e="" class="news-content trans-transform trans-0-3 color-gray">
                            {{ Purify::clean(\Illuminate\Support\Str::limit($item->description, 500)) }}
                        </div>
                    </div>
                    <div data-v-f6930a7e=""
                         class="news-photo flex justify-center items-center trans-transform trans-0-3 border-rounded-3 bg-no-repeat bg-center bg-cover margin-top-3 margin-top-0--md"
                         style="background-image: url(&quot;https://cdn1.teqra.com/upload/news/ab/ab8ff805ae27ca9a25c28d4557954479_ZD.jpg&quot;);">
                        <!----></div>
                </a>
                @endforeach
            </div>
        </div>
        <div data-v-3971779c="" data-v-6a617831=""
             class="padding-y-4 padding-y-5--md relative bg-primary-gradient overflow-hidden">
            <svg data-v-3971779c="" viewBox="0 0 867 336" fill="none" xmlns="http://www.w3.org/2000/svg"
                 class="icon-globe-lite height-full absolute bottom-0 right-0">
                <path data-v-3971779c=""
                      d="M991.805-76.469c45.595 42.404 86.365 61.297 107.245 68.993-13.72-26.09-30.15-51.17-49.19-74.782-10.35-12.81-21.4-25.24-33.3-37.142-11.56-11.565-23.583-22.323-36.041-32.437-24.214-19.641-49.953-36.497-76.805-50.538 8.12 19.289 32.627 70.707 79.252 117.332 2.859 2.887 5.805 5.775 8.839 8.574z"
                      fill="url(#globe-lite_svg__paint0_linear)"></path>
                <path data-v-3971779c=""
                      d="M1108.61 405.275c-6.14 13.031-12.87 25.885-20.24 38.446-58.13-11.872-189.596-58.702-372.739-241.846-189.52-189.52-244.559-334.613-260.154-394.24 12.4-7.24 25.049-13.88 37.933-19.846 10.084 43.767 56.343 189.579 251.55 384.786 195.251 195.251 325.06 227.438 363.65 232.7z"
                      fill="url(#globe-lite_svg__paint1_linear)"></path>
                <path data-v-3971779c=""
                      d="M1022.67 529.995c-35.907-7.329-186.409-48.751-391.891-254.232C426.236 71.219 376.943-87.623 367.518-125.952c-1.004.978-2.028 1.929-3.051 2.88-1.279 1.188-2.557 2.376-3.794 3.613-9.307 9.308-17.984 18.952-26.31 28.831 20.96 66.134 84.397 213.001 267.087 395.691 179.699 179.699 320.132 239.223 385.298 258.541 10.202-8.589 20.202-17.559 29.782-27.145 1.66-1.617 3.22-3.303 4.77-4.979v-.003l.01-.007 1.09-1.185.27-.29z"
                      fill="url(#globe-lite_svg__paint2_linear)"></path>
                <path data-v-3971779c=""
                      d="M286.888-18.645l-2.609.205v.059a458.443 458.443 0 00-27.307 57.588c20.872 72.232 79.238 209.103 241.041 370.905 151.249 151.25 278.548 210.011 352.436 232.891a466.837 466.837 0 0061.312-27.951c-38.549-6.039-191.235-41.056-384.419-234.24C304.066 157.536 287.005-16.916 286.888-18.645z"
                      fill="url(#globe-lite_svg__paint3_linear)"></path>
                <path data-v-3971779c=""
                      d="M231.234 133.484a468.238 468.238 0 00-2.902 129.366C258.218 328.119 310.97 413 405.041 507.071c83.913 83.913 159.018 132.312 219.348 160.542 47.416 6.581 95.624 5.775 142.88-2.316-19.436-.381-155.105-9.732-332.913-187.541C255.887 299.258 233.623 154.81 231.234 133.484z"
                      fill="url(#globe-lite_svg__paint4_linear)"></path>
                <path data-v-3971779c=""
                      d="M771.527 706.772c-.302.009-.707.02-1.019.02.24-.03.473-.083.712-.138l.257-.057c.146-.032.296-.061.453-.083l-.015.249c-.064 0-.201.004-.373.009h-.015z"
                      fill="url(#globe-lite_svg__paint5_linear)"></path>
                <path data-v-3971779c=""
                      d="M328.442 504.256c10.861 14.878 23.906 30.385 39.545 45.057 10.334 9.63 20.242 17.486 29.77 24.522 19.083 23.628 35.544 48.677 49.234 74.826-20.887-7.725-61.649-26.589-107.234-69.036a308.765 308.765 0 01-8.882-8.531c-46.64-46.64-71.103-98.072-79.296-117.376a462.134 462.134 0 0176.863 50.538z"
                      fill="url(#globe-lite_svg__paint6_linear)"></path>
                <path data-v-3971779c=""
                      d="M1148.54 151.439a484.194 484.194 0 00-7.51-43.679c-41.76-9.132-117.17-38.373-209.731-130.934-92.297-92.298-130.597-174.159-146.324-221.664-15.083-3.181-30.326-5.643-45.614-7.299 12.708 48.56 50.641 146.324 162.594 258.277C1012.82 116.95 1102.91 144.8 1148.54 151.44z"
                      fill="url(#globe-lite_svg__paint7_linear)"></path>
                <path data-v-3971779c=""
                      d="M1148.81 263.231c-1.62 13.704-3.81 27.38-6.63 40.938-54.79-8.003-179.616-43.972-336.993-201.349C654.348-48.019 612.868-181.401 601.362-246.787c13.705-2.595 27.497-4.603 41.334-5.951 10.963 59.128 50.245 184.683 191.806 326.244C986.294 225.297 1103.05 256.752 1148.81 263.23z"
                      fill="url(#globe-lite_svg__paint8_linear)"></path>
                <defs data-v-3971779c="">
                    <linearGradient data-v-3971779c="" id="globe-lite_svg__paint0_linear" x1="1344.48" y1="208.519"
                                    x2="707.14" y2="-366.225" gradientUnits="userSpaceOnUse">
                        <stop data-v-3971779c="" stop-color="#fff" stop-opacity="0"></stop>
                        <stop data-v-3971779c="" offset="1" stop-color="#fff" stop-opacity=".16"></stop>
                    </linearGradient>
                    <linearGradient data-v-3971779c="" id="globe-lite_svg__paint1_linear" x1="1344.48" y1="208.519"
                                    x2="707.14" y2="-366.225" gradientUnits="userSpaceOnUse">
                        <stop data-v-3971779c="" stop-color="#fff" stop-opacity="0"></stop>
                        <stop data-v-3971779c="" offset="1" stop-color="#fff" stop-opacity=".16"></stop>
                    </linearGradient>
                    <linearGradient data-v-3971779c="" id="globe-lite_svg__paint2_linear" x1="1344.48" y1="208.519"
                                    x2="707.14" y2="-366.225" gradientUnits="userSpaceOnUse">
                        <stop data-v-3971779c="" stop-color="#fff" stop-opacity="0"></stop>
                        <stop data-v-3971779c="" offset="1" stop-color="#fff" stop-opacity=".16"></stop>
                    </linearGradient>
                    <linearGradient data-v-3971779c="" id="globe-lite_svg__paint3_linear" x1="1344.48" y1="208.519"
                                    x2="707.14" y2="-366.225" gradientUnits="userSpaceOnUse">
                        <stop data-v-3971779c="" stop-color="#fff" stop-opacity="0"></stop>
                        <stop data-v-3971779c="" offset="1" stop-color="#fff" stop-opacity=".16"></stop>
                    </linearGradient>
                    <linearGradient data-v-3971779c="" id="globe-lite_svg__paint4_linear" x1="1344.48" y1="208.519"
                                    x2="707.14" y2="-366.225" gradientUnits="userSpaceOnUse">
                        <stop data-v-3971779c="" stop-color="#fff" stop-opacity="0"></stop>
                        <stop data-v-3971779c="" offset="1" stop-color="#fff" stop-opacity=".16"></stop>
                    </linearGradient>
                    <linearGradient data-v-3971779c="" id="globe-lite_svg__paint5_linear" x1="1344.48" y1="208.519"
                                    x2="707.14" y2="-366.225" gradientUnits="userSpaceOnUse">
                        <stop data-v-3971779c="" stop-color="#fff" stop-opacity="0"></stop>
                        <stop data-v-3971779c="" offset="1" stop-color="#fff" stop-opacity=".16"></stop>
                    </linearGradient>
                    <linearGradient data-v-3971779c="" id="globe-lite_svg__paint6_linear" x1="1344.48" y1="208.519"
                                    x2="707.14" y2="-366.225" gradientUnits="userSpaceOnUse">
                        <stop data-v-3971779c="" stop-color="#fff" stop-opacity="0"></stop>
                        <stop data-v-3971779c="" offset="1" stop-color="#fff" stop-opacity=".16"></stop>
                    </linearGradient>
                    <linearGradient data-v-3971779c="" id="globe-lite_svg__paint7_linear" x1="1344.48" y1="208.519"
                                    x2="707.14" y2="-366.225" gradientUnits="userSpaceOnUse">
                        <stop data-v-3971779c="" stop-color="#fff" stop-opacity="0"></stop>
                        <stop data-v-3971779c="" offset="1" stop-color="#fff" stop-opacity=".16"></stop>
                    </linearGradient>
                    <linearGradient data-v-3971779c="" id="globe-lite_svg__paint8_linear" x1="1344.48" y1="208.519"
                                    x2="707.14" y2="-366.225" gradientUnits="userSpaceOnUse">
                        <stop data-v-3971779c="" stop-color="#fff" stop-opacity="0"></stop>
                        <stop data-v-3971779c="" offset="1" stop-color="#fff" stop-opacity=".16"></stop>
                    </linearGradient>
                </defs>
            </svg>
            <div data-v-3971779c="" class="grid box">
                <div data-v-3971779c="" class="grid-column-12 grid-column-6--md padding-y-3">
                    <div data-v-3971779c="" class="color-white font-3xl text-tight relative"><span
                            data-v-3971779c="" class="relative z-index-1">Будь в числе лучших уже сейчас!<br>Начинай сотрудничество с Avax Finance и выходи за рамки обыденного вместе с лучшей командой трейдеров уже сегодня!</span>
                        <svg data-v-3971779c="" viewBox="0 0 115 115" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="call-to-action-pattern absolute left-0 top-0 height-7 fill-lite-gray opacity-6">
                            <path data-v-3971779c="" fill="#C8CAD4"
                                  d="M14.243 0l.707.707-4.243 4.243L10 4.243zM24.243 0l.707.707-4.243 4.243L20 4.243zM34.243 0l.707.707-4.243 4.243L30 4.243zM4.243 10l.707.707L.707 14.95 0 14.243zM14.243 10l.707.707-4.243 4.243-.707-.707zM24.243 10l.707.707-4.243 4.243-.707-.707zM34.243 10l.707.707-4.243 4.243-.707-.707zM4.243 20l.707.707L.707 24.95 0 24.243zM14.243 20l.707.707-4.243 4.243-.707-.707zM24.243 20l.707.707-4.243 4.243-.707-.707zM34.243 20l.707.707-4.243 4.243-.707-.707zM4.243 30l.707.707L.707 34.95 0 34.243zM14.243 30l.707.707-4.243 4.243-.707-.707zM24.243 30l.707.707-4.243 4.243-.707-.707zM34.243 30l.707.707-4.243 4.243-.707-.707zM4.243 0l.707.707L.707 4.95 0 4.243zM54.243 0l.707.707-4.243 4.243L50 4.243zM64.243 0l.707.707-4.243 4.243L60 4.243zM74.243 0l.707.707-4.243 4.243L70 4.243zM44.243 10l.707.707-4.243 4.243-.707-.707zM54.243 10l.707.707-4.243 4.243-.707-.707zM64.243 10l.707.707-4.243 4.243-.707-.707zM74.243 10l.707.707-4.243 4.243-.707-.707zM44.243 20l.707.707-4.243 4.243-.707-.707zM54.243 20l.707.707-4.243 4.243-.707-.707zM64.243 20l.707.707-4.243 4.243-.707-.707zM74.243 20l.707.707-4.243 4.243-.707-.707zM44.243 30l.707.707-4.243 4.243-.707-.707zM54.243 30l.707.707-4.243 4.243-.707-.707zM64.243 30l.707.707-4.243 4.243-.707-.707zM74.243 30l.707.707-4.243 4.243-.707-.707zM44.243 0l.707.707-4.243 4.243L40 4.243zM94.243 0l.707.707-4.243 4.243L90 4.243zM104.243 0l.707.707-4.243 4.243-.707-.707zM114.243 0l.707.707-4.243 4.243-.707-.707zM84.243 10l.707.707-4.243 4.243-.707-.707zM94.243 10l.707.707-4.243 4.243-.707-.707zM104.243 10l.707.707-4.243 4.243-.707-.707zM114.243 10l.707.707-4.243 4.243-.707-.707zM84.243 20l.707.707-4.243 4.243-.707-.707zM94.243 20l.707.707-4.243 4.243-.707-.707zM104.243 20l.707.707-4.243 4.243-.707-.707zM114.243 20l.707.707-4.243 4.243-.707-.707zM84.243 30l.707.707-4.243 4.243-.707-.707zM94.243 30l.707.707-4.243 4.243-.707-.707zM104.243 30l.707.707-4.243 4.243-.707-.707zM114.243 30l.707.707-4.243 4.243-.707-.707zM84.243 0l.707.707-4.243 4.243L80 4.243zM14.243 40l.707.707-4.243 4.243-.707-.707zM24.243 40l.707.707-4.243 4.243-.707-.707zM34.243 40l.707.707-4.243 4.243-.707-.707zM4.243 50l.707.707L.707 54.95 0 54.243zM14.243 50l.707.707-4.243 4.243-.707-.707zM24.243 50l.707.707-4.243 4.243-.707-.707zM34.243 50l.707.707-4.243 4.243-.707-.707zM4.243 60l.707.707L.707 64.95 0 64.243zM14.243 60l.707.707-4.243 4.243-.707-.707zM24.243 60l.707.707-4.243 4.243-.707-.707zM34.243 60l.707.707-4.243 4.243-.707-.707zM4.243 70l.707.707L.707 74.95 0 74.243zM14.243 70l.707.707-4.243 4.243-.707-.707zM24.243 70l.707.707-4.243 4.243-.707-.707zM34.243 70l.707.707-4.243 4.243-.707-.707zM4.243 40l.707.707L.707 44.95 0 44.243zM54.243 40l.707.707-4.243 4.243-.707-.707zM64.243 40l.707.707-4.243 4.243-.707-.707zM74.243 40l.707.707-4.243 4.243-.707-.707zM44.243 50l.707.707-4.243 4.243-.707-.707zM54.243 50l.707.707-4.243 4.243-.707-.707zM64.243 50l.707.707-4.243 4.243-.707-.707zM74.243 50l.707.707-4.243 4.243-.707-.707zM44.243 60l.707.707-4.243 4.243-.707-.707zM54.243 60l.707.707-4.243 4.243-.707-.707zM64.243 60l.707.707-4.243 4.243-.707-.707zM74.243 60l.707.707-4.243 4.243-.707-.707zM44.243 70l.707.707-4.243 4.243-.707-.707zM54.243 70l.707.707-4.243 4.243-.707-.707zM64.243 70l.707.707-4.243 4.243-.707-.707zM74.243 70l.707.707-4.243 4.243-.707-.707zM44.243 40l.707.707-4.243 4.243-.707-.707zM94.243 40l.707.707-4.243 4.243-.707-.707zM104.243 40l.707.707-4.243 4.243-.707-.707zM114.243 40l.707.707-4.243 4.243-.707-.707zM84.243 50l.707.707-4.243 4.243-.707-.707zM94.243 50l.707.707-4.243 4.243-.707-.707zM104.243 50l.707.707-4.243 4.243-.707-.707zM114.243 50l.707.707-4.243 4.243-.707-.707zM84.243 60l.707.707-4.243 4.243-.707-.707zM94.243 60l.707.707-4.243 4.243-.707-.707zM104.243 60l.707.707-4.243 4.243-.707-.707zM114.243 60l.707.707-4.243 4.243-.707-.707zM84.243 70l.707.707-4.243 4.243-.707-.707zM94.243 70l.707.707-4.243 4.243-.707-.707zM104.243 70l.707.707-4.243 4.243-.707-.707zM114.243 70l.707.707-4.243 4.243-.707-.707zM84.243 40l.707.707-4.243 4.243-.707-.707zM14.243 80l.707.707-4.243 4.243-.707-.707zM24.243 80l.707.707-4.243 4.243-.707-.707zM34.243 80l.707.707-4.243 4.243-.707-.707zM4.243 90l.707.707L.707 94.95 0 94.243zM14.243 90l.707.707-4.243 4.243-.707-.707zM24.243 90l.707.707-4.243 4.243-.707-.707zM34.243 90l.707.707-4.243 4.243-.707-.707zM4.243 100l.707.707-4.243 4.243-.707-.707zM14.243 100l.707.707-4.243 4.243-.707-.707zM24.243 100l.707.707-4.243 4.243-.707-.707zM34.243 100l.707.707-4.243 4.243-.707-.707zM4.243 110l.707.707-4.243 4.243-.707-.707zM14.243 110l.707.707-4.243 4.243-.707-.707zM24.243 110l.707.707-4.243 4.243-.707-.707zM34.243 110l.707.707-4.243 4.243-.707-.707zM4.243 80l.707.707L.707 84.95 0 84.243zM54.243 80l.707.707-4.243 4.243-.707-.707zM64.243 80l.707.707-4.243 4.243-.707-.707zM74.243 80l.707.707-4.243 4.243-.707-.707zM44.243 90l.707.707-4.243 4.243-.707-.707zM54.243 90l.707.707-4.243 4.243-.707-.707zM64.243 90l.707.707-4.243 4.243-.707-.707zM74.243 90l.707.707-4.243 4.243-.707-.707zM44.243 100l.707.707-4.243 4.243-.707-.707zM54.243 100l.707.707-4.243 4.243-.707-.707zM64.243 100l.707.707-4.243 4.243-.707-.707zM74.243 100l.707.707-4.243 4.243-.707-.707zM44.243 110l.707.707-4.243 4.243-.707-.707zM54.243 110l.707.707-4.243 4.243-.707-.707zM64.243 110l.707.707-4.243 4.243-.707-.707zM74.243 110l.707.707-4.243 4.243-.707-.707zM44.243 80l.707.707-4.243 4.243-.707-.707zM94.243 80l.707.707-4.243 4.243-.707-.707zM104.243 80l.707.707-4.243 4.243-.707-.707zM114.243 80l.707.707-4.243 4.243-.707-.707zM84.243 90l.707.707-4.243 4.243-.707-.707zM94.243 90l.707.707-4.243 4.243-.707-.707zM104.243 90l.707.707-4.243 4.243-.707-.707zM114.243 90l.707.707-4.243 4.243-.707-.707zM84.243 100l.707.707-4.243 4.243-.707-.707zM94.243 100l.707.707-4.243 4.243-.707-.707zM104.243 100l.707.707-4.243 4.243-.707-.707zM114.243 100l.707.707-4.243 4.243-.707-.707zM84.243 110l.707.707-4.243 4.243-.707-.707zM94.243 110l.707.707-4.243 4.243-.707-.707zM104.243 110l.707.707-4.243 4.243-.707-.707zM114.243 110l.707.707-4.243 4.243-.707-.707zM84.243 80l.707.707-4.243 4.243-.707-.707z"></path>
                        </svg>
                    </div>
                    <div data-v-3971779c="" class="flex margin-top-4"><a data-v-141d1a81="" data-v-3971779c=""
                                                                         href="/account"
                                                                         class="button button--lite"><!----><span
                                data-v-141d1a81="" class="button__content"> Начать работу <svg data-v-3971779c=""
                                                                                               viewBox="0 0 6 10"
                                                                                               fill="none"
                                                                                               xmlns="http://www.w3.org/2000/svg"
                                                                                               class="fill-primary height-0-5 margin-left-2"><path
                                        data-v-3971779c=""
                                        d="M3.172 5L.343 2.172 1.757.757 6 5 1.757 9.243.343 7.828 3.172 5z"
                                        fill="#fff"></path></svg></span></a></div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('old-content')
<main class="page-content">
    <div class="page-content__content  news-list-page">


        <div class="about-page__bread-crumbs-wrap  page-content__bread-crumbs-wrap  g-page-wrap">
            <div class="bread-crumbs  g-content-wrap">
                <a href="/" class="bread-crumbs__link">Главная</a>
                <span class="bread-crumbs__link">Новости</span>
            </div>
        </div>

        <div class="news-list-page__content-wrap  g-page-wrap">
            <div class="news-list-page__content  g-content-wrap">
                <h1 class="news-list-page__title  page-content__title">Новости</h1>
                <div class="news-list-page__list">
                    @foreach($news as $item)
                    <article class="news-list-page__prev-news prev-news fadeInUp">
                        <a href="{{ route('page.news.show', $item) }}" class="prev-news__img-wrap">
                            <img alt="" src="{{ asset($item->image_url) }}" class="prev-news__img">
                        </a>
                        <div class="prev-news__content">
                            <time class="prev-news__time">{{ $item->published_at->format('d.m.Y') }}</time>
                            <h3 class="prev-news__title"><a href="{{ route('page.news.show', $item) }}">{{ $item->title }}</a></h3>
                            <p class="prev-news__text">{{ Purify::clean(\Illuminate\Support\Str::limit($item->description, 500)) }}</p>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
