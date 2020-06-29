<?php 
if(!isset($name)){$name='';}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="template/css/style.css">
	<title>Thêm thông tin</title>
	<?php  var_dump($results); var_dump($address)?>
</head>
<body>
	<main>
		<h1> SỬA DỮ LIỆU</h1>
		<?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
	    <?php } ?>  
		<form action="index.php?task=edit_submit&id=<?php echo $results[0]['id_nhanvien'] ?> " method="Post" enctype="multipart/form-data">
			<div id="data">
				<label>Tên nhân viên: </label>
				<input type="text" name="name" value="<?php echo $results[0]['tennhanvien'] ?>"><br>
				<label>Địa chỉ: </label>
				<select name="address" >
					<?php foreach ($address as $value) {?>
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