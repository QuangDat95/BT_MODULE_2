<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lãi suất năm</title>
</head>
<body>
    <form action="" method="POST">
    <p>Số tiền đầu tư</p><input type="number" name="tien_dau_tu"/>
    <p>Lãi hằng năm</p><input type="number" name="lai_suat_nam"/>
    <p>Số năm đầu tư</p><input type="number" name="nam_dau_tu"/>
    <input type="submit" value="Calculator"/>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $dau_tu = $_POST["tien_dau_tu"];
            $lai_suat = $_POST["lai_suat_nam"];
            $so_nam = $_POST["nam_dau_tu"];
            $tuong_lai = $dau_tu;
            for($i=1;$i<=$so_nam;$i++){
                $tuong_lai = $tuong_lai + ($tuong_lai*$lai_suat/100);
            }
            echo "Số tiền đầu tư trong vòng {$so_nam} năm là: {$tuong_lai} đồng";
        }
    ?>
</body>
</html>