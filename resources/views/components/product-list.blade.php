<div class="products-list">
    <div class="products">
        @foreach ($comics as $comic)
            {{-- Single product --}}
            <div class="product">
                <div class="half">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>
                <h3>{{ $comic['title'] }}</h3>
            </div>
            {{-- End Single product --}}
        @endforeach
    </div>
</div>