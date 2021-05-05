@extends("layouts.general")

@section('content')
<h1>create</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/photos/store" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Titre de la photo" required value="{{old('title')}}"/><br/>
        <input type="file" name="image" placeholder="Upload de la photo" required/><br/>
        <input type="number" name="note" placeholder="Note de la photo" required value="{{old('note')}}"/><br/>
        <input type="submit"/><br/>
    </form>
@endsection