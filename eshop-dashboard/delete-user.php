<?php  include 'ketnoicsdl.php'; ?>
<?php 
    // //lấy id được truyền qua
    // $id = $_GET['id'];//10

    // //xóa dữ liệu
    // $sql    = "DELETE FROM sinhvien WHERE ID_Sv = $id";
    // $stmt   = $connect->query( $sql );
    // //chuyển hướng về trang danh sách
    // header("Location:list-users.php");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['confirm'] == 'Yes') {
            $id = $_GET['id'];
             $sql = "DELETE FROM sinhvien WHERE ID_Sv = $id";
             $stmt   = $connect->query( $sql );
            //chuyển hướng về trang danh sách
            header("Location:list-borrows.php");
        }else{
            header("Location:list-borrows.php");
        }
    }
?>
<form action="" method="post">
    Bạn có muốn xóa sinh viên này?
    <input type="submit" name="confirm" value="Có">
    <input type="submit" name="confirm" value="Không">
</form>