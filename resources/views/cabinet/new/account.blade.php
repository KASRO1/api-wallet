@extends('layouts.cabinet')

@section('title', __("Account"))
@section('content')
@include('cabinet.new._header', ['user'=>$user])
<div class="container">
    <div class="row">
        <div class="col-12">
            <main class="flex flex-column flex-grow trans-0-3">
                <div data-v-fd87438e="" class="flex--md shadowed border-rounded-3 bg-white margin-top-5 margin-top-6--md margin-top-0--lg overflow-hidden">
                    @include('cabinet._account-sidebar')
                    <div data-v-fd87438e="" class="overflow-hidden flex-grow padding-3">
                        <form method="POST" action="{{ route('cabinet.promocode') }}" enctype="multipart/form-data" data-v-fd87438e="" class="grid">
                            @csrf
                            <div data-v-fd87438e="" class="grid-column-12 grid-column-8--xl grid-column-start-3--xl padding-y-4">
                                <div data-v-5cd3e147="" data-v-fd87438e="">
                                    <h1 data-v-5cd3e147="" class="flex items-center font-medium font-lg margin-y-0">
                                        <div data-v-5cd3e147="" class="height-1-25 flex justify-center items-center flex-no-shrink margin-right-3">
                                            <svg data-v-5cd3e147="" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-full fill-default">
                                                <path data-v-5cd3e147="" d="M0 21a8 8 0 0116 0H0zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z"></path>
                                            </svg>
                                        </div>
                                        {{__("Personal information")}}
                                    </h1>
                                    <div data-v-5cd3e147="" class="grid grid-row-gap-4 grid-column-gap-4--md padding-y-4">
                                        <ul class="errors grid-column-12 grid-column-6--xl grid-column-start-4--xl margin-bottom-2">
                                            @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>

                                        <div data-v-5cd3e147="" class="grid-column-12">
                                            <div data-v-7032d9db="" data-v-5cd3e147="" data-vv-as=" " class="field field--disabled">
                                                <div data-v-7032d9db="" class="flex justify-between">
                                                    <label data-v-7032d9db="" for="input_kpv82w6u" class="field__label flex font-sm color-gray font-medium margin-bottom-1">{{__("change photo")}}</label>
                                                </div>
                                                <div data-v-7032d9db="" class="relative">
                                                    <div data-v-7032d9db="" class="field__input-wrapper flex items-center overflow-hidden">
                                                        <input name="avatar" {{--                                                                   @if($user->is_verified != 2) disabled @endif--}} accept="image/png,image/jpeg" data-v-7032d9db="" id="input_kpv82w6u" autocomplete="" type="file" placeholder="" class="field__input">
                                                    </div>
                                                    <div data-v-7032d9db="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-v-5cd3e147="" class="grid-column-12 grid-column-6--md">
                                            <div data-v-7032d9db="" data-v-5cd3e147="" data-vv-as=" " class="field field--disabled">
                                                <div data-v-7032d9db="" class="flex justify-between">
                                                    <label data-v-7032d9db="" for="input_kpv82w6u" class="field__label flex font-sm color-gray font-medium margin-bottom-1">{{__("Name")}}</label>
                                                </div>
                                                <div data-v-7032d9db="" class="relative">
                                                    <div data-v-7032d9db="" class="field__input-wrapper flex items-center overflow-hidden">
                                                        <input data-v-7032d9db="" id="input_kpv82w6u" autocomplete="" type="text" disabled="disabled" placeholder="" class="field__input" value="{{ $user->name }}">
                                                    </div>
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
                                                        <input data-v-7032d9db="" id="input_ikmol0th" autocomplete="" type="text" disabled="disabled" placeholder="" value="{{ $user->email }}" class="field__input">
                                                    </div>
                                                    <div data-v-7032d9db="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-5cd3e147="" class="grid-column-12 grid-column-6--md">
                                            <div data-v-7032d9db="" data-v-5cd3e147="" data-vv-as=" " class="field field--preinput">
                                                <div data-v-7032d9db="" class="flex justify-between">
                                                    <label data-v-7032d9db="" for="input_asplqz6l" class="field__label flex font-sm color-gray font-medium margin-bottom-1">{{__("Promocode")}}</label>
                                                </div>
                                                <div data-v-7032d9db="" class="relative">
                                                    <div data-v-7032d9db="" class="field__input-wrapper flex items-center overflow-hidden">
                                                        <input data-v-7032d9db="" name="promocode" id="input_ikmol0th" autocomplete="" type="text" value="{{ optional($user->promocode)->code }}" placeholder="{{__('Enter promo code')}}" class="field__input">
                                                    </div>
                                                </div>
                                                <div data-v-7032d9db="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                            </div>
                                        </div>
                                        <div data-v-5cd3e147="" class="grid-column-12 grid-column-6--md">
                                            <div data-v-7032d9db="" data-v-5cd3e147="" data-vv-as=" " class="field field--preinput">
                                                <div data-v-7032d9db="" class="flex justify-between">
                                                    <label data-v-7032d9db="" for="input_asplqz6l" class="field__label flex font-sm color-gray font-medium margin-bottom-1">{{__("Invitation Code")}}</label>
                                                </div>
                                                <div data-v-7032d9db="" class="relative">
                                                    <div data-v-7032d9db="" class="field__input-wrapper flex items-center overflow-hidden">
                                                        <input data-v-7032d9db="" name="invitation_code" id="input_ikmol0th" autocomplete="" type="text" value="{{ optional($user->referal)->code }}" @if($user->referal) disabled @endif" placeholder="{{__('Enter invitation code')}}" class="field__input">
                                                    </div>
                                                </div>
                                                <div data-v-7032d9db="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-5cd3e147="" class="grid-column-12 grid-column-6--md padding-top-3">
                                        <button data-v-141d1a81="" data-v-5cd3e147="" class="width-full button button--primary button--mini">
                                            <span data-v-141d1a81="" class="button__content">
                                                <svg data-v-5cd3e147="" data-v-141d1a81="" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 fill-white margin-right-2">
                                                    <path data-v-5cd3e147="" data-v-141d1a81="" d="M1 0h14l2.707 2.707a1 1 0 01.293.707V17a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm3 1v5h9V1H4zM3 9v7h12V9H3zm7-7h2v3h-2V2z" fill="#fff"></path>
                                                </svg>
                                                {{__("Save")}}
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </main>

        </div>
    </div>
</div>
@endsection