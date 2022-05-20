<?php
require '../check_login_superadmin.php';
if (empty($_POST['id'])) {
	header('location:form_update.php?error=Phai truyen ma');
	exit;
}
$id = $_POST['id'];
if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['image'])) {
	header("location:form_update.php?id=$id&error=Vui long nhap day du thong tin");
	exit;
}

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$photo = $_POST['image'];

require '../connect.php';
$sql = "update manufacturers
set
name = '$name',
address = '$address',
phone = '$phone',
photo = '$photo'
where id = '$id'";

mysqli_query($connect, $sql);
$error = mysqli_error($connect);
if (empty($error)) {
	header('location:index.php?success=Sua thanh cong');
} else {
	header("location:form_update.php?id=$id&error=Loi truy van");
}
