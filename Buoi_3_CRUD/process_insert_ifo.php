<?php 
$title = $_POST['title'];
$content = $_POST['content'];
$link = $_POST['link'];

$connect_server = mysqli_connect('localhost', 'root', '', 'news');
mysqli_set_charset( $connect_server, 'utf8');
$sql = "insert into news(title, content, image) value ('$title', '$content', '$link')";

mysqli_query($connect_server, $sql);
?>
