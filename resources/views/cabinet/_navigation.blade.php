<app-menu _ngcontent-c0="" _nghost-c2="">
    <nav class="user-page__side-menu  side-menu  d-2-none">
        <a class="side-menu__link @if(Route::currentRouteName() == 'cabinet') _active @endif" href="{{ route('cabinet') }}"><span
                class="side-menu__ico-wrap"><svg
                    style="width: 24rem; height: 21rem"><use

                        xlink:href="/img/svg/sprite-user-menu.svg#ico-desk"></use></svg></span><span
                class="side-menu__text">Главная</span></a>
        <a class="side-menu__link @if(Route::currentRouteName() == 'income') _active @endif" href="{{ route('income') }}"><span
                class="side-menu__ico-wrap"><svg
                    style="width: 40rem; height: 25rem"><use

                        xlink:href="/img/svg/sprite-user-menu.svg#ico-money-bill-alt"></use></svg></span><span
                class="side-menu__text">Инвестировать</span></a><a
            class="side-menu__link @if(Route::currentRouteName() == 'cabinet.deposits.new') _active @endif"
            href="{{ route('cabinet.deposits.new') }}"><span
                class="side-menu__ico-wrap"><svg
                    style="width: 29rem; height: 24rem"><use
                        xlink:href="/img/svg/sprite-user-menu.svg#ico-invest"></use></svg></span><span
                class="side-menu__text">Новый депозит</span></a><a
            class="side-menu__link @if(Route::currentRouteName() == 'cabinet.deposits') _active @endif"
            href="{{ route('cabinet.deposits') }}"><span
                class="side-menu__ico-wrap"><svg
                    style="width: 24rem; height: 24rem"><use

                        xlink:href="/img/svg/sprite-user-menu.svg#ico-graph"></use></svg></span><span
                class="side-menu__text">Мои депозиты</span></a>
        {{--        <a--}}
        {{--                                                                                     class="side-menu__link"--}}
        {{--                                                                                     href="#"><span--}}
        {{--                 class="side-menu__ico-wrap"><svg --}}
        {{--                                                                  style="width: 28.5rem; height: 28.5rem"><use--}}
        {{--                         xlink:href="/img/svg/sprite-user-menu.svg#ico-diagram"></use></svg></span><span--}}
        {{--                 class="side-menu__text">Мои операции</span></a>--}}
        <a class="side-menu__link @if(Route::currentRouteName() == 'cabinet.account') _active @endif"

           href="{{ route('cabinet.account') }}"><span
                class="side-menu__ico-wrap"><svg
                    style="width: 24rem; height: 24rem"><use
                        xlink:href="/img/svg/sprite-user-menu.svg#ico-person"></use></svg></span><span
                class="side-menu__text">Личные данные</span></a>
        <a class="side-menu__link @if(Route::currentRouteName() == 'cabinet.transfer') _active @endif" href="{{ route('cabinet.transfer') }}"><span
                class="side-menu__ico-wrap"><svg
                    style="width: 21rem; height: 20rem"><use
                        xlink:href="/img/svg/sprite-user-menu.svg#ico-transaction"></use></svg></span><span
                class="side-menu__text">Внутренний перевод</span></a>
        <a class="side-menu__link @if(Route::currentRouteName() == 'cabinet.referals') _active @endif" href="{{ route('cabinet.referals') }}"><span
                class="side-menu__ico-wrap"><svg
                    style="width: 28rem; height: 28rem"><use

                        xlink:href="/img/svg/sprite-user-menu.svg#ico-partners"></use></svg></span><span
                class="side-menu__text">Реф. система</span></a>
{{--        <a--}}
{{--            class="side-menu__link"--}}
{{--            href="/ru/referal-transactions"><span--}}
{{--                class="side-menu__ico-wrap"><svg--}}
{{--                    style="width: 31.6rem; height: 30.5rem"><use--}}

{{--                        xlink:href="/img/svg/sprite-user-menu.svg#ico-partners-account"></use></svg></span><span--}}
{{--                class="side-menu__text">Партнёрский счёт</span></a>--}}
        <a class="side-menu__link @if(Route::currentRouteName() == 'cabinet.outcome') _active @endif" href="{{ route('cabinet.outcome') }}"><span
                class="side-menu__ico-wrap"><svg
                    style="width: 40rem; height: 25rem"><use

                        xlink:href="/img/svg/sprite-user-menu.svg#ico-money-bill-alt"></use></svg></span><span
                class="side-menu__text">Вывод средств</span></a>
        <a class="side-menu__link @if(Route::currentRouteName() == 'cabinet.requisites') _active @endif" href="{{ route('cabinet.requisites') }}"><span
                class="side-menu__ico-wrap"><svg
                    style="width: 25rem; height: 21rem"><use
                        xlink:href="/img/svg/sprite-user-menu.svg#ico-wallet"></use></svg></span><span
                class="side-menu__text">Мои реквизиты</span></a>
        <a class="side-menu__link @if(Route::currentRouteName() == 'cabinet.password') _active @endif" href="{{ route('cabinet.password') }}"><span
                class="side-menu__ico-wrap"><svg
                    style="width: 20rem; height: 25rem"><use

                        xlink:href="/img/svg/sprite-user-menu.svg#ico-lock"></use></svg></span><span
                class="side-menu__text">Смена пароля</span></a>
        <a class="side-menu__link @if(Route::currentRouteName() == 'cabinet.verification') _active @endif" href="{{ route('cabinet.verification') }}"><span
                class="side-menu__ico-wrap"><svg
                    style="width: 21rem; height: 26rem"><use

                        xlink:href="/img/svg/sprite-user-menu.svg#ico-verification"></use></svg></span><span
                class="side-menu__text">Верификация личности</span></a>
{{--        <a--}}
{{--            class="side-menu__link"--}}

{{--            href="/ru/social-rewards"><span--}}
{{--                class="side-menu__ico-wrap"><svg--}}
{{--                    style="width: 24rem; height: 24rem"><use--}}

{{--                        xlink:href="/img/svg/sprite-user-menu.svg#ico-medal"></use></svg></span><span--}}
{{--                class="side-menu__text">Вознаграждения</span></a>--}}
        <a class="side-menu__link @if(Route::currentRouteName() == 'cabinet.calculator') _active @endif" href="{{ route('cabinet.calculator') }}"><span
                class="side-menu__ico-wrap"><svg
                    style="width: 24rem; height: 24rem"><use

                        xlink:href="/img/svg/sprite-user-menu.svg#ico-calc"></use></svg></span><span
                class="side-menu__text">Калькулятор инвестора</span></a>
{{--        <a--}}
{{--            class="side-menu__link"--}}
{{--            target="_blank"--}}
{{--            href="https://cashstrim.com/ru/contact"><span--}}
{{--                class="side-menu__ico-wrap"><svg--}}
{{--                    style="width: 24rem; height: 24rem"><use--}}

{{--                        xlink:href="/img/svg/sprite-user-menu.svg#ico-help"></use></svg></span><span--}}
{{--                class="side-menu__text">Помощь</span></a>--}}
    </nav>
</app-menu>
