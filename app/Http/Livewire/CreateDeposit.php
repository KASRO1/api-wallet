<?php

namespace App\Http\Livewire;

use App\Account;
use App\Deposit;
use App\Support\Helpers;
use Illuminate\Support\Str;
use Livewire\Component;

class CreateDeposit extends Component
{
    public $currency = Account::CURRENCY_USD;
    public $amount = 0;
    public $days = 7;
    public $error = null;
    public $fin_password = null;

    protected $listeners = ['changeCurrency', 'invest'];

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.create-deposit', [
            'currencyName' => $this->getCurrencyName($this->currency),
        ]);
    }

    /**
     * @return void
     */
    public function updated()
    {
        $this->error = null;
    }

    /**
     * @param $tariff
     * @return \Illuminate\Http\RedirectResponse
     */
    public function invest($tariff)
    {
        $tariff = config('tariffs.0');

        $from = $tariff['from'][$this->currency] / 100000;
        $to = $tariff['to'][$this->currency] / 100000;

        if(7 > $this->days) {
            $this->error = "Минимальное количество дней для депозита: 7.";
            return;
        }

        if($from > $this->amount) {
            $this->error = "Данный тариф невозможно выбрать, минимальная сумма выше указанной вами.";
            return;
        }

        $amount = ((float) $this->amount) * 100000;

        $user = auth()->user();

        if($user->fin_password != $this->fin_password) {
            $this->error = "Указан неверный финансовый пароль.";
            return;
        }

        $account = $user->accounts->where('currency', $this->currency)->first();

        if($account->balance < $amount) {
            $this->error = 'Недостаточно денег на балансе';
            return;
        }

        $account->decrement('balance', $amount);

        $user->deposits()->create([
            'name' => 'deposit name',
            'amount' => $amount,
            'balance' => $amount,
            'currency' => $this->currency,
            'start_time' => now(),
            'end_time' => now()->addDays($this->days),
            'percent' => $this->getPercent($amount, $this->currency),
            'status' => Deposit::STATUS_OPENED,
            'referal_percent' => $this->getReferalsPercent(),
        ]);

        if($user->referal_id !== null && $user->deposits()->count() <= 1) {
//            $user->referal->accounts()->where('currency', Account::CURRENCY_USD)->increment('balance', 10 * 100);
              $user->referal->deposits()->where('status', Deposit::STATUS_OPENED)->increment('referal_percent', $user->getRefPercent(1));

            if($user->referal->referal !== null) {
//                $user->referal->referal->accounts()->where('currency', Account::CURRENCY_USD)->increment('balance', 5 * 100);
                $user->referal->referal->deposits()->where('status', Deposit::STATUS_OPENED)->increment('referal_percent', $user->getRefPercent(2));

                if($user->referal->referal->referal !== null) {
//                    $user->referal->referal->referal->accounts()->where('currency', Account::CURRENCY_USD)->increment('balance', 2.5 * 100);
                    $user->referal->referal->referal->deposits()->where('status', Deposit::STATUS_OPENED)->increment('referal_percent', $user->getRefPercent(3));
                }
            }
        }

        return $this->redirect(route('cabinet.deposits'));
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
            case Account::CURRENCY_EUR: return config('crypto.eur.name');
            case Account::CURRENCY_BTC_ONE: return config('crypto.btc_one.name');
            case Account::CURRENCY_BTC_TWO: return config('crypto.btc_two.name');
        }

        return Str::upper($currency);
    }
    /**
     * @return float
     */
    protected function getReferalsPercent()
    {
        $user = auth()->user();

        $referals = [];

        $referals[0] = $user->referals()->get();

        $referals[1] = collect();

        foreach ($referals[0] as $referal) {
            $referals[1] = $referals[1]->merge($referal->referals()->get());
        }

        $referals[2] = collect();

        foreach ($referals[1] as $referal) {
            $referals[2] = $referals[2]->merge($referal->referals()->get());
        }

        foreach ($referals as $index => $group) {
            $referals[$index] = $group->filter(function ($referal) {
                return $referal->is_depositet;
            });
        }

        return ((count($referals[0]) * Deposit::REFERAL_FIRST_PERCENT) + (count($referals[1]) * Deposit::REFERAL_SECOND_PERCENT) + (count($referals[2]) * Deposit::REFERAL_THIRD_PERCENT)) ?? 0;
    }

    /**
     * @param $sum
     * @param string $currency
     * @return float
     */
    protected function getPercent($sum, $currency = Account::CURRENCY_RUB)
    {
        return Helpers::getTariff($sum, $currency)['percent'];
    }
}
