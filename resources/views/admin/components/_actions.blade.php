@php
    if(!isset($route))
    {
        $route = Str::replaceLast('.index', '', Route::currentRouteName());
    }

    $options = array_merge([
        'show' => true,
        'edit' => true,
        'delete' => true,
    ], (array) ($options ?? []));
@endphp

@if($options['show'])
    <a href="{{ route($route . '.show', $data) }}" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></a>
@endif

@if($options['edit'])
    <a href="{{ route($route . '.edit', $data) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
@endif

@if($options['delete'])
    <form id="delete-form-{{ $data->id }}" action="{{ route($route .'.destroy', $data) }}" method="POST"
          style="display: none;">
        @csrf
        @method('delete')
    </form>

    <a  class="btn btn-sm btn-danger" href="{{ route($route .'.destroy', $data) }}"
        onclick="event.preventDefault(); if(confirm('Точно хотите удалить?')) {
            document.getElementById('delete-form-{{ $data->id }}').submit(); }">
        <i class="fas fa-trash"></i>
    </a>
@endif

@if(isset($options['hide']) ? $options['hide'] : false)
    <form id="hide-form-{{ $data->id }}" action="{{ route($route .'.hide', $data) }}" method="POST"
          style="display: none;">
        @csrf
        @method('patch')
    </form>
    <a  class="btn btn-sm btn-danger" href="{{ route($route .'.hide', $data) }}"
        onclick="
            event.preventDefault();
            if(confirm('Точно хотите скрыть?')) {
            document.getElementById('hide-form-{{ $data->id }}').submit();
            // document.location.href = event.currentTarget.href;
            }
            ">
        <i class="fa fa-eye-slash"></i>
    </a>
@endif
