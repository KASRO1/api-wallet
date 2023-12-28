@extends('layouts.cabinet')

@section('title',__("Add funds"))

@section('content')
    @include('cabinet.new._header', ['user'=>$user])
    <div class="container" id="income">
        <div class="row">
            <div class="col-12">
                <h1 class="section__heading py-4 my-4">{{__("Add funds")}}</h1>
                <h3 class="section__subheading py-4 mb-4">{{__("Adding funds for your")}} {{$wallet}} <span class="c-violet">{{__("wallet")}}</span></h3>
            </div>
            <div class="col-12">
                @if($errors->isNotEmpty())
                    <ul class="">
                        @foreach($errors->all() as $error)
                            <li class="alert alert-warning">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <form method="POST" action="{{route('cabinet.income.add')}}">
                    @csrf
                    <input id="paySstm" type="text" hidden name="payment_system" value="{{\App\Outcome::BITCOIN}}">
                    <input type="text" value="{{$wallet}}" hidden name="currency">
                    <label for="amount">{{__("Enter amount")}}</label>
                    <input class="wallet-item__info-box w-100" type="text" name="amount">
                    <button type="submit" class="btn">{{__("Add funds")}}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
