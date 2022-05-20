<?php
require '../check_login_admin.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quản lí sản phẩm</title>
</head>

<body>
	<?php
	require '../menu.php';
	require '../connect.php';
	$sql = "select products.*, manufacturers.name as manufacturer_name from products
	join manufacturers on products.manufacturer_id = manufacturers.id";
	$rs = mysqli_query($connect, $sql);
	?>
	<h1>
		Quản lí sản phẩm
	</h1>
	<a href="form_insert.php" style="text-decoration: none;">Thêm</a>
	<br>
	<br>
	<table border="1" width="100%">
		<tr>
			<th>Mã</th>
			<th>Tên sản phẩm</th>
			<th>Ảnh</th>
			<th>Giá</th>
			<th>Tên nhà sản xuất</th>
			<th>Mô tả</th>
			<th>Sửa</th>
			<th>Xoá</th>
		</tr>

		<?php foreach ($rs as $result) : ?>
			<tr>
				<td><?php echo $result['manufacturer_id'] ?></td>
				<td><?php echo $result['name_product'] ?></td>
				<td><img src="image/<?php echo $result['image'] ?>" alt="" height="150"></td>
				<td><?php echo $result['price'] ?></td>
				<td><?php echo $result['manufacturer_name'] ?></td>
				<td><?php echo $result['description'] ?></td>
				<td>
					<a href="form_update.php?id=<?php echo $result['id']; ?>" style="text-decoration: none;">Sửa</a>
				</td>
				<td>
					<a href="process_delete.php?id=<?php echo $result['id']; ?>" style="text-decoration: none;">Xoá</a>
				</td>
			</tr>
		<?php endforeach ?>

	</table>
</body>

</html>