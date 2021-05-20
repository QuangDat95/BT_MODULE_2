<?php include 'layout/header.php'; ?>
<?php include 'layout/menu.php'; ?>
<?php include 'ketnoicsdl.php';?>
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

    // lấy 1 kết quả duy nhất từ muonsach dựa vào ID muon sach
    $id     = $_GET['id'];
    $sql    = "SELECT * FROM muon_sach WHERE ID_muon_sach = $id ";
    $stmt   = $connect->query( $sql );
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $row    = $stmt->fetch();

    //xử lý lưu dữ liệu
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $ID_sach    = $_REQUEST['ID_sach'];
        $ID_SV      = $_REQUEST['ID_SV'];
        $ngay_muon  = $_REQUEST['ngay_muon'];

        //cập nhật dữ liệu
        $sql = "UPDATE muon_sach SET ID_sach =$ID_sach, ID_SV   = $ID_SV, ngay_muon = '$ngay_muon' WHERE ID_muon_sach = $id";
        $stmt = $connect->query( $sql );

         //chuyển hướng về trang danh sách
         header("Location: list-borrows.php");       
    }
?>
<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="list-borrows.php"> Sách Đã Mượn </a> <span class="divider"></span></li>
            <li class="active">Thêm</li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Sửa</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="" method="POST">                      
                        <div class="row-form">
                            <div class="span3">Sách:</div>
                            <div class="span9">
                                <select name="ID_sach">
                                    <option value="0">Chọn Sách</option>
                                    <?php foreach( $sachs as $sach ):?>
                                    <option 
                                    value="<?php echo $sach->ID_sach ;?>"
                                    <?php 
                                        if( $row->ID_sach == $sach->ID_sach ){
                                            echo 'selected';
                                        }
                                    ?>
                                    ><?php echo $sach->Ten_sach ;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">Sinh Viên:</div>
                            <div class="span9">
                                <select name="ID_SV">
                                    <option value="0">Chọn Sinh Viên</option>
                                    <?php foreach( $sinhviens as $sinhvien ):?>
                                    <option 
                                    value="<?php echo $sinhvien->ID_Sv ;?>"
                                    <?php 
                                        if( $row->ID_SV == $sinhvien->ID_Sv ){
                                            echo 'selected';
                                        }
                                    ?>
                                    ><?php echo $sinhvien->Ten_SV ;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">Ngày Mượn:</div>
                            <div class="span9">
                                <input type="date" name="ngay_muon" 
                                value="<?php echo $row->ngay_muon;?>"
                                />
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
<?php  include 'layout/footer.php'; ?>