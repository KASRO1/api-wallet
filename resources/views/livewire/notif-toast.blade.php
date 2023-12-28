@if($list)
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-{{ $notification->created_at->format('i-s') }}">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-{{ $notification->created_at->format('i__s') }}" aria-expanded="true" aria-controls="panelsStayOpen-{{ $notification->created_at->format('i__s') }}">
               {{ $notification->title }} ({{ $notification->created_at->format('Y-m-d, H:i:s') }})
            </button>
        </h2>
        <div id="panelsStayOpen-{{ $notification->created_at->format('i__s') }}" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-{{ $notification->created_at->format('i-s') }}">
            <div class="accordion-body">
                {!! $notification->text !!}
            </div>
        </div>
    </div>
@else
    <div class="toast @if(!$notification->is_read) show @endif" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">{{$notification->title}}</strong>
            <small>{{$notification->created_at}}</small>
            <button wire:click="open" type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {!! $notification->text !!}
        </div>
    </div>

@endif
