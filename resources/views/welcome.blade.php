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

<div class="row v-margin-100">
  <h2 class="text-center">Feature Product</h2>
  <div class="col-lg-3">

  </div>
  <div class="col-lg-3">

  </div>
  <div class="col-lg-3">

  </div>
  <div class="col-lg-3">
    
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
