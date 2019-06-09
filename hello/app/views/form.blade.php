@extends('task1.app.views.layout')

@section('content')
<form action='submit' method='post'>
    <input type='text' name='name'/>
    <button type='sumit' >Send</button>
</form>
@stop