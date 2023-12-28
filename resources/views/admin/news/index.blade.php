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
                <th>Дата публикации</th>
                <th class="text-right">
                    <a href="{{ route('admin.news.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i></a>
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse($news as $item)
                <tr>
                    <td data-label="#">{{ $item->id }}</td>
                    <td data-label="Название">{{ $item->title }}</td>
                    <td data-label="Дата публикации">{{ $item->publised_at }}</td>
                    <td data-label="" class="text-right">
                        <div class="btn-group">
                            @include('admin.components._actions', ['data' => $item, 'options' => ['show' => false]])
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Новостей не найдено</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        <div>
            {{ $news->render() }}
        </div>
    </div>
@endsection
