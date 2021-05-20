 <?php // include 'ketnoicsdl.php'; ?>
<?php 
//lấy id được truyền qua
// $id = $_GET['id'];//10
// $sql    = "DELETE FROM muon_sach WHERE ID_muon_sach = $id";
// $stmt   = $connect->query( $sql );
//chuyển hướng về trang danh sách
//header("Location:list-borrows.php");
?> 


<?php  include 'ketnoicsdl.php'; ?>
<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     if ($_POST['confirm'] == 'Yes') {
         $id = $_GET['id'];
          $sql = "DELETE FROM muon_sach WHERE ID_muon_sach = $id";
          $stmt   = $connect->query( $sql );
         //chuyển hướng về trang danh sách
         header("Location:list-borrows.php");
     }else{
         header("Location:list-borrows.php");
     }
 }
?> 
<form action="" method="post">
    Bạn muốn xóa người mượn sách này?
    <input type="submit" name="confirm" value="Có">
    <input type="submit" name="confirm" value="Không">
</form>

