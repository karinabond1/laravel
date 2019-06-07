@extends('layout')

@section('content')
<!--@if($errors)
@foreach($errors->all() as $error)
{{$error}}
@endforeach
@endif-->
    <form method="POST" action="{{action('HomeController@postImage')}}" enctype="multipart/form-data">
    @if($errors->first('name'))
        {{$errors->first('name')}}<br>
        @endif
        <label>Name: <input type="text" name="name"></label><br><br>
        @if($errors->first('image'))
        {{$errors->first('image')}}<br>
        @endif
        <label>Image: <input type="file" name="image"></label><br><br>
        @if($errors->first('description'))
        {{$errors->first('description')}}<br>
        @endif
        <label>Description: <textarea name="description"></textarea></label><br><br>
        
        <button type="submit">Send</button>
    </form>
@stop