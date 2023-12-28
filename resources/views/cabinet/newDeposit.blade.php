@extends('layouts.app')

@section('title', 'Открыть депозит')

@section('content')
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
        <livewire:create-deposit />
    </main>
@endsection

@section('old-content')
    <main class="page-content">
        <div class="page-content__content  user-page">
            @include('cabinet._navigation')
            <app-invest>
                <div class="user-page__main">
                    <div id="app-invest-container">
                        <section class="user-section invest-rates fadeInUp">
                            <h2 class="user-section__title">Выберите инвестиционный тариф</h2>
                            <div class="invest-rates__list">
                                <label class="invest-rates__item  invest-rate">
                                    <input name="invest-rate" v-model="calculate.tariff" value="1" type="radio">
                                    <div class="invest-rate__content">
                                        <h3 class="invest-rate__title">{{ config('tariffs.0.title') }}</h3>
                                        <div class="invest-rate__ico-wrap">
                                            <svg class="invest-rate__ico"
                                                 style="width: 74rem; height: 73rem">
                                                <use xlink:href="{{ asset('/img/svg/sprite-rate.svg') }}#ico-coins"></use>
                                            </svg>
                                        </div>
                                        <p class="invest-rate__text">
                                            Сумма инвестиции: от {{ config('tariffs.0.from.rub') }} до {{ config('tariffs.0.to.rub') }} рублей
                                            в валютах представленных на платформе.
                                        </p>
                                        <span class="invest-rate__btn  btn">Выбрать</span>
                                    </div>
                                </label>
                                <label class="invest-rates__item  invest-rate">
                                    <input name="invest-rate" v-model="calculate.tariff" value="2" type="radio">
                                    <div class="invest-rate__content">
                                        <h3 class="invest-rate__title">{{ config('tariffs.1.title') }}</h3>
                                        <div class="invest-rate__ico-wrap">
                                            <svg class="invest-rate__ico"
                                                 style="width: 74rem; height: 73rem">
                                                <use xlink:href="{{ asset('/img/svg/sprite-rate.svg') }}#ico-wallet"></use>
                                            </svg>
                                        </div>
                                        <p class="invest-rate__text">
                                            Сумма инвестиции: от {{ config('tariffs.1.from.rub') }} до {{ config('tariffs.1.to.rub') }} рублей
                                            в валютах представленных на платформе.
                                        </p>
                                        <span class="invest-rate__btn  btn">Выбрать</span>
                                    </div>
                                </label>
                                <label class="invest-rates__item  invest-rate">
                                    <input name="invest-rate" v-model="calculate.tariff" value="3" type="radio">
                                    <div class="invest-rate__content">
                                        <h3 class="invest-rate__title">{{ config('tariffs.2.title') }}</h3>
                                        <div class="invest-rate__ico-wrap">
                                            <svg class="invest-rate__ico"
                                                 style="width: 74rem; height: 73rem">
                                                <use xlink:href="{{ asset('/img/svg/sprite-rate.svg') }}#ico-wallet"></use>
                                            </svg>
                                        </div>
                                        <p class="invest-rate__text">
                                            Сумма инвестиции: от {{ config('tariffs.2.from.rub') }} до {{ config('tariffs.2.to.rub') }} рублей
                                            в валютах представленных на платформе.
                                        </p>
                                        <span class="invest-rate__btn  btn">Выбрать</span>
                                    </div>
                                </label>
                                <label class="invest-rates__item  invest-rate">
                                    <input name="invest-rate" v-model="calculate.tariff" value="4" type="radio">
                                    <div class="invest-rate__content">
                                        <h3 class="invest-rate__title">{{ config('tariffs.3.title') }}</h3>
                                        <div class="invest-rate__ico-wrap">
                                            <svg class="invest-rate__ico"
                                                 style="width: 74rem; height: 73rem">
                                                <use xlink:href="{{ asset('/img/svg/sprite-rate.svg') }}#ico-graph"></use>
                                            </svg>
                                        </div>
                                        <p class="invest-rate__text">
                                            Сумма инвестиции: от {{ config('tariffs.3.from.rub') }} до {{ config('tariffs.3.to.rub') }} рублей
                                            в валютах представленных на платформе.
                                        </p>
                                        <span class="invest-rate__btn  btn">Выбрать</span>
                                    </div>
                                </label>
                            </div>
                        </section>

                        <section class="user-section select-invest-plan fadeInUp" v-if="calculate.tariff != 0">
                            <h2 class="user-section__title">Выберите тариф:</h2>
                            <article class="invest-plan">
                                <div class="invest-plan__content">
                                    <h4 class="invest-plan__term  _double">
                                        <span class="g-fs-18">
                                            <span>Тариф</span> «@{{ tariffs[calculate.tariff] }}»<br>
                                        </span>
                                        <span class="invest-plan__term--term">
                                            <span>Срок тарифа</span>:
                                            <span class="g-text-medium">
                                                от 5 до 365 <span>дней</span>
                                            </span>
                                        </span>
                                    </h4>
                                    <div class="invest-plan__main">
                                        <div class="invest-plan__left-col">
                                            <h4 class="invest-plan__block-title">Выберите валюту:</h4>
                                            <div class="invest-plan__currencies currencies">
                                                <a :class="{'currencies__currency  _rub': true, '_active': calculate.currency == '{{ \App\Account::CURRENCY_RUB }}'}" @click="calculate.currency = '{{ \App\Account::CURRENCY_RUB }}'">
                                                    <svg>
                                                        <use
                                                            xlink:href="{{ asset('/img/svg/sprite-currencies.svg') }}#ico-rub"></use>
                                                    </svg>
                                                </a>
                                                <a :class="{'currencies__currency  _usd': true, '_active': calculate.currency == '{{ \App\Account::CURRENCY_USD }}'}" @click="calculate.currency = '{{ \App\Account::CURRENCY_USD }}'">
                                                    <svg>
                                                        <use
                                                            xlink:href="{{ asset('/img/svg/sprite-currencies.svg') }}#ico-usd"></use>
                                                    </svg>
                                                </a>
                                                <a :class="{'currencies__currency  _euro': true, '_active': calculate.currency == '{{ \App\Account::CURRENCY_EUR }}'}" @click="calculate.currency = '{{ \App\Account::CURRENCY_EUR }}'">
                                                    <svg>
                                                        <use
                                                            xlink:href="{{ asset('/img/svg/sprite-currencies.svg') }}#ico-euro"></use>
                                                    </svg>
                                                </a>
                                                <a :class="{'currencies__currency  _crypto': true, '_active': calculate.currency == '{{ \App\Account::CURRENCY_BTC_ONE }}'}" @click="calculate.currency = '{{ \App\Account::CURRENCY_BTC_ONE }}'">
                                                    {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}
                                                </a>
                                                <a :class="{'currencies__currency  _crypto': true, '_active': calculate.currency == '{{ \App\Account::CURRENCY_BTC_TWO }}'}" @click="calculate.currency = '{{ \App\Account::CURRENCY_BTC_TWO }}'">
                                                    {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}
                                                </a>
                                            </div>
                                            <div class="invest-plan__range-wrap  _active">
                                                <h4 class="invest-plan__block-title">Сумма инвестиции, от - до</h4>
                                                <p class="invest-plan__range" v-if="calculate.tariff == 1">
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_RUB }}'">
                                                        {{ config('tariffs.0.from.rub') }} - {{ config('tariffs.0.to.rub') }}
                                                    </span>
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_USD }}'">
                                                        {{ config('tariffs.0.from.usd') }} - {{ config('tariffs.0.to.usd') }}
                                                    </span>
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_EUR }}'">
                                                        {{ config('tariffs.0.from.eur') }} - {{ config('tariffs.0.to.eur') }}
                                                    </span>
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_BTC_ONE }}'">
                                                        {{ config('tariffs.0.from.'. \App\Account::CURRENCY_BTC_ONE) }} - {{ config('tariffs.0.to.'. \App\Account::CURRENCY_BTC_ONE) }}
                                                    </span>
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_BTC_TWO }}'">
                                                        {{ config('tariffs.0.from.'. \App\Account::CURRENCY_BTC_TWO) }} - {{ config('tariffs.0.to.'. \App\Account::CURRENCY_BTC_TWO) }}
                                                    </span>
                                                </p>
                                                <p class="invest-plan__range" v-if="calculate.tariff == 2">
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_RUB }}'">
                                                        {{ config('tariffs.1.from.rub') }} - {{ config('tariffs.1.to.rub') }}
                                                    </span>
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_USD }}'">
                                                        {{ config('tariffs.1.from.usd') }} - {{ config('tariffs.1.to.usd') }}
                                                    </span>
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_EUR }}'">
                                                        {{ config('tariffs.1.from.eur') }} - {{ config('tariffs.1.to.eur') }}
                                                    </span>
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_BTC_ONE }}'">
                                                        {{ config('tariffs.1.from.'. \App\Account::CURRENCY_BTC_ONE) }} - {{ config('tariffs.1.to.'. \App\Account::CURRENCY_BTC_ONE) }}
                                                    </span>
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_BTC_TWO }}'">
                                                        {{ config('tariffs.1.from.'. \App\Account::CURRENCY_BTC_TWO) }} - {{ config('tariffs.1.to.'. \App\Account::CURRENCY_BTC_TWO) }}
                                                    </span>
                                                </p>
                                                <p class="invest-plan__range" v-if="calculate.tariff == 3">
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_RUB }}'">
                                                        {{ config('tariffs.2.from.rub') }} - {{ config('tariffs.2.to.rub') }}
                                                    </span>
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_USD }}'">
                                                        {{ config('tariffs.2.from.usd') }} - {{ config('tariffs.2.to.usd') }}
                                                    </span>
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_EUR }}'">
                                                        {{ config('tariffs.2.from.eur') }} - {{ config('tariffs.2.to.eur') }}
                                                    </span>
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_BTC_ONE }}'">
                                                        {{ config('tariffs.2.from.'. \App\Account::CURRENCY_BTC_ONE) }} - {{ config('tariffs.2.to.'. \App\Account::CURRENCY_BTC_ONE) }}
                                                    </span>
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_BTC_TWO }}'">
                                                        {{ config('tariffs.2.from.'. \App\Account::CURRENCY_BTC_TWO) }} - {{ config('tariffs.2.to.'. \App\Account::CURRENCY_BTC_TWO) }}
                                                    </span>
                                                </p>
                                                <p class="invest-plan__range" v-if="calculate.tariff == 4">
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_RUB }}'">
                                                        {{ config('tariffs.3.from.rub') }} - {{ config('tariffs.3.to.rub') }}
                                                    </span>
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_USD }}'">
                                                        {{ config('tariffs.3.from.usd') }} - {{ config('tariffs.3.to.usd') }}
                                                    </span>
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_EUR }}'">
                                                        {{ config('tariffs.3.from.eur') }} - {{ config('tariffs.3.to.eur') }}
                                                    </span>
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_BTC_ONE }}'">
                                                        {{ config('tariffs.3.from.'. \App\Account::CURRENCY_BTC_ONE) }} - {{ config('tariffs.3.to.'. \App\Account::CURRENCY_BTC_ONE) }}
                                                    </span>
                                                    <span v-if="calculate.currency == '{{ \App\Account::CURRENCY_BTC_TWO }}'">
                                                        {{ config('tariffs.3.from.'. \App\Account::CURRENCY_BTC_TWO) }} - {{ config('tariffs.3.to.'. \App\Account::CURRENCY_BTC_TWO) }}
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="invest-plan__profit-wrap  _active">
                                            <h4 class="invest-plan__block-title"> Доходность:</h4>
                                            <table class="invest-plan__profit">
                                                <tbody v-if="calculate.tariff == 1">
                                                    <tr>
                                                        <th>Период</th>
                                                        <th>Всего</th>
                                                    </tr>
                                                    <tr>
                                                        <td>День:</td>
                                                        <td>({{ config('tariffs.0.percent') }}%)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>В час:</td>
                                                        <td>({{ number_format(config('tariffs.0.percent') / 24, 2, '.', ' ') }}%)</td>
                                                    </tr>
                                                </tbody>
                                                <tbody v-if="calculate.tariff == 2">
                                                    <tr>
                                                        <th>Период</th>
                                                        <th>Всего</th>
                                                    </tr>
                                                    <tr>
                                                        <td>День:</td>
                                                        <td>({{ config('tariffs.1.percent') }}%)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>В час:</td>
                                                        <td>({{ number_format(config('tariffs.1.percent') / 24, 2, '.', ' ') }}%)</td>
                                                    </tr>
                                                </tbody>
                                                <tbody v-if="calculate.tariff == 3">
                                                    <tr>
                                                        <th>Период</th>
                                                        <th>Всего</th>
                                                    </tr>
                                                    <tr>
                                                        <td>День:</td>
                                                        <td>({{ config('tariffs.2.percent') }}%)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>В час:</td>
                                                        <td>({{ number_format(config('tariffs.2.percent') / 24, 2, '.', ' ') }}%)</td>
                                                    </tr>
                                                </tbody>
                                                <tbody v-if="calculate.tariff == 4">
                                                    <tr>
                                                        <th>Период</th>
                                                        <th>Всего</th>
                                                    </tr>
                                                    <tr>
                                                        <td>День:</td>
                                                        <td>({{ config('tariffs.3.percent') }}%)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>В час:</td>
                                                        <td>({{ number_format(config('tariffs.3.percent') / 24, 2, '.', ' ') }}%)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <table class="invest-plan__advantages _active">
                                            <tbody>
                                            <tr>
                                                <td>Ставка:</td>
                                                <td>фиксированная</td>
                                            </tr>
                                            <tr>
                                                <td>Начисления:</td>
                                                <td>ежедневные</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="invest-plan__note  _with-btn">
                                        <p> Тело инвестиции включено в выплаты,
                                             вывод средств производится по завершению работы депозита. Начисления происходят ежедневно без выходных.
                                        </p>
                                        <a class="invest-plan__btn  btn" href="#">Выбрать</a>
                                    </div>
                                </div>
                            </article>
                        </section>

                        <section class="user-section invest-platform-info fadeInUp" v-if="calculate.tariff != 0">
                            <div class="invest-platform-info__titles  titles">
                                <h2 class="titles__title">
                                    <span class="g-text-light">Новый депозит</span>
                                </h2>
                            </div>
                            <form method="post" action="{{ route('cabinet.deposits.store') }}" class="charge-form ng-untouched ng-invalid ng-dirty">
                                @csrf
                                <ul class="errors-list">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <div class="form__inputs-wrap">
                                    <div class="form__input _full form-group">
                                        <label class="form-group__label">Тариф</label>
                                        <select v-model="calculate.tariff" class="select-dropdown ng-untouched ng-pristine ng-valid">
                                            <option v-for="(tariff, index) in tariffs" :value="index">@{{ tariff }}</option>
                                        </select>
                                    </div>
                                    <div class="form__input _full form-group">
                                        <label class="form-group__label">Валюта</label>
                                        <select name="currency" v-model="calculate.currency"  class="select-dropdown ng-untouched ng-pristine ng-valid">
                                            <option value="{{ \App\Account::CURRENCY_RUB }}">RUB</option>
                                            <option value="{{ \App\Account::CURRENCY_USD }}">USD</option>
                                            <option value="{{ \App\Account::CURRENCY_EUR }}">AM</option>
                                            <option value="{{ \App\Account::CURRENCY_BTC_ONE }}">{{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}</option>
                                            <option value="{{ \App\Account::CURRENCY_BTC_TWO }}">{{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}</option>
                                        </select>
                                    </div>
                                    <div class="form__input _full form-group">
                                        <label class="form-group__label">Введите сумму</label>
                                        <input class="form-group__input ng-untouched ng-pristine ng-invalid" name="amount" min="0" value="{{ old('amount') }}" step="0.01" type="number">
                                    </div>
                                    <div class="form__input _full form-group">
                                        <label class="form-group__label">Дни</label>
                                        <input name="days" min="5" value="{{ old('days') }}" type="number" class="form-group__input ng-untouched ng-pristine ng-invalid">
                                    </div>
                                </div>
                                <div class="form__btns-wrap">
                                    <button class="btn profile__btn">Открыть</button>
                                </div>
                            </form>
                        </section>
                    </div>

                    @include('layouts._balance')
                </div>
            </app-invest>
        </div>
    </main>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        $(document).ready(function () {
            $(".invest-rates__item").click(function () {
                setTimeout(function () {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $(".invest-plan").offset().top - 230
                    }, 1000);

                    $(".invest-plan__btn").click(function () {
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $(".invest-platform-info__titles").offset().top - 100
                        }, 1000);

                        return false;
                    });
                }, 200);
            });
        });

        var app = new Vue({
            el: '#app-invest-container',
            data: {
                calculate: {
                    tariff: @if($errors->any()) 1 @else 0 @endif,
                    currency: "{{ \App\Account::CURRENCY_RUB }}",
                },

                tariffs: {
                    1: "{{ config('tariffs.0.title') }}",
                    2: "{{ config('tariffs.1.title') }}",
                    3: "{{ config('tariffs.2.title') }}",
                    4: "{{ config('tariffs.3.title') }}",
                },
            },

            computed: {
                selectTariff(tariff) {
                    this.tariff = tariff;
                },
            },
        })
    </script>
