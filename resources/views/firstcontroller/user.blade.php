@extends("layouts.general")

@section("content")
    <img src="{{$user->imgurl}}" alt="{{$user->name}}" />
    <h1>{{$user->name}}</h1>
    <p>{{$user->IFollowThem()->count()}} abonnements</p>
    <p>{{$user->theyFollowMe()->count()}} abonnés</p>

    @auth
        @if(Auth::id() != $user->id)
            @if(Auth::user()->IFollowThem->contains($user->id))
                je le suis
                <a href="/changesuivi/{{$user->id}}">STOP</a>
            @else
                je ne le suis pas encore <a href="/changesuivi/{{$user->id}}">SUIVRE</a>
            @endif

        @else
            <p>{{$user->hasMany("App\Models\Playlist")->count()}} playlists</p>
        @endif
    @endauth

    @if(Auth::id() != $user->id)
    <h2>Playlists créées</h2>
    @else
    <h2>Mes Playlist</h2>
    @endif

    @foreach($user->playlists as $p)
            <div>
            <img src="{{$p->imgurl}}" alt="{{$p->name}}" />
            <a href="/playlist/{{$p->id}}"><h3>{{$p->name}}</h3></a>
            <span>{{$p->description}}</span>
            </div>
    @endforeach


@endsection