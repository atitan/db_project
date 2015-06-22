@extends('layouts.master')

@section('title')
  訂單檢視 #{{ $order[0]->order_id }}
@stop

@section('content')
<div class="panel panel-primary">
  <div class="panel-heading">檢視訂單 #{{ $order[0]->order_id }}</div>
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
          <th>Actions</th>
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
          <td>
            <a a role="button" data-toggle="collapse" data-parent="#orderDetails" href="#orderDetails" aria-expanded="true" aria-controls="orderDetails" style="margin-right: 8px;"><span class="fa fa-info-circle"> 檢視</span></a>
            <a onclick="editOrder(this)" class="cursor" style="margin-right: 8px;"><span class="fa fa-pencil"> 編輯</span></a>
            <a onclick="confirmEditOrder(this)" class="cursor"  style="margin-right: 8px; color: green; display: none;"><span class="fa fa-check"> 確認</span></a>
            <a onclick="deleteOrder(this)" class="cursor" style="color: red;"><span class="fa fa-trash-o"> 刪除</span></a></span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  
  <div id="orderDetails" class="panel-collapse collapse" role="tabpanel" aria-labelledby="orderDetails">
    <div class="panel-body">
      <table class="table table-hover table-responsive table-striped">
        <thead>
          <tr>
            <th style="max-width: 5em;">商品縮圖</th>
            <th>商品名稱</th>
            <th>商品單價</th>
            <th>選購數量</th>
            <th>小計</th>
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

@stop
