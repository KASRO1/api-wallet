@extends('layouts.front_app')

@section('content')
<main class="page-content">
    <div id="app-invest-container"  class="page-content__content  invest-page">



        <div class="about-page__bread-crumbs-wrap  page-content__bread-crumbs-wrap  g-page-wrap">
            <div class="bread-crumbs  g-content-wrap">
                <a href="/" class="bread-crumbs__link">Главная</a>
                <span class="bread-crumbs__link">Инвестору</span>
            </div>
        </div>


        <section class="invest-page__invests-plans invests-plans g-page-wrap fadeInUp" data-show-animation="fadeInUp">
            <div class="invests-plans__content  g-content-wrap">
                <h2 class="page-content__title">Инвестиционные тарифы</h2>
                <div class="invests-plans__list">
                    <article class="invests-plans__item  invest-plan" data-tabs-wrap="">
                        <h3 class="invest-plan__title  g-2-none">{{ config('tariffs.0.title') }}</h3>
                        <div class="invest-plan__content">
                            <h4 class="invest-plan__term">
                                <span class="invest-plan__term--term">Срок тарифа: <span class="g-text-medium">от 5 до 365 дней</span></span>
                            </h4>
                            <div class="invest-plan__main">
                                <div class="invest-plan__left-col">
                                    <h4 class="invest-plan__block-title">Выберите валюту:</h4>
                                    <div class="invest-plan__currencies  currencies">
                                        <a :class="{'currencies__currency _rub': true, '_active': currency == '{{ \App\Account::CURRENCY_RUB }}'}" @click="currency = '{{ \App\Account::CURRENCY_RUB }}'">
                                            <svg>
                                                <use xlink:href="/img/svg/sprite-currencies.svg#ico-rub"></use>
                                            </svg>
                                        </a>
                                        <a :class="{'currencies__currency _usd': true, '_active': currency == '{{ \App\Account::CURRENCY_USD }}'}" @click="currency = '{{ \App\Account::CURRENCY_USD }}'">
                                            <svg>
                                                <use xlink:href="/img/svg/sprite-currencies.svg#ico-usd"></use>
                                            </svg>
                                        </a>
                                        <a :class="{'currencies__currency _euro': true, '_active': currency == '{{ \App\Account::CURRENCY_EUR }}'}" @click="currency = '{{ \App\Account::CURRENCY_EUR }}'">
                                            <svg>
                                                <use xlink:href="/img/svg/sprite-currencies.svg#ico-euro"></use>
                                            </svg>
                                        </a>
{{--                                        <a :class="{'currencies__currency  _crypto': true, '_active': currency == '{{ \App\Account::CURRENCY_BTC_ONE }}'}" @click="currency = '{{ \App\Account::CURRENCY_BTC_ONE }}'">--}}
{{--                                            {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}--}}
{{--                                        </a>--}}
{{--                                        <a :class="{'currencies__currency  _crypto': true, '_active': currency == '{{ \App\Account::CURRENCY_BTC_TWO }}'}" @click="currency = '{{ \App\Account::CURRENCY_BTC_TWO }}'">--}}
{{--                                            {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}--}}
{{--                                        </a>--}}
                                    </div>

                                    <div class="invest-plan__range-wrap _active">
                                        <h4 class="invest-plan__block-title">Сумма инвестиции:</h4>
                                        <p class="invest-plan__range" v-if="currency == 'rub'">{{ config('tariffs.0.from.rub') }} - {{ config('tariffs.0.to.rub') }} @{{ currencyTitle }}.</p>
                                        <p class="invest-plan__range" v-if="currency == 'usd'">{{ config('tariffs.0.from.usd') }} - {{ config('tariffs.0.to.usd') }} @{{ currencyTitle }}.</p>
                                        <p class="invest-plan__range" v-if="currency == 'eur'">{{ config('tariffs.0.from.eur') }} - {{ config('tariffs.0.to.eur') }} @{{ currencyTitle }}.</p>
                                        <p class="invest-plan__range" v-if="currency == '{{ \App\Account::CURRENCY_BTC_ONE }}'">{{ config('tariffs.0.from.'. \App\Account::CURRENCY_BTC_ONE) }} - {{ config('tariffs.0.to.'. \App\Account::CURRENCY_BTC_ONE) }} @{{ currencyTitle }}.</p>
                                        <p class="invest-plan__range" v-if="currency == '{{ \App\Account::CURRENCY_BTC_TWO }}'">{{ config('tariffs.0.from.'. \App\Account::CURRENCY_BTC_TWO) }} - {{ config('tariffs.0.to.'. \App\Account::CURRENCY_BTC_TWO) }} @{{ currencyTitle }}.</p>
                                    </div>
                                </div>
                                <div class="invest-plan__profit-wrap _active">
                                    <h4 class="invest-plan__block-title">Доходность:</h4>
                                    <table class="invest-plan__profit">
                                        <tbody>
                                        <tr>
                                            <th>Период</th>
                                            <th>Всего</th>
                                        </tr>
                                        <tr>
                                            <td>День:</td>
                                            <td>{{ config('tariffs.0.percent') }}%</td>
                                        </tr>
                                        <tr>
                                            <td>В час:</td>
                                            <td>{{ number_format(config('tariffs.0.percent') / 24, 2, '.', ' ') }}%</td>
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
                            <div class="invest-plan__note">
                                <p>
                                    Тело инвестиции включено в выплаты,
                                    вывод средств производится по завершению работы депозита. Начисления происходят ежедневно без выходных.
                                </p>
                            </div>
                        </div>
                        <a href="#" class="invest-plan__btn btn" data-scroll-to-link="calc" onclick="amount = {{ config('tariffs.0.from.rub') }}">Рассчитать</a>
                    </article>
                    <article class="invests-plans__item  invest-plan" data-tabs-wrap="">
                        <h3 class="invest-plan__title  g-2-none">{{ config('tariffs.1.title') }}</h3>
                        <div class="invest-plan__content">
                            <h4 class="invest-plan__term">
                                <span class="invest-plan__term--term">Срок тарифа: <span class="g-text-medium">от 5 до 365 дней</span></span>
                            </h4>
                            <div class="invest-plan__main">
                                <div class="invest-plan__left-col">
                                    <h4 class="invest-plan__block-title">Выберите валюту:</h4>
                                    <div class="invest-plan__currencies  currencies">
                                        <a :class="{'currencies__currency _rub': true, '_active': currency == '{{ \App\Account::CURRENCY_RUB }}'}" @click="currency = '{{ \App\Account::CURRENCY_RUB }}'">
                                            <svg>
                                                <use xlink:href="/img/svg/sprite-currencies.svg#ico-rub"></use>
                                            </svg>
                                        </a>
                                        <a :class="{'currencies__currency _usd': true, '_active': currency == '{{ \App\Account::CURRENCY_USD }}'}" @click="currency = '{{ \App\Account::CURRENCY_USD }}'">
                                            <svg>
                                                <use xlink:href="/img/svg/sprite-currencies.svg#ico-usd"></use>
                                            </svg>
                                        </a>
                                        <a :class="{'currencies__currency _euro': true, '_active': currency == '{{ \App\Account::CURRENCY_EUR }}'}" @click="currency = '{{ \App\Account::CURRENCY_EUR }}'">
                                            <svg>
                                                <use xlink:href="/img/svg/sprite-currencies.svg#ico-euro"></use>
                                            </svg>
                                        </a>
                                        <a :class="{'currencies__currency  _crypto': true, '_active': currency == '{{ \App\Account::CURRENCY_BTC_ONE }}'}" @click="currency = '{{ \App\Account::CURRENCY_BTC_ONE }}'">
                                            {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}
                                        </a>
                                        <a :class="{'currencies__currency  _crypto': true, '_active': currency == '{{ \App\Account::CURRENCY_BTC_TWO }}'}" @click="currency = '{{ \App\Account::CURRENCY_BTC_TWO }}'">
                                            {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}
                                        </a>
                                    </div>

                                    <div class="invest-plan__range-wrap _active">
                                        <h4 class="invest-plan__block-title">Сумма инвестиции:</h4>
                                        <p class="invest-plan__range" v-if="currency == 'rub'">{{ config('tariffs.1.from.rub') }} - {{ config('tariffs.1.to.rub') }} @{{ currencyTitle }}.</p>
                                        <p class="invest-plan__range" v-if="currency == 'usd'">{{ config('tariffs.1.from.usd') }} - {{ config('tariffs.1.to.usd') }} @{{ currencyTitle }}.</p>
                                        <p class="invest-plan__range" v-if="currency == 'eur'">{{ config('tariffs.1.from.eur') }} - {{ config('tariffs.1.to.eur') }} @{{ currencyTitle }}.</p>
                                        <p class="invest-plan__range" v-if="currency == '{{ \App\Account::CURRENCY_BTC_ONE }}'">{{ config('tariffs.1.from.'. \App\Account::CURRENCY_BTC_ONE) }} - {{ config('tariffs.1.to.'. \App\Account::CURRENCY_BTC_ONE) }} @{{ currencyTitle }}.</p>
                                        <p class="invest-plan__range" v-if="currency == '{{ \App\Account::CURRENCY_BTC_TWO }}'">{{ config('tariffs.1.from.'. \App\Account::CURRENCY_BTC_TWO) }} - {{ config('tariffs.1.to.'. \App\Account::CURRENCY_BTC_TWO) }} @{{ currencyTitle }}.</p>
                                    </div>
                                </div>
                                <div class="invest-plan__profit-wrap _active">
                                    <h4 class="invest-plan__block-title">Доходность:</h4>
                                    <table class="invest-plan__profit">
                                        <tbody>
                                        <tr>
                                            <th>Период</th>
                                            <th>Всего</th>
                                        </tr>
                                        <tr>
                                            <td>День:</td>
                                            <td>{{ config('tariffs.1.percent') }}%</td>
                                        </tr>
                                        <tr>
                                            <td>В час:</td>
                                            <td>{{ number_format(config('tariffs.1.percent') / 24, 2, '.', ' ') }}%</td>
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
                            <div class="invest-plan__note">
                                <p>
                                    Тело инвестиции включено в выплаты,
                                    вывод средств производится по завершению работы депозита. Начисления происходят ежедневно без выходных.
                                </p>
                            </div>
                        </div>
                        <a href="#" class="invest-plan__btn btn" data-scroll-to-link="calc" onclick="amount = {{ config('tariffs.1.from.rub') }}">Рассчитать</a>
                    </article>
                    <article class="invests-plans__item  invest-plan" data-tabs-wrap="">
                        <h3 class="invest-plan__title  g-2-none">{{ config('tariffs.2.title') }}</h3>
                        <div class="invest-plan__content">
                            <h4 class="invest-plan__term">
                                <span class="invest-plan__term--term">Срок тарифа: <span class="g-text-medium">от 5 до 365 дней</span></span>
                            </h4>
                            <div class="invest-plan__main">
                                <div class="invest-plan__left-col">
                                    <h4 class="invest-plan__block-title">Выберите валюту:</h4>
                                    <div class="invest-plan__currencies  currencies">
                                        <a :class="{'currencies__currency _rub': true, '_active': currency == '{{ \App\Account::CURRENCY_RUB }}'}" @click="currency = '{{ \App\Account::CURRENCY_RUB }}'">
                                            <svg>
                                                <use xlink:href="/img/svg/sprite-currencies.svg#ico-rub"></use>
                                            </svg>
                                        </a>
                                        <a :class="{'currencies__currency _usd': true, '_active': currency == '{{ \App\Account::CURRENCY_USD }}'}" @click="currency = '{{ \App\Account::CURRENCY_USD }}'">
                                            <svg>
                                                <use xlink:href="/img/svg/sprite-currencies.svg#ico-usd"></use>
                                            </svg>
                                        </a>
                                        <a :class="{'currencies__currency _euro': true, '_active': currency == '{{ \App\Account::CURRENCY_EUR }}'}" @click="currency = '{{ \App\Account::CURRENCY_EUR }}'">
                                            <svg>
                                                <use xlink:href="/img/svg/sprite-currencies.svg#ico-euro"></use>
                                            </svg>
                                        </a>
                                        <a :class="{'currencies__currency  _crypto': true, '_active': currency == '{{ \App\Account::CURRENCY_BTC_ONE }}'}" @click="currency = '{{ \App\Account::CURRENCY_BTC_ONE }}'">
                                            {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}
                                        </a>
                                        <a :class="{'currencies__currency  _crypto': true, '_active': currency == '{{ \App\Account::CURRENCY_BTC_TWO }}'}" @click="currency = '{{ \App\Account::CURRENCY_BTC_TWO }}'">
                                            {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}
                                        </a>
                                    </div>

                                    <div class="invest-plan__range-wrap _active">
                                        <h4 class="invest-plan__block-title">Сумма инвестиции:</h4>
                                        <p class="invest-plan__range" v-if="currency == 'rub'">{{ config('tariffs.2.from.rub') }} - {{ config('tariffs.2.to.rub') }} @{{ currencyTitle }}.</p>
                                        <p class="invest-plan__range" v-if="currency == 'usd'">{{ config('tariffs.2.from.usd') }} - {{ config('tariffs.2.to.usd') }} @{{ currencyTitle }}.</p>
                                        <p class="invest-plan__range" v-if="currency == 'eur'">{{ config('tariffs.2.from.eur') }} - {{ config('tariffs.2.to.eur') }} @{{ currencyTitle }}.</p>
                                        <p class="invest-plan__range" v-if="currency == '{{ \App\Account::CURRENCY_BTC_ONE }}'">{{ config('tariffs.2.from.'. \App\Account::CURRENCY_BTC_ONE) }} - {{ config('tariffs.2.to.'. \App\Account::CURRENCY_BTC_ONE) }} @{{ currencyTitle }}.</p>
                                        <p class="invest-plan__range" v-if="currency == '{{ \App\Account::CURRENCY_BTC_TWO }}'">{{ config('tariffs.2.from.'. \App\Account::CURRENCY_BTC_TWO) }} - {{ config('tariffs.2.to.'. \App\Account::CURRENCY_BTC_TWO) }} @{{ currencyTitle }}.</p>
                                    </div>
                                </div>
                                <div class="invest-plan__profit-wrap _active">
                                    <h4 class="invest-plan__block-title">Доходность:</h4>
                                    <table class="invest-plan__profit">
                                        <tbody>
                                        <tr>
                                            <th>Период</th>
                                            <th>Всего</th>
                                        </tr>
                                        <tr>
                                            <td>День:</td>
                                            <td>{{ config('tariffs.2.percent') }}%</td>
                                        </tr>
                                        <tr>
                                            <td>В час:</td>
                                            <td>{{ number_format(config('tariffs.2.percent') / 24, 2, '.', ' ') }}%</td>
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
                            <div class="invest-plan__note">
                                <p>
                                    Тело инвестиции включено в выплаты,
                                    вывод средств производится по завершению работы депозита. Начисления происходят ежедневно без выходных.
                                </p>
                            </div>
                        </div>
                        <a href="#" class="invest-plan__btn btn" data-scroll-to-link="calc" onclick="amount = {{ config('tariffs.2.from.rub') }}">Рассчитать</a>
                    </article>
                    <article class="invests-plans__item  invest-plan" data-tabs-wrap="">
                        <h3 class="invest-plan__title  g-2-none">{{ config('tariffs.3.title') }}</h3>
                        <div class="invest-plan__content">
                            <h4 class="invest-plan__term">
                                <span class="invest-plan__term--term">Срок тарифа: <span class="g-text-medium">от 5 до 365 дней</span></span>
                            </h4>
                            <div class="invest-plan__main">
                                <div class="invest-plan__left-col">
                                    <h4 class="invest-plan__block-title">Выберите валюту:</h4>
                                    <div class="invest-plan__currencies  currencies">
                                        <a :class="{'currencies__currency _rub': true, '_active': currency == '{{ \App\Account::CURRENCY_RUB }}'}" @click="currency = '{{ \App\Account::CURRENCY_RUB }}'">
                                            <svg>
                                                <use xlink:href="/img/svg/sprite-currencies.svg#ico-rub"></use>
                                            </svg>
                                        </a>
                                        <a :class="{'currencies__currency _usd': true, '_active': currency == '{{ \App\Account::CURRENCY_USD }}'}" @click="currency = '{{ \App\Account::CURRENCY_USD }}'">
                                            <svg>
                                                <use xlink:href="/img/svg/sprite-currencies.svg#ico-usd"></use>
                                            </svg>
                                        </a>
                                        <a :class="{'currencies__currency _euro': true, '_active': currency == '{{ \App\Account::CURRENCY_EUR }}'}" @click="currency = '{{ \App\Account::CURRENCY_EUR }}'">
                                            <svg>
                                                <use xlink:href="/img/svg/sprite-currencies.svg#ico-euro"></use>
                                            </svg>
                                        </a>
                                        <a :class="{'currencies__currency  _crypto': true, '_active': currency == '{{ \App\Account::CURRENCY_BTC_ONE }}'}" @click="currency = '{{ \App\Account::CURRENCY_BTC_ONE }}'">
                                            {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}
                                        </a>
                                        <a :class="{'currencies__currency  _crypto': true, '_active': currency == '{{ \App\Account::CURRENCY_BTC_TWO }}'}" @click="currency = '{{ \App\Account::CURRENCY_BTC_TWO }}'">
                                            {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}
                                        </a>
                                    </div>

                                    <div class="invest-plan__range-wrap _active">
                                        <h4 class="invest-plan__block-title">Сумма инвестиции:</h4>
                                        <p class="invest-plan__range" v-if="currency == 'rub'">{{ config('tariffs.3.from.rub') }} - {{ config('tariffs.3.to.rub') }} @{{ currencyTitle }}.</p>
                                        <p class="invest-plan__range" v-if="currency == 'usd'">{{ config('tariffs.3.from.usd') }} - {{ config('tariffs.3.to.usd') }} @{{ currencyTitle }}.</p>
                                        <p class="invest-plan__range" v-if="currency == 'eur'">{{ config('tariffs.3.from.eur') }} - {{ config('tariffs.3.to.eur') }} @{{ currencyTitle }}.</p>
                                        <p class="invest-plan__range" v-if="currency == '{{ \App\Account::CURRENCY_BTC_ONE }}'">{{ config('tariffs.3.from.'. \App\Account::CURRENCY_BTC_ONE) }} - {{ config('tariffs.3.to.'. \App\Account::CURRENCY_BTC_ONE) }} @{{ currencyTitle }}.</p>
                                        <p class="invest-plan__range" v-if="currency == '{{ \App\Account::CURRENCY_BTC_TWO }}'">{{ config('tariffs.3.from.'. \App\Account::CURRENCY_BTC_TWO) }} - {{ config('tariffs.3.to.'. \App\Account::CURRENCY_BTC_TWO) }} @{{ currencyTitle }}.</p>
                                    </div>
                                </div>
                                <div class="invest-plan__profit-wrap _active">
                                    <h4 class="invest-plan__block-title">Доходность:</h4>
                                    <table class="invest-plan__profit">
                                        <tbody>
                                        <tr>
                                            <th>Период</th>
                                            <th>Всего</th>
                                        </tr>
                                        <tr>
                                            <td>День:</td>
                                            <td>{{ config('tariffs.3.percent') }}%</td>
                                        </tr>
                                        <tr>
                                            <td>В час:</td>
                                            <td>{{ number_format(config('tariffs.3.percent') / 24, 2, '.', ' ') }}%</td>
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
                            <div class="invest-plan__note">
                                <p>
                                    Тело инвестиции включено в выплаты,
                                    вывод средств производится по завершению работы депозита. Начисления происходят ежедневно без выходных.
                                </p>
                            </div>
                        </div>
                        <a href="#" class="invest-plan__btn btn" data-scroll-to-link="calc" onclick="amount = {{ config('tariffs.3.from.rub') }}">Рассчитать</a>
                    </article>
                </div>
            </div>
        </section>

        <section class="invest-page__calc  calc  g-page-wrap" data-scroll-to="calc">
            <div class="calc__content  g-content-wrap">
                <div class="calc__titles  titles">
                    <h2 class="titles__title">Универсальный калькулятор инвестора</h2>
                </div>
                <div class="calc__main" data-tabs-wrap="">
                    <!-- dsktp -->
                    <header class="calc__head tabs swiper-container swiper-container-horizontal swiper-container-free-mode">
                        <div id="tariffs-tabs" class="tabs__wrap  swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                            <a :class="{'tabs__btn swiper-slide ': true, '_active swiper-slide-active': currentTariff == '{{ config('tariffs.0.title') }}'}" @click="amount = {{ config('tariffs.0.from.rub') }}">{{ config('tariffs.0.title') }}</a>
                            <a :class="{'tabs__btn swiper-slide': true, '_active swiper-slide-active': currentTariff == '{{ config('tariffs.1.title') }}'}" @click="amount = {{ config('tariffs.1.from.rub') }}">{{ config('tariffs.1.title') }}</a>
                            <a :class="{'tabs__btn swiper-slide': true, '_active swiper-slide-active': currentTariff == '{{ config('tariffs.2.title') }}'}" @click="amount = {{ config('tariffs.2.from.rub') }}">{{ config('tariffs.2.title') }}</a>
                            <a :class="{'tabs__btn swiper-slide': true, '_active swiper-slide-active': currentTariff == '{{ config('tariffs.3.title') }}'}" @click="amount = {{ config('tariffs.3.from.rub') }}">{{ config('tariffs.3.title') }}</a>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </header>

                    <div id="tariff-tab-block" class="calc__tab-block _active" data-tab-block="calc-tab">

                        <div class="calc__left-col">
                            <div class="calc__group  calc__group--currencies">
                                <h3 class="calc__group-title">Выберите валюту инвестирования:</h3>
                                <div id="tariff-currencies" class="calc__currencies">

                                    <label class="calc__radio  radio">
                                        RUB
                                        <input type="radio" v-model="currency" value="{{ \App\Account::CURRENCY_RUB }}" name="calc-currency" checked="">
                                        <span class="radio__mark"></span>
                                    </label>

                                    <label class="calc__radio  radio">
                                        USD
                                        <input type="radio" v-model="currency" value="{{ \App\Account::CURRENCY_USD }}" name="calc-currency">
                                        <span class="radio__mark"></span>
                                    </label>

                                    <label class="calc__radio  radio">
                                        EUR
                                        <input type="radio" v-model="currency" value="{{ \App\Account::CURRENCY_EUR }}" name="calc-currency">
                                        <span class="radio__mark"></span>
                                    </label>

