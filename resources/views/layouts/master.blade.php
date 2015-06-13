<!DOCTYPE html>
<html lang="zh-tw">
    <head>
      <meta charset="utf-8">
      <meta http-eqiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>App Name - @yield('title')</title>
      <link rel="stylesheet" type="text/css" href="../stylesheets/bootstrap.min.css">
      <!-- Optional theme -->
      <link rel="stylesheet" type="text/css" href="../stylesheets/bootstrap-theme.min.css">
      <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
        @import url(http://fonts.googleapis.com/earlyaccess/cwtexhei.css);
        @import url(http://fonts.googleapis.com/css?family=Ubuntu);
        body {
          font-family: 'Ubuntu', 'cwTeXHei', sans-serif;
          padding-top: 70px;
        }
        a {
          text-decoration: none;
          color: #727272;
        }
        a:hover,
        a:active,
        a:focus {
          color: #00796B;
          text-decoration: none;
        }
        .img-logo {
          display: inline-block;
          height: 25px;
        }
        .navbar-inline>img {
          display: inline-block;
          margin-right: 10px;
        }
        @media screen and (max-width: 768px) {
          .member-intro-content h3 {
            text-align: center;
          }

        }
        .member-intro {
          margin: 10px 0;
        }
        .member-intro-content p {
          text-indent: 2em;
        }

        /* Icon style */
        .icon-sm{
        	font-size:18px!important;
        }
        .icon-md{
        	font-size:30px!important;
        }
        .icon-round{
        	margin:0 auto;
        	border:2px solid gray;
        	border-radius: 50%;
        	padding: 32px 30px 26px 30px;
        	min-width:80px;
        }
        .icon-round,.icon-md,.icon-square.icon-md,.icon-rounded.icon-md{
        	min-width: 92px;
        }
        .icon-round.icon-lg,.icon-square.icon-lg,.icon-rounded.icon-lg{
        	min-width: 122px;
        }
        .icon-round.icon-xl,.icon-square.icon-xl,.icon-rounded.icon-xl{
        	min-width: 162px;
        }

        /* Margin Style */
        .v-margin-100 {
          margin: 100px 0;
        }
        .v-margin-t0 {
          margin-top: 0;
        }
        .v-margin-md {
          margin: 20px 0;
        }

        /* Hr Style */
        /* Gradient transparent - color - transparent */

        hr {
          border: 0;
          height: 1px;
          background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
        }
        /* Footer Style */
        footer {
          background: #424242;
          color: #E0E0E0;
          padding: 30px 0 20px 0;
        }

        /* thumbnail 是純粹定義圖片同高縮放 */
        .thumbnail {
          height: 240px;
          margin: 0 auto;
          overflow: hidden;
          position: relative;
        }
        .thumbnail img {
          position: absolute;
          margin: auto;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
        }

        /* l-product 是針對 product 有相同樣式可以重複使用 */
        .l-product {
          position: relative;
          background-color: #fff;
          border: 1px solid #00796B;
          padding: 10px 10px 30px;
          margin: 30px 0;
        }
        .l-product-content > h3 {
          color: #212121;
          min-height: 38px;
          margin: 15px 0;
        }

        .l-product-content > p {
          color: #727272;
          display: -webkit-box;
          font-size: 14px;
          line-height: 1.5;
          -webkit-line-clamp: 3;  /* 第 3 行要顯示點點點 */
          /* height = font-size * line-height * line-clamp + padding-top */
          height: 63px;
          overflow: hidden;
          text-overflow: ellipsis;
          -webkit-box-orient: vertical;
        }
        .l-product-price::before {
          content: "NT$";
          background-color: #009688;
          border: 2px solid #009688;
          border-radius: 30% 5% 30%;
          margin-right: 5px;
          color: #fff;
          transform: skewX(170deg);
        }
        .l-product button {
          position: absolute;
          left: 50%;
          top: 100%;
          -webkit-transform: translate(-50%, -50%);
          font-weight: 700;
          background-color: #009688;
          color: #fff;
          border-radius: 3px;
          border: none;
          padding: 10px 20px;
        }
        .l-product button:hover {
          background-color: #00796B;
        }

        .product-btn {
          position: relative;
          background-color: transparent;
          color: #009688;
          border-radius: 3px;
          border: none;
          margin: 20px 20px 0 0;
        }
        .product-btn::after {
          content: "\003e";
          margin-left: 5px;
          position: absolute;
          display: inline-block;
          background-color: #009688;
          height: 20px;
          width: 20px;
          border: none;
          color: #FFF;
        }

        .nav>li>a.inline-block {
          display: inline-block;
        }
      </style>
    </head>
    <body>
      @section('navbar')
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand navbar-inline" href="/">
                <img src="../img/Logo.png" class="img-responsive img-logo" alt="Brand" />購物商場
              </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <!-- <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form> -->
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/">首頁</a></li>
                <li><a href="#">商品總覽</a></li>
                <li><a href="#">購物車&nbsp;<span class="badge">3</span></a></li>
                <li><a href="/user/signup" class="inline-block">加入會員</a>/<a href="/user/login" class="inline-block">登入</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    XX，您好！<span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">訂單查詢</a></li>
                    <li><a href="#">會員資料更新</a></li>
                    <li class="divider"></li>
                    <li><a href="#">後台管理系統</a></li>
                    <li class="divider"></li>
                    <li><a href="#">登出</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      @show

      @section('sidebar')
      @show

      <div class="container">
          @yield('content')
      </div>

      <footer>
        <div class="container">
          <p>Copyright © Created by Sh Lin, Bihan Zhang, Yusheng Li at 2015. All Rights Reserved.</p>
          <p>Theme: <a href="https://bootswatch.com/lumen/">Lumen</a> is made by <a href="http://thomaspark.co/">Thomas Park</a>. Based on <a href="http://bootstrap.com">Bootstrap</a>. Icons from <a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a>.</p>
        </div>
      </footer>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="/javascripts/bootstrap.min.js"></script>
    </body>
</html>
