@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@stop

@section('content')
<div class="col-md-6 col-md-push-3 v-margin-100">
  <form method="post" action="/user/signup">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="input-group v-margin-md">
        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
        <input class="form-control" type="text" name="username" placeholder="Username">
      </div>
      <div class="input-group v-margin-md">
        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
        <input class="form-control" type="text" name="email" placeholder="Email address">
      </div>
      <div class="input-group v-margin-md">
        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
        <input class="form-control" type="password" name="password" placeholder="Password">
      </div>
      <div class="input-group v-margin-md">
        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
        <input class="form-control" type="password" name="retype-password" placeholder="Retype Password">
      </div>
      <div class="text-right">
        <input type="submit" value="加入會員" class="btn btn-warning">
      </div>
  </form>
</div>
@stop