@endpush
@section('old-content')
    <td width="10px"></td>
    <td align="left" style="vertical-align:top">
        @include('layouts._balance')
        <br>
        <div class="ac-bals oper" align="center">
            <form method="post" action="{{ route('cabinet.deposits.store') }}" name="account/change_pass_frm">
                @csrf
                <fieldset style="border:none;">
                    <center>
                        @foreach($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </center>
                    <table class="formatTable">
                        <tbody>
                        <tr>
                            <td align="right" width="50%">
                                <label>
                                    <span class="descr_req">
                                        @lang('app.Сумма')
                                    </span>
                                </label>
                            </td>
                            <td align="left">
                                <input name="amount" min="30" value="{{ old('amount') }}" type="number" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td align="right" width="50%">
                                <label>
                                    <span class="descr_req">
                                        @lang('app.Дни')
                                    </span>
                                </label>
                            </td>
                            <td align="left">
                                <input name="days" min="5" value="{{ old('days') }}" type="number" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td align="right" width="50%">
                                <label>
                                    <span class="descr_req">
                                        @lang('app.Валюта')
                                    </span>
                                </label>
                            </td>
                            <td align="left">
                                <select name="currency">
                                    <option value="{{ \App\Account::CURRENCY_RUB }}">RUB</option>
                                    <option value="{{ \App\Account::CURRENCY_USD }}">USD</option>
                                    <option value="{{ \App\Account::CURRENCY_EUR }}">AM</option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </fieldset>
                @csrf
                <br>
                <input name="account/change_pass_frm_btn" value="@lang('app.Открыть')" type="submit" class="button-blue">
            </form>
        </div>
    </td>
@endsection
