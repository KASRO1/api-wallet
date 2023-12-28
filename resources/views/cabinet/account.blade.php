@extends('layouts.app')

@section('title', 'Профиль')

@section('content')
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
        <div data-v-fd87438e="" class="flex--md shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg overflow-hidden">
            @include('cabinet._account-sidebar')
            <div data-v-fd87438e="" class="overflow-hidden flex-grow padding-3">
                <form method="POST" action="{{ route('cabinet.promocode') }}" enctype="multipart/form-data" data-v-fd87438e="" class="grid">
                    @csrf
                    <div data-v-fd87438e="" class="grid-column-12 grid-column-8--xl grid-column-start-3--xl padding-y-4">
                        <div data-v-5cd3e147="" data-v-fd87438e="">
                            <h1 data-v-5cd3e147="" class="flex items-center font-medium font-lg margin-y-0">
                                <div data-v-5cd3e147=""
                                     class="height-1-25 flex justify-center items-center flex-no-shrink margin-right-3">
                                    <svg data-v-5cd3e147="" viewBox="0 0 16 21" fill="none"
                                         xmlns="http://www.w3.org/2000/svg" class="height-full fill-default">
                                        <path data-v-5cd3e147=""
                                              d="M0 21a8 8 0 0116 0H0zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z"></path>
                                    </svg>
                                </div>
                                Личная информация
                            </h1>
                            <div data-v-5cd3e147="" class="grid grid-row-gap-4 grid-column-gap-4--md padding-y-4">
                                <ul class="errors grid-column-12 grid-column-6--xl grid-column-start-4--xl margin-bottom-2">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>

                                <div data-v-5cd3e147="" class="grid-column-12">
                                    <div data-v-7032d9db="" data-v-5cd3e147="" data-vv-as=" "
                                         class="field field--disabled">
                                        <div data-v-7032d9db="" class="flex justify-between">
                                            <label data-v-7032d9db="" for="input_kpv82w6u" class="field__label flex font-sm color-gray font-medium margin-bottom-1">Сменить аватарку (необязательно)</label>
                                        </div>
                                        <div data-v-7032d9db="" class="relative">
                                            <div data-v-7032d9db="" class="field__input-wrapper flex items-center overflow-hidden">
                                                <input name="avatar" @if($user->is_verified != 2) disabled @endif accept="image/png,image/jpeg" data-v-7032d9db="" id="input_kpv82w6u" autocomplete="" type="file" placeholder="" class="field__input"></div>
                                            <div data-v-7032d9db="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                        </div>
                                    </div>
                                </div>

                                <div data-v-5cd3e147="" class="grid-column-12 grid-column-6--md">
                                    <div data-v-7032d9db="" data-v-5cd3e147="" data-vv-as=" "
                                         class="field field--disabled">
                                        <div data-v-7032d9db="" class="flex justify-between">
                                            <label data-v-7032d9db="" for="input_kpv82w6u" class="field__label flex font-sm color-gray font-medium margin-bottom-1">Имя</label>
                                        </div>
                                        <div data-v-7032d9db="" class="relative">
                                            <div data-v-7032d9db="" class="field__input-wrapper flex items-center overflow-hidden">
                                                <input data-v-7032d9db="" id="input_kpv82w6u" autocomplete="" type="text" disabled="disabled" placeholder="" class="field__input" value="{{ $user->name }}"></div>
                                            <div data-v-7032d9db="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-5cd3e147="" class="grid-column-12 grid-column-6--md">
                                    <div data-v-7032d9db="" data-v-5cd3e147="" data-vv-as=" " class="field field--disabled">
                                        <div data-v-7032d9db="" class="flex justify-between">
                                            <label data-v-7032d9db="" for="input_ikmol0th" class="field__label flex font-sm color-gray font-medium margin-bottom-1">E-mail</label>
                                        </div>
                                        <div data-v-7032d9db="" class="relative">
                                            <div data-v-7032d9db="" class="field__input-wrapper flex items-center overflow-hidden">
                                                <input data-v-7032d9db="" id="input_ikmol0th" autocomplete="" type="text" disabled="disabled" placeholder="" value="{{ $user->email }}" class="field__input"></div>
                                            <div data-v-7032d9db="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-5cd3e147="" class="grid-column-12 grid-column-6--md">
                                    <div data-v-7032d9db="" data-v-5cd3e147="" data-vv-as=" " class="field field--preinput">
                                        <div data-v-7032d9db="" class="flex justify-between">
                                            <label data-v-7032d9db="" for="input_asplqz6l" class="field__label flex font-sm color-gray font-medium margin-bottom-1">Промокод</label>
                                        </div>
                                        <div data-v-7032d9db="" class="relative">
                                            <div data-v-7032d9db="" class="field__input-wrapper flex items-center overflow-hidden">
                                                <input data-v-7032d9db="" name="promocode" id="input_ikmol0th" autocomplete="" @if($user->promocode()->exists()) disabled @endif type="text" value="{{ optional($user->promocode)->code }}" placeholder="Введите промокод" class="field__input"></div>
                                            </div>
                                            <div data-v-7032d9db="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-5cd3e147="" class="grid-column-12 grid-column-6--md padding-top-3">
                                    <button data-v-141d1a81="" data-v-5cd3e147="" class="width-full button button--primary button--mini">
                                        <span data-v-141d1a81="" class="button__content">
                                            <svg data-v-5cd3e147="" data-v-141d1a81="" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 fill-white margin-right-2"><path data-v-5cd3e147="" data-v-141d1a81="" d="M1 0h14l2.707 2.707a1 1 0 01.293.707V17a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm3 1v5h9V1H4zM3 9v7h12V9H3zm7-7h2v3h-2V2z" fill="#fff"></path></svg>
                                            Сохранить
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
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
                    <section class="user-section invest-platform-info fadeInUp" data-show-animation="fadeInUp">
                        <div class="invest-platform-info__titles  titles">
                            <h2 class="titles__title">
                                <span class="g-text-light">Личные данные</span>
                            </h2>
                        </div>
                        <form method="post" action="{{ route('cabinet.promocode') }}" class="charge-form ng-untouched ng-invalid ng-dirty">
                            @csrf
                            <ul class="errors-list">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <div class="form__inputs-wrap">
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Последний вход с IP:</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" disabled value="{{ $user->last_login_ip }}" type="text">
                                </div>
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Время входа:</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" disabled value="{{ optional($user->last_login_time)->format('d.m.Y H:i:s') }}" type="text">
                                </div>
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Ваш e-mail:</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" disabled value="{{ $user->email }}" type="text">
                                </div>
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Реферальная ссылка:</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" disabled value="{{ route('register', ['code' => $user->code]) }}" type="text">
                                </div>
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Вас пригласил:</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" disabled value="{{ $user->invitedBy }}" type="text">
                                </div>
                                @if($user->promocode_id === null || $user->promocode_used == true)
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Введите промокод:</label>
                                    <input name="promocode" value="{{ old('promocode') }}" type="text" class="form-group__input ng-untouched ng-pristine ng-invalid">
                                </div>
                                @else
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Промокод:</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" disabled value="{{ $user->promocode->code }} - {{ $user->promocode->value }}%" type="text">
                                </div>
                                @endif
                            </div>
                            <div class="form__btns-wrap">
                                <button class="btn profile__btn">Сохранить</button>
                            </div>
                        </form>
                    </section>
                    @include('layouts._balance')
                </div>
            </app-invest>
        </div>
    </main>
@endsection
