<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyển đổi tiền tệ</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="nhap_USD" placeholder="Nhập vào số USD"/>
        <input type="submit" value="Kết quả"/>
    </form>
    <?php
        $gia_USD = $_POST['nhap_USD'];
        $ty_gia_USD_VND =  1/23000;
        $gia_VND = $gia_USD/$ty_gia_USD_VND;
        echo "Số tiền {$gia_USD} USD có giá {$gia_VND} đồng";
    ?>
</body>
</html>