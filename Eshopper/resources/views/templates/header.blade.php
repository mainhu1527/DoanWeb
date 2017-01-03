<!DOCTYPE HTML>
<head>
<title>Free Home Shoppe </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
</head>

<body>
 	<div class="wrap">	
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <ul class="nav nav-pills">
					<li><a href=""><i class="fa fa-phone"></i> +84 123 456 789</a></li>
					<li><a href=""><i class="fa fa-envelope"></i> eshopper@shop.com</a></li>
				</ul>
			</div>
			<div class="account_desc">
				 @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Đăng nhập</a></li>
                            <li><a href="{{ url('/register') }}">Đăng kí</a></li>
                        @else
                            <li class="dropdown">
                                <a href="/changepassword" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Xin chào, {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <a href="changepassword"> Đổi mật khẩu</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Thoát
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="index"><img src="images/home/logo.png" alt="" /></a>
			</div>
			<div class="search_box">
	     		<form action='search'>
	     			<input type="text" value="Bạn muốn tìm gì?" name='usr' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
	     		</form>
	     	</div>
				@if (!Auth::guest())
			  @endif
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
	<nav id="primary_nav_wrap">
		<ul>
		  <li class="current-menu-item"><a href="index">Trang chủ</a></li>
		  <li><a href="product">Sản phẩm<span class="fa fa-angle-down"></span></a>
		    <ul>
		    	<li><a href="product--a">Áo</a></li>
		    	<li><a href="product--gn">Giày Nam</a></li>
		    	<li><a href="product--gnu">Giày Nữ</a></li>
		    	<li><a href="product--m">Mũ</a></li>
		    	<li><a href="product--q">Quần</a></li>
		    </ul>
		  <li><a href="about">Thông tin</a></li>
		  <li><a href="delivery">Vận chuyển</a></li>
		</ul>
		<div class="clear"></div>
	</nav>	
</body>