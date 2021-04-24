<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $X = $_POST["so_X"];
    $tim_thay = 
    $mang = [1,2,6,8,4,3,0,7,9,12,13];
    echo '<pre>';
    print_r( $mang );
    echo '</pre>';
    for($i=0;$i<count($mang);$i++){
        if($X == $mang[$i]){
            $index_del = $i;
        }else{
            $index = $X;
        }
    }
for($j=$index_del;$j<count($mang);$j++){
    $mang[$j] = $mang[$j + 1];
}
$mang[count($mang) - 1] = 0;
echo '<pre>';
    print_r( $mang );
echo '</pre>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa phần tử mảng</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="so_X"/>
        <input type="submit" value="Kết quả"/>
    </form>
</body>
</html>