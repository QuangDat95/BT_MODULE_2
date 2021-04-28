<?php
include "Circle.php";
include "Cylinder.php";

$circle = new Circle('Đỏ',20);
echo $circle;
echo "Diện tích hình tròn là: {$circle->calculatorArea()}<br>";
$cylinder = new Cylinder('Xanh dương',20,30);
echo $cylinder;
echo "Thể tích trụ là: {$cylinder->calculatorVolume()}<br>";
?>