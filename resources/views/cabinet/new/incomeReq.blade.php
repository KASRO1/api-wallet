@extends('layouts.cabinet')

@section('title',__("Show requisites"))

@section('content')
    @include('cabinet.new._header', ['user'=>$user])

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section__heading py-4">
                    {{__("Confirm")}} <br> <span class="c-violet">{{__("Payment for")}}</span>
                    {{$income->currency}}
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="c-violet">{{__("Payment system")}}:</p>
                <img class="currency-ico" src="{{asset('assets/images/currency/'.$income->currency.'.svg')}}"
                     onerror="this.src='{{asset('assets/images/currency/'.$income->currency.'.png')}}'"
                     alt="{{$income->currency}}">
                <span class="currency-name">{{$income->currency}}</span>
                <p class="c-violet mt-4">{{__("Amount")}}:</p>
                <p class="amount-val font-bold">{{$income->amount / 100000}} <span class="c-violet">{{$income->currency}}</span></p>
            </div>
            <div class="col-md-6">
                <p class="my-4">
                    {{__("Your unique id")}}:
                    <strong style="font-weight: bold;">{{$user->id}}</strong>
                </p>
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
{{--                <a href="{{route('cabinet.income.update',$income)}}" class="btn btn--primary-gr">{{__("Payed")}}</a>--}}
{{--                <a h class="btn btn--primary-gr">{{__("Cancel")}}</a>--}}

                <form method="POST" action="{{route('cabinet.income.update',['id'=>$income->id])}}">
                    @csrf
                    <input type="text" name="confirm" hidden value="confirm">
                    <button class="btn btn--primary-gr">{{__("Payed")}}</button>
                </form>
                <form method="POST" action="{{route('cabinet.income.update',['id'=>$income->id])}}">
                    @csrf
                    <input type="text" hidden value="decline" name="decline">
                    <button class="btn btn--primary-gr">{{__("Cancel")}}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
