<?php
class ConNguoi{
    protected string $ten = 'Nguyễn Văn A';
    public $tuoi = 18;

    public function goi_ten(){
        echo '<br>'.$this->ten;
    }
    public function di_chuyen(){
        echo '<br>'.__METHOD__;
    }

    final public function giao_tiep(){//final ko cho ghi đè, chỉ kế thừa
        echo '<br> Giao tiếp TV';
    }
}
//thừa kế vs từ khóa extends ten_class_cha
class SinhVien extends ConNguoi {
    //public function giao_tiep(){//final ko cho ghi đè, chỉ kế thừa
       // echo '<br> Giao tiếp TV';
      //  echo '<br> Giao tiếp TA';
      public function di_chuyen(){
          //gọi tới pthuc cha voi tư khoa parent::
        parent::di_chuyen();
        //gọi tới pthuc cha vs tư khoa là ten_class_cha::
        ConNguoi::di_chuyen();
    }
    public function __construct(){
        //
        echo '<br>'.$this->ten;
    }
    }


//khởi tạo đối tượng SINHVIEN
$objSinhVien = new SinhVien();

//gọi tới 2 thuộc tính
echo '<br>'.$objSinhVien->goi_ten();
echo '<br>'.$objSinhVien->tuoi;
$objSinhVien->di_chuyen();
$objSinhVien->giao_tiep();