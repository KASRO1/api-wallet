@extends('admin.layout')

@section('content')
    <div class="container-fluid py-4">

        <div class="row">
            @if(session()->has('success'))
                <div class="col-12">
                    <div class="alert alert-success">
                        Данные успешно сохранены
                    </div>
                </div>
            @endif

            @if($errors->isNotEmpty())
                <div class="col-12">
                    <div class="alert alert-danger">
                        {{ implode(', ', $errors->all()) }}
                    </div>
                </div>
            @endif

            <div class="col-lg-6">
                <form method="POST" action="{{ route('admin.promocodes.update', $promocode) }}" class="row justify-content-center">
                    @csrf
                    @method('PATCH')
                    <div class="col-lg-12">
                        @include('admin.promocodes._form')
                        <div class="form-group row">
                            <div class="col-12 text-center">
                                <button class="btn btn-success">@lang('Сохранить')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        Активировали:
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-hover m-0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($promocode->users as $user)
                                <tr style="cursor: pointer" onclick="location.href='{{ route('admin.users.edit', $user) }}'">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
