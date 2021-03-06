<?php
class Rectangle
{
    public $width;
    public $height;

    public function __contruct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width*$this->height;
    }

    public function getPerimeter()
    {
        return (($this->width + $this->height)*2);
    }

    public function display()
    {
        return " Rectangle{" . "width=" . $this->width . ", height=".$this->height . "}";
    } 
}
$width = 10;
$height = 20;
$rectangle = new Rectangle(10, 20);

echo $rectangle->width; // 0utput: 10
echo $rectangle->height; // 0utput: 20

$rectangle->height = 30;
$rectangle->width = 20;

echo "Chiều dài: ".$rectangle->height."<br>"; // 0utput: 30
echo "Chiều rộng: ".$rectangle->width."<br>"; // 0utput: 20
echo "Chu vi: ".$rectangle->getPerimeter()."<br>"; // 0utput: 100
echo "Diện tích: ".$rectangle->getArea()."<br>"; // Output: 600
echo ("Your Rectangle". $rectangle->display());
?>