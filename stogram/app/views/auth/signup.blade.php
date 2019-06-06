@extends('layout')

@section('content')
<h1>Sign Up</h1>
<form method="POST">
    <label>Name<input type="text" name="name"/></label><br><br>
    <label>Email<input type="text" name="email"/></label><br><br>
    <label>Password<input type="password" name="password"/></label><br><br>
    <label>Retype Password<input type="password" name="password_confirmation"/></label><br><br>
    <button type="submit">Send</button>
</form>

@stop