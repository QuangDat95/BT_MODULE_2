<?php

function tim_gia_tri_nho_nhat($mang_so_nguyen){
    $min = $mang_so_nguyen[0];
    $index = 0;
   for($i=0; $i<count($mang_so_nguyen);$i++){

       if($mang_so_nguyen[$i] < $min){

           $min = $mang_so_nguyen[$i];
           $index = $i;
       }
   }
   return $index;
}
$day_so = [1,-1,5,8,2,6,9,0];
$chi_so = tim_gia_tri_nho_nhat($day_so);

echo "chỉ số tìm thấy là: {$chi_so}";