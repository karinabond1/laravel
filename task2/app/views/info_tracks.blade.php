@extends('layout')

@section('content')
    <p>Artist: {{$artist->Name}}</p>
    <p>Album: {{$album->Title}}</p>
    <p>Tracks Information:</p>
    <p>Name: {{$track->Name}}</p>
    <p>Genre: {{$genre->Name}}</p>
    <p>Minutes: {{$track->Milliseconds/60000}}</p>

@stop