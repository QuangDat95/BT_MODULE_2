<?php
class Triangle extends Shape{
    public float $side1;
    public float $side2;
    public float $side3;
    public function __construct(string $name, int $side1, int $side2, int $side3){
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
    public function getTamgiac(){
        return "Triangle {$this->name}";
    }
    public function setTamgiac($side1,$side2,$side3){
        
    }
    public function getAB(){
        return $this->side1;
    }
    public function getBC(){
        return $this->side2;
    }
    public function getAC(){
        return $this->side3;
    }
    public function getPerimeter(){
        return $this->side1 + $this->side2 + $this->side3;
    }
    public function getArea(){
        $p = 0.5*($this->side1+$this->side2+$this->side3);
        return pow(($p - $this->side1)*($p - $this->side2)*($p - $this->side3),0.5);
    }
    public function __toString(){
        return "I have AB is {$this->side1}, BC is {$this->side2}, AC is {$this->side3}<br>";
    }
}
?>