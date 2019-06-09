@extends('layout')

@section('content')
    <h3>Artists:</h3>
    @foreach($artists as $artist)
        <p><a href="artist/{{$artist->ArtistId}}">{{$artist->Name}}</a></p>
        <hr>
    @endforeach
@stop