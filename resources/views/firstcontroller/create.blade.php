@extends("layouts.general")

@section("content")
    <h1>Create</h1>
    {{ Form::open(array('url' => 'foo/bar')) }}
    //
    {{ Form::close() }}
@endsection