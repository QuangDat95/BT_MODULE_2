<?php
include_once 'Circle.php';
include_once 'Rectangle.php';
include_once 'Square.php';
$Shapes[0] = new Circle(5);
$Shapes[1] = new Rectangle(10,20);
$Shapes[2] = new Square(15);
foreach ($Shapes as $Shape) {
    echo 'Diện tích của ' . $Shape->getName() . ' là: ' . $Shape->calculateArea() . '<br>';
    if ($Shape instanceof Square) {
        echo 'Square: ' . $Shape->howtoColor() . '<br>';
    }
}