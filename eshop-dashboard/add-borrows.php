<?php include 'layout/header.php';?>
<?php include 'layout/menu.php'; ?>
<?php include 'ketnoicsdl.php' ?>
<?php

    //Lấy tất cả sinh viên
    $sql    = "SELECT * FROM sinhvien";
    $stmt  = $connect->query( $sql );
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $sinhviens   = $stmt->fetchAll();
    
    //Lấy tất cả sách
    $sql    = "SELECT * FROM sach";
    $stmt  = $connect->query( $sql );
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $sachs   = $stmt->fetchAll();

    //xử lý lưu dữ liệu
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){

        $ID_sach    = $_REQUEST['ID_sach'];
        $ID_Sv      = $_REQUEST['ID_Sv'];
        $ngay_muon  = $_REQUEST['ngay_muon'];

        //chuyển sang định dạng Y-m-d
        $ngay_muon = date('Y-m-d', strtotime($ngay_muon) );

        //chèn dữ liệu vào
        $sql = " INSERT INTO muon_sach(ID_sach, ID_SV, ngay_muon) VALUES ( $ID_sach,$ID_Sv,'$ngay_muon')";

        $stmt   = $connect->query( $sql );

        //chuyển hướng về trang danh sách
        header("Location: list-borrows.php");
    }
?>
<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="list-categories.php">sách đã mượn</a> <span class="divider">></span></li>
            <li class="active">Thêm</li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Thêm</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="" method="POST">
                    	<div class="row-form">
                            <div class="span3">Sách:</div>
                            <div class="span9">
                                <select name="ID_sach">
                                    <option value="0">Chọn sách</option>
                                    <?php foreach($sachs as $sach):?>
                                    <option value="<?php echo $sach->ID_sach; ?>">
                                    <?php echo $sach->Ten_sach; ?>
                                    </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">Sinh viên:</div>
                            <div class="span9">
                                <select name="ID_Sv">
                                    <option value="0">Chọn sinh viên</option>
                                    <?php foreach($sinhviens as $sinhvien):?>
                                    <option value="<?php echo $sinhvien->ID_Sv;?>">
                                    <?php echo $sinhvien->Ten_SV;?>
                                    </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                        <div class="span3">Ngày Mượn:</div>
                        <div class="span9">
                            <input type="date" name="ngay_muon"/>
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
<?php include "layout/footer.php";?>