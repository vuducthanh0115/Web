<?php

$email = $_POST['email'];
$psw = $_POST['psw'];
require 'connect.php';
$sql = "select * from admin
where email = '$email' and password = '$psw'";
$result = mysqli_query($connect, $sql);
$number_rows = mysqli_num_rows($result);
if ($number_rows == 1) {
    $each = mysqli_fetch_array($result);
    session_start();
    $_SESSION['name'] = $each['name'];
    $_SESSION['id'] = $each['id'];
    $_SESSION['level'] = $each['level'];
    header('location:root/index.php');
    exit;
}
header('location:index.php?error=Tài khoản hoặc mật khẩu không đúng');
exit;
