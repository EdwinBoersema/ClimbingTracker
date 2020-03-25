<div class="">
    <nav id="navbar">
        <div class="top-right links">
            @auth
                <button class="nav-link">
                    <a href="{{ url('/home') }}">Home</a>
                </button>

                <div>
                    <form action="{{ route('logout') }}" method="post">
                        <button type="submit">Logout</button>
                        @csrf
                    </form>
                </div>
            @else
                <button class="nav-link">
                    <a href="{{ route('login') }}">Login</a>
                </button>

                <button class="nav-link">
                    <a href="{{ route('register') }}">Register</a>
                </button>
            @endauth
        </div>
    </nav>
</div>