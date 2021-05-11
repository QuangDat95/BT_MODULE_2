<?php
function validatephoneNumber($str){
    $regexp = '/^\([0-9]{2,2}\)\-\(0[0-9]{9,9}\)$/';
    if(preg_match($regexp,$str)){
        echo('Valid phone number<br>');
    }else{
        echo('Don\'t valid phone number');
    }
}
validatephoneNumber('(84)-(0984377653)');
validatephoneNumber('(3a)-(23232132234)');
?>