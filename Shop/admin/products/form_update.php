<?php
require '../check_login_admin.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sửa sản phẩm</title>
</head>

<body>
	<?php
	$id = $_GET['id'];
	require '../menu.php';
	require '../connect.php';
	$sql = "select * from products
	where id ='$id'";
	$rs = mysqli_query($connect, $sql);
	$results = mysqli_fetch_array($rs);
	$sql_manufacturer = "select * from manufacturers";
	$rs_manufacturer = mysqli_query($connect, $sql_manufacturer);
	?>
	<form action="process_update.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $results['id']; ?>">
		Tên sản phẩm
		<input type="text" name="name" value="<?php echo $results['name_product']; ?>">
		<br>
		Ảnh mới
		<input type="file" name="image">
		<br>
		Hoặc giữ ảnh cũ
		<img src="image/<?php echo $results['image']; ?>" alt="" height="150">
		<input type="hidden" name="old_image" value="<?php echo $results['image'] ?>">
		<br>
		Giá
		<input type="number" name="price" value="<?php echo $results['price']; ?>">
		<br>
		Mô tả
		<textarea name="description"><?php echo $results['description']; ?></textarea>
		<br>
		Nhà sản xuất
		<select name="manufacturer_id">
			<?php foreach ($rs_manufacturer as $result) : ?>
				<option value="<?php echo $result['id']; ?>" <?php if ($results['manufacturer_id'] == $result['id']) { ?> selected; <?php } ?>>
					<?php echo $result['name']; ?>
				</option>
			<?php endforeach ?>
		</select>
		<br>
		<button>Sửa</button>
	</form>
</body>

</html>