<?php

namespace App\Http\Livewire;

use App\Account;
use App\Support\Helpers;
use Illuminate\Support\Str;
use Livewire\Component;

class Calculator extends Component
{
    public $currency = Account::CURRENCY_USD;
    public $amount = 0;
    public $days = 0;

    protected $listeners = ['changeCurrency'];

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.calculator', [
            'currencyName' => $this->getCurrencyName($this->currency),
            'tariffName' => $this->getTariff(((float) $this->amount) * 100000, $this->currency)['title'],
            'currentTariff' => $this->getTariff(((float) $this->amount) * 100000, $this->currency),
        ]);
    }

    /**
     * @param $sum
     * @param string $currency
     * @return array
     */
    protected function getTariff($sum, $currency = Account::CURRENCY_RUB)
    {
        return Helpers::getTariff($sum, $currency);
    }

    /**
     * @param $currency
     */
    public function changeCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @param $currency
     * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed|string
     */
    protected function getCurrencyName($currency)
    {
        switch ($currency) {
            case Account::CURRENCY_BTC_ONE: return config('crypto.btc_one.name');
            case Account::CURRENCY_BTC_TWO: return config('crypto.btc_two.name');
        }

        return Str::upper($currency);
    }
}
