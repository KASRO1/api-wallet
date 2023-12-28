@extends('layouts.cabinet')

@section('title', __("Transactions"))
@section('content')
    @include('cabinet.new._header', ['user'=>$user])

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section__heading py-4">{{__("Your operations")}}</h1>
            </div>
{{--            <div class="col-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Currency</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Transaction number</th>
                        <th scope="col">Transaction</th>
                        <th scope="col">Data</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($incomes as $income)
                        <tr>
                            <th scope="row">
                            </th>
                            <th>
                                {{ $income->amount / 100000 }}

                                @if($income->currency == 'usd')
                                    USD
                                @elseif($income->currency == 'eur')
                                    EUR
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
                            </th>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>--}}
{{--            <div class="col-12">
                <a href="{{route('cabinet.transfer')}}" class="btn btn-primary-gr">Transfer</a>
            </div>--}}
            <div class="col-12">
                <main class="flex flex-column flex-grow trans-0-3">
                    <div data-v-4cd0b858="" class="shadowed border-rounded-3 bg-white margin-top-2 margin-top-6--md margin-top-0--lg">
                        <div data-v-4cd0b858="">
                            <div class="shadowed border-rounded-3 bg-white margin-top-0 margin-top-6--md margin-top-0--lg">
                                <ul data-v-4aba4d7a="" class="margin-y-0 margin-bottom-4 padding-x-3 no-list flex--md border-bottom-gray relative">
                                    <li data-v-4aba4d7a="" class="margin-bottom-2 margin-bottom-0--md margin-right-4--md">
                                        <a href="{{ route('cabinet.deals', ['mode' => 'incomes']) }}" data-v-4aba4d7a="" class="tab flex items-center text-accent font-medium relative @if($mode == 'incomes') router-link-exact-active router-link-active tab--active @endif" aria-current="page">
                                            <svg data-v-481c1e7a="" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="@if($mode == 'incomes') fill-primary @else fill-gray @endif height-1-25 margin-right-2 flex-no-shrink"><path data-v-481c1e7a="" d="M13 0l5 5v14.008a.993.993 0 01-.993.992H.993A1 1 0 010 19.008V.992C0 .444.445 0 .993 0H13zm-3 10V6H8v4H5l4 4 4-4h-3z" fill="#9195A8"></path></svg>
                                            {{__("Refill")}}
                                        </a>
                                    </li>
                                    <li data-v-4aba4d7a="" class="margin-bottom-2 margin-bottom-0--md margin-right-4--md">
                                        <a href="{{ route('cabinet.deals', ['mode' => 'outcomes']) }}" data-v-4aba4d7a="" class="tab flex items-center text-accent font-medium relative @if($mode == 'outcomes') router-link-exact-active router-link-active tab--active @endif" aria-current="page">
                                            <svg data-v-481c1e7a="" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="@if($mode == 'outcomes') fill-primary @else fill-gray @endif height-1-25 margin-right-2 flex-no-shrink"><path data-v-481c1e7a="" d="M13 0l5 5v14.008a.993.993 0 01-.993.992H.993A1 1 0 010 19.008V.992C0 .444.445 0 .993 0H13zm-3 10h3L9 6l-4 4h3v4h2v-4z" fill="#9195A8"></path></svg>
                                            {{__("Withdrawal")}}
                                        </a>
                                    </li>
                                    <li data-v-4aba4d7a="" class="margin-bottom-2 margin-bottom-0--md margin-right-4--md">
                                        <a href="{{ route('cabinet.deals', ['mode' => 'conversions']) }}" data-v-4aba4d7a="" class="tab flex items-center text-accent font-medium relative @if($mode == 'conversions') router-link-exact-active router-link-active tab--active @endif" aria-current="page">
                                            <svg data-v-481c1e7a="" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="@if($mode == 'conversions') fill-primary @else fill-gray @endif height-1-25 margin-right-2 flex-no-shrink"><path data-v-481c1e7a="" d="M1 0h18a1 1 0 011 1v16a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm12 4v2H9v2h4v2l3.5-3L13 4zM7 14v-2h4v-2H7V8l-3.5 3L7 14z" fill="#9195A8"></path></svg>
                                            {{__("Swap")}}
                                        </a>
                                    </li>
                                    <li data-v-4aba4d7a="" class="margin-bottom-2 margin-bottom-0--md margin-right-4--md">
                                        <a href="{{ route('cabinet.deals', ['mode' => 'claims']) }}" data-v-4aba4d7a="" class="tab flex items-center text-accent font-medium relative @if($mode == 'claims') router-link-exact-active router-link-active tab--active @endif" aria-current="page">
                                            <svg data-v-481c1e7a="" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="@if($mode == 'claims') fill-primary @else fill-gray @endif height-1-25 margin-right-2 flex-no-shrink"><path data-v-481c1e7a="" d="M1 0h18a1 1 0 011 1v16a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm12 4v2H9v2h4v2l3.5-3L13 4zM7 14v-2h4v-2H7V8l-3.5 3L7 14z" fill="#9195A8"></path></svg>
                                            {{__("Claim")}}
                                        </a>
                                    </li>
                                </ul>
                                @if($mode === 'incomes')
                                    <table data-v-4c61e7bd="" class="table width-full table--no-hover">
                                        <thead data-v-4c61e7bd="">
                                        <tr data-v-4c61e7bd="" class="font-sm color-gray bg-litest-gray text-nowrap">
                                            <th class="padding-3 font-medium text-left">{{__("th_code")}}</th>
                                            <th class="padding-3 font-medium text-left">{{__("th_amount")}}</th>
                                            <th class="padding-3 font-medium text-left">{{__("th_currency")}}</th>
                                            <th class="padding-3 font-medium text-left">{{__("th_date")}}</th>
                                            <th class="padding-3 font-medium text-left">{{__("th_status")}}</th>
                                        </tr>
                                        </thead>
                                        <tbody data-v-4c61e7bd=""><!---->
                                        @forelse($incomes as $income)

                                            <tr>
                                                <td class="padding-3 font-medium text-left">{{ $income->id }}</td>
                                                <td>
                                                    {{ $income->amount / 100000 }}

                                                    {{$income->currency}}
                                                    @if($income->promocode_id != null)
                                                        +{{\App\Promocode::getPromoPercent($income->promocode_id)['value']}}%
                                                        ({{$income->amount/100*\App\Promocode::getPromoPercent($income->promocode_id)['value']/100000}} {{$income->currency}})
                                                    @endif
                                                    {{--@if($income->currency == 'usd')
                                                        USD
                                                    @elseif($income->currency == 'eur')
                                                        EUR
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
                                                    @endif--}}
                                                </td>
                                                {{--<td class="padding-3 font-medium text-left">
                                                    @if($income->currency == 'usd')
                                                        USD
                                                    @elseif($income->currency == 'eur')
                                                        EUR
                                                    @elseif($income->currency == 'eur')
                                                        EUR
                                                    @elseif($income->currency == \App\Account::CURRENCY_BTC_ONE)
                                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}
                                                    @elseif($income->currency == \App\Account::CURRENCY_BTC_TWO)
                                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}
                                                    @else
                                                        RUB
                                                    @endif
                                                </td>--}}
                                                <td class="padding-3 font-medium text-left">
                                                    {{$income->currency}}
                                                    {{--@if($income->payment_system == \App\Income::QIWI)
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
                                                    @endif--}}
                                                </td>
                                                <td class="padding-3 font-medium text-left">{{ $income->created_at->format('d.m.Y') }}</td>
                                                <td class="padding-3 font-medium text-left">
                                                    @if($income->status == \App\Income::STATUS_WAITING)
                                                        {{__("Pending")}} <a href="{{ route('cabinet.income.show', ['id'=>$income->id]) }}">{{__("Get details")}}</a>
                                                    @elseif($income->status == \App\Income::STATUS_SUCCESS)
                                                        {{__("Processed")}}
                                                    @elseif($income->status == \App\Income::STATUS_ERROR)
                                                        {{__("Error")}}
                                                    @elseif($income->status == \App\Income::STATUS_PAID_BY_USER)
                                                        {{__("Payed")}}
                                                    @elseif($income->status == \App\Income::STATUS_CANCELED)
                                                        {{__("Canceled")}}
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr data-v-4c61e7bd="">
                                                <td colspan="6" class="text-center text-accent padding-3 color-gray font-medium"> {{__("The list is empty")}}</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                @endif
                                @if($mode == 'outcomes')
                                    <table data-v-4c61e7bd="" class="table width-full table--no-hover">
                                        <thead data-v-4c61e7bd="">
                                        <tr data-v-4c61e7bd="" class="font-sm color-gray bg-litest-gray text-nowrap">
                                            <th class="padding-3 font-medium text-left">{{__("th_code")}}</th>
                                            <th class="padding-3 font-medium text-left">{{__("th_amount")}}</th>
                                            <th class="padding-3 font-medium text-left">{{__("th_currency")}}</th>
                                            <th class="padding-3 font-medium text-left">{{__("th_system")}}</th>
                                            <th class="padding-3 font-medium text-left">{{__("th_date")}}</th>
                                            <th class="padding-3 font-medium text-left">{{__("th_status")}}</th>
                                        </tr>
                                        </thead>
                                        <tbody data-v-4c61e7bd=""><!---->
                                        @forelse($outcomes as $outcome)
                                            <tr>
                                                <td class="padding-3 font-medium text-left">{{ $outcome->id }}</td>
                                                <td class="padding-3 font-medium text-left">
                                                    {{ $outcome->amount / 100000 }} {{$outcome->currency}}

                                                    {{--@if($outcome->currency == 'usd')
                                                        USD
                                                    @elseif($outcome->currency == 'eur')
                                                        EUR
                                                    @elseif($outcome->currency == \App\Account::CURRENCY_BTC_ONE)
                                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}
                                                    @elseif($outcome->currency == \App\Account::CURRENCY_BTC_TWO)
                                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}
                                                    @else
                                                        RUB
                                                    @endif--}}
                                                </td>
                                                <td class="padding-3 font-medium text-left">
                                                    {{$outcome->currency}}
                                                    {{--@if($outcome->currency == 'usd')
                                                        USD
                                                    @elseif($outcome->currency == 'eur')
                                                        EUR
                                                    @elseif($outcome->currency == \App\Account::CURRENCY_BTC_ONE)
                                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}
                                                    @elseif($outcome->currency == \App\Account::CURRENCY_BTC_TWO)
                                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}
                                                    @else
                                                        RUB
                                                    @endif--}}
                                                </td>
                                                <td class="padding-3 font-medium text-left">
                                                    @if(isset(\App\Outcome::getSystems()[$outcome->payment_system]['name']))
                                                        {{\App\Outcome::getSystems()[$outcome->payment_system]['name']}}
                                                    @endif
                                                </td>
                                                <td class="padding-3 font-medium text-left">{{ $outcome->created_at->format('d.m.Y') }}</td>
                                                <td class="padding-3 font-medium text-left">
                                                    @if($outcome->status == \App\Outcome::STATUS_WAITING)
                                                        {{__("Pending")}}
                                                    @elseif($outcome->status == \App\Outcome::STATUS_SUCCESS)
                                                        {{__("Processed")}}
                                                    @elseif($outcome->status == \App\Outcome::STATUS_ERROR)
                                                        {{__("Error")}}
                                                    @elseif($outcome->status == \App\Outcome::STATUS_CANCELED)
                                                        {{__("Canceled")}}
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr data-v-4c61e7bd="">
                                                <td colspan="6" class="text-center text-accent padding-3 color-gray font-medium"> {{__("The list is empty")}}</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                @endif
                                @if($mode == 'conversions')
                                    <table data-v-4c61e7bd="" class="table width-full table--no-hover">
                                        <thead data-v-4c61e7bd="">
                                        <tr data-v-4c61e7bd="" class="font-sm color-gray bg-litest-gray text-nowrap">
                                            <th class="padding-3 font-medium text-left">{{__("th_amount_from")}}</th>
                                            <th class="padding-3 font-medium text-left">{{__("th_currency_from")}}</th>
                                            <th class="padding-3 font-medium text-left">{{__("th_amount_in")}}</th>
                                            <th class="padding-3 font-medium text-left">{{__("th_currency_in")}}</th>
                                            <th class="padding-3 font-medium text-left">{{__("th_date")}}</th>
                                        </tr>
                                        </thead>
                                        <tbody data-v-4c61e7bd=""><!---->
                                        @forelse($conversions as $conversion)
                                            <tr>
                                                <td class="padding-3 font-medium text-left">
                                                    {{ $conversion->amount / 100000 }}
                                                    {{$conversion->currency_one}}
                                                    {{--@if($conversion->currency_one == 'usd')
                                                        USD
                                                    @elseif($conversion->currency_one == 'eur')
                                                        EUR
                                                    @elseif($conversion->currency_one == \App\Account::CURRENCY_BTC_ONE)
                                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}
                                                    @elseif($conversion->currency_one == \App\Account::CURRENCY_BTC_TWO)
                                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}
                                                    @else
                                                        RUB
                                                    @endif--}}
                                                </td>
                                                <td class="padding-3 font-medium text-left">
                                                    {{$conversion->currency_one}}
                                                    {{--@if($conversion->currency_one == 'usd')
                                                        USD
                                                    @elseif($conversion->currency_one == 'eur')
                                                        EUR
                                                    @elseif($conversion->currency_one == \App\Account::CURRENCY_BTC_ONE)
                                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}
                                                    @elseif($conversion->currency_one == \App\Account::CURRENCY_BTC_TWO)
                                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}
                                                    @else
                                                        RUB
                                                    @endif--}}
                                                </td>
                                                <td class="padding-3 font-medium text-left">
                                                    {{ $conversion->final_amount / 100000 }}
                                                    {{$conversion->currency_two}}
                                                    {{--@if($conversion->currency_two == 'usd')
                                                        USD
                                                    @elseif($conversion->currency_two == 'eur')
                                                        EUR
                                                    @elseif($conversion->currency_two == \App\Account::CURRENCY_BTC_ONE)
                                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}
                                                    @elseif($conversion->currency_two == \App\Account::CURRENCY_BTC_TWO)
                                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}
                                                    @else
                                                        RUB
                                                    @endif--}}
                                                </td>
                                                <td class="padding-3 font-medium text-left">
                                                    {{$conversion->currency_two}}
                                                    {{--@if($conversion->currency_two == 'usd')
                                                        USD
                                                    @elseif($conversion->currency_two == 'eur')
                                                        EUR
                                                    @elseif($conversion->currency_two == \App\Account::CURRENCY_BTC_ONE)
                                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}
                                                    @elseif($conversion->currency_two == \App\Account::CURRENCY_BTC_TWO)
                                                        {{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}
                                                    @else
                                                        RUB
                                                    @endif--}}
                                                </td>
                                                <td class="padding-3 font-medium text-left">{{ $conversion->created_at->format('d.m.Y') }}</td>
                                            </tr>
                                        @empty
                                            <tr data-v-4c61e7bd="">
                                                <td colspan="6" class="text-center text-accent padding-3 color-gray font-medium"> {{__("The list is empty")}}</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                @endif
                                @if($mode == 'claims')
                                    <table data-v-4c61e7bd="" class="table width-full table--no-hover">
                                        <thead data-v-4c61e7bd="">
                                        <tr data-v-4c61e7bd="" class="font-sm color-gray bg-litest-gray text-nowrap">
                                            <th class="padding-3 font-medium text-left">{{__("th_deposit_id")}}</th>
                                            <th class="padding-3 font-medium text-left">{{__("th_deposit_name")}}</th>
                                            <th class="padding-3 font-medium text-left">{{__("th_amount")}}</th>
                                            <th class="padding-3 font-medium text-left">{{__("th_currency")}}</th>
                                            <th class="padding-3 font-medium text-left">{{__("th_date")}}</th>
                                        </tr>
                                        </thead>
                                        <tbody data-v-4c61e7bd=""><!---->
                                        @forelse($claims as $claim)
                                            <tr>
                                                <td class="padding-3 font-medium text-left">
                                                    {{ $claim->deposit_id }}
                                                </td>
                                                <td class="padding-3 font-medium text-left">
                                                    {{ $claim->deposit_name }}
                                                </td>
                                                <td class="padding-3 font-medium text-left">
                                                    {{ $claim->amount / 100000 }}
                                                    {{ $claim->currency }}
                                                </td>
                                                <td class="padding-3 font-medium text-left">
                                                    {{ $claim->currency }}
                                                </td>
                                                <td class="padding-3 font-medium text-left">{{ $claim->created_at->format('d.m.Y') }}</td>
                                            </tr>
                                        @empty
                                            <tr data-v-4c61e7bd="">
                                                <td colspan="6" class="text-center text-accent padding-3 color-gray font-medium"> {{__("The list is empty")}}</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div><!----><!----><!----></div>
                </main>
            </div>
        </div>
    </div>
@endsection
