@extends('layouts.app')

@section('title', 'Реквизиты для оплаты')

@section('content')
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
        <div data-v-e4d5b16a=""
             class="grid padding-x-3 padding-y-4 shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">

            <ul class="errors rid-column-12 grid-column-6--xl grid-column-start-4--xl margin-bottom-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

            <div class="grid-column-12 grid-column-6--xl grid-column-start-4--xl">
                @csrf
                <div data-v-e4d5b16a="">
                    <div data-v-e4d5b16a="" class="margin-y-4 font-sm"> Пополнение баланса
                        <div data-v-e4d5b16a="" class="color-gray text-tight">
                            - Зайдите в свой кошелёк <br/>
                            - Скопируйте сумму для совершения платежа <br/>
                            - Скопируйте реквизиты для оплаты <br/>
                            - Произведите оплату и нажмите «Я оплатил»
                        </div>
                    </div>
                </div>
            </div>

            <form method="post" action="{{ route('cabinet.income.update', $income) }}" class="grid-column-12 grid-column-6--xl grid-column-start-4--xl">
                @csrf
                <div data-v-e4d5b16a="" class="padding-bottom-5">
                    <div data-v-e4d5b16a="">
                        <div data-v-7032d9db="" data-v-e4d5b16a="" data-vv-as=" " class="field">
                            <div data-v-7032d9db="" class="flex justify-between">
                                <label data-v-7032d9db="" for="input_s1wtgga9" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                    Сумма для пополнения

                                    @php
                                    if($income->currency == 'usd') {
                                        $currencyName = "USD";
                                    } elseif($income->currency == 'eur') {
                                        $currencyName = "AVAX";
                                    } elseif($income->currency == 'rub') {
                                        $currencyName = "RUB";
                                    } else {
                                        $currencyName = config('crypto.'. $income->currency .'.name');
                                    }
                                    @endphp
                                </label>
                            </div>
                            <div data-v-7032d9db="" class="relative">
                                <div data-v-7032d9db="" class="field__input-wrapper flex items-center overflow-hidden">
                                    <input name="amount" value="{{ $income->amount / 100000 }} {{ $currencyName }}" disabled type="text" placeholder="0" class="field__input btn-copy cursor-pointer" data-clipboard-text="{{ $income->amount / 100000 }}">
                                </div>
                            </div>
                        </div>
                        <div data-v-7032d9db="" data-v-e4d5b16a="" data-vv-as=" " class="field margin-top-3">
                            <div data-v-7032d9db="" class="flex justify-between">
                                <label data-v-7032d9db="" for="input_s1wtgga9" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                    Реквизиты для оплаты: (
                                    @if($income->payment_system == \App\Income::QIWI)
                                        QIWI
                                    @elseif($income->payment_system == \App\Income::PAYEER)
                                        PAYEER
                                    @elseif($income->payment_system == \App\Income::PERFECT_MONEY)
                                        Perfect Money
                                    @elseif($income->payment_system == \App\Income::BITCOIN)
                                        Bitcoin
                                    @elseif($income->payment_system == \App\Income::CARD)
                                        Банковская карта
                                    @elseif($income->payment_system == \App\Income::ADVACASH)
                                        Advacash
                                    @elseif($income->payment_system == \App\Income::YANDEX)
                                        Яндекс Деньги
                                    @endif
                                )
                                </label>
                            </div>
                            <div data-v-7032d9db="" class="relative">
                                <div data-v-7032d9db="" class="field__input-wrapper flex items-center overflow-hidden">
                                    <input value="{{ $requisites }}" disabled type="text" placeholder="0" class="field__input btn-copy cursor-pointer" data-clipboard-text="{{ $requisites }}">
                                </div>
                            </div>
                        </div>
                        @if(! empty($comment))
                        <div data-v-7032d9db="" data-v-e4d5b16a="" data-vv-as=" " class="field margin-top-3">
                            <div data-v-7032d9db="" class="flex justify-between">
                                <label data-v-7032d9db="" for="input_s1wtgga9" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                    Примечание
                                </label>
                            </div>
                                <div data-v-7032d9db="" class="relative">
                                    <div data-v-7032d9db="" class="field__input-wrapper flex items-center overflow-hidden">
                                        <input value="{{ $comment }}" disabled type="text" class="field__input btn-copy cursor-pointer" data-clipboard-text="{{ $comment }}">
                                    </div>
                                </div>
                        </div>
                        @endif
                        <div data-v-e4d5b16a="" class="flex--sm justify-between font-sm margin-y-2 font-medium"></div>
                        <button name="decline" class="width-full button button--error button--mini">
                            <span data-v-141d1a81="" class="button__content">
                                Отменить оплату
                            </span>
                        </button>
                        <button name="payed" class="width-full button button--success button--mini margin-top-3">
                            <span data-v-141d1a81="" class="button__content">
                                Я оплатил
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
