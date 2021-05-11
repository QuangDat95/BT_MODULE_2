<?php
include_once "Shape.php";
include_once "Triangle.php";

$objShape = new Shape('ABC');
echo $objShape->show();
$objTriangle = new Triangle('ABC',1,1,1);
echo $objTriangle->__toString();
echo "I have area is ".$objTriangle->getArea()."<br>";
echo "I have perimeter is ".$objTriangle->getPerimeter()."<br>";