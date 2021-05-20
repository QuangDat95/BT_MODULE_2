<?php  include 'ketnoicsdl.php'; ?>
<?php 
    //lấy id được truyền qua
    // $id = $_GET['id'];//10

    // //xóa dữ liệu
    // $sql    = "DELETE FROM the_loai WHERE ID_danh_muc = $id";
    // $stmt   = $connect->query( $sql );

    // //chuyển hướng về trang danh sách
    // header("Location:list-categories.php");
?>
<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     if ($_POST['confirm'] == 'Yes') {
         $id = $_GET['id'];
          $sql = "DELETE FROM the_loai WHERE ID_danh_muc = $id";
          $stmt   = $connect->query( $sql );
         //chuyển hướng về trang danh sách
         header("Location:list-borrows.php");
     }else{
         header("Location:list-borrows.php");
     }
 }
?> 
<form action="" method="post">
    Bạn có muốn xóa loại sách này?
    <input type="submit" name="confirm" value="Có">
    <input type="submit" name="confirm" value="Không">
</form>