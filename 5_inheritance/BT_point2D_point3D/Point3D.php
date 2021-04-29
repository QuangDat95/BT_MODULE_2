<?php

class Point3D extends Point2D
{
    public float $z;

    public function __construct(float $x, float $y, float $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function getZ()
    {
        return $this->z;
    }
    public function getXYZ()
    {
       return "B[{$this->x},{$this->y},{$this->z}]<br>";
    }
    public function __toString():string
    {
        return "Điểm B có hoành độ là: {$this->x} <br> Tung độ là: {$this->y}<br> Cao độ là {$this->z}";
    }
}
?>