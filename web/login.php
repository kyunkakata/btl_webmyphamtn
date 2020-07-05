
<!DOCTYPE html>
<html>

<head>
	<title>Mỹ Phẩm Thái Nguyên | Đăng nhập </title>
	<style>
		/* for PHP work */
		<?php include_once "css/bootstrap.css"  ?>
		<?php include_once "css/jstarbox.css"  ?>
		<?php include_once "css/style.css"  ?>
	</style>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="og:title" content="Vide" />
	<meta name="keywords" content="Cửa hàng Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- js -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		const locationSearchString = window.location.search;
		console.log(locationSearchString);
		const urlParams = new URLSearchParams(locationSearchString);
		const loginResult = urlParams.get('login_result');
		if(loginResult === 'false'){
			alert('Đăng nhập không thành công. Sai tên đăng nhập hoặc mật khẩu');
		}
		const signUpResult = urlParams.get('signup_result');
		if(signUpResult === 'true'){
			alert('Đăng kí thành công. Vui lòng đăng nhập tài khoản.');
		}
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
	<!--- start-rate---->
	<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
	<script type="text/javascript">
		jQuery(function () {
			jQuery('.starbox').each(function () {
				var starbox = jQuery(this);
				starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
				}).bind('starbox-value-changed', function (event, value) {
					if (starbox.hasClass('random')) {
						var val = Math.random();
						starbox.next().text(' ' + val);
						return val;
					}
				})
			});
		});
	</script>
	<!---//End-rate---->

</head>

<body>

	<div class="header">

		<div class="container">

			<div class="logo">
				<h1><a href="index.php">
						<img src="http://myphamthainguyen.vn/media/custom/default/fwxae.png" width="100px" height="100px"
							style="margin-right: 20px;">Cửa
						hàng Mỹ Phẩm Thái Nguyên<span>
					</a>
				</h1>
			</div>
			<div class="head-t">
				<ul class="card">
				<li><a href="../btl_webmyphamtn/index.php?task=login"><i class="fa fa-user"
               aria-hidden="true"></i>Đăng nhập</a></li>
            <li><a href="../btl_webmyphamtn/index.php?task=register"><i class="fa fa-arrow-right"
               aria-hidden="true"></i>Đăng kí</a></li>				</ul>
			</div>




			<div class="nav-top">
				<nav class="navbar navbar-default">

					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
							data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>


					</div>
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
            <li><a href="../btl_webmyphamtn/index.php?task=index" class="hyper "><span>Trang
            chủ</span></a></li>
            <li><a href="../btl_webmyphamtn/index.php?task=index&product_type=trang_diem" class="hyper">
            <span>Trang điểm</span></a></li>
            <li><a href="../btl_webmyphamtn/index.php?task=index&product_type=cham_soc_da"
               class="hyper"> <span>Chăm sóc da</span></a></li>
            <li><a href="../btl_webmyphamtn/index.php?task=index&product_type=cham_soc_toan_than"
               class="hyper"> <span>Chăm sóc toàn thân</span></a></li>
            </ul>
					</div>
				</nav>
				<div class="cart">

					<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<!---->
	<!--banner-->
	<div class="banner-top">
		<div class="container">
			<h3>Đăng nhập</h3>
			<h4><a href="index.php">Trang chủ</a><label>/</label>Đăng nhập</h4>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--Đăng nhập-->

	<div class="login">

		<div class="main-agileits">
			<div class="form-w3agile">
				<h3>Đăng nhập</h3>
				<form action="http://localhost/btl_webmyphamtn/index.php?task=action_login" method="post">
					<div class="key">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<input type="text" value="Tên đăng nhập" name="Name" onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = 'Tên đăng nhập';}" required="">
						<div class="clearfix"></div>
					</div>
					<div class="key">
						<i class="fa fa-lock" aria-hidden="true"></i>
						<input type="password" value="Password" name="Password" onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = 'Password';}" required="">
						<div class="clearfix"></div>
					</div>
					<input type="submit" value="Đăng nhập">
				</form>
			</div>
			<div class="forg">
				<a href="#" class="forg-left">Quên mật khẩu</a>
				<a href="register.html" class="forg-right">Đăng ký</a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--footer-->
	<div class="footer">
		<div class="container">


			<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2><a href="index.php"><img src="http://myphamthainguyen.vn/media/custom/default/fwxae.png" width="100px"
							height="100px" style="margin-right: 20px;">Mỹ Phẩm Thái Nguyên</span></a></h2>
				<p class="fo-para">Trang bán mỹ phẩm chính hãng hàng đầu Thái Nguyên</p>

				<div class=" address">
					<div class="col-md-4 fo-grid1">
						<p><i class="fa fa-home" aria-hidden="true"></i> Cs1: Số 14, Ngõ 499, Lương Ngọc Quyến, Tp Thái Nguyên
							0965.666.968</p>
						<p><i class="fa fa-home" aria-hidden="true"></i>Cs2: Số 140, Đ.Z115, Tp Thái Nguyên 0946.366.968</p>
						<p><i class="fa fa-home" aria-hidden="true"></i>Cs3: Số 83, Lương Ngọc Quyến, Tp Thái Nguyên 0945.444.968
						</p>
						<p><i class="fa fa-home" aria-hidden="true"></i>Cs4: Đối diện cổng KTX 1 Samsung, Phổ Yên, Thái Nguyên
							0869.828.968</p>
					</div>
					<div class="col-md-4 fo-grid1">


					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="mailto:hotro@myphamthainguyen.com"><i class="fa fa-envelope-o"
									aria-hidden="true"></i>hotro@myphamthainguyen.com</a></p>
					</div>
					<div class="clearfix"></div>

				</div>
			</div>

		</div>
	</div>
	<!-- //footer-->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<script type='text/javascript' src="js/jquery.mycart.js"></script>
	<script type="text/javascript">
		$(function () {

			var goToCartIcon = function ($addTocartBtn) {
				var $cartIcon = $(".my-cart-icon");
				var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({ "position": "fixed", "z-index": "999" });
				$addTocartBtn.prepend($image);
				var position = $cartIcon.position();
				$image.animate({
					top: position.top,
					left: position.left
				}, 500, "linear", function () {
					$image.remove();
				});
			}

			$('.my-cart-btn').myCart({
				classCartIcon: 'my-cart-icon',
				classCartBadge: 'my-cart-badge',
				affixCartIcon: true,
				checkoutCart: function (products) {
					$.each(products, function () {
						console.log(this);
					});
				},
				clickOnAddToCart: function ($addTocart) {
					goToCartIcon($addTocart);
				},
				getDiscountPrice: function (products) {
					var total = 0;
					$.each(products, function () {
						total += this.quantity * this.price;
					});
					return total * 1;
				}
			});

		});
	</script>

</body>

</html>