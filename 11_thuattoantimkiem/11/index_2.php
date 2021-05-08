<?php
    $array = [1,6,6,8,9,3,22,44,77,10,92,12];
    sort($array);
    $find  = 6;

    $startIndex = 0;
    $endIndex   = count($array) - 1;


    $i = 0;
    while( $startIndex <= $endIndex ){
        $midIndex   = ($endIndex + $startIndex) / 2;
        $midIndex   = (int)$midIndex;

        
        if( $array[$midIndex] < $find ){
            //mảng tìm kiếm nằm bên phải, startIndex đặt lại
            $startIndex = $midIndex + 1;
        }else{
            //mảng tìm kiếm nằm bên trái, endIndex đặt lại
            $endIndex   = $midIndex - 1;
        }
        
        if( $array[$midIndex] == $find ){
            echo $midIndex .' - '.$find;
            break;
        }
        $i++;
    }