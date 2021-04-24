<?php
$mang1 = [1,2,3,4,5,6,7];
$mang2 = [12,1,2,4,6,8,9,10,11,12];
$mang3 = [];
for($i=0;$i<count($mang1);$i++){
    $mang3[$i] = $mang1[$i];
};
for($j=0;$j<count($mang2);$j++){
    $mang3[$j + count($mang1)] = $mang2[$j];
}
echo '<pre>';
    print_r( $mang3 );
echo '</pre>';
?>