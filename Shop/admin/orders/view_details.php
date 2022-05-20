<?php
require '../check_login_admin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sum = 0;
    $order_id = $_GET['id'];
    require '../connect.php';
    $sql = "select * from order_product
    join products on products.id = order_product.product_id
    where order_id = '$order_id'";
    $result = mysqli_query($connect, $sql);
    ?>
    <table border="1" ; width="100%">
        <tr>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
        </tr>
        <?php foreach ($result as $each) : ?>
            <tr>
                <td style="text-align: center;">
                    <img src="../products/image/<?php echo $each['image']; ?>" height="100px" alt="">
                </td>
                <td style="text-align: center;">
                    <?php echo $each['name_product']; ?>
                </td>
                <td style="text-align: center;">
                    <?php echo $each['price']; ?>
                </td>
                <td style="text-align: center;">
                    <?php
                    echo $each['quantity'];
                    ?>
                </td>
                <td style="text-align: center;">
                    <?php
                    echo $each['quantity'] * $each['price'];
                    ?>
                </td>
            </tr>
            <?php $sum += $each['price'] * $each['quantity']; ?>
        <?php endforeach ?>
    </table>
    <h1>Tổng tiền hoá đơn : <?php echo '$' . $sum; ?></h1>
</body>

</html>