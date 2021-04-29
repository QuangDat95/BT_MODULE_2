<?php

class Point2D{
    public float $x; 
    public float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX()
    {
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function getXY()
    {
       return "A[{$this->x},{$this->y}]<br>";
    }
    public function __toString():string
    {
        return "ĐIểm A có tung độ là {$this->x} <br> Hoành độ là {$this->y} <br>";
    }
}
?>