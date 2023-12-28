<div>
    <div class="row">
        <span data-v-e4d5b16a="" class="color-gray font-sm font-medium">Выберите валюту</span>
        <select name="currency" wire:model="currency" class="select-dropdown ng-untouched ng-pristine ng-valid">
            <option value="{{ \App\Account::CURRENCY_RUB }}">RUB</option>
            <option value="{{ \App\Account::CURRENCY_USD }}">USD</option>
            <option value="{{ \App\Account::CURRENCY_EUR }}">AM</option>
            <option value="{{ \App\Account::CURRENCY_BTC_ONE }}">{{ config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name') }}</option>
            <option value="{{ \App\Account::CURRENCY_BTC_TWO }}">{{ config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name') }}</option>
        </select>
    </div>

    <div class="row">
        <span data-v-e4d5b16a="" class="color-gray font-sm font-medium">Выберите способ оплаты</span>
        <select name="payment_system" class="select-dropdown ng-untouched ng-pristine ng-valid">
            @foreach($systems as $systemKey => $systemName)
                @if(in_array($systemKey, $requisites) || empty($requisites))
                <option value="{{ $systemKey }}">{{ $systemName }}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>
