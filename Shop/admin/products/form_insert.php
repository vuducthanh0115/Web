<?php
require '../check_login_admin.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm sản phẩm</title>
</head>

<body>
	<?php
	require '../menu.php';
	require '../connect.php';
	$sql = "select * from manufacturers";
	$rs = mysqli_query($connect, $sql);
	?>
	<form action="process_insert.php" method="post" enctype="multipart/form-data">
		Tên sản phẩm
		<input type="text" name="name">
		<br>
		Ảnh
		<input type="file" name="image">
		<br>
		Giá
		<input type="number" name="price">
		<br>
		Mô tả
		<textarea name="description"></textarea>
		<br>
		Nhà sản xuất
		<select name="manufacturer_id">
			<?php foreach ($rs as $result) : ?>
				<option value="<?php echo $result['id']; ?>">
					<?php echo $result['name']; ?>
				</option>
			<?php endforeach ?>
		</select>
		<br>
		<button>Thêm</button>
	</form>
</body>

</html>