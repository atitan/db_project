@extends('layouts.master')

@section('title', '訂單總覽')

@section('content')
	<h2>訂單總覽</h2>
	<hr>
	<div class="panel panel-primary">
		<div class="panel-heading">檢視訂單資料</div>
		<div class="table-responsive">
			<table class="table table-hover" id="userOrders">
				<thead>
					<th class="text-right">#</th>
			        <th>收件人</th>
			        <th>聯絡電話</th>
			        <th>收件地址</th>
			        <th class="text-right">總金額</th>
			        <th class="text-right">建立日期</th>
	        		<th class="text-center">Actions</th>
				</thead>
				<tbody>
					@foreach($orders as $order)
					<tr>
						<td class="text-right"><a href="/order/{{ $order->id }}"><span class="j-orderid">{{ $order->id }}</span></a></td>
						<td><span class="j-contact">{{ $order->contact }}</span>
          <input type="text" name="contact" class="form-control" value="{{ $order->contact }}" style="display: none;"></td>
						<td><span class="j-phone">{{ $order->phone }}</span>
          <input type="text" name="phone" class="form-control" value="{{ $order->phone }}" style="display: none;"></td>
						<td><span class="j-address">{{ $order->address }}</span>
          <input type="text" name="address" class="form-control" value="{{ $order->address }}" style="display: none;"></td>
						<td class="text-right">{{ $order->total }}</td>
						<td class="text-right">{{ $order->created_at }}</td>
						<td nowrap="nowrap" class="text-center"><a href="/orders/{{ $order->id }}" style="text-decoration: none; margin-right: 8px; color: #727272;"><span><i class="fa fa-info-circle fa-fw"></i> 檢視訂單</span></a><br/>
						<a onclick="editOrder(this)" class="cursor" style="margin-right: 8px; text-decoration:none; color: #158cba;"><span><i class="fa fa-pencil fa-fw"></i> 編輯</span></a>
          <a onclick="confirmEditOrder(this)" class="cursor"  style="margin-right: 8px; color: green; text-decoration: none; display: none;"><span><i class="fa fa-check fa-fw"></i> 確認</span></a>
          <a onclick="deleteOrder(this)" class="cursor" style="color: red; text-decoration: none;"><span><i class="fa fa-trash-o fa-fw"></i> 刪除</span></a>
          </td>						
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop
