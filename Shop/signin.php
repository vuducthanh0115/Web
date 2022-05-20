<?php
session_start();

if(isset($_COOKIE['remember'])){
	$token = $_COOKIE['remember'];
	require 'admin/connect.php';
	$sql = "select * from customers
	where token = '$token'
	limit 1";
	$result = mysqli_query($connect,$sql);
	$number_rows = mysqli_num_rows($result);
	if($number_rows == 1){
		$each = mysqli_fetch_array($result);
		$_SESSION['id'] = $each['id'];
		$_SESSION['name'] = $each['name'];
	}
}

if(isset($_SESSION['id'])){
	header('location:user.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập</title>
</head>
<body>
	<span style="color: red;">
		<?php
		if(isset($_GET['error'])) {
			echo $_GET['error'] ;
		}
		?>
	</span>
	<h1>
		Đăng nhập
	</h1>
	<form action="process_signin.php" method="post" >
		Tài khoản
		<input type="email" name="email">
		<br>
		Mật khẩu
		<input type="password" name="psw">
		<br>
		Ghi nhớ đăng nhập
		<input type="checkbox" name="remember">
		<br>
		<button>
			Đăng nhập
		</button>
	</form>
</body>
</html>