<?php
class Patient{
    public $name;
    public $code;
    
}

class Node {
    public $value = [];
    public $next;
    public function __construct($name, $code)
    {
        $this->value['name'] = $name;
        $this->value['code'] = $code;
    }

}
class Queue{
    public $front   = null;
    public $back    = null;
    public function isEmpty()
    {
        return is_null($this->front);
    }

    // public function __toString()
    // {
    //     return $this->front;
    // }

    public function enqueue($name,$code)
    {
        $oldback = $this->back;
        $node = new Node($name,$code);
        $this->back = $node;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $oldback->next = $this->back;
        }
    }
    public function dequeue() 
    {
        if ($this->isEmpty()) {
            return "Null";
        }
        $removedValue = $this->front->value;
        $this->front = $this->front->next;
        return $removedValue;
    }
    public function readList()
    {
        $listData = array();
        $current = $this->front;
        while($current != NULL)
        {
            array_push($listData, $current->value);
            $current = $current->next;
        }
        return $listData;
    }
}
$objQueue = new Queue();
$objQueue->enqueue('Smith',5);
$objQueue->enqueue('Jones',4);
$objQueue->enqueue('Fehrenbach',6);
$objQueue->enqueue('Brown',1);
$objQueue->enqueue('Ingram',1);
$objQueue->enqueue('Angram',1);
$objQueue->enqueue('Angram2',1);
// echo '<pre>';
//     print_r( $objQueue );
// echo '</pre>';
$lists = $objQueue->readList();
/* IN RA MẢNG DANH SÁCH */
echo '<hr>';
echo '<pre>';
    print_r( $lists );
echo '</pre>';
/* NHÓM CÁC CODE VÀO MỘT NHÓM */
$tmp = [];
foreach ($lists as $stt => $list) {
    $tmp[$list['code']][] = $list;
}
echo '<hr>';
echo '<pre>';
    print_r( $tmp );
echo '</pre>';
/* Hàm ksort() sẽ sắp xếp các phần tử của mảng dựa vào khóa(key) */
ksort($tmp);
echo '<hr>';
echo '<pre>';
    print_r( $tmp );
echo '</pre>';
/* ĐƯA LẠI VÀO MẢNG NEW LIST */
$new_list = [];
foreach ($tmp as $key => $arr) {
    foreach ($arr as $k => $v) {
        $new_list[] = $v;
    }
}
echo '<hr>';
echo '<pre>';
    print_r( $new_list );
echo '</pre>';