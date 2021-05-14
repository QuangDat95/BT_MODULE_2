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
        <input type="text" name="nhap_chuoi"/>
        <input type="submit" value="Kiểm tra"/>
    </form>
</body>
</html>
<?php
include_once "Stack.php";
include_once "Queue.php";

$objStack = new Stack();
$objQueue = new Queue();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $chuoi = $_POST["nhap_chuoi"];
    $count = 0;
    for($i=0;$i<strlen($chuoi);$i++){
        $objStack->push($chuoi[$i]);
        $objQueue->enqueue($chuoi[$i]);
    }
    for($j=0;$j<strlen($chuoi);$j++){
        if($objStack->pop() == $objQueue->dequeue()){
            $count++;
        }    
    }
    if($count == strlen($chuoi)){
        echo "Chuỗi đối xứng";
    }else{
        echo "Chuỗi không đối xứng";
    }
}
?>