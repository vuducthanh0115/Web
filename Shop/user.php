<?php
session_start();
if(empty($_SESSION['id'])){
	header('location:signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang người dùng</title>
</head>
<body>
	Xin chào bạn 
	<?php
	echo $_SESSION['name'];
	?>
	<a href="signout.php">Đăng xuất</a>
</body>
</html>