<div class="mobile-nav">
    <a href="{{ route('home') }}" class="logo">
        <img src="{{ asset('images/white-logo.png') }}" alt="Logo">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-bars"></span>
    </button>

    <div class="collapse navbar-collapse mobile-nav" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <ul class="navbar-nav m-auto">
                <li class="nav-item"><a href="{{ route('home') }}">@lang('app.Главная')</a></li>
                <li class="nav-item"><a href="{{ route('page.about') }}" class="nav-link dropdown-toggle">@lang('app.О компании')</a></li>
                <li class="nav-item"><a href="{{ route('page.faq') }}" class="nav-link dropdown-toggle">@lang('app.Вопросы')</a>
                </li>
                <li class="nav-item"><a href="{{ route('page.news') }}" class="nav-link dropdown-toggle">@lang('app.Новости')</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('page.partners') }}" class="nav-link dropdown-toggle">@lang('app.Партнерам')</a>
                </li>
                <li class="nav-item"><a href="{{ route('page.support') }}" class="nav-link dropdown-toggle">@lang('app.Контакты')</a>
                </li>
            </ul>
        </ul>
    </div>
</div>
