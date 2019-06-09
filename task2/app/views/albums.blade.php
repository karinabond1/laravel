@extends('layout')

@section('content')
    <h3>Albums:</h3>
    @foreach($albums as $album)
        <p><a href="/laravel/laravel/task2/public/album/{{$album->AlbumId}}">{{$album->Title}}</a></p>
        <hr>
    @endforeach
@stop