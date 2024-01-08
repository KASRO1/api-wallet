@extends('layouts.cabinet')

@section('title', __("Wallets"))
@section('content')
@include('cabinet.new._header', ['user'=>$user])

<section id="wallets">
    <div class="container">
        <div class="row section__heading">
            <div class="col-md-7 d-flex align-items-center gap-3 col-12">
                <p class="py-4">{{__("My wallets")}}</p>
                <div class="d-flex gap-2">
                    <a href="{{route("cabinet.wallet")}}" class="btn btn-primary" style="height: 30px; padding: 0 10px;">Криптовалюта</a>
                    <a  href="{{route("cabinet.wallet.fiat")}}" class="btn btn-primary" style="height: 30px; padding: 0 10px;">Фиат</a>
                </div>
            </div>
            <div class="col-md-5 col-12">
                <p class="py-4">{{__("Balance")}}: <span class="wallet-item__amount">{{number_format($total_balance / 100000, 2)}} USD</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 w-75 m-auto my-4">
                <div class="w-100 justify-end d-flex">
                    <button data-izimodal-open="#modal" data-izimodal-transitionin="fadeInDown" class="btn btn-primary" style="border-radius: 8px">
                        {{__("Add funds")}}
                    </button>
                </div>
                @foreach(\App\Outcome::currencyCrypto() as $systemKey => $systemName)
                <form method="POST" action="{{route('cabinet.requisites.store')}}">
                    @csrf
                    <div class="wallet-item">
                        <div class="row">
                            <div class="col-md-7 col-12  m-auto">
                                <div class="wallet-item__currency d-flex gap-3">
                                    <div class="d-flex  align-items-center">
                                        @if($systemName['short'] == 'RUB')
                                        <img  src="{{asset('assets/images/currency/'.$systemName['name'].'.svg')}}" onerror="this.src='{{asset('assets/images/currency/'.$systemName['name'].'.png')}}'" alt="{{$systemName['short']}}" class="wallet-item__info-box-ico wallet-img">
                                        @else
                                        <img src="{{asset('assets/images/currency/'.$systemName['short'].'.svg')}}" onerror="this.src='{{asset('assets/images/currency/'.$systemName['short'].'.png')}}'" alt="{{$systemName['short']}}" class="wallet-item__info-box-ico wallet-img">
                                        @endif

                                    </div>
                                    <div class="w-100 d-flex align-items-center">
                                    <span class="font-lg">{{ $systemName['name'] }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-12 text-right align-items-center d-flex justify-end">
                                <p class="wallet-item__amount align-items-center font-xl">{{$account->where('currency',$systemName['short'])->isEmpty() ? 0 : number_format($account->where('currency',$systemName['short'])->first()->balance / 100000, 2)}} {{$systemName['short']}}</p>

                            </div>
                        </div>
                    </div>
                </form>
                @endforeach
                {{--@if(!$account->where('currency','BTC')->isEmpty())
                    <div class="wallet-item">
                        <div class="row">
                            <div class="col-md-8 col-12">
                                <div class="wallet-item__currency">
                                    <p>{{__("Currency")}}:</p>
                <div class="wallet-item__info-box wallet-item__info-box-currency">
                    <img src="{{asset('assets/images/currency/BTC.svg')}}" alt="BTC" class="wallet-item__info-box-ico">
                    <span>Bitcoin</span>
                </div>
                <p>{{__("Wallet address")}}:</p>
                {{$account->where('currency','BTC')}}
                <div class="wallet-item__info-box">
                    <input type="text" value="{{$account->where('currency','BTC')}}">
                    {{$wallets[\App\Income::BITCOIN][\App\Account::CURRENCY_BTC_ONE]}}
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <p>{{__("Balance")}}:</p>
            <p class="wallet-item__amount">{{$account->where('currency','BTC')->first()->balance / 100000}} BTC</p>
            <button class="wallet-item__btn">Save</button>
        </div>
    </div>
    </div>
    @endif
    @if(!$account->where('currency','ETH')->isEmpty())
    <div class="wallet-item">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="wallet-item__currency">
                    <p>{{__("Currency")}}:</p>
                    <div class="wallet-item__info-box wallet-item__info-box-currency">
                        <img src="{{asset('assets/images/currency/ETH.svg')}}" alt="ETH" class="wallet-item__info-box-ico">
                        <span>Ethereum</span>
                    </div>
                    <p>{{__("Wallet address")}}:</p>
                    <div class="wallet-item__info-box">
                        {{$wallets[\App\Income::ETH][\App\Account::CURRENCY_BTC_TWO]}}
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <p>{{__("Balance")}}:</p>
                <p class="wallet-item__amount">{{$account->where('currency','ETH')->first()->balance / 100000}} ETH</p>
                <button class="wallet-item__btn">{{__("Save")}}</button>
            </div>
        </div>
    </div>
    @endif
    @if(!$account->where('currency','USDT')->isEmpty())
    <div class="wallet-item">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="wallet-item__currency">
                    <p>{{__("Currency")}}:</p>
                    <div class="wallet-item__info-box wallet-item__info-box-currency">
                        <img src="{{asset('assets/images/currency/USDT (TRC20).svg')}}" alt="USDT" class="wallet-item__info-box-ico">
                        <span>TETHER (TRC 20)</span>
                    </div>
                    <p>{{__("Wallet address")}}:</p>
                    <input type="text" class="wallet-item__info-box">
                    {{$wallets[\App\Income::TETHER_ERC_20][\App\Account::CURRENCY_USD]}}
                    </input>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <p>{{__("Balance")}}:</p>
                <p class="wallet-item__amount">{{$account->where('currency','USDT')->first()->balance / 100000}} USDT</p>
                <button class="wallet-item__btn">{{__("Save")}}</button>
            </div>
        </div>
    </div>
    @endif
    @if(!$account->where('currency','XRP')->isEmpty())
    <div class="wallet-item">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="wallet-item__currency">
                    <p>{{__("Currency")}}:</p>
                    <div class="wallet-item__info-box wallet-item__info-box-currency">
                        <img src="{{asset('assets/images/currency/XRP.svg')}}" alt="XRP" class="wallet-item__info-box-ico">
                        <span>RIPPLE (BEP-20)</span>
                    </div>
                    <p>{{__("Wallet address")}}:</p>
                    <div class="wallet-item__info-box">
                        {{$wallets[\App\Income::RIPPLE][\App\Account::CURRENCY_USD]}}
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <p>{{__("Balance")}}:</p>
                <p class="wallet-item__amount">{{$account->where('currency','XRP')->first()->balance / 100000}} XRP</p>
                <button class="wallet-item__btn">{{__("Save")}}</button>
            </div>
        </div>
    </div>
    @endif
    @if(!$account->where('currency','LTC')->isEmpty())
    <div class="wallet-item">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="wallet-item__currency">
                    <p>{{__("Currency")}}:</p>
                    <div class="wallet-item__info-box wallet-item__info-box-currency">
                        <img src="{{asset('assets/images/currency/LTC.svg')}}" alt="LTC" class="wallet-item__info-box-ico">
                        <span>LTC</span>
                    </div>
                    <p>{{__("Wallet address")}}:</p>
                    <div class="wallet-item__info-box">
                        {{$wallets[\App\Income::LITECOIN][\App\Account::CURRENCY_USD]}}
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <p>{{__("Balance")}}:</p>
                <p class="wallet-item__amount">{{$account->where('currency','LTC')->first()->balance / 100000}} LTC</p>
                <button class="wallet-item__btn">{{__("Save")}}</button>
            </div>
        </div>
    </div>
    @endif
    @if(!$account->where('currency','BNB')->isEmpty())
    <div class="wallet-item">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="wallet-item__currency">
                    <p>{{__("Currency")}}:</p>
                    <div class="wallet-item__info-box wallet-item__info-box-currency">
                        <img src="{{asset('assets/images/currency/BNB.svg')}}" alt="BNB" class="wallet-item__info-box-ico">
                        <span>BNB</span>
                    </div>
                    <p>{{__("Wallet address")}}:</p>
                    <div class="wallet-item__info-box">

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <p>{{__("Balance")}}:</p>
                <p class="wallet-item__amount">{{$account->where('currency','BNB')->first()->balance / 100000}} BNB</p>
                <button class="wallet-item__btn">{{__("Save")}}</button>
            </div>
        </div>
    </div>
    @endif
    @if(!$account->where('currency','DODGE')->isEmpty())
    <div class="wallet-item">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="wallet-item__currency">
                    <p>{{__("Currency")}}:</p>
                    <div class="wallet-item__info-box wallet-item__info-box-currency">
                        <img src="{{asset('assets/images/currency/DODGE.svg')}}" alt="DODGE" class="wallet-item__info-box-ico">
                        <span>DODGE</span>
                    </div>
                    <p>{{__("Wallet address")}}:</p>
                    <div class="wallet-item__info-box">
                        {{$wallets[\App\Income::RIPPLE][\App\Account::CURRENCY_USD]}}
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <p>{{__("Balance")}}:</p>
                <p class="wallet-item__amount">{{$account->where('currency','DODGE')->first()->balance / 100000}} DODGE</p>
                <button class="wallet-item__btn">{{__("Save")}}</button>
            </div>
        </div>
    </div>
    @endif
    @if(!$account->where('currency','USDC')->isEmpty())
    <div class="wallet-item">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="wallet-item__currency">
                    <p>{{__("Currency")}}:</p>
                    <div class="wallet-item__info-box wallet-item__info-box-currency">
                        <img src="{{asset('assets/images/currency/USDC.svg')}}" alt="USDC" class="wallet-item__info-box-ico">
                        <span>USDC</span>
                    </div>
                    <p>{{__("Wallet address")}}:</p>
                    <div class="wallet-item__info-box">
                        usdc
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p>{{__("Balance")}}:</p>
                <p class="wallet-item__amount">{{$account->where('currency','USDC')->first()->balance / 100000}} USDC</p>
                <button class="wallet-item__btn">{{__("Save")}}</button>
            </div>
        </div>
    </div>
    @endif
    @if(!$account->where('currency','BUSD')->isEmpty())
    <div class="wallet-item">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="wallet-item__currency">
                    <p>{{__("Currency")}}:</p>
                    <div class="wallet-item__info-box wallet-item__info-box-currency">
                        <img src="{{asset('assets/images/currency/BUSD (BEP20).svg')}}" alt="BUSD" class="wallet-item__info-box-ico">
                        <span>BUSD</span>
                    </div>
                    <p>{{__("Wallet address")}}:</p>
                    <div class="wallet-item__info-box">
                        busd
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <p>{{__("Balance")}}:</p>
                <p class="wallet-item__amount">{{$account->where('currency','BUSD')->first()->balance / 100000}} BUSD</p>
                <button class="wallet-item__btn">{{__("Save")}}</button>
            </div>
        </div>
    </div>
    @endif
    @if(!$account->where('currency','DAI')->isEmpty())

    <div class="wallet-item">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="wallet-item__currency">
                    <p>{{__("Currency")}}:</p>
                    <div class="wallet-item__info-box wallet-item__info-box-currency">
                        <img src="{{asset('assets/images/currency/DAI.svg')}}" alt="DAI" class="wallet-item__info-box-ico">
                        <span>DAI</span>
                    </div>
                    <p>{{__("Wallet address")}}:</p>
                    <div class="wallet-item__info-box">
                        DAI
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <p>{{__("Balance")}}:</p>
                <p class="wallet-item__amount">{{$account->where('currency','DAI')->first()->balance / 100000}} DAI</p>
                <button class="wallet-item__btn">{{__("Save")}}</button>
            </div>
        </div>
    </div>
    @endif
    @if(!$account->where('currency','TRX')->isEmpty())

    <div class="wallet-item">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="wallet-item__currency">
                    <p>{{__("Currency")}}:</p>
                    <div class="wallet-item__info-box wallet-item__info-box-currency">
                        <img src="{{asset('assets/images/currency/TRX.svg')}}" alt="TRX" class="wallet-item__info-box-ico">
                        <span>TRON</span>
                    </div>
                    <p>{{__("Wallet address")}}:</p>
                    <div class="wallet-item__info-box">
                        trx </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <p>{{__("Balance")}}:</p>
                <p class="wallet-item__amount">{{$account->where('currency','TRX')->first()->balance / 100000}} TRX</p>
                <button class="wallet-item__btn">{{__("Save")}}</button>
            </div>
        </div>
    </div>
    @endif--}}
    </div>
    </div>
    </div>
    <div id="modal" class="modal">
        <div class="modal-content">
            <div class="d-flex w-100 mb-4 justify-between align-items-center">
                <h2 class="font-xl">{{__("Adding funds for your")}}</h2>
                <span class="close" data-izimodal-close="" data-izimodal-transitionout="fadeOutDown" id="closeModalBtn">&times;</span>

            </div>
        <div class="d-flex flex-column gap-3">
            <div>
                <label for="coins">{{__("Select cryptocurrency")}}:</label>
                <select onload="getWalletInSelect(this)" onchange="getWalletInSelect(this)" class="form-control" id="coins" >
                    @foreach(\App\Outcome::currencyCryptoDeposit() as $systemKey => $systemName)
                        <option value="{{$systemName['short']}}">{{$systemName['name']}}</option>
                    @endforeach

                </select>

            </div>
            <div>
                <div id="qrBlock" class="d-flex justify-content-center my-4">
                    <img height="800px" id="qrImg" src="">

                </div>
                <input class="form-control" id="address_deposit" value="{{$wallets[0]['address']}}" disabled >
            </div>

        </div>
        </div>
    </div>
</section>
@if(count($wallets) === 0)
    <script>
        $.ajax({
            url: "{{route('wallet.generate')}}",
            type: "POST",
            data: {
                _token: "{{csrf_token()}}"
            },
            success: function (data) {
                console.log(data);
            },
            error: function (data) {
                console.log(data);
            }
        })

    </script>
@endif
    <script id="__DATA__">
{!! json_encode($wallets) !!}
    </script>
    <script>
        function getWalletInSelect(select){
            const coin = select.value;
            const wallets = JSON.parse(document.getElementById('__DATA__').innerText);
            const qr_img = document.getElementById('qrImg');
            const address_deposit = document.getElementById('address_deposit');

            wallets.forEach((wallet) => {
                if(wallet.currency === coin){
                    qr_img.src = "https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=" + wallet.address;
                    address_deposit.value = wallet.address;
                }
            })
        }

            const select = document.getElementById('coins');
            getWalletInSelect(select);

    </script>
@endsection