@extends('welcome')
@section('page_body')

    <div class="wrapper_main">
        <div class="wrapper_left">
            @include('components.aside.aside')
        </div>
        <div class="wrapper_right">
            @yield('content')
        </div>
    </div>
@endsection
