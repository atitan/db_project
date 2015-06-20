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
				<td class="text-right"><a href="/admin/orders/{{ $order->id }}" style="text-decoration: none;"><span class="j-orderid">{{ $order->id }}</span></a></td>
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
					<a href="/admin/orders/{{ $order->id }}" style="margin-right: 8px; text-decoration: none;"><span><i class="fa fa-info-circle fa-fw"></i> 檢視</span></a>
					<a onclick="editOrder(this)" class="cursor" style="margin-right: 8px; text-decoration: none;"><span><i class="fa fa-pencil fa-fw"></i> 編輯</span></a>
					<a onclick="confirmEditOrder(this)" class="cursor"  style="margin-right: 8px; color: green; text-decoration: none; display: none; "><span><i class="fa fa-check fa-fw"></i> 確認</span></a>
					<a onclick="deleteOrder(this)" class="cursor" style="text-decoration: none; color: red;"><span><i class="fa fa-trash-o fa-fw"></i> 刪除</span></a></span>
				</td>
			</tr>
	  	@endforeach
	  	</tbody>
	  </table>
	</div>
@stop
