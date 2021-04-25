<?php
class ConNguoi {
    private     $id     = 123;
    protected   $sex    = 'male';
}

class SinhVien extends ConNguoi {
    //thuộc tính
    public      $name   = '';
    private     $age    = 18;

    //thành phần tĩnh
    static      $ho_va_ten = 'Hùng';
        
    //các phương thức
    public function __construct(){
        //echo $this->sex;
    }

    static function get_ho_va_ten(){
        echo '<br> get_ho_va_ten';
        echo self::retros_sang();
    }

    public static function retros_sang(){
        echo '<br> retros_sang()';
        echo self::$ho_va_ten;
    }
    
    public function learn(){
        echo '<br> 123 learn()';

    }

    public function setAge( $tham_so_age ){
        $this->age = $tham_so_age;
    }

    public function getAge(){
        return $this->age;
    }
    public function setSex( $tham_so_sex ){
        $this->sex = $tham_so_sex;
    }
    public function getSex(){
        return $this->sex;
    }
    public function retros(){
        echo '<br> retros()';
        //goi toi phuong thuc khac
        $this->retros_chieu();
    }

    private function retros_chieu(){
        echo '<br> retros_chieu()';
    }
}
//khởi tạo đối tượng
$objSinhVien = new SinhVien();

//truy cập thuộc tính sex


//truy xuất thuộc tính $age;
echo $objSinhVien->setAge(20);
echo $objSinhVien->getAge();
//truy xuat thuoc tinh sex
echo $objSinhVien->setSex('female');
echo $objSinhVien->getSex();
//truy xuất phương thức
$objSinhVien->retros();

//truy xuất thuộc tính ho_va_ten
echo SinhVien::$ho_va_ten;

//truy xuất phương thức static get_ho_va_ten
SinhVien::get_ho_va_ten();
