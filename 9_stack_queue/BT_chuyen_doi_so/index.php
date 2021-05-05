<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyển đổi số</title>
</head>
<body>
<form action="" method="POST">
        <input type="number" name="nhap_so"/>
        <input type="submit" value="kết quả"/>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = $_POST["nhap_so"];
    class Stack{
        private array $stack = [];
        private int $number;
        public function __construct(){
        }
    
        public function push($number){
            while($number>=1){
                array_push($this->stack,$number%2);
                $number = $number/2;
            }
            if($number == 0){
            array_push($this->stack,0);
            }
            return $this->stack;
        }
        public function pop(){
            return array_reverse($this->stack);
        }
    }
    $objstack = new Stack();
    $objstack->push($number);
    $mang = $objstack->pop();
    echo "<br>Số ".$number." có kiểu nhị phân là: ".implode($mang);
}
?>
</body>
</html>
