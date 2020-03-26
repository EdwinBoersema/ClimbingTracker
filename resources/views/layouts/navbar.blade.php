<nav id="navbar">
    <div class="navbar-left">
        <a class="nav-link" href=" {{ url('/') }}">
            <span id="nav-title">CT</span>
        </a>
        <a class="nav-link" href="{{ url('/home') }}">Home</a>
        <a class="nav-link" href="{{ url('/area') }}">Areas</a>
    </div>


    <div class="navbar-right">
        @auth
        <div>
            <form action="{{ route('logout') }}" method="post">
                <input class="nav-link" type="submit" value="Logout">
                @csrf
            </form>
        </div>
        @else
        <a class="nav-link" href="{{ route('login') }}">Login</a>

        <a class="nav-link" href="{{ route('register') }}">Register</a>
        @endauth
    </div>
</nav>