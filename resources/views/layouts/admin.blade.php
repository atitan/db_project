<!DOCTYPE html>
<html lang="zh-tw">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>後臺管理介面｜@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/stylesheets/bootstrap.min.css">
  	<!-- Optional theme -->
    <link href="/stylesheets/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/stylesheets/alertify.core.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <!-- MetisMenu CSS -->
    <link href="/stylesheets/metisMenu.min.css" rel="stylesheet">
	<style>
        @import url(http://fonts.googleapis.com/earlyaccess/cwtexhei.css);
        @import url(http://fonts.googleapis.com/css?family=Ubuntu);
        html,
        body {
          font-family: 'Ubuntu', 'cwTeXHei', sans-serif;
        }
        a,
        table a:not(.btn), .table a:not(.btn) {
            text-decoration: none;
        }
		table#productinfo tr td {
			vertical-align: middle;
		}
		.cursor:hover {
			cursor: pointer;
		}
        .v-margin-md {
          margin-top: 20px;
          margin-bottom: 20px;
        }
        .b-margin-md {
          margin-bottom: 20px;
        }
        .input-group[class*="col-"] {
            float: left;
            padding-left: 15px;
            padding-right: 15px;
        }
         #orderDetails table td {
            vertical-align: middle;
        }
	</style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @section('navbar')
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin/products">後臺管理介面</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="/admin/products"><i class="fa fa-archive fa-fw"></i> 商品管理</a>
                        </li>
                        <li>
                            <a href="/admin/orders"><i class="fa fa-ticket fa-fw"></i> 訂單管理</a>
                        </li>
                        <li>
                            <a href="/me"><i class="fa fa-cogs fa-fw"></i> 帳號管理</a>
                        </li>
                        <li>
                            <a href="/"><i class="fa fa-arrow-left fa-fw"></i> 回前台</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        @show

        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="/javascripts/bootstrap.min.js"></script>
  	 <!-- Custom Theme JavaScript -->
    <script src="/javascripts/sb-admin-2.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="/javascripts/metisMenu.min.js"></script>
    <script src="/javascripts/alertify.min.js"></script>

    <script type="text/javascript">
      // alertify
        function alertifyreset () {
          alertify.set({
            delay : 5000,
          });
        }

      function addNewProduct(item) {
        var name         = $('#newProductName').val();
        var price        = $('#newProductPrice').val();
        var availability = $('#newProductAvailability').val();
        var description  = $('#newProductDescription').val();
        var img_path     = $('#newProductImg_path').val();
        var token        = '{{ csrf_token() }}';
        $.ajax({
          type: "POST",
          url:  "/admin/products",
          data: "name="+name+"&price="+price+"&availability="+availability+"&description="+description+"&img_path="+img_path+"&_token="+token,
          success: function(data) {
            alert('產品新增成功。');
            location.href = '/admin/products';
          }
        });
      }
   		function editProduct (item) {
   			$(item).next().show();
   			$(item).hide();
   			$(item).parent().parent().find('input').prev().hide();
   			$(item).parent().parent().find('input').show();
   			$(item).parent().parent().find('textarea').prev().hide();
   			$(item).parent().parent().find('textarea').show();

   		}
   		function confirmEditProduct (item) {
   			$(item).prev().show();
   			$(item).hide();
   			$(item).parent().parent().find('input').prev().show();
   			$(item).parent().parent().find('input').hide();
   			$(item).parent().parent().find('textarea').prev().show();
   			$(item).parent().parent().find('textarea').hide();
   			var id 		 	= $(item).parent().parent().find('td:eq(0)').html();
   			var img_path 	= $(item).parent().parent().find('input:eq(0)').val();
   			var name 	 	= $(item).parent().parent().find('input:eq(1)').val();
   			var price 	 	= $(item).parent().parent().find('input:eq(2)').val();
   			var description = $(item).parent().parent().find('textarea').val();
   			var avalibility = $(item).parent().parent().find('input:eq(3)').val();
   			$(item).parent().parent().find('input:eq(0)').prev().attr('src', img_path);
   			$(item).parent().parent().find('input:eq(1)').prev().html(name);
   			$(item).parent().parent().find('input:eq(2)').prev().html(price);
   			$(item).parent().parent().find('input:eq(3)').prev().html(avalibility);
   			$(item).parent().parent().find('textarea').prev().html(description);
   			updateProduct(id, img_path, name, price, description, avalibility);
   		}
   		function updateProduct(id, img_path, name, price, description, avalibility) {
   			var token = "{{ csrf_token() }}";
   			$.ajax({
          type: "POST",
          url:  "/admin/products/"+id,
          data: "name="+name+"&price="+price+"&availability="+avalibility+"&description="+description+"&img_path="+img_path+"&_method=PUT&_token="+token,
          success: function(data) {
            alertifyreset();
            alertify.success('該筆產品資料已成功更新。');
   			  }
   			});
   		}
        function deleteProduct(item) {
            var id = $(item).parent().parent().find('td:eq(0)').html();
            var token = "{{ csrf_token() }}";
            if(confirm("您確定要刪除該筆產品資料嗎？") == true) {
              $.ajax({
                 type: "POST",
                 url:  "/admin/products/"+id,
                 data: "_method=DELETE&_token="+token,
                 success: function(data) {
                     location.href = '/admin/products';
                 }
              });
            }
        }
        function editOrder(item) {
            $(item).hide();
            $(item).next().show();
            var record = $(item).parent().parent();
            $(record).find('input[name$="contact"]').show();
            $(record).find('input[name$="phone"]').show();
            $(record).find('input[name$="address"]').show();
            $(record).find('span.j-contact').hide();
            $(record).find('span.j-phone').hide();
            $(record).find('span.j-address').hide();
        }
        function confirmEditOrder(item) {
            $(item).hide();
            $(item).prev().show();
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
            url:  "/admin/orders/"+id,
            data: "contact="+contact+"&phone="+phone+"&address="+address+"&_method=PUT&_token="+token,
            success: function(data) {
              alertifyreset();
              alertify.success('該筆訂單資料已成功更新。');
            }
          });
        }
        function deleteOrder(item) {
          var record = $(item).parent().parent();
          var id     = $(record).find('span.j-orderid').html();
          var token  = "{{ csrf_token() }}";
          if(confirm("您確定要刪除該筆訂單資料嗎") == true) {
            $.ajax({
              type: "POST",
              url:  "/admin/orders/"+id,
              data: "_method=DELETE&_token="+token,
              success: function(data) {
                location.href = '/admin/orders';
              }
            });
          }
        }
   </script>

</body>
</html>
