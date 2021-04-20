<?php
    //var_dump();

    //method GET
    // echo '<pre>';
    // print_r( $_GET );
    // echo '</pre>';

    // echo '<hr>';

    //method POST
    // echo '<pre>';
    // print_r( $_POST );
    // echo '</pre>';

    //method POST hoăc GET
    echo '<hr>';
    echo '<pre>';
    print_r( $_REQUEST );
    echo '</pre>';

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
    <form action="xu_ly.php" method="GET">
        <label>Tên đăng nhập</label>
        <input type="text" id="username" name="ten_dang_nhap">

        <br>

        <label>Mật Khẩu</label>
        <input type="password" id="password" name="mat_khau">

        <br>

        <input type="submit" value="Đăng nhập" name="dang_ky">
    </form>
</body>
</html>