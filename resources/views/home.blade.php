@extends('layouts.app')

@section('page_title')
dc comics home
@endsection

@section('main_content')
    <section>
        <div class="container">

            @include('components.product-list')

        </div>
    </section>
@endsection