<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill sản phẩm</title>
    <style>
    table{
        border-collapse:collapse;
    }
    #td01{
        color: green;
    }
    #td02{
        color: red;
    }
    #td03{
        color: blue;
    }
    #td04{
        color: orange;
    }
    #td05{
        color: purple;
    }
    </style>
</head>
<body>
   <?php
         $ppt_pd = $_POST["properties_product"];
         $price_pd = +$_POST["price_product"];
         $percent = +$_POST["percent_product"];
         $Discount_Amount = $price_pd * ($percent /100)* 0.1;
         $Discount_Price = $price_pd - $Discount_Amount;
         echo "<table border='1'>";
         echo "<tr>";
         echo "<td id='td01'><p>Mô tả sản phẩm: </td>";
         echo "<td id='td01'>{$ppt_pd}</td>";
         echo "</tr>";
         echo "<tr>";
         echo "<td id='td02'>Giá niêm yết của sản phẩm:</td>";
         echo "<td id='td02'>{$price_pd} đồng</td>";
         echo "</tr>";
         echo "<tr>";
         echo "<td id='td03'>Tỷ lệ chiết khấu:</td>";
         echo "<td id='td03'>{$percent}%</td>";
         echo "</tr>";
         echo "<tr>";
         echo "<td id='td04'>Lượng chiết khấu:</td>";
         echo "<td id='td04'>{$Discount_Amount} đồng</td>";
         echo "</tr>";
         echo "<tr>";
         echo "<td id='td05'>Giá sau chiết khấu:</td>";
         echo "<td id='td05'>{$Discount_Price} đồng</td>";
         echo "</tr>";
         echo "</table>";
   ?>
</body>
</html>