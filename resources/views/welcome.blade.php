@extends('layouts.master')

@section('title', 'Page Title')

@section('content')
<div class="row v-margin-100 v-margin-t0">
  <div class="col-lg-8">
    <!-- Carousel -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="img-responsive" src="http://www.placehold.it/1600x800" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
        <div class="item">
          <img class="img-responsive" src="http://www.placehold.it/1600x800" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
        <div class="item">
          <img class="img-responsive" src="http://www.placehold.it/1600x800" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- /. Carousel -->
  </div>
  <div class="col-lg-4">
    <h2>Sample Title</h2>
    <p>
      必須先去了解市場和客戶的需求，一個一流的創意，生存下來的第一個想法是做好，什麼都想自己幹，我寧可喜歡一個一流的執行，結果還很遙遠，有結果未必是成功，別人可以拷貝我的模式，…愛情，退一步海闊天空，容易；生活，退一步海闊天空，天哪，沒有錢，再不對你好點，愛情，喝醉了我誰也不服,我就扶牆!我就像一隻趴在玻璃上的蒼蠅，住你的房，生，我希望有一天能用鼠標雙擊我的錢包，容易；生活，老闆，女人之美，生，年老的時候，不然不曉得奮鬥，愛情，男孩窮著養，問題是沒錢！
    </p>
  </div>
</div>

<hr />

<div class="row v-margin-100 product-list">
  <h2 class="text-center">Feature Product</h2>
  <article>
    <h1 class="sr-only">Product list</h1>
    <div class="col-lg-3 col-sm-6">
      <div class="l-product">
        <div class="l-product-img thumbnail">
          <img src="https://static.pirates.com.tw/prosimg/1/9/3/3/6/img.img.jpg" alt="Fake image" />
        </div>
        <div class="l-product-content">
          <h2 class="l-product-price h3">12800</h2>
          <h3 class="h4">
            <a href="#">Apple Watch 101 手錶面盤的設定</a>
          </h3>
          <p>相信大家對於Audi A1 一定不陌生，甚至很多船長跟伙伴家裡都有一輛 這台真的是小巧好開，又漂亮的好車啊</p>
          <button>Add to cart</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="l-product">
        <div class="l-product-img thumbnail">
          <img src="http://cache.iphone4.tw/phpupload/savefiles/20150603093321ee993c0cb8e2c7c9902684119d1e1ed6.jpg" alt="Fake image" />
        </div>
        <div class="l-product-content">
          <h2 class="l-product-price h3">700</h2>
          <h3 class="h4">
            <a href="#">Apple Watch 101 手錶面盤的設定</a>
          </h3>
          <p>相信大家對於Audi A1 一定不陌生，甚至很多船長跟伙伴家裡都有一輛 這台真的是小巧好開，又漂亮的好車啊</p>
          <button>Add to cart</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="l-product">
        <div class="l-product-img thumbnail">
          <img src="https://static.pirates.com.tw/prosimg/2/0/4/8/6/img.img.jpg" alt="Fake image" />
        </div>
        <div class="l-product-content">
          <h2 class="l-product-price h3">1200</h2>
          <h3 class="h4">
            <a href="#">Apple Watch 101 手錶面盤的設定</a>
          </h3>
          <p>相信大家對於Audi A1 一定不陌生，甚至很多船長跟伙伴家裡都有一輛 這台真的是小巧好開，又漂亮的好車啊</p>
          <button>Add to cart</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="l-product">
        <div class="l-product-img thumbnail">
          <img src="https://static.pirates.com.tw/ckeditor/pros/NWH1238414/f3ccdd27d2000e3f9255a7e3e2c48800" alt="Fake image" />
        </div>
        <div class="l-product-content">
          <h2 class="l-product-price h3">1980</h2>
          <h3 class="h4">
            <a href="#">智雲 Z1 Rider GoPro 專用三軸穩定器</a>
          </h3>
          <p>現在網頁前端設計師求職好像都會遇到要求要會 HTML5+css3，要了解透徹還真的不容易相信大家對於Audi A1 一定不陌生，甚至很多船長跟伙伴家裡都有一輛 這台真的是小巧好開，又漂亮的好車啊</p>
          <button>Add to cart</button>
        </div>
      </div>
    </div>
  </article>
  <!-- 第二列產品在平板跟手機裝置時隱藏 -->
  <article class="hidden-sm hidden-xs">
    <h1 class="sr-only">Product list</h1>
    <div class="col-lg-3 col-sm-6">
      <div class="l-product">
        <div class="l-product-img thumbnail">
          <img src="http://cache.iphone4.tw/phpupload/savefiles/201504140934322e6f17e7d4810ae5c67f4c11c50eeab1.jpg" alt="Fake image" />
        </div>
        <div class="l-product-content">
          <h2 class="l-product-price h3">14800</h2>
          <h3 class="h4">
            <a href="#">Patek Philippe 175週年紀念錶款 5175R</a>
          </h3>
          <p>相信大家對於Audi A1 一定不陌生，甚至很多船長跟伙伴家裡都有一輛 這台真的是小巧好開，又漂亮的好車啊</p>
          <button>Add to cart</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="l-product">
        <div class="l-product-img thumbnail">
          <img src="http://cache.iphone4.tw/phpupload/savefiles/20150428024418928bb9c98b5a9bae84d4ee09340c12e1.JPG" alt="Fake image" />
        </div>
        <div class="l-product-content">
          <h2 class="l-product-price h3">7200</h2>
          <h3 class="h4">
            <a href="#">羅技 MX Master 鼠王</a>
          </h3>
          <p>相信大家對於Audi A1 一定不陌生，甚至很多船長跟伙伴家裡都有一輛 這台真的是小巧好開，又漂亮的好車啊</p>
          <button>Add to cart</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="l-product">
        <div class="l-product-img thumbnail">
          <img src="http://cache.iphone4.tw/phpupload/savefiles/201505031034049d509ff33e6adc708b9a46257016d0c6.JPG" alt="Fake image" />
        </div>
        <div class="l-product-content">
          <h2 class="l-product-price h3">2480</h2>
          <h3 class="h4">
            <a href="#">羅技 K480 多媒體藍牙鍵盤</a>
          </h3>
          <p>相信大家對於Audi A1 一定不陌生，甚至很多船長跟伙伴家裡都有一輛 這台真的是小巧好開，又漂亮的好車啊</p>
          <button>Add to cart</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="l-product">
        <div class="l-product-img thumbnail">
          <img src="http://photo.minwt.com/img/Content/3C/2015-0609-blu/blu00.jpg" alt="Fake image" />
        </div>
        <div class="l-product-content">
          <h2 class="l-product-price h3">1200</h2>
          <h3 class="h4">
            <a href="#">Blu 手環式智慧型手機</a>
          </h3>
          <p>相信大家對於Audi A1 一定不陌生，甚至很多船長跟伙伴家裡都有一輛 這台真的是小巧好開，又漂亮的好車啊</p>
          <button>Add to cart</button>
        </div>
      </div>
    </div>
  </article>
  <div class="col-lg-12 text-right h4">
    <button class="product-btn"><a href="#">See more</a></button>    
  </div>
</div>

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
