<?php

namespace App\Http\Livewire;

use App\Account;
use App\User;
use Illuminate\Support\Str;
use Livewire\Component;

class TransferForm extends Component
{
    public $success = null;
    public $error = null;
    public $amount = null;
    public $toId = null;
    public $currency = Account::CURRENCY_USDT;
    public $fin_password = null;

    protected $listeners = ['transfer'];

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        $oneBalance = $accounts->where('currency', $this->currency)->first()->amount;

        $isCanTransfer = ((float) str_replace(' ', '', $oneBalance)) >= $this->amount
            && $this->amount !== null
            && $this->fin_password !== null
            && $this->amount != 0;

        return view('livewire.transfer-form', [
            'isCanTransfer' => $isCanTransfer,
            'oneBalance' => $oneBalance,
            'currencyOneName' => $this->getCurrencyName($this->currency),
        ]);
    }

    public function transfer()
    {
        $user = auth()->user();

        if ($user->fin_password != $this->fin_password) {
            $this->error = "Указан неверный финансовый пароль";
            return;
        }

        $accounts = $user->accounts;

        $balance = $accounts->where('currency', $this->currency)->first()->amount;

        $isCanTransfer = ((float) str_replace(' ', '', $balance)) >= $this->amount && $this->amount !== null && $this->amount != 0;

        if (!$isCanTransfer) {
            $this->error = "Суммы на вашем балансе недостаточно для перевода или укажите сумма указана неверно.";
            return;
        }

        if (empty($this->toId) || User::query()->where('id', $this->toId)->doesntExist()) {
            $this->error = "Указанный ID пользователя не найден.";
            return;
        }

        if ($this->toId == auth()->user()->id) {
            $this->error = "Вы не можете совершить перевод самому себе.";
            return;
        }

        // deduct commission except * => APY
        $commissionAccount = $accounts->where('currency', Account::CURRENCY_APY)->first();
        $commission = ((float) env('COMMISSION')) * 100000;
        if ($commissionAccount['balance'] < $commission) {
            $this->error = "APY token is not enough.";
            return;
        } else {
            $commissionAccount->decrement('balance', $commission);
        }

        $amount = $this->amount * 100000;

        $account = $user->accounts->where('currency', $this->currency)->first();;

        $account->decrement('balance', $amount);

        $toUser = User::find($this->toId);
        $toAccount = $toUser->accounts->where('currency', $this->currency)->first();

        $toAccount->increment('balance', $amount);

        $this->success = true;
    }

    public function updated()
    {
        $this->success = null;
        $this->error = null;
    }

    /**
     * @param $currency
     * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed|string
     */
    protected function getCurrencyName($currency)
    {
        switch ($currency) {
            case Account::CURRENCY_EUR:
                return config('crypto.eur.name');
            case Account::CURRENCY_BTC_ONE:
                return config('crypto.btc_one.name');
            case Account::CURRENCY_BTC_TWO:
                return config('crypto.btc_two.name');
        }

        return Str::upper($currency);
    }
}
