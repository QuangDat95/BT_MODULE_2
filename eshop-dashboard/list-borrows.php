<?php include 'layout/header.php'; ?>
<?php include 'layout/menu.php'; ?>
<?php include 'ketnoicsdl.php'; ?>
<?php
    $sql = "SELECT * FROM `muon_sach`
    JOIN sinhvien  ON muon_sach.ID_SV = sinhvien.ID_Sv
    JOIN sach ON muon_sach.ID_sach = sach.ID_sach";

    $sql = "SELECT muon_sach.ID_muon_sach, muon_sach.ngay_muon, sinhvien.Ten_SV, sach.Ten_sach  FROM `muon_sach`
    JOIN sinhvien  ON muon_sach.ID_SV = sinhvien.ID_Sv
    JOIN sach ON muon_sach.ID_sach = sach.ID_sach";

    //thực hiện truy vấn
    $stmt  = $connect->query( $sql );
    //tùy chọn kiểu trả về
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    //lấy tất cả kết quả
    $rows   = $stmt->fetchAll();
?>
<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="list-products.php">Sách đã mượn</a></li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12 search">
                <form>
                    <input type="text" class="span11" placeholder="Nhập từ cần tìm" name="search"/>
                    <button class="btn span1" type="submit">Tìm</button>
                </form>
            </div>
        </div>
        <!-- /row-fluid-->
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Sách đã mượn</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                    <a href="add-borrows.php" class="btn btn-add">Thêm</a>
                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="checkAll"/></th>
                            <th class="sorting"><a href="#">ID</a></th>
                            <th class="sorting"><a href="#">Tên sách</a></th>
                            <th class="sorting"><a href="#">Tên Sinh viên</a></th>
                            <th class="sorting"><a href="#">Ngày mượn</a></th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!--Start loop-->
                        <?php foreach($rows as $key => $row):?>
                        <?php 
                        $row->ngay_muon = date('d-m-Y', strtotime($row->ngay_muon));
                        ?>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td><?php echo $row->ID_muon_sach;?></td>
                            <td><?php echo $row->Ten_sach;?></td>
                            <td><?php echo $row->Ten_SV;?></td>
                            <td><?php echo $row->ngay_muon;?></td>
                            <td>
                            <a href="edit-borrows.php?id=<?php echo $row->ID_muon_sach;?>" class="btn btn-info">Sửa</a>
                            <a href="delete-borrow.php?id=<?php echo $row->ID_muon_sach;?>" class="btn btn-info">Xóa</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="bulk-action">
                        <a href="#" class="btn btn-success">Kích hoạt</a>
                        <a href="#" class="btn btn-danger">Xóa</a>
                    </div><!-- /bulk-action-->
                    <div class="dataTables_paginate">
                        <a class="first paginate_button paginate_button_disabled" href="#">First</a>
                        <a class="previous paginate_button paginate_button_disabled" href="#">Previous</a>
                        <span>
                            <a class="paginate_active" href="#">1</a>
                            <a class="paginate_button" href="#">2</a>
                        </span>
                        <a class="next paginate_button" href="#">Next</a>
                        <a class="last paginate_button" href="#">Last</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="dr"><span></span></div>
    </div>
</div>
<?php include "layout/footer.php";?>