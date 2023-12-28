@extends('layouts.cabinet')

@section('content')
    @include('cabinet.new._header', ['user'=>$user])

    <div class="container">
        <div class="row">
            <div class="col-12">
                <main class="flex flex-column flex-grow trans-0-3">
                    <div data-v-fd87438e=""
                         class="flex--md shadowed border-rounded-3 bg-white margin-top-5 margin-top-6--md margin-top-0--lg overflow-hidden">
                        @include('cabinet._account-sidebar')
                        <form method="POST" action="{{ route('cabinet.socials.store') }}" data-v-fd87438e="" class="overflow-hidden flex-grow padding-3">
                            @csrf
                            <div data-v-fd87438e="" class="grid">
                                <div data-v-fd87438e="" class="grid-column-12 grid-column-8--xl grid-column-start-3--xl padding-y-4">
                                    <div data-v-223536e6="" data-v-fd87438e="">
                                        <h1 data-v-223536e6="" class="flex items-center font-medium font-lg margin-y-0">
                                            <div data-v-223536e6="" class="height-1-25 flex justify-center items-center flex-no-shrink margin-right-3">
                                                <svg data-v-223536e6="" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-full fill-default"><path data-v-223536e6="" d="M11.576 15.271l-5.11-2.787a3.5 3.5 0 110-4.968l5.11-2.787a3.5 3.5 0 11.958 1.755l-5.11 2.787c.102.48.102.977 0 1.458l5.11 2.787a3.5 3.5 0 11-.958 1.755z"></path></svg>
                                            </div>
                                            Социальные профили
                                        </h1>
                                        <div data-v-223536e6="" class="grid grid-row-gap-4 grid-column-gap-4--md padding-y-4">
                                            <div data-v-223536e6="" class="grid-column-12 grid-column-6--md">
                                                <div data-v-7f923647="" data-v-223536e6="" data-vv-as=" "
                                                     class="field field--prefix">
                                                    <div data-v-7f923647="" class="flex justify-between"><label data-v-7f923647=""
                                                                                                                for="input_r9npltmj"
                                                                                                                class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                                            Facebook </label></div>
                                                    <div data-v-7f923647="" class="relative">
                                                        <div data-v-7f923647=""
                                                             class="field__input-wrapper flex items-center overflow-hidden">
                                                            <!----><input data-v-7f923647="" name="socials[facebook]" value="{{ $user->socials['facebook'] ?? null }}" id="input_r9npltmj" autocomplete="off"
                                                                          type="text" placeholder="Введите URL вашего профиля"
                                                                          class="field__input"></div>
                                                        <div data-v-7f923647=""
                                                             class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex">
                                                            <!----><!----></div>
                                                        <div data-v-7f923647=""
                                                             class="flex field__icon field__icon--prefix absolute top-0 bottom-0 margin-y-auto">
                                                            <svg data-v-223536e6="" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg" class="height-full">
                                                                <path data-v-223536e6=""
                                                                      d="M10 0C4.477 0 0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.879V12.89h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.989C16.343 19.129 20 14.99 20 10c0-5.523-4.477-10-10-10z"
                                                                      fill="#3B5999"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!----></div>
                                            </div>
                                            <div data-v-223536e6="" class="grid-column-12 grid-column-6--md">
                                                <div data-v-7f923647="" data-v-223536e6="" data-vv-as=" "
                                                     class="field field--prefix">
                                                    <div data-v-7f923647="" class="flex justify-between"><label data-v-7f923647=""
                                                                                                                for="input_edow7vrg"
                                                                                                                class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                                            Twitter </label></div>
                                                    <div data-v-7f923647="" class="relative">
                                                        <div data-v-7f923647=""
                                                             class="field__input-wrapper flex items-center overflow-hidden">
                                                            <!----><input data-v-7f923647="" name="socials[twitter]" value="{{ $user->socials['twitter'] ?? null }}" id="input_edow7vrg" autocomplete="off"
                                                                          type="text" placeholder="Введите URL вашего профиля"
                                                                          class="field__input"></div>
                                                        <div data-v-7f923647=""
                                                             class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex">
                                                            <!----><!----></div>
                                                        <div data-v-7f923647=""
                                                             class="flex field__icon field__icon--prefix absolute top-0 bottom-0 margin-y-auto">
                                                            <svg data-v-223536e6="" viewBox="0 0 22 18" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg" class="height-full">
                                                                <path data-v-223536e6=""
                                                                      d="M21.162 2.656a8.385 8.385 0 01-2.402.658A4.196 4.196 0 0020.6 1c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 00-7.126 3.814 11.874 11.874 0 01-8.62-4.37 4.168 4.168 0 00-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 01-1.894-.523v.052a4.185 4.185 0 003.355 4.101 4.211 4.211 0 01-1.89.072A4.185 4.185 0 006.97 13.65a8.395 8.395 0 01-6.19 1.732 11.83 11.83 0 006.409 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.497 8.497 0 002.087-2.165v-.001z"
                                                                      fill="#1DA1F2"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!----></div>
                                            </div>
                                            <div data-v-223536e6="" class="grid-column-12 grid-column-6--md">
                                                <div data-v-7f923647="" data-v-223536e6="" data-vv-as=" "
                                                     class="field field--prefix">
                                                    <div data-v-7f923647="" class="flex justify-between"><label data-v-7f923647=""
                                                                                                                for="input_nz55vfyp"
                                                                                                                class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                                            LinkedIn </label></div>
                                                    <div data-v-7f923647="" class="relative">
                                                        <div data-v-7f923647=""
                                                             class="field__input-wrapper flex items-center overflow-hidden">
                                                            <!----><input data-v-7f923647="" name="socials[linkedin]" value="{{ $user->socials['linkedin'] ?? null }}" id="input_nz55vfyp" autocomplete="off"
                                                                          type="text" placeholder="Введите URL вашего профиля"
                                                                          class="field__input"></div>
                                                        <div data-v-7f923647=""
                                                             class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex">
                                                            <!----><!----></div>
                                                        <div data-v-7f923647=""
                                                             class="flex field__icon field__icon--prefix absolute top-0 bottom-0 margin-y-auto">
                                                            <svg data-v-223536e6="" viewBox="0 0 20 18" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg" class="height-full">
                                                                <path data-v-223536e6=""
                                                                      d="M4.94 2a2 2 0 11-4-.002 2 2 0 014 .002zM5 5.48H1V18h4V5.48zm6.32 0H7.34V18h3.94v-6.57c0-3.66 4.77-4 4.77 0V18H20v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z"
                                                                      fill="#2867B2"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!----></div>
                                            </div>
                                            <div data-v-223536e6="" class="grid-column-12 grid-column-6--md">
                                                <div data-v-7f923647="" data-v-223536e6="" data-vv-as=" "
                                                     class="field field--prefix">
                                                    <div data-v-7f923647="" class="flex justify-between"><label data-v-7f923647=""
                                                                                                                for="input_2opisr7q"
                                                                                                                class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                                            Instagram </label></div>
                                                    <div data-v-7f923647="" class="relative">
                                                        <div data-v-7f923647=""
                                                             class="field__input-wrapper flex items-center overflow-hidden">
                                                            <!----><input data-v-7f923647="" name="socials[instagram]" value="{{ $user->socials['instagram'] ?? null }}" id="input_2opisr7q" autocomplete="off"
                                                                          type="text" placeholder="Введите URL вашего профиля"
                                                                          class="field__input"></div>
                                                        <div data-v-7f923647=""
                                                             class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex">
                                                            <!----><!----></div>
                                                        <div data-v-7f923647=""
                                                             class="flex field__icon field__icon--prefix absolute top-0 bottom-0 margin-y-auto">
                                                            <svg data-v-223536e6="" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg" class="height-full">
                                                                <path data-v-223536e6=""
                                                                      d="M10 0c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153.509.5.902 1.105 1.153 1.772.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 01-1.153 1.772c-.5.508-1.105.902-1.772 1.153-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 01-1.772-1.153A4.904 4.904 0 01.525 16.55C.277 15.913.11 15.187.06 14.122.013 13.056 0 12.717 0 10c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 011.153-1.772A4.897 4.897 0 013.45.525C4.088.277 4.812.11 5.878.06 6.944.013 7.283 0 10 0zm0 5a5 5 0 100 10 5 5 0 000-10zm6.5-.25a1.25 1.25 0 10-2.5 0 1.25 1.25 0 002.5 0zM10 7a3 3 0 110 6 3 3 0 010-6z"
                                                                      fill="#E1306C"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!----></div>
                                            </div>
                                            <div data-v-223536e6="" class="grid-column-12 grid-column-6--md">
                                                <div data-v-7f923647="" data-v-223536e6="" data-vv-as=" "
                                                     class="field field--prefix">
                                                    <div data-v-7f923647="" class="flex justify-between"><label data-v-7f923647=""
                                                                                                                for="input_fah9gu4e"
                                                                                                                class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                                            Viber </label></div>
                                                    <div data-v-7f923647="" class="relative">
                                                        <div data-v-7f923647=""
                                                             class="field__input-wrapper flex items-center overflow-hidden">
                                                            <!----><input data-v-7f923647="" name="socials[viber]" value="{{ $user->socials['viber'] ?? null }}" id="input_fah9gu4e" autocomplete="off"
                                                                          type="text" placeholder="Введите URL вашего профиля"
                                                                          class="field__input"></div>
                                                        <div data-v-7f923647=""
                                                             class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex">
                                                            <!----><!----></div>
                                                        <div data-v-7f923647=""
                                                             class="flex field__icon field__icon--prefix absolute top-0 bottom-0 margin-y-auto">
                                                            <svg data-v-223536e6="" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg" class="height-full">
                                                                <path data-v-223536e6="" fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M19.366 7.1a6.839 6.839 0 00-6.84-6.84H7.686A7.048 7.048 0 00.636 7.31v3.04a7.05 7.05 0 004.526 6.58v2.389a.684.684 0 00.68.681.685.685 0 00.516-.235l2.054-2.367h4.115a6.839 6.839 0 006.839-6.839v-3.46zm-11.263.453a.977.977 0 00.206-1.37l-1.03-1.385a.75.75 0 00-1.067-.142l-.604.474a1.437 1.437 0 00-.463 1.636 12.132 12.132 0 006.977 7.07 1.437 1.437 0 001.768-.626l.396-.695a.75.75 0 00-.233-.995l-1.262-.847a.977.977 0 00-1.376.297l-.118.192a.367.367 0 01-.513.114 10.466 10.466 0 01-3.032-3.037.366.366 0 01.094-.498c.08-.057.167-.121.257-.188zm6.23 1.41a.377.377 0 00.755 0 5.261 5.261 0 00-5.256-5.255.377.377 0 000 .754 4.506 4.506 0 014.502 4.502zm-.804.378a.377.377 0 01-.377-.377c0-1.83-1.49-3.32-3.32-3.32a.377.377 0 010-.754 4.078 4.078 0 014.074 4.074.377.377 0 01-.377.377zm-1.538-.377a.377.377 0 00.755 0A2.917 2.917 0 009.832 6.05a.377.377 0 000 .755c1.19 0 2.16.968 2.16 2.159z"
                                                                      fill="#6E64C3"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!----></div>
                                            </div>
                                            <div data-v-223536e6="" class="grid-column-12 grid-column-6--md">
                                                <div data-v-7f923647="" data-v-223536e6="" data-vv-as=" "
                                                     class="field field--prefix">
                                                    <div data-v-7f923647="" class="flex justify-between"><label data-v-7f923647=""
                                                                                                                for="input_h9687fmg"
                                                                                                                class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                                            Telegram </label></div>
                                                    <div data-v-7f923647="" class="relative">
                                                        <div data-v-7f923647=""
                                                             class="field__input-wrapper flex items-center overflow-hidden">
                                                            <!----><input data-v-7f923647="" name="socials[telegram]" value="{{ $user->socials['telegram'] ?? null }}" id="input_h9687fmg" autocomplete="off"
                                                                          type="text" placeholder="Введите URL вашего профиля"
                                                                          class="field__input"></div>
                                                        <div data-v-7f923647=""
                                                             class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex">
                                                            <!----><!----></div>
                                                        <div data-v-7f923647=""
                                                             class="flex field__icon field__icon--prefix absolute top-0 bottom-0 margin-y-auto">
                                                            <svg data-v-223536e6="" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg" class="height-full">
                                                                <path data-v-223536e6=""
                                                                      d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm-3.11-8.83l.013-.007.87 2.87c.112.311.266.367.453.341.188-.025.287-.126.41-.244l1.188-1.148 2.55 1.888c.466.257.801.124.917-.432l1.657-7.822c.183-.728-.137-1.02-.702-.788l-9.733 3.76c-.664.266-.66.638-.12.803l2.497.78v-.001z"
                                                                      fill="#2197D5"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!----></div>
                                            </div>
                                            <div data-v-223536e6="" class="grid-column-12 grid-column-6--md">
                                                <div data-v-7f923647="" data-v-223536e6="" data-vv-as=" "
                                                     class="field field--prefix">
                                                    <div data-v-7f923647="" class="flex justify-between"><label data-v-7f923647=""
                                                                                                                for="input_e4ob6qo7"
                                                                                                                class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                                            WhatsApp </label></div>
                                                    <div data-v-7f923647="" class="relative">
                                                        <div data-v-7f923647=""
                                                             class="field__input-wrapper flex items-center overflow-hidden">
                                                            <!----><input data-v-7f923647="" name="socials[whatsapp]" value="{{ $user->socials['whatsapp'] ?? null }}" id="input_e4ob6qo7" autocomplete="off"
                                                                          type="text" placeholder="Введите URL вашего профиля"
                                                                          class="field__input"></div>
                                                        <div data-v-7f923647=""
                                                             class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex">
                                                            <!----><!----></div>
                                                        <div data-v-7f923647=""
                                                             class="flex field__icon field__icon--prefix absolute top-0 bottom-0 margin-y-auto">
                                                            <svg data-v-223536e6="" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg" class="height-full">
                                                                <path data-v-223536e6=""
                                                                      d="M.004 20l1.352-4.968A9.954 9.954 0 010 10C0 4.477 4.477 0 10 0s10 4.477 10 10-4.477 10-10 10a9.953 9.953 0 01-5.03-1.355L.004 20zM6.391 5.308a.961.961 0 00-.371.1 1.293 1.293 0 00-.294.228c-.12.113-.188.211-.261.306A2.729 2.729 0 004.9 7.62c.002.49.13.967.33 1.413.409.902 1.082 1.857 1.971 2.742.214.213.423.427.648.626a9.448 9.448 0 003.84 2.046l.569.087c.185.01.37-.004.556-.013a1.99 1.99 0 00.833-.231 4.83 4.83 0 00.383-.22s.043-.028.125-.09c.135-.1.218-.171.33-.288.083-.086.155-.187.21-.302.078-.163.156-.474.188-.733.024-.198.017-.306.014-.373-.004-.107-.093-.218-.19-.265l-.582-.261s-.87-.379-1.401-.621a.498.498 0 00-.177-.041.482.482 0 00-.378.127v-.002c-.005 0-.072.057-.795.933a.35.35 0 01-.368.13 1.418 1.418 0 01-.191-.066c-.124-.052-.167-.072-.252-.109l-.005-.002a6.012 6.012 0 01-1.57-1c-.126-.11-.243-.23-.363-.346a6.297 6.297 0 01-1.02-1.268l-.059-.095a.923.923 0 01-.102-.205c-.038-.147.061-.265.061-.265s.243-.266.356-.41c.094-.12.182-.244.263-.373.118-.19.155-.385.093-.536-.28-.684-.57-1.365-.868-2.041-.059-.134-.234-.23-.393-.249a4.439 4.439 0 00-.162-.016 3.385 3.385 0 00-.403.004v.001z"
                                                                      fill="#4AC959"></path>
                                                            </svg>
                                                        </div>
                                                    </div><!----></div>
                                            </div>
                                            <div data-v-223536e6="" class="grid-column-12 grid-column-6--md">
                                                <div data-v-7f923647="" data-v-223536e6="" data-vv-as=" " class="field field--prefix">
                                                    <div data-v-7f923647="" class="flex justify-between">
                                                        <label data-v-7f923647="" for="input_6m87uhee" class="field__label flex font-sm color-gray font-medium margin-bottom-1">VK</label>
                                                    </div>
                                                    <div data-v-7f923647="" class="relative">
                                                        <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                                                            <input data-v-7f923647="" name="socials[vk]" value="{{ $user->socials['vk'] ?? null }}" id="input_6m87uhee" autocomplete="off" type="text" placeholder="Введите URL вашего профиля" class="field__input"></div>
                                                        <div data-v-7f923647="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                                        <div data-v-7f923647="" class="flex field__icon field__icon--prefix absolute top-0 bottom-0 margin-y-auto">
                                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/VK.com-logo.svg/2048px-VK.com-logo.svg.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-v-223536e6="" class="grid-column-12 grid-column-6--md padding-top-3">
                                                <button data-v-141d1a81="" data-v-223536e6="" class="width-full button button--primary button--mini">
                                    <span data-v-141d1a81="" class="button__content">
                                        <svg data-v-223536e6="" data-v-141d1a81="" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 fill-white margin-right-2"><path data-v-223536e6="" data-v-141d1a81="" d="M1 0h14l2.707 2.707a1 1 0 01.293.707V17a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm3 1v5h9V1H4zM3 9v7h12V9H3zm7-7h2v3h-2V2z" fill="#fff"></path></svg>
                                        Сохранить
                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>

            </div>
        </div>
    </div>
@endsection
