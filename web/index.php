<!DOCTYPE html>
<html>
<head>
	<title>Mỹ Phẩm Thái Nguyên| Home </title>
	<style>
		/* for PHP work */
		<?php include_once "css/bootstrap.css"  ?>
		<?php include_once "css/jstarbox.css"  ?>
		<?php include_once "css/style.css"  ?>
		<?php include_once "css/font-awesome.css" ?>
	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	<script src="web/js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="web/js/move-top.js"></script>
	<script type="text/javascript" src="web/js/easing.js"></script>
	<script type="text/javascript">
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
	<script src="web/js/jstarbox.js"></script>
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
					<li><a href="../btl_webmyphamtn/index.php?task=login"><i class="fa fa-user" aria-hidden="true"></i>Đăng nhập</a></li>
					<li><a href="register.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Đăng kí</a></li>
					<li><a href="about.html"><i class="fa fa-file-text-o" aria-hidden="true"></i>Về chúng tôi</a></li>
				</ul>
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
							<li><a href="index.php" class="hyper "><span>Trang chủ</span></a></li>
							<li><a href="kitchen.html" class="hyper"> <span>Trang điểm</span></a></li>
							<li><a href="hold.html" class="hyper"> <span>Chăm sóc da</span></a></li>
							<li><a href="offer.html" class="hyper"> <span>Chăm sóc toàn thân</span></a></li>
							<li><a href="contact.html" class="hyper"> <span>Thương hiệu & xuất xứ</span></a></li>
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
	<!-- <div data-vide-bg="video/video">
		<div class="container">
			<div class="banner-info">
				<h3>It is a long established fact that a reader will be distracted by
					the readable </h3>
				
			</div>
		</div>
	</div> -->
	<div class="search-form">
		<form action="#" method="post">
			<input type="text" placeholder="Tìm kiếm sản phẩm theo tên, thương hiệu..." name="Search...">
			<input type="submit" value=" ">
		</form>
	</div>
	<script>window.jQuery || document.write('<script src="web/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
	<script src="web/js/jquery.vide.min.js"></script>

	<!--content-->
	<div class="content-top ">
		<div class="container ">
			<div class="spec ">
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
			<div class="tab-head ">
				<nav class="nav-sidebar">
					<ul class="nav tabs ">
						<li class="active"><a href="#tab1" data-toggle="tab">Bán chạy</a></li>
						<li class=""><a href="#tab2" data-toggle="tab">Sản phẩm mới</a></li>
						<li class=""><a href="#tab3" data-toggle="tab">Thương hiệu nổi tiếng</a></li>
					</ul>
				</nav>
				<!-- TODO: fix data here -->
				<div class=" tab-content tab-content-t ">
					<div class="tab-pane active text-style" id="tab1">
						<div class=" con-w3l">
							<?php 
								// var_dump($result);
								for ($i=0; $i < 4; $i++) { 
									?>
									<div class="col-md-3 m-wthree">
								<!-- TODO: This is base product infomation -->
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
										<img
											src="<?php echo $result[$i]['image'] ?>"
											class="img-responsive" alt="" width="auto" height="200">
										<div class="offer">
											<p><span>Bán chạy</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img" style="-webkit-line-clamp: 2;-webkit-box-orient: vertical;"><?php echo $result[$i]['name'] ?></a></h6>
										</div>
										<div class="mid-2">
											<p>
												<em class="item_price"><?php echo $result[$i]['price'] ?> đ</em>
												<em class="item_bought_amount" style="float: right;"><?php echo $result[$i]['buy_times'] ?> lượt đã mua</em>
											</p>
											<div class="clearfix"></div>
										</div>
										<!-- TODO: Fix data add to cart here -->
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="<?php echo $result[$i]['name']?>"
												data-summary="summary 1" data-price="<?php echo $result[$i]['price'] ?>" data-quantity="1" data-image="<?php echo $result[$i]['image'] ?>">Thêm
												vào
												giỏ hàng</button>
										</div>

									</div>
								</div>
							</div>
							<?php
								}
							?>
							
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="tab-pane  text-style" id="tab2">
						<div class=" con-w3l">
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
										<img src="images/of4.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Lays</a>(100 g)</h6>
										</div>
										<div class="mid-2">
											<p><label>$1.00</label><em class="item_price">$0.70</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="5" data-name="Lays"
												data-summary="summary 5" data-price="0.70" data-quantity="1" data-image="images/of4.png">Thêm
												vào giỏ hàng</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
										<img src="images/of5.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Kurkure</a>(100 g)</h6>
										</div>
										<div class="mid-2">
											<p><label>$1.00</label><em class="item_price">$0.70</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="Kurkure"
												data-summary="summary 6" data-price="0.70" data-quantity="1" data-image="images/of5.png">Thêm
												vào giỏ hàng</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
										<img src="images/of6.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Popcorn</a>(250 g)</h6>
										</div>
										<div class="mid-2">
											<p><label>$2.00</label><em class="item_price">$1.00</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="7" data-name="Popcorn"
												data-summary="summary 7" data-price="1.00" data-quantity="1" data-image="images/of6.png">Thêm
												vào giỏ hàng</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
										<img src="images/of7.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Nuts</a>(250 g)</h6>
										</div>
										<div class="mid-2">
											<p><label>$4.00</label><em class="item_price">$3.50</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="8" data-name="Nuts"
												data-summary="summary 8" data-price="3.50" data-quantity="1" data-image="images/of7.png">Thêm
												vào giỏ hàng</button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="tab-pane  text-style" id="tab3">
						<div class=" con-w3l">
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
										<img src="images/of8.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Banana</a>(6 pcs)</h6>
										</div>
										<div class="mid-2">
											<p><label>$2.00</label><em class="item_price">$1.50</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="9" data-name="Banana"
												data-summary="summary 9" data-price="1.50" data-quantity="1" data-image="images/of8.png">Thêm
												vào giỏ hàng</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
										<img src="images/of9.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Onion</a>(1 kg)</h6>
										</div>
										<div class="mid-2">
											<p><label>$1.00</label><em class="item_price">$0.70</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="10" data-name="Onion"
												data-summary="summary 10" data-price="0.70" data-quantity="1" data-image="images/of9.png">Thêm
												vào giỏ hàng</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
										<img src="images/of10.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html"> Bitter Gourd</a>(1 kg)</h6>
										</div>
										<div class="mid-2">
											<p><label>$2.00</label><em class="item_price">$1.00</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="11" data-name="Bitter Gourd"
												data-summary="summary 11" data-price="1.00" data-quantity="1" data-image="images/of10.png">Add
												to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
										<img src="images/of11.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Apples</a>(1 kg)</h6>
										</div>
										<div class="mid-2">
											<p><label>$4.00</label><em class="item_price">$3.50</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="12" data-name="Apples"
												data-summary="summary 12" data-price="3.50" data-quantity="1" data-image="images/of11.png">Add
												to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="tab-pane text-style" id="tab4">
						<div class=" con-w3l">
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal13" class="offer-img">
										<img src="images/of12.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Honey</a>(500 g)</h6>
										</div>
										<div class="mid-2">
											<p><label>$7.00</label><em class="item_price">$6.00</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="13" data-name="Honey"
												data-summary="summary 13" data-price="6.00" data-quantity="1" data-image="images/of12.png">Add
												to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m ">
									<a href="#" data-toggle="modal" data-target="#myModal14" class="offer-img">
										<img src="images/of13.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Chocos</a>(250 g)</h6>
										</div>
										<div class="mid-2">
											<p><label>$5.00</label><em class="item_price">$4.50</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="14" data-name="Chocos"
												data-summary="summary 14" data-price="4.50" data-quantity="1" data-image="images/of13.png">Add
												to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m ">
									<a href="#" data-toggle="modal" data-target="#myModal15" class="offer-img">
										<img src="images/of14.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Oats</a>(1 kg)</h6>
										</div>
										<div class="mid-2">
											<p><label>$4.00</label><em class="item_price">$3.50</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="15" data-name="Oats"
												data-summary="summary 15" data-price="3.50" data-quantity="1" data-image="images/of14.png">Add
												to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal16" class="offer-img">
										<img src="images/of15.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Bread</a>(500 g)</h6>
										</div>
										<div class="mid-2">
											<p><label>$1.00</label><em class="item_price">$0.80</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="16" data-name="Bread"
												data-summary="summary 16" data-price="0.80" data-quantity="1" data-image="images/of15.png">Add
												to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	</div>
	<div class="separator" style="margin-top: 50px;" />
	<!-- Carousel
    ================================================== -->
	<div id="myCarousel" class="carousel-slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<a href="kitchen.html"> <img class="first-slide" src="http://myphamthainguyen.vn/media/icycle/g/t/gtr.jpg"
						alt="First slide"></a>

			</div>
			<div class="item">
				<a href="care.html"> <img class="second-slide " src="http://myphamthainguyen.vn/media/icycle/n/o/noel.png"
						alt="Second slide"></a>

			</div>
			<div class="item">
				<a href="hold.html"><img class="third-slide " src="http://myphamthainguyen.vn/media/icycle/g/_/g.jpg"
						alt="Third slide"></a>
			</div>
		</div>

	</div><!-- /.carousel -->

	<!--content-->
	<div class="product">
		<div class="container">
			<div class="spec ">
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
			<div class=" con-w3l">
				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal17" class="offer-img">
							<img src="images/of16.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6><a href="single.html">Moisturiser</a>(500 g)</h6>
							</div>
							<div class="mid-2">
								<p><label>$7.00</label><em class="item_price">$6.00</em></p>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="add add-2">
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1"
									data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/of16.png">Thêm vào giỏ
									hàng</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal18" class="offer-img">
							<img src="images/of17.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6><a href="single.html"> Lady Finger</a>(250 g)</h6>
							</div>
							<div class="mid-2">
								<p><label>$5.00</label><em class="item_price">$4.50</em></p>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="add">
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1"
									data-summary="summary 1" data-price="4.50" data-quantity="1" data-image="images/of17.png">Thêm vào giỏ
									hàng</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal19" class="offer-img">
							<img src="images/of18.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6><a href="single.html"> Ribbon</a>(1 pc)</h6>
							</div>
							<div class="mid-2">
								<p><label>$4.00</label><em class="item_price">$3.50</em></p>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="add">
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1"
									data-summary="summary 1" data-price="3.50" data-quantity="1" data-image="images/of18.png">Thêm vào giỏ
									hàng</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal20" class="offer-img">
							<img src="images/of19.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6><a href="single.html">Grapes</a>(500 g)</h6>
							</div>
							<div class="mid-2">
								<p><label>$1.00</label><em class="item_price">$0.80</em></p>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="add">
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1"
									data-summary="summary 1" data-price="0.80" data-quantity="1" data-image="images/of19.png">Thêm vào giỏ
									hàng</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal21" class="offer-img">
							<img src="images/of20.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6><a href="single.html">Clips</a>(1 pack)</h6>
							</div>
							<div class="mid-2">
								<p><label>$7.00</label><em class="item_price">$6.00</em></p>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="add">
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1"
									data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/of20.png">Thêm vào giỏ
									hàng</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal22" class="offer-img">
							<img src="images/of21.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6><a href="single.html">Conditioner</a>(250 g)</h6>
							</div>
							<div class="mid-2">
								<p><label>$5.00</label><em class="item_price">$4.50</em></p>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="add">
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1"
									data-summary="summary 1" data-price="4.50" data-quantity="1" data-image="images/of21.png">Thêm vào giỏ
									hàng</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal23" class="offer-img">
							<img src="images/of22.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6><a href="single.html">Cleaner</a>(250 kg)</h6>
							</div>
							<div class="mid-2">
								<p><label>$4.00</label><em class="item_price">$3.50</em></p>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="add">
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1"
									data-summary="summary 1" data-price="3.50" data-quantity="1" data-image="images/of22.png">Thêm vào giỏ
									hàng</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal24" class="offer-img">
							<img src="images/of23.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6><a href="single.html">Gel</a>(150 g)</h6>
							</div>
							<div class="mid-2">
								<p><label>$1.00</label><em class="item_price">$0.80</em></p>
								<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="add">
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1"
									data-summary="summary 1" data-price="0.80" data-quantity="1" data-image="images/of23.png">Thêm vào giỏ
									hàng</button>
							</div>
						</div>
					</div>
				</div>
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
	<script src="web/js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<script type='text/javascript' src="web/js/jquery.mycart.js"></script>
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
					console.log('{checkMe} TCL --> targe:', $addTocart);
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

	<!-- product -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of.png" class="img-responsive" alt="">
						</div>
					</div>
					<!-- TODO: Add description for item -->
					<div class="col-md-7 span-1 ">
						<h3>Moong(1 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$2.00</del>$1.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<!-- TODO: fix data when add to cart -->
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="e2" data-name="Moong"
								data-summary="San pham" data-price="10000" data-quantity="1" data-image="images/of.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of1.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Sunflower Oil(5 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$10.00</del>$9.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="2" data-name="Sunflower Oil"
								data-summary="summary 2" data-price="9.00" data-quantity="1" data-image="images/of1.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of2.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Kabuli Chana(1 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$3.00</del>$2.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="3" data-name="Kabuli Chana"
								data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of3.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Soya Chunks(1 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$4.00</del>$3.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="4" data-name="Soya Chunks"
								data-summary="summary 4" data-price="3.50" data-quantity="1" data-image="images/of3.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of4.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Lays(100 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.70</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="5" data-name="Lays"
								data-summary="summary 5" data-price="0.70" data-quantity="1" data-image="images/of4.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of5.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Kurkure(100 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.70</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="6" data-name="Kurkure"
								data-summary="summary 6" data-price="0.70" data-quantity="1" data-image="images/of5.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of6.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Popcorn(250 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$2.00</del>$1.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="7" data-name="Popcorn"
								data-summary="summary 7" data-price="1.00" data-quantity="1" data-image="images/of6.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of7.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Nuts(250 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$4.00</del>$3.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="8" data-name="Nuts"
								data-summary="summary 8" data-price="3.50" data-quantity="1" data-image="images/of7.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of8.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Banana(6 pcs)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$2.00</del>$1.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="9" data-name="Banana"
								data-summary="summary 9" data-price="1.50" data-quantity="1" data-image="images/of8.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of9.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Onion(1 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.70</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="10" data-name="Onion"
								data-summary="summary 10" data-price="0.70" data-quantity="1" data-image="images/of9.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of10.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Bitter Gourd(1 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$2.00</del>$1.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="11" data-name="Bitter Gourd"
								data-summary="summary 11" data-price="1.00" data-quantity="1" data-image="images/of10.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of11.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Apples(1 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$4.00</del>$3.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="12" data-name="Apples"
								data-summary="summary 12" data-price="3.50" data-quantity="1" data-image="images/of11.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of12.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Honey(500 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$7.00</del>$6.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="13" data-name="Honey"
								data-summary="summary 13" data-price="6.00" data-quantity="1" data-image="images/of12.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of13.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Chocos(250 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$5.00</del>$4.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="14" data-name="Chocos"
								data-summary="summary 14" data-price="4.50" data-quantity="1" data-image="images/of13.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of14.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Oats(1 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$4.00</del>$3.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="15" data-name="Oats"
								data-summary="summary 15" data-price="3.50" data-quantity="1" data-image="images/of14.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of15.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Bread(500 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="16" data-name="Bread"
								data-summary="summary 16" data-price="0.80" data-quantity="1" data-image="images/of15.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of16.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Moisturiser(500 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="17" data-name="Moisturiser"
								data-summary="summary 17" data-price="0.80" data-quantity="1" data-image="images/of16.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of17.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Lady Finger(250 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="18" data-name="Lady Finger"
								data-summary="summary 18" data-price="0.80" data-quantity="1" data-image="images/of17.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal19" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of18.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Satin Ribbon Red(1 pc)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="19" data-name="Satin Ribbon Red"
								data-summary="summary 19" data-price="0.80" data-quantity="1" data-image="images/of18.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal20" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of19.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Grapes(500 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="20" data-name="Grapes"
								data-summary="summary 20" data-price="0.80" data-quantity="1" data-image="images/of19.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal21" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of20.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Clips(1 pack)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="21" data-name="Clips"
								data-summary="summary 21" data-price="0.80" data-quantity="1" data-image="images/of20.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal22" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of21.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Conditioner</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="22" data-name="Conditioner"
								data-summary="summary 22" data-price="0.80" data-quantity="1" data-image="images/of21.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal23" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of22.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Cleaner(250 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="23" data-name="Cleaner"
								data-summary="summary 23" data-price="0.80" data-quantity="1" data-image="images/of22.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal24" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of23.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Gel(150 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Mô tả:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
							quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="24" data-name="Gel"
								data-summary="summary 24" data-price="0.80" data-quantity="1" data-image="images/of23.png">Thêm vào giỏ
								hàng</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>