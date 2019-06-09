@extends('layout')

@section('content')
    <h3>Artist: {{$artist->Name}}</h3>
    <h3>Tracks:</h3>
    @foreach($tracks as $track)
        <p><a href="/laravel/laravel/task2/public/track/{{$track->TrackId}}">{{$track->Name}}</a></p>
        <hr>
    @endforeach
@stop