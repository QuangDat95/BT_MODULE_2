<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị SNT tùy ý</title>
</head>
<body>
    <form action=" " method="POST">
        <input type="number" name="so" placeholder="Nhập số lượng"/>
        <input type="submit" value="In ra màn hình"/>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
           $number = $_POST["so"];
            $count = 0;
            $N=2;
                while($count<$number){
                    $count_uoc_so = 0;
                    for($y=2;$y <= $N;$y++){
                    if($N % $y == 0 && $y <= $N){
                        $count_uoc_so++;
                        } 
                    } 
                    if($count_uoc_so == 1){
                        echo $N.'<br>'; 
                        $count++;               
                } 
                $N++;                            
    }        
}
    ?>
</body>
</html>