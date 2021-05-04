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
$objStack->push(1);
$objStack->push(2);
$objStack->push(3);
$objStack->push(4);
$objStack->push(5);

echo '<pre>';
    print_r( $objStack );
echo '</pre>';

echo '<pre>';
    print_r($objStack->pop());
echo '</pre>';
?>
