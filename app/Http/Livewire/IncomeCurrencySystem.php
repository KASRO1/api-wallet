<?php

namespace App\Http\Livewire;

use App\Account;
use App\Income;
use Livewire\Component;

class IncomeCurrencySystem extends Component
{
    /**
     * @var null
     */
    public $currency = Account::CURRENCY_USD;

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $user = auth()->user();

        $systems = array_keys(array_filter(Income::currencyForSystem(), function ($currencies) {
            return in_array($this->currency, $currencies);
        }));

        $systems = collect(Income::getSystems())->filter(function ($item, $key) use ($systems) {
            return in_array($key, $systems);
        });

        return view('livewire.income-currency-system', compact('systems'));
    }
}
