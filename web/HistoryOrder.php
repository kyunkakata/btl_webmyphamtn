<!DOCTYPE html>
<html>
   <head>
      <title>Mỹ Phẩm Thái Nguyên| Home </title>
      <style>
         /* for PHP work */
         <?php include_once "css/bootstrap.css"?><?php include_once "css/jstarbox.css"?><?php include_once "css/style.css"?><?php include_once "css/font-awesome.css"?>
      </style>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- for-mobile-apps -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta property="og:title" content="Vide" />
      <meta name="keywords" content="Cửa hàng Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script type="application/x-javascript">
         addEventListener("load", function() {
             setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
             window.scrollTo(0, 1);
         }
      </script>
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
         jQuery(document).ready(function($) {
             $(".scroll").click(function(event) {
                 event.preventDefault();
                 $('html,body').animate({
                     scrollTop: $(this.hash).offset().top
                 }, 1000);
             });
         });
      </script>
      <script>
         function addParam(v) {
             window.location.search += '&' + v;
         }
      </script>
      <!-- start-smoth-scrolling -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
      <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
      <!--- start-rate---->
      <script src="web/js/jstarbox.js"></script>
      <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
      <script type="text/javascript">
         jQuery(function() {
             jQuery('.starbox').each(function() {
                 var starbox = jQuery(this);
                 starbox.starbox({
                     average: starbox.attr('data-start-value'),
                     changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass(
                         'clickonce') ? 'once' : true,
                     ghosting: starbox.hasClass('ghosting'),
                     autoUpdateAverage: starbox.hasClass('autoupdate'),
                     buttons: starbox.hasClass('smooth') ? false : starbox.attr(
                         'data-button-count') || 5,
                     stars: starbox.attr('data-star-count') || 5
                 }).bind('starbox-value-changed', function(event, value) {
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
               <h1>
                  <a href="index.php">
                     <img src="http://myphamthainguyen.vn/media/custom/default/fwxae.png" width="100px"
                        height="100px" style="margin-right: 20px;">Cửa
                     hàng Mỹ Phẩm Thái Nguyên
                     <span>
                  </a>
               </h1>
            </div>
            <div class="head-t">
            <ul class="card">
            <?php 
               if(isset($_COOKIE['user_id'])){
               	?>
            <li><a href="#"><i class="fa fa-user"
               aria-hidden="true"></i>Chào bạn, <?php echo $_COOKIE['user_name'] ?></a></li>
            <li><a href="../btl_webmyphamtn/index.php?task=history_order"><i class="fa fa-file-text-o"
               aria-hidden="true"></i>Lịch sử đơn hàng</a></li>
            <li><a href="../btl_webmyphamtn/index.php?task=action_logout"><i class="fa fa-sign-out"
               aria-hidden="true"></i>Đăng xuất</a></li>
            <?php
               } else {
               	?>
            <li><a href="../btl_webmyphamtn/index.php?task=login"><i class="fa fa-user"
               aria-hidden="true"></i>Đăng nhập</a></li>
            <li><a href="../btl_webmyphamtn/index.php?task=register"><i class="fa fa-arrow-right"
               aria-hidden="true"></i>Đăng kí</a></li>
            <?php
               }
               ?>
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
            <span class="fa fa-shopping-cart my-cart-icon"><span
               class="badge badge-notify my-cart-badge"></span></span>
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
      <!-- <div class="search-form">
      <form action="" method="post">
      <input type="text" placeholder="Tìm kiếm sản phẩm theo tên, thương hiệu..." name="search">
      <input type="submit" value=" ">
      </form>
      </div> -->
      <script>
         window.jQuery || document.write('<script src="web/js/vendor/jquery-1.11.1.min.js"><\/script>')
      </script>
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
      
      <!-- TODO: fix data here -->
      <div class=" tab-content tab-content-t ">
      <div class="tab-pane active text-style" id="tab1">
      <div class=" con-w3l">
      <?php 
         if(count($result) == 0){
         	?>
      <p style="color:white">Không có sản phẩm nào phù hợp</p>
      <?php
         }
         ?>
      <?php 
             ?>
            <table style="padding:5px;border: 1px solid white;color: white; width: 100%">
			<tr  style="padding:5px;border: 1px solid white;color: white; height: 50px;text-align: center;">
				<th style="padding:5px;border: 1px solid white;color: white;text-align: center">Id</th>
				<th  style="padding:5px;border: 1px solid white;color: white;text-align: center">Các sản phẩm đã đặt</th>
                <th style="padding:5px;border: 1px solid white;color: white;text-align: center">Đặt lúc</th>
                <th style="padding:5px;border: 1px solid white;color: white;text-align: center">Tổng giá tiền</th>
				<th style="padding:5px;border: 1px solid white;color: white;text-align: center">Tên người nhận</th>
                <th style="padding:5px;border: 1px solid white;color: white;text-align: center">Địa chỉ người nhận</th>
                <th style="padding:5px;border: 1px solid white;color: white;text-align: center">Trạng thái</th>
			</tr>
				<?php 
                    $no = 0;
                foreach ($result as $value) {
                    $no++;
                    ?>
				<tr>
					<td  style="border: 1px solid white;color: white;text-align: center"><?php echo $no  ?></td>
                    <td  style="border: 1px solid white;color: white;text-align: center">
                    <ul class="card">
                    
                    <?php 
                        $list_product = "";
                        $data =json_decode($value['list_data'], true);
                        for($i = 0; $i < count($data); $i++){
                            $amount = $data[$i]['quantity'];
                            $name = $data[$i]['name'];
                            $list_product = "Tên: $name ; Số Lượng: $amount";
                            echo "<li style=\"color:white; margin-top:10px\">$list_product</li>";
                        }
                    ?>
                    </ul>

                </td>
                    <td  style="border: 1px solid white;color: white;text-align: center"><?php echo $value['created_at'] ?></td>
                    <td  style="border: 1px solid white;color: white;text-align: center"><?php echo $value['total_price'] ?> đồng</td>
                    <td  style="border: 1px solid white;color: white;text-align: center"><?php echo $value['real_name'] ?></td>
                    <td  style="border: 1px solid white;color: white;text-align: center"><?php echo $value['address'] ?></td>
                    <td  style="border: 1px solid white;color: white;text-align: center"><?php echo $value['status'] ?></td>
				</tr>
                <?php 
                }

				 ?>
        </table>
        <?php
         ?>
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
      <div class="clearfix"></div>
      </div>
      </div>
      </div>
      <!--footer-->
      <div class="footer">
      <div class="container">
      <div class="clearfix"></div>
      <div class="footer-bottom">
      <h2><a href="index.php"><img src="http://myphamthainguyen.vn/media/custom/default/fwxae.png"
         width="100px" height="100px" style="margin-right: 20px;">Mỹ Phẩm Thái Nguyên</span></a></h2>
      <p class="fo-para">Trang bán mỹ phẩm chính hãng hàng đầu Thái Nguyên</p>
      <div class=" address">
      <div class="col-md-4 fo-grid1">
      <p><i class="fa fa-home" aria-hidden="true"></i> Cs1: Số 14, Ngõ 499, Lương Ngọc Quyến, Tp Thái
      Nguyên
      0965.666.968</p>
      <p><i class="fa fa-home" aria-hidden="true"></i>Cs2: Số 140, Đ.Z115, Tp Thái Nguyên 0946.366.968
      </p>
      <p><i class="fa fa-home" aria-hidden="true"></i>Cs3: Số 83, Lương Ngọc Quyến, Tp Thái Nguyên
      0945.444.968
      </p>
      <p><i class="fa fa-home" aria-hidden="true"></i>Cs4: Đối diện cổng KTX 1 Samsung, Phổ Yên, Thái
      Nguyên
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
         $(document).ready(function() {
             /*
             	var defaults = {
             	containerID: 'toTop', // fading element id
             	containerHoverID: 'toTopHover', // fading element hover id
             	scrollSpeed: 1200,
             	easingType: 'linear' 
             	};
             */
             $().UItoTop({
                 easingType: 'easeOutQuart'
             });
         });
      </script>
      <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
      <!-- //smooth scrolling -->
      <!-- for bootstrap working -->
      <script src="web/js/bootstrap.js"></script>
      <!-- //for bootstrap working -->
      <script type='text/javascript' src="web/js/jquery.mycart.js"></script>
      <script type="text/javascript">
         $(function() {
         
             var goToCartIcon = function($addTocartBtn) {
                 var $cartIcon = $(".my-cart-icon");
                 var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>')
                     .css({
                         "position": "fixed",
                         "z-index": "999"
                     });
                 $addTocartBtn.prepend($image);
                 var position = $cartIcon.position();
                 $image.animate({
                     top: position.top,
                     left: position.left
                 }, 500, "linear", function() {
                     $image.remove();
                 });
             }
         
             $('.my-cart-btn').myCart({
                 classCartIcon: 'my-cart-icon',
                 classCartBadge: 'my-cart-badge',
                 affixCartIcon: true,
                 checkoutCart: function(products) {
                     $.each(products, function() {
                         console.log(this);
                     });
                 },
                 clickOnAddToCart: function($addTocart) {
                     console.log('{checkMe} TCL --> targe:', $addTocart);
                     goToCartIcon($addTocart);
                 },
                 getDiscountPrice: function(products) {
                     var total = 0;
                     $.each(products, function() {
                         total += this.quantity * this.price;
                     });
                     return total * 1;
                 }
             });
         
         });
      </script>
      <!-- product -->
      <?php 
         for ($i=0; $i < count($result); $i++) {
         	?>
      <div class="modal fade" id="myModal<?php echo $result[$i]['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                     aria-hidden="true">&times;</span></button>
               </div>
               <div class="modal-body modal-spa">
                  <div class="col-md-5 span-2">
                     <div class="item">
                        <img src="<?php echo $result[$i]['image'] ?>" class="img-responsive" alt="">
                     </div>
                  </div>
                  <!-- TODO: Add description for item -->
                  <div class="col-md-7 span-1 ">
                     <h3><?php echo $result[$i]['name'] ?></h3>
                     <p class="in-para"></p>
                     <div class="price_single">
                        <span class="reducedfrom "><?php echo $result[$i]['price'] ?> đồng</span>
                        <div class="clearfix"></div>
                     </div>
                     <h4 class="quick">Mô tả:</h4>
                     <p class="quick_desc"><?php echo $result[$i]['description'] ?></p>
                     <div class="add-to">
                        <!-- TODO: fix data when add to cart -->
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="<?php echo $result[$i]['id']?>" data-name="<?php echo $result[$i]['name'] ?>"
                           data-summary="summary <?php echo $result[$i]['id'] ?>" data-price="<?php echo $result[$i]['price'] ?>" data-quantity="1"
                           data-image="<?php echo $result[$i]['image']?>">Thêm vào giỏ
                        hàng</button>
                     </div>
                  </div>
                  <div class="clearfix"> </div>
               </div>
            </div>
         </div>
      </div>
      <?php
         }
         ?>
   </body>
</html>