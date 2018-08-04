<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a id="logo" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png')}}" id="logo" alt="logo infomotion" class="logo navbar-brand">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Contact</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
            </ul>
        </div>
    </div>
</nav>
{{--<div class="navbar-fixed">--}}
    {{--<nav>--}}
        {{--<div class="nav-wrapper">--}}
            {{--<div class="container">--}}
                {{--<a id="logo" href="{{ url('/') }}">--}}
                    {{--<img src="{{ asset('images/logo.png')}}" id="logo" alt="logo infomotion" class="navbar-brand">--}}
                {{--</a>--}}
                {{--<a href="#" data-target="mobile-demo" class="sidenav-trigger hide-on-large-only right"><i--}}
                            {{--class="far fa-bars fa-3x"></i></a>--}}
                {{--<ul class="right hide-on-med-and-down">--}}
                    {{--<li><a href="{{ route('home') }}">Home</a></li>--}}

                    {{--@if (Auth::check())--}}
                        {{--<li><a href="{{route('dashboard')}}">Dashboard</a></li>--}}
                        {{--<li class="login"><a href="{{ route('logout') }}"--}}
                                             {{--onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Uitloggen</a>--}}
                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                {{--{{ csrf_field() }}--}}
                            {{--</form>--}}
                        {{--</li>--}}
                    {{--@else--}}
                        {{--<li class="login"><a href="{{ url('/login') }}">Login</a></li>--}}

                    {{--@endif--}}
                {{--</ul>--}}
                {{--<ul class="sidenav" id="mobile-demo">--}}
                    {{--<li><a href="{{ route('home') }}">Home</a></li>--}}

                    {{--@if (Auth::check())--}}
                        {{--<li><a href="{{route('dashboard')}}">Dashboard</a></li>--}}
                        {{--<li class="login"><a href="{{ route('logout') }}"--}}
                                             {{--onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Uitloggen</a>--}}
                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                {{--{{ csrf_field() }}--}}
                            {{--</form>--}}
                        {{--</li>--}}
                    {{--@else--}}
                        {{--<li class="login"><a href="{{ url('/login') }}">Login</a></li>--}}

                    {{--@endif--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}
{{--</div>--}}