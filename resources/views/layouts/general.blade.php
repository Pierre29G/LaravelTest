<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
    <link href="{{ asset("js/slick/slick-theme.scss") }}" rel="stylesheet">
    <link href="{{ asset("js/slick/slick.scss") }}" rel="stylesheet">
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">

</head>
<nav class="nav-top container">
    <div class="logo"></div>
    <div class="search"></div>
</nav>
<main class="home">
    @yield("content")
    @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                        @endguest

</main>
<nav class="nav-bar">
    <a href="/">
        <div></div>
        <div>Accueil</div>
    </a>
    <a href="/playlist">
        <div></div>
        <div>Playlists</div>
    </a>
    @auth
    <a href="/amis/{{ Auth::user()->id}}">
        <div></div>
        <div>Mes amis</div>
    </a>
    @endauth
    <a href="/user/{{ Auth::user()->id}}">
        <div></div>
        <div>Profil</div>
    </a>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('js/slick/slick.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
