<?php
    $array = [1,4,6,8,9,3,22,44,77,10,92,12];
    
    /*
    echo '<pre>';
        print_r( $array );
    echo '</pre>';

    foreach( $array as $key => $value ){
        echo '<br>'.$key;
        if( $value == $find ){
            echo '<br> Found '.$key.' - '.$find;
            break;
        }
    }
    */


    sort($array);

    $find  = 77;
    $startIndex = 0;
    $endIndex   = count($array) - 1;
    $midIndex   = ($endIndex + $startIndex) / 2;

    //ép kiểu int
    $midIndex   = (int)$midIndex;

    //kiểm tra mảng tiếp theo nằm ở đâu
    if( $array[$midIndex] < $find ){
        //mảng tìm tiếp bên phải
        $startIndex = $midIndex + 1;
        $midIndex   = ($endIndex + $startIndex) / 2; //11 + 6 / 2
        $midIndex   = (int)$midIndex;
        
        if( $array[$midIndex] < $find ){

            $startIndex = $midIndex + 1;//9
            $midIndex   = ($endIndex + $startIndex) / 2; //11 + 9 / 2 = 10
            $midIndex   = (int)$midIndex;

        }elseif( $array[$midIndex] > $find ){
            //bên trái
        }else{
            //tìm thấy 44
        }

    }elseif( $array[$midIndex] > $find ){
        //bên trái
    }else{
        //tìm thấy
    }

    var_dump($midIndex);

    echo '<pre>';
        print_r( $array );
    echo '</pre>';
