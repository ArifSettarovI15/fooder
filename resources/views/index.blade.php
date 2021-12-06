@extends('main')
@section('content')
<div class="page_content_wrapper">
    @include('components.main_top.main_top')
    @include('components.filters.filters')
    @include('components.products_table.products_table')
</div>
@endsection
