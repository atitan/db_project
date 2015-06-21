@extends('layouts.master')

@section('title', 'Page Title')

@section('content')
<div class="cover-image img-responsive">
  <div class="cover">
    <div class="container">
      <div class="grid">
        <div class="grid__item text-center">
          <a class="link link--takiri" href="/">Welcome <span>Buy What You Love</span></a>
        </div>
      </div>
    </div>
  </div>
</div>

@if (count($products) >= 8 && shuffle($products))
<div class="row v-margin-100 product-list">
  <h2 class="text-center">Feature Product</h2>
  <h1 class="sr-only">Product list</h1>
  <article>
  @for($i = 0; $i <= 3 ;$i++)
    <div class="col-lg-3 col-sm-6">
      <div class="l-product">
        <div class="l-product-img thumbnail">
          <img src="{{ $products[$i]->img_path }}" alt="{{ $products[$i]->name }}" />
        </div>
        <div class="l-product-content">
          <h2 class="l-product-price h3">{{ $products[$i]->price }}</h2>
          <h3 class="h4">
            <a href="#">{{ $products[$i]->name }}</a>
          </h3>
          <p>{{ $products[$i]->description }}</p>
          <button onclick="addToCart({{ $products[$i]->id }})">Add to cart</button>
        </div>
      </div>
    </div>
  @endfor
  </article>
  <article class="hidden-sm hidden-xs">
  @for($j = 4; $j <= 7 ;$j++) 
    <div class="col-lg-3 col-sm-6">
      <div class="l-product">
        <div class="l-product-img thumbnail">
          <img src="{{ $products[$j]->img_path }}" alt="{{ $products[$j]->name }}" />
        </div>
        <div class="l-product-content">
          <h2 class="l-product-price h3">{{ $products[$j]->price }}</h2>
          <h3 class="h4">
            <a href="#">{{ $products[$j]->name }}</a>
          </h3>
          <p>{{ $products[$j]->description }}</p>
          <button onclick="{{ $products[$j]->id }}">Add to cart</button>
        </div>
      </div>
    </div>
  @endfor
  </article>
  <div class="col-lg-12 text-right h4">
    <button class="product-btn"><a href="/products">See more</a></button>    
  </div>
</div>
@else
  <div class="row v-margin-100 product-list">
    <h2 class="text-center">There're no enough products to display.</h2>
  </div>
@endif

<hr />

<div class="row v-margin-100">
  <div class="col-sm-4">
    <div class="text-center">
      <span class="fa fa-heart icon-round icon-md"></span>
    </div>
    <h3 class="text-center mg-md">
      Beautiful
    </h3>
    <p class="text-center">
      A little feature description could go here. A little feature description could go here.
    </p>
  </div>
  <div class="col-sm-4">
    <div class="text-center">
      <span class="fa fa-rocket icon-round icon-md"></span>
    </div>
    <h3 class="text-center mg-md">
      Responsive
    </h3>
    <p class="text-center">
      A little feature description could go here. A little feature description could go here.
    </p>
  </div>
  <div class="col-sm-4">
    <div class="text-center">
      <span class="fa fa-code icon-round icon-md"></span>
    </div>
    <h3 class="text-center mg-md">
      Clean
    </h3>
    <p class="text-center">
      A little feature description could go here. A little feature description could go here.
    </p>
  </div>
</div>

<hr />

<div class="row v-margin-100">
  <div class="col-md-6 clearfix member-intro">
    <div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-4">
      <img src="img/members/Sh Lin.jpg" alt="" class="img-circle img-responsive"/>
    </div>
    <div class="col-xs-12 col-sm-8 member-intro-content">
      <h3>Sh Lin &nbsp;<small>遙遠的車尾燈</small></h3>
      <p>
        大神一般的存在，因為速度神速，所以其他組員永遠都看不到車尾燈。最大的願望是死會。
      </p>
    </div>
  </div>
  <div class="col-md-6 clearfix member-intro">
    <div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-4">
      <img src="img/members/Bihan Zhang.jpg" alt="" class="img-circle img-responsive" />
    </div>
    <div class="col-xs-12 col-sm-8 member-intro-content">
      <h3>Bihan Zhang &nbsp;<small>神隱的前端</small></h3>
      <p>
        神速成長的前端，因為討厭後端所以立志努力鑽研前端，發現 CSS3 是門玄學後，想回家種田、可爸爸又讓她成為三歲自耕農，只好繼續在前端的世界中浮沈。
    </div>
  </div>
  <div class="col-md-6 clearfix member-intro">
    <div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-4">
      <img src="img/members/Yusheng Li.jpg" alt="" class="img-circle img-responsive" />
    </div>
    <div class="col-xs-12 col-sm-8 member-intro-content">
      <h3>Yusheng Li &nbsp;<small>雜工小弱弱</small></h3>
      <p>
        前後端都只會一點點，因為弱得不像話所以常常被大神罵。最近外務眾多所以常常拖稿。
      </p>
    </div>
  </div>
</div>
@stop
