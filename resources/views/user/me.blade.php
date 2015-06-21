@extends('layouts.master')

@section('title', '個人資料管理')

@section('content')
	<div class="col-md-12 clearfix  t-margin-lg">
		<div class="col-md-6 col-md-push-3 text-right">
			<button onclick="editUserData(this)" class="btn btn-success">修改資料</button>
			<button onclick="cancelEditUserData(this)" class="btn btn-default" style="display: none;">取消</button>
		</div>
	</div>
	<div class="col-md-6 col-md-push-3 v-margin-md">
	  <form method="post" novalidate>
	      <input type="hidden" name="_token" value="{{ csrf_token() }}">
{{-- 	      <div class="input-group v-margin-md">
	        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
	        <input class="form-control" type="text" name="username" placeholder="Username" value="{{ $user->username }}" readonly>
	      </div> --}}
	      <div class="v-margin-md control-group">
	        <i class="fa fa-user fa-fw"></i><label class="control-label">Username</label>
	        <div class="controls">
	          <input 
	            id="username"
	            class="form-control" 
	            type="text" 
	            name="username" 
	            value="{{ $user->username }}" 
	            readonly
	            style="pointer-events: none;" 
	          />
	        </div>
	      </div>
	      <div class="v-margin-md control-group">
	        <i class="fa fa-envelope fa-fw"></i><label class="control-label">Email address</label>
	        <div class="controls">
	          <input 
	            id="email" 
	            class="form-control" 
	            type="email" 
	            name="email" 
	            value="{{ $user->email }}"
	            readonly
	            style="pointer-events: none;" 
	          />
	        </div>
	      </div>
	      {{-- <div class="input-group v-margin-md">
	        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
	        <input class="form-control" type="text" name="email" placeholder="Email address" value="{{ $user->email }}" readonly>
	      </div> --}}
	      <div class="v-margin-md control-group j-password" style="display: none;">
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
	      <div class="v-margin-md control-group j-repassword" style="display: none;">
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
	      {{-- <div class="input-group v-margin-md j-password" style="display: none;">
	        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
	        <input class="form-control" type="password" name="password" placeholder="Password">
	      </div>
	      <div class="input-group v-margin-md j-repassword" style="display: none;">
	        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
	        <input class="form-control" type="password" name="retype-password" placeholder="Retype Password">
	      </div> --}}
	      <div class="text-right">
	      	<button type="button" class="btn btn-warning j-submit" onclick="updateUserData(this)" style="display: none;">更新資料</button>
	        <input type="reset" value="清空" class="btn btn-default" style="display: none;">
	      </div>
	  </form>
	 </div>
@stop