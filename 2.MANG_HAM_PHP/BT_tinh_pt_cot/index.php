<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $X = $_POST["nhap_X"];
    $sum = 0;
    $mang = [
        [1,1,6,4,9,6],
        [6,4,3,2,1,7]
    ];
    for($i=0;$i<count($mang);$i++){
        for($j=0;$j<count($mang[$i]);$j++){
            if($X == $j){
                $sum += $mang[$i][$j];
            }
        }
    }
    echo "Tổng giá trị tại cột thứ {$X} là {$sum}";
}
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
<form action="" method="POST">
    <input type="number" name="nhap_X"/>
    <input type="submit" value="Kết quả"/>
</form>
</body>
</html>