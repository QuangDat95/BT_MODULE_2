<?php
//lớp trừu tượng là lớp có từ khóa abstract phía trước
//nếu trong lớp có các phương thức trừu tượng, thì lớp đó phải là lớp trừu tượng abstract class
//chỉ có thể khai báo phương thức trừu tượng với mức độ truy cập là public và protected
abstract class Hinhhoc{
    //lớp trừu tượng là lớp có từ khóa abstract phía trước, nó ko có phần thân
   abstract public function tinh_chu_vi();
   abstract public function tinh_dien_tich();

   //có thể khai báo những thuộc tính và phương thức bình thường

   public $ten_thuoc_tinh = "";
   public function ve_hinh($ten_hinh, $mau_sac = ''){
    echo "Vẽ hình học {$ten_hinh}";
   }
}

//khi thừa kế từ một lớp trừu tượng (abstract class)
class Hinhvuong extends Hinhhoc{
    public function tinh_chu_vi(){

    }
    public function tinh_dien_tich(){

    }
    public function ve_hinh($ten_hinh, $mau_sac = ''){
        echo "vẽ hình vuông {$ten_hinh} nó có màu {$mau_sac}";
    }
}
$objHinhvuong = new Hinhvuong();
$objHinhvuong->ve_hinh('ABCD', 'đỏ');