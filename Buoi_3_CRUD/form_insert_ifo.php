<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./CSS/news_form.css">
	<title>Form add data</title>
</head>
<body>
	<form action="process_insert_ifo.php" method="post">
		<div class="container">
			<h1>Thêm nội dung cho trang tin tức</h1>
			<p>Xin mời bạn nhập vào bên dưới</p>
			<hr>

			<label for="title"><b>Tiêu đề bài báo</b></label>
			<input type="text" placeholder="Xin mời nhập tiêu đề bài báo" name="title" id="title">
			<br>

			<label for="content"><b>Nội dung</b></label>
			<br>
			<textarea placeholder="Xin mời bạn nhập nội dung bài báo ..." name="content" id="content"></textarea>
			<br>

			<label for="link"><b>Đường dẫn ảnh</b></label>
			<br>
			<input type="text" placeholder="Xin mời bạn điền đường dẫn ảnh" name="link" id="link">
			<br>

			<div class="clearfix">
				<button>Gửi</button>
			</div>
		</div>
	</form>
</body>
</html>