@extends('layout')

@section('content')
@if($name)
<h1>Hello, {{$name}}!</h1>
@endif
<form action='' method='post'>
    <input type='text' name='name'/>
    <button type='sumit' >Send</button>
</form>
@stop

@section('footer')
@parent
Email:test@gmail.com
@if($urls)
<ul>
@foreach($urls as $title=>$url)
    <li><a href="{{$url}}">{{$title}}</a></li>
@endforeach
</ul>
@endif
@stop

@section('form')

@stop