<?php
class MyList{
    public int      $size     = 0;
    public array    $elements = [];
    //chèn - chỉ số, đối tượng (chuỗi,số,... ) 
    public function insert($index, $obj) :void{

    }
    //thêm vào - đối tượng
    public function add($obj) :void{
        $this->elements[] = $obj;
        //array_push($this->elements,$obj);
    }
    //xóa - chỉ số
    public function remove($index) :void{
        //unset($this->elements[$index]);
        array_splice($this->elements,$index,1);
    }
    //lấy - chỉ số
    public function get($index) :string{
        return $this->elements[$index];
    }
    //làm sạch
    public function clear() :void{
        $this->elements = [];
    }
    //thêm tất cả
    public function addAll($arr) :array{
        return $this->elements = $arr;
    }
    //chỉ số của - đối tượng
    public function indexOf($obj) :int{
        return array_search($obj, $this->elements);
    }
    //có phải là trống?
    public function isEmpty() :bool{
        $isEmpty = false;
        if(count($this->elements) == 0){
            $isEmpty = true;
        }else{
            return $isEmpty;
        }
    }
    //sắp xếp
    public function sort() :bool{
        return sort($this->elements);
    }
    //lấy phần tử đầu tiên
    public function reset(){
        return reset($this->elements);

    }
    //kích thước mảng
    public function size() :int{
        return count($this->elements);
    }
}

$objMyList = new MyList();
//thêm các phần tử vào danh sách
$objMyList->add("Hùng");
$objMyList->add("Đạt");
$objMyList->add("a.Hà");
$objMyList->add("Hoàn");
$objMyList->add("Châu");
$objMyList->add("Ngọc Anh");
$objMyList->add("Thảo");
$objMyList->add("Tâm");
//xóa Ngọc Anh
$objMyList->remove(5);
//lấy Thảo
//echo $objMyList->get(5);
//clear
$objMyList->clear();
$hvs = [
    'Hùng', 'Đạt', 'Anh Hà', 'Hoàn', 'Châu'
    //0        1       2        3       4
];
$objMyList->addAll($hvs);

echo $objMyList->indexOf('Hoàn');
echo $objMyList->isEmpty();
echo $objMyList->sort();
echo $objMyList->reset();
echo $objMyList->size();
echo '<pre>';
    print_r( $objMyList );
echo '</pre>';