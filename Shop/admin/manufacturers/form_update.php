<?php
require '../check_login_superadmin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert</title>
</head>

<body>
	<?php
	$id = $_GET['id'];
	require '../connect.php';
	$sql = "select * from manufacturers
	where id = '$id'";
	$rs = mysqli_query($connect, $sql);
	$result = mysqli_fetch_array($rs);
	?>
	<?php if (isset($_GET['error'])) { ?>
		<span style='color: red'>
			<?php echo $_GET['error']; ?>
		</span>
	<?php } ?>
	<form action="process_update.php?id=<?php echo $result['id'] ?>" method="post">
		<input type="hidden" name="id" value="<?php echo $result['id'] ?>">
		Name
		<input type="text" name="name" value="<?php echo $result['name'] ?>">
		<br>
		Address
		<textarea name="address"><?php echo $result['address'] ?></textarea>
		<br>
		Phone
		<input type="text" name="phone" value="<?php echo $result['phone'] ?>">
		<br>
		Image
		<input type="text" name="image" value="<?php echo $result['photo'] ?>">
		<br>
		<button>Update</button>
	</form>
</body>

</html>