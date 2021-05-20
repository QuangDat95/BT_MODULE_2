<?php include 'layout/header.php'; ?>
<?php include 'layout/menu.php'; ?>
<?php include 'ketnoicsdl.php'?>
<?php
    //lấy id truyền qua
    $id = $_GET['id'];//10
    

    // lấy 1 kết quả duy nhất từ thể loại dựa vào id sinh viên
    $sql    = "SELECT * FROM sinhvien WHERE ID_Sv = $id ";
    $stmt   = $connect->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $row    = $stmt->fetch();

    //kiểm tra xử lý khi submit form với method POST
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        //lấy giá trị gán vào biến
        $Ten_SV = $_REQUEST['Ten_SV'];
        $So_dt = $_REQUEST['So_dt'];
        //cập nhật dữ liệu
        $sql    = "UPDATE sinhvien SET Ten_SV = '$Ten_SV', So_dt = '$So_dt' WHERE ID_Sv = $id";
        $stmt   = $connect->query( $sql );

        //chuyển hướng về trang danh sách
        header("Location:list-users.php");
    }
?>
<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="list-users.php">Danh sách Sinh viên</a> <span class="divider">></span></li>
            <li class="active">Sửa</li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Cập nhật Sinh viên</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="" method="POST">
                    	<div class="row-form">
                            <div class="span3">Tên Sinh viên:</div>
                            <div class="span9"><input type="text" name="Ten_SV" placeholder="Nhập lại tên"
                             value="<?php echo $row->Ten_SV; ?>"/></div>
                            <div class="clear"></div>
                        </div> 
                    	<div class="row-form">
                            <div class="span3">Số điện thoại:</div>
                            <div class="span9"><input type="text" name="So_dt" placeholder="Nhập lại SĐT"
                            value="<?php echo $row->So_dt; ?>"/></div>
                            <div class="clear"></div>
                        </div> 
                        <div class="row-form">
                            <div class="span3">Kích hoạt:</div>
                            <div class="span9">
                                <select name="select">
                                    <option value="0">--Chọn mục--</option>
                                    <option value="1">Kích hoạt</option>
                                    <option value="2">hủy bỏ</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>                          
                        <div class="row-form">
                        	<button class="btn btn-success" type="submit">Cập nhật</button>
							<div class="clear"></div>
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="dr"><span></span></div>
    </div>
</div>
<?php include "layout/footer.php"; ?>