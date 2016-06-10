<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Intermediate</title>

        <!-- CSS And JavaScript -->
    </head>

    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <ul>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a></li>
                        <li>  
                            <a href="{{ url('/logout') }}">Logout</a>
                        </li>
                    </ul>
                @endif
            </ul>
        </div>
        @yield('content')
    </body>
</html>