<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
    <input type="submit" value="Exit"/>
</form>
<?php
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo '* ';
    }
    echo '<br>';
}
echo '<br>';
for($k=5;$k>=1;$k--){
    for($l=1;$l<=$k;$l++){
        echo '* ';
    }
    echo '<br>';
}
?>
</body>
</html>