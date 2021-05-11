<?php
function validateClass($str){
    $regexp = '/^[CAP][0-9]{4,4}[GHIKLM]$/';
    if(preg_match($regexp,$str)){
        echo('Valid class name<br>');
    }else{
        echo('Don\'t valid class name<br>');
    }
}
validateClass('C0318G');
validateClass('M0318G');
validateClass('P0323A');
validateClass('S123AD');
?>