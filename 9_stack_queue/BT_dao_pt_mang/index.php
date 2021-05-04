<?php
class Stack{
    private array $Stack = [];

    public function __construct(){
    }

    public function push($element){
        array_push($this->Stack,$element);
    }
    public function pop(){
        return array_reverse($this->Stack);
    }
}
$objStack = new Stack();
$objStack->push("A");
$objStack->push("B");
$objStack->push("C");
$objStack->push("D");
$objStack->push("E");

echo '<pre>';
    print_r( $objStack );
echo '</pre>';

echo '<pre>';
    print_r($objStack->pop());
echo '</pre>';
?>