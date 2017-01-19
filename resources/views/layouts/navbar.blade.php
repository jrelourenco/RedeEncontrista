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
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

    </div>
    <div class="collapse navbar-collapse" id="app-navbar-collapse">

        <ul class="nav navbar-nav">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
            @else
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"
                                        aria-expanded="false">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Sub-page 1</a></li>
                        <li><a href="#">Sub-page 2</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Dropdown Header</li>
                        <li><a href="#">Sub-page 3</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/logout') }}">
                                Logout
                            </a>


                        </li>
                    </ul>
                </li>
            @endif

            <li><a href="{{ url('/profile') }}">Profile</a></li>
        </ul>
    </div>

</nav>