{{--                                    <label class="calc__radio  radio">--}}
{{--                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}--}}
{{--                                        <input type="radio" v-model="currency" value="{{ \App\Account::CURRENCY_BTC_ONE }}" name="calc-currency">--}}
{{--                                        <span class="radio__mark"></span>--}}
{{--                                    </label>--}}

{{--                                    <label class="calc__radio  radio">--}}
{{--                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}--}}
{{--                                        <input type="radio" v-model="currency" value="{{ \App\Account::CURRENCY_BTC_TWO }}" name="calc-currency">--}}
{{--                                        <span class="radio__mark"></span>--}}
{{--                                    </label>--}}

                                </div>
                            </div>

                            <div class="calc__group">
                                <h3 class="calc__group-title">Введите сумму, которую хотите инвестировать:</h3>
                                <div class="calc__num-slider  num-slider">
                                    <input v-model="amount" type="number" class="num-slider__output">
{{--                                    <input id="tariff-input" oninput="Calculate(this.value)" type="range" class="num-slider__main" min="1000" max="1000000" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"><div class="num-slider__slider rangeslider--horizontal" id="js-rangeslider-0"><div class="num-slider__fill" style="width: 10.5px;"></div><div class="num-slider__handle" style="left: 0px;"></div></div>--}}
                                </div>
                            </div>
                        </div>

                        <div class="calc__result-wrap">
                            <table class="calc__result">
                                <tbody><tr>
                                    <td id="tariff--period">Ваше ежедневное начисление составит:</td>
                                    <td id="tariff-daily-profit">@{{ (resultSum / 30).toFixed() }}</td>
                                </tr>
                                <tr>
                                    <td>Ваша прибыль за 30 дней:</td>
                                    <td id="tariff-total-profit">@{{ resultSum }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="calc__btn-wrap">
                            <a href="{{ route('register') }}" class="calc__btn  btn  btn--large">Инвестировать</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="invest-page__work-scheme  work-scheme  g-page-wrap">
            <div class="work-scheme__content  g-content-wrap">
                <h2 class="work-scheme__title">Принцип работы платформы</h2>
                <div class="work-scheme__list">
                    <article class="work-scheme__item  work-scheme-item ">
                        <div class="work-scheme-item__icon  _login">
                            <svg>
                                <use xlink:href="/img/svg/sprite-work-scheme.svg#ico-login"></use>
                            </svg>
                        </div>
                        <h4 class="work-scheme-item__num">01</h4>
                        <h5 class="work-scheme-item__text">Регистрация на сайте платформы</h5>
                        <span class="work-scheme-item__next-step ">
      <svg>
        <use xlink:href="/img/svg/sprite-main.svg#ico-arrow"></use>
      </svg>
    </span>
                    </article>
                    <article class="work-scheme__item  work-scheme-item delay-3">
                        <div class="work-scheme-item__icon  _select-plan">
                            <svg>
                                <use xlink:href="/img/svg/sprite-work-scheme.svg#ico-select-plan"></use>
                            </svg>
                        </div>
                        <h4 class="work-scheme-item__num">02</h4>
                        <h5 class="work-scheme-item__text">Выбор тарифного плана</h5>
                        <span class="work-scheme-item__next-step ">
      <svg>
        <use xlink:href="/img/svg/sprite-main.svg#ico-arrow"></use>
      </svg>
    </span>
                    </article>
                    <article class="work-scheme__item  work-scheme-item delay-6">
                        <div class="work-scheme-item__icon  _create-invest">
                            <svg>
                                <use xlink:href="/img/svg/sprite-work-scheme.svg#ico-create-invest"></use>
                            </svg>
                        </div>
                        <h4 class="work-scheme-item__num">03</h4>
                        <h5 class="work-scheme-item__text">Создание инвестиции</h5>
                        <span class="work-scheme-item__next-step ">
      <svg>
        <use xlink:href="/img/svg/sprite-main.svg#ico-arrow"></use>
      </svg>
    </span>
                    </article>
                    <article class="work-scheme__item  work-scheme-item delay-9">
                        <div class="work-scheme-item__icon  _get-profit">
                            <svg>
                                <use xlink:href="/img/svg/sprite-work-scheme.svg#ico-get-profit"></use>
                            </svg>
                        </div>
                        <h4 class="work-scheme-item__num">04</h4>
                        <h5 class="work-scheme-item__text">Получение заявленной прибыли</h5>
                        <span class="work-scheme-item__next-step _ok">
      <svg>
        <use xlink:href="/img/svg/sprite-main.svg#ico-tick"></use>
      </svg>
    </span>
                    </article>
                </div>
            </div>
        </section>

        <section class="invest-page__advantages  advantages  g-page-wrap">


            <div class="advantages__content  g-content-wrap">
                <h2 class="advantages__title">Преимущества компании</h2>
                <div class="advantages__list" data-slide-toggle-wrap="">
                    <article class="advantages__item  advantage">
                        <svg class="advantage__icon">
                            <use xlink:href="/img/svg/sprite-info.svg#ico-bonus"></use>
                        </svg>
                        <h3 class="advantage__title">Удобно и просто</h3>
                        <p class="advantage__text">Наша онлайн платформа дает возможность инвестировать и получать прибыль не выходя из дома и офиса.</p>
                    </article>
                    <article class="advantages__item  advantage">
                        <svg class="advantage__icon">
                            <use xlink:href="/img/svg/sprite-info.svg#ico-payment-card"></use>
                        </svg>
                        <h3 class="advantage__title">Пополнение и вывод средств</h3>
                        <p class="advantage__text">Пополнить и вывести средства с платформы Ellis Company, вы можете при помощи популярных платежных систем, электронных кошельков и банковских учреждений в вашей стране.</p>
                    </article>
                    <article class="advantages__item  advantage">
                        <svg class="advantage__icon">
                            <use xlink:href="/img/svg/sprite-info.svg#ico-platform"></use>
                        </svg>
                        <h3 class="advantage__title">Поиск и проверка инвестиционных предложений.</h3>
                        <p class="advantage__text">Работая с нашим сервисом, Вы получаете доступ к надежным инвестиционным предложениям, которые подобрали и проверили специалисты Ellis Company.</p>
                    </article>
                    <div class="advantages__mob-hide-block" data-slide-toggle="" data-slide-toggle-speed="900">            <article class="advantages__item  advantage">
                            <svg class="advantage__icon">
                                <use xlink:href="/img/svg/sprite-info.svg#ico-timer"></use>
                            </svg>
                            <h3 class="advantage__title">Автоматизация процесса инвестиции</h3>
                            <p class="advantage__text">Процесс полностью автоматизирован и находится под  контролем наших IT-специалистов, все инвестиции распределяются в онлайн режиме.</p>
                        </article>
                        <article class="advantages__item  advantage">
                            <svg class="advantage__icon">
                                <use xlink:href="/img/svg/sprite-info.svg#ico-case"></use>
                            </svg>
                            <h3 class="advantage__title">Отсутствие ограничений</h3>
                            <p class="advantage__text">Использовать платфому Ellis Company   могут все  пользователи прошедшие регистрацию,  количество и объемы ваших инвестиций не ограничены, а Ваши персональные данные надежно защищены.</p>
                        </article>
                        <article class="advantages__item  advantage">
                            <svg class="advantage__icon">
                                <use xlink:href="/img/svg/sprite-info.svg#ico-multicurrency"></use>
                            </svg>
                            <h3 class="advantage__title">Выбирайте валюту в личном кабинете</h3>
                            <p class="advantage__text">Для Вашего удобства, на нашей платформе представлены основные мировые валюты, обмен которых вы можете сделать в личном кабинете.</p>
                        </article>
                        <article class="advantages__item  advantage">
                            <svg class="advantage__icon">
                                <use xlink:href="/img/svg/sprite-info.svg#ico-sale-label"></use>
                            </svg>
                            <h3 class="advantage__title">Большой выбор тарифных планов </h3>
                            <p class="advantage__text">Мы разработали тарифные планы, среди которых вы обязательно найдете тот, который подойдет именно Вам.</p>
                        </article>
                        <article class="advantages__item  advantage">
                            <svg class="advantage__icon">
                                <use xlink:href="/img/svg/sprite-info.svg#ico-team"></use>
                            </svg>
                            <h3 class="advantage__title">Команда Ellis Company</h3>
                            <p class="advantage__text">В нашей команде работают профессионалы, получившие огромный практический опыт в финансовой сфере, которые помогут Вам сделать правильный выбор.</p>
                        </article>
                    </div>        <a href="#" class="advantages__show-all btn btn--light btn--large d-none d-2-inline-flex" data-slide-toggle-link="">
                        <span>Все преимущества</span>
                        <svg>
                            <use xlink:href="/img/svg/sprite-main.svg#ico-arrow"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </section>


        <section class="invest-page__registr  auth  g-page-wrap">

            <div class="auth__content  g-content-wrap" style="text-align: center;">

                <a href="{{ route('register') }}" target="_blank" class="auth__btn btn">Регистрация</a>


            </div>
        </section>


    </div>
</main>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        $(document).ready(function() {
            $('[data-scroll-to-link="calc"]').click(function () {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $('[data-scroll-to="calc"]').offset().top - 50
                }, 1000);

                return false;
            });
        });

        var app = new Vue({
            el: '#app-invest-container',
            data: {
                currency: "{{ \App\Account::CURRENCY_RUB }}",
                amount: {{ config('tariffs.0.from.rub') }},
            },

            computed: {
                currencyTitle() {
                    let titles = {
                        '{{ \App\Account::CURRENCY_RUB }}': 'RUB',
                        '{{ \App\Account::CURRENCY_USD }}': 'USD',
                        '{{ \App\Account::CURRENCY_EUR }}': 'EUR',
                        '{{ \App\Account::CURRENCY_BTC_ONE }}': '{{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}',
                        '{{ \App\Account::CURRENCY_BTC_TWO }}': '{{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}',
                    };

                    return titles[this.currency];
                },

                currentTariff() {
                    let name = "{{ config('tariffs.3.title') }}";

                    if(this.currency === 'rub') {
                        if (this.amount < {{ config('tariffs.0.to.rub') }}) {
                            name = "{{ config('tariffs.0.title') }}";
                        } else if (this.amount >= {{ config('tariffs.1.from.rub') }} && this.amount < {{ config('tariffs.1.to.rub') }}) {
                            name = "{{ config('tariffs.1.title') }}";
                        } else if (this.amount >= {{ config('tariffs.2.from.rub') }} && this.amount < {{ config('tariffs.2.to.rub') }}) {
                            name = "{{ config('tariffs.2.title') }}";
                        }
                    } else if(this.currency === 'usd') {
                        if (this.amount < {{ config('tariffs.0.to.usd') }}) {
                            name = "{{ config('tariffs.0.title') }}";
                        } else if (this.amount >= {{ config('tariffs.1.from.usd') }} && this.amount < {{ config('tariffs.1.to.usd') }}) {
                            name = "{{ config('tariffs.1.title') }}";
                        } else if (this.amount >= {{ config('tariffs.2.from.usd') }} && this.amount < {{ config('tariffs.2.to.usd') }}) {
                            name = "{{ config('tariffs.2.title') }}";
                        }
                    } else if(this.currency === '{{ \App\Account::CURRENCY_BTC_ONE }}') {
                        if (this.amount < {{ config('tariffs.0.to.'. \App\Account::CURRENCY_BTC_ONE) }}) {
                            name = "{{ config('tariffs.0.title') }}";
                        } else if (this.amount >= {{ config('tariffs.1.from.'. \App\Account::CURRENCY_BTC_ONE) }} && this.amount < {{ config('tariffs.1.to.'. \App\Account::CURRENCY_BTC_ONE) }}) {
                            name = "{{ config('tariffs.1.title') }}";
                        } else if (this.amount >= {{ config('tariffs.2.from.'. \App\Account::CURRENCY_BTC_ONE) }} && this.amount < {{ config('tariffs.2.to.'. \App\Account::CURRENCY_BTC_ONE) }}) {
                            name = "{{ config('tariffs.2.title') }}";
                        }
                    } else if(this.currency === '{{ \App\Account::CURRENCY_BTC_TWO }}') {
                        if (this.amount < {{ config('tariffs.0.to.'. \App\Account::CURRENCY_BTC_TWO) }}) {
                            name = "{{ config('tariffs.0.title') }}";
                        } else if (this.amount >= {{ config('tariffs.1.from.'. \App\Account::CURRENCY_BTC_TWO) }} && this.amount < {{ config('tariffs.1.to.'. \App\Account::CURRENCY_BTC_TWO) }}) {
                            name = "{{ config('tariffs.1.title') }}";
                        } else if (this.amount >= {{ config('tariffs.2.from.'. \App\Account::CURRENCY_BTC_TWO) }} && this.amount < {{ config('tariffs.2.to.'. \App\Account::CURRENCY_BTC_TWO) }}) {
                            name = "{{ config('tariffs.2.title') }}";
                        }
                    } else {
                        if (this.amount < {{ config('tariffs.0.to.eur') }}) {
                            name = "{{ config('tariffs.0.title') }}";
                        } else if (this.amount >= {{ config('tariffs.1.from.eur') }} && this.amount < {{ config('tariffs.1.to.eur') }}) {
                            name = "{{ config('tariffs.1.title') }}";
                        } else if (this.amount >= {{ config('tariffs.2.from.eur') }} && this.amount < {{ config('tariffs.2.to.eur') }}) {
                            name = "{{ config('tariffs.2.title') }}";
                        }
                    }

                    return name;
                },

                resultSum() {
                    let percent = {{ config('tariffs.3.percent') }};

                    if(this.currency === 'rub') {
                        if (this.amount < {{ config('tariffs.0.to.rub') }}) {
                            percent = {{ config('tariffs.0.percent') }};
                        } else if (this.amount >= {{ config('tariffs.1.from.rub') }} && this.amount < {{ config('tariffs.1.to.rub') }}) {
                            percent = {{ config('tariffs.1.percent') }};
                        } else if (this.amount >= {{ config('tariffs.2.from.rub') }} && this.amount < {{ config('tariffs.2.to.rub') }}) {
                            percent = {{ config('tariffs.2.percent') }};
                        }
                    } else if(this.currency === 'usd') {
                        if (this.amount < {{ config('tariffs.0.to.usd') }}) {
                            percent = {{ config('tariffs.0.percent') }};
                        } else if (this.amount >= {{ config('tariffs.1.from.usd') }} && this.amount < {{ config('tariffs.1.to.usd') }}) {
                            percent = {{ config('tariffs.1.percent') }};
                        } else if (this.amount >= {{ config('tariffs.2.from.usd') }} && this.amount < {{ config('tariffs.2.to.usd') }}) {
                            percent = {{ config('tariffs.2.percent') }};
                        }
                    } else if(this.currency === '{{ \App\Account::CURRENCY_BTC_ONE }}') {
                        if (this.amount < {{ config('tariffs.0.to.'. \App\Account::CURRENCY_BTC_ONE) }}) {
                            percent = {{ config('tariffs.0.percent') }};
                        } else if (this.amount >= {{ config('tariffs.1.from.'. \App\Account::CURRENCY_BTC_ONE) }} && this.amount < {{ config('tariffs.1.to.'. \App\Account::CURRENCY_BTC_ONE) }}) {
                            percent = {{ config('tariffs.1.percent') }};
                        } else if (this.amount >= {{ config('tariffs.2.from.'. \App\Account::CURRENCY_BTC_ONE) }} && this.amount < {{ config('tariffs.2.to.'. \App\Account::CURRENCY_BTC_ONE) }}) {
                            percent = {{ config('tariffs.2.percent') }};
                        }
                    } else if(this.currency === '{{ \App\Account::CURRENCY_BTC_TWO }}') {
                        if (this.amount < {{ config('tariffs.0.to.'. \App\Account::CURRENCY_BTC_TWO) }}) {
                            percent = {{ config('tariffs.0.percent') }};
                        } else if (this.amount >= {{ config('tariffs.1.from.'. \App\Account::CURRENCY_BTC_TWO) }} && this.amount < {{ config('tariffs.1.to.'. \App\Account::CURRENCY_BTC_TWO) }}) {
                            percent = {{ config('tariffs.1.percent') }};
                        } else if (this.amount >= {{ config('tariffs.2.from.'. \App\Account::CURRENCY_BTC_TWO) }} && this.amount < {{ config('tariffs.2.to.'. \App\Account::CURRENCY_BTC_TWO) }}) {
                            percent = {{ config('tariffs.2.percent') }};
                        }
                    } else {
                        if (this.amount < {{ config('tariffs.0.to.eur') }}) {
                            percent = {{ config('tariffs.0.percent') }};
                        } else if (this.amount >= {{ config('tariffs.1.from.eur') }} && this.amount < {{ config('tariffs.1.to.eur') }}) {
                            percent = {{ config('tariffs.1.percent') }};
                        } else if (this.amount >= {{ config('tariffs.2.from.eur') }} && this.amount < {{ config('tariffs.2.to.eur') }}) {
                            percent = {{ config('tariffs.2.percent') }};
                        }
                    }

                    return (((this.amount / 100) * percent) * 30).toFixed(1);
                },
            },
        })
    </script>
@endpush

@section('old-content')
<div id="header" class="arduix-nav-style" style="top: 0px;">
    <div class="navbar-area"><!-- Menu For Mobile Device -->
    @include('layouts._mobile-nav')
        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/white-logo.png') }}" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="display: block;">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item"><a href="{{ route('home') }}">@lang('app.Главная')</a></li>
                            <li class="nav-item"><a href="{{ route('page.about') }}" class="nav-link dropdown-toggle">@lang('app.О компании')</a></li>
                            <li class="nav-item"><a href="{{ route('page.faq') }}" class="nav-link dropdown-toggle">@lang('app.Вопросы')</a>
                            </li>
                            <li class="nav-item"><a href="{{ route('page.news') }}" class="nav-link dropdown-toggle">@lang('app.Новости')</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('page.partners') }}" class="nav-link dropdown-toggle">@lang('app.Партнерам')</a>
                            </li>
                            <li class="nav-item"><a href="{{ route('page.support') }}" class="nav-link dropdown-toggle">@lang('app.Контакты')</a>
                            </li>
                        </ul>
                        <div class="others-option">
                            <a class="default-btn" href="{{ route('cabinet') }}">
                                Кабинет<i class="bx bx-log-in-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="preloader" style="display: none;">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div><!-- End Preloader Area --><!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content"><h2>@lang('app.Партнерам')</h2>
            <ul>
                <li><a href="{{ route('home') }}">@lang('app.Главная')</a></li>
                <li>@lang('app.Партнерам')</li>
            </ul>
        </div>
    </div>
