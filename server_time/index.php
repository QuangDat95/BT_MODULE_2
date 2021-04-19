<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thời gian hiện tại</title>
</head>
<body>
    <h1>Bây giờ là:<?php date_default_timezone_set('Asia/Ho_Chi_Minh');
    echo date('h:m:s j/n/Y'); 
     ?></h1>
</body>
</html>