@extends('layouts.app')

@section('title', 'Моя структура')

@section('content')
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
        <div data-v-98a0e610=""
             class="padding-top-4 shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">
            <div data-v-98a0e610="" class="padding-x-3 padding-bottom-3 border-bottom-gray relative">
                <div data-v-98a0e610="" class="grid grid-row-gap-3 grid-column-gap-4--md shadowed border-rounded-3">
                    <div data-v-98a0e610="" class="grid grid-row-gap-3 grid-column-gap-3--sm grid-column-12 grid-column-12--lg relative">
                        <div data-v-98a0e610="" class="hidden block--lg vertical-divider absolute right-0 top-0 bottom-0 margin-y-auto"></div>
                        <div data-v-98a0e610="" class="flex flex-column items-start justify-between grid-column-12 grid-column-3--sm padding-3 relative">
                            <div data-v-98a0e610="" class="hidden block--sm vertical-divider absolute right-0 top-0 bottom-0 margin-y-auto"></div>
                            <svg data-v-98a0e610="" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 margin-bottom-4"><path data-v-98a0e610="" d="M10 9a5 5 0 015 5v6H5v-6a5 5 0 015-5zm-6.712 3.006a6.984 6.984 0 00-.28 1.65L3 14v6H0v-4.5a3.5 3.5 0 013.119-3.48l.17-.014h-.001zm13.424 0A3.501 3.501 0 0120 15.5V20h-3v-6c0-.693-.1-1.362-.288-1.994zM3.5 6a2.5 2.5 0 110 5 2.5 2.5 0 010-5zm13 0a2.5 2.5 0 110 5 2.5 2.5 0 010-5zM10 0a4 4 0 110 8 4 4 0 010-8z" fill="#F85446"></path></svg>
                            <div data-v-98a0e610="" class="flex items-center text-accent">
                                <div data-v-98a0e610="" class="font-lg">
                                    {{ \App\Support\Helpers::getReferalsBalance($user) }}
                                    <svg data-v-5851cc65="" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 margin-right-2" style="fill: rgb(13, 129, 59);"><path data-v-5851cc65="" d="M9.391 9.498c0 .328-.106.715-.915.835V8.836c.29.09.52.185.68.281.163.098.235.215.235.381zM6.96 5.923c.165-.122.376-.208.63-.257V7.23a2.758 2.758 0 01-.67-.288.515.515 0 01-.246-.47c0-.232.09-.406.286-.55z"></path><path data-v-5851cc65="" clip-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zm-8.287 4.458c.08.08.192.125.315.125.122 0 .23-.04.313-.116a.422.422 0 00.136-.322v-.528c.39-.043.743-.14 1.048-.29.37-.182.661-.426.866-.727.209-.306.315-.658.315-1.045 0-.47-.124-.857-.367-1.147a2.22 2.22 0 00-.857-.63 7.198 7.198 0 00-1.006-.32V5.624c.38.026.752.104 1.108.23a.58.58 0 00.685-.143.623.623 0 00.162-.422.602.602 0 00-.418-.596 5.501 5.501 0 00-1.537-.316v-.511a.438.438 0 00-.448-.448.423.423 0 00-.32.136.448.448 0 00-.119.312v.526a3.008 3.008 0 00-1.092.313c-.369.196-.654.457-.848.778a2.02 2.02 0 00-.288 1.057c0 .447.124.818.368 1.103.231.27.518.478.853.621.275.117.614.232 1.008.34v1.752a4.205 4.205 0 01-1.402-.338.692.692 0 00-.274-.057.61.61 0 00-.618.619c0 .136.04.258.121.362.075.1.17.173.282.22a5.87 5.87 0 001.891.46v.523a.43.43 0 00.123.314z"></path></svg>
                                </div>
                            </div>
                            <div data-v-98a0e610="" class="text-accent font-medium"> Общие инвестиции партнеров</div>
                        </div>
{{--                        <div data-v-98a0e610="" class="flex flex-column items-start justify-between grid-column-12 grid-column-3--sm padding-3 relative">--}}
{{--                            <div data-v-98a0e610="" class="hidden block--sm vertical-divider absolute right-0 top-0 bottom-0 margin-y-auto"></div>--}}
{{--                            <svg data-v-98a0e610="" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 margin-bottom-4"><path data-v-98a0e610="" d="M10 9a5 5 0 015 5v6H5v-6a5 5 0 015-5zm-6.712 3.006a6.984 6.984 0 00-.28 1.65L3 14v6H0v-4.5a3.5 3.5 0 013.119-3.48l.17-.014h-.001zm13.424 0A3.501 3.501 0 0120 15.5V20h-3v-6c0-.693-.1-1.362-.288-1.994zM3.5 6a2.5 2.5 0 110 5 2.5 2.5 0 010-5zm13 0a2.5 2.5 0 110 5 2.5 2.5 0 010-5zM10 0a4 4 0 110 8 4 4 0 010-8z" fill="#F85446"></path></svg>--}}
{{--                            <div data-v-98a0e610="" class="flex items-center text-accent">--}}
{{--                                <div data-v-98a0e610="" class="font-lg">{{ $referalsCount }}</div>--}}
{{--                                <div data-v-98a0e610=""--}}
{{--                                     class="flex items-center bg-litest-green border-rounded-2 font-medium font-xs overflow-hidden margin-left-2">--}}
{{--                                    <div data-v-98a0e610="" class="padding-x-2 color-white bg-green border-rounded-2">--}}
{{--                                        {{ $activeReferals }}--}}
{{--                                    </div>--}}
{{--                                    <div data-v-98a0e610="" class="color-green padding-x-2">Активный</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div data-v-98a0e610="" class="text-accent font-medium"> Всего партнеров</div>--}}
{{--                        </div>--}}
                        <div data-v-98a0e610="" class="flex flex-column items-start justify-between grid-column-12 grid-column-3--sm padding-3 relative">
                            <svg data-v-98a0e610="" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 margin-bottom-4"><path data-v-98a0e610="" d="M10 14H0v2h10v-2zM10 7H0v2h10V7zM18 0H0v2h18V0zM14 9h2v5h-2v2h6v-2h-2V7h-4v2z" fill="#F85446"></path></svg>
                            <div data-v-98a0e610="" class="flex items-center text-accent">
                                <div data-v-98a0e610="" class="font-lg">{{ count($referals[0]) }}</div>
                                <div data-v-98a0e610=""
                                     class="flex items-center bg-litest-green border-rounded-2 font-medium font-xs overflow-hidden margin-left-2">
                                    <div data-v-98a0e610="" class="padding-x-2 color-white bg-green border-rounded-2">
                                        {{ count($activeReferalsList[0]) }}
                                    </div>
                                    <div data-v-98a0e610="" class="color-green padding-x-2">Активный</div>
                                </div>
                            </div>
                            <div data-v-98a0e610="" class="text-accent font-medium"> Партнеры первой линии</div>
                        </div>
                        <div data-v-98a0e610="" class="flex flex-column items-start justify-between grid-column-12 grid-column-3--sm padding-3 relative">
                            <svg data-v-98a0e610="" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 margin-bottom-4"><path data-v-98a0e610="" d="M10 14H0v2h10v-2zM10 7H0v2h10V7zM18 0H0v2h18V0zM14 9h2v5h-2v2h6v-2h-2V7h-4v2z" fill="#F85446"></path></svg>
                            <div data-v-98a0e610="" class="flex items-center text-accent">
                                <div data-v-98a0e610="" class="font-lg">{{ count($referals[1]) }}</div>
                                <div data-v-98a0e610=""
                                     class="flex items-center bg-litest-green border-rounded-2 font-medium font-xs overflow-hidden margin-left-2">
                                    <div data-v-98a0e610="" class="padding-x-2 color-white bg-green border-rounded-2">
                                        {{ count($activeReferalsList[1]) }}
                                    </div>
                                    <div data-v-98a0e610="" class="color-green padding-x-2">Активный</div>
                                </div>
                            </div>
                            <div data-v-98a0e610="" class="text-accent font-medium"> Партнеры второй линии</div>
                        </div>
                        <div data-v-98a0e610="" class="flex flex-column items-start justify-between grid-column-12 grid-column-3--sm padding-3 relative">
                            <svg data-v-98a0e610="" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 margin-bottom-4"><path data-v-98a0e610="" d="M10 14H0v2h10v-2zM10 7H0v2h10V7zM18 0H0v2h18V0zM14 9h2v5h-2v2h6v-2h-2V7h-4v2z" fill="#F85446"></path></svg>
                            <div data-v-98a0e610="" class="flex items-center text-accent">
                                <div data-v-98a0e610="" class="font-lg">{{ count($referals[2]) }}</div>
                                <div data-v-98a0e610=""
                                     class="flex items-center bg-litest-green border-rounded-2 font-medium font-xs overflow-hidden margin-left-2">
                                    <div data-v-98a0e610="" class="padding-x-2 color-white bg-green border-rounded-2">
                                        {{ count($activeReferalsList[2]) }}
                                    </div>
                                    <div data-v-98a0e610="" class="color-green padding-x-2">Активный</div>
                                </div>
                            </div>
                            <div data-v-98a0e610="" class="text-accent font-medium"> Партнеры третьей линии</div>
                        </div>
                    </div>
                </div>
                <div data-v-98a0e610="" class="margin-top-3 color-white">
                    <div data-v-98a0e610=""
                         class="padding-x-3 padding-top-3 padding-bottom-3 bg-wave-orange-4 bg-no-repeat bg-center bg-cover border-rounded-3">
                        <div data-v-98a0e610="" class="flex--sm items-center padding-y-3">
                            <div data-v-98a0e610=""
                                 class="avatar-border flex justify-center items-center flex-no-shrink width-5 height-5 border-round bg-no-repeat bg-center bg-cover"
                                 style="background: linear-gradient(266.9deg, rgb(255, 61, 84) 0%, rgb(255, 135, 67) 87.88%);">
                                <svg data-v-98a0e610="" viewBox="0 0 16 21" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" class="height-half-full fill-white">
                                    <path data-v-98a0e610=""
                                          d="M0 21a8 8 0 0116 0H0zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z"></path>
                                </svg>
                            </div>
                            <div data-v-98a0e610=""
                                 class="min-width-none flex flex-column items-start margin-left-3--sm margin-top-3 margin-top-0--sm">
                                <b data-v-98a0e610="">{{ auth()->user()->name }}</b>
                                <div data-v-98a0e610="" class="font-sm"> Это ваша реферальная ссылка для приглашения
                                    партнеров.
                                </div>
                                <div data-v-98a0e610="" class="flex items-center font-sm max-width-full"><span
                                        data-v-98a0e610="" class="flex-grow overflow-hidden text-dots text-nowrap">
                                        {{ route('register', ['code' => $user->code]) }}
                                    </span>
                                </div>
                            </div>
                        </div><!----></div>
                </div>
            </div>

            <div data-v-98a0e610="" class="padding-x-3 padding-bottom-3">
                <div class="margin-y-3">
                    <b>Первый уровень</b>
                </div>
                <div data-v-98a0e610="" class="padding-0-15 shadowed border-rounded-3 overflow-auto fix-tooltip">
                    <table data-v-98a0e610="" class="table width-full text-nowrap table--no-hover">
                        <thead data-v-98a0e610="">
                        <tr data-v-98a0e610="" class="font-sm color-gray bg-litest-gray">
                            <th class="padding-3 font-medium text-left">@lang('app.Всего приглашено')</th>
                            <th class="padding-3 font-medium text-left">@lang('app.Дата')</th>
                            <th class="padding-3 font-medium text-left">@lang('app.Статус')</th>
                        </tr>
                        </thead>
                        <tbody data-v-98a0e610=""><!---->
                        @forelse($referals[0] as $item)
                            <tr>
                                <td class="padding-3 font-medium text-left">{{ $item->hidden_email }}</td>
                                <td class="padding-3 font-medium text-left">{{ $item->created_at->format('d.m.Y') }}</td>
                                <td class="padding-3 font-medium text-left">{{ $item->is_depositet ? __('app.Активен') : __('app.Не активен') }}</td>
                            </tr>
                        @empty
                            <tr data-v-98a0e610="">
                                <td data-v-98a0e610="" colspan="3"
                                    class="text-center text-accent padding-3 color-gray font-medium"> Нет партнеров для
                                    показа
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div data-v-98a0e610="" class="padding-x-3 padding-bottom-3">
                <div class="margin-y-3">
                    <b>Второй уровень</b>
                </div>
                <div data-v-98a0e610="" class="padding-0-15 shadowed border-rounded-3 overflow-auto fix-tooltip">
                    <table data-v-98a0e610="" class="table width-full text-nowrap table--no-hover">
                        <thead data-v-98a0e610="">
                        <tr data-v-98a0e610="" class="font-sm color-gray bg-litest-gray">
                            <th class="padding-3 font-medium text-left">@lang('app.Всего приглашено')</th>
                            <th class="padding-3 font-medium text-left">@lang('app.Дата')</th>
                            <th class="padding-3 font-medium text-left">@lang('app.Статус')</th>
                        </tr>
                        </thead>
                        <tbody data-v-98a0e610=""><!---->
                        @forelse($referals[1] as $item)
                            <tr>
                                <td class="padding-3 font-medium text-left">{{ $item->hidden_email }}</td>
                                <td class="padding-3 font-medium text-left">{{ $item->created_at->format('d.m.Y') }}</td>
                                <td class="padding-3 font-medium text-left">{{ $item->is_depositet ? __('app.Активен') : __('app.Не активен') }}</td>
                            </tr>
                        @empty
                            <tr data-v-98a0e610="">
                                <td data-v-98a0e610="" colspan="3"
                                    class="text-center text-accent padding-3 color-gray font-medium"> Нет партнеров для
                                    показа
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div data-v-98a0e610="" class="padding-x-3 padding-bottom-3">
                <div class="margin-y-3">
                    <b>Третий уровень</b>
                </div>
                <div data-v-98a0e610="" class="padding-0-15 shadowed border-rounded-3 overflow-auto fix-tooltip">
                    <table data-v-98a0e610="" class="table width-full text-nowrap table--no-hover">
                        <thead data-v-98a0e610="">
                        <tr data-v-98a0e610="" class="font-sm color-gray bg-litest-gray">
                            <th class="padding-3 font-medium text-left">@lang('app.Всего приглашено')</th>
                            <th class="padding-3 font-medium text-left">@lang('app.Дата')</th>
                            <th class="padding-3 font-medium text-left">@lang('app.Статус')</th>
                        </tr>
                        </thead>
                        <tbody data-v-98a0e610=""><!---->
                        @forelse($referals[2] as $item)
                            <tr>
                                <td class="padding-3 font-medium text-left">{{ $item->hidden_email }}</td>
                                <td class="padding-3 font-medium text-left">{{ $item->created_at->format('d.m.Y') }}</td>
                                <td class="padding-3 font-medium text-left">{{ $item->is_depositet ? __('app.Активен') : __('app.Не активен') }}</td>
                            </tr>
                        @empty
                            <tr data-v-98a0e610="">
                                <td data-v-98a0e610="" colspan="3"
                                    class="text-center text-accent padding-3 color-gray font-medium"> Нет партнеров для
                                    показа
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('old-content')
    <main class="page-content">
        <div class="page-content__content  user-page">
            @include('cabinet._navigation')
            <app-partners _nghost-c8=""><!---->
                <div class="user-page__main">
                    <section class="user-section fadeInUp" data-show-animation="fadeInUp" style="margin-bottom: 10rem;">
                        <h2 class="user-section__title g-fs-20 d-2-none">Мои партнёры</h2>
                    </section>
                    <div style="width: 100%">
                        <div class="table-responsive">
                            <table class="table-2 stats-table">
                                <tbody>
                                <tr>
                                    <th>@lang('app.Всего приглашено')</th>
                                    <th>@lang('app.Бонусы')</th>
                                    <th>@lang('app.Ваш код приглашения')</th>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="my-referal-code">{{ count($referals[0]) + count($referals[1]) + count($referals[2]) }}</span>
                                    </td>
                                    <td>
                                        {{ (count($referals[0]) * 0.09) + (count($referals[1]) * 0.04) + (count($referals[2]) * 0.02) }}%
                                    </td>
                                    <td>
                                    <span class="referal-code my-referal-code">
                                        {{ $user->code }} <br>
                                        <small>{{ route('register', ['code' => $user->code]) }}</small>
                                    </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <section class="user-section fadeInUp" data-show-animation="fadeInUp" style="margin-bottom: 10rem;">
                        <div class="user-section__text ">
                            <p>Первый уровень</p>
                        </div>
                    </section>
                    <div data-show-animation="fadeInUp" style="width: 100%" class="fadeInUp">
                        <section class="user-section  _full-deck-content">
                            <div class="table-responsive">
                                <table class="table-2 d-block">
                                    <tbody>
                                    <tr>
                                        <th>Email</th>
                                        <th>@lang('app.Дата')</th>
                                        <th>@lang('app.Бонус')</th>
                                    </tr>
                                    @forelse($referals[0] as $item)
                                        <tr>
                                            <td>{{ $item->hidden_email }}</td>
                                            <td>{{ $item->created_at->format('d.m.Y') }}</td>
                                            <td>{{ $item->is_depositet ? __('app.Активен') : __('app.Не активен') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">@lang('app.Приглашений нет')</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                    <section class="user-section fadeInUp" data-show-animation="fadeInUp" style="margin-bottom: 10rem;">
                        <div class="user-section__text ">
                            <p>Второй уровень</p>
                        </div>
                    </section>
                    <div data-show-animation="fadeInUp" style="width: 100%" class="fadeInUp">
                        <section class="user-section  _full-deck-content">
                            <div class="table-responsive">
                                <table class="table-2 d-block">
                                    <tbody>
                                    <tr>
                                        <th>Email</th>
                                        <th>@lang('app.Дата')</th>
                                        <th>@lang('app.Бонус')</th>
                                    </tr>
                                    @forelse($referals[1] as $item)
                                        <tr>
                                            <td>{{ $item->hidden_email }}</td>
                                            <td>{{ $item->created_at->format('d.m.Y') }}</td>
                                            <td>{{ $item->is_depositet ? __('app.Активен') : __('app.Не активен') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">@lang('app.Приглашений нет')</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                    <section class="user-section fadeInUp" data-show-animation="fadeInUp" style="margin-bottom: 10rem;">
                        <div class="user-section__text ">
                            <p>Третий уровень</p>
                        </div>
                    </section>
                    <div data-show-animation="fadeInUp" style="width: 100%" class="fadeInUp">
                        <section class="user-section  _full-deck-content">
                            <div class="table-responsive">
                                <table class="table-2 d-block">
                                    <tbody>
                                    <tr>
                                        <th>Email</th>
                                        <th>@lang('app.Дата')</th>
                                        <th>@lang('app.Бонус')</th>
                                    </tr>
                                    @forelse($referals[2] as $item)
                                        <tr>
                                            <td>{{ $item->hidden_email }}</td>
                                            <td>{{ $item->created_at->format('d.m.Y') }}</td>
                                            <td>{{ $item->is_depositet ? __('app.Активен') : __('app.Не активен') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">@lang('app.Приглашений нет')</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </app-partners>
        </div>
    </main>
@endsection
