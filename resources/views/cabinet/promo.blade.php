@extends('layouts.app')

@section('content')
    <td width="10px"></td>
    <td align="left" style="vertical-align:top">
        @include('layouts._balance')
        <br>
        <div class="ac-bals oper" align="center">
            <b>@lang('app.Баннер') #1</b>
            <br><br>
            <a href="{{ url('/') }}"><img src="{{ asset('images/banners/1.jpg') }}" width="250" alt=""></a><br><br>
            <textarea name="" id="" style=" width:100%; text-align:center; height:30px;">&lt;a href="{{ url('/') }}" target="_blank"&gt;&lt;img src="{{ asset('images/banners/1.jpg') }}" alt=""&gt;&lt;/a&gt;</textarea>
            <br><br><br>
            <b>@lang('app.Баннер') #2</b>
            <br><br>
            <a href="{{ url('/') }}"><img src="{{ asset('images/banners/2.jpg') }}" width="250" alt=""></a><br><br>
            <textarea name="" id="" style=" width:100%; text-align:center; height:30px;">&lt;a href="{{ url('/') }}" target="_blank"&gt;&lt;img src="{{ asset('images/banners/2.jpg') }}" alt=""&gt;&lt;/a&gt;</textarea>
            <br><br><br>
            <b>@lang('app.Баннер') #3</b>
            <br><br>
            <a href="{{ url('/') }}"><img src="{{ asset('images/banners/3.jpg') }}" width="250" alt=""></a><br><br>
            <textarea name="" id="" style=" width:100%; text-align:center; height:30px;">&lt;a href="{{ url('/')  }}" target="_blank"&gt;&lt;img src="{{ asset('images/banners/3.jpg') }}" alt=""&gt;&lt;/a&gt;</textarea>
            <br><br><br>

        </div>
    </td>
@endsection
