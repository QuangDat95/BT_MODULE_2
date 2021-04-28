<?php
    class Cylinder extends Circle
  {
      public int|float $height;

      public function __construct(string $color_cylinder, int|float $radius_cylinder, int|float $height)
      {
          $this->height = $height;
          $this->color_cylinder = $color_cylinder;
          $this->radius_cylinder = $radius_cylinder;
      }

      public function getHeight()
      {
          return $this->height;
      }
      public function calculatorVolume(): int|float
      {
          return pi() * pow($this->radius_cylinder,2) * $this->height;
      }
      public function __toString(): string
      {
          return "Bán kính trụ là: {$this->radius_cylinder} <br> Chiều cao trụ là: {$this->height} <br> Màu sắc hình trụ là: {$this->color_cylinder} <br>";
      }
    }
  
?>