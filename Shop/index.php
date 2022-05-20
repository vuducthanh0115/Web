<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        #container {
            width: 100%;
            height: 700px;
            background: gray;
        }

        #header {
            width: 100%;
            height: 20%;
            background: #ff9800c2;
        }

        #middle {
            width: 100%;
            height: 60%;
            background: #e91e63de;
        }

        #footer {
            width: 100%;
            height: 20%;
            background: orange;
        }
    </style>
</head>

<body>
    <div id="container">
        <?php
        require 'menu.php';
        require 'product.php';
        require 'footer.php';
        ?>
    </div>
</body>

</html>