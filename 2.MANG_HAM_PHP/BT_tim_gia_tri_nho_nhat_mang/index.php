<?php
$mang = [10,2,6,8,4,3,9,3];
$min = $mang[0];
for($i=1;$i<count($mang);$i++){
    if($mang[$i]<$min){
        $min = $mang[$i];
    }
}
echo "Giá trị nhỏ nhất trong mảng là {$min}";
?>