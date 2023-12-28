<div class="shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">
    <ul data-v-4aba4d7a="" class="margin-y-0 padding-x-3 no-list flex--md border-bottom-gray relative">
        <li data-v-4aba4d7a="" class="margin-bottom-2 margin-bottom-0--md margin-right-4--md">
            <button data-v-4aba4d7a="" wire:click="changeCurrency('{{ \App\Account::CURRENCY_USD }}')" class="tab flex items-center text-accent font-medium relative @if($currency == \App\Account::CURRENCY_USD) router-link-exact-active router-link-active tab--active @endif" aria-current="page">
                <svg data-v-4aba4d7a="" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1-25 margin-right-2 flex-no-shrink"><path data-v-4aba4d7a="" d="M9.391 9.498c0 .328-.106.715-.915.835V8.836c.29.09.52.185.68.281.163.098.235.215.235.381zM6.96 5.923c.165-.122.376-.208.63-.257V7.23a2.758 2.758 0 01-.67-.288.515.515 0 01-.246-.47c0-.232.09-.406.286-.55z"></path><path data-v-4aba4d7a="" clip-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zm-8.287 4.458c.08.08.192.125.315.125.122 0 .23-.04.313-.116a.422.422 0 00.136-.322v-.528c.39-.043.743-.14 1.048-.29.37-.182.661-.426.866-.727.209-.306.315-.658.315-1.045 0-.47-.124-.857-.367-1.147a2.22 2.22 0 00-.857-.63 7.198 7.198 0 00-1.006-.32V5.624c.38.026.752.104 1.108.23a.58.58 0 00.685-.143.623.623 0 00.162-.422.602.602 0 00-.418-.596 5.501 5.501 0 00-1.537-.316v-.511a.438.438 0 00-.448-.448.423.423 0 00-.32.136.448.448 0 00-.119.312v.526a3.008 3.008 0 00-1.092.313c-.369.196-.654.457-.848.778a2.02 2.02 0 00-.288 1.057c0 .447.124.818.368 1.103.231.27.518.478.853.621.275.117.614.232 1.008.34v1.752a4.205 4.205 0 01-1.402-.338.692.692 0 00-.274-.057.61.61 0 00-.618.619c0 .136.04.258.121.362.075.1.17.173.282.22a5.87 5.87 0 001.891.46v.523a.43.43 0 00.123.314z"></path></svg>
                US Dollar
            </button>
        </li>
        <li data-v-4aba4d7a="" class="margin-bottom-2 margin-bottom-0--md margin-right-4--md">
            <button data-v-4aba4d7a="" wire:click="changeCurrency('{{ \App\Account::CURRENCY_EUR }}')" class="tab flex items-center text-accent font-medium relative @if($currency == \App\Account::CURRENCY_EUR) router-link-exact-active router-link-active tab--active @endif" aria-current="page">
                <img src="{{ asset('img/a.png') }}" class="height-1-25 margin-right-2 flex-no-shrink">
                AM
            </button>
        </li>
        <li data-v-4aba4d7a="" class="margin-bottom-2 margin-bottom-0--md margin-right-4--md">
            <button data-v-4aba4d7a="" wire:click="changeCurrency('{{ \App\Account::CURRENCY_RUB }}')" class="tab flex items-center text-accent font-medium relative @if($currency == \App\Account::CURRENCY_RUB) router-link-exact-active router-link-active tab--active @endif" aria-current="page">
                <img src="{{ asset('img/png/ruble.png') }}" class="height-1-25 margin-right-2 flex-no-shrink">
                RU Rubble
            </button>
        </li>
        <li data-v-4aba4d7a="" class="margin-bottom-2 margin-bottom-0--md margin-right-4--md">
            <button data-v-4aba4d7a="" wire:click="changeCurrency('{{ \App\Account::CURRENCY_BTC_ONE }}')" class="tab flex items-center text-accent font-medium relative @if($currency == \App\Account::CURRENCY_BTC_ONE) router-link-exact-active router-link-active tab--active @else router-link-active hover-lighten @endif">
                <svg data-v-4aba4d7a="" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1-25 margin-right-2 flex-no-shrink"><path data-v-4aba4d7a="" d="M11.96 10.78c-.24-.12-.74-.28-1.36-.32-.62-.04-1.4 0-1.4 0v2.64s.82.02 1.36-.02c.54-.04 1.12-.18 1.4-.34.28-.16.62-.4.62-1 .02-.6-.38-.84-.62-.96zm-1.72-1.54c.46-.02.92-.12 1.28-.32.34-.2.54-.48.54-.94-.02-.44-.32-.84-.82-.98-.5-.16-.84-.16-1.24-.18-.38 0-.78.02-.78.02v2.38c0 .02.58.04 1.02.02z"></path><path data-v-4aba4d7a="" d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zm4.08 13.82c-.74.52-1.54.62-1.9.66-.18.02-.48.04-.78.06v2h-1.24v-1.98h-.94v1.98H7.98v-1.98H5.56l.26-1.48h.74c.24 0 .36-.02.46-.12.1-.1.12-.24.12-.36V7.5c0-.32-.02-.4-.18-.58-.14-.16-.5-.18-.68-.18h-.72V5.46h2.42V3.48h1.24v1.98h.94V3.48h1.24v2c.92.06 1.6.24 2.2.68.78.58.74 1.56.72 1.8-.02.24-.12.7-.32.98-.2.3-.72.58-.72.58s.6.12 1.02.44c.42.32.74.88.72 1.7-.04.84-.2 1.64-.94 2.16z"></path></svg>
                Bitcoin
            </button>
        </li>
        <li data-v-4aba4d7a="" class="margin-bottom-2 margin-bottom-0--md margin-right-4--md">
            <button data-v-4aba4d7a="" wire:click="changeCurrency('{{ \App\Account::CURRENCY_BTC_TWO }}')" class="tab flex items-center text-accent font-medium relative @if($currency == \App\Account::CURRENCY_BTC_TWO) router-link-exact-active router-link-active tab--active @else router-link-active hover-lighten @endif">
                <svg data-v-4aba4d7a="" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1-25 margin-right-2 flex-no-shrink"><path data-v-4aba4d7a="" clip-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zM5.32 7.173L8 6.016l2.68 1.157L8 2.663l-2.68 4.51zm.484 3.048L8 13.337l2.195-3.117L8 11.54 5.804 10.22zM4.56 8.455L8 10.52l3.441-2.066-3.44-1.485L4.56 8.455z"></path></svg>
                Ethereum
            </button>
        </li>
    </ul>

    @if($error)
    <div class="margin-y-0 margin-top-2 padding-x-3 no-list flex--md relative">
        <ul class="errors grid-column-12 grid-column-6--xl grid-column-start-4--xl margin-bottom-2 margin-left-4">
            <li>{{ $error }}</li>
        </ul>
    </div>
    @endif

    <div class="margin-y-0 margin-top-2 padding-x-3 no-list flex--md relative">
        <div data-v-7032d9db="" data-v-2b67d23d="" data-vv-as=" " class="field flex-grow">
            <div data-v-7032d9db="" class="flex justify-between">
                <label data-v-7032d9db="" for="input_3j2q1nek" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                    Количество дней
                </label>
            </div>
            <div data-v-7032d9db="" class="relative">
                <div data-v-7032d9db=""
                     class="field__input-wrapper flex items-center overflow-hidden">
                    <input data-v-7032d9db="" wire:model="days" id="input_3j2q1nek" inputmode="text" autocomplete="" type="number" placeholder="0" class="field__input">
                </div>
            </div>
        </div>
    </div>

    <div class="margin-y-0 margin-top-2 padding-x-3 no-list flex--md relative">
        <div data-v-7032d9db="" data-v-2b67d23d="" data-vv-as=" " class="field flex-grow">
            <div data-v-7032d9db="" class="flex justify-between">
                <label data-v-7032d9db="" for="input_3j2q1nek" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                    Финансовый пароль
                </label>
            </div>
            <div data-v-7032d9db="" class="relative">
                <div data-v-7032d9db=""
                     class="field__input-wrapper flex items-center overflow-hidden">
                    <input data-v-7032d9db="" wire:model="fin_password" id="input_3j2q1nek" inputmode="text" autocomplete="" type="password" placeholder="" class="field__input">
                </div>
            </div>
        </div>
    </div>

    <div data-v-4aba4d7a="" class="padding-3">
        <ul data-v-4aba4d7a="" class="margin-y-0 padding-left-0 no-list grid grid-row-gap-4 grid-gap-4--md">
            @foreach(config('tariffs') as $key => $tariff)
            <li data-v-4aba4d7a="" class="grid-column-12 grid-column-6--md grid-column-4--xl">
                <div data-v-2b67d23d="" data-v-4aba4d7a="" class="border-rounded-3 shadowed padding-3">
                    <div data-v-2b67d23d="" class="flex items-center">
                        <div data-v-2b67d23d="" class="margin-left-3">
                            <strong data-v-2b67d23d="">{{ $tariff['title'] }}</strong>
                            <div data-v-2b67d23d="" class="flex items-center font-sm">
                                <svg data-v-2b67d23d="" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-0-75 fill-gray margin-right-2"><path data-v-2b67d23d="" clip-rule="evenodd" d="M11 2h-1V0H8v2H4V0H2v2H1a1 1 0 00-1 1v8a1 1 0 001 1h10a1 1 0 001-1V3a1 1 0 00-1-1zM5 4H2v3h3V4z"></path></svg>
                                от 7 до 365 дней
                            </div>
                        </div>
                    </div>
                    <div data-v-2b67d23d="" class="margin-y-3">
                        <div data-v-2b67d23d="" class="flex flex-wrap justify-between padding-y-1">
                            <div data-v-2b67d23d="" class="font-sm font-medium color-gray">
                                Мин. инвестиции
                            </div>
                            <div data-v-2b67d23d="" class="margin-left-3">
                                {{ config('tariffs.'. $key . '.from.'. $currency) / 100000 }} <span data-v-2b67d23d="" class="color-gray">{{ $currencyName }}</span>
                            </div>
                        </div>
                        <div data-v-2b67d23d="" class="flex flex-wrap justify-between padding-y-1">
                            <div data-v-2b67d23d="" class="font-sm font-medium color-gray"> Макс. инвестиции
                            </div>
                            <div data-v-2b67d23d="" class="margin-left-3">
                                {{ config('tariffs.'. $key . '.to.'. $currency) / 100000 }} <span data-v-2b67d23d="" class="color-gray"> {{ $currencyName }} </span>
                            </div>
                        </div>
                        <div data-v-2b67d23d="" class="flex flex-wrap justify-between padding-y-1">
                            <div data-v-2b67d23d="" class="font-sm font-medium color-gray"> Процент в день
                            </div>
                            <div data-v-2b67d23d="" class="margin-left-3">{{ config('tariffs.'. $key . '.percent') }} %</div>
                        </div>
                        <div data-v-2b67d23d="" class="flex flex-wrap justify-between padding-y-1">
                            <div data-v-2b67d23d="" class="font-sm font-medium color-gray"> Процент в час
                            </div>
                            <div data-v-2b67d23d="" class="margin-left-3">{{ number_format(config('tariffs.'. $key . '.percent') / 24, 2) }} %</div>
                        </div>
                        <div data-v-2b67d23d="" class="flex flex-wrap justify-between items-center padding-y-1">
                            <div data-v-2b67d23d="" class="font-sm font-medium color-gray"> Вывод тела</div>
                            <svg data-v-2b67d23d="" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" class="height-1 margin-left-3 fill-green">
                                <path data-v-2b67d23d="" clip-rule="evenodd"
                                      d="M2 8a6 6 0 1112 0A6 6 0 012 8zm6-8a8 8 0 100 16A8 8 0 008 0zM7 11.414l4.707-4.707-1.414-1.414L7 8.586 5.707 7.293 4.293 8.707 7 11.414z"></path>
                            </svg>
                        </div>
                        <div data-v-2b67d23d="" class="flex flex-wrap justify-between items-center padding-y-1">
                            <div data-v-2b67d23d="" class="font-sm font-medium color-gray"> Ежедневный вывод
                            </div>
                            <svg data-v-2b67d23d="" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" class="height-1 margin-left-3 fill-green">
                                <path data-v-2b67d23d="" clip-rule="evenodd"
                                      d="M2 8a6 6 0 1112 0A6 6 0 012 8zm6-8a8 8 0 100 16A8 8 0 008 0zM7 11.414l4.707-4.707-1.414-1.414L7 8.586 5.707 7.293 4.293 8.707 7 11.414z"></path>
                            </svg>
                        </div>
                    </div>
                    <div data-v-2b67d23d="" class="margin-y-3">
                        <div data-v-7032d9db="" data-v-2b67d23d="" data-vv-as=" " class="field flex-grow field--suffix">
                            <div data-v-7032d9db="" class="flex justify-between">
                                <label data-v-7032d9db="" for="input_3j2q1nek" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                    Сумма депозита
                                </label>
                            </div>
                            <div data-v-7032d9db="" class="relative">
                                <div data-v-7032d9db=""
                                     class="field__input-wrapper flex items-center overflow-hidden">
                                    <input data-v-7032d9db="" wire:model="amount" id="input_3j2q1nek" inputmode="text" autocomplete="" type="text" placeholder="0" class="field__input">
                                </div>
                                <div data-v-7032d9db="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex">
                                    <div data-v-7032d9db="" class="height-full margin-left-1 hover-lighten cursor-pointer flex">
                                        <span data-v-2b67d23d="" class="color-gray font-sm">{{ $currencyName }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-v-2b67d23d="" class="hidden--md color-gray"> Баланс: 0 USD</div>
                    <div data-v-2b67d23d="" class="margin-y-3 trans-opacity trans-0-3 opacity-5">
                        <div data-v-2b67d23d="" class="flex flex-wrap justify-between padding-y-1">
                            <div data-v-2b67d23d="" class="font-sm font-medium color-gray"> Итого за 30 дней</div>
                            <strong data-v-2b67d23d="" class="margin-left-3 color-green">
                                @php
                                    if((config('tariffs.'. $key . '.from.'. $currency) / 100000) > $amount || $amount >= (config('tariffs.'. $key . '.to.'. $currency) / 100000)) {
                                        $profit = 0;
                                        $dailyProfit = 0;
                                        $profitWithAmount = 0;
                                    } else {
                                        $dailyProfit = ((((float) $amount) / 100) * config('tariffs.'. $key . '.percent'));
                                        $profit = ($dailyProfit * 30);
                                        $profitWithAmount = $profit + ((float) $amount);
                                    }
                                @endphp

                                {{ $profitWithAmount }}
                                {{ $currencyName }}
                            </strong>
                        </div>
                        <div data-v-2b67d23d="" class="flex flex-wrap justify-between padding-y-1">
                            <div data-v-2b67d23d="" class="font-sm font-medium color-gray"> Сумма инвестиций
                            </div>
                            <div data-v-2b67d23d="" class="margin-left-3"> {{ $amount }}
                                <span data-v-2b67d23d="" class="color-gray"> {{ $currencyName }} </span>
                            </div>
                        </div>
                        <div data-v-2b67d23d="" class="flex flex-wrap justify-between padding-y-1">
                            <div data-v-2b67d23d="" class="font-sm font-medium color-gray"> Чистая прибыль</div>
                            <div data-v-2b67d23d="" class="margin-left-3 color-green"> + {{ $profit }} USD</div>
                        </div>
                        <div data-v-2b67d23d="" class="flex flex-wrap justify-between padding-y-1">
                            <div data-v-2b67d23d="" class="font-sm font-medium color-gray">Ежедневная прибыль
                                ({{ config('tariffs.'. $key . '.percent') }} %)
                            </div>
                            <div data-v-2b67d23d="" class="margin-left-3 color-green"> +{{ $dailyProfit }} {{ $currencyName }}</div>
                        </div>
                    </div>
                    <div data-v-2b67d23d="" class="padding-bottom-2">
                        <button data-v-141d1a81="" wire:click="invest('{{ $key }}')" data-v-2b67d23d="" @if($amount == 0) disabled @endif class="width-full button button--primary @if($amount == 0) button--disabled @endif button--mini">
                            <span data-v-141d1a81="" class="button__content">
                                <svg data-v-2b67d23d="" data-v-141d1a81="" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 margin-right-2 fill-white"><path data-v-2b67d23d="" data-v-141d1a81="" d="M8 19H4v2H2v-2H1a1 1 0 01-1-1V3a1 1 0 011-1h7V.59a.5.5 0 01.582-.493l10.582 1.764a1 1 0 01.836.986V5h1v2h-1v7h1v2h-1v2.153a1 1 0 01-.836.986L18 19.333V21h-2v-1.333l-7.418 1.236A.5.5 0 018 20.41V19zm2-.36l8-1.334V3.694l-8-1.333V18.64zM14.5 13c-.828 0-1.5-1.12-1.5-2.5S13.672 8 14.5 8 16 9.12 16 10.5s-.672 2.5-1.5 2.5z" fill="#569A21"></path></svg>
                                Инвестировать
                            </span>
                        </button>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
