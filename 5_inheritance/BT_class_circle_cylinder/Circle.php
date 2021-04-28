<?php

    class Circle
    {
        public int|float $radius;
        public string $color_circle;

        public function __construct(string $color_circle, int|float $radius)
        {
            $this->color_circle = $color_circle;
            $this->radius = $radius;
        }

        public function getColor_circle(){
            return $this->color_circle;
        }
        public function getRadius(){
            return $this->radius;
        }
        public function calculatorArea(): int|float
        {
            return pi() * pow($this->radius, 2);
        }
        public function __toString(): string
        {
            return "Bán kính hình tròn là: {$this->radius} <br> Màu sắc hình tròn là: {$this->color_circle} <br>";
        }
    }
?>