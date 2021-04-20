<?php
    //var_dump();

    //method GET
    // echo '<pre>';
    // print_r( $_GET );
    // echo '</pre>';

    // echo '<hr>';

    //method POST
    // echo '<pre>';
    // print_r( $_POST );
    // echo '</pre>';

    //method POST hoăc GET
    // echo '<hr>';
    // echo '<pre>';
    // print_r( $_REQUEST );
    // echo '</pre>';

    // echo 'Tên đăng nhập:    '.$_REQUEST['ten_dang_nhap'];//mở hộp $_REQUEST ngăn ten_dang_nhap
    // echo '<br>';
    // echo 'Mật khẩu:         '.$_REQUEST['mat_khau'];
    //IN RA MẢNG
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
    //kiểm tra phương thức post và get thông qua
    // if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // }
    // if($_SERVER['REQUEST_METHOD'] == 'GET'){

    // }
    //dừng chương trình
    //die();//exit;
    //sau die() or exit ko xử lý
   // echo "text";
   $id= $_GET['id'];
   echo "khóa học có id là {$id}";
?>