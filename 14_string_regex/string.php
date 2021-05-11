<?php
//‘ Bò kêu “moo” ’
$chuoi_1 = 'Bò kêu "moo" ';
$chuoi_1 = "Bò kêu \"moo\" ";

echo '<pre>';
    print_r( $_GET );
echo '</pre>';

//Tên của bạn là Nguyen Van A và bạn 18 tuổi
$name   = $_GET['name'];
$age    = $_GET['age'];
$cau_chao_mung = 'Tên của bạn là '.$name.' và bạn '.$age.' tuổi';
$cau_chao_mung = 'Hello world world';

//echo strlen( $cau_chao_mung );
$kiem_tra = strpos( $cau_chao_mung,'Hello1');//0

$cau_chao_mung = str_replace('world','giá trị mới',$cau_chao_mung);

$cau_chao_mung = '  Hello giá trị mới giá trị mới   ';
/*
'  Hello giá trị mới giá trị mới   '
'Hello giá trị mới giá trị mới'
*/
$cau_chao_mung = trim($cau_chao_mung);
echo $cau_chao_mung;//Hello giá trị mới giá trị mới

//var_dump($kiem_tra);

// if( $kiem_tra === false ){
//     echo 'Không tìm thấy'; 
// }else{
//     echo 'Tìm thấy';
// }