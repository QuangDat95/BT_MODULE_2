<?php include 'layout/header.php'; ?>
<?php include 'layout/menu.php'; ?>
<?php include 'ketnoicsdl.php'?>
<?php
//Lấy tất cả thể loại
$sql = "SELECT * FROM sach";
//thực hiện truy vấn
$stmt = $connect->query($sql);
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy kết quả
$rows = $stmt->fetchAll();
?>
<div class="content">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="list-products.php">Danh sách books</a></li>
        </ul>
    </div>
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12 search">
                <form>
                    <input type="text" class="span11" placeholder="Nhập từ cần tìm kiếm" name="search"/>
                    <button class="btn span1" type="submit">Tìm</button>
                </form>
            </div>
        </div>
        <!-- /row-fluid-->
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Quản lý Sách</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                    <a href="add-product.php" class="btn btn-add">Thêm Sách</a>
                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="checkAll"/></th>
                            <th class="sorting"><a href="#">ID</a></th>
                            <th class="sorting"><a href="#">Tên sách</a></th>
                            <th class="sorting"><a href="#">ID danh mục</a></th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!--Start loop-->
                        <?php foreach($rows as $key => $row):?>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td><?php echo $row->ID_sach;?></td>
                            <td><?php echo $row->Ten_sach;?></td>
                            <td><?php echo $row->ID_danh_muc;?></td>
                            <td>
                            <a href="edit-product.php?id=<?php echo $row->ID_sach;?>" class="btn btn-info">Sửa</a>
                            <a href="delete-product.php?id=<?php echo $row->ID_sach;?>" class="btn btn-info">Xóa</a>
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