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
                <a href="#">{{ $product->name }}</a>
              </h3>
              <p>{{ $product->description }}</p>
              <button onclick="addToCart({{ $product->id }})">Add to cart</button>
            </div>
          </div>
        </div>
        @endforeach
      </article>
    </div>
  @stop
