<?php include 'layout/header.php'; ?>
<?php include 'layout/menu.php'; ?>
<?php include 'ketnoicsdl.php'?>
<?php
//kiểm tra xử lý khi submit form
if($_SERVER['REQUEST_METHOD']=='POST'){
    //lấy giá trị gán vào biến
    $Ten_SV = $_REQUEST['Ten_SV'];
    $So_dt = $_REQUEST['So_dt'];
 //xác thực dl
 if($Ten_SV !='' && $So_dt != ''){
     //chèn dữ liệu vào
$sql = " INSERT INTO sinhvien ( Ten_SV, So_dt ) VALUES ( '$Ten_SV', '$So_dt' ) ";
$stmt = $connect->query($sql);
//chuyển hướng về trang danh sách
header("location: list-users.php");
 }
}
?>
<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="list-users.php">Danh sách Sinh viên</a> <span class="divider"></span></li>
            <li class="active">Thêm Sinh viên</li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Thêm Sinh viên</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="" method="POST">
                    	<div class="row-form">
                            <div class="span3">Tên Sinh viên:</div>
                            <div class="span9"><input type="text" name="Ten_SV" placeholder="Nhập tên Sinh viên"/></div>
                            <div class="clear"></div>
                        </div> 
                    	<div class="row-form">
                            <div class="span3">Số điện thoại:</div>
                            <div class="span9"><input type="text" name="So_dt" placeholder="Nhập số điện thoại"/></div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">Activate:</div>
                            <div class="span9">
                                <select name="select">
                                    <option value="0">choose a option...</option>
                                    <option value="1">Activate</option>
                                    <option value="2">Deactivate</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>                          
                        <div class="row-form">
                        	<button class="btn btn-success" type="submit">Thêm</button>
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
<? include "layout/footer.php";?>