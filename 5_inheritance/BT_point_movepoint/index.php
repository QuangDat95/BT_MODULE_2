<?php
include_once "Point.php";
include_once "MoveablePoint.php";

$objPoint = new Point(2,3);
echo $objPoint->getXY();
echo $objPoint->__toString();
$objMovePoint = new MoveablePoint(4,5,2,3);
echo $objMovePoint->getSpeedXY();
echo $objMovePoint->__toString();
?>