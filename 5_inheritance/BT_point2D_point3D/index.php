<?php
include "Point2D.php";
include "Point3D.php";

$point2d = new Point2D(2,3);
echo $point2d->getXY();
echo $point2d;
$point3d = new Point3D(3,6,8);
echo $point3d->getXYZ();
echo $point3d;

