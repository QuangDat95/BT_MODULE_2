<?php
include "Circle.php";
include "Cylinder.php";

$circle = new Circle('Red',20);
echo "Diện tích hình tròn là: {$circle->calculatorArea()}<br>";
echo $circle;
$cylinder = new Cylinder('Blue',20,30);
echo "Thể tích trụ là: {$cylinder->calculatorVolume()}<br>";
echo $cylinder;
?>