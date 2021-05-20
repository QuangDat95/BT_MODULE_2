<?php include 'layout/header.php'; ?>
<?php include 'layout/menu.php'; ?>
<?php include 'ketnoicsdl.php'?>
<?php
//Lấy tất cả danh mục sách
    $sql   = "SELECT * FROM the_loai";
    $stmt  = $connect->query( $sql );
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $the_loais   = $stmt->fetchAll();

//kiểm tra xử lý khi submit form
if($_SERVER['REQUEST_METHOD']=='POST'){
    //lấy giá trị gán vào biến
    $Ten_sach = $_REQUEST['Ten_sach'];
    $ID_danh_muc = $_REQUEST['ID_danh_muc'];
 //xác thực dl
  if($Ten_sach !='' && $ID_danh_muc != ''){
     //chèn dữ liệu vào
$sql = " INSERT INTO sach ( Ten_sach, ID_danh_muc ) VALUES ('$Ten_sach', '$ID_danh_muc') ";
$stmt = $connect->query($sql);
//chuyển hướng về trang danh sách
header("Location: list-products.php");
 }
}
?>
<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="list-products.php">Danh mục sách</a> <span class="divider"></span></li>
            <li class="active">Thêm</li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>thêm sách</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="" method="POST">
                    	<div class="row-form">
                            <div class="span3">Tên Sách:</div>
                            <div class="span9"><input type="text" name="Ten_sach" placeholder="Nhập tên sách"/></div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">ID danh mục:</div>
                            <div class="span9">
                            <select name="ID_danh_muc">
                                    <option value="0">Chọn danh mục</option>
                                    <?php foreach($the_loais as $the_loai):?>
                                    <option value="<?php echo $the_loai->ID_danh_muc;?>">
                                    <?php echo $the_loai->Ten_danh_muc; ?>
                                    </option>
                                    <?php endforeach;?>
                            </select>
                            </div>
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
                        	<button class="btn btn-success" type="submit">Lưu</button>
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