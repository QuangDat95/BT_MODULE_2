<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $so_a = $_POST["so_a"];
    $so_b = $_POST["so_b"];
class DivideByZeroExeption extends Exception{
    public function __toString(){
        return "Can't divide by zero";
    }
}
function divide($numerator, $denominator){
    if($denominator == 0){
        throw new DivideByZeroExeption();
    }
        return "Kết quả phép chia a cho b: ".$numerator/$denominator;

}
try {
    $result = divide($so_a,$so_b);
    echo $result;
} catch (DivideByZeroExeption $e){
    echo 'Có lỗi xảy ra: '.$e;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xử lý ngoại lệ</title>
</head>
<body>
    <form action="" method="POST">
    <div>Nhập số a: </div><input type="number" name="so_a"/>
    <div>Nhập số b: </div><input type="number" name="so_b"/>
    <input type="submit" value="kết quả"/>
    </form>
</body>
</html>