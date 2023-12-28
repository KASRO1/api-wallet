<?php

namespace App\Http\Livewire;

use App\Account;
use App\Outcome;
use Livewire\Component;

class OutcomeCurrencySystem extends Component
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

        $requisites = $user->requisites()->get()->keyBy('type')->keys()->toArray();

        $systems = array_keys(array_filter(\App\Outcome::currencyForSystem(), function ($currencies) {
            return in_array($this->currency, $currencies);
        }));

        $systems = collect(Outcome::getSystems())->filter(function ($item, $key) use ($systems) {
            return in_array($key, $systems);
        });

        return view('livewire.outcome-currency-system', compact('requisites', 'systems'));
    }
}
