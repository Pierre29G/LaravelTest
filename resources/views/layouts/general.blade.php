<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
</head>
<main>
    <h1>ceci est général</h1>
    @yield("content")
    <a href="/">Accueil</a>
    <a href="/playlist">Playlist</a>
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
                                <a href="/amis">Mes amis</a>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/user/{{ Auth::user()->id}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Profil
                                </a>

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

