@extends('layouts.cabinet')

@section('title', __("Payment Details"))
@section('content')
@include('cabinet.new._header', ['user'=>$user])
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="section__heading py-4">
                {{__("Confirm")}} <br> <span class="c-violet">{{__("Payment for")}} {{$deposit->name}}</span>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p class="c-violet mb-2">{{__("Payment system")}}:</p>
            <img class="currency-ico" src="{{asset('assets/images/currency/'.$deposit->currency.'.svg')}}" onerror="this.src='{{asset('assets/images/currency/'.$deposit->currency.'.png')}}'" alt="{{$deposit->currency}}">
            <span class="currency-name">{{$deposit->currency}}</span>
            <p class="c-violet mt-4">{{__("Amount")}}:</p>
            <p class="amount-val font-bold">{{$deposit->amount / 100000}} <span class="c-violet">{{$deposit->currency}}</span></p>
        </div>
        <div class="col-md-6">
            QR
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-4">
            <p class="c-violet">{{__("Address")}}:</p>
            <p class="wallet-item__info-box">{{$wallets}}</p>
            @if($comment)
            <p class="c-violet">{{__("Comment")}}:</p>
            <p class="wallet-item__info-box">{{$comment}}</p>
            @endif
            <p class="my-4">{{__("showWall_info")}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-around">
            <form method="POST" action="{{route('cabinet.deposits.update',['deposit'=>$deposit->id])}}">
                @csrf
                <input type="text" name="confirm" hidden value="confirm">
                <button class="btn btn--primary-gr">{{__("Payed")}}</button>
            </form>
            <form method="POST" action="{{route('cabinet.deposits.update',['deposit'=>$deposit->id])}}">
                @csrf
                <input type="text" hidden value="decline" name="decline">
                <button class="btn btn--primary-gr">{{__("Cancel")}}</button>
            </form>
        </div>
    </div>
</div>
@endsection