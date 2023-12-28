@extends('layouts.app')

@section('title', 'Оповещения')

@section('content')
<main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
    <div data-v-1f79091c="" data-v-5e99d920=""
         class="grid padding-x-3 padding-y-4 shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">
        <div data-v-1f79091c="" class="grid-column-12 grid-column-6--xl grid-column-start-4--xl">
            <ul data-v-1f79091c="" class="margin-y-0 padding-left-0 no-list grid grid-row-gap-3">
                @foreach($notifications as $notification)
                <livewire:notification :notification="$notification">
                @endforeach
            </ul>
        </div>
    </div>
</main>
@endsection
