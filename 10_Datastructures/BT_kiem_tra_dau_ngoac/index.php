<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra dấu ngoặc</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="nhap_chuoi">
    <input type="submit" value="Kết quả">
    </form>
</body>
</html>
<?php
include "Stack.php";
$objStack = new Stack();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $arr =$_POST["nhap_chuoi"];
function kiemtra($a){
    $count1 = 0;
    $count2 = 0;
    for($i=0;$i<strlen($a);$i++){
        if($a[$i] == '('){
            $count1++;
        }
        if($a[$i] == ')'){
            $count2++;
        }
    }
    if($count1 == $count2){
        echo("Ngoặc phù hợp");
    }else{
        echo("Ngoặc bị sai");
    }
 }
 kiemtra($arr);
}
?>