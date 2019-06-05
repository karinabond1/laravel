@extends('layout')

@section('content')
    @if($worn)
        {{$worn}}
    @endif
    <form action='submit' method='post'>
        Name: <input type='text' name='name'/><br><br>
        Message: <textarea type='text' name='message'></textarea><br><br>
        <button type='sumit'>Send</button>
    </form>
@stop