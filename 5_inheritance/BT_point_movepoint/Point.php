<?php
class Point{
    public float $x;
    public float $y;

    public function __construct(float $x,float $y)
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
        return "Điểm A có hoành độ là {$this->x} <br>Tung độ là {$this->y}<br>";
    }
}
?>