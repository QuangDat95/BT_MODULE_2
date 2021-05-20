<?php  include 'ketnoicsdl.php'; ?>
<?php 
    // //lấy id được truyền qua
    // $id = $_GET['id'];//10

    // //xóa dữ liệu
    // $sql    = "DELETE FROM sach WHERE ID_sach = $id";
    // $stmt   = $connect->query( $sql );
    // //chuyển hướng về trang danh sách
    // header("Location:list-products.php");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['confirm'] == 'Yes') {
            $id = $_GET['id'];
             $sql = "DELETE FROM sach WHERE ID_sach = $id";
             $stmt   = $connect->query( $sql );
            //chuyển hướng về trang danh sách
            header("Location:list-borrows.php");
        }else{
            header("Location:list-borrows.php");
        }
    }
?>
<form action="" method="post">
    Bạn có muốn xóa cuốn sách này?
    <input type="submit" name="confirm" value="Có">
    <input type="submit" name="confirm" value="Không">
</form>