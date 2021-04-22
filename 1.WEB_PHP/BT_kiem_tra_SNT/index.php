<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    for($n = 2; $n <= 100; $n++){
        $count_uoc_so = 0;
        $y=2;
        while($y<=100){
            $y++;
            if($n%$y == 0 && $y<=$n){
                $count_uoc_so++;
            }
        }
        if($count_uoc_so == 1){
            echo $n.'<br>';
        }
    }
?>
</body>
</html>