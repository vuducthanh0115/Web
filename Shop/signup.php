<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng kí</title>
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
		Form đăng kí tài khoản
	</h1>
	<form action="process_signup.php" method="post">
		Họ và tên
		<input type="text" name="name">
		<br>
		Email
		<input type="email" name="email">
		<br>
		Mật khẩu
		<input type="password" name="psw">
		<br>
		Số điện thoại
		<input type="text" name="phone_number">
		<br>
		Địa chỉ 
		<input type="text" name="address">
		<br>
		<button>Đăng kí</button>
	</form>
</body>
</html>