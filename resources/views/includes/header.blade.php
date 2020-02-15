    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="title">
        ChloeBassCraft
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="primary-menu">
            <a href="/" class="navbar-item">
                Home
            </a>

            <a href="/about" class="navbar-item">
                About
            </a>

            <a href="/gear" class="navbar-item">
                Gear
            </a>

            <a href="/repertoire" class="navbar-item">
                Repertoire
            </a>

            <a href="/blog" class="navbar-item">
                Blog
            </a>
    </div>
    </div>