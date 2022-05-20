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
	<?php if (isset($_GET['error'])) { ?>
		<span style='color: red'>
			<?php echo $_GET['error']; ?>
		</span>
	<?php } ?>
	<form action="process_insert.php" method="post">
		Name
		<input type="text" name="name">
		<br>
		Address
		<textarea name="address"></textarea>
		<br>
		Phone
		<input type="text" name="phone">
		<br>
		Image
		<input type="text" name="image">
		<br>
		<button>Add</button>
	</form>
</body>

</html>