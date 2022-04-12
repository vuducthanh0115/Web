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
		$id = $_GET['id'];
		$connect_server = mysqli_connect('localhost', 'root', '', 'news');
		mysqli_set_charset($connect_server, 'utf8');
		$sql = "select * from news
		where id = $id";

		$result = mysqli_query( $connect_server, $sql );
		$news = mysqli_fetch_array($result);
	?>
	<header class="container center padding-32"> 
		<h1><b>TIN TỨC 24H</b></h1>
		<p>Chào mừng bạn đến với trang tin tức 24h luôn cập nhật những tin mới nhất</p>
	</header>
	<div class="content-show" style="max-width:1000px">

		<div class="roww">
			<div >
				<div class="card-4 margin white">
					<img src="<?php echo $news['image']; ?>" alt="Image" style="width: 100%;">
					<div class="container">
						<h3><b><?php echo $news['title']; ?></b></h3>
					</div>
					<div class="container">
						<p><?php echo nl2br($news['content']); ?></p>
					</div>
				</div>
			</div>
		</div><br>
	</div>
	<!-- Footer -->
	<footer class="container dark-grey padding-32 margin-top">
		<p style=" text-align: center;"><a href="https://www.facebook.com/vuducthanh0115/" target="_blank">FACEBOOK</a></p>
		<p style=" text-align: center;">© 2000-2022 Bản quyền thuộc về Thành Vũ. Cấm sao chép dưới mọi hình thức nếu không có sự chấp thuận bằng văn bản.</p>
	</footer>

</body>
</html>
