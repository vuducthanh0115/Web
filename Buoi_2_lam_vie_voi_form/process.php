<?php
    $name = empty( !$_GET['name'] ) ? $_GET['name'] : 'Bạn chưa nhập tên';
    $gender = empty( !$_GET['gender'] ) ? $_GET['gender'] : 'Bạn chưa chọn giới tính';
    $email = empty( !$_GET['email'] ) ? $_GET['email'] : 'Bạn chưa nhập email';
    $psw = empty( !$_GET['psw'] ) ? $_GET['psw'] : 'Bạn chưa nhập psw';
    $birthday = empty( !$_GET['bday'] ) ? $_GET['bday'] : 'Bạn chưa chọn ngày sinh';
    $address = empty( !$_GET['address'] ) ? $_GET['address'] : 'Bạn chưa nhập địa chỉ';
    $hobby = empty( !$_GET['hobby'] ) ? $_GET['hobby'] : 'Bạn chưa nhập sở thích';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formother.css">
    <title>PHP</title>
</head>
<body>
<form action="process.php" method="post">
        <div class="container">
        <h1>Thông tin bạn đã nhập</h1>
        <hr>

        <label for="name"><b>Họ và tên</b></label>
        <input type="text" name="name" id="name" value='<?php echo $name; ?>' readonly>
        <br>
        <br>

        <label for="address"><b>Địa chỉ</b></label>
        <input type="text" name="address" id="address" value='<?php echo $address; ?>' readonly>
        
        <br>
        <br>
        <label for="gender"><b>Giới tính</b></label>
        <input type="text" name="gender" id="gender" value='<?php echo $gender; ?>' readonly>
        <br>
        <br>
        <br>
        <br>
        <label for="bthday"><b>Ngày sinh</b></label>
        <input type="text" name="bthday" id="bthday" value='<?php echo $birthday; ?>' readonly>
        <br>
        <br>

        <label for="email"><b>Email</b></label>
        <input type="text" name="email" id="email" value='<?php echo $email; ?>' readonly>
        <br>
        <br>
    
        <label for="psw"><b>Mật Khẩu</b></label>
        <input type="text" name="psw" id="psw" value='<?php echo $psw; ?>' readonly>

        <label for="hobby"><b>Sở thích</b></label>
        <input type="text" name="hobby" id="hobby" value='<?php echo $hobby; ?>' readonly>
        <br>
        <br>
        </div>
    </form>
    
</body>
</html>    