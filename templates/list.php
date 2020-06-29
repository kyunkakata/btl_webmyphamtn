<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hiển thị thông tin</title>
	<link rel="stylesheet" href="templates/css/styles.css">
</head>
<body>
	<main>
		<h1>Danh sách nhân viên</h1>
		<?php
		$key = array_search(2, array_column($address, 'id_diachi'));
		var_dump($key);
		var_dump($address[$key]['tentp']);
		?>
		<a href="index.php?task=add">Thêm</a>
		<table border="1">
			<tr>
				<th>STT</th>
				<th>Tên nhân viên</th>
				<th>Địa chỉ</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
				<?php 
				$no=0;
				foreach ($results as $value) {?>
				<tr>
					<td><?= ++$no;  ?></td>
					<td><?php echo $value['tennhanvien']; ?></td>
					<td><?php
					$key = array_search($value['id_diachi'], array_column($address, 'id_diachi'));
					echo ($address[$key]['tentp']);
					?></td>
					<th><a href="index.php?task=edit&id=<?php echo $value['id_nhanvien'] ?> ">Sửa</a></th>
					<th><a href="index.php?task=delete&id=<?php echo $value['id_nhanvien'] ?> ">Xóa</a></th>
				</tr>
				<?php }

				 ?>
		</table>	

	</main>
</body>
</html>