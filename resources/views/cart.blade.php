@extends('layouts.master')

@section('title', '購物車')

@section('content')
<div class="table-responsive">
	<table id="shoppingcart" class="table table-hover">
		<thead>
			<tr>
				<th class="text-center">#</th>
				<th class="text-center">商品縮圖</th>
				<th class="text-center">商品名稱</th>
				<th class="text-center">選購數量</th>
				<th class="text-center">商品單價</th>
				<th class="text-center">小計</th>
				<th class="text-center">Actions</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($products as $product)
			<tr>
				<td class="text-center">{{$product->id}}</td>
				<td class="text-center">
					<img src="{{ $product->img_path }}" alt="{{ $product->name }}" class="img-responsive img-thumbnail" style="max-width: 6em; margin: 0 auto;">
				</td>
				<td>{{$product->name}}</td>
				<td class="text-center">
					<span>{{ $cart[$product->id] }}</span> 
					<?php
						$availablequan = 0;
						if ($product->availability > 10) {
							$availablequan = 10;
						} else {
							$availablequan = $product->availability;
						}
					?>
					<select name="quan" id="quan" onchange="updateTotal(this)" style="width: 3em; display: none;">
					@for($i = 1; $i <= $availablequan ; $i++)
						@if($i == $cart[$product->id])
							<option value="{{$i}}" selected>{{$i}}</option>
						@else
							<option value="{{$i}}">{{$i}}</option>
						@endif
						
					@endfor
					</select>
				</td>
				<td class="text-right">{{ $product->price }}</td>
				<td class="text-right">{{ $product->price*$cart[$product->id] }}</td>
				<td class="text-center">
				<a onclick="editValue(this)" class="cursor" style="margin-right: 8px; color: green;"><i class="fa fa-pencil"></i><span>編輯</span></a>
				<a onclick="confirmValue(this)" class="cursor"  style="margin-right: 8px; color: green; display: none;"><i class="fa fa-check"></i><span>確認</span></a>
				<a onclick="deleteCartItem(this)" class="cursor" style="color: red;"><i class="fa fa-trash-o"></i><span>刪除</span></a></td>
			</tr>
		@endforeach
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5" class="text-right">總計:</td>
				<td id="total" class="text-right">
					<?php
						$total = 0;
						foreach ($products as $product) {
							$total += $product->price*$cart[$product->id];
						}
						echo $total;
					?>
				</td>
			</tr>
		</tfoot>
	</table>
</div>
	
	<hr>
	<div class="col-md-offset-8 col-md-4">
		<form action="/orders" method="POST" novalidate>
			<div class="v-margin-md control-group">
				<i class="fa fa-user fa-fw"></i><label class="control-label" for="contact">收件人</label>
				<div class="controls">
					<input 
						id="contact"
						class="form-control" 
						type="text" 
						name="contact" 
						placeholder="收件人" 
						required
					/>
					<p class="help-block" style="color: #ff0000"></p>
				</div>
			</div>
			<div class="v-margin-md control-group">
				<i class="fa fa-mobile fa-fw"></i><label class="control-label" for="phone">連絡電話</label>
				<div class="controls">
					<input 
						id="phone"
						class="form-control" 
						type="text" 
						name="phone" 
						placeholder="連絡電話" 
						data-validation-regex-regex="([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})" 
        				data-validation-regex-message="Not a valid phone number" 
						required
					/>
					<p class="help-block" style="color: #ff0000"></p>
				</div>
			</div>
			<div class="v-margin-md control-group">
				<i class="fa fa-home fa-fw"></i><label class="control-label" for="address">地址</label>
				<div class="controls">
					<input 
						id="address"
						class="form-control" 
						type="text" 
						name="address" 
						placeholder="地址" 
						required
					/>
					<p class="help-block" style="color: #ff0000"></p>
				</div>
			</div>
			{{-- <div class="input-group v-margin-md">
			  <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
			  <input type="text" name="contact" class="form-control" placeholder="收件人">
			</div> --}}
			{{-- <div class="input-group v-margin-md">
			  <span class="input-group-addon"><i class="fa fa-mobile fa-fw"></i></span>
			  <input type="text" name="phone" class="form-control" placeholder="連絡電話">
			</div>
			<div class="input-group v-margin-md">
			  <span class="input-group-addon"><i class="fa fa fa-home fa-fw"></i></span>
			  <input type="text" name="address" class="form-control" placeholder="地址">
			</div> --}}
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="text-right v-margin-md">
				<a href="/products" class="btn btn-default">繼續選購</a>  <button type="submit" class="btn btn-danger">帶我結帳去</button>
			</div>
		</form>
	</div>
	

@stop

