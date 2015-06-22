<!DOCTYPE html>
<html lang="zh-tw">
    <head>
      <meta charset="utf-8">
      <meta http-eqiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>還沒想好名字｜@yield('title')</title>
      <link rel="stylesheet" type="text/css" href="/stylesheets/bootstrap.min.css">
      <!-- Optional theme -->
      <link rel="stylesheet" type="text/css" href="/stylesheets/bootstrap-theme.min.css">
      <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="/stylesheets/alertify.core.css">
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
        a:focus {
          outline: none;
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
        .icon-round:hover{
          color: #009688;
          border-color: #009688;
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
          margin-top: 20px;
          margin-bottom: 20px;
        }
        .t-margin-lg {
          margin-top: 40px;
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
          margin: 50px 0;
        }
        .l-product-content > h3 {
          color: #212121;
          margin: 15px 0;
          -webkit-line-clamp: 2;  /* 第 2 行要顯示點點點 */
          /* height = font-size(18) * line-height(1.1) * line-clamp(2) + padding-top */
          height: 39px;
          overflow: hidden;
          text-overflow: ellipsis;
          -webkit-box-orient: vertical;
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
             -moz-transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%);
               -o-transform: translate(-50%, -50%);
          font-weight: 700;
          background-color: #009688;
          color: #fff;
          border-radius: 3px;
          border: none;
          padding: 10px;
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
        .cursor:hover {
          cursor: pointer;
        }
        #orderDetails table td {
          vertical-align: middle;
        }

        /* Navbar, Footer Style */

        .navbar-default,
        footer {
          background-color: #009688;
          background-image: none;
          border: none;
          color: #fff;
        }

          .navbar-default:hover {
            color: #E0F2F1;
          }

          footer a {
            color: #fff;
            text-shadow: none;
            border-bottom: 1px #E0F2F1 dotted;
          }

          .navbar-default .navbar-toggle {
            background-color: #e3e3e3;
            border: none;
          }

          .navbar-default .navbar-nav>li>a,
          .navbar-default .navbar-nav>li>a:focus {
            color: #fff;
            text-shadow: none;
          }
            .navbar-default .navbar-nav>li>a:hover {
              color: #E0F2F1;
            }

          .navbar-default .navbar-nav>.open>a,
          .navbar-default .navbar-nav>.open>a:hover,
          .navbar-default .navbar-nav>.open>a:focus,
          .dropdown-menu>li>a:hover,
          .dropdown-menu>li>a:focus {
            background-color: #00897B;
            background-image: none;
            color: #fff;
          }

          .dropdown-menu,
          .dropdown-menu>li>a {
            background-color: #009688;
            background-image: none;
            border: none;
            color: #fff;
            border-radius: 0;
          }

          .navbar-default .navbar-brand {
            color: #fff;
            text-shadow: none;
          }

            .navbar-default .navbar-brand:hover {
              color: #E0F2F1;
            }

        /* Cover Image style */
        .cover-image {
          background: url('../img/cycu.jpg') center 10% no-repeat;
        }
        .cover {
          min-height: 90vh;
          background-color: rgba(255, 249, 196, 0.3);
          background-image: url('../img/mask.png');
        }
        .cover h1 {
          color: #fff;
          padding-top: 10%;
        }

        .wrap {
          min-height: 100vh;
        }
        /* General link styles */
        .link {
          outline: none;
          position: relative;
          font-size: 8em;
          line-height: 1;
          color: #fff;
          display: inline-block;
        }
        /* Takiri */
        .link--takiri {
          font-style: italic;
          text-decoration: none;
          font-weight: 700;
          font-size: 7em;
          padding: 0 10px 20px;
          -webkit-transition: color 0.5s;
          transition: color 0.5s;
        }
        .link--takiri:hover {
          color: #212121;
          text-decoration: none;
        }
        .link--takiri:focus {
          color: #1e1a1b;
          text-decoration: none;
        }
        .link--takiri::before {
          content: '';
          position: absolute;
          height: 36px;
          width: 120%;
          top: 50%;
          margin-top: -18px;
          left: -10%;
          z-index: -1;
          background: #F9F9F9;
          -webkit-transform: rotate3d(0,0,1,45deg) scale3d(0,1,1);
          transform: rotate3d(0,0,1,45deg) scale3d(0,1,1);
          -webkit-transition: -webkit-transform 0.5s;
          transition: transform 0.5s;
        }
        .link--takiri:hover::before {
          -webkit-transform: rotate3d(0,0,1,45deg) scale3d(1,1,1);
          transform: rotate3d(0,0,1,45deg) scale3d(1,1,1);
        }
        .link--takiri span {
          font-size: 20%;
          font-weight: 400;
          position: absolute;
          right: 15px;
          color: #e53369;
          bottom: 0;
          opacity: 0;
          -webkit-transform: translate3d(-10px,-10px,0);
          transform: translate3d(-10px,-10px,0);
          -webkit-transition: -webkit-transform 0.5s, opacity 0.5s;
          transition: transform 0.5s, opacity 0.5s;
        }
        .link--takiri:hover span {
          opacity: 1;
          -webkit-transform: translate3d(0,0,0);
          transform: translate3d(0,0,0);
        }
        @media screen and (max-width: 42em) {
          .link--takiri {
            font-size: 3.5em;
          }
        }

        .grid__item>a {
          top: 40vh;
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
                <i class="fa fa-flag"></i>
                {{-- <img src="../img/Logo.png" class="img-responsive img-logo" alt="Brand" /> --}}
                還沒想好名字
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
                <li><a href="/">首頁</a></li>
                <li><a href="/products">商品總覽</a></li>
                <li><a href="/cart">購物車 <span class="badge j-cartquantity">{{ count($cart) }}</span></a></li>
                @if ($user)
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ $user->username }}，您好！<span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="/orders">訂單查詢</a></li>
                    <li><a href="/me">會員資料更新</a></li>
                    <li class="divider"></li>
                    @if( $user->is_admin == '1' )
                      <li><a href="/admin/orders">後台管理系統</a></li>
                      <li class="divider"></li>
                    @endif
                    <li>
                        <a class="cursor" onclick="userLogout()">登出</a>
                    </li>
                  </ul>
                </li>
                @else
                <li><a href="/user/signup" class="inline-block">加入會員</a>/<a href="/user/login" class="inline-block">登入</a></li>
                @endif
              </ul>
            </div>
          </div>
        </nav>
      @show

      @section('sidebar')
      @show

      <div class="container wrap">
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

      <script src="/javascripts/jqBootstrapValidation.js"></script>
      
      <script src="/javascripts/alertify.min.js"></script>

      <script type="text/javascript">

          // alertify
          function alertifyreset () {
            alertify.set({
              delay : 5000,
            });
          }

          // jqBootstrapValidation
          $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );

          function updateTotal(changed) {
              $(changed).parent().next().next().html($(changed).val()*$(changed).parent().next().html());
              var total = 0;
              $(changed).prev().html($(changed).val());
              $('table#shoppingcart tbody').children().each(function(index) {
                  total += $(this).find("select:eq(0)").val()*$(this).find("td:eq(4)").html();
              });
              $('#total').html(total);
          }
          function editValue(changed) {
            $(changed).next().show();
            $(changed).hide();
            $(changed).parent().parent().find("select:eq(0)").show();
            $(changed).parent().parent().find("select:eq(0)").prev().hide();

          }
          function confirmValue(changed) {
            $(changed).prev().show();
            $(changed).hide();
            var id = $(changed).parent().parent().find('td:eq(0)').html();
            console.log('id = '+id);
            var quantity =  $(changed).parent().parent().find("select:eq(0)").val();
            console.log('quantity = '+quantity);
            $(changed).parent().parent().find("select:eq(0)").hide();
            $(changed).parent().parent().find("select:eq(0)").prev().show();
            editCart(id, quantity);
          }
          function deleteCartItem(item) {
            var id = $(item).parent().parent().find('td:eq(0)').html();
            editCart(id, 0);
          }
          function editCart(id, quan) {
              if (quan != 0) {
                $.ajax({
                  type: "POST",
                  url: "/cart/edit",
                  data: "id="+id+"&quan="+quan+"&_method=PUT&_token={{ csrf_token() }}", // serializes the form's elements.
                  success: function(data) {
                    alertifyreset();
                    alertify.success('更新購物車成功。'); // show response from the php script.
                  }
               });
              } else {
                $.ajax({
                  type: "POST",
                  url: "/cart/edit",
                  data: "id="+id+"&quan="+quan+"&_method=PUT&_token={{ csrf_token() }}", // serializes the form's elements.
                  success: function(data) {
                      alert('該筆項目已從購物車中刪除。'); // show response from the php script.
                      location.href = '/cart';
                  }
               });
              }
          }
          function addToCart(id) {
             $.ajax({
               type: "POST",
               url: "/cart/add",
               data: "id="+id+"&quan=1&_token={{ csrf_token() }}", // serializes the form's elements.
               success: function(data, status) {
                 if(data != 'ok') {
                   location.href = '/user/login';
                 } else {
                   window.location.reload();
                 }
               }
            });
          }
          function editOrder(item) {
            $(item).next().show();
            $(item).hide();
            var record = $(item).parent().parent();
            $(record).find('input[name$="contact"]').show();
            $(record).find('input[name$="phone"]').show();
            $(record).find('input[name$="address"]').show();
            $(record).find('span.j-contact').hide();
            $(record).find('span.j-phone').hide();
            $(record).find('span.j-address').hide();
          }
          function confirmEditOrder(item) {
            $(item).prev().show();
            $(item).hide();
            var record       = $(item).parent().parent();
            var id           = $(record).find('span.j-orderid').html();
            var contactInput = $(record).find('input[name$="contact"]');
            var contactValue = $(record).find('span.j-contact');
            var phoneInput   = $(record).find('input[name$="phone"]');
            var phoneValue   = $(record).find('span.j-phone');
            var addressInput = $(record).find('input[name$="address"]');
            var addressValue = $(record).find('span.j-address');
            $(contactValue).html($(contactInput).val()).show();
            $(phoneValue).html($(phoneInput).val()).show();
            $(addressValue).html($(addressInput).val()).show();
            $(contactInput).hide();
            $(phoneInput).hide();
            $(addressInput).hide();
            updateOrder(id, contactInput.val(), phoneInput.val(), addressInput.val());
          }
          function updateOrder(id, contact, phone, address) {
          var token = "{{ csrf_token() }}";
          $.ajax({
            type: "POST",
            url:  "/orders/"+id,
            data: "contact="+contact+"&phone="+phone+"&address="+address+"&_method=PUT&_token="+token,
            success: function(data) {
              alertifyreset();
              alertify.success('您的訂單資料已成功更新。');
            }
          });
        }
        function deleteOrder(item) {
          var record = $(item).parent().parent();
          var id     = $(record).find('span.j-orderid').html();
          var token  = "{{ csrf_token() }}";
          $.ajax({
            type: "POST",
            url:  "/orders/"+id,
            data: "_method=DELETE&_token="+token,
            success: function(data) {
              alert('該筆訂單資料已成功刪除。');
              location.href = '/orders';
            }
          });
        }
        function editUserData(item) {
          $(item).hide();
          $(item).next().show();
          $('div.j-password').show();
          $('div.j-repassword').show();
          $('button.j-submit').show();
          $('input[type$="reset"]').show();
        }
        function cancelEditUserData(item) {
          $(item).hide();
          $(item).prev().show();
          $('input[name$="password"]').val("");
          $('input[name$="retype-password"]').val("");
          $('div.j-password').hide();
          $('div.j-repassword').hide();
          $('button.jsubmit').hide();
          $('input[type$="reset"]').hide();

        }
        function updateUserData(item) {
          var password = $('input[name$="password"]').val();
          var token    = "{{ csrf_token() }}";
          $.ajax({
            type: "POST",
            url:  "/me",
            data: "password="+password+"&_method=PUT&_token="+token,
            success: function(data) {
              alertifyreset();
              alertify.success('您的密碼已更新。');
            }
          });
        }
        function userLogout() {
          $.ajax({
            type: "POST",
            url:  "/user/logout",
            data: "_method=DELETE&_token={{ csrf_token() }}",
            success: function(data) {
              location.href = '/';
            }
          });
        }
      </script>
    </body>
</html>
