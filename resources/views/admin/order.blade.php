@extends('layouts.admin')

@section('title')
  訂單檢視 #{{ $order[0]->order_id }}
@stop

@section('content')
  <h2>訂單詳細資訊</h2>
  <hr>
  <div class="panel panel-success">
    <div class="panel-heading">訂單 #{{ $order[0]->order_id }}</div>
    <div class="table-responsive">
    	<table class="table table-hover">
    	  <thead>
    	    <tr>
    	      <th class="text-right">#</th>
    	      <th>收件人</th>
    	      <th>聯絡電話</th>
    	      <th>收件地址</th>
    	      <th class="text-center">總金額</th>
    	      <th class="text-center">建立日期</th>
    	      <th class="text-center">Actions</th>
    	    </tr>
    	  </thead>
    	  <tbody>
    	    <tr>
    	      <td class="text-right">
    	        <span class="j-orderid">{{ $order[0]->order_id }}</span>
    	      </td>
    	      <td>
    	        <span class="j-contact">{{ $order[0]->contact }}</span>
    	        <input type="text" name="contact" class="form-control" value="{{ $order[0]->contact }}" style="display: none;">
    	      </td>
    	      <td>
    	        <span class="j-phone">{{ $order[0]->phone }}</span>
    	        <input type="text" name="phone" class="form-control" value="{{ $order[0]->phone }}" style="display: none;">
    	      </td>
    	      <td>
    	        <span class="j-address">{{ $order[0]->address }}</span>
    	        <input type="text" name="address" class="form-control" value="{{ $order[0]->address }}" style="display: none;">
    	      </td>
    	      <td class="text-right">
    	        {{ $order[0]->total }}
    	      </td>
    	      <td class="text-center">
    	        {{ $order[0]->updated_at }}
    	      </td>
    	      <td nowrap="nowrap" class="text-center">
    	      	<a a role="button" data-toggle="collapse" data-parent="#orderDetails" href="#orderDetails" aria-expanded="true" aria-controls="orderDetails" style="margin-right: 8px; color: #727272;"><span><i class="fa fa-info-circle"></i> 檢視</span></a><br/>
    	        <a onclick="editOrder(this)" class="cursor" style="margin-right: 8px; color: #158dca;"><span><i class="fa fa-pencil"></i> 編輯</span></a>
    	        <a onclick="confirmEditOrder(this)" class="cursor"  style="margin-right: 8px; color: green; display: none;"><span><i class="fa fa-check"></i> 確認</span></a>
    	        <a onclick="deleteOrder(this)" class="cursor" style="color: red;"><span><i class="fa fa-trash-o"></i> 刪除</span></a>
    	      </td>
    	    </tr>
    	  </tbody>
    	</table>
    	<div id="orderDetails" class="panel-collapse collapse" role="tabpanel" aria-labelledby="orderDetails">
    	    <div class="panel-body">
    	      <table class="table table-hover table-responsive table-striped">
    	        <thead>
    	          <tr>
    	            <th style="max-width: 5em;">商品縮圖</th>
    	            <th>商品名稱</th>
    	            <th class="text-right">商品單價</th>
    	            <th class="text-right">選購數量</th>
    	            <th class="text-right">小計</th>
    	          </tr>
    	        </thead>
    	        <tbody>
    	          @foreach($order as $order)
    	          <tr>
    	            <td style="max-width: 5em;"><img src="{{ $order->img_path }}" alt="{{ $order->name }}" class="img-responsive img-thumbnail"> </td>
    	            <td>{{ $order->name }}</td>
    	            <td class="text-right">{{ $order->price }}</td>
    	            <td class="text-right">{{ $order->quantity }}</td>
    	            <td class="text-right">{{ $order->extended_price }}</td>
    	          </tr>
    	          @endforeach
    	        </tbody>
    	      </table>
    	    </div>
    	</div>
    </div>
  </div>
@stop
