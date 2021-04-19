<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Danh sách khách hàng</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th,td{
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
    </style>
</head>
<body>
    <table border="0">
        <caption><h1>Danh sách khách hàng</h1></caption>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Ảnh</th>
            </tr>
    </body>
    <?php
    $customerlist = array(
        "1" => array("ten" => "Mai Thị Tuyết Nhi",
                    "ngaysinh" => "20-09-2000",
                    "diachi" => "Hà Nội",
                    "anh" => "images/img1.jpg"),
        "2" => array("ten" => "Nguyễn Thị Thảo",
                    "ngaysinh" => "14-12-1999",
                    "diachi" => "Bắc Giang",
                    "anh" => "images/img2.jpg"),
        "3" => array("ten" => "Nguyễn Thị Mơ",
                    "ngaysinh" => "25-03-2001", 
                    "diachi" => "Nam Định",
                    "anh" => "images/img3.jpg"),
        "4" => array("ten" => "Trần Thị Hà Thu",
                    "ngaysinh" => "23-02-1998", 
                    "diachi" => "Hà Tây",
                    "anh" => "images/img4.jpg"),
        "5" => array("ten" => "Nguyễn Thị Hoa",
                    "ngaysinh" => "20-02-2002",
                    "diachi" => "Hà Nội",
                    "anh" => "images/img5.jpg")
    );
        foreach($customerlist as $key => $values){
            echo "<tr>";
            echo "<td>".$key."</td>";
            echo "<td>".$values['ten']."</td>";
            echo "<td>".$values['ngaysinh']."</td>";
            echo "<td>".$values['diachi']."</td>";
            echo "<td><image src ='".$values['anh']."' width = '60px' height = '60px'/></td>";
            echo "</tr>";
        }
    ?>
    </table>
    </body>
</html>