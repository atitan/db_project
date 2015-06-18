@extends('layouts.master')

@section('title', '購物車')

@section('content')

	<table id="shoppingcart" class="table table-hover table-responsive">
		<thead>
			<tr>
				<th class="text-center">#</th>
				<th class="text-center">商品縮圖</th>
				<th class="text-center">商品名稱</th>
				<th class="text-center">選購數量</th>
				<th class="text-center">商品單價</th>
				<th class="text-center">小計</th>
				<th class="text-center">刪除</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($products as $product)
			<tr>
				<td>{{$product->id}}</td>
				<td></td>
				<td>{{$product->name}}</td>
				<td class="text-right">
					<?php
						$availablequan = 0;
						if ($product->availability > 10) {
							$availablequan = 10;
						} else {
							$availablequan = $product->availability;
						}
					?>
					<select name="quan" id="quan" onchange="updateTotal(this)" style="width: 3em;">
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
				<td class="text-center"><a href=""><span class="fa fa-trash-o"></a></span></td>
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
			<tr >
				<td colspan="3"></td>
				<td colspan="4" class="text-right">
					<button class="btn btn-default">繼續選購</button>  <button class="btn btn-primary">更新購物車</button>
				</td>
			</tr>
			<tr>
				<td colspan="7" class="text-right">
					<button class="btn btn-danger">帶我結帳去</button>
				</td>
			</tr>
		</tfoot>
	</table>
@stop

