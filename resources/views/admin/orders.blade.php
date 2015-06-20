@extends('layouts.admin')
@section('title', '訂單管理')

@section('content')
	<h2>訂單管理</h2>
	<hr>
	<div class="panel panel-primary">
	  <div class="panel-heading">訂單總覽</div>
	  <table class="table table-hover table-responsive">
	  	<thead>
	  		<tr>
	  			<th class="text-right">#</th>
	  			<th class="text-center">收件人</th>
	  			<th class="text-center">電話</th>
	  			<th class="text-center">地址</th>
	  			<th class="text-center">訂單金額</th>
	  			<th class="text-center">下單日期</th>
	  			<th class="text-center">更新日期</th>
	  			<th class="text-center">Actions</th>
	  		</tr>
	  	</thead>
	  	<tbody>
	  	@foreach ($orders as $order)
			<tr>
				<td class="text-right"><span class="j-orderid">{{ $order->id }}</span></td>
				<td>
					<span class="j-contact">{{ $order->contact }}</span>
					<input type="text" name="contact" value="{{ $order->contact }}" class="form-control" style="display: none;">
				</td>
				<td>
					<span class="j-phone">{{ $order->phone }}</span>
					<input type="text" name="phone" value="{{ $order->phone }}" class="form-control" style="display: none;">
				</td>
				<td>
					<span class="j-address">{{ $order->address }}</span>
					<input type="text" name="address" value="{{ $order->address }}" class="form-control" style="display: none;">
				</td>
				<td class="text-right">{{ $order->total }}</td>
				<td class="text-right">{{ $order->created_at }}</td>
				<td class="text-right">{{ $order->updated_at }}</td>
				<td class="text-center">
					<a onclick="editOrder(this)" class="cursor" style="margin-right: 8px;"><span class="fa fa-pencil"> 編輯</span></a>
					<a onclick="confirmEditOrder(this)" class="cursor"  style="margin-right: 8px; color: green; display: none;"><span class="fa fa-check"> 確認</span></a>
					<a onclick="deleteOrder(this)" class="cursor" style="color: red;"><span class="fa fa-trash-o"> 刪除</span></a></span>
				</td>
			</tr>
	  	@endforeach
	  	</tbody>
	  </table>
	</div>
@stop
