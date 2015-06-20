@extends('layouts.admin')
@section('title', '後臺管理介面｜商品管理')

@section('content')
	<h2>商品管理</h2>
	<hr>
	<div class="panel panel-success">
	  <div class="panel-heading">新增商品</div>
	  <div class="panel-body">
	    <form action="/admin/products" method="POST">
	    	<input type="text" name="name" placeholder="商品名稱">		
	    	<input type="text" name="description" placeholder="商品描述">
	    	<input type="text" name="price" placeholder="商品價格 NT$." style="text-align: right;">
	    	<input type="text" name="availability" placeholder="商品庫存">
	    	<input type="text" name="img_path" placeholder="圖片連結">
	    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	    	<button class="btn btn-sm btn-success">儲存</button>
	    	<button class="btn btn-sm btn-default">重設</button>
	    </form>
	  </div>
	</div>
	<div class="panel panel-warning">
	  <div class="panel-heading">檢視 / 編輯現有商品</div>
	  <div class="panel-body">
	    <table class="table table-hover table-responsive" id="productinfo">
    		<thead>
    			<tr>
    				<th class="text-right">#</th>
    				<th class="text-center" style="max-width: 6em;">縮圖</th>
    				<th class="text-center">產品名稱</th>
    				<th class="text-center">產品單價</th>
    				<th class="text-center" style="max-width: 20em;">產品描述</th>
    				<th class="text-center">庫存數量</th>
    				<th class="text-center">修改日期</th>
    				<th class="text-center">Actions</th>
    			</tr>
    		</thead>
    		<tbody>
    			@foreach ($products as $product)
    			<tr>
    				<td class="text-right">{{ $product->id }}</td>
    				<td class="text-center">
    					<img src="{{ $product->img_path }}" alt="{{ $product->name }}" class="img-responsive img-thumbnail" style="max-width: 6em;">
    					<input type="text" name="img_path" value="{{ $product->img_path }}" style="display: none;">
    				</td>
    				<td>
    					<span>{{ $product->name }}</span>
    					<input type="text" name="name" value="{{ $product->name }}" style="display: none;">
    				</td>
    				<td class="text-right">
    					<span>{{ $product->price }}</span>
    					<input type="text" name="price" value="{{ $product->price }}" style="text-align: right; display: none;">
    				</td>
    				<td style="max-width: 20em;">
    					<p style="margin-bottom: 0;">{{ $product->description }}</p>
    					<textarea name="description" cols="20" rows="3" style="display: none;">{{ $product->description }}</textarea>
    				</td>
    				<td class="text-right">
    					<span>{{ $product->availability }}</span>
    					<input type="text" name="availability" value="{{$product->availability}}" style="text-align: right; display: none;">
    				</td>
    				<td class="text-center">{{ $product->updated_at }}</td>
    				<td class="text-center">
    					<a onclick="editProduct(this)" class="cursor" style="margin-right: 8px;"><span class="fa fa-pencil"> 編輯</span></a>
    					<a onclick="confirmEditProduct(this)" class="cursor"  style="margin-right: 8px; color: green; display: none;"><span class="fa fa-check"> 確認</span></a>
    					<a onclick="deleteProduct(this)" class="cursor" style="color: red;"><span class="fa fa-trash-o"> 刪除</span></a></span>
    				</td>
    			</tr>
    			@endforeach
    		</tbody>
    	</table>
	  </div>
	</div>
	
@stop