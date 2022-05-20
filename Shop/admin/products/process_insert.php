<?php
require '../check_login_admin.php';
$name = $_POST['name'];
$image = $_FILES['image'];
$price = $_POST['price'];
$description = $_POST['description'];
$manufacturer_id = $_POST['manufacturer_id'];
$folder = 'image/';

$file_extention = explode('.', $image['name'])[1];
$file_name = time() . '.' . $file_extention;
$path_file = $folder . $file_name;
move_uploaded_file($image["tmp_name"], $path_file);

require '../connect.php';
$sql = "insert into products(name_product,image,price,description,manufacturer_id)
values('$name','$file_name','$price','$description','$manufacturer_id')";
mysqli_query($connect, $sql);
