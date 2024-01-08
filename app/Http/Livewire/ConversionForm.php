<?php

namespace App\Http\Livewire;

use App\Account;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;

class ConversionForm extends Component
{
    public $currencyOne = Account::CURRENCY_USDT;
    public $currencyTwo = Account::CURRENCY_BTC;
    public $amount = null;

    protected $listeners = ['convert', 'swap'];

    public $success = null;
    public $error = null;

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function render()
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        $oneBalance = $accounts->where('currency', $this->currencyOne)->first()->amount;
        $twoBalance = $accounts->where('currency', $this->currencyTwo)->first()->amount;

        $currencyRate = $this->getCurrencyRate();

        $isCanChange = ((float) str_replace(' ', '', $oneBalance))
            >= $this->amount && $this->amount !== null && $this->amount > 0;

        $converted = number_format($this->getConvertedAmount($currencyRate), 5);

        return view('livewire.conversion-form', [
            'currencyOneName' => $this->getCurrencyName($this->currencyOne),
            'currencyTwoName' => $this->getCurrencyName($this->currencyTwo),
            'oneBalance' => $oneBalance,
            'twoBalance' => $twoBalance,
            'currencyRate' => $currencyRate,
            'isCanChange' => $isCanChange,
            'converted' => $converted,
        ]);
    }

    public function updated()
    {
        $this->success = null;
    }

    public function swap()
    {
        $tmp = $this->currencyOne;
        $this->currencyOne = $this->currencyTwo;
        $this->currencyTwo = $tmp;
        $this->success = null;
    }

    public function convert()
    {
        if (!$this->isCanChange()) {
            return;
        }

        $user = auth()->user();
        $accounts = $user->accounts;

        $firstAccount = $accounts->where('currency', $this->currencyOne)->first();
        $secondAccount = $accounts->where('currency', $this->currencyTwo)->first();

        $amount = ((float) str_replace(' ', '', $this->amount));

        if ($amount <= 0) {
            $this->error = "Сумма не соответствует действительности";
            return;
        }

        if (strtolower($this->currencyOne) === 'apy') {
            $amount += 0.5;
        }

        if ($firstAccount->balance < $amount * 100000) {
            $this->error = "Недостаточно денег на балансе";
            return;
        }

        // deduct commission except * => APY
        if ($this->currencyTwo !== Account::CURRENCY_APY) {
            $commissionAccount = $accounts->where('currency', Account::CURRENCY_APY)->first();
            $commission = 0;
            if ($commissionAccount['balance'] < $commission) {
                $this->error = "Токена APY недостаточно. Вам необходимо пополнить баланс APY.";
                return;
            } else {
                $commissionAccount->decrement('balance', $commission);
            }
        }



        $firstAccount->decrement('balance', $amount * 100000);

        $currencyRate = $this->getCurrencyRate();
        $convertedAmount = $this->getConvertedAmount($currencyRate, $amount);

        $secondAccount->increment('balance', $convertedAmount  * 100000);

        $user->conversions()->create([
            'amount' => $amount * 100000,
            'final_amount' => $convertedAmount * 100000,
            'currency_one' => $this->currencyOne,
            'currency_two' => $this->currencyTwo,
        ]);

        $this->success = true;
    }

    protected function getConvertedAmount($currencyRate, $amount = null)
    {
        $amount = $amount ?? $this->amount;

        return ((empty($amount) ? 0 : ((float) $amount))) * $currencyRate;
    }

    protected function isCanChange()
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        $oneBalance = $accounts->where('currency', $this->currencyOne)->first()->amount;

        return ((float) str_replace(' ', '', $oneBalance)) >= $this->amount && $this->amount !== null && $this->amount != 0;
    }

    /**
     * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed
     */
    protected function getCurrencyRate()
    {
        if ($this->currencyOne == Account::CURRENCY_BTC_ONE) {
            $one = 'btc';
        } else if ($this->currencyOne == Account::CURRENCY_BTC_TWO) {
            $one = 'eth';
        } else {
            $one = $this->currencyOne;
        }

        if ($this->currencyTwo == Account::CURRENCY_BTC_ONE) {
            $two = 'btc';
        } else if ($this->currencyTwo == Account::CURRENCY_BTC_TWO) {
            $two = 'eth';
        } else {
            $two = $this->currencyTwo;
        }

        if (DB::table('exchange_rates')->where('pair', strtolower($one) . '_' . strtolower($two))->exists()) {
            return DB::table('exchange_rates')->where('pair', strtolower($one) . '_' . strtolower($two))->first()->rate;
        } else {
            if (
                $this->currencyOne == Account::CURRENCY_APY &&
                ($this->currencyTwo != Account::CURRENCY_USDT &&
                    $this->currencyTwo != Account::CURRENCY_BUSD &&
                    $this->currencyTwo != Account::CURRENCY_USDC &&
                    $this->currencyTwo != Account::CURRENCY_RUB)
            ) {
                if (DB::table('configs')->where('field', 'apy_rate')->exists()) {
                    $apyRate = DB::table('configs')
                        ->select('value')
                        ->where('field', 'apy_rate')
                        ->first()->value;
                } else {
                    $apyRate = config('currencies.apy_usdt');
                }

                if (DB::table('exchange_rates')->where('pair', 'usdt_' . strtolower($two))->exists()) {
                    $rate = DB::table('exchange_rates')->where('pair', 'usdt_' . strtolower($two))->first()->rate;
                    return (float)$rate * floatval($apyRate);
                } else {
                    $rate = config('currencies.usdt_' . strtolower($two));
                    return (float)$rate * floatval($apyRate);
                }
            } elseif (
                $this->currencyTwo == Account::CURRENCY_APY &&
                ($this->currencyOne != Account::CURRENCY_USDT &&
                    $this->currencyOne != Account::CURRENCY_BUSD &&
                    $this->currencyOne != Account::CURRENCY_USDC &&
                    $this->currencyOne != Account::CURRENCY_RUB)
            ) {
                if (DB::table('configs')->where('field', 'apy_rate')->exists()) {
                    $apyRate = DB::table('configs')
                        ->select('value')
                        ->where('field', 'apy_rate')
                        ->first()->value;
                } else {
                    $apyRate = config('currencies.apy_usdt');
                }

                if (DB::table('exchange_rates')->where('pair', strtolower($one) . '_usdt')->exists()) {
                    $rate = DB::table('exchange_rates')->where('pair', strtolower($one) . '_usdt')->first()->rate;
                    return (float)$rate * (1 / floatval($apyRate));
                } else {
                    $rate = config('currencies.' . strtolower($one) . '_usdt');
                    return (float)$rate * (1 / floatval($apyRate));
                }
            } else {
                if ($this->currencyOne == Account::CURRENCY_RUB || $this->currencyTwo == Account::CURRENCY_RUB) {
                    return config('currencies.' . strtolower($one) . '_' . strtolower($two));
                } else {

                    if (DB::table('configs')->where('field', 'apy_rate')->exists()) {
                        $apyRate = DB::table('configs')
                            ->select('value')
                            ->where('field', 'apy_rate')
                            ->first()->value;
                    } else {
                        $apyRate = config('currencies.apy_usdt');
                    }

                    if ($this->currencyOne == Account::CURRENCY_USDT || $this->currencyOne == Account::CURRENCY_BUSD || $this->currencyOne == Account::CURRENCY_USDC) {
                        return (1 / floatval($apyRate));
                    } else {
                        return floatval($apyRate);
                    }
                }
            }
        }
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
