<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang chủ</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		#container{
			width: 100%;
			height: 700px;
			background: gray;
		}
		#header{
			width: 100%;
			height: 20%;
			background: green;
		}
		#middle{
			width: 100%;
			height: 60%;
			background: blue;
		}
		#footer{
			width: 100%;
			height: 20%;
			background: orange;
		}
	</style>
</head>
<body>
	
	<div id="container">
		<?php 
			require 'menu.php';
			require 'product_view_detail.php';
			require 'footer.php';
		?>
		
		
	</div>
</body>
</html>