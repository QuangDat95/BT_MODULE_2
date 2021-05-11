<?php
    /*
    g: tìm kiếm toàn chuổi
    i: ko phân biệt hoa thường
    m: multi line
    */
    $cau_chao_mung = 'Hello giá trị mới giá trị mới';
    $pattern = '/Hello/g';


    $string     = 'Giá giá trị mới giá Trị mới giá 123';
    //AAiá giá trị mới giá AArị mới giá 123
    $pattern    = '/[A-Z]/';

    //preg_match
    //$tim_thay   = preg_match($pattern,$string,$matches);
    //$tim_thay    = preg_match_all($pattern,$string,$matches);
    //$tim_thay    = preg_split($pattern,$string);
    $tim_thay    = preg_replace($pattern,'AA',$string);

    echo '<pre>';
        print_r( $tim_thay );
    echo '</pre>';