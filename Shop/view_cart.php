<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Giỏ hàng</title>
</head>

<body>
	<?php
	session_start();
	if (isset($_SESSION['cart'])) {
		$cart = $_SESSION['cart'];
	}
	$sum = 0;
	?>
	<table border="1" ; width="100%">
		<tr>
			<th>Ảnh</th>
			<th>Tên sản phẩm</th>
			<th>Giá</th>
			<th>Số lượng</th>
			<th>Tổng tiền</th>
			<th>Xoá</th>
		</tr>
		<?php if (isset($_SESSION['cart'])) { ?>
			<?php foreach ($cart as $id => $each) : ?>
				<tr>
					<td style="text-align: center;"><img src="./admin/products/image/<?php echo $each['image']; ?>" height="100px" alt=""></td>
					<td style="text-align: center;"><?php echo $each['name']; ?></td>
					<td style="text-align: center;"><?php echo $each['price']; ?></td>
					<td style="text-align: center;"><a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=decre" style="text-decoration: none; color: black; font-size: 30px; ">-</a><span style=" color: black; font-size: 20px; ">&emsp;<?php echo $each['quantity']; ?>&emsp;</span><a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=incre" style="text-decoration: none; color: black; font-size: 20px; font-weight: bold;">+</a></td>
					<td style="text-align: center;"><?php echo $each['price'] * $each['quantity']; ?></td>
					<td style="text-align: center;">
						<a href="delete_product_in_cart.php?id=<?php echo $id ?>" style="text-decoration: none; color: blue;">
							Xoá
						</a>
					</td>
				</tr>
				<?php
				$sum += $each['price'] * $each['quantity'];
				?>
			<?php endforeach ?>
		<?php } ?>
	</table>
	<h1>Tổng tiền hoá đơn : <?php echo '$' . $sum; ?></h1>
	<?php
	$id = $_SESSION['id'];
	require './admin/connect.php';
	$sql = "select * from customers
		where id = '$id'";
	$result = mysqli_query($connect, $sql);
	$each = mysqli_fetch_array($result);
	?>
	<form action="process_orders.php" method="post">
		Tên người nhận
		<input type="text" name="name_receiver" value="<?php echo $each['name']; ?>">
		<br>
		Số điện thoại người nhận
		<input type="text" name="phone_receiver" value="<?php echo $each['phone_number']; ?>">
		<br>
		Địa chỉ nhận hàng
		<input type="text" name="address_receiver" value="<?php echo $each['address']; ?>">
		<br>
		<button>Đặt hàng</button>
		<!-- Trạng thái 
		<input type="text" name="status">
		<br>
		Thời gian 
		<input type="text" name="time">
		<br> -->
	</form>
</body>

</html>