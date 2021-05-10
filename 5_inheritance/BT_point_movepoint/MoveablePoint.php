<?php
class MoveablePoint extends Point{
    public float $xSpeed;
    public float $ySpeed;
    public function __construct(float $xSpeed, float $ySpeed,float $x, float $y){
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
        $this->x = $x;
        $this->y = $y;
    }
    public function getxSpeed()
    {
        return $this->xSpeed;
    }
    public function getySpeed()
    {
        return $this->ySpeed;
    }
    public function getSpeedXY()
    {
        return "tọa độ di chuyển B[{$this->xSpeed},{$this->ySpeed}]<br>";
    }
    public function __toString():string
    {
        return "Tọa độ mới của A có hoành độ là ".$this->x + $this->xSpeed."<br> tung độ là ".$this->y + $this->ySpeed;
    }
}
?>