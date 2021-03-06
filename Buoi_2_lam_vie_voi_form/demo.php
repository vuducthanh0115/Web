<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formother.css">
    <link rel="icon" href="./favicon_PHP.png" type="image/x-icon" />
    <script src="validate.js"></script>
    <title>PHP</title>
</head>
<body>
<form action="process.php" method="get">
        <div class="container">
        <h1>Đăng kí tài khoản</h1>
        <p>Xin hãy nhập thông tin bên dưới</p>
        <hr>

        <label for="name"><b>Họ và tên</b></label>
        <input type="text" placeholder="Ví dụ : Nguyễn Văn A..." name="name" id="name">
        <i id="error_name"></i>
        <br>
        <br>

        <label for="address"><b>Địa chỉ</b></label>
        <input type="text" placeholder="Nhập địa chỉ" name="address" id="address">
        <i id="error_address"></i>
        
        <br>
        <br>
        <div id="sex">
            <span>Giới tính</span>
            <i class="ti-help-alt"></i>
            <br>
            <div class="sex-radio"> Nam <input type="radio" name="gender" value="Nam" style="margin-left: 30px;"> </div>
            <div class="sex-radio"> Nữ <input type="radio" name="gender" value="Nu" style="margin-left: 30px;" > </div>
            <div class="sex-radio"> Khác <input type="radio" name="gender" value="Khac" style="margin-left: 30px;" > </div>
            <div id="error-sex-visible" class="error-hidden"> 
                <i class="ti-info-alt"></i>
                
            </div>
        </div>
        <br>
        <br>
        <i id="error_sex"></i>
        <br>
        <br>
        <div id="bthday">
        <label for="date"><b>Ngày sinh</b></label>
        <br>
        <br>
        <input type="date" placeholder="Mời bạn chọn ngày sinh" name="bday" id="bday">
        </div>
        
        <br>
        <br>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Nhập Email" name="email" id="email">
        <i id="error_email"></i>
        <br>
        <br>
    
        <label for="psw"><b>Mật Khẩu</b></label>
        <input type="password" placeholder="Nhập Mật Khẩu" name="psw" id="psw">
        <i id="error_psw"></i>
        <br>
        <span id="hd">Mật khẩu cần ít nhất 8 kí tự và có ít nhất 1 chữ số, 1 chữ thường, 1 chữ hoa.</span>
        <br>
        <br>
    
        <label for="psw-repeat"><b>Nhập Lại Mật Khẩu</b></label>
        <input type="password" placeholder="Nhập Lại Mật Khẩu" name="psw-repeat" id="psw_repeat">
        <i id="dissimilarity"></i>
        <br>

        <label for="hobby"><b>Sở thích</b></label>
        <input type="text" placeholder="Nhập sở thích" name="hobby" id="hobby">
        <i id="error_hobby"></i>
        <br>
        <br>
        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Ghi Nhớ Đăng Nhập
        </label>
    
        <div class="clearfix">
            <button type="submit" class="signupbtn" onclick="return check()">Đăng kí</button>
        </div>
        </div>
    </form>
    
</body>
</html>
