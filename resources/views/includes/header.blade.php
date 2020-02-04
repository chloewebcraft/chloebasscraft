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

            <a href="/blog" class="navbar-item">
                Blog
            </a>
    </div>
    </div>

    <!-- <div class="navigation">
        <ul class="primary-menu">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/blog">Blog</a></li>
        </ul>
        
    </div> -->