<ul>
	<li>
		<a href="../manufacturers" style="text-decoration: none;">
			Quản lý nhà sản xuất
		</a>
	</li>
</ul>
<ul>
	<li>
		<a href="../products" style="text-decoration: none;">
			Quản lý sản phẩm
		</a>
	</li>
	<li>
		<a href="../orders/index.php" style="text-decoration: none;">
			Quản lý đơn hàng
		</a>
	</li>
</ul>
<?php if (isset($_GET['success'])) { ?>
	<span style='color: green'>
		<?php echo $_GET['success']; ?>
	</span>
<?php } ?>
<?php if (isset($_GET['error'])) { ?>
	<span style='color: red'>
		<?php echo $_GET['error']; ?>
	</span>
<?php } ?>