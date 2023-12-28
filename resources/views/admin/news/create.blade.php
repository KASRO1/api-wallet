@extends('admin.layout')

@section('content')
    <div class="container-fluid py-4">

        <div class="row justify-content-center">
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
                <form method="POST" action="{{ route('admin.news.store') }}" class="row justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12">
                        @include('admin.news._form')
                        <div class="form-group row">
                            <div class="col-12 text-center">
                                <button class="btn btn-success">@lang('Сохранить')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
