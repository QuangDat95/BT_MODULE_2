<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm max mảng 2 chiều</title>
</head>
<body>
<!--form action="" method="POST">
<p>Nhập vào mảng</p><input type="text" name="Nhap_mang" placeholder="Nhập vào mảng"/>
<input type="submit" value="Tìm số"/>
</form-->
    <?php
        $mang = [[1,2,34,5,6,7,8],[3,7,9,0,17,77,29]];
        $max = 0;
        for($i=0;$i<count($mang);$i++){
            for($j=0;$j<count($mang[$i]);$j++){
                if($mang[$i][$j]>$max){
                    $max = $mang[$i][$j];
                }
            }
        }
        echo "Số lớn nhất trong mảng là: {$max}";
    ?>
</body>
</html>