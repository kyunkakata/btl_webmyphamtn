<?php 
//set default value
if(!isset($name)){$name='';}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>s</title>
<script src="js/jquery.min.js"></script>
<link href="http://localhost/btl_webmyphamtn/templates/Login/css/style.css" rel="stylesheet" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head>
<body>
<div class="header">
		<div class="header-main">
			   <p>Website Mỹ phẩm Thái Nguyên</p>
			   <h1>Đăng nhập</h1>
			<div class="header-bottom">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
						
					 <form action="#" method="post">
						<input type="text"  value="User name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}"/>
					<input type="password"  value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
						<div class="remember">
			             <span class="checkbox1">
							   <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember me</label>
						 </span>
						 <div class="forgot">
						 	<h6><a href="#">Forgot Password?</a></h6>
						 </div>
						<div class="clear"> </div>
					  </div>
					   
						<input type="submit" value="Login">
					</form>	
					
				</div>
				</div>
			  
			</div>
		</div>
</div>
</body>