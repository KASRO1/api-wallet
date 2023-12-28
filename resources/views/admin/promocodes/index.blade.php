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
                <th>Название</th>
                <th>Код</th>
                <th>Процент</th>
                <th>Использован</th>
                <th class="text-right">
                    <a href="{{ route('admin.promocodes.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i></a>
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse($promocodes as $promocode)
                <tr>
                    <td data-label="#">{{ $promocode->id }}</td>
                    <td data-label="Название">{{ $promocode->name }}</td>
                    <td data-label="Код">{{ $promocode->code }}</td>
                    <td data-label="Процент">{{ $promocode->value }}%</td>
                    <td data-label="Использован">{{ $promocode->users()->count() }} раз</td>
                    <td class="text-right">
                        <div class="btn-group">
                            @include('admin.components._actions', ['data' => $promocode, 'options' => ['show' => false]])
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Промокодов не найдено</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        <div>
            {{ $promocodes->render() }}
        </div>
    </div>
@endsection
