<?php
$username = 'root';//tên đăng nhập csdl
$password = '';//mật khẩu
//kết nối csdl 
$connect = new PDO('mysql:host=localhost;dbname=thu_vien', $username, $password);
//Lấy tất cả thể loại
$sql = "SELECT * FROM the_loai";
//thực hiện truy vấn
$stmt = $connect->query($sql);
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy kết quả
$rows = $stmt->fetchAll();

//lấy 1 kq duy nhat tu the loai dua vao id danh muc
$sql = "SELECT * FROM the_loai WHERE ID_danh_muc = 1";
$stmt = $connect->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$row = $stmt->fetch();

//chèn dữ liệu vào
$sql = " INSERT INTO the_loai ( Ten_danh_muc ) VALUES ( 'Sinh học' ) ";
//$stmt = $connect->query($sql);

//Cập nhật
$sql = "UPDATE the_loai SET Ten_danh_muc = 'Sinh học 1' WHERE ID_danh_muc = 8";
//$stmt = $connect->query($sql);

//xóa
$sql = "DELETE FROM the_loai WHERE ID_danh_muc = 8";
//$stmt = $connect->query($sql);

$sql = "DELETE FROM the_loai WHERE ID_danh_muc = 10";
//$stmt = $connect->query($sql);

$sql = "INSERT INTO the_loai (Ten_danh_muc) VALUES ('Sinh học')";
$stmt = $connect->query($sql);