<?php
require '../check_login_superadmin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>

<body>
	This is area managerment
	<br>
	<a href="form_insert.php">
		Add
	</a>
	<?php
	include '../menu.php';
	?>
	<?php
	require '../connect.php';
	$sql = "select * from manufacturers";
	$result = mysqli_query($connect, $sql);
	?>
	<table border="1" width="100%">
		<tr>
			<th>Ma</th>
			<th>Ten</th>
			<th>Dia chi</th>
			<th>So dien thoai</th>
			<th>Anh</th>
			<th>Sua</th>
			<th>Xoa</th>
		</tr>
		<?php foreach ($result as $rs) : ?>
			<tr>
				<td><?php echo $rs['id'] ?></td>
				<td><?php echo $rs['name'] ?></td>
				<td><?php echo $rs['address'] ?></td>
				<td><?php echo $rs['phone'] ?></td>
				<td><img src="<?php echo $rs['photo'] ?>" alt="" width="30%"></td>
				<td><a href="form_update.php?id=<?php echo $rs['id'] ?>">Sua</a></td>
				<td><a href="process_delete.php?id=<?php echo $rs['id'] ?>">Xoa</a></td>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</body>

</html>