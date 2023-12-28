<x-formGroup name="name" label="Название">
    <input type="text" class="form-control col-lg-8 {{ $errors->has('name') ? 'is-invalid' : '' }}"
           name="name"
           value="{{ old('name') ?? ($promocode->name ?? '') }}">
</x-formGroup>

<x-formGroup name="code" label="Код">
    <input type="text" class="form-control col-lg-8 {{ $errors->has('code') ? 'is-invalid' : '' }}"
           name="code"
           value="{{ old('code') ?? ($promocode->code ?? '') }}">
</x-formGroup>

<x-formGroup name="value" label="Процент">
    <input type="text" class="form-control col-lg-8 {{ $errors->has('value') ? 'is-invalid' : '' }}"
           name="value"
           value="{{ old('value') ?? ($promocode->value ?? '') }}">
</x-formGroup>

