@extends('layouts.cabinet')

@section('title',__("Notifications"))

@section('content')
    @include('cabinet.new._header', ['user'=>$user])
    <main class="flex flex-column flex-grow trans-0-3">
        <div data-v-1f79091c="" data-v-5e99d920=""
             class="grid padding-x-3 padding-y-4 shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">
            <div data-v-1f79091c="" class="grid-column-12 grid-column-6--xl grid-column-start-4--xl">
                <div class="accordion" id="notification-list">
                    @foreach($notifications as $notification)
{{--                        @livewire('notif-toast',['notification'=>$notification])--}}
                        <livewire:notification :notification="$notification" :list="true">
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
