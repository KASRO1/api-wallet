@extends('admin.layout')

@section('content')
<div class="container-fluid py-4">

    <div class="row">
        @if(session()->has('password'))
        <div class="col-12">
            <div class="alert alert-success">
                Новый пароль: <b class="badge">{{ session()->get('password') }}</b>
            </div>
        </div>
        @endif
        @if(session()->has('fin_password'))
        <div class="col-12">
            <div class="alert alert-success">
                Новый финансовый пароль: <b class="badge">{{ session()->get('fin_password') }}</b>
            </div>
        </div>
        @endif

        @if(session()->has('success'))
        <div class="col-12">
            <div class="alert alert-success">
                Данные успешно сохранены
            </div>
        </div>
        @endif

        @if($errors->isNotEmpty())
        <div class="col-12">
            <div class="alert alert-danger">
                {{ implode(', ', $errors->all()) }}
            </div>
        </div>
        @endif

        <div class="col-lg-6">
            <form method="POST" action="{{ route('admin.users.update', $user) }}" class="row justify-content-center">
                @csrf
                @method('PATCH')
                <div class="col-lg-12">
                    @include('admin.users._form')
                    <div class="form-group row">
                        <div class="col-12 text-center">
                            <button class="btn btn-success">@lang('Сохранить')</button>
                            <a href="{{ route('admin.users.password', $user) }}" class="btn btn-outline-danger">Сбросить пароль</a>
                            <a class="btn {{$user->is_banned? 'btn-outline-danger': 'btn-danger'}} " href="{{ route('admin.users.ban', $user) }}">{{$user->is_banned? 'Разблокировать' : 'Заблокировать'}}</a>
                            <a href="{{route('admin.users.addproduct', $user)}}" class="btn btn-primary">{{$user->special_product? 'Закрыть доступ к доп пакету' : 'Открыть доступ к доп пакету'}}</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    Счета пользователя
                </div>
                <div class="card-body p-0">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Валюта</th>
                                <th>Баланс депозитный</th>
                                <th>Баланс</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user->accounts as $account)
                            <tr>
                                <td data-label="Валюта">{{ $account->currency }}</td>
                                <td data-label="Баланс депозитный">{{ $account->deposits_sum_balance }}</td>
                                <td data-label="Баланс">
                                    <form method="post" action="{{ route('admin.accounts.update', $account) }}" class="form-inline">
                                        @csrf
                                        <input type="text" name="balance" class="form-control" value="{{ $account->balance / 100000 }}" placeholder="Сумма">

                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            @if($user->is_verified == 1)
            <div class="card my-3">
                <div class="card-header">
                    Ожидает верификации
                </div>
                <div class="card-body p-0">
                    <table class="table mb-0">
                        <tbody>
                            <tr>
                                <td>Первая страница паспорта:</td>
                                <td><a href="{{ asset($user->passport_page_first) }}" target="_blank"><i class="fas fa-eye"></i></a></td>
                            </tr>
                            <tr>
                                <td>Последняя страница паспорта:</td>
                                <td><a href="{{ asset($user->passport_page_second) }}" target="_blank"><i class="fas fa-eye"></i></a></td>
                            </tr>
                            <tr>
                                <td>Фото с паспортом:</td>
                                <td><a href="{{ asset($user->passport_face) }}" target="_blank"><i class="fas fa-eye"></i></a></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">
                                    <a href="{{ route('admin.users.verify', $user) }}" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
                                    <a href="{{ route('admin.users.notVerify', $user) }}" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            @endif
        </div>

        <div class="col-12 col-md-8 mt-3">
            <div class="card">
                <div class="card-header">Депозиты пользователя</div>
                <div class="card-body p-0">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <td>Сумма</td>
                                <td>Валюта</td>
                                <td>Дата начала</td>
                                <td>Дата окончания</td>
                                <td>Процент</td>
                                <td>Реферальный процент</td>
                                <td>Статус</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($user->deposits()->latest('start_time')->get() as $deposit)
                            <tr>
                                <td data-label="Сумма">{{ $deposit->amount / 100000 }}</td>
                                <td data-label="Валюта">
                                    {{--@if($deposit->currency == 'usd')
                                            <i class="fas fa-dollar-sign"></i>
                                        @elseif($deposit->currency == 'eur')
                                            <i class="fas fa-euro-sign"></i>
                                        @else
                                            <i class="fas fa-ruble-sign"></i>
                                        @endif--}}
                                    {{$deposit->currency}}
                                </td>
                                <td data-label="Дата начала">{{ $deposit->start_time->format('d.m.Y') }}</td>
                                <td data-label="Дата окончания">{{ $deposit->end_time->format('d.m.Y') }}</td>
                                <td data-label="Процент">
                                    <form method="post" action="{{ route('admin.deposits.update', $deposit) }}" class="form-inline">
                                        @csrf
                                        <input type="text" name="percent" class="form-control" value="{{ $deposit->percent }}" placeholder="%">

                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
                                    </form>
                                </td>
                                <td data-label="Реферальный процент">
                                    <form method="post" action="{{ route('admin.deposits.update', $deposit) }}" class="form-inline">
                                        @csrf
                                        <input type="text" name="referal_percent" class="form-control" value="{{ $deposit->referal_percent }}" placeholder="%">

                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
                                    </form>
                                </td>
                                <td data-label="Статус">
                                    @if($deposit->status == \App\Deposit::STATUS_OPENED)
                                    <span class="deposit-opened">Открытый</span>
                                    @elseif($deposit->status == \App\Deposit::STATUS_CLOSED)
                                    <span class="deposit-closed">Закрытый</span>
                                    @elseif($deposit->status == \App\Deposit::STATUS_CANCELED)
                                    <span class="deposit-canceled">Отменен</span>
                                    @endif
                                </td>
                                <td data-label="">
                                    @if($deposit->status == \App\Deposit::STATUS_OPENED)
                                    <a href="{{ route('admin.deposits.close', $deposit) }}" class="btn btn-sm btn-danger"><i class="fas fa-door-closed"></i></a>
                                    @endif
                                    @if($deposit->status == \App\Deposit::STATUS_PAYED)
                                    <a href="{{ route('admin.deposits.open', $deposit) }}" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
                                    @endif
                                    <a href="{{ route('admin.deposits.destroy', $deposit) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8">Депозитов нет</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-3">
            <div class="card">
                <div class="card-header">
                    Новый депозит
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.deposits.store', $user) }}" class="row justify-content-center">
                        @csrf
                        <div class="col-lg-12">
                            <x-formGroup name="amount" lable="Сумма">
                                <input type="text" class="form-control col-lg-8 {{ $errors->has('amount') ? 'is-invalid' : '' }}" name="amount" value="{{ old('amount') }}">
                            </x-formGroup>

                            <x-formGroup name="start_time" lable="Дата начала">
                                <input type="date" class="form-control col-lg-8 {{ $errors->has('start_time') ? 'is-invalid' : '' }}" name="start_time" value="{{ old('start_time') }}">
                            </x-formGroup>

                            <x-formGroup name="days" lable="Дни">
                                <input type="text" class="form-control col-lg-8 {{ $errors->has('days') ? 'is-invalid' : '' }}" name="days" value="{{ old('days') }}">
                            </x-formGroup>

                            <x-formGroup name="Пакет" lable="pack">
                                <select class="form-control col-lg-8 {{ $errors->has('pack') ? 'is-invalid' : '' }}" name="pack">
                                    <option value="apy">APY trading bot</option>
                                    <option value="apy-staking">APY staking</option>
                                    <option value="liquidity">Liquidity pools</option>
                                    <option value="defi-staking">DeFi стейкинг</option>
                                    <option value="classic-stacking">Classic Stacking</option>
                                    <option value="ido">IDO investments</option>
                                </select>
                            </x-formGroup>

                            <x-formGroup name="currency" lable="Валюта">
                                <select class="form-control col-lg-8 {{ $errors->has('currency') ? 'is-invalid' : '' }}" name="currency">
                                    <option value="{{ \App\Account::CURRENCY_USDT }}">USDT</option>
                                    <option value="{{\App\Account::CURRENCY_TON}}">TON</option>
                                    <option value="{{\App\Account::CURRENCY_DAI}}">DAI</option>
                                    <option value="{{\App\Account::CURRENCY_BUSD}}">BUSD</option>
                                    <option value="{{\App\Account::CURRENCY_USDC}}">USDC</option>
                                    <option value="{{\App\Account::CURRENCY_TRX}}">TRX</option>
                                    <option value="{{\App\Account::CURRENCY_XRP}}">XRP</option>
                                    <option value="{{\App\Account::CURRENCY_BNB}}">BNB</option>
                                    <option value="{{\App\Account::CURRENCY_DOGE}}">DOGE</option>
                                    <option value="{{\App\Account::CURRENCY_LTC}}">LTC</option>
                                    <option value="{{\App\Account::CURRENCY_BTC}}">BTC</option>
                                    <option value="{{\App\Account::CURRENCY_BCH}}">BCH</option>
                                    <option value="{{\App\Account::CURRENCY_ETH}}">ETH</option>
                                    <option value="{{\App\Account::CURRENCY_DASH}}">DASH</option>
                                    <option value="{{\App\Account::CURRENCY_ATOM}}">ATOM</option>
                                    <option value="{{\App\Account::CURRENCY_BCH}}">BCH</option>
                                    <option value="{{\App\Account::CURRENCY_DOT}}">DOT</option>
                                    <option value="{{\App\Account::CURRENCY_UMEE}}">UMEE</option>
                                    <option value="{{\App\Account::CURRENCY_USD_PM}}">USD</option>

                                </select>
                            </x-formGroup>

                            <div class="form-group row">
                                <div class="col-12 text-center">
                                    <button class="btn btn-success">@lang('Сохранить')</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header">
                    Реквизиты
                </div>
                <div class="card-body p-0">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Система</th>
                                <th>Реквизиты</th>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($user->requisites as $requisite)
                            <tr>
                                @if(isset(\App\Outcome::getSystems()[$requisite->type]))
                                <td data-label="Система">
                                    {{ \App\Outcome::getSystems()[$requisite->type]['name'] }}
                                </td>
                                @else
                                <td data-label="Система">
                                    {{ 'deleted' }}
                                </td>
                                @endif
                                <td data-label="Реквизиты">
                                    <form class="form-inline" action="{{ route('admin.users.requisites', $user) }}" method="POST">
                                        @csrf
                                        <input class="form-control mr-2" type="text" name="requisites" value="{{ $requisite->value }}">
                                        <input type="text" name="system" hidden value="{{$requisite->type}}">
                                        <button class="btn btn-primary" type="submit"><i class="fas fa-save" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                                <td class="text-right">
                                    <a href="{{ route('admin.requisites.delete', $requisite) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8">Запросов нет</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header">
                    Детали оплаты
                </div>
                <div class="card-body p-0">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Валюта</th>
                                <th>Детали оплаты</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user->paymentDetails as $paymentDetail)
                            <tr>
                                <td data-label="Валюта">{{ $paymentDetail->currency }}</td>
                                <td data-label="Баланс">
                                    <form method="post" action="{{ route('admin.payment-details.update', $paymentDetail) }}" class="form-inline">
                                        @csrf
                                        <input type="text" name="value" class="form-control" value="{{ $paymentDetail->value }}" placeholder="">

                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header">
                    Запросы на вывод
                </div>
                <div class="card-body p-0">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Код</th>
                                <th>Сумма</th>
                                {{-- <th>Валюта</th>--}}
                                <th>Система</th>
                                <th>Реквизиты</th>
                                <th>Дата</th>
                                <th>Статус</th>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($user->outcomes as $outcome)
                            <tr>
                                <td data-label="Код">{{ $outcome->id }}</td>
                                <td data-label="Сумма">
                                    {{ $outcome->amount / 100000 }} {{$outcome->currency}}

                                    {{--@if($outcome->currency == 'usd')
                                            <i class="fas fa-dollar-sign"></i>
                                        @elseif($outcome->currency == 'eur')
                                            <i class="fas fa-euro-sign"></i>
                                        @else
                                            <i class="fas fa-ruble-sign"></i>
                                        @endif--}}
                                </td>
                                {{--<td data-label="Валюта">
                                        @if($outcome->currency == 'usd')
                                            <i class="fas fa-dollar-sign"></i>
                                        @elseif($outcome->currency == 'eur')
                                            <i class="fas fa-euro-sign"></i>
                                        @else
                                            <i class="fas fa-ruble-sign"></i>
                                        @endif
                                    </td>--}}
                                @if(isset(\App\Outcome::getSystems()[$outcome->payment_system]['name']))
                                <td data-label="Система">
                                    {{\App\Outcome::getSystems()[$outcome->payment_system]['name']}}
                                </td>
                                @else
                                <td data-label="Система">
                                    deleted
                                </td>
                                @endif
                                <td data-label="Реквизиты">{{ $outcome->wallet }}</td>
                                <td data-label="Дата">{{ $outcome->created_at->format('d.m.Y') }}</td>
                                <td data-label="Статус">
                                    @if($outcome->status == \App\Outcome::STATUS_WAITING)
                                    В ожидании
                                    @elseif($outcome->status == \App\Outcome::STATUS_SUCCESS)
                                    Обработано
                                    @elseif($outcome->status == \App\Outcome::STATUS_ERROR)
                                    Ошибка
                                    @elseif($outcome->status == \App\Outcome::STATUS_CANCELED)
                                    Отменено
                                    @endif
                                </td>
                                <td data-label="" class="text-right">
                                    @if($outcome->status == \App\Outcome::STATUS_WAITING)
                                    <a href="{{ route('admin.outcomes.success', $outcome) }}" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
                                    <a href="{{ route('admin.outcomes.cancel', $outcome) }}" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
                                    <a href="{{ route('admin.outcomes.error', $outcome) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8">Запросов нет</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header">
                    Запросы на пополнение
                </div>
                <div class="card-body p-0">
                    {{-- outcomes--}}
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Код</th>
                                <th>Реквизиты</th>
                                <th>Комментарий</th>
                                <th>Сумма</th>
                                {{-- <th>Валюта</th>--}}
                                <th>Система</th>
                                <th>Дата</th>
                                <th>Статус</th>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($user->incomes as $income)
                            <tr>
                                <td data-label="Код">{{ $income->id }}</td>
                                <td data-label="Реквизиты">
                                    <form action="{{ route('admin.incomes.update', $income) }}" class="mr-2">
                                        <input type="text" name="requisites" class="form-control-sm form-control" value="{{ $income->requisites ?? config('requisites.'. $income->payment_system .'.'. $income->currency) }}">
                                    </form>
                                </td>
                                <td data-label="Комментарий">
                                    <form action="{{ route('admin.incomes.update', $income) }}" class="mr-2">
                                        <input type="text" name="comment" class="form-control-sm form-control" value="{{ $income->comment ?? config('requisitesComments.'. $income->payment_system .'.'. $income->currency) }}">
                                    </form>
                                </td>
                                <td data-label="Сумма" class="d-flex align-items-center">
                                    <form action="{{ route('admin.incomes.update', $income) }}" class="mr-2">
                                        <input type="text" name="amount" class="form-control-sm form-control" value="{{ $income->amount / 100000 }}">
                                    </form>

                                    {{ $income->currency }}

                                    @if($income->promocode_id !== null)
                                    +{{ $income->promocode->value }}% ({{ (($income->amount / 100000) * $income->promocode->value) / 100 }})
                                    @endif

                                    @if($income->invite_bonus !== 0)
                                    +{{ $income->invite_bonus }}% ({{ (($income->amount / 100000) * $income->invite_bonus) / 100 }})
                                    @endif

                                    @if($user->specialPromoIsActive())
                                    <span class="badge badge-success ml-2">
                                        +{{ $user->special_promo_percent }}% ({{ (($income->amount / 100000) * $user->special_promo_percent) / 100 }})
                                    </span>
                                    @endif
                                </td>
                                {{--<td data-label="Валюта">
                                        @if($income->currency == 'usd')
                                            <i class="fas fa-dollar-sign"></i>
                                        @elseif($income->currency == 'eur')
                                            <i class="fas fa-euro-sign"></i>
                                        @else
                                            <i class="fas fa-ruble-sign"></i>
                                        @endif
                                    </td>--}}
                                <td data-label="Система">
                                    {{$income->currency}}
                                    {{-- {{ isset(\App\Income::getSystems()[$income->payment_system]) ? \App\Income::getSystems()[$income->payment_system]['name'] :'deleted' }}--}}
                                </td>
                                <td data-label="Дата">{{ $income->created_at->format('d.m.Y') }}</td>
                                <td data-label="Статус">
                                    @if($income->status == \App\Income::STATUS_WAITING)
                                    В ожидании
                                    @elseif($income->status == \App\Income::STATUS_SUCCESS)
                                    Обработано
                                    @elseif($income->status == \App\Income::STATUS_ERROR)
                                    Ошибка
                                    @elseif($income->status == \App\Income::STATUS_PAID_BY_USER)
                                    Оплачено
                                    @elseif($income->status == \App\Income::STATUS_CANCELED)
                                    Отменено
                                    @endif
                                </td>
                                <td data-label="" class="text-right">
                                    @if(in_array($income->status, [\App\Income::STATUS_WAITING, \App\Income::STATUS_PAID_BY_USER]))
                                    <a href="{{ route('admin.incomes.success', $income) }}" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
                                    <a href="{{ route('admin.incomes.cancel', $income) }}" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
                                    <a href="{{ route('admin.incomes.error', $income) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8">Запросов нет</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header">
                    Реферальная программа
                </div>
                <div class="card-body p-0">
                    {{-- outcomes--}}
                    <table class="table m-0">
                        <tbody>
                            <tr>
                                <th colspan="1">Первый уровень</th>
                                <th colspan="2">
                                    <form method="POST" class="form-inline" action="{{ route('admin.users.percent', $user) }}">
                                        @csrf
                                        <input class="form-control mr-2" type="text" name="percent" value="{{isset($percents->ref1)?$percents->ref1:""}}">
                                        <input type="number" name="refLevel" value="1" hidden>
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save" aria-hidden="true"></i></button>
                                    </form>
                                </th>
                            </tr>
                            @forelse($referals[0] as $item)
                            <tr>
                                <td><a href="{{ route('admin.users.edit', $item) }}">{{ $item->email }}</a></td>
                                <td>{{ $item->created_at->format('d.m.Y') }}</td>
                                <td>{{ $item->is_depositet ? 'Активен' : 'Не активен' }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">Приглашений нет</td>
                            </tr>
                            @endforelse
                            <tr>
                                <th colspan="1">Второй уровень</th>
                                <th colspan="2">
                                    <form method="POST" class="form-inline" action="{{ route('admin.users.percent', $user) }}">
                                        @csrf
                                        <input class="form-control mr-2" type="text" name="percent" value="{{isset($percents->ref2)? $percents->ref2:""}}">
                                        <input type="number" name="refLevel" value="2" hidden>
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save" aria-hidden="true"></i></button>
                                    </form>
                                </th>
                            </tr>
                            @forelse($referals[1] as $item)
                            <tr>
                                <td><a href="{{ route('admin.users.edit', $item) }}">{{ $item->email }}</a></td>
                                <td>{{ $item->created_at->format('d.m.Y') }}</td>
                                <td>{{ $item->is_depositet ? 'Активен' : 'Не активен' }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">Приглашений нет</td>
                            </tr>
                            @endforelse
                            <tr>
                                <th colspan="1">Третий уровень</th>
                                <th colspan="2">
                                    <form class="form-inline" method="POST" action="{{ route('admin.users.percent', $user) }}">
                                        @csrf
                                        <input class="form-control mr-2" type="text" value="{{isset($percents->ref3)?$percents->ref3:""}}" name="percent">
                                        <input type="number" name="refLevel" value="3" hidden>
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save" aria-hidden="true"></i></button>
                                    </form>
                                </th>
                            </tr>
                            @forelse($referals[2] as $item)
                            <tr>
                                <td><a href="{{ route('admin.users.edit', $item) }}">{{ $item->email }}</a></td>
                                <td>{{ $item->created_at->format('d.m.Y') }}</td>
                                <td>{{ $item->is_depositet ? 'Активен' : 'Не активен' }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">Приглашений нет</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Оповещения пользователя
                </div>

                <div class="card-body p-0">
                    <table class="table table-hover m-0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Text</th>
                                <th>Прочитал?</th>
                                <th>Время</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user->notifications as $notification)
                            <tr>
                                <td data-label="Title">{{ $notification->title }}</td>
                                <td data-label="Text">{!! $notification->text !!}</td>
                                <td data-label="Прочитал?">{{ $notification->is_read ? '+'  : '-'}}</td>
                                <td data-label="Время">{{ $notification->created_at->format('d.m.Y H:i:s') }}</td>
                                <td data-label="">
                                    <a href="{{ route('notification.destroy', $notification) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <hr>

                    <form method="POST" action="{{ route('notification.store', $user) }}" class="row m-3">
                        @csrf
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Название оповещения" name="title">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="text" rows="5" class="form-control" placeholder="Текст оповещения (HTML доступен)"></textarea>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection