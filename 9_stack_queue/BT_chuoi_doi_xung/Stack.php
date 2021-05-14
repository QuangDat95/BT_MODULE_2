<?php
use JetBrains\PhpStorm\Pure;
class Stack
{
    protected array $stack;

    public function __construct()
    {
        $this->stack = [];
    }
    public function push($item):void
    {
        array_unshift($this->stack, $item);
    }
    public function pop()
    {
        return array_shift($this->stack);
    }
}
?>