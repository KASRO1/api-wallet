@extends('layouts.app')

@section('title', 'Мои реквизиты')

@section('content')
<main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
    <div data-v-fd87438e=""
         class="flex--md shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg overflow-hidden">
        @include('cabinet._account-sidebar')
        <div data-v-fd87438e="" class="overflow-hidden flex-grow padding-3">
            <form method="POST" action="{{ route('cabinet.requisites.store') }}" data-v-fd87438e="" class="grid">
                @csrf
                <div data-v-fd87438e="" class="grid-column-12 grid-column-8--xl grid-column-start-3--xl padding-y-4">
                    <div data-v-9e7d55c2="" data-v-fd87438e="">
                        <h1 data-v-9e7d55c2="" class="flex items-center font-medium font-lg margin-y-0">
                            <div data-v-9e7d55c2="" class="height-1-25 flex justify-center items-center flex-no-shrink margin-right-3">
                                <svg data-v-9e7d55c2="" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-full fill-default"><path data-v-9e7d55c2="" d="M20 3h-7a6 6 0 100 12h7v2a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1h18a1 1 0 011 1v2zm-7 2h8v8h-8a4 4 0 110-8zm0 3v2h3V8h-3z"></path></svg>
                            </div>
                            Информация о платеже
                        </h1>
                        <div data-v-9e7d55c2="" class="grid grid-row-gap-4 grid-column-gap-4--md padding-y-4">
                            <ul class="errors grid-column-12 grid-column-6--xl grid-column-start-4--xl margin-bottom-2">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                @if(session()->has('error'))
                                    <li>Финансовый пароль введен неверно!</li>
                                @endif
                            </ul>

                            @foreach(\App\Outcome::getSystems() as $systemKey => $systemName)
                            <div data-v-9e7d55c2="" class="grid-column-12 grid-column-6--md">
                                <div data-v-7f923647="" data-v-9e7d55c2="" data-vv-as=" "
                                     class="field">
                                    <div data-v-7f923647="" class="flex justify-between">
                                        <label data-v-7f923647="" for="system_{{ $systemKey }}" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                            {{ $systemName }}
                                        </label>
                                    </div>
                                    <div data-v-7f923647="" class="relative">
                                        <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                                            <input data-v-7f923647="" name="{{ $systemKey }}_wallet" id="input_pibze21v" value="{{ $requisites[$systemKey .'_wallet'] ?? null }}" autocomplete="off" type="text" placeholder="Введите {{ $systemName }} кошелек" class="field__input">
                                        </div>
                                        <div data-v-7f923647="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div data-v-9e7d55c2="" class="grid-column-12">
                                <hr data-v-9e7d55c2="">
                            </div>
                            <div data-v-9e7d55c2="" class="grid-column-12 grid-column-6--md">
                                <div data-v-7f923647="" data-v-9e7d55c2="" data-vv-as=" "
                                     class="field field--prefix">
                                    <div data-v-7f923647="" class="flex justify-between">
                                        <label data-v-7f923647="" for="input_fe6yvuta" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                            Финансовый пароль
                                        </label>
                                    </div>
                                    <div data-v-7f923647="" class="relative">
                                        <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                                            <input data-v-7f923647="" id="input_fe6yvuta" name="fin_password" autocomplete="off" type="password" placeholder="Введите свой финансовый пароль" class="field__input">
                                        </div>
                                        <div data-v-7f923647="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                        <div data-v-7f923647="" class="flex field__icon field__icon--prefix absolute top-0 bottom-0 margin-y-auto"><svg data-v-9e7d55c2="" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-full"><path data-v-9e7d55c2="" d="M8.313 8.566l7.94-7.94 2.121 2.121-1.414 1.414 2.121 2.121-3.535 3.536-2.12-2.121-2.99 2.99a5.002 5.002 0 01-7.97 5.849 5 5 0 015.847-7.97zm-.899 5.848a2 2 0 10-2.78-2.877 2 2 0 002.78 2.877z" fill="#7E839A"></path></svg></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-9e7d55c2="" class="flex items-end grid-column-12 grid-column-6--md padding-top-3">
                                <button data-v-141d1a81="" data-v-9e7d55c2="" class="width-full button button--primary button--mini">
                                    <span data-v-141d1a81="" class="button__content">
                                        <svg data-v-9e7d55c2="" data-v-141d1a81="" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 fill-white margin-right-2"><path data-v-9e7d55c2="" data-v-141d1a81="" d="M1 0h14l2.707 2.707a1 1 0 01.293.707V17a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm3 1v5h9V1H4zM3 9v7h12V9H3zm7-7h2v3h-2V2z" fill="#fff"></path></svg>
                                        Сохранить
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
