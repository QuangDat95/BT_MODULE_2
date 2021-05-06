<?php
function dem_so($numbers,$value){
    $count = 0;
    for($i=0;$i<count($numbers);$i++){
        if($numbers[$i] == $value){
            $count++;
        }
    }
    return $count;
}
$arr = [1,5,3,2,1,6,9,7,3,4,3];
const n = 1;
$findnumber = dem_so($arr,n);
echo "Số ".n." có tất cả ".$findnumber." lần xuất hiện";
?>