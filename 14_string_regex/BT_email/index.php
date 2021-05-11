<?php
//job@haviet.co
//hungviethung@gmail.com

/*
xxxx@xxxx.xxx
*/
$string     = 'job@haviet.co';
$pattern    = '/^[a-zA-Z0-9]+\@[a-z]+\.[a-z]+/';

$tim_thay = preg_match( $pattern, $string, $matches );

// echo '<pre>';
//     print_r( $matches );
// echo '</pre>';


$subject = "CodeGym@gmail.com";
$pattern = '/^\w+@\w+(\.\w+){1,3}$/';
if (preg_match($pattern, $subject, $matches)) {
    echo 'Khớp';
} else {
    echo 'Không khớp';
};


/*
a. Error
b. Không khớp
c. Khớp


*/