@extends('layouts.app')

@section('title', 'Пополнение')

@section('content')
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
        <div data-v-e4d5b16a=""
             class="grid padding-x-3 padding-y-4 shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">

            <ul class="errors rid-column-12 grid-column-6--xl grid-column-start-4--xl margin-bottom-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

            <form method="post" action="{{ route('cabinet.income.store') }}" class="grid-column-12 grid-column-6--xl grid-column-start-4--xl">
                @csrf
                <div data-v-e4d5b16a="" class="padding-bottom-5">
                    <livewire:income-currency-system />
                    <p data-v-0297da3b="" class="color-gray font-sm">
                        Ваш уникальный ID для перевода: <strong>{{ auth()->id() }}</strong>
                    </p>
                    <div data-v-e4d5b16a="" class="margin-y-4 font-sm"> Как работает пополнение
                        <div data-v-e4d5b16a="" class="color-gray text-tight">
                            Введите сумму в желаемой валюте и нажмите кнопку пополнить, после чего заявка на пополнение будет создана, и вам необходимо будет нажать кнопку «Получить реквизиты», после чего вы получите актуальные реквизиты и сможете совершить пополнение.
                        </div>
                    </div>
                    <div data-v-e4d5b16a="">
                        <div data-v-7032d9db="" data-v-e4d5b16a="" data-vv-as=" " class="field">
                            <div data-v-7032d9db="" class="flex justify-between">
                                <label data-v-7032d9db="" for="input_s1wtgga9" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                    Введите сумму для пополнения
                                </label>
                            </div>
                            <div data-v-7032d9db="" class="relative">
                                <div data-v-7032d9db="" class="field__input-wrapper flex items-center overflow-hidden">
                                    <input name="amount" step="0.0001" min="0" value="{{ old('amount') }}" type="number" placeholder="0" class="field__input">
                                </div>
                            </div>
                        </div>
                        <div data-v-e4d5b16a="" class="flex--sm justify-between font-sm margin-y-2 font-medium"></div>
                        <button class="width-full button button--success button--mini">
                            <span data-v-141d1a81="" class="button__content">
                                <svg data-v-e4d5b16a="" data-v-141d1a81="" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-white height-0-5 margin-right-2"><path data-v-e4d5b16a="" data-v-141d1a81="" d="M5 0a1 1 0 00-1 1v3H1a1 1 0 100 2h3v3a1 1 0 102 0V6h3a1 1 0 100-2H6V1a1 1 0 00-1-1z" fill="#569A21"></path></svg>
                                Пополнить счет
                            </span>
                        </button>
                    </div>
                </div>
            </form>

            <div class="grid-column-12">
                <div data-v-4c61e7bd="" class="padding-x-3 padding-bottom-3">
{{--                    <b data-v-4c61e7bd=""> История транзакций</b>--}}
                    <div data-v-4c61e7bd="" class="padding-0-15 shadowed border-rounded-3 overflow-auto margin-top-2">
                        <table data-v-4c61e7bd="" class="table width-full table--no-hover">
                            <thead data-v-4c61e7bd="">
                            <tr data-v-4c61e7bd="" class="font-sm color-gray bg-litest-gray text-nowrap">
                                <th class="padding-3 font-medium text-left">@lang('app.Код')</th>
                                <th class="padding-3 font-medium text-left">@lang('app.Сумма')</th>
                                <th class="padding-3 font-medium text-left">@lang('app.Валюта')</th>
                                <th class="padding-3 font-medium text-left">@lang('app.Система')</th>
                                <th class="padding-3 font-medium text-left">@lang('app.Дата')</th>
                                <th class="padding-3 font-medium text-left">@lang('app.Статус')</th>
                            </tr>
                            </thead>
                            <tbody data-v-4c61e7bd=""><!---->
                            @forelse($incomes as $income)
                                <tr>
                                    <td class="padding-3 font-medium text-left">{{ $income->id }}</td>
                                    <td>
                                        {{ $income->amount / 100000 }}

                                        @if($income->currency == 'usd')
                                            USD
                                        @elseif($income->currency == 'eur')
                                            AM
                                        @elseif($income->currency == \App\Account::CURRENCY_BTC_ONE)
                                            {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}
                                        @elseif($income->currency == \App\Account::CURRENCY_BTC_TWO)
                                            {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}
                                        @else
                                            RUB
                                        @endif

                                        @if($income->promocode_id !== null)
                                            +{{ $income->promocode->value }}%
                                        @endif

                                        @if($income->invite_bonus && $income->invite_bonus !== 0)
                                            +{{ $income->invite_bonus }}%
                                        @endif
                                    </td>
                                    <td class="padding-3 font-medium text-left">
                                        @if($income->currency == 'usd')
                                            USD
                                        @elseif($income->currency == 'eur')
                                            AM
                                        @elseif($income->currency == 'eur')
                                            AM
                                        @elseif($income->currency == \App\Account::CURRENCY_BTC_ONE)
                                            {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}
                                        @elseif($income->currency == \App\Account::CURRENCY_BTC_TWO)
                                            {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}
                                        @else
                                            RUB
                                        @endif
                                    </td>
                                    <td class="padding-3 font-medium text-left">
                                        {{ \App\Income::getSystems()[$income->payment_system] }}
                                    </td>
                                    <td class="padding-3 font-medium text-left">{{ $income->created_at->format('d.m.Y') }}</td>
                                    <td class="padding-3 font-medium text-left">
                                        @if($income->status == \App\Income::STATUS_WAITING)
                                            {{__("Pending")}} <a href="{{ route('cabinet.income.requisites', $income) }}">{{__("Get details")}}</a>
                                        @elseif($income->status == \App\Income::STATUS_SUCCESS)
                                            {{__("Processed")}}
                                        @elseif($income->status == \App\Income::STATUS_ERROR)
                                            {{__("Error")}}
                                        @elseif($income->status == \App\Income::STATUS_PAID_BY_USER)
                                            @lang('Оплачено')
                                        @elseif($income->status == \App\Income::STATUS_CANCELED)
                                            {{__("Canceled")}}
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr data-v-4c61e7bd="">
                                    <td colspan="6" class="text-center text-accent padding-3 color-gray font-medium"> Список пуст</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('old-content')
    <main class="page-content">
        <div class="page-content__content  user-page">
            @include('cabinet._navigation')
            <app-invest>
                <div class="user-page__main">
                    <section class="user-section invest-platform-info fadeInUp" data-show-animation="fadeInUp">
                        <div class="invest-platform-info__titles  titles">
                            <h2 class="titles__title">
                                <span class="g-text-light">Пополнение счёта</span>
                            </h2>
                        </div>
                        <form method="post" action="{{ route('cabinet.income.store') }}" class="charge-form ng-untouched ng-invalid ng-dirty">
                            @csrf
                            <ul class="errors-list">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <div class="form__inputs-wrap">
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Выберите валюту</label>
                                    <select name="currency" class="select-dropdown ng-untouched ng-pristine ng-valid">
                                        <option value="{{ \App\Account::CURRENCY_RUB }}">RUB</option>
                                        <option value="{{ \App\Account::CURRENCY_USD }}">USD</option>
                                        <option value="{{ \App\Account::CURRENCY_EUR }}">AM</option>
                                        <option value="{{ \App\Account::CURRENCY_BTC_ONE }}">{{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}</option>
                                        <option value="{{ \App\Account::CURRENCY_BTC_TWO }}">{{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}</option>
                                    </select>
                                </div>
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Введите сумму</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" name="amount" min="1" value="{{ old('amount') }}" type="number">
                                </div>
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Выберите способ оплаты</label>
                                    <select name="payment_system" class="select-dropdown ng-untouched ng-pristine ng-valid">
                                    {{--    <option value="{{ \App\Income::QIWI }}">Qiwi</option>
                                        <option value="{{ \App\Income::PAYEER }}">Payeer</option>
                                        <option value="{{ \App\Income::PERFECT_MONEY }}">Perfect Money</option>
                                        <option value="{{ \App\Income::BITCOIN }}">Bitcoin</option>
                                        <option value="{{ \App\Income::CARD }}">Банковская карта</option>
                                        <option value="{{ \App\Income::ADVACASH }}">Advacash</option>
                                        <option value="{{ \App\Income::YANDEX }}">Яндекс деньги</option>
                                    --}}</select>
                                </div>
                            </div>
                            <div class="form__btns-wrap">
                                <button class="btn profile__btn">Оплатить</button>
                            </div>
                        </form>
                    </section>
                    <div data-show-animation="fadeInUp" style="width: 100%" class="fadeInUp">
                        <section class="user-section  _full-deck-content">
                            <div class="table-responsive">
                                <table class="table-2 d-block">
                                    <tbody>
                                    <tr>
                                        <th>@lang('app.Код')</th>
                                        <th>@lang('app.Сумма')</th>
                                        <th>@lang('app.Валюта')</th>
                                        <th>@lang('app.Система')</th>
                                        <th>@lang('app.Дата')</th>
                                        <th>@lang('app.Статус')</th>
                                    </tr>

                                    @foreach($incomes as $income)
                                        <tr>
                                            <td>{{ $income->id }}</td>
                                            <td>
                                                {{ $income->amount / 100000 }}

                                                @if($income->currency == 'usd')
                                                    <i class="fas fa-dollar-sign"></i>
                                                @elseif($income->currency == 'eur')
                                                    <i class="fas fa-euro-sign"></i>
                                                @elseif($income->currency == \App\Account::CURRENCY_BTC_ONE)
                                                    {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}
                                                @elseif($income->currency == \App\Account::CURRENCY_BTC_TWO)
                                                    {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}
                                                @else
                                                    <i class="fas fa-ruble-sign"></i>
                                                @endif

                                                @if($income->promocode_id !== null)
                                                    +{{ $income->promocode->value }}%
                                                @endif

                                                @if($income->invite_bonus !== 0)
                                                    +{{ $income->invite_bonus }}%
                                                @endif
                                            </td>
                                            <td>
                                                @if($income->currency == 'usd')
                                                    <i class="fas fa-dollar-sign"></i>
                                                @elseif($income->currency == 'eur')
                                                    <i class="fas fa-euro-sign"></i>
                                                @else
                                                    <i class="fas fa-ruble-sign"></i>
                                                @endif
                                            </td>
                                            <td>
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
                                            </td>
                                            <td>{{ $income->created_at->format('d.m.Y') }}</td>
                                            <td>
                                                @if($income->status == \App\Income::STATUS_WAITING)
                                                    {{__("Pending")}} <a href="{{ route('cabinet.income.requisites', $income) }}">{{__("Get details")}}</a>
                                                @elseif($income->status == \App\Income::STATUS_SUCCESS)
                                                    {{__("Processed")}}
                                                @elseif($income->status == \App\Income::STATUS_ERROR)
                                                    {{__("Error")}}
                                                @elseif($income->status == \App\Income::STATUS_CANCELED)
                                                    {{__("Canceled")}}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                    @include('layouts._balance')
                </div>
            </app-invest>
        </div>
    </main>
@endsection

@section('old-content')
    <td width="10px"></td>
    <td align="left" style="vertical-align:top">
        @include('layouts._balance')
        <div class="ac-bals oper mt-3" align="center">
            <form method="post" action="{{ route('cabinet.income.store') }}" name="account/change_pass_frm">
                <fieldset style="border:none;">
                    @foreach($errors->all() as $error)
                        {{ $error }}
                    @endforeach
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
                                <input name="amount" min="0" value="{{ old('amount') }}" step="0.01" type="number" class="form-control">
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
                        <tr>
                            <td align="right" width="50%">
                                <label>
                                    <span class="descr_req">
                                        @lang('app.Система')
                                    </span>
                                </label>
                            </td>
                            <td align="left">
                                <select name="payment_system">
                                    <option value="{{ \App\Income::QIWI }}">Qiwi</option>
                                    <option value="{{ \App\Income::PAYEER }}">Payeer</option>
                                    <option value="{{ \App\Income::PERFECT_MONEY }}">Perfect Money</option>
                                    <option value="{{ \App\Income::BITCOIN }}">Bitcoin</option>
                                    <option value="{{ \App\Income::CARD }}">Банковская карта</option>
                                    <option value="{{ \App\Income::ADVACASH }}">Advacash</option>
                                    <option value="{{ \App\Income::YANDEX }}">Яндекс деньги</option>
                                    <option value="{{ \App\Income::ETH }}">ETH</option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </fieldset>
                @csrf
                <br>
                <input value="Создать" type="submit" class="button-blue">
            </form>
        </div>
        <br>
        <table width="99%">
            <tbody>
            <tr>
                <td style="vertical-align:top">
                    <div class="ac-bals">
                        <table>
                            <tbody>
                            <tr>
                                <th>@lang('app.Код')</th>
                                <th>@lang('app.Сумма')</th>
                                <th>@lang('app.Валюта')</th>
                                <th>@lang('app.Система')</th>
                                <th>@lang('app.Дата')</th>
                                <th>@lang('app.Статус')</th>
                            </tr>

                            @foreach($incomes as $income)
                            <tr>
                                <td>{{ $income->id }}</td>
                                <td>
                                    {{ $income->amount / 100000 }}

                                    @if($income->currency == 'usd')
                                        <i class="fas fa-dollar-sign"></i>
                                    @elseif($income->currency == 'eur')
                                        <i class="fas fa-euro-sign"></i>
                                    @else
                                        <i class="fas fa-ruble-sign"></i>
                                    @endif

                                    @if($income->promocode_id !== null)
                                        +{{ $income->promocode->value }}%
                                    @endif

                                    @if($income->invite_bonus !== 0)
                                        +{{ $income->invite_bonus }}%
                                    @endif
                                </td>
                                <td>
                                    @if($income->currency == 'usd')
                                        <i class="fas fa-dollar-sign"></i>
                                    @elseif($income->currency == 'eur')
                                        <i class="fas fa-euro-sign"></i>
                                    @else
                                        <i class="fas fa-ruble-sign"></i>
                                    @endif
                                </td>
                                <td>
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
                                    @elseif($income->payment_system == \App\Income::ETH)
                                        ETH
                                    @endif
                                </td>
                                <td>{{ $income->created_at->format('d.m.Y') }}</td>
                                <td>
                                    @if($income->status == \App\Income::STATUS_WAITING)
                                        {{__("Pending")}} <a href="{{ route('income.wallet') }}">{{__("Get details")}}</a>
                                    @elseif($income->status == \App\Income::STATUS_SUCCESS)
                                        {{__("Processed")}}
                                    @elseif($income->status == \App\Income::STATUS_ERROR)
                                        {{__("Error")}}
                                    @elseif($income->status == \App\Income::STATUS_CANCELED)
                                        {{__("Canceled")}}
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </td>
@endsection
