<header class="container">
    <div>
        <img class="logo" src="{{ asset('images/dc-logo.png') }}" alt="dc logo">
    </div>
    <nav>
        <ul class="menu">
            <li class="{{ Request::route()->getName() === 'homepage' ? 'active' : '' }}">
                <a href="{{ route('homepage') }}">Home</a>
            </li>
        </ul>
    </nav>
    <div>
        <input type="text">
    </div>
</header>