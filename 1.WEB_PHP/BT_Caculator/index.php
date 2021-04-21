<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<style>
</style>
<body>
<fieldset>
<legend>Calculator</legend>
    <form action="" method="POST">
    <table border="0">
    <tr>
        <td>First operand</td>
        <td><input type="number" name="number_1"/></td>
    </tr>
    <tr>
        <td>Operator</td>
        <td><select name="phep_toan">
                        <option value="add">Addition</option>
                        <option value="sub">Subtraction</option>
                        <option value="multi">Multiplication</option>
                        <option value="dvs">division</option>
                    </select>
        </td>
    </tr>
    <tr>
        <td>Second Operand</td>
        <td><input type="number" name="number_2"/></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Calculate"/></td>
    </tr>
    </table>
</form>
    </fieldset>
    <?php
    $number1 = $_POST['number_1'];
    $number2 = $_POST['number_2'];
    class Calculator{
       public $number1;
       public $number2;
       function set_number1(){
           $this->number1 = $number1;
        }
        function get_number1(){
            return $this->number1;
        }
        function set_number2(){
            $this->number2 = $number2;
        }
         function get_number2(){
             return $this->number2;
        }
       function Add($number1,$number2){
           echo "<h1>Result:</h1>".$number1." + ".$number2." = ".($number1 + $number2);
       }
       function Sub($number1,$number2){
        echo "<h1>Result:</h1>".$number1." - ".$number2." = ".($number1 - $number2);
       }
       function Mul($number1,$number2){
        echo "<h1>Result:</h1>".$number1." x ".$number2." = ".($number1 * $number2);
       }
       function Div($number1,$number2){
        echo "<h1>Result:</h1>".$number1." : ".$number2."=".($number1 / $number2);
       }
    }
    $Phep_toan = new Calculator($number1,$number2);
    if(isset($_POST['phep_toan'])){
        $phep_toan = $_POST['phep_toan'];
        switch ($phep_toan) {
            case 'add':
                $Phep_toan->Add($number1,$number2);
                break;
            case 'sub':
                $Phep_toan->Sub($number1,$number2);
                break;
            case 'multi':
                $Phep_toan->Mul($number1,$number2);
                break;
            case 'dvs':
                if($number2 == 0){
                    echo "<h1>Result:</h1>Execption";
                }
                else
                {
                    $Phep_toan->Div($number1,$number2);
                } 
        }
    }
    ?>
</body>
</html>