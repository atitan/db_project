@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@stop

@section('content')

<div class="col-md-6 col-md-push-3 v-margin-100">
  <form method="post" action="/user/login" novalidate>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="v-margin-md control-group">
        <i class="fa fa-user fa-fw"></i><label class="control-label" for="username">Username</label>
        <div class="controls">
          <input 
            id="username"
            class="form-control" 
            type="text" 
            name="username" 
            placeholder="Username" 
            required
          />
          <p class="help-block" style="color: #ff0000"></p>
        </div>
      </div>
      <div class="v-margin-md control-group">
        <i class="fa fa-key fa-fw"></i><label class="control-label" for="password">Password</label>
        <div class="controls">
          <input 
            id="password" 
            class="form-control" 
            type="password" 
            name="password" 
            placeholder="Password" 
            required
          />
          <p class="help-block" style="color: #ff0000"></p>
        </div>
      </div>
      <div class="text-right">
        <input type="submit" value="登入" class="btn btn-warning">
      </div>
      @if ($user)
        {{ $user->username }} is present.
      @endif
  </form>
</div>
@stop
