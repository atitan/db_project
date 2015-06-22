@extends('layouts.master')

@section('title', '商品總覽')

@section('content')
    <div class="product-list">
      <article>
        <h1 class="sr-only">Product list</h1>
        @foreach($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="l-product">
            <div class="l-product-img thumbnail">
              <img src="{{ $product->img_path }}" alt="{{ $product->name }}" />
            </div>
            <div class="l-product-content">
              <h2 class="l-product-price h3">{{ $product->price }}</h2>
              <h3 class="h4">
                <a href="#product{{ $product -> id }}" data-toggle="modal" data-target="#product{{ $product -> id }}">{{ $product->name }}</a>
              </h3>
              <p>{{ $product->description }}</p>
              @if($product->availability > 1)
              <button onclick="addToCart({{ $product->id }})">Add to cart</button>
              @else
              <button disabled="disabled" style="background-color: #bbb;">已售完</button>
              @endif
            </div>
          </div>
        </div>
        @endforeach
      </article>
    </div>

    @foreach($products as $product)
    <div class="modal fade" id="product{{ $product -> id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $product -> name }}">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">{{ $product -> name }}</h4>
          </div>
          <div class="modal-body">
            <div class="l-product-img thumbnail">
              <img src="{{ $product->img_path }}" alt="{{ $product->name }}" />
            </div>
            <div class="l-product-content">
              <h3 class="l-product-price">{{ $product -> price }}</h3>
              <h3>產品名稱：{{ $product -> name }}</h3>
              <h3>產品描述：</h3>
              <p>{{ $product->description }}</p>
              <h3>產品庫存：{{ $product->availability }}</h3>
            </div>
          </div>
          <div class="modal-footer">
            @if($product->availability > 1)
            <button onclick="addToCart({{ $product->id }})" class="btn btn-success">Add to cart</button>
            @else
            <button disabled="disabled" class="btn btn-default" style="background-color: #bbb;">已售完</button>
            @endif
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  @stop
