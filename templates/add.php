<?php 
//set default value
if(!isset($name)){$name='';}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="templates/css/styles.css">
	<title>Thêm thông tin</title>
</head>
<body>
	<main>
		<h1>THÔNG TIN ĐĂNG KÝ</h1>
		<?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
		<form action="index.php?task=add_submit" method="Post" enctype="multipart/form-data">
			<div id="data">
				<label>Tên nhân viên: </label>
				<input type="text" name="name" value="<?php echo htmlspecialchars($name) ?>"><br>
				<label>Địa chỉ: </label>
				<select name="address">
					<?php foreach ($results as $value) {?>
						<option value="<?php echo $value['id_diachi'] ?>"><?php echo $value['tentp'] ?></option>
					<?php } ?>
				
			</div>
			<div id="buttons">
				<input type="submit" value="Gửi">
				<input type="reset" value="Hủy">
			</div>
		</form>
	</main>
</body>
</html>