</div><!-- End Page Title Area --><!-- Start About Area -->
<div class="container">
    <section class="page">
        <div class="row margin-section">
            <div class="col-lg-12">
                <div class="box-about">
                    <div class="top other"><h3 class="title white">@lang('app.Зачем мне нужна партнерская программа?')</h3></div>
                    <div class="bottom">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="bottom-item other p-item-1">
                                    <img src="/images/partners-icon-top-1.svg" class="p-img1" alt="">
                                    <b>@lang('app.Возможность заработка<br> без вложений')</b>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="bottom-item other p-item-2">
                                    <img src="/images/partners-icon-top-2.svg" class="p-img2">
                                    <b>@lang('app.Увеличение прибыли, за счет приглашения друзей')</b>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="bottom-item other p-item-3">
                                    <img src="/images/partners-icon-top-3.svg" alt="">
                                    <b>@lang('app.Фиксированный заработок от каждого открытого партнером депозита')</b>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="bottom-item other last p-item-4">
                                    <img src="/images/partners-icon-top-4.svg" class="p-img4" alt="">
                                    <b>@lang('app.Простая и понятная система карьерного роста в рамках компании')</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row my-5">
        <div class="col-12">
            @lang('app.partners_page_desc')
        </div>
    </div>

    <section class="start"><h2 class="title with-icon"><img src="/images/process.svg" class="mr-2">@lang('app.Пример')</h2>
        <div class="steps steps-vertical">
            <div class="line noborder">
                <div class="item other wow fadeInRight" data-wow-duration="0.4s" data-wow-delay="0.2s"
                     style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.2s; animation-name: fadeInRight;">
                    <div>
                        <ul>
                            <li><img src="/images/partner-step-1.svg"></li>
                            <li class="arrow"><img src="/images/right-arrow.svg" alt=""></li>
                            <li><img src="/images/partner-step-2.svg"></li>
                        </ul>
                        <span>@lang('app.<b>Александр</b> пригласил <b>Дарью</b> в компанию, отправив ей свою партнерскую ссылку')</span><img
                            src="/images/panel-right-top.svg" class="svg-arrow1 hide-640 visible-xs"><img
                            src="/images/panel-right-top2x.svg"
                            class="svg-arrow2 hiden-320 hiden-360 hiden-480 visible-xs"><img
                            src="/images/panel-right-arrow.svg" class="svg-arrow hidden-xs"></div>
                </div>
                <div class="item other middle wow fadeInRight" data-wow-duration="0.4s" data-wow-delay="0.4s"
                     style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.4s; animation-name: fadeInRight;">
                    <div>
                        <ul>
                            <li><img src="/images/partner-step-2.svg"></li>
                            <li class="arrow"><img src="/images/right-arrow.svg" alt=""></li>
                            <li><img src="/images/partner-step-3.svg"></li>
                        </ul>
                        <span>@lang('app.<b>Дарья</b> зарегистрировалась по ссылке и стала партнером </span>')<img
                            src="/images/panel-right-top.svg" class="svg-arrow1 hide-640 visible-xs"><img
                            src="/images/panel-right-top2x.svg"
                            class="svg-arrow2 hiden-320 hiden-360 hiden-480 visible-xs"><img
                            src="/images/panel-right-arrow.svg" class="svg-arrow hidden-xs"></div>
                </div>
                <div class="item  item-4 other middle wow fadeInRight" data-wow-duration="0.4s" data-wow-delay="0.6s"
                     style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.6s; animation-name: fadeInRight;">
                    <div>
                        <ul>
                            <li><img src="/images/partner-step-2.svg"></li>
                            <li class="arrow"><img src="/images/right-arrow.svg" alt=""></li>
                            <li><img src="/images/robot.svg" style="height: 76px;"></li>
                        </ul>
                        <span>@lang('app.<b>Дарья</b> открыла депозит с торговым роботом на <b>10 000 рублей</b>')</span><img
                            src="/images/panel-right-top-fill.svg" class="svg-arrow1  hide-640 visible-xs"><img
                            src="/images/panel-right-top-fill2x.svg"
                            class="svg-arrow2 hiden-320 hiden-360 hiden-480 visible-xs"><img
                            src="/images/panel-right-arrow.svg" class="svg-arrow hidden-xs"></div>
                </div>
                <div class="item other middle dark wow fadeInRight" data-wow-duration="0.4s" data-wow-delay="0.8s"
                     style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.8s; animation-name: fadeInRight;">
                    <div>
                        <ul>
                            <li><img src="/images/partner-step-4.svg"></li>
                        </ul>
                        <span>@lang('app.<b>Александр</b>  получил бонус в размере <b>500 рублей</b>')</span><img
                            src="/images/panel-right-top-dark.svg" class="svg-arrow1 hide-640  visible-xs"><img
                            src="/images/panel-right-top-dark2x.svg"
                            class="svg-arrow2 hiden-320 hiden-360 hiden-480 visible-xs"><img
                            src="/images/panel-right-arrow-dark.svg" class="svg-arrow hidden-xs"></div>
                </div>
                <div class="item other last1 wow fadeInRight" data-wow-duration="0.4s" data-wow-delay="1s"
                     style="visibility: visible; animation-duration: 0.4s; animation-delay: 1s; animation-name: fadeInRight;">
                    <div>
                        <ul>
                            <li><img src="/images/partner-step-1.svg"></li>
                            <li class="arrow"><img src="/images/right-arrow.svg" alt=""></li>
                            <li><img src="/images/partner-step-5.svg"></li>
                        </ul>
                        <span>@lang('app.<b>Александр</b> достиг партнерского статуса <b>«Повышенный»</b>')</span></div>
                </div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-12 my-5 text-center">
            <a href="{{ route('register') }}" data-toggle="modal" class="default-btn">@lang('app.Регистрация')</a>
        </div>

        <div class="col-12 text-center">
            <iframe width="800" style="max-width: 100%" height="500" src="https://www.youtube.com/embed/nwP55b9Hc1Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="col-12 my-5">
            @lang('app.partners_page_desc_second')
        </div>
        <div class="col-12 mb-5">
            <div  class="row">
                <div  class="col-md-4 col-12">
                    <div  class="card">
                        <div  class="card-header"><b>@lang('Партнер первого уровня')</b>
                        </div>
                        <div  class="card-body"><span>@lang('app.Дает вам'):</span>
                            <ul >
                                <li > + <b>0.4%</b> @lang('app.к ставке каждого депозита')</li>
                                <li > + <b>10$</b> @lang('app.на ваш счет')</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div  class="col-md-4 col-12">
                    <div  class="card">
                        <div  class="card-header"><b>@lang('app.Партнер второго уровня')</b>
                        </div>
                        <div  class="card-body"><span>@lang('app.Дает вам'):</span>
                            <ul >
                                <li > + <b >0.2%</b> @lang('app.к ставке каждого депозита')</li>
                                <li > + <b >7.5$</b> @lang('app.на ваш счет')</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div  class="col-md-4 col-12">
                    <div  class="card">
                        <div  class="card-header"><b>@lang('app.Партнер третьего уровня')</b>
                        </div>
                        <div  class="card-body"><span>@lang('app.Дает вам'):</span>
                            <ul >
                                <li > + <b >0.1%</b> @lang('app.к ставке каждого депозита')</li>
                                <li > + <b >5$</b> @lang('app.на ваш счет')</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <section class="refs py-0">
        <div class="box-refstatus col-xs-mt-10 col-sm-mt-10 col-md-mt-0">
            <div class="inset bottom">
                <div class="row">
                    <div class="col-md-8">
                        <div class="left"><h3 class="badge badge-warning">@lang('app.ВАЖНО')!</h3>
                            @lang('app.refs_desc')
                        </div>
                    </div>
                    <div class="col-md-3 col-right">
                        <div class="right col-xs-mt-20 col-sm-mt-30 col-md-mt-0">
                            <span>@lang('app.Презентация партнерской<br class="visible-sm"> программы')</span>
                            <a class="btn btn-blue btn-large btn-inline" href="/images/Презентация.pdf" target="_blank">
                                <img src="/images/icon-pdf.svg" class="mr-2"> @lang('app.Скачать')
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('pages._faq')

