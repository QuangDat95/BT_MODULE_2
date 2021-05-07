<?php
function bubbleSort($list){
    $count = count($list);
    for($i = 0;$i<$count;$i++){
        for($j = 0; $j<$count - $i - 1; $j++){
            if($list[$j] > $list[$j+1]){
                $temp = $list[$j+1];
                $list[$j+1] = $list[$j];
                $list[$j] = $temp;
            }
        }
    }
    echo "Sort Array <br>";
    for($k=0;$k<count($list);$k++){
        echo $list[$k]." ";
    }
}
$myArr = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
bubbleSort($myArr);
?>