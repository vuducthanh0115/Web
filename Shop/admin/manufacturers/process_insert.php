<?php
require '../check_login_superadmin.php';
if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['image'])) {
	header('location:form_insert.php?error=Vui long nhap day du thong tin');
	exit;
}

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$image = $_POST['image'];

require '../connect.php';
$sql = "insert into manufacturers(name,address,phone,photo)
values('$name', '$address', '$phone', '$image')";

mysqli_query($connect, $sql);

header('location:index.php?success=Them thanh cong');
