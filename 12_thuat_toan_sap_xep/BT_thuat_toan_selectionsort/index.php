<?php
function SelectSort($arr){
    for($i = 0; $i < count($arr) - 1; $i++){
        $temp = $i;
        for($j = $i + 1; $j < count($arr); $j++){
            if($arr[$j]<$arr[$temp]){
                $temp = $j;
            }
        }
        $arr = swap($arr, $i,$temp);
    }
    return $arr;
}
function swap($mang,$i1,$i2){
    $temp1 = $mang[$i2];
    $mang[$i2] = $mang[$i1];
    $mang[$i1] = $temp1;
    return $mang;
}
$array1 = [1, 9, 4.5, 6.6, 5.7, -4.5];
echo "Original Array <br>";
echo implode(", ",$array1)."<br>";
echo "Sort Array <br>";
echo implode(", ",SelectSort($array1)).PHP_EOL;
?>