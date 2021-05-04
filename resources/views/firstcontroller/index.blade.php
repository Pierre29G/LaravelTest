
@extends("layouts.general")

@section("content")
    <h2>Dernières sorties</h2>
    @foreach($song as $p)
    <?php $art = \App\Models\Song::find($p->artist_id)->artist; ?>
            <div>
            <img src="{{$p->imgurl}}" alt="{{$p->name}}" /><br>
            <span>{{$art->name}}</span><br>
            <a href="/song/{{$p->id}}">{{$p->name}}</a>
            </div>
    @endforeach
    @guest
    <h2>écouté dernièrement</h2>

    @endguest
    <h2>Mes artistes favoris</h2>
    @foreach($artist as $p)
            <div>
            <img src="{{$p->imgurl}}" alt="{{$p->name}}" /><br>
            <a href="/artist/{{$p->id}}">{{$p->name}}</a>
            </div>
    @endforeach
@endsection