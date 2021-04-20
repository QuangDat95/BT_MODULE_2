<?php
    $books = ['Văn', 'Địa', 'Lý'];
    //          0      1      2
    //$books = array('a', 'b', 'c');
// echo '<pre>';
//     print_r($books);
// echo '</pre>';
//echo $books[1];
//array_push
$books[] = 'Hoá';
array_push($books, 'Sinh');
foreach($books as $key => $value){
    echo " Chỉ số {$key} có giá trị là {$value} <br> ";
}
echo "Số phần tử ". count($books);
?>