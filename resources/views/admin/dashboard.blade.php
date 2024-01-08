@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-4 py-3">
            <form method="post" action="{{ route('admin.update-apyrate') }}" class="form-inline">
                @csrf
                <div class="form-group" style="display: flex; column-gap: 10px; align-items: center">
                    <label for="apy_rate">APY курс (APY => USDT) : </label>
                    <div style="display: flex; column-gap: 3px; align-items: center">
                        <input type="text" name="apy_rate" class="form-control" value="{{ $apy_rate }}" placeholder="">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-4 py-3">
            <form method="post" action="{{ route('admin.update-preferencerate') }}" class="form-inline">
                @csrf
                <div class="form-group" style="display: flex; column-gap: 10px; align-items: center">
                    <label class="control-label">Токен предпочтения : </label>
                    <div style="display: flex; column-gap: 3px; align-items: center">
                        <select class="form-control {{ $errors->has('currency') ? 'is-invalid' : '' }}" name="preference_currency">
                            <option value="NONE">NONE</option>
                            <option value="{{\App\Account::CURRENCY_TON}}" @if ($preference_currency == \App\Account::CURRENCY_TON) selected @endif>TON</option>
                            <option value="{{\App\Account::CURRENCY_DAI}}" @if ($preference_currency == \App\Account::CURRENCY_DAI) selected @endif>DAI</option>
                            <option value="{{\App\Account::CURRENCY_TRX}}" @if ($preference_currency == \App\Account::CURRENCY_TRX) selected @endif>TRX</option>
                            <option value="{{\App\Account::CURRENCY_XRP}}" @if ($preference_currency == \App\Account::CURRENCY_XRP) selected @endif>XRP</option>
                            <option value="{{\App\Account::CURRENCY_BNB}}" @if ($preference_currency == \App\Account::CURRENCY_BNB) selected @endif>BNB</option>
                            <option value="{{\App\Account::CURRENCY_DOGE}}" @if ($preference_currency == \App\Account::CURRENCY_DOGE) selected @endif>DOGE</option>
                            <option value="{{\App\Account::CURRENCY_LTC}}" @if ($preference_currency == \App\Account::CURRENCY_LTC) selected @endif>LTC</option>
                            <option value="{{\App\Account::CURRENCY_BTC}}" @if ($preference_currency == \App\Account::CURRENCY_BTC) selected @endif>BTC</option>
                            <option value="{{\App\Account::CURRENCY_BCH}}" @if ($preference_currency == \App\Account::CURRENCY_BCH) selected @endif>BCH</option>
                            <option value="{{\App\Account::CURRENCY_ETH}}" @if ($preference_currency == \App\Account::CURRENCY_ETH) selected @endif>ETH</option>
                            <option value="{{\App\Account::CURRENCY_DASH}}" @if ($preference_currency == \App\Account::CURRENCY_DASH) selected @endif>DASH</option>
                            <option value="{{\App\Account::CURRENCY_ATOM}}" @if ($preference_currency == \App\Account::CURRENCY_ATOM) selected @endif>ATOM</option>
                            <option value="{{\App\Account::CURRENCY_BCH}}" @if ($preference_currency == \App\Account::CURRENCY_BCH) selected @endif>BCH</option>
                            <option value="{{\App\Account::CURRENCY_DOT}}" @if ($preference_currency == \App\Account::CURRENCY_DOT) selected @endif>DOT</option>
                            <option value="{{\App\Account::CURRENCY_UMEE}}" @if ($preference_currency == \App\Account::CURRENCY_UMEE) selected @endif>UMEE</option>
                            <option value="{{\App\Account::CURRENCY_AVAX}}" @if ($preference_currency == \App\Account::CURRENCY_AVAX) selected @endif>AVAX</option>
                            <option value="{{\App\Account::CURRENCY_KAVA}}" @if ($preference_currency == \App\Account::CURRENCY_KAVA) selected @endif>KAVA</option>
                            <option value="{{\App\Account::CURRENCY_UNI}}" @if ($preference_currency == \App\Account::CURRENCY_UNI) selected @endif>UNI</option>
                            <option value="{{\App\Account::CURRENCY_LINK}}" @if ($preference_currency == \App\Account::CURRENCY_LINK) selected @endif>LINK</option>
                            <option value="{{\App\Account::CURRENCY_GRT}}" @if ($preference_currency == \App\Account::CURRENCY_GRT) selected @endif>GRT</option>
                            <option value="{{\App\Account::CURRENCY_DYDX}}" @if ($preference_currency == \App\Account::CURRENCY_DYDX) selected @endif>DYDX</option>
                            <option value="{{\App\Account::CURRENCY_DODO}}" @if ($preference_currency == \App\Account::CURRENCY_DODO) selected @endif>DODO</option>
                            <option value="{{\App\Account::CURRENCY_COMP}}" @if ($preference_currency == \App\Account::CURRENCY_COMP) selected @endif>COMP</option>
                            <option value="{{\App\Account::CURRENCY_DAO}}" @if ($preference_currency == \App\Account::CURRENCY_DAO) selected @endif>DAO</option>
                            <option value="{{\App\Account::CURRENCY_AXL}}" @if ($preference_currency == \App\Account::CURRENCY_AXL) selected @endif>AXL</option>
                        </select>
                        <input type="text" name="preference_currency_rate" class="form-control" value="{{ $preference_currency_rate }}" placeholder="Ставка">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
                    </div>
                </div>
            </form>

        </div>
        <div class="col-4 py-3">
        <button class="form-control btn btn-primary">Сгенерировать кошельки</button>


        </div>
    </div>
    <div class="col-12">
        <table class="table table-hovered">
            <thead>
                <tr>
                    <th><b>Пользователь</b> <span class="badge badge-info">Ожидают верификацию</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach($forVerifications as $user)
                <tr>
                    <td data-label="Ожидают верификацию">
                        <a href="{{ route('admin.users.edit', $user) }}">{{ $user->name }}</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-12">
        <table class="table table-hovered">
            <thead>
                <tr>
                    <th><b>Пользователь</b> <span class="badge badge-info">Ожидание вывод средств</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach($forWithdrawals as $item)
                <tr>
                    <td data-label="Ожидают верификацию">
                        <a href="{{ route('admin.users.edit', $item->user) }}">{{ $item->user->name }}</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="col-12 mb-4">
        <table class="table table-hovered">
            <thead>
                <tr>
                    <th>Пакет</th>
                    <th>Пользователь</th>
                    <th>Сумма</th>
                    <th>Статус</th>
                </tr>
            </thead>
            <tbody>
                @foreach($deposits as $dep)
                <tr>
                    {{-- {{$dep}}--}}
                    <td data-label="Код">{{ $dep->name }}</td>
                    <td data-label="Пользователь">
                        <a href="{{ route('admin.users.edit', $dep->user) }}">{{ $dep->user->name }}</a>
                    </td>
                    <td data-label="Сумма">
                        {{ $dep->amount / 100000 }}
                        {{ $dep->currency }}
                    </td>
                    <td data-label="Статус">
                        @if($dep->status == \App\Deposit::STATUS_NOT_PAYED)
                        В ожидании оплаты
                        @elseif($dep->status == \App\Deposit::STATUS_PAYED)
                        Оплачено
                        @elseif($dep->status == \App\Deposit::STATUS_CANCELED)
                        Отменено
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-12">
        <table class="table table-hovered">
            <thead>
                <tr>
                    <th>Код</th>
                    <th>Пользователь</th>
                    <th>Сумма</th>
                    <th>Статус</th>
                </tr>
            </thead>
            <tbody>
                @foreach($incomes as $income)
                <tr>
                    <td data-label="Код">{{ $income->id }}</td>
                    <td data-label="Пользователь">
                        <a href="{{ route('admin.users.edit', $income->user) }}">{{ $income->user->name }}</a>
                    </td>
                    <td data-label="Сумма">
                        {{ $income->amount / 100000 }}
                        {{ $income->currency }}
                    </td>
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-12">
        <hr>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Дата</th>
                <th>Значение</th>
                <th>Пользователь</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tracking as $item)
            <tr>
                <td>{{ $item->datetime }}</td>
                <td>{{ $item->value }}</td>
                <td>@if($item->user_id) <a href="{{ route('admin.users.edit', $item->user_id) }}">#{{ $item->user_id }}</a> @else - @endif</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Записей нет</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection