<style type="text/css">
	.each-product{
		width: 33%;
		border: 1px solid black;
		height : 200px;
		float: left;
	}
</style>
<div id="middle">
	<?php
	require './admin/connect.php';
	$sql = "select * from products";
	$result = mysqli_query($connect,$sql);
	?>
	
	<?php foreach ($result as $each): ?>
		<div class="each-product">
			<h1 style="color:white;">
				<?php echo $each['name_product']; ?>
			</h1>
			<img src="./admin/products/image/<?php echo $each['image']; ?>" height="100px" alt="">
			<p style="color:white;">Giá : <?php echo $each['price']; ?></p>
			<a href="view_details.php?id=<?php echo $each['id']; ?>" style="color:white; text-decoration:none;">Xem chi tiết >></a><br>
			<?php if (!empty($_SESSION['id'])) { ?>
				<a href="add_to_cart.php?id=<?php echo $each['id']; ?>" style="color:white; text-decoration:none;">Thêm vào giỏ hàng</a>
			<?php } ?>
		</div>
	<?php endforeach ?>
	
</div>