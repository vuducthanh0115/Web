<div id="middle">
	<?php
	$id = $_GET['id'];
	require './admin/connect.php';
	$sql = "select * from products
	where id = '$id'";
	$rs = mysqli_query($connect,$sql);
	$result = mysqli_fetch_array($rs);
	?>
	<h1 style="color:white;">
				<?php echo $result['name_product']; ?>
			</h1>
			<img src="./admin/products/image/<?php echo $result['image']; ?>" height="100px" alt="">
			<p style="color:white;">Giá : <?php echo $result['price']; ?></p>
			<p style="color:white;"><?php echo $result['description']; ?></p>
</div>