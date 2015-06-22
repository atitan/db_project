@extends('layouts.master')

@section('title', '加入會員')

@section('sidebar')
    @parent
@stop

@section('content')
<div class="col-md-6 col-md-push-3 v-margin-100">
  <form method="post" action="/user/signup" novalidate>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      {{-- <div class="input-group v-margin-md">
        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
        <input class="form-control" type="text" name="username" placeholder="Username" required>
        <p class="help-block"></p>
      </div> --}}
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
        <i class="fa fa-envelope fa-fw"></i><label class="control-label" for="email">Email address</label>
        <div class="controls">
          <input
            id="email"
            class="form-control"
            type="email"
            name="email"
            placeholder="Email address"
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
            minlength="8"
            placeholder="Password"
            data-validation-minlength-message="至少8位數"
            required
          />
          <p class="help-block" style="color: #ff0000"></p>
        </div>
      </div>
      <div class="v-margin-md control-group">
        <i class="fa fa-key fa-fw"></i><label class="control-label" for="retype-password">Retype Password</label>
        <div class="controls">
          <input
            id="retype-password"
            class="form-control"
            type="password"
            name="retype-password"
            placeholder="Retype Password"
            data-validation-match-match="password"
            data-validation-match-message="輸入的兩組密碼不相符"
            required
          />
          <p class="help-block" style="color: #ff0000"></p>
        </div>
      </div>
{{--       <div class="input-group v-margin-md">
        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
        <input class="form-control" type="email" name="email" placeholder="Email address">
        <p class="help-block"></p>
      </div> --}}
 {{--      <div class="input-group v-margin-md">
        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
        <input class="form-control" type="password" name="password" placeholder="Password" required>
        <p class="help-block"></p>
      </div>
      <div class="input-group v-margin-md">
        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
        <input class="form-control" type="password" name="retype-password" placeholder="Retype Password" required>
        <p class="help-block"></p>
      </div> --}}
      <div class="text-right">
        <input type="submit" value="加入會員" class="btn btn-warning">
      </div>
  </form>
</div>
@stop
