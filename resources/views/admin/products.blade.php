@extends('layouts.admin')
@section('title', '商品管理')

@section('content')
	<h2>商品管理</h2>
	<hr>
	<div class="panel panel-success">
	  <div class="panel-heading">新增商品</div>
	  <div class="panel-body">
	    <form action="/admin/products" method="POST">
            <div class="row">
                <div class="input-group col-md-4 b-margin-md">
                    <span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
                    <input type="text" id="newProductName" name="name" class="form-control" placeholder="商品名稱">
                </div>
                <div class="input-group col-md-4 b-margin-md">
                    <span class="input-group-addon r-margin-sm"><i class="fa fa-usd fa-fw"></i></span>
                    <input type="text" name="price" id="newProductPrice" placeholder="商品價格" class="form-control" style="text-align: right;">
                </div>
                <div class="input-group col-md-4 b-margin-md">
                    <span class="input-group-addon r-margin-sm"><i class="fa fa-archive fa-fw"></i></span>
                    <input type="text" name="availability" id="newProductAvailability" placeholder="商品庫存" class="form-control">
                </div>
                <div class="input-group col-lg-12 b-margin-md">
                    <span class="input-group-addon"><i class="fa fa-picture-o fa-fw"></i></span>
                    <input type="text" name="img_path" id="newProductImg_path" placeholder="圖片連結" class="form-control col-lg-12">
                </div>
                <div class="input-group col-xs-12 b-margin-md">
                    <textarea name="description" id="newProductDescription" placeholder="商品描述" class="form-control"></textarea>
                </div>
            </div>
	    </form>
			<div class="input-group col-md-12 text-right">
				<button onclick="addNewProduct(this)" class="btn btn-sm btn-success">儲存</button>
				<button type="reset" class="btn btn-sm btn-default">重設</button>
			</div>
	  </div>
	</div>
	<div class="panel panel-warning">
	  <div class="panel-heading">檢視 / 編輯現有商品</div>
	  <div class="table-responsive">
	    <table class="table table-hover" id="productinfo">
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
    				<td class="text-center" nowrap="nowrap">
    					<a onclick="editProduct(this)" class="cursor" style="margin-right: 8px;"><span><i class="fa fa-pencil"></i> 編輯</span></a>
    					<a onclick="confirmEditProduct(this)" class="cursor"  style="margin-right: 8px; color: green; display: none;"><span><i class="fa fa-check"></i> 確認</span></a>
    					<a onclick="deleteProduct(this)" class="cursor" style="color: red;"><span><i class="fa fa-trash-o"></i>刪除</span></a>
    				</td>
    			</tr>
    			@endforeach
    		</tbody>
    	</table>
	  </div>
	</div>

@stop
