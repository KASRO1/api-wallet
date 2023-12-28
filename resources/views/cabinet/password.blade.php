@extends('layouts.app')

@section('title', 'Безопасность')

@section('content')
<main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
    <div data-v-fd87438e=""
         class="flex--md shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg overflow-hidden">
        @include('cabinet._account-sidebar')
        <div data-v-fd87438e="" class="overflow-hidden flex-grow padding-3">
            <div data-v-fd87438e="" class="grid">
                <div data-v-fd87438e="" class="grid-column-12 grid-column-8--xl grid-column-start-3--xl padding-y-4">
                    <div data-v-2eb02792="" data-v-fd87438e="">
                        <h1 data-v-2eb02792=""
                            class="flex--md flex-wrap items-center justify-between font-medium font-lg margin-y-0">
                            <div data-v-2eb02792="" class="flex items-center">
                                <div data-v-2eb02792=""
                                     class="height-1-25 flex justify-center items-center flex-no-shrink margin-right-3">
                                    <svg data-v-2eb02792="" viewBox="0 0 18 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg" class="height-full fill-default">
                                        <path data-v-2eb02792=""
                                              d="M.783 1.826L9 0l8.217 1.826a1 1 0 01.783.976v9.987a6 6 0 01-2.672 4.992L9 22l-6.328-4.219A6 6 0 010 12.79V2.802a1 1 0 01.783-.976zM9 10a2.5 2.5 0 100-5 2.5 2.5 0 000 5zm-4.473 5h8.946a4.5 4.5 0 00-8.946 0z"></path>
                                    </svg>
                                </div>
                                Безопасность
                            </div>
                            @if(! auth()->user()->ga_secret)
                            <div data-v-2eb02792="" class="flex items-center font-sm padding-left-4">
                                <span data-v-2eb02792="" class="color-orange"> Двухфакторная аутентификация деактивирована </span>
                                <svg data-v-2eb02792="" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 margin-left-2"><path data-v-2eb02792="" fill-rule="evenodd" clip-rule="evenodd" d="M8 0a2 2 0 011.715.971l6 10A2 2 0 0114 14H2a2 2 0 01-1.715-3.029l6-10A2 2 0 018 0zm6 12L8 2 2 12h12zM7 5h2v3H7V5zm2 6V9H7v2h2z" fill="#FF8C21"></path></svg>
                            </div>
                            @endif

                        </h1>
                        <p class="alert alert-success">
                            {{__("Saved")}}!
                        </p>

                        <div data-v-2eb02792="">
                            <div data-v-2eb02792="" class="padding-top-3">
                                <strong data-v-2eb02792="" class="text-accent">
                                    Сброс пароля
                                </strong>
                            </div>
                            <form method="POST" action="{{ route('cabinet.password.store') }}" data-v-2eb02792="" class="grid grid-row-gap-4 grid-column-gap-4--md padding-y-2">
                                @csrf
                                @if($errors->isNotEmpty() && ! session()->has('fin_password_form'))
                                <ul class="errors grid-column-12 grid-column-6--xl grid-column-start-4--xl margin-bottom-2">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                @endif


                                <div data-v-2eb02792="" class="grid-column-12">
                                    <div data-v-7f923647="" data-v-2eb02792="" data-vv-as=" " class="field">
                                        <div data-v-7f923647="" class="flex justify-between"><label
                                                data-v-7f923647="" for="input_gvyx3rs8"
                                                class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                                Действующий пароль </label></div>
                                        <div data-v-7f923647="" class="relative">
                                            <div data-v-7f923647=""
                                                 class="field__input-wrapper flex items-center overflow-hidden">
                                                <!----><input data-v-7f923647="" name="old_password" id="input_gvyx3rs8" autocomplete=""
                                                              type="password"
                                                              placeholder="Введи свой текущий пароль"
                                                              class="field__input"></div>
                                            <div data-v-7f923647=""
                                                 class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex">
                                                <!----><!----></div><!----></div><!----></div>
                                </div>
                                <div data-v-2eb02792="" class="grid-column-12 grid-column-6--md">
                                    <div data-v-7f923647="" data-v-2eb02792="" data-vv-as=" " class="field"
                                         aria-required="false" aria-invalid="false">
                                        <div data-v-7f923647="" class="flex justify-between"><label
                                                data-v-7f923647="" for="input_zzv48knq"
                                                class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                                Новый пароль </label></div>
                                        <div data-v-7f923647="" class="relative">
                                            <div data-v-7f923647=""
                                                 class="field__input-wrapper flex items-center overflow-hidden">
                                                <!----><input data-v-7f923647="" name="password" id="input_zzv48knq" autocomplete=""
                                                              type="password" placeholder="Создать новый пароль"
                                                              class="field__input"></div>
                                            <div data-v-7f923647=""
                                                 class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex">
                                                <!----><!----></div><!----></div><!----></div>
                                </div>
                                <div data-v-2eb02792="" class="grid-column-12 grid-column-6--md">
                                    <div data-v-7f923647="" data-v-2eb02792="" data-vv-as=" " class="field">
                                        <div data-v-7f923647="" class="flex justify-between"><label
                                                data-v-7f923647="" for="input_k4akjwo6"
                                                class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                                Подтверждение нового пароля </label></div>
                                        <div data-v-7f923647="" class="relative">
                                            <div data-v-7f923647=""
                                                 class="field__input-wrapper flex items-center overflow-hidden">
                                                <!----><input data-v-7f923647="" name="password_confirmation" id="input_k4akjwo6" autocomplete=""
                                                              type="password" placeholder="Подтвердите новый пароль"
                                                              class="field__input"></div>
                                            <div data-v-7f923647=""
                                                 class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex">
                                                <!----><!----></div><!----></div><!----></div>
                                </div>
                                <div data-v-2eb02792="" class="grid-column-12 grid-column-6--md">
                                    <button data-v-141d1a81="" data-v-2eb02792=""
                                            class="width-full button button--primary button--mini">
                                        <!----><span data-v-141d1a81="" class="button__content"><svg
                                                data-v-2eb02792="" data-v-141d1a81="" viewBox="0 0 18 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="height-1 fill-white margin-right-2"><path data-v-2eb02792=""
                                                                                                 data-v-141d1a81=""
                                                                                                 d="M1 0h14l2.707 2.707a1 1 0 01.293.707V17a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm3 1v5h9V1H4zM3 9v7h12V9H3zm7-7h2v3h-2V2z"
                                                                                                 fill="#fff"></path></svg> Сохранить </span>
                                    </button>
                                </div>
                            </form>
                            <div data-v-2eb02792="" class="padding-top-3">
                                <strong data-v-2eb02792="" class="text-accent">
                                    Сброс финансового пароля
                                </strong>
                            </div>
                            <form method="POST" action="{{ route('cabinet.fin_password.store') }}" data-v-2eb02792="" class="grid grid-row-gap-4 grid-column-gap-4--md padding-y-2">
                                @csrf
                                @if($errors->isNotEmpty() && session()->has('fin_password_form'))
                                    <ul class="errors grid-column-12 grid-column-6--xl grid-column-start-4--xl margin-bottom-2">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                <div data-v-2eb02792="" class="grid-column-12">
                                    <div data-v-7f923647="" data-v-2eb02792="" data-vv-as=" " class="field">
                                        <div data-v-7f923647="" class="flex justify-between"><label
                                                data-v-7f923647="" for="input_gvyx3rs8"
                                                class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                                Действующий финансовый пароль </label></div>
                                        <div data-v-7f923647="" class="relative">
                                            <div data-v-7f923647=""
                                                 class="field__input-wrapper flex items-center overflow-hidden">
                                                <!----><input data-v-7f923647="" name="old_password" id="input_gvyx3rs8" autocomplete=""
                                                              type="password"
                                                              placeholder="Введи свой текущий финансовый пароль"
                                                              class="field__input"></div>
                                            <div data-v-7f923647=""
                                                 class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex">
                                                <!----><!----></div><!----></div><!----></div>
                                </div>
                                <div data-v-2eb02792="" class="grid-column-12 grid-column-6--md">
                                    <div data-v-7f923647="" data-v-2eb02792="" data-vv-as=" " class="field"
                                         aria-required="false" aria-invalid="false">
                                        <div data-v-7f923647="" class="flex justify-between"><label
                                                data-v-7f923647="" for="input_zzv48knq"
                                                class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                                Новый финансовый пароль </label></div>
                                        <div data-v-7f923647="" class="relative">
                                            <div data-v-7f923647=""
                                                 class="field__input-wrapper flex items-center overflow-hidden">
                                                <!----><input data-v-7f923647="" name="password" id="input_zzv48knq" autocomplete=""
                                                              type="password" placeholder="Создать новый финансовый пароль"
                                                              class="field__input"></div>
                                            <div data-v-7f923647=""
                                                 class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex">
                                                <!----><!----></div><!----></div><!----></div>
                                </div>
                                <div data-v-2eb02792="" class="grid-column-12 grid-column-6--md">
                                    <div data-v-7f923647="" data-v-2eb02792="" data-vv-as=" " class="field">
                                        <div data-v-7f923647="" class="flex justify-between"><label
                                                data-v-7f923647="" for="input_k4akjwo6"
                                                class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                                Подтверждение финансового нового пароля </label></div>
                                        <div data-v-7f923647="" class="relative">
                                            <div data-v-7f923647=""
                                                 class="field__input-wrapper flex items-center overflow-hidden">
                                                <!----><input data-v-7f923647="" name="password_confirmation" id="input_k4akjwo6" autocomplete=""
                                                              type="password" placeholder="Подтвердите новый финансовый пароль"
                                                              class="field__input"></div>
                                            <div data-v-7f923647=""
                                                 class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex">
                                                <!----><!----></div><!----></div><!----></div>
                                </div>
                                <div data-v-2eb02792="" class="grid-column-12 grid-column-6--md">
                                    <button data-v-141d1a81="" data-v-2eb02792=""
                                            class="width-full button button--primary button--mini">
                                        <!----><span data-v-141d1a81="" class="button__content"><svg
                                                data-v-2eb02792="" data-v-141d1a81="" viewBox="0 0 18 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="height-1 fill-white margin-right-2"><path data-v-2eb02792=""
                                                                                                 data-v-141d1a81=""
                                                                                                 d="M1 0h14l2.707 2.707a1 1 0 01.293.707V17a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm3 1v5h9V1H4zM3 9v7h12V9H3zm7-7h2v3h-2V2z"
                                                                                                 fill="#fff"></path></svg> Сохранить </span>
                                    </button>
                                </div>
                            </form>
                            <form method="POST" action="{{ route('cabinet.ga.connect') }}" data-v-2eb02792="" class="padding-y-4">
                                @csrf
                                <strong data-v-2eb02792="" class="text-accent">
                                    Двухфакторная аутентификация
                                </strong>
                                <p data-v-2eb02792="" class="margin-y-2">
                                    Защитите свою учетную запись с помощью двухфакторной аутентификации.
                                    <a data-v-2eb02792="" href="https://www.google.com/landing/2step/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center font-medium">
                                        Узнать больше
                                        <svg data-v-2eb02792="" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 margin-left-2 fill-primary"><path data-v-2eb02792="" d="M7 3v2H2v11h11v-5h2v6a1 1 0 01-1 1H1a1 1 0 01-1-1V4a1 1 0 011-1h6zm11-3v8h-2V3.413l-7.793 7.794-1.414-1.414L14.585 2H10V0h8z"></path></svg>
                                    </a>
                                </p>
                                <ul data-v-2eb02792=""
                                    class="margin-y-4 padding-left-0 no-list grid grid-row-gap-3">
                                    <li data-v-2eb02792="" class="grid-column-12"><strong data-v-2eb02792=""
                                                                                          class="flex items-center font-medium">
                                            <svg data-v-2eb02792="" viewBox="0 0 20 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 class="height-1-5 fill-green margin-right-2 flex-no-shrink">
                                                <path data-v-2eb02792=""
                                                      d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm-.997-6l7.07-7.071-1.414-1.414-5.656 5.657-2.829-2.829L4.76 9.757 9.003 14z"></path>
                                            </svg>
                                            Новый уровень безопасности </strong>
                                        <p data-v-2eb02792="" class="margin-y-1 color-gray"> Большинство учетных
                                            записей защищены только паролем. Настройте двухэтапную аутентификацию и
                                            создайте новый барьер для злоумышленников! </p></li>
                                    <li data-v-2eb02792="" class="grid-column-12"><strong data-v-2eb02792=""
                                                                                          class="flex items-center font-medium">
                                            <svg data-v-2eb02792="" viewBox="0 0 20 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 class="height-1-5 fill-green margin-right-2 flex-no-shrink">
                                                <path data-v-2eb02792=""
                                                      d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm-.997-6l7.07-7.071-1.414-1.414-5.656 5.657-2.829-2.829L4.76 9.757 9.003 14z"></path>
                                            </svg>
                                            Надежная защитная комбинация </strong>
                                        <p data-v-2eb02792="" class="margin-y-1 color-gray"> Даже если мошенник
                                            узнает ваш пароль, он не сможет добраться до телефона или токена. </p>
                                    </li>
                                    <li data-v-2eb02792="" class="grid-column-12"><strong data-v-2eb02792=""
                                                                                          class="flex items-center font-medium">
                                            <svg data-v-2eb02792="" viewBox="0 0 20 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 class="height-1-5 fill-green margin-right-2 flex-no-shrink">
                                                <path data-v-2eb02792=""
                                                      d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm-.997-6l7.07-7.071-1.414-1.414-5.656 5.657-2.829-2.829L4.76 9.757 9.003 14z"></path>
                                            </svg>
                                            Уникальные коды для входа в личный кабинет </strong>
                                        <p data-v-2eb02792="" class="margin-y-1 color-gray"> Для входа в аккаунт
                                            avax-finance.com используется уникальный одноразовый код. Их можно получить с
                                            помощью установленного приложения Google authenticator. Для активации
                                            защиты вашего аккаунта, активируйте это функцию ниже. Вам потребуется
                                            считать QR Code после чего вам потребуется ввести код который
                                            предоставит вам приложение. Вы всегда сможете отключить данную функцию.
                                            Для повторного включения вам потребуется снова ее включить и ввести код,
                                            второй раз считывать QR Code не потребуется. Не теряйте устройство и не
                                            удаляйте приложения с него. В случае подобных проблем обращайтесь в
                                            администрацию компании Avax Finance. </p></li>
                                </ul>
                                <div data-v-2eb02792="" class="flex margin-y-3 border-rounded-3 overflow-hidden">
                                    <div data-v-2eb02792=""
                                         class="flex justify-center items-center width-4 padding-y-3 @if(auth()->user()->ga_secret) bg-green @else bg-orange @endif">
                                        <svg data-v-2eb02792="" viewBox="0 0 18 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg" class="height-1-5 fill-white">
                                            <path data-v-2eb02792="" fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M9 0L.783 1.826A1 1 0 000 2.802v9.988a6 6 0 002.672 4.991L9 22l6.328-4.219A6 6 0 0018 12.789V2.802a1 1 0 00-.783-.976L9 0zM8 5v6h2V5H8zm0 8v2h2v-2H8z"
                                                  fill="#fff"></path>
                                        </svg>
                                    </div>
                                    @if(auth()->user()->ga_secret)
                                    <div data-v-2eb02792="" class="flex items-center justify-between padding-x-3 padding-y-2 flex-grow bg-litest-gray">
                                        <div data-v-2eb02792="" class="flex-grow text-tight">
                                            <strong data-v-2eb02792=""> Двухфакторная аутентификация </strong>
                                            <div data-v-2eb02792="" class="font-medium font-sm color-orange">
                                                Активировано
                                            </div>
                                        </div>
                                        <div data-v-0e650d26="" data-v-2eb02792="" tabindex="0" class="checkbox-switch width-3 height-1-5 flex border-rounded-max relative cursor-pointer margin-left-3">
                                            <div data-v-0e650d26="" class="checkbox-switch__head border-round absolute bg-white"></div>
                                        </div>
                                    </div>
                                    @else
                                    <div data-v-2eb02792="" class="flex items-center justify-between padding-x-3 padding-y-2 flex-grow bg-litest-gray">
                                        <div data-v-2eb02792="" class="flex-grow text-tight">
                                            <strong data-v-2eb02792=""> Двухфакторная аутентификация </strong>
                                            <div data-v-2eb02792="" class="font-medium font-sm color-orange">
                                                Деактивировано
                                            </div>
                                        </div>
                                        <div data-v-0e650d26="" data-v-2eb02792="" tabindex="0"
                                             class="checkbox-switch width-3 height-1-5 flex border-rounded-max relative cursor-pointer margin-left-3">
                                            <div data-v-0e650d26=""
                                                 class="checkbox-switch__head border-round absolute bg-white"></div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                @if(! auth()->user()->ga_secret)
                                <div data-v-2eb02792="" class="flex margin-y-3">
                                    <img data-v-2eb02792="" src="{{ $qr }}" alt="SHB2YO4XO54KRIDM">
                                </div>
                                @endif
                                <ul class="errors grid-column-12 grid-column-6--xl grid-column-start-4--xl margin-bottom-2">
                                    @if(session()->has('ga_error'))
                                        <li>Одноразовый код введен неверно, попробуйте другой.</li>
                                    @endif
                                </ul>
                                <div data-v-2eb02792="" class="grid-column-12">
                                    <div data-v-7f923647="" data-v-2eb02792="" data-vv-as=" " class="field">
                                        <div data-v-7f923647="" class="flex justify-between">
                                            <label data-v-7f923647="" for="input_gvyx3rs8" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                                Одноразовый код
                                            </label>
                                        </div>
                                        <div data-v-7f923647="" class="relative">
                                            <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                                                <input data-v-7f923647="" name="code" id="input_gvyx3rs8" autocomplete="" type="password" placeholder="Введите код из приложения" class="field__input">
                                            </div>
                                            <div data-v-7f923647="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-2eb02792="" class="grid-column-12 grid-column-6--md mt-3">
                                    <button data-v-141d1a81="" data-v-2eb02792="" class="width-full button button--primary button--mini">
                                        <span data-v-141d1a81="" class="button__content">
                                            <svg data-v-2eb02792="" data-v-141d1a81="" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 fill-white margin-right-2"><path data-v-2eb02792="" data-v-141d1a81="" d="M1 0h14l2.707 2.707a1 1 0 01.293.707V17a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm3 1v5h9V1H4zM3 9v7h12V9H3zm7-7h2v3h-2V2z" fill="#fff"></path></svg>
                                            @if(! auth()->user()->ga_secret) Активировать @else Деактивировать @endif
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('old-content')
    <main class="page-content">
        <div class="page-content__content  user-page">
            @include('cabinet._navigation')
            <app-invest>
                <div class="user-page__main">
                    <section class="user-section fadeInUp" data-show-animation="fadeInUp">
                        <h2 class="user-section__title _marg-b g-fs-20">Изменить пароль для входа в личный кабинет</h2>
                        <form method="post" action="{{ route('cabinet.password.store') }}" class="form ng-untouched ng-pristine ng-invalid">
                            @csrf
                            <ul class="errors-list">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <div class="form__inputs-wrap">
                                <div class="form__input  _full  form-group">
                                    <label class="form-group__label">Ваш текущий пароль</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" name="old_password" type="password">
                                </div>
                                <div class="form__input  form-group">
                                    <label class="form-group__label">Новый пароль</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" name="password" type="password">
                                </div>
                                <div class="form__input  form-group">
                                    <label class="form-group__label">Подтвердите новый пароль</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" name="password_confirmation" type="password">
                                </div>
                            </div>
                            <div class="form__btns-wrap">
                                <button class="form__btn btn" style="min-width: 296rem">
                                    Изменить пароль
                                </button>
                            </div>
                        </form>
                    </section>
                </div>
            </app-invest>
        </div>
    </main>
