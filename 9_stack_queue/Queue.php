<?php
class Queue {
    private $data = [];
    //push: đưa vào
    public function enqueue( $element ){
        array_push( $this->data,$element  );
    }
    //pop: lấy ra
    public function dequeue(){
        return array_shift( $this->data );
    }

    //lấy giá trị đầu tiên của mảng, mà ko xóa nó
    public function peek(){
        return current( $this->data );  
    }

    public function isEmpty(){
        if( count( $this->data ) == 0 ){
            return true;
        }else{
            return false;
        }
    }
}
$objQueue = new Queue();

$objQueue->isEmpty();

$objQueue->push('Hùng');
$objQueue->push('Đạt');
$objQueue->push('Anh Hà');
$objQueue->push('Châu');
$objQueue->push('Hoàn');

echo '<br>'.$objQueue->pop(); //
echo '<br>'.$objQueue->pop(); //
echo '<br>'.$objQueue->pop(); //

echo '<pre>';
    print_r( $objQueue );
echo '</pre>';

/*
    Hùng
    Đạt
    Anh Hà
    Châu
    Hoàn
*/
