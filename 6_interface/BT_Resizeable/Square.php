<?php
include_once ('Rectangle.php');
class Square extends Rectangle{
    public function __construct($width)
    {
        parent::__construct($width,$width);
    }
    public function getName()
    {
        return "Square";
    }
}