<x-formGroup name="name" lable="Name">
    <input type="text" class="form-control col-lg-8 {{ $errors->has('name') ? 'is-invalid' : '' }}"
           name="name"
           value="{{ old('name') ?? ($user->name ?? '') }}">
</x-formGroup>

<x-formGroup name="email">
    <input type="text" class="form-control col-lg-8 {{ $errors->has('email') ? 'is-invalid' : '' }}"
           name="email"
           value="{{ old('email') ?? ($user->email ?? '') }}">
</x-formGroup>

<x-formGroup name="country" label="Страна">
    <input type="text" class="form-control col-lg-8 {{ $errors->has('country') ? 'is-invalid' : '' }}"
           name="country" readonly
           value="{{ old('country') ?? ($user->country ?? '') }}">
</x-formGroup>

<x-formGroup name="referal_id" label="Пригласил">
    <select class="form-control col-lg-8 {{ $errors->has('referal_id') ? 'is-invalid' : '' }}" name="referal_id">
        <option value="">Никто</option>
        @foreach($users as $item)
            <option @if($user->referal_id == $item->id) selected @endif value="{{ $item->id }}">{{ $item->id }} - {{ $item->email }}</option>
        @endforeach
    </select>
</x-formGroup>

<x-formGroup name="promocode_id" label="Промокод">
    <select class="form-control col-lg-8 {{ $errors->has('promocode_id') ? 'is-invalid' : '' }}"
           name="promocode_id">
        <option value="">Без промокода</option>
        @foreach($promocodes as $promocode)
            <option @if($promocode->id == $user->promocode_id) selected @endif value="{{ $promocode->id }}">{{ $promocode->id }} - {{ $promocode->name }}</option>
        @endforeach
    </select>
</x-formGroup>

<x-formGroup name="special_promo_date" label="Перс. акция до">
    <input type="date" class="form-control col-lg-8 {{ $errors->has('special_promo_date') ? 'is-invalid' : '' }}"
           name="special_promo_date"
           value="{{ old('special_promo_date') ?? (optional($user->special_promo_date)->format('Y-m-d') ?? '') }}">
    @if($user->specialPromoIsActive())
    <span class="valid-feedback d-block offset-4">
        Активно
    </span>
    @endif
</x-formGroup>

<x-formGroup name="special_promo_percent" label="Специальный процент">
    <input type="text" class="form-control col-lg-8 {{ $errors->has('special_promo_percent') ? 'is-invalid' : '' }}"
           name="special_promo_percent"
           value="{{ old('special_promo_percent') ?? ($user->special_promo_percent ?? '') }}">
</x-formGroup>

<x-formGroup name="special_ido_amount" label="Специальная сумма IDO">
    <input type="text" class="form-control col-lg-8 {{ $errors->has('special_ido_amount') ? 'is-invalid' : '' }}"
           name="special_ido_amount"
           value="{{ old('special_ido_amount') ?? ($user->special_ido_amount ?? '') }}">
</x-formGroup>

<x-formGroup name="password" label="Пароль">
    <input type="password" class="form-control col-lg-8 {{ $errors->has('password') ? 'is-invalid' : '' }}"
           name="password"
           value="">
</x-formGroup>


<x-formGroup name="text" label="Инвайт Код">
    <input type="text" class="form-control col-lg-8 {{ $errors->has('email') ? 'is-invalid' : '' }}"
           name="code" readonly
           value="{{ old('code') ?? ($user->code ?? '') }}">
</x-formGroup>

<x-formGroup name="text" label="Последний IP">
    <input type="text" class="form-control col-lg-8 {{ $errors->has('last_login_ip') ? 'is-invalid' : '' }}"
           name="last_login_ip" readonly
           value="{{ old('last_login_ip') ?? ($user->last_login_ip ?? '') }}">
</x-formGroup>

<x-formGroup name="text" label="Последний вход">
    <input type="text" class="form-control col-lg-8 {{ $errors->has('last_login_time') ? 'is-invalid' : '' }}"
           name="last_login_time" readonly
           value="{{ old('last_login_time') ?? ($user->last_login_time ?? '') }}">
</x-formGroup>
