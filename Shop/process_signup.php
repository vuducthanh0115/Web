<?php
$name = $_POST['name'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];

require './admin/connect.php';
$sql = "select count(*) from customers
where email = '$email'";
$result = mysqli_query($connect,$sql);
$each = mysqli_fetch_array($result);
$number_rows = $each['count(*)'];
if($number_rows == 1 ){
	header('location:signup.php?error=Email đã tồn tại');
	exit;
}

$sql= "insert into customers(name, email, password, phone_number, address)
values('$name', '$email', '$psw','$phone_number', '$address')";
mysqli_query($connect, $sql);

$sql = "select id from customers
where email = '$email'";
$result = mysqli_query($connect,$sql);
$id = mysqli_fetch_array($result)['id'];
session_start();
$_SESSION['name'] = $name;
$_SESSION['id'] = $id;
