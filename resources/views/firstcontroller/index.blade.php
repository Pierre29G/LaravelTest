@extends("layouts.general")

@section("content")
    <h1>Index</h1>
    @foreach($photos as $p)
            <div>
            <img src="{{$p->url}}" alt="{{$p->title}}" />
            <span>{{$p->title}} -- {{$p->note}}</span>
            <a href="/user/{{$p->user->id}}">{{$p->user->name}}</a>
            </div>

    @endforeach
@endsection