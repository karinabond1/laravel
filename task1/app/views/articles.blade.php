@extends('layout')

@section('content')
    @if(!$id)
        @foreach($articles as $title=>$content)
            <a href="articles/{{$title}}"><h3>Article {{$title}}</h3></a>
            <hr>
        @endforeach
    @else
        @foreach($articles as $title=>$content)
            @if($id==$title)
                <h3>Article {{$title}}</h3>
                <p>{{$content}}</p>
                <hr>
            @endif
        @endforeach
    @endif


@stop