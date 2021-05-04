<?php
include_once "Node.php";
include_once "Queue.php";

$queue = new Queue();
//thêm 3 phần tử
$queue->enqueue("Bàn");
$queue->enqueue("Ghế");
$queue->enqueue("Bút");

echo '<pre>';
    print_r( $queue );
echo '</pre>';
//lấy 2 phần tử
echo $queue->dequeue()."<br>";
echo $queue->dequeue()."<br>";

echo '<pre>';
    print_r( $queue );
echo '</pre>';
//kiểm tra rỗng
echo $queue->isEmpty();
//thêm 2 phần tử
$queue->enqueue("Thước");
$queue->enqueue("Sách");

echo '<pre>';
    print_r( $queue );
echo '</pre>';
//lấy 3 phần tử
echo $queue->dequeue()."<br>";
echo $queue->dequeue()."<br>";
echo $queue->dequeue()."<br>";

echo '<pre>';
    print_r( $queue );
echo '</pre>';
//kiểm tra rỗng
$queue->isEmpty();