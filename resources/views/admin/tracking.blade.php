@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        @if(session('success'))
            <div class="alert col-12 col-md-6 offset-md-3 alert-success my-4" role="alert">
                Успешно!
            </div>
        @endif
            @if(session('error'))
                <div class="alert alert-danger my-4 col-12 col-md-6 offset-md-3">{{ session('error') }}</div>
            @endif
            <h2 class="col-12 text-center my-4">Сгенерировать график</h2>
        <form method="POST" class="col-12 col-md-6 offset-md-3" action="{{route('admin.graph.build')}}">
            @csrf
            <x-formGroup name="open" label="Стартовая цена">
                <input type="text" value="{{old('open')}}"
                       class="form-control col-12 {{ $errors->has('open') ? 'is-invalid' : '' }}" name="open">
            </x-formGroup>
            <x-formGroup name="close" label="Коннечная цена">
                <input type="text" value="{{old('close')}}"
                       class="form-control col-12 {{ $errors->has('close') ? 'is-invalid' : '' }}" name="close">
            </x-formGroup>
            <x-formGroup name="start_time" label="Дата начала">
                <input type="date"
                       class="form-control col-12 {{ $errors->has('start_time') ? 'is-invalid' : '' }}"
                       name="start_time"
                       value="{{ old('start_time') }}">
            </x-formGroup>
            <x-formGroup name="duration" label="Дни со старта">
                <input type="number" value="{{old('duration')}}"
                       name="duration"
                       class="form-control col-12 {{ $errors->has('duration') ? 'is-invalid' : '' }}">
            </x-formGroup>
            <x-formGroup name="user" label="Пользователь">
                <select name="user_id" class="form-control">
                    <option value="-1">Пользователь</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </x-formGroup>
            <button class="btn btn-primary" type="submit">Сгенерировать свечи</button>
        </form>

            <h2 class="col-12 text-center my-4">Изменить свечи</h2>
            <form method="POST" class="col-12 col-md-6 offset-md-3 mt-4" action="{{route('admin.graph.modify')}}">
            @csrf
            <x-formGroup name="high" label="High">
                <input type="text" value="{{old('high')}}"
                       class="form-control col-12" name="high">
            </x-formGroup>
            <x-formGroup name="low" label="Low">
                <input type="text" value="{{old('low')}}"
                       class="form-control col-12" name="low">
            </x-formGroup>
            <x-formGroup name="open" label="Open">
                <input type="text"
                       class="form-control col-12"
                       name="open"
                       value="{{ old('open') }}">
            </x-formGroup>
            <x-formGroup name="close" label="Close">
                <input type="text" value="{{old('close')}}"
                       name="close"
                       class="form-control col-12">
            </x-formGroup>
            <x-formGroup name="time" label="Дата (парные часы)">
                <input type="datetime-local"
                       class="form-control col-12"
                       name="time"
                       value="{{ old('time') }}">
            </x-formGroup>
            <x-formGroup name="user" label="Пользователь">
                <select name="user_id" class="form-control">
                    <option value="-1">Пользователь</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </x-formGroup>
            <button class="btn btn-primary" type="submit">Добавить свечь</button>
        </form>

        <form class="col-12 col-md-6 offset-md-3 text-right my-4" method="POST" action="{{route('admin.graph.destroy')}}">
            @csrf
            <button class="btn btn-danger">Удалить графики</button>
        </form>


    </div>
@endsection
