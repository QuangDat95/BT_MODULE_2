<?php

const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';
class Calculator
{
    public function calculate($firstOperand, $secondOperand, $operator): float|int
    {
        switch ($operator){
            case ADDITION:
                return $firstOperand + $secondOperand;
            case SUBTRACTION:
                return $firstOperand - $secondOperand;
            case MULTIPLICATION:
                return $firstOperand * $secondOperand;
            case DIVISION:
                if($secondOperand != 0){
                    return $firstOperand/$secondOperand;
                } else {
                    echo ("can not divide by 0");
                    break;
                }
            default:
                echo "Unsupported operation";
        }
    }
}
$calculate = new Calculator();
echo $calculate->calculate(1,2,DIVISION);
?>