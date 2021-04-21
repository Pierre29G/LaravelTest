@extends("layouts.general")

@section("content")
    <h1>Bonjour, {{$user->name}}</h1>
    <p>Follow {{$user->IFollowThem()->count()}} personnes</p>
    <p>Followed by {{$user->theyFollowMe()->count()}} personnes</p>

    @auth
        @if(Auth::id() != $user->id)
            @if(Auth::user()->IFollowThem->contains($user->id))
                je le suis
                <a href="/changesuivi/{{$user->id}}">STOP</a>
            @else
                je ne le suis pas encore <a href="/changesuivi/{{$user->id}}">SUIVRE</a>
            @endif

        @endif
    @endauth
    @foreach($user->photos as $p)
            <div>
            <img src="{{$p->url}}" alt="{{$p->title}}" />
            <span>{{$p->title}} -- {{$p->note}}</span>
            </div>

    @endforeach


@endsection