<?php
function validateAccount($str){
 $pattern = '/^[_a-z0-9]{6,}$/';
 if(preg_match($pattern,$str)){
     echo('Valid account<br>');
 }else{
     echo('Don\'t valid account<br>');
 }
}
validateAccount('123abc_');
validateAccount('_abc123');
validateAccount('______');
validateAccount('123456');
validateAccount('abcdefg');
validateAccount('.@');
validateAccount('12345');
validateAccount('1234_');
validateAccount('abcde ');
?>