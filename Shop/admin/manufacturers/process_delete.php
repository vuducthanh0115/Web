<?php
require '../check_login_superadmin.php';
$id = $_GET['id'];
require '../connect.php';
$sql = "delete from manufacturers
where id = '$id' ";
mysqli_query($connect, $sql);
header('location:index.php?success=Xoa thanh cong');
