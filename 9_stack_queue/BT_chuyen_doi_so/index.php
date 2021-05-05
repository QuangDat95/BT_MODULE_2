<?php
class Stack{
    private array $stack = [];
    private int $number;
    public function __construct(){
    }

    public function push($number){
        while($number>=1){
            array_push($this->stack,$number%2);
            $number = $number/2;
        }
        return $this->stack;
    }
    public function pop(){
        return array_reverse($this->stack);
    }
}
$objstack = new Stack();
$objstack->push(2);
$mang = $objstack->pop();
echo implode($mang);