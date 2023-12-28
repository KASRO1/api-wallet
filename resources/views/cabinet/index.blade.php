@extends('layouts.app')

@section('content')
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
        <div data-v-5851cc65=""
             class="grid grid-row-gap-4 grid-gap-4--lg padding-3 shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">
            <div data-v-5851cc65="" class="grid-column-12">
                <div data-v-5851cc65="" class="flex justify-between items-center margin-bottom-2"><h4 data-v-5851cc65=""
                                                                                                      class="font-medium margin-y-0">
                        Новости и события </h4><a data-v-5851cc65="" href="{{ route('page.news') }}"
                                                  class="flex items-center text-accent font-medium link-primary">Посмотреть
                        все новости
                        <svg data-v-5851cc65="" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="fill-primary height-0-5 margin-left-2">
                            <path data-v-5851cc65=""
                                  d="M3.172 5L.343 2.172 1.757.757 6 5 1.757 9.243.343 7.828 3.172 5z"
                                  fill="#fff"></path>
                        </svg>
                    </a></div>
                <ul data-v-5851cc65="" class="grid grid-row-gap-3 grid-gap-4--md margin-y-0 padding-left-0 no-list">
                    @foreach($news as $item)
                    <li data-v-5851cc65="" class="grid-column-12 grid-column-4--md">
                        <a data-v-f6930a7e="" data-v-5851cc65="" href="{{ route('page.news.show', $item) }}" class="news-card-mini border-rounded-3 grid grid-column-gap-3 text-tight padding-0-15" id="{{ $item->id }}">
                            <div data-v-f6930a7e=""
                                 class="grid-column-3 border-rounded-3 bg-center bg-cover bg-no-repeat flex justify-center items-center"
                                 style="background-image: url('{{ asset($item->image_url) }}');">
                                <!----></div>
                            <div data-v-f6930a7e="" class="grid-column-7 font-sm padding-y-2">{{ $item->title }}
                            </div>
                            <div data-v-f6930a7e="" class="grid-column-2 flex justify-center items-center">
                                <svg data-v-f6930a7e="" viewBox="0 0 6 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" class="height-0-75 fill-gray">
                                    <path data-v-f6930a7e=""
                                          d="M3.172 5L.343 2.172 1.757.757 6 5 1.757 9.243.343 7.828 3.172 5z"
                                          fill="#fff"></path>
                                </svg>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div data-v-5851cc65="" class="grid-column-12">
                <h4 data-v-5851cc65="" class="font-medium margin-top-0 margin-bottom-2">
                    Баланс
                </h4>
                <ul data-v-5851cc65=""
                    class="grid grid-row-gap-3 grid-column-gap-4--md margin-y-0 padding-x-3 padding-x-0--md no-list shadowed border-rounded-3">
                    <li data-v-5851cc65="" class="grid-column-12 grid-column-2--md relative padding-y-3 padding-left-3--md">
                        <div data-v-5851cc65="" class="hidden block--md vertical-divider absolute right-0 top-0 bottom-0 margin-y-auto"></div>
                        <div data-v-5851cc65="" class="flex items-center text-accent font-medium" style="color: rgb(13, 129, 59);">
                            <svg data-v-5851cc65="" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 margin-right-2" style="fill: rgb(13, 129, 59);"><path data-v-5851cc65="" d="M9.391 9.498c0 .328-.106.715-.915.835V8.836c.29.09.52.185.68.281.163.098.235.215.235.381zM6.96 5.923c.165-.122.376-.208.63-.257V7.23a2.758 2.758 0 01-.67-.288.515.515 0 01-.246-.47c0-.232.09-.406.286-.55z"></path><path data-v-5851cc65="" clip-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zm-8.287 4.458c.08.08.192.125.315.125.122 0 .23-.04.313-.116a.422.422 0 00.136-.322v-.528c.39-.043.743-.14 1.048-.29.37-.182.661-.426.866-.727.209-.306.315-.658.315-1.045 0-.47-.124-.857-.367-1.147a2.22 2.22 0 00-.857-.63 7.198 7.198 0 00-1.006-.32V5.624c.38.026.752.104 1.108.23a.58.58 0 00.685-.143.623.623 0 00.162-.422.602.602 0 00-.418-.596 5.501 5.501 0 00-1.537-.316v-.511a.438.438 0 00-.448-.448.423.423 0 00-.32.136.448.448 0 00-.119.312v.526a3.008 3.008 0 00-1.092.313c-.369.196-.654.457-.848.778a2.02 2.02 0 00-.288 1.057c0 .447.124.818.368 1.103.231.27.518.478.853.621.275.117.614.232 1.008.34v1.752a4.205 4.205 0 01-1.402-.338.692.692 0 00-.274-.057.61.61 0 00-.618.619c0 .136.04.258.121.362.075.1.17.173.282.22a5.87 5.87 0 001.891.46v.523a.43.43 0 00.123.314z"></path></svg>
                            US Dollar
                        </div>
                        <div data-v-5851cc65="" class="flex items-center font-xl--lg" style="word-break: keep-all; white-space: nowrap;">
                            {{ $accounts->where('currency', \App\Account::CURRENCY_USD)->first()->amount }}
                            <span data-v-5851cc65="" class="margin-x-2 color-gray"> USD </span>
                            <a data-v-5851cc65="" href="{{ route('income') }}?currency=USD" class="flex border-rounded-3 bg-lite-green padding-x-3 padding-y-2 hover-darken">
                                <svg data-v-5851cc65="" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-0-5"><path data-v-5851cc65="" d="M5 0a1 1 0 00-1 1v3H1a1 1 0 100 2h3v3a1 1 0 102 0V6h3a1 1 0 100-2H6V1a1 1 0 00-1-1z" fill="#569A21"></path></svg>
                            </a>
                        </div>
                    </li>
                    <li data-v-5851cc65="" class="grid-column-12 grid-column-2--md relative padding-y-3 padding-left-3--md">
                        <div data-v-5851cc65="" class="hidden block--md vertical-divider absolute right-0 top-0 bottom-0 margin-y-auto"></div>
                        <div data-v-5851cc65="" class="flex items-center text-accent font-medium" style="color: rgb(13, 129, 59);">
                            <img src="{{ asset('img/a.png') }}" class="height-1 margin-right-2">
                            AM
                        </div>
                        <div data-v-5851cc65="" class="flex items-center font-xl--lg" style="word-break: keep-all; white-space: nowrap;">
                            {{ $accounts->where('currency', \App\Account::CURRENCY_EUR)->first()->amount }}
                            <span data-v-5851cc65="" class="margin-x-2 color-gray"> AM </span>
                            <a data-v-5851cc65="" href="{{ route('income') }}?currency=AM" class="flex border-rounded-3 bg-lite-green padding-x-3 padding-y-2 hover-darken">
                                <svg data-v-5851cc65="" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-0-5"><path data-v-5851cc65="" d="M5 0a1 1 0 00-1 1v3H1a1 1 0 100 2h3v3a1 1 0 102 0V6h3a1 1 0 100-2H6V1a1 1 0 00-1-1z" fill="#569A21"></path></svg>
                            </a>
                        </div>
                    </li>
                    <li data-v-5851cc65="" class="grid-column-12 grid-column-2--md relative padding-y-3 padding-left-3--md">
                        <div data-v-5851cc65="" class="hidden block--md vertical-divider absolute right-0 top-0 bottom-0 margin-y-auto"></div>
                        <div data-v-5851cc65="" class="flex items-center text-accent font-medium" style="color: rgb(13, 129, 59);">
                            <img src="{{ asset('img/png/ruble.png') }}" class="height-1 margin-right-2">
                            RU Rubble
                        </div>
                        <div data-v-5851cc65="" class="flex items-center font-xl--lg" style="word-break: keep-all; white-space: nowrap;">
                            {{ $accounts->where('currency', \App\Account::CURRENCY_RUB)->first()->amount }}
                            <span data-v-5851cc65="" class="margin-x-2 color-gray"> RUB </span>
                            <a data-v-5851cc65="" href="{{ route('income') }}?currency=RUB" class="flex border-rounded-3 bg-lite-green padding-x-3 padding-y-2 hover-darken">
                                <svg data-v-5851cc65="" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-0-5"><path data-v-5851cc65="" d="M5 0a1 1 0 00-1 1v3H1a1 1 0 100 2h3v3a1 1 0 102 0V6h3a1 1 0 100-2H6V1a1 1 0 00-1-1z" fill="#569A21"></path></svg>
                            </a>
                        </div>
                    </li>
                    <li data-v-5851cc65="" class="grid-column-12 grid-column-2--md relative padding-y-3">
                        <div data-v-5851cc65="" class="hidden block--md vertical-divider absolute right-0 top-0 bottom-0 margin-y-auto"></div>
                        <div data-v-5851cc65="" class="flex items-center text-accent font-medium" style="color: rgb(255, 139, 74);">
                            <svg data-v-5851cc65="" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 margin-right-2" style="fill: rgb(255, 139, 74);"><path data-v-5851cc65="" d="M11.96 10.78c-.24-.12-.74-.28-1.36-.32-.62-.04-1.4 0-1.4 0v2.64s.82.02 1.36-.02c.54-.04 1.12-.18 1.4-.34.28-.16.62-.4.62-1 .02-.6-.38-.84-.62-.96zm-1.72-1.54c.46-.02.92-.12 1.28-.32.34-.2.54-.48.54-.94-.02-.44-.32-.84-.82-.98-.5-.16-.84-.16-1.24-.18-.38 0-.78.02-.78.02v2.38c0 .02.58.04 1.02.02z"></path><path data-v-5851cc65="" d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zm4.08 13.82c-.74.52-1.54.62-1.9.66-.18.02-.48.04-.78.06v2h-1.24v-1.98h-.94v1.98H7.98v-1.98H5.56l.26-1.48h.74c.24 0 .36-.02.46-.12.1-.1.12-.24.12-.36V7.5c0-.32-.02-.4-.18-.58-.14-.16-.5-.18-.68-.18h-.72V5.46h2.42V3.48h1.24v1.98h.94V3.48h1.24v2c.92.06 1.6.24 2.2.68.78.58.74 1.56.72 1.8-.02.24-.12.7-.32.98-.2.3-.72.58-.72.58s.6.12 1.02.44c.42.32.74.88.72 1.7-.04.84-.2 1.64-.94 2.16z"></path></svg>
                            Bitcoin
                        </div>
                        <div data-v-5851cc65="" class="flex items-center font-xl--lg" style="word-break: keep-all; white-space: nowrap;">
                            {{ $accounts->where('currency', \App\Account::CURRENCY_BTC_ONE)->first()->extended_amount }}
                            <span data-v-5851cc65="" class="margin-x-2 color-gray"> BTC </span>
                            <a data-v-5851cc65="" href="{{ route('income') }}?currency=BTC" class="flex border-rounded-3 bg-lite-green padding-x-3 padding-y-2 hover-darken">
                                <svg data-v-5851cc65="" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-0-5"><path data-v-5851cc65="" d="M5 0a1 1 0 00-1 1v3H1a1 1 0 100 2h3v3a1 1 0 102 0V6h3a1 1 0 100-2H6V1a1 1 0 00-1-1z" fill="#569A21"></path></svg>
                            </a>
                        </div>
                    </li>
                    <li data-v-5851cc65="" class="grid-column-12 grid-column-2--md relative padding-y-3"><!---->
                        <div data-v-5851cc65="" class="flex items-center text-accent font-medium" style="color: rgb(25, 47, 158);">
                            <svg data-v-5851cc65="" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 margin-right-2" style="fill: rgb(25, 47, 158);"><path data-v-5851cc65="" clip-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zM5.32 7.173L8 6.016l2.68 1.157L8 2.663l-2.68 4.51zm.484 3.048L8 13.337l2.195-3.117L8 11.54 5.804 10.22zM4.56 8.455L8 10.52l3.441-2.066-3.44-1.485L4.56 8.455z"></path></svg>
                            Ethereum
                        </div>
                        <div data-v-5851cc65="" class="flex items-center font-xl--lg" style="word-break: keep-all; white-space: nowrap;">
                            {{ $accounts->where('currency', \App\Account::CURRENCY_BTC_TWO)->first()->extended_amount }}
                            <span data-v-5851cc65="" class="margin-x-2 color-gray"> ETH </span>
                            <a data-v-5851cc65="" href="{{ route('income') }}?currency=ETH" class="flex border-rounded-3 bg-lite-green padding-x-3 padding-y-2 hover-darken">
                                <svg data-v-5851cc65="" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-0-5"><path data-v-5851cc65="" d="M5 0a1 1 0 00-1 1v3H1a1 1 0 100 2h3v3a1 1 0 102 0V6h3a1 1 0 100-2H6V1a1 1 0 00-1-1z" fill="#569A21"></path></svg>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div data-v-5851cc65="" class="flex flex-column grid-column-12 grid-column-6--lg">
                <h4 data-v-5851cc65="" class="font-medium margin-top-0 margin-bottom-2">
                    Ваша карта
                </h4>
                <div data-v-5851cc65=""
                     class="bg-wave-orange-2 bg-no-repeat bg-center bg-cover border-rounded-3 color-white padding-0-15 flex-grow flex flex-column justify-between">
                    <div data-v-5851cc65="" class="flex--sm items-center padding-3 flex-grow">
                        <div data-v-5851cc65=""
                             class="avatar-border flex justify-center items-center flex-no-shrink width-5 height-5 border-round bg-no-repeat bg-center bg-cover"
                             style="background: linear-gradient(266.9deg, rgb(255, 61, 84) 0%, rgb(255, 135, 67) 87.88%);">
                            @if(empty($user->avatar_url))
                                <svg data-v-fd87438e="" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-half-full fill-white"><path data-v-fd87438e="" d="M0 21a8 8 0 0116 0H0zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z"></path></svg>
                            @else
                                <img src="{{ asset($user->avatar_url) }}" style="width: 67px; height: 67px;" class="height-full border-round fill-white">
                            @endif
                        </div>
                        <div data-v-5851cc65="" class="min-width-none flex flex-column items-start margin-left-3--sm margin-top-3 margin-top-0--sm">
                            <b data-v-5851cc65=""> {{ auth()->user()->name }}</b>
                            <div data-v-5851cc65="" class="flex items-center border-rounded-3 bg-white color-primary padding-x-2 padding-y-1 text-accent font-medium margin-y-2">
                                <svg data-v-5851cc65="" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 fill-primary margin-right-2"><path data-v-5851cc65="" d="M1.156 2.707L4.28 4.885 7.394.326c.07-.1.16-.183.265-.24a.718.718 0 01.682 0 .755.755 0 01.264.24l3.114 4.56 3.125-2.18a.722.722 0 01.801-.014c.121.077.219.19.28.323a.81.81 0 01.07.431l-1.222 10.867a.79.79 0 01-.245.49.725.725 0 01-.494.197H1.966a.726.726 0 01-.494-.197.79.79 0 01-.245-.49L.005 3.445a.81.81 0 01.07-.43.767.767 0 01.28-.323.72.72 0 01.8.015zM8 10.332c.395 0 .773-.164 1.052-.456.279-.292.436-.688.436-1.1 0-.413-.157-.809-.436-1.1A1.455 1.455 0 008 7.22c-.395 0-.773.164-1.052.455a1.593 1.593 0 00-.436 1.1c0 .413.157.81.436 1.101.279.292.657.456 1.052.456z" fill="#fff"></path></svg>
                                {{ \App\Support\Helpers::getUserTariff(auth()->user()) }}
                            </div>
                            <div data-v-5851cc65="" class="font-sm"> Это ваша реферальная ссылка для приглашения
                                партнеров.
                            </div>
                            <div data-v-5851cc65="" class="flex items-center font-sm max-width-full btn-copy" data-clipboard-text="{{ route('register', ['code' => $user->code]) }}">
                                <span data-v-5851cc65="" class="flex-grow overflow-hidden text-dots text-nowrap">{{ route('register', ['code' => $user->code]) }}</span>
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 115.77 122.88" style="enable-background:new 0 0 115.77 122.88;fill: #fff;width: 12px; margin-left: 5px;" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M89.62,13.96v7.73h12.19h0.01v0.02c3.85,0.01,7.34,1.57,9.86,4.1c2.5,2.51,4.06,5.98,4.07,9.82h0.02v0.02 v73.27v0.01h-0.02c-0.01,3.84-1.57,7.33-4.1,9.86c-2.51,2.5-5.98,4.06-9.82,4.07v0.02h-0.02h-61.7H40.1v-0.02 c-3.84-0.01-7.34-1.57-9.86-4.1c-2.5-2.51-4.06-5.98-4.07-9.82h-0.02v-0.02V92.51H13.96h-0.01v-0.02c-3.84-0.01-7.34-1.57-9.86-4.1 c-2.5-2.51-4.06-5.98-4.07-9.82H0v-0.02V13.96v-0.01h0.02c0.01-3.85,1.58-7.34,4.1-9.86c2.51-2.5,5.98-4.06,9.82-4.07V0h0.02h61.7 h0.01v0.02c3.85,0.01,7.34,1.57,9.86,4.1c2.5,2.51,4.06,5.98,4.07,9.82h0.02V13.96L89.62,13.96z M79.04,21.69v-7.73v-0.02h0.02 c0-0.91-0.39-1.75-1.01-2.37c-0.61-0.61-1.46-1-2.37-1v0.02h-0.01h-61.7h-0.02v-0.02c-0.91,0-1.75,0.39-2.37,1.01 c-0.61,0.61-1,1.46-1,2.37h0.02v0.01v64.59v0.02h-0.02c0,0.91,0.39,1.75,1.01,2.37c0.61,0.61,1.46,1,2.37,1v-0.02h0.01h12.19V35.65 v-0.01h0.02c0.01-3.85,1.58-7.34,4.1-9.86c2.51-2.5,5.98-4.06,9.82-4.07v-0.02h0.02H79.04L79.04,21.69z M105.18,108.92V35.65v-0.02 h0.02c0-0.91-0.39-1.75-1.01-2.37c-0.61-0.61-1.46-1-2.37-1v0.02h-0.01h-61.7h-0.02v-0.02c-0.91,0-1.75,0.39-2.37,1.01 c-0.61,0.61-1,1.46-1,2.37h0.02v0.01v73.27v0.02h-0.02c0,0.91,0.39,1.75,1.01,2.37c0.61,0.61,1.46,1,2.37,1v-0.02h0.01h61.7h0.02 v0.02c0.91,0,1.75-0.39,2.37-1.01c0.61-0.61,1-1.46,1-2.37h-0.02V108.92L105.18,108.92z"></path></g></svg>
                            </div>
                        </div>
                    </div>
                    <div data-v-5851cc65=""
                         class="card-turnover padding-data-row flex--md justify-between items-center border-rounded-3 margin-top-2">
                        <div data-v-5851cc65="" class="flex items-center text-accent font-medium">
                            <svg data-v-5851cc65="" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"
                                 class="height-1-5 fill-white margin-right-2">
                                <path data-v-5851cc65=""
                                      d="M18.375 14.103A8 8 0 007.03 4.053l-.992-1.737A9.996 9.996 0 0116 2.34c4.49 2.592 6.21 8.142 4.117 12.77l1.342.774-4.165 2.214-.165-4.714 1.246.719zM3.625 7.897a8.001 8.001 0 0011.345 10.05l.992 1.737A9.996 9.996 0 016 19.66C1.51 17.068-.21 11.518 1.883 6.89L.54 6.117l4.165-2.214.165 4.714-1.246-.719.001-.001zm8.79 5.931L9.584 11l-2.828 2.828-1.414-1.414 4.243-4.242L12.414 11l2.829-2.828 1.414 1.414-4.243 4.242h.001z"
                                      fill="#fff"></path>
                            </svg>
                            Ваш структурный оборот:
                        </div>
                        <div data-v-5851cc65="" class="flex items-center margin-left-4 margin-left-0--md">
                            {{ number_format($structure_balance, 2, '.', ' ') }} USD
                            <div data-v-5851cc65=""
                                 class="flex hover-darken cursor-help relative hover-trigger z-index-1">
                                <div data-v-5851cc65=""
                                     class="tooltip hidden hover-content border-rounded-3 bg-default absolute bottom-full color-white padding-3 text-left animate-fade-in-up margin-bottom-2 font-xs z-index-2">
                                    Структурный оборот учитывает все валюты в эквиваленте к USD
                                </div>
                                <svg data-v-5851cc65="" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1-25 margin-left-2"><path data-v-5851cc65="" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm-1-7v2h2v-2H9zm2-1.645A3.502 3.502 0 0010 4.5a3.501 3.501 0 00-3.433 2.813l1.962.393A1.5 1.5 0 1110 9.5a1 1 0 00-1 1V12h2v-.645z" fill="#fff"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-v-5851cc65="" class="flex flex-column grid-column-12 grid-column-6--lg">
                <h4 data-v-5851cc65="" class="font-medium margin-top-0 margin-bottom-2">
                    Ваши партнеры
                </h4>
                <div data-v-5851cc65="" class="padding-0-15 shadowed border-rounded-3 flex-grow">
                    <div data-v-5851cc65="" class="grid grid-row-gap-2 grid-gap-2--sm bg-litest-gray border-rounded-3">
                        <div data-v-5851cc65=""
                             class="grid-column-12 grid-column-6--sm flex justify-between items-center relative padding-data-row">
                            <div data-v-5851cc65=""
                                 class="hidden block--sm vertical-divider absolute right-0 top-0 bottom-0 margin-y-auto"></div>
                            <div data-v-5851cc65="" class="flex items-center text-accent font-medium">
                                <div data-v-5851cc65=""
                                     class="width-1-5 height-1-5 flex justify-center items-center margin-right-2">
                                    <svg data-v-5851cc65="" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg" class="height-1-25">
                                        <path data-v-5851cc65=""
                                              d="M10 9a5 5 0 015 5v6H5v-6a5 5 0 015-5zm-6.712 3.006a6.984 6.984 0 00-.28 1.65L3 14v6H0v-4.5a3.5 3.5 0 013.119-3.48l.17-.014h-.001zm13.424 0A3.501 3.501 0 0120 15.5V20h-3v-6c0-.693-.1-1.362-.288-1.994zM3.5 6a2.5 2.5 0 110 5 2.5 2.5 0 010-5zm13 0a2.5 2.5 0 110 5 2.5 2.5 0 010-5zM10 0a4 4 0 110 8 4 4 0 010-8z"
                                              fill="#F85446"></path>
                                    </svg>
                                </div>
                                Всего партнеров
                            </div>
                            <div data-v-5851cc65="" class="font-lg">{{ $referalsCount }}</div>
                        </div>
                        <div data-v-5851cc65=""
                             class="grid-column-12 grid-column-6--sm flex justify-between items-center padding-data-row">
                            <div data-v-5851cc65="" class="flex items-center text-accent font-medium">
                                <div data-v-5851cc65=""
                                     class="width-1-5 height-1-5 flex justify-center items-center margin-right-2">
                                    <svg data-v-5851cc65="" viewBox="0 0 19 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg" class="height-1-25">
                                        <path data-v-5851cc65=""
                                              d="M9 13.062V21H0a8 8 0 019-7.938zM8 12c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm5.793 6.914l3.535-3.535 1.415 1.414-4.95 4.95-3.536-3.536 1.415-1.414 2.12 2.121h.001z"
                                              fill="#569A21"></path>
                                    </svg>
                                </div>
                                Активные партнеры
                            </div>
                            <div data-v-5851cc65="" class="font-lg"> {{ $activeReferals }}</div>
                        </div>
                    </div>
                    <div data-v-5851cc65="" class="padding-3 overflow-auto">
                        <table data-v-5851cc65="" class="font-sm width-full">
                            <thead data-v-5851cc65="">
                            <tr data-v-5851cc65="" class="color-gray text-bottom">
                                <th data-v-5851cc65="" class="text-left font-medium">Валюта</th>
                                <th data-v-5851cc65="" class="text-right font-medium">Вложено партнерами</th>
                            </tr>
                            </thead>
                            <tbody data-v-5851cc65="">
                            <tr data-v-5851cc65="">
                                <td data-v-5851cc65="" class="padding-y-1">
                                    <div data-v-5851cc65="" class="flex items-center font-medium">
                                        <svg data-v-5851cc65="" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg"
                                             class="height-1 fill-default margin-right-2">
                                            <path data-v-5851cc65=""
                                                  d="M9.391 9.498c0 .328-.106.715-.915.835V8.836c.29.09.52.185.68.281.163.098.235.215.235.381zM6.96 5.923c.165-.122.376-.208.63-.257V7.23a2.758 2.758 0 01-.67-.288.515.515 0 01-.246-.47c0-.232.09-.406.286-.55z"></path>
                                            <path data-v-5851cc65="" clip-rule="evenodd"
                                                  d="M16 8A8 8 0 110 8a8 8 0 0116 0zm-8.287 4.458c.08.08.192.125.315.125.122 0 .23-.04.313-.116a.422.422 0 00.136-.322v-.528c.39-.043.743-.14 1.048-.29.37-.182.661-.426.866-.727.209-.306.315-.658.315-1.045 0-.47-.124-.857-.367-1.147a2.22 2.22 0 00-.857-.63 7.198 7.198 0 00-1.006-.32V5.624c.38.026.752.104 1.108.23a.58.58 0 00.685-.143.623.623 0 00.162-.422.602.602 0 00-.418-.596 5.501 5.501 0 00-1.537-.316v-.511a.438.438 0 00-.448-.448.423.423 0 00-.32.136.448.448 0 00-.119.312v.526a3.008 3.008 0 00-1.092.313c-.369.196-.654.457-.848.778a2.02 2.02 0 00-.288 1.057c0 .447.124.818.368 1.103.231.27.518.478.853.621.275.117.614.232 1.008.34v1.752a4.205 4.205 0 01-1.402-.338.692.692 0 00-.274-.057.61.61 0 00-.618.619c0 .136.04.258.121.362.075.1.17.173.282.22a5.87 5.87 0 001.891.46v.523a.43.43 0 00.123.314z"></path>
                                        </svg>
                                        US Dollar
                                    </div>
                                </td>
                                <td data-v-5851cc65="" class="text-right padding-y-1">
                                    {{ $referalsBalances[\App\Account::CURRENCY_USD] }}<span data-v-5851cc65="" class="color-gray"> USD </span>
                                </td>
                            </tr>
                            <tr data-v-5851cc65="">
                                <td data-v-5851cc65="" class="padding-y-1">
                                    <div data-v-5851cc65="" class="flex items-center font-medium">
                                        <img src="{{ asset('img/png/ruble.png') }}" class="height-1 fill-default margin-right-2">
                                        RU Rubble
                                    </div>
                                </td>
                                <td data-v-5851cc65="" class="text-right padding-y-1">
                                    {{ $referalsBalances[\App\Account::CURRENCY_RUB] }}<span data-v-5851cc65="" class="color-gray"> RUB </span>
                                </td>
                            </tr>
                            <tr data-v-5851cc65="">
                                <td data-v-5851cc65="" class="padding-y-1">
                                    <div data-v-5851cc65="" class="flex items-center font-medium">
                                        <img src="{{ asset('img/a.png') }}" class="height-1 fill-default margin-right-2">
                                        AM
                                    </div>
                                </td>
                                <td data-v-5851cc65="" class="text-right padding-y-1">
                                    {{ $referalsBalances[\App\Account::CURRENCY_EUR] }}<span data-v-5851cc65="" class="color-gray"> AM </span>
                                </td>
                            </tr>
                            <tr data-v-5851cc65="">
                                <td data-v-5851cc65="" class="padding-y-1">
                                    <div data-v-5851cc65="" class="flex items-center font-medium">
                                        <svg data-v-5851cc65="" viewBox="0 0 20 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg"
                                             class="height-1 fill-default margin-right-2">
                                            <path data-v-5851cc65=""
                                                  d="M11.96 10.78c-.24-.12-.74-.28-1.36-.32-.62-.04-1.4 0-1.4 0v2.64s.82.02 1.36-.02c.54-.04 1.12-.18 1.4-.34.28-.16.62-.4.62-1 .02-.6-.38-.84-.62-.96zm-1.72-1.54c.46-.02.92-.12 1.28-.32.34-.2.54-.48.54-.94-.02-.44-.32-.84-.82-.98-.5-.16-.84-.16-1.24-.18-.38 0-.78.02-.78.02v2.38c0 .02.58.04 1.02.02z"></path>
                                            <path data-v-5851cc65=""
                                                  d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zm4.08 13.82c-.74.52-1.54.62-1.9.66-.18.02-.48.04-.78.06v2h-1.24v-1.98h-.94v1.98H7.98v-1.98H5.56l.26-1.48h.74c.24 0 .36-.02.46-.12.1-.1.12-.24.12-.36V7.5c0-.32-.02-.4-.18-.58-.14-.16-.5-.18-.68-.18h-.72V5.46h2.42V3.48h1.24v1.98h.94V3.48h1.24v2c.92.06 1.6.24 2.2.68.78.58.74 1.56.72 1.8-.02.24-.12.7-.32.98-.2.3-.72.58-.72.58s.6.12 1.02.44c.42.32.74.88.72 1.7-.04.84-.2 1.64-.94 2.16z"></path>
                                        </svg>
                                        Bitcoin
                                    </div>
                                </td>
                                <td data-v-5851cc65="" class="text-right padding-y-1">
                                    {{ $referalsBalances[\App\Account::CURRENCY_BTC_ONE] }} <span data-v-5851cc65="" class="color-gray"> BTC </span>
                                </td>
                            </tr>
                            <tr data-v-5851cc65="">
                                <td data-v-5851cc65="" class="padding-y-1">
                                    <div data-v-5851cc65="" class="flex items-center font-medium">
                                        <svg data-v-5851cc65="" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg"
                                             class="height-1 fill-default margin-right-2">
                                            <path data-v-5851cc65="" clip-rule="evenodd"
                                                  d="M16 8A8 8 0 110 8a8 8 0 0116 0zM5.32 7.173L8 6.016l2.68 1.157L8 2.663l-2.68 4.51zm.484 3.048L8 13.337l2.195-3.117L8 11.54 5.804 10.22zM4.56 8.455L8 10.52l3.441-2.066-3.44-1.485L4.56 8.455z"></path>
                                        </svg>
                                        Ethereum
                                    </div>
                                </td>
                                <td data-v-5851cc65="" class="text-right padding-y-1"> {{ $referalsBalances[\App\Account::CURRENCY_BTC_TWO] }} <span data-v-5851cc65=""
                                                                                               class="color-gray"> ETH </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div data-v-5851cc65="" class="grid-column-12">
                <h4 data-v-5851cc65="" class="font-medium margin-top-0 margin-bottom-2"> Ваши
                    инвестиции </h4>
                <div data-v-5851cc65="" class="grid grid-row-gap-3 grid-column-gap-4--md shadowed border-rounded-3">
                    <div data-v-400badb9="" data-v-5851cc65=""
                         class="grid grid-row-gap-3 grid-column-gap-3--sm grid-column-12 grid-column-6--lg relative">
                        <div data-v-400badb9=""
                             class="hidden block--lg vertical-divider absolute right-0 top-0 bottom-0 margin-y-auto"></div>
                        <div data-v-400badb9=""
                             class="flex flex-column items-start justify-between grid-column-12 grid-column-4--sm padding-3 relative">
                            <div data-v-400badb9=""
                                 class="hidden block--sm vertical-divider absolute right-0 top-0 bottom-0 margin-y-auto"></div>
                            <svg data-v-400badb9="" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg"
                                 class="height-1-5 margin-bottom-4">
                                <path data-v-400badb9=""
                                      d="M16 17H4v2H2v-2H1a1 1 0 01-1-1V1a1 1 0 011-1h18a1 1 0 011 1v15a1 1 0 01-1 1h-1v2h-2v-2zm-7-6.126V14h2v-3.126A4.002 4.002 0 0010 3a4 4 0 00-1 7.874zM10 9a2 2 0 110-4 2 2 0 010 4z"
                                      fill="#F85446"></path>
                            </svg>
                            <span data-v-400badb9="" class="font-lg">{{ $depositsCount }}</span>
                            <div data-v-400badb9="" class="text-accent font-medium"> Всего депозитов</div>
                        </div>
                        <div data-v-400badb9=""
                             class="flex flex-column items-start justify-between grid-column-12 grid-column-4--sm padding-3 relative">
                            <div data-v-400badb9=""
                                 class="hidden block--sm vertical-divider absolute right-0 top-0 bottom-0 margin-y-auto"></div>
                            <svg data-v-400badb9="" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"
                                 class="height-1-5 margin-bottom-4">
                                <path data-v-400badb9=""
                                      d="M8 19H4v2H2v-2H1a1 1 0 01-1-1V3a1 1 0 011-1h7V.59a.5.5 0 01.582-.493l10.582 1.764a1 1 0 01.836.986V5h1v2h-1v7h1v2h-1v2.153a1 1 0 01-.836.986L18 19.333V21h-2v-1.333l-7.418 1.236A.5.5 0 018 20.41V19zm2-.36l8-1.334V3.694l-8-1.333V18.64zM14.5 13c-.828 0-1.5-1.12-1.5-2.5S13.672 8 14.5 8 16 9.12 16 10.5s-.672 2.5-1.5 2.5z"
                                      fill="#569A21"></path>
                            </svg>
                            <span data-v-400badb9="" class="font-lg">{{ $activeDepositsCount }}</span>
                            <div data-v-400badb9="" class="text-accent font-medium"> Активные депозиты</div>
                        </div>
                        <div data-v-400badb9=""
                             class="flex flex-column items-start justify-between grid-column-12 grid-column-4--sm padding-3 relative">
                            <!---->
                            <svg data-v-400badb9="" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                                 class="height-1-5 margin-bottom-4">
                                <path data-v-400badb9=""
                                      d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm4.891-13.477a6.04 6.04 0 00-1.414-1.414l-8.368 8.368a6.04 6.04 0 001.414 1.414l8.368-8.368z"
                                      fill="#7E839A"></path>
                            </svg>
                            <span data-v-400badb9="" class="font-lg">{{ $closedDepositsCount }}</span>
                            <div data-v-400badb9="" class="text-accent font-medium"> Закрытые депозиты</div>
                        </div>
                    </div>
                    <div data-v-5851cc65="" class="grid-column-12 grid-column-6--lg padding-3">
                        <table data-v-5851cc65="" class="font-sm width-full">
                            <thead data-v-5851cc65="">
                            <tr data-v-5851cc65="" class="color-gray text-bottom">
                                <th data-v-5851cc65="" class="text-left font-medium">Валюта</th>
                                <th data-v-5851cc65="" class="text-right font-medium">Всего вложено за счет вкладов</th>
                                <th data-v-5851cc65="" class="text-right font-medium">Всего на депозитах</th>
                            </tr>
                            </thead>
                            <tbody data-v-5851cc65="">
                            <tr data-v-5851cc65="">
                                <td data-v-5851cc65="" class="padding-y-1">
                                    <div data-v-5851cc65="" class="flex items-center font-medium">
                                        <svg data-v-5851cc65="" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 fill-default margin-right-2"><path data-v-5851cc65="" d="M9.391 9.498c0 .328-.106.715-.915.835V8.836c.29.09.52.185.68.281.163.098.235.215.235.381zM6.96 5.923c.165-.122.376-.208.63-.257V7.23a2.758 2.758 0 01-.67-.288.515.515 0 01-.246-.47c0-.232.09-.406.286-.55z"></path><path data-v-5851cc65="" clip-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zm-8.287 4.458c.08.08.192.125.315.125.122 0 .23-.04.313-.116a.422.422 0 00.136-.322v-.528c.39-.043.743-.14 1.048-.29.37-.182.661-.426.866-.727.209-.306.315-.658.315-1.045 0-.47-.124-.857-.367-1.147a2.22 2.22 0 00-.857-.63 7.198 7.198 0 00-1.006-.32V5.624c.38.026.752.104 1.108.23a.58.58 0 00.685-.143.623.623 0 00.162-.422.602.602 0 00-.418-.596 5.501 5.501 0 00-1.537-.316v-.511a.438.438 0 00-.448-.448.423.423 0 00-.32.136.448.448 0 00-.119.312v.526a3.008 3.008 0 00-1.092.313c-.369.196-.654.457-.848.778a2.02 2.02 0 00-.288 1.057c0 .447.124.818.368 1.103.231.27.518.478.853.621.275.117.614.232 1.008.34v1.752a4.205 4.205 0 01-1.402-.338.692.692 0 00-.274-.057.61.61 0 00-.618.619c0 .136.04.258.121.362.075.1.17.173.282.22a5.87 5.87 0 001.891.46v.523a.43.43 0 00.123.314z"></path></svg>
                                        US Dollar
                                    </div>
                                </td>
                                <td data-v-5851cc65="" class="text-right padding-y-1">
                                    {{ $accounts->where('currency', \App\Account::CURRENCY_USD)->first()->amount }}
                                    <span data-v-5851cc65="" class="color-gray"> USD </span>
                                </td>
                                <td data-v-5851cc65="" class="text-right font-medium color-green padding-y-1">
                                    {{ number_format($accounts->where('currency', \App\Account::CURRENCY_USD)->first()->deposits_sum_balance, 2, '.', ' ') }} USD
                                </td>
                            </tr>
                            <tr data-v-5851cc65="">
                                <td data-v-5851cc65="" class="padding-y-1">
                                    <div data-v-5851cc65="" class="flex items-center font-medium">
                                       <img src="{{ asset('img/a.png') }}" class="height-1 fill-default margin-right-2">
                                        AM
                                    </div>
                                </td>
                                <td data-v-5851cc65="" class="text-right padding-y-1">
                                    {{ $accounts->where('currency', \App\Account::CURRENCY_EUR)->first()->amount }}
                                    <span data-v-5851cc65="" class="color-gray"> AM </span>
                                </td>
                                <td data-v-5851cc65="" class="text-right font-medium color-green padding-y-1">
                                    {{ number_format($accounts->where('currency', \App\Account::CURRENCY_EUR)->first()->deposits_sum_balance, 2, '.', ' ') }} AM
                                </td>
                            </tr>
                            <tr data-v-5851cc65="">
                                <td data-v-5851cc65="" class="padding-y-1">
                                    <div data-v-5851cc65="" class="flex items-center font-medium">
                                        <img src="{{ asset('img/png/ruble.png') }}" class="height-1 fill-default margin-right-2">
                                        RU Rubble
                                    </div>
                                </td>
                                <td data-v-5851cc65="" class="text-right padding-y-1">
                                    {{ $accounts->where('currency', \App\Account::CURRENCY_RUB)->first()->amount }}
                                    <span data-v-5851cc65="" class="color-gray"> RUB </span>
                                </td>
                                <td data-v-5851cc65="" class="text-right font-medium color-green padding-y-1">
                                    {{ number_format($accounts->where('currency', \App\Account::CURRENCY_RUB)->first()->deposits_sum_balance, 2, '.', ' ') }} RUB
                                </td>
                            </tr>
                            <tr data-v-5851cc65="">
                                <td data-v-5851cc65="" class="padding-y-1">
                                    <div data-v-5851cc65="" class="flex items-center font-medium">
                                        <svg data-v-5851cc65="" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 fill-default margin-right-2"><path data-v-5851cc65="" d="M11.96 10.78c-.24-.12-.74-.28-1.36-.32-.62-.04-1.4 0-1.4 0v2.64s.82.02 1.36-.02c.54-.04 1.12-.18 1.4-.34.28-.16.62-.4.62-1 .02-.6-.38-.84-.62-.96zm-1.72-1.54c.46-.02.92-.12 1.28-.32.34-.2.54-.48.54-.94-.02-.44-.32-.84-.82-.98-.5-.16-.84-.16-1.24-.18-.38 0-.78.02-.78.02v2.38c0 .02.58.04 1.02.02z"></path><path data-v-5851cc65="" d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zm4.08 13.82c-.74.52-1.54.62-1.9.66-.18.02-.48.04-.78.06v2h-1.24v-1.98h-.94v1.98H7.98v-1.98H5.56l.26-1.48h.74c.24 0 .36-.02.46-.12.1-.1.12-.24.12-.36V7.5c0-.32-.02-.4-.18-.58-.14-.16-.5-.18-.68-.18h-.72V5.46h2.42V3.48h1.24v1.98h.94V3.48h1.24v2c.92.06 1.6.24 2.2.68.78.58.74 1.56.72 1.8-.02.24-.12.7-.32.98-.2.3-.72.58-.72.58s.6.12 1.02.44c.42.32.74.88.72 1.7-.04.84-.2 1.64-.94 2.16z"></path></svg>
                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}
                                    </div>
                                </td>
                                <td data-v-5851cc65="" class="text-right padding-y-1">
                                    {{ $accounts->where('currency', \App\Account::CURRENCY_BTC_ONE)->first()->extended_amount }}
                                    <span data-v-5851cc65="" class="color-gray"> {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }} </span>
                                </td>
                                <td data-v-5851cc65="" class="text-right font-medium color-green padding-y-1">
                                    {{ number_format($accounts->where('currency', \App\Account::CURRENCY_BTC_ONE)->first()->deposits_sum_balance, 4, '.', ' ') }} {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}
                                </td>
                            </tr>
                            <tr data-v-5851cc65="">
                                <td data-v-5851cc65="" class="padding-y-1">
                                    <div data-v-5851cc65="" class="flex items-center font-medium">
                                        <svg data-v-5851cc65="" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 fill-default margin-right-2"><path data-v-5851cc65="" clip-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zM5.32 7.173L8 6.016l2.68 1.157L8 2.663l-2.68 4.51zm.484 3.048L8 13.337l2.195-3.117L8 11.54 5.804 10.22zM4.56 8.455L8 10.52l3.441-2.066-3.44-1.485L4.56 8.455z"></path></svg>
                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}
                                    </div>
                                </td>
                                <td data-v-5851cc65="" class="text-right padding-y-1">
                                    {{ $accounts->where('currency', \App\Account::CURRENCY_BTC_TWO)->first()->extended_amount }}
                                    <span data-v-5851cc65="" class="color-gray"> {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }} </span>
                                </td>
                                <td data-v-5851cc65="" class="text-right font-medium color-green padding-y-1">
                                    {{ number_format($accounts->where('currency', \App\Account::CURRENCY_BTC_TWO)->first()->deposits_sum_balance, 4, '.', ' ') }} {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div data-v-5851cc65="" class="flex flex-column grid-column-12 grid-column-6--xl">
                <h4 data-v-5851cc65="" class="font-medium margin-top-0 margin-bottom-2">
                    Недавние регистрации
                </h4>
                <div data-v-5851cc65=""
                     class="recent-registrations flex-grow overflow-auto padding-0-15 border-rounded-3 shadowed">
                    <table data-v-5851cc65="" class="table width-full table--no-hover">
                        <thead data-v-5851cc65="">
                        <tr data-v-5851cc65="" class="font-sm color-gray bg-litest-gray">
                            <th data-v-5851cc65="" class="padding-3 font-medium text-left"> Пользователь</th>
                            <th data-v-5851cc65="" class="padding-3 font-medium text-left"> Статус</th>
                            <th data-v-5851cc65="" class="padding-3 font-medium text-right"> Дата</th>
                        </tr>
                        </thead>
                        <tbody data-v-5851cc65="">
                        @forelse($lastReferals as $item)
                        <tr>
                            <td class="padding-3 font-medium text-left">{{ $item->hidden_email }}</td>
                            <td class="padding-3 font-medium text-left">{{ $item->is_depositet ? __('app.Активен') : __('app.Не активен') }}</td>
                            <td class="padding-3 font-medium text-left">{{ $item->created_at->format('d.m.Y') }}</td>
                        </tr>
                        @empty
                        <tr data-v-5851cc65="">
                            <td data-v-5851cc65="" colspan="5"
                                class="text-center text-accent padding-3 color-gray font-medium"> Нет партнеров для
                                показа
                            </td>
                        </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</main>
@endsection

@section('old-content')
<main _ngcontent-c0="" class="page-content">
    <div _ngcontent-c0="" class="page-content__content  user-page"><!---->
        @include('cabinet._navigation')
        <app-dashboard _nghost-c5=""><!---->
            <div class="user-page__main"><!---->
                <section class="user-section invest-platform-info fadeInUp"
                         data-show-animation="fadeInUp">
                    <div class="invest-platform-info__titles  titles"><h3
                                                                                           class="titles__sub-title">
                            Инвестиционная платформа Ellis Company</h3>
                        <h2 class="titles__title"><span class="g-text-light"> Ваш ID в системе:</span>
                            {{ $user->id }}</h2></div>
                    <div class="invest-platform-info__item"><span
                                                                                   class="invest-platform-info__item-ico-wrap"><svg
                                style="width: 20rem; height: 20rem"><use
                                                                                          xlink:href="/img/svg/sprite-main.svg#ico-clock"></use></svg></span><span
                           >Текущее время на сайте: <span class="g-text-medium">{{ now()->format('d.m.Y H:i:s') }}</span></span>
                    </div>
                </section>
                <section class="user-section ref-links fadeInUp" data-show-animation="fadeInUp"><h2
                        class="user-section__title">Ваша реферальная ссылка</h2>
                    <div class="ref-links__link  _v-1  link-copy"><h3
                                                                                       class="link-copy__title">
                            Реферальная ссылка</h3>
                        <div class="link-copy__link-wrap  _full">
                            <input class="link-copy__link" value="{{ route('register', ['code' => $user->code]) }}" readonly="" type="text">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 115.77 122.88" style="enable-background:new 0 0 115.77 122.88;fill: #7e839a;width: 15px;" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M89.62,13.96v7.73h12.19h0.01v0.02c3.85,0.01,7.34,1.57,9.86,4.1c2.5,2.51,4.06,5.98,4.07,9.82h0.02v0.02 v73.27v0.01h-0.02c-0.01,3.84-1.57,7.33-4.1,9.86c-2.51,2.5-5.98,4.06-9.82,4.07v0.02h-0.02h-61.7H40.1v-0.02 c-3.84-0.01-7.34-1.57-9.86-4.1c-2.5-2.51-4.06-5.98-4.07-9.82h-0.02v-0.02V92.51H13.96h-0.01v-0.02c-3.84-0.01-7.34-1.57-9.86-4.1 c-2.5-2.51-4.06-5.98-4.07-9.82H0v-0.02V13.96v-0.01h0.02c0.01-3.85,1.58-7.34,4.1-9.86c2.51-2.5,5.98-4.06,9.82-4.07V0h0.02h61.7 h0.01v0.02c3.85,0.01,7.34,1.57,9.86,4.1c2.5,2.51,4.06,5.98,4.07,9.82h0.02V13.96L89.62,13.96z M79.04,21.69v-7.73v-0.02h0.02 c0-0.91-0.39-1.75-1.01-2.37c-0.61-0.61-1.46-1-2.37-1v0.02h-0.01h-61.7h-0.02v-0.02c-0.91,0-1.75,0.39-2.37,1.01 c-0.61,0.61-1,1.46-1,2.37h0.02v0.01v64.59v0.02h-0.02c0,0.91,0.39,1.75,1.01,2.37c0.61,0.61,1.46,1,2.37,1v-0.02h0.01h12.19V35.65 v-0.01h0.02c0.01-3.85,1.58-7.34,4.1-9.86c2.51-2.5,5.98-4.06,9.82-4.07v-0.02h0.02H79.04L79.04,21.69z M105.18,108.92V35.65v-0.02 h0.02c0-0.91-0.39-1.75-1.01-2.37c-0.61-0.61-1.46-1-2.37-1v0.02h-0.01h-61.7h-0.02v-0.02c-0.91,0-1.75,0.39-2.37,1.01 c-0.61,0.61-1,1.46-1,2.37h0.02v0.01v73.27v0.02h-0.02c0,0.91,0.39,1.75,1.01,2.37c0.61,0.61,1.46,1,2.37,1v-0.02h0.01h61.7h0.02 v0.02c0.91,0,1.75-0.39,2.37-1.01c0.61-0.61,1-1.46,1-2.37h-0.02V108.92L105.18,108.92z"></path></g></svg>
                        </div>
                    </div><!----></section>
                <section class="user-section _col-3 _full-content bill fadeInUp"
                         data-show-animation="fadeInUp" data-slide-toggle-wrap="">
                    <div class="bill__block  _main">
                        <h2 class="user-section__title">@lang('app.Баланс аккаунта'):</h2>
                        <table class="bill__table">
                            <tbody>
                            <tr>
                                <td>Рубли:</td>
                                <td>{{ $accounts->where('currency', \App\Account::CURRENCY_RUB)->first()->amount }}</td>
                            </tr>
                            <tr>
                                <td>Доллары:</td>
                                <td>{{ $accounts->where('currency', \App\Account::CURRENCY_USD)->first()->amount }}</td>
                            </tr>
                            <tr>
                                <td>Евро:</td>
                                <td>{{ $accounts->where('currency', \App\Account::CURRENCY_EUR)->first()->amount }}</td>
                            </tr>
                            <tr>
                                <td>{{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}:</td>
                                <td>{{ $accounts->where('currency', \App\Account::CURRENCY_BTC_ONE)->first()->extended_amount }}</td>
                            </tr>
                            <tr>
                                <td>{{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}:</td>
                                <td>{{ $accounts->where('currency', \App\Account::CURRENCY_BTC_TWO)->first()->extended_amount }}</td>
                            </tr>
                            </tbody>
                        </table>
{{--                        <a class="bill__btn  _drop-link  btn" href="{{ route('income') }}">Пополнить счёт</a>--}}
                        <a class="bill__btn  btn  btn--light" href="{{ route('income') }}">Инвестировать</a>
                    </div>
                </section>
                <section class="user-section _col-3 _full-content bill fadeInUp"
                         data-show-animation="fadeInUp" data-slide-toggle-wrap="">
                    <div class="bill__block  _main">
                        <h2 class="user-section__title">@lang('app.На депозитах')</h2>
                        <table class="bill__table">
                            <tbody>
                            <tr>
                                <td>Рубли:</td>
                                <td>{{ $accounts->where('currency', \App\Account::CURRENCY_RUB)->first()->deposits }}&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Доллары:</td>
                                <td>{{ $accounts->where('currency', \App\Account::CURRENCY_USD)->first()->deposits }}&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Евро:</td>
                                <td>{{ $accounts->where('currency', \App\Account::CURRENCY_EUR)->first()->deposits }}&nbsp;</td>
                            </tr>
                            <tr>
                                <td>{{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}:</td>
                                <td>{{ $accounts->where('currency', \App\Account::CURRENCY_BTC_ONE)->first()->extended_deposits }}&nbsp;</td>
                            </tr>
                            <tr>
                                <td>{{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}:</td>
                                <td>{{ $accounts->where('currency', \App\Account::CURRENCY_BTC_TWO)->first()->extended_deposits }}&nbsp;</td>
                            </tr>
                            </tbody>
                        </table>
{{--                        <a class="bill__btn  _drop-link  btn" href="/ru/transfer">Вывести</a></div>--}}
                </section>

            </div>
        </app-dashboard>
    </div>
</main>
@endsection
