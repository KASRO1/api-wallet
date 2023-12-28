<section id="sidebar">
    <ul class="sidebar-items p-0">
        <li class="sidebar-item sidebar-account">
            @if(empty(auth()->user()->avatar_url))
                <img src="{{asset('assets/images/profile/ava.png')}}" alt="Avatar">
            @else
                <img class="img-fluid" alt="avatar" src="{{ asset($user->avatar_url) }}">
            @endif
            <p class="sidebar-nickname">{{$user->name}}</p>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link @if(Route::current()->getName() == 'cabinet' || Route::current()->getName() == 'home') active @endif" href="{{route('cabinet')}}">
                <div class="sidebar-icon">@include('cabinet.new.icons.user-ico')</div>
                <p class="sidebar-name">{{__("Account")}}</p>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('cabinet.deposits')}}" class="sidebar-link @if(Route::current()->getName() == 'cabinet.deposits') active @endif">
                <div class="sidebar-icon">
                    @include('cabinet.new.icons.deposit-ico')
                </div>
                <p class="sidebar-name">{{__("My deposits")}}</p>
            </a>

        </li>
        <li class="sidebar-item">
            <a href="{{route('cabinet.conversion')}}" class="sidebar-link @if(Route::current()->getName() == 'cabinet.conversion') active @endif">
                <div class="sidebar-icon">
                    @include('cabinet.new.icons.swap')
                </div>
                <p class="sidebar-name">{{__("Swap")}}</p>
            </a>
        </li>
        @if($user->is_verified == 0)
            <li class="sidebar-item">
                <a href="{{route('cabinet.verification')}}" class="sidebar-link @if(Route::current()->getName() == 'cabinet.verification') active @endif">
                    <div class="sidebar-icon">
                        @include('cabinet.new.icons.verification')
                    </div>
                    <p class="sidebar-name">{{__("Verification")}}</p>
                </a>
            </li>
        @endif
        {{--<li class="sidebar-item">
            <a href="" class="sidebar-link">
            <div class="sidebar-icon">
                    @include('cabinet.new.icons.promo-ico')
                </div>
                <p class="sidebar-name">{{__("Promo material")}}</p>
            </a>

        </li>--}}
        <li class="sidebar-item">
            <a href="{{route('cabinet.withdraw')}}" class="sidebar-link @if(Route::current()->getName() == 'cabinet.withdraw') active @endif">
                <div class="sidebar-icon">
                    @include('cabinet.new.icons.withdraw-ico')
                </div>
                <p class="sidebar-name">{{__("Funds withdrawal")}}</p>
            </a>

        </li>
        <li class="sidebar-item">
            <a href="{{route('cabinet.deals')}}" class="sidebar-link @if(Route::current()->getName() == 'cabinet.deals') active @endif">
                <div class="sidebar-icon">
                    @include('cabinet.new.icons.transaction-ico')
                </div>
                <p class="sidebar-name">{{__("My transactions")}}</p>
            </a>

        </li>
        <li class="sidebar-item">
            <a href="{{route('cabinet.wallet')}}" class="sidebar-link @if(Route::current()->getName() == 'cabinet.wallet') active @endif">
                <div class="sidebar-icon">@include('cabinet.new.icons.wallets-ico')</div>
                <p class="sidebar-name">{{__("My wallets")}}</p>
            </a>

        </li>
        @if($user->special_product)
        <li class="sidebar-item">
            <a href="{{route('cabinet.tracking')}}" class="sidebar-link @if(Route::current()->getName() == 'cabinet.tracking') active @endif">
                <div class="sidebar-icon">@include('cabinet.new.icons.charts')</div>
                <p class="sidebar-name">{{__("IDO")}}</p>
            </a>
        </li>
        @endif
        <li class="sidebar-item">
            <a href="{{route('cabinet.account')}}" class="sidebar-link @if(Route::current()->getName() == 'cabinet.account'
        || Route::current()->getName() == 'cabinet.password'
        || Route::current()->getName() == 'cabinet.requisites'
        || Route::current()->getName() == 'cabinet.socials') active @endif">
                <div class="sidebar-icon">
                    @include('cabinet.new.icons.settings-ico')
                </div>
                <p class="sidebar-name">{{__("Settings")}}</p>
            </a>

        </li>
    </ul>
</section>

