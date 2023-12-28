@extends('layouts.cabinet')

@section('title', __("Conversion"))

@section('content')
    @include('cabinet.new._header', ['user'=>$user])

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section__heading py-4 mb-4">
                    {{__("Swap")}}
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <livewire:conversion-form />
            </div>
        </div>
    </div>
@endsection
