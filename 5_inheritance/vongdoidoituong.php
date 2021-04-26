<?php
//khai báo lớp SinhVien
class SinhVien{
    public function __construct(){
        echo '<br>'.__METHOD__;
    }
    public function restros() :void {
        echo '<br>'.__METHOD__;
    }
    public function __destruct(){
        echo '<br>'.__METHOD__;
    }
}
//Khởi tạo đối tượng sinh viên
$objSinhVien = new SinhVien();

//gọi phthuc restros
$objSinhVien->restros();
/*
SinhVien::__construct
SinhVien::restros
SinhVien::__destruct
*/