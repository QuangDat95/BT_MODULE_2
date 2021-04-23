<?php
   $chuoi = "anh em la nguoi 1 nha";
   $ky_tu = "a";
   $count = 0;
   for($i=0;$i<strlen($chuoi);$i++){
       if($chuoi[$i] == $ky_tu){
           $count++;
       }
   }
   if($count>0){
    echo "Có tất cả {$count} ký tự {$ky_tu} trong chuỗi trên";
   }else{
    echo "Không có ký tự cần tìm trong chuỗi";
   }
   
?>