<div class="container">
    <section class="signup">
        <div class="inset d-flex align-items-center">
            <div class="row w-100">
                <div class="col-sm-9 col-md-9">
                    <h2 class="title white ">@lang('app.Быстрая регистрация')</h2>
                    <form method="post" action="{{ route('register') }}" class="col-xs-pr-0 col-sm-pr-30">
                        <div class="field">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group white has-feedback">
                                        <input name="name" type="text" id="register1_frm_uLogin" value="" placeholder="@lang('app.Имя')" pattern="^[а-яА-ЯёЁa-zA-Z0-9_-]{3,25}$" class="form-control with-icon" data-minlength="4" required="">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group white has-feedback">
                                        <input name="email" type="email" id="register1_frm_uMail" value="" placeholder="Email" class="form-control with-icon" required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group white has-feedback">
                                        <input name="password" placeholder="@lang('app.Пароль')" id="register1_frm_uPass" type="password" data-minlength="4" class="form-control with-icon" value="" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group white has-feedback">
                                        <input name="password_confirmation" placeholder="@lang('app.Повторите пароль')" id="register1_frm_Pass2" class="form-control with-icon" type="password" data-minlength="4" value="" data-match="#register1_frm_uPass">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @csrf
                        <div class="field m-t-10">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group white form-group-flex m-b-0">
                                        <div>
                                            <input name="register1_frm_btn" value="@lang('app.Зарегистрироваться')" type="submit" class="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