@endsection

@section('old-content')
<td width="10px"></td>
<td align="left" style="vertical-align:top">
    @include('layouts._balance')

    <div class="ac-bals oper mt-3">
        <form method="post" action="{{ route('cabinet.password.store') }}" name="account/change_pass_frm">
            @csrf
            <fieldset style="border:none;">
                <center>
                    @foreach($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                    @if(session()->has('success'))
                        @lang('app.Пароль успешно изменен!')
                    @endif
                </center>
                <table class="formatTable mt-3">
                    <tbody>
                    <tr>
                        <td align="right" width="50%">
                            <label for="account/change_pass_frm_Pass0">
                                <span class="descr_req">
                                    @lang('app.Старый пароль') <span class="descr_star">*</span>
                                </span>
                            </label>
                        </td>
                        <td align="left">
                            <input name="old_password" id="account/change_pass_frm_Pass0" value="" size="20" type="password" class="password">
                        </td>
                    </tr>
                    <tr>
                        <td align="right" width="50%">
                            <label for="account/change_pass_frm_Pass">
                                <span class="descr_req">
                                    @lang('app.Новый пароль')<span class="descr_star">*</span>
                                </span>
                            </label>
                        </td>
                        <td align="left">
                            <input name="password" id="account/change_pass_frm_Pass" value="" size="20" type="password" class="password">
                        </td>
                    </tr>
                    <tr>
                        <td align="right" width="50%">
                            <label for="account/change_pass_frm_Pass2">
                                <span class="descr_req">@lang('app.Повторите новый пароль')<span class="descr_star">*</span>
                                </span>
                            </label>
                        </td>
                        <td align="left">
                            <input name="password_confirmation" id="account/change_pass_frm_Pass2" value="" size="20" type="password" class="password">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </fieldset>
            <input name="account/change_pass_frm_btn" value="@lang('app.Сменить')" type="submit" class="button-blue">
        </form>
    </div>
</td>
@endsection
