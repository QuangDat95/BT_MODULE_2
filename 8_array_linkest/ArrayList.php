<?php
/*
    Là một cấu trúc dữ liệu danh sách
    Kích thước có thể thay đổi
    Truy xuất nhanh
    Thao tác thêm sửa xóa chậm vì có sự dịch chuyển phần tử

    Các thao tác cơ bản của ArrayList
        get($index): Lấy về một phần tử
        add($obj): Thêm một phần tử
        remove(): Xoá một phần tử
        size(): Lấy về số lượng phần tử
        find(): Tìm kiếm phần tử
        isEmpty(): Kiểm tra rỗng
*/
/*
 Các thần phần:
    Container: Lớp chứa dữ liệu, và các phương thức thao tác
    Elements: Là các phần tử dữ liệu
*/
class ArrayList{
    private $elements = [];
    private const EMPTY_VALUE = 0;

    public function get( $index ){
        return $this->elements[$index];
    }
    public function add( $obj ){
        $this->elements[] = $obj;
    }
    public function remove( $index ){
        array_splice($this->elements,$index,1);
    }
    public function size(){
        return count( $this->elements );
    }
    public function find( $obj ){
        return array_search( $obj, $this->elements );
    }
    public function isEmpty(){
        if( $this->size() == $this::EMPTY_VALUE ){
            return true;
        }
        return false;
    }
}

$objArrayList = new ArrayList();

// add(): Thêm một phần tử
$objArrayList->add( 'Hùng' );
$objArrayList->add( 'Đạt' );
$objArrayList->add( 'A Hà' );
$objArrayList->add( 'Hoàn' );
$objArrayList->add( 'Châu' );
$objArrayList->add( 'Thảo' );
$objArrayList->add( 'Ngọc Anh' );

echo '<pre>';
    print_r( $objArrayList );
echo '</pre>';

//get( $index ): Lấy về một phần tử
$obj = $objArrayList->get(2);
echo $obj;

//remove( $index ): Xoá một phần tử
$objArrayList->remove( 5 );

echo '<pre>';
    print_r( $objArrayList );
echo '</pre>';

// size(): Lấy về số lượng phần tử
$countElements = $objArrayList->size();

echo $countElements;//6

echo '<br>';
//find(): Tìm kiếm phần tử
$indexOfValue =  $objArrayList->find('Ngọc Anh');
echo $indexOfValue;

echo '<br>';
$isEmpty = $objArrayList->isEmpty();

var_dump($isEmpty);


