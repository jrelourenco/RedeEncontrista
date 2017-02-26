<nav class="navbar navbar-default navbar-fixed-side">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{route('home') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

    </div>
    <div class="collapse navbar-collapse" id="app-navbar-collapse">

        <ul class="nav navbar-nav">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>

            @else
                <li><a href="{{ route('logout') }}">Logout</a></li>

            @endif
            <li><a href="{{ route('profile') }}">Profile</a></li>
            <li><a href="{{ route('curriculum') }}">Curriculum</a></li>
            <li><a href="{{ route('calendar') }}">Calendar</a></li>
            <li><a href="{{ route('groups') }}">Grupos</a></li>

        </ul>
    </div>

</nav>