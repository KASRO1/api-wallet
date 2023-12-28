@extends('layouts.front_app')

@section('content')
<main class="flex flex-column flex-grow trans-margin-left trans-0-3">
    <div id="shares-guest">
        <div
            class="padding-top-6 padding-bottom-5 bg-no-repeat bg-center bg-cover shares-guest__bg color-white relative">
            <div class="grid box">
                <div class="grid-column-12"><h1
                        class="shares-guest__title margin-top-4 margin-bottom-0 font-normal font-4xl text-tight">
                        Время, оставшееся до IPO </h1>
                    <h2 class="shares-guest__subtitle margin-top-0 margin-bottom-4 font-normal font-4xl text-tight">
                        Avax Message </h2>
                    <p> Время до закрытия IPO: </p>
                    @php
                    $diff = \Carbon\Carbon::parse('2022-12-15')->diff(now());
                    @endphp

                    <div class="flex flex-column items-start justify-center">
                        <div data-v-98868d82="" class="timer_wrapper shares-actions--timer grey-6">
                            <div data-v-98868d82="" class="descriptions-slot">
                                <div data-v-98868d82="" class="descriptions-slot__numbers">
                                    @foreach(str_split($diff->days) as $day)
                                    <span data-v-98868d82="" data-label="days" class="hours timer_wrapper-number grey-4 violet-5-text">
                                        {{ $day }}
                                    </span>
                                    @endforeach
                                </div>
                                <div data-v-98868d82="" class="shares-actions--timer-text flex-grow">дней</div>
                            </div>
                            <span data-v-98868d82="" class="minutes timer_wrapper-dots violet-5-text violet-5-text">:</span>
                            <div data-v-98868d82="" class="descriptions-slot">
                                <div data-v-98868d82="" class="descriptions-slot__numbers">
                                    @foreach(str_split(sprintf('%02d', $diff->h)) as $hour)
                                    <span data-v-98868d82="" data-label="hours" class="hours timer_wrapper-number grey-4 violet-5-text">
                                        {{ $hour }}
                                    </span>
                                    @endforeach
                                </div>
                                <div data-v-98868d82="" class="shares-actions--timer-text flex-grow">Часы</div>
                            </div>
                            <span data-v-98868d82="" class="minutes timer_wrapper-dots violet-5-text violet-5-text">:</span>
                            <div data-v-98868d82="" class="descriptions-slot">
                                <div data-v-98868d82="" class="descriptions-slot__numbers">
                                    @foreach(str_split(sprintf('%02d', $diff->i)) as $minute)
                                    <span data-v-98868d82="" data-label="minutes" class="minutes timer_wrapper-number grey-4 violet-5-text">
                                        {{ $minute }}
                                    </span>
                                    @endforeach
                                </div>
                                <div data-v-98868d82="" class="shares-actions--timer-text flex-grow">Мин.</div>
                            </div>
                            <span data-v-98868d82="" class="seconds timer_wrapper-dots violet-5-text violet-5-text">:</span>
                            <div data-v-98868d82="" class="descriptions-slot">
                                <div data-v-98868d82="" class="descriptions-slot__numbers"><span data-v-98868d82=""
                                                                                                 data-label="seconds"
                                                                                                 class="seconds timer_wrapper-number grey-4 violet-5-text">1</span><span
                                        data-v-98868d82=""
                                        class="seconds timer_wrapper-number grey-4 violet-5-text">9</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="padding-y-4 padding-y-6--md">
            <div class="grid box">
                <div class="grid-column-12 grid-column-6--lg">
                    <h1 class="title">Что такое Avax Message?</h1>
                    <div class="grid margin-y-4">
                        <div class="grid-column-12 grid-column-6--md">
                            <div class="flex flex-column padding-y-4--md padding-y-3 padding-right-3">
                                <svg width="16" height="12" fill="none" xmlns="http://www.w3.org/2000/svg" class=""><path fill-rule="evenodd" clip-rule="evenodd" d="M15.12 2.772L5.893 12 .586 6.693l2.772-2.772 2.535 2.534L12.348 0l2.772 2.772z" fill="#569A21"></path></svg>
                                <div class="margin-top-2 text-upper color-black">
                                    Синхронизация с компанией Avax Finance
                                </div>
                            </div>
                        </div>
                        <div class="grid-column-12 grid-column-6--md">
                            <div class="flex flex-column padding-y-4--md padding-y-3 padding-right-3">
                                <svg width="16" height="12" fill="none" xmlns="http://www.w3.org/2000/svg" class=""><path fill-rule="evenodd" clip-rule="evenodd" d="M15.12 2.772L5.893 12 .586 6.693l2.772-2.772 2.535 2.534L12.348 0l2.772 2.772z" fill="#569A21"></path></svg>
                                <div class="margin-top-2 text-upper color-black">
                                    Отправка и получение средств не выходя из заявки
                                </div>
                            </div>
                        </div>
                        <div class="grid-column-12 grid-column-6--md">
                            <div class="flex flex-column padding-y-4--md padding-y-3 padding-right-3">
                                <svg width="16" height="12" fill="none" xmlns="http://www.w3.org/2000/svg" class=""><path fill-rule="evenodd" clip-rule="evenodd" d="M15.12 2.772L5.893 12 .586 6.693l2.772-2.772 2.535 2.534L12.348 0l2.772 2.772z" fill="#569A21"></path></svg>
                                <div class="margin-top-2 text-upper color-black">
                                    Платежная система всегда у вас в телефоне
                                </div>
                            </div>
                        </div>
                        <div class="grid-column-12 grid-column-6--md">
                            <div class="flex flex-column padding-y-4--md padding-y-3 padding-right-3">
                                <svg width="16" height="12" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.12 2.772L5.893 12 .586 6.693l2.772-2.772 2.535 2.534L12.348 0l2.772 2.772z"
                                          fill="#569A21"></path>
                                </svg>
                                <div class="margin-top-2 text-upper color-black">Гибкие настройки уведомлений от
                                    Avax Finance
                                </div>
                            </div>
                        </div>
                        <div class="grid-column-12 grid-column-6--md">
                            <div class="flex flex-column padding-y-4--md padding-y-3 padding-right-3">
                                <svg width="16" height="12" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.12 2.772L5.893 12 .586 6.693l2.772-2.772 2.535 2.534L12.348 0l2.772 2.772z"
                                          fill="#569A21"></path>
                                </svg>
                                <div class="margin-top-2 text-upper color-black">Всегда будьте в курсе всех
                                    последних новостей компании
                                </div>
                            </div>
                        </div>
                        <div class="grid-column-12 grid-column-6--md">
                            <div class="flex flex-column padding-y-4--md padding-y-3 padding-right-3">
                                <svg width="16" height="12" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.12 2.772L5.893 12 .586 6.693l2.772-2.772 2.535 2.534L12.348 0l2.772 2.772z"
                                          fill="#569A21"></path>
                                </svg>
                                <div class="margin-top-2 text-upper color-black">Интеграция контактов с возможностью
                                    использования функции простого мессенджера, без привязки к сайту avax-finance.com
                                </div>
                            </div>
                        </div>
                        <div class="grid-column-12 grid-column-6--md">
                            <div class="flex flex-column padding-y-4--md padding-y-3 padding-right-3">
                                <svg width="16" height="12" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.12 2.772L5.893 12 .586 6.693l2.772-2.772 2.535 2.534L12.348 0l2.772 2.772z"
                                          fill="#569A21"></path>
                                </svg>
                                <div class="margin-top-2 text-upper color-black">Делитесь фотографиями и файлами с
                                    друзьями
                                </div>
                            </div>
                        </div>
                        <div class="grid-column-12 grid-column-6--md">
                            <div class="flex flex-column padding-y-4--md padding-y-3 padding-right-3">
                                <svg width="16" height="12" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.12 2.772L5.893 12 .586 6.693l2.772-2.772 2.535 2.534L12.348 0l2.772 2.772z"
                                          fill="#569A21"></path>
                                </svg>
                                <div class="margin-top-2 text-upper color-black">Удобство и простота использования</div>
                            </div>
                        </div>
                    </div>
            </div>

                <div class="grid-column-12 grid-column-6--lg flex">
                    <div class="shares-guest__why--video">
                        <img src="/img/AM2.png" style="width: 60%" style="height: 60%">
                    </div>
                </div>
        </div>
        <div class="shares-guest__why bg-cover bg-center padding-y-4 padding-y-6--md">
            <div class="grid box revert-mobile">
                <div class="grid-column-12 grid-column-6--lg flex">
                    <div class="shares-guest__why--video">
                        <img src="/img/AM1.png" style="width: 105%" style="height: 105%">

                    </div>
                </div>
                <div class="grid-column-12 grid-column-6--lg padding-x-4 flex flex-column justify-center"><h1
                        class="title">Почему Avax Message</h1>
                    <p>Уникальность нашего приложения в том, что к нашему бизнесу ежедневно подключается огромное
                        количество партнеров, а значит, количество пользователей мессенджера растет. Соответственно,
                        спрос будет большим. Нам не нужно делать дополнительную рекламу. Клиенты автоматически
                        начинают пользоваться мессенджером после регистрации на сайте компании. Сейчас мы выходим на
                        новый уровень и выпускаем собственный продукт под брендом Avax. У вас есть уникальная
                        возможность инвестировать в него и получать еще больше прибыли, сотрудничая с нами. Движение
                        к цели вместе с нашей сплоченной командой Avax Finance принесет вам гарантированный успех.</p>
                    <div class="flex"><a data-v-141d1a81="" href="https://avax-finance.com/register" class="button button--primary">
                            <!----><span data-v-141d1a81=""
                                         class="button__content"> ИНВЕСТИРОВАТЬ В AVAX MESSAGE</span></a></div>
                </div>
            </div>
        </div>
        <div class="padding-y-4 padding-y-6--md relative">
            <div class="font-normal margin-y-0 font-4xl--md text-center">История Avax Message</div>
            <svg viewBox="0 0 115 115" fill="none" xmlns="http://www.w3.org/2000/svg"
                 class="shares-guest__roadmap--p1">
                <path fill="#C8CAD4"
                      d="M14.243 0l.707.707-4.243 4.243L10 4.243zM24.243 0l.707.707-4.243 4.243L20 4.243zM34.243 0l.707.707-4.243 4.243L30 4.243zM4.243 10l.707.707L.707 14.95 0 14.243zM14.243 10l.707.707-4.243 4.243-.707-.707zM24.243 10l.707.707-4.243 4.243-.707-.707zM34.243 10l.707.707-4.243 4.243-.707-.707zM4.243 20l.707.707L.707 24.95 0 24.243zM14.243 20l.707.707-4.243 4.243-.707-.707zM24.243 20l.707.707-4.243 4.243-.707-.707zM34.243 20l.707.707-4.243 4.243-.707-.707zM4.243 30l.707.707L.707 34.95 0 34.243zM14.243 30l.707.707-4.243 4.243-.707-.707zM24.243 30l.707.707-4.243 4.243-.707-.707zM34.243 30l.707.707-4.243 4.243-.707-.707zM4.243 0l.707.707L.707 4.95 0 4.243zM54.243 0l.707.707-4.243 4.243L50 4.243zM64.243 0l.707.707-4.243 4.243L60 4.243zM74.243 0l.707.707-4.243 4.243L70 4.243zM44.243 10l.707.707-4.243 4.243-.707-.707zM54.243 10l.707.707-4.243 4.243-.707-.707zM64.243 10l.707.707-4.243 4.243-.707-.707zM74.243 10l.707.707-4.243 4.243-.707-.707zM44.243 20l.707.707-4.243 4.243-.707-.707zM54.243 20l.707.707-4.243 4.243-.707-.707zM64.243 20l.707.707-4.243 4.243-.707-.707zM74.243 20l.707.707-4.243 4.243-.707-.707zM44.243 30l.707.707-4.243 4.243-.707-.707zM54.243 30l.707.707-4.243 4.243-.707-.707zM64.243 30l.707.707-4.243 4.243-.707-.707zM74.243 30l.707.707-4.243 4.243-.707-.707zM44.243 0l.707.707-4.243 4.243L40 4.243zM94.243 0l.707.707-4.243 4.243L90 4.243zM104.243 0l.707.707-4.243 4.243-.707-.707zM114.243 0l.707.707-4.243 4.243-.707-.707zM84.243 10l.707.707-4.243 4.243-.707-.707zM94.243 10l.707.707-4.243 4.243-.707-.707zM104.243 10l.707.707-4.243 4.243-.707-.707zM114.243 10l.707.707-4.243 4.243-.707-.707zM84.243 20l.707.707-4.243 4.243-.707-.707zM94.243 20l.707.707-4.243 4.243-.707-.707zM104.243 20l.707.707-4.243 4.243-.707-.707zM114.243 20l.707.707-4.243 4.243-.707-.707zM84.243 30l.707.707-4.243 4.243-.707-.707zM94.243 30l.707.707-4.243 4.243-.707-.707zM104.243 30l.707.707-4.243 4.243-.707-.707zM114.243 30l.707.707-4.243 4.243-.707-.707zM84.243 0l.707.707-4.243 4.243L80 4.243zM14.243 40l.707.707-4.243 4.243-.707-.707zM24.243 40l.707.707-4.243 4.243-.707-.707zM34.243 40l.707.707-4.243 4.243-.707-.707zM4.243 50l.707.707L.707 54.95 0 54.243zM14.243 50l.707.707-4.243 4.243-.707-.707zM24.243 50l.707.707-4.243 4.243-.707-.707zM34.243 50l.707.707-4.243 4.243-.707-.707zM4.243 60l.707.707L.707 64.95 0 64.243zM14.243 60l.707.707-4.243 4.243-.707-.707zM24.243 60l.707.707-4.243 4.243-.707-.707zM34.243 60l.707.707-4.243 4.243-.707-.707zM4.243 70l.707.707L.707 74.95 0 74.243zM14.243 70l.707.707-4.243 4.243-.707-.707zM24.243 70l.707.707-4.243 4.243-.707-.707zM34.243 70l.707.707-4.243 4.243-.707-.707zM4.243 40l.707.707L.707 44.95 0 44.243zM54.243 40l.707.707-4.243 4.243-.707-.707zM64.243 40l.707.707-4.243 4.243-.707-.707zM74.243 40l.707.707-4.243 4.243-.707-.707zM44.243 50l.707.707-4.243 4.243-.707-.707zM54.243 50l.707.707-4.243 4.243-.707-.707zM64.243 50l.707.707-4.243 4.243-.707-.707zM74.243 50l.707.707-4.243 4.243-.707-.707zM44.243 60l.707.707-4.243 4.243-.707-.707zM54.243 60l.707.707-4.243 4.243-.707-.707zM64.243 60l.707.707-4.243 4.243-.707-.707zM74.243 60l.707.707-4.243 4.243-.707-.707zM44.243 70l.707.707-4.243 4.243-.707-.707zM54.243 70l.707.707-4.243 4.243-.707-.707zM64.243 70l.707.707-4.243 4.243-.707-.707zM74.243 70l.707.707-4.243 4.243-.707-.707zM44.243 40l.707.707-4.243 4.243-.707-.707zM94.243 40l.707.707-4.243 4.243-.707-.707zM104.243 40l.707.707-4.243 4.243-.707-.707zM114.243 40l.707.707-4.243 4.243-.707-.707zM84.243 50l.707.707-4.243 4.243-.707-.707zM94.243 50l.707.707-4.243 4.243-.707-.707zM104.243 50l.707.707-4.243 4.243-.707-.707zM114.243 50l.707.707-4.243 4.243-.707-.707zM84.243 60l.707.707-4.243 4.243-.707-.707zM94.243 60l.707.707-4.243 4.243-.707-.707zM104.243 60l.707.707-4.243 4.243-.707-.707zM114.243 60l.707.707-4.243 4.243-.707-.707zM84.243 70l.707.707-4.243 4.243-.707-.707zM94.243 70l.707.707-4.243 4.243-.707-.707zM104.243 70l.707.707-4.243 4.243-.707-.707zM114.243 70l.707.707-4.243 4.243-.707-.707zM84.243 40l.707.707-4.243 4.243-.707-.707zM14.243 80l.707.707-4.243 4.243-.707-.707zM24.243 80l.707.707-4.243 4.243-.707-.707zM34.243 80l.707.707-4.243 4.243-.707-.707zM4.243 90l.707.707L.707 94.95 0 94.243zM14.243 90l.707.707-4.243 4.243-.707-.707zM24.243 90l.707.707-4.243 4.243-.707-.707zM34.243 90l.707.707-4.243 4.243-.707-.707zM4.243 100l.707.707-4.243 4.243-.707-.707zM14.243 100l.707.707-4.243 4.243-.707-.707zM24.243 100l.707.707-4.243 4.243-.707-.707zM34.243 100l.707.707-4.243 4.243-.707-.707zM4.243 110l.707.707-4.243 4.243-.707-.707zM14.243 110l.707.707-4.243 4.243-.707-.707zM24.243 110l.707.707-4.243 4.243-.707-.707zM34.243 110l.707.707-4.243 4.243-.707-.707zM4.243 80l.707.707L.707 84.95 0 84.243zM54.243 80l.707.707-4.243 4.243-.707-.707zM64.243 80l.707.707-4.243 4.243-.707-.707zM74.243 80l.707.707-4.243 4.243-.707-.707zM44.243 90l.707.707-4.243 4.243-.707-.707zM54.243 90l.707.707-4.243 4.243-.707-.707zM64.243 90l.707.707-4.243 4.243-.707-.707zM74.243 90l.707.707-4.243 4.243-.707-.707zM44.243 100l.707.707-4.243 4.243-.707-.707zM54.243 100l.707.707-4.243 4.243-.707-.707zM64.243 100l.707.707-4.243 4.243-.707-.707zM74.243 100l.707.707-4.243 4.243-.707-.707zM44.243 110l.707.707-4.243 4.243-.707-.707zM54.243 110l.707.707-4.243 4.243-.707-.707zM64.243 110l.707.707-4.243 4.243-.707-.707zM74.243 110l.707.707-4.243 4.243-.707-.707zM44.243 80l.707.707-4.243 4.243-.707-.707zM94.243 80l.707.707-4.243 4.243-.707-.707zM104.243 80l.707.707-4.243 4.243-.707-.707zM114.243 80l.707.707-4.243 4.243-.707-.707zM84.243 90l.707.707-4.243 4.243-.707-.707zM94.243 90l.707.707-4.243 4.243-.707-.707zM104.243 90l.707.707-4.243 4.243-.707-.707zM114.243 90l.707.707-4.243 4.243-.707-.707zM84.243 100l.707.707-4.243 4.243-.707-.707zM94.243 100l.707.707-4.243 4.243-.707-.707zM104.243 100l.707.707-4.243 4.243-.707-.707zM114.243 100l.707.707-4.243 4.243-.707-.707zM84.243 110l.707.707-4.243 4.243-.707-.707zM94.243 110l.707.707-4.243 4.243-.707-.707zM104.243 110l.707.707-4.243 4.243-.707-.707zM114.243 110l.707.707-4.243 4.243-.707-.707zM84.243 80l.707.707-4.243 4.243-.707-.707z"></path>
            </svg>
            <svg viewBox="0 0 115 115" fill="none" xmlns="http://www.w3.org/2000/svg"
                 class="shares-guest__roadmap--p2">
                <path fill="#C8CAD4"
                      d="M14.243 0l.707.707-4.243 4.243L10 4.243zM24.243 0l.707.707-4.243 4.243L20 4.243zM34.243 0l.707.707-4.243 4.243L30 4.243zM4.243 10l.707.707L.707 14.95 0 14.243zM14.243 10l.707.707-4.243 4.243-.707-.707zM24.243 10l.707.707-4.243 4.243-.707-.707zM34.243 10l.707.707-4.243 4.243-.707-.707zM4.243 20l.707.707L.707 24.95 0 24.243zM14.243 20l.707.707-4.243 4.243-.707-.707zM24.243 20l.707.707-4.243 4.243-.707-.707zM34.243 20l.707.707-4.243 4.243-.707-.707zM4.243 30l.707.707L.707 34.95 0 34.243zM14.243 30l.707.707-4.243 4.243-.707-.707zM24.243 30l.707.707-4.243 4.243-.707-.707zM34.243 30l.707.707-4.243 4.243-.707-.707zM4.243 0l.707.707L.707 4.95 0 4.243zM54.243 0l.707.707-4.243 4.243L50 4.243zM64.243 0l.707.707-4.243 4.243L60 4.243zM74.243 0l.707.707-4.243 4.243L70 4.243zM44.243 10l.707.707-4.243 4.243-.707-.707zM54.243 10l.707.707-4.243 4.243-.707-.707zM64.243 10l.707.707-4.243 4.243-.707-.707zM74.243 10l.707.707-4.243 4.243-.707-.707zM44.243 20l.707.707-4.243 4.243-.707-.707zM54.243 20l.707.707-4.243 4.243-.707-.707zM64.243 20l.707.707-4.243 4.243-.707-.707zM74.243 20l.707.707-4.243 4.243-.707-.707zM44.243 30l.707.707-4.243 4.243-.707-.707zM54.243 30l.707.707-4.243 4.243-.707-.707zM64.243 30l.707.707-4.243 4.243-.707-.707zM74.243 30l.707.707-4.243 4.243-.707-.707zM44.243 0l.707.707-4.243 4.243L40 4.243zM94.243 0l.707.707-4.243 4.243L90 4.243zM104.243 0l.707.707-4.243 4.243-.707-.707zM114.243 0l.707.707-4.243 4.243-.707-.707zM84.243 10l.707.707-4.243 4.243-.707-.707zM94.243 10l.707.707-4.243 4.243-.707-.707zM104.243 10l.707.707-4.243 4.243-.707-.707zM114.243 10l.707.707-4.243 4.243-.707-.707zM84.243 20l.707.707-4.243 4.243-.707-.707zM94.243 20l.707.707-4.243 4.243-.707-.707zM104.243 20l.707.707-4.243 4.243-.707-.707zM114.243 20l.707.707-4.243 4.243-.707-.707zM84.243 30l.707.707-4.243 4.243-.707-.707zM94.243 30l.707.707-4.243 4.243-.707-.707zM104.243 30l.707.707-4.243 4.243-.707-.707zM114.243 30l.707.707-4.243 4.243-.707-.707zM84.243 0l.707.707-4.243 4.243L80 4.243zM14.243 40l.707.707-4.243 4.243-.707-.707zM24.243 40l.707.707-4.243 4.243-.707-.707zM34.243 40l.707.707-4.243 4.243-.707-.707zM4.243 50l.707.707L.707 54.95 0 54.243zM14.243 50l.707.707-4.243 4.243-.707-.707zM24.243 50l.707.707-4.243 4.243-.707-.707zM34.243 50l.707.707-4.243 4.243-.707-.707zM4.243 60l.707.707L.707 64.95 0 64.243zM14.243 60l.707.707-4.243 4.243-.707-.707zM24.243 60l.707.707-4.243 4.243-.707-.707zM34.243 60l.707.707-4.243 4.243-.707-.707zM4.243 70l.707.707L.707 74.95 0 74.243zM14.243 70l.707.707-4.243 4.243-.707-.707zM24.243 70l.707.707-4.243 4.243-.707-.707zM34.243 70l.707.707-4.243 4.243-.707-.707zM4.243 40l.707.707L.707 44.95 0 44.243zM54.243 40l.707.707-4.243 4.243-.707-.707zM64.243 40l.707.707-4.243 4.243-.707-.707zM74.243 40l.707.707-4.243 4.243-.707-.707zM44.243 50l.707.707-4.243 4.243-.707-.707zM54.243 50l.707.707-4.243 4.243-.707-.707zM64.243 50l.707.707-4.243 4.243-.707-.707zM74.243 50l.707.707-4.243 4.243-.707-.707zM44.243 60l.707.707-4.243 4.243-.707-.707zM54.243 60l.707.707-4.243 4.243-.707-.707zM64.243 60l.707.707-4.243 4.243-.707-.707zM74.243 60l.707.707-4.243 4.243-.707-.707zM44.243 70l.707.707-4.243 4.243-.707-.707zM54.243 70l.707.707-4.243 4.243-.707-.707zM64.243 70l.707.707-4.243 4.243-.707-.707zM74.243 70l.707.707-4.243 4.243-.707-.707zM44.243 40l.707.707-4.243 4.243-.707-.707zM94.243 40l.707.707-4.243 4.243-.707-.707zM104.243 40l.707.707-4.243 4.243-.707-.707zM114.243 40l.707.707-4.243 4.243-.707-.707zM84.243 50l.707.707-4.243 4.243-.707-.707zM94.243 50l.707.707-4.243 4.243-.707-.707zM104.243 50l.707.707-4.243 4.243-.707-.707zM114.243 50l.707.707-4.243 4.243-.707-.707zM84.243 60l.707.707-4.243 4.243-.707-.707zM94.243 60l.707.707-4.243 4.243-.707-.707zM104.243 60l.707.707-4.243 4.243-.707-.707zM114.243 60l.707.707-4.243 4.243-.707-.707zM84.243 70l.707.707-4.243 4.243-.707-.707zM94.243 70l.707.707-4.243 4.243-.707-.707zM104.243 70l.707.707-4.243 4.243-.707-.707zM114.243 70l.707.707-4.243 4.243-.707-.707zM84.243 40l.707.707-4.243 4.243-.707-.707zM14.243 80l.707.707-4.243 4.243-.707-.707zM24.243 80l.707.707-4.243 4.243-.707-.707zM34.243 80l.707.707-4.243 4.243-.707-.707zM4.243 90l.707.707L.707 94.95 0 94.243zM14.243 90l.707.707-4.243 4.243-.707-.707zM24.243 90l.707.707-4.243 4.243-.707-.707zM34.243 90l.707.707-4.243 4.243-.707-.707zM4.243 100l.707.707-4.243 4.243-.707-.707zM14.243 100l.707.707-4.243 4.243-.707-.707zM24.243 100l.707.707-4.243 4.243-.707-.707zM34.243 100l.707.707-4.243 4.243-.707-.707zM4.243 110l.707.707-4.243 4.243-.707-.707zM14.243 110l.707.707-4.243 4.243-.707-.707zM24.243 110l.707.707-4.243 4.243-.707-.707zM34.243 110l.707.707-4.243 4.243-.707-.707zM4.243 80l.707.707L.707 84.95 0 84.243zM54.243 80l.707.707-4.243 4.243-.707-.707zM64.243 80l.707.707-4.243 4.243-.707-.707zM74.243 80l.707.707-4.243 4.243-.707-.707zM44.243 90l.707.707-4.243 4.243-.707-.707zM54.243 90l.707.707-4.243 4.243-.707-.707zM64.243 90l.707.707-4.243 4.243-.707-.707zM74.243 90l.707.707-4.243 4.243-.707-.707zM44.243 100l.707.707-4.243 4.243-.707-.707zM54.243 100l.707.707-4.243 4.243-.707-.707zM64.243 100l.707.707-4.243 4.243-.707-.707zM74.243 100l.707.707-4.243 4.243-.707-.707zM44.243 110l.707.707-4.243 4.243-.707-.707zM54.243 110l.707.707-4.243 4.243-.707-.707zM64.243 110l.707.707-4.243 4.243-.707-.707zM74.243 110l.707.707-4.243 4.243-.707-.707zM44.243 80l.707.707-4.243 4.243-.707-.707zM94.243 80l.707.707-4.243 4.243-.707-.707zM104.243 80l.707.707-4.243 4.243-.707-.707zM114.243 80l.707.707-4.243 4.243-.707-.707zM84.243 90l.707.707-4.243 4.243-.707-.707zM94.243 90l.707.707-4.243 4.243-.707-.707zM104.243 90l.707.707-4.243 4.243-.707-.707zM114.243 90l.707.707-4.243 4.243-.707-.707zM84.243 100l.707.707-4.243 4.243-.707-.707zM94.243 100l.707.707-4.243 4.243-.707-.707zM104.243 100l.707.707-4.243 4.243-.707-.707zM114.243 100l.707.707-4.243 4.243-.707-.707zM84.243 110l.707.707-4.243 4.243-.707-.707zM94.243 110l.707.707-4.243 4.243-.707-.707zM104.243 110l.707.707-4.243 4.243-.707-.707zM114.243 110l.707.707-4.243 4.243-.707-.707zM84.243 80l.707.707-4.243 4.243-.707-.707z"></path>
            </svg>
            <div
                class="shares-guest__roadmap flex flex-row--lg flex-column justify-center items-start--lg items-center margin-top-5">
                <div
                    class="shares-guest__roadmap--item flex flex-column justify-start items-center padding-3--lg padding-y-5 padding-x-2">
                    <svg width="25" height="26" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                        <path
                            d="M19.886 5.556c1.178 1.099 2.22 1.601 2.752 1.808a12.438 12.438 0 00-1.288-1.92 12.695 12.695 0 00-3.766-3.124 10.349 10.349 0 002.302 3.236z"
                            fill="url(#share-history-dot_svg__paint0_linear)"></path>
                        <path
                            d="M23.13 17.8c-.148.325-.31.646-.489.959-1.476-.335-4.826-1.598-9.565-6.337-4.903-4.904-6.382-8.603-6.812-10.12.309-.175.625-.335.946-.478C7.492 2.936 8.75 6.65 13.8 11.7c5.052 5.052 8.351 5.944 9.33 6.1z"
                            fill="url(#share-history-dot_svg__paint1_linear)"></path>
                        <path
                            d="M21.034 20.899c-.912-.207-4.74-1.345-10.057-6.661-5.292-5.293-6.634-9.336-6.895-10.31l-.076.07c-.031.03-.063.059-.093.09-.23.229-.443.467-.648.712.57 1.684 2.262 5.433 6.989 10.16 4.65 4.65 8.234 6.239 9.892 6.767.253-.211.5-.432.736-.668.041-.04.08-.082.118-.123l.027-.03.006-.007z"
                            fill="url(#share-history-dot_svg__paint2_linear)"></path>
                        <path
                            d="M2.11 6.59l-.067.004v.001c-.254.466-.472.947-.655 1.439.571 1.838 2.129 5.332 6.316 9.518 3.913 3.914 7.165 5.475 9.046 6.098a11.176 11.176 0 001.532-.669c-.977-.176-4.857-1.153-9.855-6.152C2.65 11.052 2.113 6.634 2.109 6.59z"
                            fill="url(#share-history-dot_svg__paint3_linear)"></path>
                        <path
                            d="M.795 10.4A11.811 11.811 0 00.8 13.669c.795 1.667 2.179 3.844 4.613 6.278 2.171 2.171 4.098 3.44 5.64 4.19 1.202.194 2.42.203 3.609.027-.492-.021-3.926-.34-8.526-4.94C1.518 14.604.868 10.94.795 10.4z"
                            fill="url(#share-history-dot_svg__paint4_linear)"></path>
                        <path
                            d="M14.794 25.214h-.025a.16.16 0 00.018-.003l.006-.002a.194.194 0 01.011-.001v.006h-.01z"
                            fill="url(#share-history-dot_svg__paint5_linear)"></path>
                        <path
                            d="M3.476 19.828c.283.383.622.783 1.026 1.163.267.25.522.454.767.637a12.28 12.28 0 011.29 1.921c-.533-.208-1.574-.71-2.752-1.81a8.34 8.34 0 01-.23-.22 10.393 10.393 0 01-2.074-3.014c.688.372 1.349.812 1.973 1.323z"
                            fill="url(#share-history-dot_svg__paint6_linear)"></path>
                        <path
                            d="M23.985 11.41a12.531 12.531 0 00-.216-1.109c-1.061-.256-2.984-1.04-5.38-3.435-2.387-2.388-3.405-4.48-3.83-5.69-.384-.09-.77-.16-1.158-.212.35 1.235 1.368 3.728 4.265 6.625 2.869 2.867 5.162 3.625 6.319 3.82z"
                            fill="url(#share-history-dot_svg__paint7_linear)"></path>
                        <path
                            d="M24.06 14.235c-.033.345-.08.69-.143 1.03-1.39-.235-4.566-1.22-8.638-5.292-3.902-3.903-5.031-7.298-5.362-8.957.345-.058.692-.1 1.041-.126.313 1.501 1.382 4.697 5.044 8.36 3.928 3.928 6.897 4.793 8.058 4.985z"
                            fill="url(#share-history-dot_svg__paint8_linear)"></path>
                        <defs>
                            <linearGradient id="share-history-dot_svg__paint0_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint1_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint2_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint3_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint4_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint5_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint6_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint7_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint8_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                    <div class="shares-guest__roadmap--title">2020</div>
                    <div class="shares-guest__roadmap--subtitle">Декабрь</div>
                    <div class="shares-guest__roadmap--description">Начало разработки</div>
                </div>
                <div
                    class="shares-guest__roadmap--item flex flex-column justify-start items-center padding-3--lg padding-y-5 padding-x-2">
                    <svg width="25" height="26" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                        <path
                            d="M19.886 5.556c1.178 1.099 2.22 1.601 2.752 1.808a12.438 12.438 0 00-1.288-1.92 12.695 12.695 0 00-3.766-3.124 10.349 10.349 0 002.302 3.236z"
                            fill="url(#share-history-dot_svg__paint0_linear)"></path>
                        <path
                            d="M23.13 17.8c-.148.325-.31.646-.489.959-1.476-.335-4.826-1.598-9.565-6.337-4.903-4.904-6.382-8.603-6.812-10.12.309-.175.625-.335.946-.478C7.492 2.936 8.75 6.65 13.8 11.7c5.052 5.052 8.351 5.944 9.33 6.1z"
                            fill="url(#share-history-dot_svg__paint1_linear)"></path>
                        <path
                            d="M21.034 20.899c-.912-.207-4.74-1.345-10.057-6.661-5.292-5.293-6.634-9.336-6.895-10.31l-.076.07c-.031.03-.063.059-.093.09-.23.229-.443.467-.648.712.57 1.684 2.262 5.433 6.989 10.16 4.65 4.65 8.234 6.239 9.892 6.767.253-.211.5-.432.736-.668.041-.04.08-.082.118-.123l.027-.03.006-.007z"
                            fill="url(#share-history-dot_svg__paint2_linear)"></path>
                        <path
                            d="M2.11 6.59l-.067.004v.001c-.254.466-.472.947-.655 1.439.571 1.838 2.129 5.332 6.316 9.518 3.913 3.914 7.165 5.475 9.046 6.098a11.176 11.176 0 001.532-.669c-.977-.176-4.857-1.153-9.855-6.152C2.65 11.052 2.113 6.634 2.109 6.59z"
                            fill="url(#share-history-dot_svg__paint3_linear)"></path>
                        <path
                            d="M.795 10.4A11.811 11.811 0 00.8 13.669c.795 1.667 2.179 3.844 4.613 6.278 2.171 2.171 4.098 3.44 5.64 4.19 1.202.194 2.42.203 3.609.027-.492-.021-3.926-.34-8.526-4.94C1.518 14.604.868 10.94.795 10.4z"
                            fill="url(#share-history-dot_svg__paint4_linear)"></path>
                        <path
                            d="M14.794 25.214h-.025a.16.16 0 00.018-.003l.006-.002a.194.194 0 01.011-.001v.006h-.01z"
                            fill="url(#share-history-dot_svg__paint5_linear)"></path>
                        <path
                            d="M3.476 19.828c.283.383.622.783 1.026 1.163.267.25.522.454.767.637a12.28 12.28 0 011.29 1.921c-.533-.208-1.574-.71-2.752-1.81a8.34 8.34 0 01-.23-.22 10.393 10.393 0 01-2.074-3.014c.688.372 1.349.812 1.973 1.323z"
                            fill="url(#share-history-dot_svg__paint6_linear)"></path>
                        <path
                            d="M23.985 11.41a12.531 12.531 0 00-.216-1.109c-1.061-.256-2.984-1.04-5.38-3.435-2.387-2.388-3.405-4.48-3.83-5.69-.384-.09-.77-.16-1.158-.212.35 1.235 1.368 3.728 4.265 6.625 2.869 2.867 5.162 3.625 6.319 3.82z"
                            fill="url(#share-history-dot_svg__paint7_linear)"></path>
                        <path
                            d="M24.06 14.235c-.033.345-.08.69-.143 1.03-1.39-.235-4.566-1.22-8.638-5.292-3.902-3.903-5.031-7.298-5.362-8.957.345-.058.692-.1 1.041-.126.313 1.501 1.382 4.697 5.044 8.36 3.928 3.928 6.897 4.793 8.058 4.985z"
                            fill="url(#share-history-dot_svg__paint8_linear)"></path>
                        <defs>
                            <linearGradient id="share-history-dot_svg__paint0_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint1_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint2_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint3_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint4_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint5_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint6_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint7_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint8_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                    <div class="shares-guest__roadmap--title">2021</div>
                    <div class="shares-guest__roadmap--subtitle">Март</div>
                    <div class="shares-guest__roadmap--description">Тестирование приложения</div>
                </div>
                <div
                    class="shares-guest__roadmap--item flex flex-column justify-start items-center padding-3--lg padding-y-5 padding-x-2">
                    <svg width="25" height="26" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                        <path
                            d="M19.886 5.556c1.178 1.099 2.22 1.601 2.752 1.808a12.438 12.438 0 00-1.288-1.92 12.695 12.695 0 00-3.766-3.124 10.349 10.349 0 002.302 3.236z"
                            fill="url(#share-history-dot_svg__paint0_linear)"></path>
                        <path
                            d="M23.13 17.8c-.148.325-.31.646-.489.959-1.476-.335-4.826-1.598-9.565-6.337-4.903-4.904-6.382-8.603-6.812-10.12.309-.175.625-.335.946-.478C7.492 2.936 8.75 6.65 13.8 11.7c5.052 5.052 8.351 5.944 9.33 6.1z"
                            fill="url(#share-history-dot_svg__paint1_linear)"></path>
                        <path
                            d="M21.034 20.899c-.912-.207-4.74-1.345-10.057-6.661-5.292-5.293-6.634-9.336-6.895-10.31l-.076.07c-.031.03-.063.059-.093.09-.23.229-.443.467-.648.712.57 1.684 2.262 5.433 6.989 10.16 4.65 4.65 8.234 6.239 9.892 6.767.253-.211.5-.432.736-.668.041-.04.08-.082.118-.123l.027-.03.006-.007z"
                            fill="url(#share-history-dot_svg__paint2_linear)"></path>
                        <path
                            d="M2.11 6.59l-.067.004v.001c-.254.466-.472.947-.655 1.439.571 1.838 2.129 5.332 6.316 9.518 3.913 3.914 7.165 5.475 9.046 6.098a11.176 11.176 0 001.532-.669c-.977-.176-4.857-1.153-9.855-6.152C2.65 11.052 2.113 6.634 2.109 6.59z"
                            fill="url(#share-history-dot_svg__paint3_linear)"></path>
                        <path
                            d="M.795 10.4A11.811 11.811 0 00.8 13.669c.795 1.667 2.179 3.844 4.613 6.278 2.171 2.171 4.098 3.44 5.64 4.19 1.202.194 2.42.203 3.609.027-.492-.021-3.926-.34-8.526-4.94C1.518 14.604.868 10.94.795 10.4z"
                            fill="url(#share-history-dot_svg__paint4_linear)"></path>
                        <path
                            d="M14.794 25.214h-.025a.16.16 0 00.018-.003l.006-.002a.194.194 0 01.011-.001v.006h-.01z"
                            fill="url(#share-history-dot_svg__paint5_linear)"></path>
                        <path
                            d="M3.476 19.828c.283.383.622.783 1.026 1.163.267.25.522.454.767.637a12.28 12.28 0 011.29 1.921c-.533-.208-1.574-.71-2.752-1.81a8.34 8.34 0 01-.23-.22 10.393 10.393 0 01-2.074-3.014c.688.372 1.349.812 1.973 1.323z"
                            fill="url(#share-history-dot_svg__paint6_linear)"></path>
                        <path
                            d="M23.985 11.41a12.531 12.531 0 00-.216-1.109c-1.061-.256-2.984-1.04-5.38-3.435-2.387-2.388-3.405-4.48-3.83-5.69-.384-.09-.77-.16-1.158-.212.35 1.235 1.368 3.728 4.265 6.625 2.869 2.867 5.162 3.625 6.319 3.82z"
                            fill="url(#share-history-dot_svg__paint7_linear)"></path>
                        <path
                            d="M24.06 14.235c-.033.345-.08.69-.143 1.03-1.39-.235-4.566-1.22-8.638-5.292-3.902-3.903-5.031-7.298-5.362-8.957.345-.058.692-.1 1.041-.126.313 1.501 1.382 4.697 5.044 8.36 3.928 3.928 6.897 4.793 8.058 4.985z"
                            fill="url(#share-history-dot_svg__paint8_linear)"></path>
                        <defs>
                            <linearGradient id="share-history-dot_svg__paint0_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint1_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint2_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint3_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint4_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint5_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint6_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint7_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint8_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                    <div class="shares-guest__roadmap--title">2022</div>
                    <div class="shares-guest__roadmap--subtitle">Май</div>
                    <div class="shares-guest__roadmap--description">Запуск бета-версии
                    </div>
                </div>
                <div
                    class="shares-guest__roadmap--item flex flex-column justify-start items-center padding-3--lg padding-y-5 padding-x-2">
                    <svg width="25" height="26" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                        <path
                            d="M19.886 5.556c1.178 1.099 2.22 1.601 2.752 1.808a12.438 12.438 0 00-1.288-1.92 12.695 12.695 0 00-3.766-3.124 10.349 10.349 0 002.302 3.236z"
                            fill="url(#share-history-dot_svg__paint0_linear)"></path>
                        <path
                            d="M23.13 17.8c-.148.325-.31.646-.489.959-1.476-.335-4.826-1.598-9.565-6.337-4.903-4.904-6.382-8.603-6.812-10.12.309-.175.625-.335.946-.478C7.492 2.936 8.75 6.65 13.8 11.7c5.052 5.052 8.351 5.944 9.33 6.1z"
                            fill="url(#share-history-dot_svg__paint1_linear)"></path>
                        <path
                            d="M21.034 20.899c-.912-.207-4.74-1.345-10.057-6.661-5.292-5.293-6.634-9.336-6.895-10.31l-.076.07c-.031.03-.063.059-.093.09-.23.229-.443.467-.648.712.57 1.684 2.262 5.433 6.989 10.16 4.65 4.65 8.234 6.239 9.892 6.767.253-.211.5-.432.736-.668.041-.04.08-.082.118-.123l.027-.03.006-.007z"
                            fill="url(#share-history-dot_svg__paint2_linear)"></path>
                        <path
                            d="M2.11 6.59l-.067.004v.001c-.254.466-.472.947-.655 1.439.571 1.838 2.129 5.332 6.316 9.518 3.913 3.914 7.165 5.475 9.046 6.098a11.176 11.176 0 001.532-.669c-.977-.176-4.857-1.153-9.855-6.152C2.65 11.052 2.113 6.634 2.109 6.59z"
                            fill="url(#share-history-dot_svg__paint3_linear)"></path>
                        <path
                            d="M.795 10.4A11.811 11.811 0 00.8 13.669c.795 1.667 2.179 3.844 4.613 6.278 2.171 2.171 4.098 3.44 5.64 4.19 1.202.194 2.42.203 3.609.027-.492-.021-3.926-.34-8.526-4.94C1.518 14.604.868 10.94.795 10.4z"
                            fill="url(#share-history-dot_svg__paint4_linear)"></path>
                        <path
                            d="M14.794 25.214h-.025a.16.16 0 00.018-.003l.006-.002a.194.194 0 01.011-.001v.006h-.01z"
                            fill="url(#share-history-dot_svg__paint5_linear)"></path>
                        <path
                            d="M3.476 19.828c.283.383.622.783 1.026 1.163.267.25.522.454.767.637a12.28 12.28 0 011.29 1.921c-.533-.208-1.574-.71-2.752-1.81a8.34 8.34 0 01-.23-.22 10.393 10.393 0 01-2.074-3.014c.688.372 1.349.812 1.973 1.323z"
                            fill="url(#share-history-dot_svg__paint6_linear)"></path>
                        <path
                            d="M23.985 11.41a12.531 12.531 0 00-.216-1.109c-1.061-.256-2.984-1.04-5.38-3.435-2.387-2.388-3.405-4.48-3.83-5.69-.384-.09-.77-.16-1.158-.212.35 1.235 1.368 3.728 4.265 6.625 2.869 2.867 5.162 3.625 6.319 3.82z"
                            fill="url(#share-history-dot_svg__paint7_linear)"></path>
                        <path
                            d="M24.06 14.235c-.033.345-.08.69-.143 1.03-1.39-.235-4.566-1.22-8.638-5.292-3.902-3.903-5.031-7.298-5.362-8.957.345-.058.692-.1 1.041-.126.313 1.501 1.382 4.697 5.044 8.36 3.928 3.928 6.897 4.793 8.058 4.985z"
                            fill="url(#share-history-dot_svg__paint8_linear)"></path>
                        <defs>
                            <linearGradient id="share-history-dot_svg__paint0_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint1_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint2_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint3_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint4_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint5_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint6_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint7_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint8_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                    <div class="shares-guest__roadmap--title">2022</div>
                    <div class="shares-guest__roadmap--subtitle">Ноябрь</div>
                    <div class="shares-guest__roadmap--description">Выпуск приложения</div>
                </div>
                <div
                    class="shares-guest__roadmap--item flex flex-column justify-start items-center padding-3--lg padding-y-5 padding-x-2">
                    <svg width="25" height="26" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                        <path
                            d="M19.886 5.556c1.178 1.099 2.22 1.601 2.752 1.808a12.438 12.438 0 00-1.288-1.92 12.695 12.695 0 00-3.766-3.124 10.349 10.349 0 002.302 3.236z"
                            fill="url(#share-history-dot_svg__paint0_linear)"></path>
                        <path
                            d="M23.13 17.8c-.148.325-.31.646-.489.959-1.476-.335-4.826-1.598-9.565-6.337-4.903-4.904-6.382-8.603-6.812-10.12.309-.175.625-.335.946-.478C7.492 2.936 8.75 6.65 13.8 11.7c5.052 5.052 8.351 5.944 9.33 6.1z"
                            fill="url(#share-history-dot_svg__paint1_linear)"></path>
                        <path
                            d="M21.034 20.899c-.912-.207-4.74-1.345-10.057-6.661-5.292-5.293-6.634-9.336-6.895-10.31l-.076.07c-.031.03-.063.059-.093.09-.23.229-.443.467-.648.712.57 1.684 2.262 5.433 6.989 10.16 4.65 4.65 8.234 6.239 9.892 6.767.253-.211.5-.432.736-.668.041-.04.08-.082.118-.123l.027-.03.006-.007z"
                            fill="url(#share-history-dot_svg__paint2_linear)"></path>
                        <path
                            d="M2.11 6.59l-.067.004v.001c-.254.466-.472.947-.655 1.439.571 1.838 2.129 5.332 6.316 9.518 3.913 3.914 7.165 5.475 9.046 6.098a11.176 11.176 0 001.532-.669c-.977-.176-4.857-1.153-9.855-6.152C2.65 11.052 2.113 6.634 2.109 6.59z"
                            fill="url(#share-history-dot_svg__paint3_linear)"></path>
                        <path
                            d="M.795 10.4A11.811 11.811 0 00.8 13.669c.795 1.667 2.179 3.844 4.613 6.278 2.171 2.171 4.098 3.44 5.64 4.19 1.202.194 2.42.203 3.609.027-.492-.021-3.926-.34-8.526-4.94C1.518 14.604.868 10.94.795 10.4z"
                            fill="url(#share-history-dot_svg__paint4_linear)"></path>
                        <path
                            d="M14.794 25.214h-.025a.16.16 0 00.018-.003l.006-.002a.194.194 0 01.011-.001v.006h-.01z"
                            fill="url(#share-history-dot_svg__paint5_linear)"></path>
                        <path
                            d="M3.476 19.828c.283.383.622.783 1.026 1.163.267.25.522.454.767.637a12.28 12.28 0 011.29 1.921c-.533-.208-1.574-.71-2.752-1.81a8.34 8.34 0 01-.23-.22 10.393 10.393 0 01-2.074-3.014c.688.372 1.349.812 1.973 1.323z"
                            fill="url(#share-history-dot_svg__paint6_linear)"></path>
                        <path
                            d="M23.985 11.41a12.531 12.531 0 00-.216-1.109c-1.061-.256-2.984-1.04-5.38-3.435-2.387-2.388-3.405-4.48-3.83-5.69-.384-.09-.77-.16-1.158-.212.35 1.235 1.368 3.728 4.265 6.625 2.869 2.867 5.162 3.625 6.319 3.82z"
                            fill="url(#share-history-dot_svg__paint7_linear)"></path>
                        <path
                            d="M24.06 14.235c-.033.345-.08.69-.143 1.03-1.39-.235-4.566-1.22-8.638-5.292-3.902-3.903-5.031-7.298-5.362-8.957.345-.058.692-.1 1.041-.126.313 1.501 1.382 4.697 5.044 8.36 3.928 3.928 6.897 4.793 8.058 4.985z"
                            fill="url(#share-history-dot_svg__paint8_linear)"></path>
                        <defs>
                            <linearGradient id="share-history-dot_svg__paint0_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint1_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint2_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint3_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint4_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint5_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint6_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint7_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                            <linearGradient id="share-history-dot_svg__paint8_linear" x1="28.971" y1="12.971"
                                            x2="12.445" y2="-1.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFA63D"></stop>
                                <stop offset="1" stop-color="#FF4E43"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                    <div class="shares-guest__roadmap--title">2022</div>
                    <div class="shares-guest__roadmap--subtitle">Декабрь</div>
                    <div class="shares-guest__roadmap--description">Продажа акций и IPO</div>
                </div>
            </div>
        </div>
        <div
            class="shares-guest__become bg-cover bg-center padding-y-4 padding-y-6--md relative flex flex-column justify-center items-center">
            <div class="color-white font-2xl text-center padding-x-3">Подумайте о будущем и своих перспективах.
                Покупая акции Avax Message сейчас, вы инвестируете в свое ближайшее будущее. Avax гарантирует вам
                успех и процветание, работая вместе с нашей сплоченной командой!
            </div>
            <a data-v-141d1a81="" href="https://avax-finance.com/register" class="margin-top-3 button button--lite"><!----><span
                    data-v-141d1a81="" class="button__content">СТАТЬ ИНВЕСТОРОМ</span></a></div>
        <div class="padding-y-4 padding-y-6--md relative">
            <svg viewBox="0 0 115 115" fill="none" xmlns="http://www.w3.org/2000/svg"
                 class="shares-guest__chart--p1">
                <path fill="#C8CAD4"
                      d="M14.243 0l.707.707-4.243 4.243L10 4.243zM24.243 0l.707.707-4.243 4.243L20 4.243zM34.243 0l.707.707-4.243 4.243L30 4.243zM4.243 10l.707.707L.707 14.95 0 14.243zM14.243 10l.707.707-4.243 4.243-.707-.707zM24.243 10l.707.707-4.243 4.243-.707-.707zM34.243 10l.707.707-4.243 4.243-.707-.707zM4.243 20l.707.707L.707 24.95 0 24.243zM14.243 20l.707.707-4.243 4.243-.707-.707zM24.243 20l.707.707-4.243 4.243-.707-.707zM34.243 20l.707.707-4.243 4.243-.707-.707zM4.243 30l.707.707L.707 34.95 0 34.243zM14.243 30l.707.707-4.243 4.243-.707-.707zM24.243 30l.707.707-4.243 4.243-.707-.707zM34.243 30l.707.707-4.243 4.243-.707-.707zM4.243 0l.707.707L.707 4.95 0 4.243zM54.243 0l.707.707-4.243 4.243L50 4.243zM64.243 0l.707.707-4.243 4.243L60 4.243zM74.243 0l.707.707-4.243 4.243L70 4.243zM44.243 10l.707.707-4.243 4.243-.707-.707zM54.243 10l.707.707-4.243 4.243-.707-.707zM64.243 10l.707.707-4.243 4.243-.707-.707zM74.243 10l.707.707-4.243 4.243-.707-.707zM44.243 20l.707.707-4.243 4.243-.707-.707zM54.243 20l.707.707-4.243 4.243-.707-.707zM64.243 20l.707.707-4.243 4.243-.707-.707zM74.243 20l.707.707-4.243 4.243-.707-.707zM44.243 30l.707.707-4.243 4.243-.707-.707zM54.243 30l.707.707-4.243 4.243-.707-.707zM64.243 30l.707.707-4.243 4.243-.707-.707zM74.243 30l.707.707-4.243 4.243-.707-.707zM44.243 0l.707.707-4.243 4.243L40 4.243zM94.243 0l.707.707-4.243 4.243L90 4.243zM104.243 0l.707.707-4.243 4.243-.707-.707zM114.243 0l.707.707-4.243 4.243-.707-.707zM84.243 10l.707.707-4.243 4.243-.707-.707zM94.243 10l.707.707-4.243 4.243-.707-.707zM104.243 10l.707.707-4.243 4.243-.707-.707zM114.243 10l.707.707-4.243 4.243-.707-.707zM84.243 20l.707.707-4.243 4.243-.707-.707zM94.243 20l.707.707-4.243 4.243-.707-.707zM104.243 20l.707.707-4.243 4.243-.707-.707zM114.243 20l.707.707-4.243 4.243-.707-.707zM84.243 30l.707.707-4.243 4.243-.707-.707zM94.243 30l.707.707-4.243 4.243-.707-.707zM104.243 30l.707.707-4.243 4.243-.707-.707zM114.243 30l.707.707-4.243 4.243-.707-.707zM84.243 0l.707.707-4.243 4.243L80 4.243zM14.243 40l.707.707-4.243 4.243-.707-.707zM24.243 40l.707.707-4.243 4.243-.707-.707zM34.243 40l.707.707-4.243 4.243-.707-.707zM4.243 50l.707.707L.707 54.95 0 54.243zM14.243 50l.707.707-4.243 4.243-.707-.707zM24.243 50l.707.707-4.243 4.243-.707-.707zM34.243 50l.707.707-4.243 4.243-.707-.707zM4.243 60l.707.707L.707 64.95 0 64.243zM14.243 60l.707.707-4.243 4.243-.707-.707zM24.243 60l.707.707-4.243 4.243-.707-.707zM34.243 60l.707.707-4.243 4.243-.707-.707zM4.243 70l.707.707L.707 74.95 0 74.243zM14.243 70l.707.707-4.243 4.243-.707-.707zM24.243 70l.707.707-4.243 4.243-.707-.707zM34.243 70l.707.707-4.243 4.243-.707-.707zM4.243 40l.707.707L.707 44.95 0 44.243zM54.243 40l.707.707-4.243 4.243-.707-.707zM64.243 40l.707.707-4.243 4.243-.707-.707zM74.243 40l.707.707-4.243 4.243-.707-.707zM44.243 50l.707.707-4.243 4.243-.707-.707zM54.243 50l.707.707-4.243 4.243-.707-.707zM64.243 50l.707.707-4.243 4.243-.707-.707zM74.243 50l.707.707-4.243 4.243-.707-.707zM44.243 60l.707.707-4.243 4.243-.707-.707zM54.243 60l.707.707-4.243 4.243-.707-.707zM64.243 60l.707.707-4.243 4.243-.707-.707zM74.243 60l.707.707-4.243 4.243-.707-.707zM44.243 70l.707.707-4.243 4.243-.707-.707zM54.243 70l.707.707-4.243 4.243-.707-.707zM64.243 70l.707.707-4.243 4.243-.707-.707zM74.243 70l.707.707-4.243 4.243-.707-.707zM44.243 40l.707.707-4.243 4.243-.707-.707zM94.243 40l.707.707-4.243 4.243-.707-.707zM104.243 40l.707.707-4.243 4.243-.707-.707zM114.243 40l.707.707-4.243 4.243-.707-.707zM84.243 50l.707.707-4.243 4.243-.707-.707zM94.243 50l.707.707-4.243 4.243-.707-.707zM104.243 50l.707.707-4.243 4.243-.707-.707zM114.243 50l.707.707-4.243 4.243-.707-.707zM84.243 60l.707.707-4.243 4.243-.707-.707zM94.243 60l.707.707-4.243 4.243-.707-.707zM104.243 60l.707.707-4.243 4.243-.707-.707zM114.243 60l.707.707-4.243 4.243-.707-.707zM84.243 70l.707.707-4.243 4.243-.707-.707zM94.243 70l.707.707-4.243 4.243-.707-.707zM104.243 70l.707.707-4.243 4.243-.707-.707zM114.243 70l.707.707-4.243 4.243-.707-.707zM84.243 40l.707.707-4.243 4.243-.707-.707zM14.243 80l.707.707-4.243 4.243-.707-.707zM24.243 80l.707.707-4.243 4.243-.707-.707zM34.243 80l.707.707-4.243 4.243-.707-.707zM4.243 90l.707.707L.707 94.95 0 94.243zM14.243 90l.707.707-4.243 4.243-.707-.707zM24.243 90l.707.707-4.243 4.243-.707-.707zM34.243 90l.707.707-4.243 4.243-.707-.707zM4.243 100l.707.707-4.243 4.243-.707-.707zM14.243 100l.707.707-4.243 4.243-.707-.707zM24.243 100l.707.707-4.243 4.243-.707-.707zM34.243 100l.707.707-4.243 4.243-.707-.707zM4.243 110l.707.707-4.243 4.243-.707-.707zM14.243 110l.707.707-4.243 4.243-.707-.707zM24.243 110l.707.707-4.243 4.243-.707-.707zM34.243 110l.707.707-4.243 4.243-.707-.707zM4.243 80l.707.707L.707 84.95 0 84.243zM54.243 80l.707.707-4.243 4.243-.707-.707zM64.243 80l.707.707-4.243 4.243-.707-.707zM74.243 80l.707.707-4.243 4.243-.707-.707zM44.243 90l.707.707-4.243 4.243-.707-.707zM54.243 90l.707.707-4.243 4.243-.707-.707zM64.243 90l.707.707-4.243 4.243-.707-.707zM74.243 90l.707.707-4.243 4.243-.707-.707zM44.243 100l.707.707-4.243 4.243-.707-.707zM54.243 100l.707.707-4.243 4.243-.707-.707zM64.243 100l.707.707-4.243 4.243-.707-.707zM74.243 100l.707.707-4.243 4.243-.707-.707zM44.243 110l.707.707-4.243 4.243-.707-.707zM54.243 110l.707.707-4.243 4.243-.707-.707zM64.243 110l.707.707-4.243 4.243-.707-.707zM74.243 110l.707.707-4.243 4.243-.707-.707zM44.243 80l.707.707-4.243 4.243-.707-.707zM94.243 80l.707.707-4.243 4.243-.707-.707zM104.243 80l.707.707-4.243 4.243-.707-.707zM114.243 80l.707.707-4.243 4.243-.707-.707zM84.243 90l.707.707-4.243 4.243-.707-.707zM94.243 90l.707.707-4.243 4.243-.707-.707zM104.243 90l.707.707-4.243 4.243-.707-.707zM114.243 90l.707.707-4.243 4.243-.707-.707zM84.243 100l.707.707-4.243 4.243-.707-.707zM94.243 100l.707.707-4.243 4.243-.707-.707zM104.243 100l.707.707-4.243 4.243-.707-.707zM114.243 100l.707.707-4.243 4.243-.707-.707zM84.243 110l.707.707-4.243 4.243-.707-.707zM94.243 110l.707.707-4.243 4.243-.707-.707zM104.243 110l.707.707-4.243 4.243-.707-.707zM114.243 110l.707.707-4.243 4.243-.707-.707zM84.243 80l.707.707-4.243 4.243-.707-.707z"></path>
            </svg>
            <svg viewBox="0 0 115 115" fill="none" xmlns="http://www.w3.org/2000/svg"
                 class="shares-guest__chart--p2">
                <path fill="#C8CAD4"
                      d="M14.243 0l.707.707-4.243 4.243L10 4.243zM24.243 0l.707.707-4.243 4.243L20 4.243zM34.243 0l.707.707-4.243 4.243L30 4.243zM4.243 10l.707.707L.707 14.95 0 14.243zM14.243 10l.707.707-4.243 4.243-.707-.707zM24.243 10l.707.707-4.243 4.243-.707-.707zM34.243 10l.707.707-4.243 4.243-.707-.707zM4.243 20l.707.707L.707 24.95 0 24.243zM14.243 20l.707.707-4.243 4.243-.707-.707zM24.243 20l.707.707-4.243 4.243-.707-.707zM34.243 20l.707.707-4.243 4.243-.707-.707zM4.243 30l.707.707L.707 34.95 0 34.243zM14.243 30l.707.707-4.243 4.243-.707-.707zM24.243 30l.707.707-4.243 4.243-.707-.707zM34.243 30l.707.707-4.243 4.243-.707-.707zM4.243 0l.707.707L.707 4.95 0 4.243zM54.243 0l.707.707-4.243 4.243L50 4.243zM64.243 0l.707.707-4.243 4.243L60 4.243zM74.243 0l.707.707-4.243 4.243L70 4.243zM44.243 10l.707.707-4.243 4.243-.707-.707zM54.243 10l.707.707-4.243 4.243-.707-.707zM64.243 10l.707.707-4.243 4.243-.707-.707zM74.243 10l.707.707-4.243 4.243-.707-.707zM44.243 20l.707.707-4.243 4.243-.707-.707zM54.243 20l.707.707-4.243 4.243-.707-.707zM64.243 20l.707.707-4.243 4.243-.707-.707zM74.243 20l.707.707-4.243 4.243-.707-.707zM44.243 30l.707.707-4.243 4.243-.707-.707zM54.243 30l.707.707-4.243 4.243-.707-.707zM64.243 30l.707.707-4.243 4.243-.707-.707zM74.243 30l.707.707-4.243 4.243-.707-.707zM44.243 0l.707.707-4.243 4.243L40 4.243zM94.243 0l.707.707-4.243 4.243L90 4.243zM104.243 0l.707.707-4.243 4.243-.707-.707zM114.243 0l.707.707-4.243 4.243-.707-.707zM84.243 10l.707.707-4.243 4.243-.707-.707zM94.243 10l.707.707-4.243 4.243-.707-.707zM104.243 10l.707.707-4.243 4.243-.707-.707zM114.243 10l.707.707-4.243 4.243-.707-.707zM84.243 20l.707.707-4.243 4.243-.707-.707zM94.243 20l.707.707-4.243 4.243-.707-.707zM104.243 20l.707.707-4.243 4.243-.707-.707zM114.243 20l.707.707-4.243 4.243-.707-.707zM84.243 30l.707.707-4.243 4.243-.707-.707zM94.243 30l.707.707-4.243 4.243-.707-.707zM104.243 30l.707.707-4.243 4.243-.707-.707zM114.243 30l.707.707-4.243 4.243-.707-.707zM84.243 0l.707.707-4.243 4.243L80 4.243zM14.243 40l.707.707-4.243 4.243-.707-.707zM24.243 40l.707.707-4.243 4.243-.707-.707zM34.243 40l.707.707-4.243 4.243-.707-.707zM4.243 50l.707.707L.707 54.95 0 54.243zM14.243 50l.707.707-4.243 4.243-.707-.707zM24.243 50l.707.707-4.243 4.243-.707-.707zM34.243 50l.707.707-4.243 4.243-.707-.707zM4.243 60l.707.707L.707 64.95 0 64.243zM14.243 60l.707.707-4.243 4.243-.707-.707zM24.243 60l.707.707-4.243 4.243-.707-.707zM34.243 60l.707.707-4.243 4.243-.707-.707zM4.243 70l.707.707L.707 74.95 0 74.243zM14.243 70l.707.707-4.243 4.243-.707-.707zM24.243 70l.707.707-4.243 4.243-.707-.707zM34.243 70l.707.707-4.243 4.243-.707-.707zM4.243 40l.707.707L.707 44.95 0 44.243zM54.243 40l.707.707-4.243 4.243-.707-.707zM64.243 40l.707.707-4.243 4.243-.707-.707zM74.243 40l.707.707-4.243 4.243-.707-.707zM44.243 50l.707.707-4.243 4.243-.707-.707zM54.243 50l.707.707-4.243 4.243-.707-.707zM64.243 50l.707.707-4.243 4.243-.707-.707zM74.243 50l.707.707-4.243 4.243-.707-.707zM44.243 60l.707.707-4.243 4.243-.707-.707zM54.243 60l.707.707-4.243 4.243-.707-.707zM64.243 60l.707.707-4.243 4.243-.707-.707zM74.243 60l.707.707-4.243 4.243-.707-.707zM44.243 70l.707.707-4.243 4.243-.707-.707zM54.243 70l.707.707-4.243 4.243-.707-.707zM64.243 70l.707.707-4.243 4.243-.707-.707zM74.243 70l.707.707-4.243 4.243-.707-.707zM44.243 40l.707.707-4.243 4.243-.707-.707zM94.243 40l.707.707-4.243 4.243-.707-.707zM104.243 40l.707.707-4.243 4.243-.707-.707zM114.243 40l.707.707-4.243 4.243-.707-.707zM84.243 50l.707.707-4.243 4.243-.707-.707zM94.243 50l.707.707-4.243 4.243-.707-.707zM104.243 50l.707.707-4.243 4.243-.707-.707zM114.243 50l.707.707-4.243 4.243-.707-.707zM84.243 60l.707.707-4.243 4.243-.707-.707zM94.243 60l.707.707-4.243 4.243-.707-.707zM104.243 60l.707.707-4.243 4.243-.707-.707zM114.243 60l.707.707-4.243 4.243-.707-.707zM84.243 70l.707.707-4.243 4.243-.707-.707zM94.243 70l.707.707-4.243 4.243-.707-.707zM104.243 70l.707.707-4.243 4.243-.707-.707zM114.243 70l.707.707-4.243 4.243-.707-.707zM84.243 40l.707.707-4.243 4.243-.707-.707zM14.243 80l.707.707-4.243 4.243-.707-.707zM24.243 80l.707.707-4.243 4.243-.707-.707zM34.243 80l.707.707-4.243 4.243-.707-.707zM4.243 90l.707.707L.707 94.95 0 94.243zM14.243 90l.707.707-4.243 4.243-.707-.707zM24.243 90l.707.707-4.243 4.243-.707-.707zM34.243 90l.707.707-4.243 4.243-.707-.707zM4.243 100l.707.707-4.243 4.243-.707-.707zM14.243 100l.707.707-4.243 4.243-.707-.707zM24.243 100l.707.707-4.243 4.243-.707-.707zM34.243 100l.707.707-4.243 4.243-.707-.707zM4.243 110l.707.707-4.243 4.243-.707-.707zM14.243 110l.707.707-4.243 4.243-.707-.707zM24.243 110l.707.707-4.243 4.243-.707-.707zM34.243 110l.707.707-4.243 4.243-.707-.707zM4.243 80l.707.707L.707 84.95 0 84.243zM54.243 80l.707.707-4.243 4.243-.707-.707zM64.243 80l.707.707-4.243 4.243-.707-.707zM74.243 80l.707.707-4.243 4.243-.707-.707zM44.243 90l.707.707-4.243 4.243-.707-.707zM54.243 90l.707.707-4.243 4.243-.707-.707zM64.243 90l.707.707-4.243 4.243-.707-.707zM74.243 90l.707.707-4.243 4.243-.707-.707zM44.243 100l.707.707-4.243 4.243-.707-.707zM54.243 100l.707.707-4.243 4.243-.707-.707zM64.243 100l.707.707-4.243 4.243-.707-.707zM74.243 100l.707.707-4.243 4.243-.707-.707zM44.243 110l.707.707-4.243 4.243-.707-.707zM54.243 110l.707.707-4.243 4.243-.707-.707zM64.243 110l.707.707-4.243 4.243-.707-.707zM74.243 110l.707.707-4.243 4.243-.707-.707zM44.243 80l.707.707-4.243 4.243-.707-.707zM94.243 80l.707.707-4.243 4.243-.707-.707zM104.243 80l.707.707-4.243 4.243-.707-.707zM114.243 80l.707.707-4.243 4.243-.707-.707zM84.243 90l.707.707-4.243 4.243-.707-.707zM94.243 90l.707.707-4.243 4.243-.707-.707zM104.243 90l.707.707-4.243 4.243-.707-.707zM114.243 90l.707.707-4.243 4.243-.707-.707zM84.243 100l.707.707-4.243 4.243-.707-.707zM94.243 100l.707.707-4.243 4.243-.707-.707zM104.243 100l.707.707-4.243 4.243-.707-.707zM114.243 100l.707.707-4.243 4.243-.707-.707zM84.243 110l.707.707-4.243 4.243-.707-.707zM94.243 110l.707.707-4.243 4.243-.707-.707zM104.243 110l.707.707-4.243 4.243-.707-.707zM114.243 110l.707.707-4.243 4.243-.707-.707zM84.243 80l.707.707-4.243 4.243-.707-.707z"></path>
            </svg>
            <div class="grid box">
                <div class="grid-column-12 grid-column-6--lg z-index-2"><h1 class="title">Avax Message в
                        цифрах</h1>
                    <p>В учетной записи пользователя вы можете покупать акции Avax со своего личного баланса. Акции
                        будут приобретены по текущему курсу на момент покупки.</p>
                    <div class="grid">
                        <div class="grid-column-12 grid-column-6--lg padding-y-3 padding-right-2">
                            <div class="shares-guest__chart--title color-primary">{{ \App\TrackingItem::query()->latest('datetime')->whereNull('user_id')->where('datetime', '<', now())->first(['value'])->value ?? 8 }} USD</div>
                            <div class="shares-guest__chart--subtitle">ЦЕНА СЕЙЧАС</div>
                        </div>
                        <div class="grid-column-12 grid-column-6--lg padding-y-3 padding-right-2">
                            <div class="shares-guest__chart--title color-green">247 USD</div>
                            <div class="shares-guest__chart--subtitle">ОЖИДАЕМАЯ ЦЕНА ЗА 6 МЕСЯЦЕВ</div>
                        </div>
                        <div class="grid-column-12 grid-column-6--lg padding-y-3 padding-right-2">
                            <div class="shares-guest__chart--title">30231</div>
                            <div class="shares-guest__chart--subtitle">ВСЕГО ИНВЕСТОРОВ</div>
                        </div>
                        <div class="grid-column-12 grid-column-6--lg padding-y-3 padding-right-2">
                            <div data-v-98868d82="" class="timer_wrapper shares-actions--timer2 grey-6">
                                <div data-v-98868d82="" class="descriptions-slot">
                                    <div data-v-98868d82="" class="descriptions-slot__numbers">
                                        @foreach(str_split($diff->days) as $day)
                                        <span data-v-98868d82="" data-label="days" class="hours timer_wrapper-number grey-4 violet-5-text">
                                            {{ $day }}
                                        </span>
                                        @endforeach
                                    </div>
                                </div>
                                <span data-v-98868d82=""
                                      class="minutes timer_wrapper-dots violet-5-text violet-5-text">:</span>
                                <div data-v-98868d82="" class="descriptions-slot">
                                    <div data-v-98868d82="" class="descriptions-slot__numbers">
                                        @foreach(str_split(sprintf('%02d', $diff->h)) as $hour)
                                        <span data-v-98868d82="" data-label="hours" class="hours timer_wrapper-number grey-4 violet-5-text">
                                            {{ $hour }}
                                        </span>
                                        @endforeach
                                    </div>
                                </div>
                                <span data-v-98868d82=""
                                      class="minutes timer_wrapper-dots violet-5-text violet-5-text">:</span>
                                <div data-v-98868d82="" class="descriptions-slot">
                                    <div data-v-98868d82="" class="descriptions-slot__numbers">
                                        @foreach(str_split(sprintf('%02d', $diff->i)) as $minute)
                                        <span data-v-98868d82="" data-label="minutes" class="minutes timer_wrapper-number grey-4 violet-5-text">
                                            {{ $minute }}
                                        </span>
                                        @endforeach
                                    </div>
                                </div>
                                <span data-v-98868d82=""
                                      class="seconds timer_wrapper-dots violet-5-text violet-5-text">:</span>
                                <div data-v-98868d82="" class="descriptions-slot">
                                    <div data-v-98868d82="" class="descriptions-slot__numbers">
                                        @foreach(str_split(sprintf('%02d', $diff->s)) as $second)
                                        <span data-v-98868d82="" data-label="seconds" class="seconds timer_wrapper-number grey-4 violet-5-text">
                                            {{ $second }}
                                        </span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="shares-guest__chart--subtitle">ПРОДАЖА НАЧНЕТСЯ</div>
                        </div>
                    </div>
                    <div class="flex margin-y-4"><a data-v-141d1a81="" href="https://avax-finance.com/register"
                                                    class="button button--primary"><!----><span data-v-141d1a81=""
                                                                                                class="button__content">ИНВЕСТИРОВАТЬ В AVAX MESSAGE</span></a>
                    </div>
                </div>
                <div class="grid-column-12 grid-column-6--lg z-index-2 flex padding-3">
                    <div data-v-064e5e4d="" class="relative flex flex-grow">
                        <div data-v-064e5e4d="" id="chart" class="shares__chart flex-grow"
                             style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;"
                             _echarts_instance_="ec_1621545597926">
                            <div
                                style="position: relative; width: 542px; height: 351px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                                <canvas data-zr-dom-id="zr_0" width="542" height="351"
                                        style="position: absolute; left: 0px; top: 0px; width: 542px; height: 351px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                            </div>
                            <div
                                style="position: absolute; display: none; border-style: solid; white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s, top 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgb(255, 79, 67); border-width: 1px; border-color: rgb(255, 142, 63); border-radius: 4px; color: rgb(255, 255, 255); font: 16px / 24px sans-serif; padding: 6px 10px; left: 22px; top: 202px; pointer-events: none;">
                                2021-05-12 21:00<br><span
                                    style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:#FF7940;"></span>10
                                USD
                            </div>
                        </div><!----></div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
