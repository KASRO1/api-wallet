@extends('layouts.cabinet')

@section('title', __("Transfer"))

@section('content')
    @include('cabinet.new._header', ['user'=>$user])

    <main class="flex flex-column flex-grow trans-0-3">
        <div data-v-0297da3b="" class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section__heading py-4 mb-2">
                        <span class="c-violet">{{__("Internal payments")}}</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <livewire:transfer-form />
                </div>
            </div>
        </div>
    </main>
@endsection
