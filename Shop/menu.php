<div id="header">
	<h1><a href="index.php" style="text-decoration: none; font-size: 20px; color: blue;">TRANG CHỦ</a></h1>
	<?php if(empty($_SESSION['id'])){ ?>
		<a href="signin.php" style="text-decoration: none; font-size: 20px; color: blue;">Đăng nhập</a>
		<br><br>
		<a href="signup.php" style="text-decoration: none; font-size: 20px; color: blue;">Đăng kí</a>
	<?php } else { ?>
		Chào <?php echo $_SESSION['name'] . ','; ?>
		<a href="signout.php" style="text-decoration: none; font-size: 20px; color: blue;">Đăng xuất</a>
		<br>
		<a href="view_cart.php" style="text-decoration: none; font-size: 20px; color: blue;">Xem giỏ hàng</a>
	<?php } ?>
</div>