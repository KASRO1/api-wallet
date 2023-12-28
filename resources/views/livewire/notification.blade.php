@if($list == 'true')

    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
    {{$notification}}            {{ $notification->title }} ({{ $notification->created_at->format('Y-m-d, H:i:s') }})
            </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
                {!! $notification->text !!}
            </div>
        </div>
    </div>
@else
    <li data-v-1f79091c=""
        class="grid-column-12 animate-zoom-fade-in-down transparent border-rounded-3 shadowed overflow-hidden"
        style="animation-delay: 0s;">
        <div data-v-1f79091c="" wire:click="open"
             class="flex justify-between items-center color-gray cursor-pointer padding-3 hover-shade">
            <div data-v-1f79091c=""> {{ $notification->title }}</div>
            <small data-v-1f79091c="" class="flex items-center flex-no-shrink">
                @if(! $notification->is_read)
                    <div data-v-1f79091c="" class="width-0-5 height-0-5 border-round bg-primary"></div>
                @endif
                <span data-v-1f79091c="" class="margin-x-3">{{ $notification->created_at->format('Y-m-d, H:i:s') }}</span>
                <svg data-v-1f79091c="" viewBox="0 0 6 10" fill="none" mlns="http://www.w3.org/2000/svg" class="height-0-5 fill-gray flex-no-shrink"><path data-v-1f79091c="" d="M3.172 5L.343 2.172 1.757.757 6 5 1.757 9.243.343 7.828 3.172 5z" fill="#fff"></path></svg>
            </small>
        </div>
        @if($openned)
            <div data-v-1f79091c="" class="notification-description padding-3 notification-description--active">
                <p>{!! $notification->text !!}</p>
            </div>
        @endif
    </li>

@endif
