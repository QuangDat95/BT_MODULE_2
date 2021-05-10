<?php
class maytinhdongian{
    public $x;
    public $y;
    public function __construct($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function get_x(){
        return $this->x;
    }
    public function get_y(){
        return $this->y;
    }
    public function addition(){
        return $this->x + $this->y;
    }
    public function subtraction(){
        return $this->x - $this->y;
    }
    public function multiplication(){
        return $this->x * $this->y;
    }
    public function division(){
        if($this->y == 0){
            throw new Exception("Thương x/y xảy ra ngoại lệ: /by zero");
        }
            return "<br>Thương x/y = ".$this->x/$this->y;
    }
}
$objcalculate = new maytinhdongian(1,5);
echo "x = ".$objcalculate->get_x(); 
echo ";y = ".$objcalculate->get_y();
echo ";<br>Tổng x + y = ".$objcalculate->addition();
echo "<br>Hiệu x - y = ".$objcalculate->subtraction();
echo "<br>Tích x * y = ".$objcalculate->multiplication();
try{
    echo $objcalculate->division();
}catch(Exception $e){
    echo "<br>".$e->getMessage();
}
