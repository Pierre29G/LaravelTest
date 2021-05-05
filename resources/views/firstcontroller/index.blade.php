@extends("layouts.general")

@section("content")
    <div class="home-content container">
        <h2>Dernières sorties</h2>
        <div class="last-releases">
            @foreach($song as $p)
                <?php $art = \App\Models\Song::find($p->artist_id)->artist; ?>
                <div class="block">
                    <img src="{{$p->imgurl}}" alt="{{$p->name}}"/>
                    <h3>{{$art->name}}</h3>
                    <a href="/song/{{$p->id}}">{{$p->name}}</a>
                </div>
            @endforeach
        </div>
        @guest
            <h2>Ecouté dernièrement</h2>

        @endguest
        <h2>Mes artistes favoris</h2>
        <div class="favorites">
            @foreach($artist as $p)
                <div class="block">
                    <img src="{{$p->imgurl}}" alt="{{$p->name}}"/>
                    <a href="/artist/{{$p->id}}">{{$p->name}}</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
