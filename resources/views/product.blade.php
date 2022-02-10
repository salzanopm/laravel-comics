@extends('layouts.app')

@section('page_title')
dc comics products
@endsection

@section('main_classes')
primary-color-background
@endsection

@section('main_content')
    <section class="comic-details">
        <div class="container">
            <h2>{{ $product_info['title'] }}</h2>

            <div>
                <img src="{{ $product_info['thumb'] }}" alt="{{ $product_info['title'] }}">
            </div>

            <p>{{ $product_info['title'] }}</p>
        </div>
    </section>
@endsection