@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
<form method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="username" value="">
    <input type="text" name="password" value="">
    <input type="text" name="email" value"">
    <input type="submit" value="submit">
</form>
@stop