@extends('admin.layout')

@section('content')
    <div class="container-fluid">

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Тема</th>
                <th>E-mail</th>
                <th>Сообщение</th>
                <th>Создан в</th>
                <th class="text-right"></th>
            </tr>
            </thead>
            <tbody>
            @forelse($supports as $item)
                <tr>
                    <td data-label="#">{{ $item->id }}</td>
                    <td data-label="Тема">{{ $item->topic }}</td>
                    <td data-label="E-mail">{{ $item->email }}</td>
                    <td data-label="Сообщение">{{ $item->message }}</td>
                    <td data-label="Создан в">{{ $item->created_at }}</td>
                    <td data-label="" class="text-right">
                        <div class="btn-group">
                            @include('admin.components._actions', ['data' => $item, 'options' => ['show' => false, 'edit' => false]])
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Сообщение не найдено</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        <div>
            {{ $supports->render() }}
        </div>
    </div>
@endsection
