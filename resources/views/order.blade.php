@extends('layouts.master')

@section('title', '檢視訂單')

@section('content')
<div class="panel panel-primary">
  <div class="panel-heading">檢視訂單</div>
  <table class="table table-responsive table-hover">
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
          <span class="j-orderid">{{ $order[0]->id }}</span>
        </td>
        <td>
          <span class="j-ordercontact">{{ $order[0]->contact }}</span>
        </td>
        <td>
          <span class="j-orderphone">{{ $order[0]->phone }}</span>
        </td>
        <td>
          <span class="j-orderaddress">{{ $order[0]->address }}</span>
        </td>
        <td class="text-right">
          {{ $order[0]->total }}
        </td>
        <td class="text-center">
          {{ $order[0]->updated_at }}
        </td>
        <td>
          <a href=""><span class="fa fa-fw"></span></a>
          <a onclick="editOrder(this)" class="cursor" style="margin-right: 8px;"><span class="fa fa-pencil"> 編輯</span></a>
          <a onclick="confirmEditOrder(this)" class="cursor"  style="margin-right: 8px; color: green; display: none;"><span class="fa fa-check"> 確認</span></a>
          <a onclick="deleteOrder(this)" class="cursor" style="color: red;"><span class="fa fa-trash-o"> 刪除</span></a></span>
        </td>
      </tr>
    </tbody>
    <tbody>
    </tbody>
  </table>
  <div class="panel-body">
    <table class="table table-hover table-responsive table-striped">
      <thead>
        <tr>
          <th>商品縮圖</th>
          <th>商品名稱</th>
          <th>商品單價</th>
          <th>選購數量</th>
          <th>小計</th>
        </tr>
      </thead>
      <tbody>
        @foreach($order as $order)
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>{{ $order->quantity }}</td>
          <td>{{ $order->extended_price }}</td>
        </tr>
        @endforeach
      </tbody>  
    </table>
  </div>
</div>

@stop
