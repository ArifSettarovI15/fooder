@extends('welcome')
@section('page_body')
    <style>
        .wrapper_main{
            display: flex;
        }
    </style>
    <div class="wrapper_main">
        <div class="wrapper_left">
            @include('components.aside.aside')
        </div>
        <div class="wrapper_right">
            @yield('content')
        </div>
    </div>
@endsection
