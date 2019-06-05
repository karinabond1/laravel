@extends('layout')

@section('content')
    @if($urls)
        <ul>
            @foreach($urls as $title=>$url)
                <li><a href="{{$url}}">{{$title}}</a></li>
            @endforeach
        </ul>
    @endif
@stop