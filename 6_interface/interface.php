<?php
//tạo ra 1 interface bằng từ khóa interface TEN_INTERFACE
//Nó không phải là lớp
interface HinhHoc{
    //các phương thức đều là trừu tượng - không có phần thân
    public function tinh_chu_vi();
    public function tinh_dien_tich();

    //không thể khai báo các pthuc bthuong
    //public $ten_thuoc_tinh = "";//error
    //chỉ có thể khai báo hằng số
    const TEN_THUOC_TINH = '';

}

//khi sử dụng từ một interface (interface TEN_INTERFACE) 
//cần phải khai báo toàn bộ các phương thức trừu tượng
class Hinhvuong implements Hinhhoc{
    public function tinh_chu_vi(){

    }
    public function tinh_dien_tich(){

    }
    // public function ve_hinh($ten_hinh, $mau_sac = ''){
    //     echo "vẽ hình vuông {$ten_hinh} nó có màu {$mau_sac}";
    // }
}
// $objHinhvuong = new Hinhvuong();
// $objHinhvuong->ve_hinh('ABCD', 'đỏ');
