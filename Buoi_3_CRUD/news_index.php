<!DOCTYPE html>
<html>
<head>
	<title>Tin tức mới nhất</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./CSS/news_form.css">
</head>
<body class="light-grey">
	<?php 
	$connect_server = mysqli_connect('localhost', 'root', '', 'news');
	mysqli_set_charset($connect_server, 'utf8');
	$sql = "select * from news";

	$result = mysqli_query( $connect_server, $sql );
	?>
	<header class="container center padding-32"> 
		<h1><b>TIN TỨC 24H</b></h1>
		<p>Chào mừng bạn đến với trang tin tức 24h luôn cập nhật những tin mới nhất</p>
	</header>
	
		<div class="content" style="max-width:1020px">
			<?php foreach ($result as $news) { ?>
			<div class="row">
				<div class="col l8 s12">
					<div class="card-4 margin white">
						<img src="<?php echo $news['image']; ?>" alt="Image" style="display: block;margin-left: auto;margin-right: auto;width: 100%; height: 250px; border-top-left-radius: 15px;border-top-right-radius: 15px;">
						<div class="container">
							<h3><b>BẢN TIN <?php echo $news['id']; ?></b></h3>
						</div>

						<div class="container">
							<p><?php echo $news['title']; ?></p>
							<div class="row">
								<div class="col m8 s12">
									<p><button class="button padding-large white border" ><a href="view_news_details.php?id=<?php echo $news['id']; ?>">XEM CHI TIẾT</a></button></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><br>
			<?php } ?>
		</div>
	
	<!-- Footer -->
	<footer class="container dark-grey padding-32 margin-top">
		<p style=" text-align: center;"><a href="https://www.facebook.com/vuducthanh0115/" target="_blank">FACEBOOK</a></p>
		<p style=" text-align: center;">© 2000-2022 Bản quyền thuộc về Thành Vũ. Cấm sao chép dưới mọi hình thức nếu không có sự chấp thuận bằng văn bản.</p>
	</footer>
	<?php mysqli_close($connect_server) ?>
</body>
</html>
