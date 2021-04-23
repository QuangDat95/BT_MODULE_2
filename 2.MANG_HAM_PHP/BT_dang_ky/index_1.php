<?php
    $ho_va_ten_msg  = '';
    $email_msg      = '';
    $phone_msg      = '';

    $loi_xac_thuc = [];

    //kiểm tra người dùng đã nhấn submit (POST)  hay chưa
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $ho_va_ten  = $_POST['ho_va_ten'];
        $email      = $_POST['email'];
        $phone      = $_POST['phone'];

        /*
            empty: hàm kiểm tra rỗng
            isset: hàm kiểm tra tồn tại
        */
        //xác thực dữ liệu
        //kiểm tra $ho_va_ten
        if( empty($ho_va_ten) ){
            $ho_va_ten_msg = 'Bạn chưa nhập họ và tên';

            //push vào mảng loi_xac_thuc
            $loi_xac_thuc[] = 'Bạn chưa nhập họ và tên';
        }

        //kiểm tra $email
        /*
            - Email không được rỗng
            - Kiểm tra định dạng email
        */
        if( empty($email) ){
            $email_msg      = 'Bạn chưa nhập email';

            //push vào mảng loi_xac_thuc
            $loi_xac_thuc[]      = 'Bạn chưa nhập email';
        }else{
            //đã nhập email
            $check_email = filter_var($email, FILTER_VALIDATE_EMAIL);
            if( $check_email == false ){
                $email_msg      = 'Bạn chưa nhập đúng định dạng email';

                //push vào mảng loi_xac_thuc
                $loi_xac_thuc[]      = 'Bạn chưa nhập đúng định dạng email';
            }
        }

        if( empty($phone) ){
            $phone_msg = 'Bạn chưa nhập số điện thoại';

            //push vào mảng loi_xac_thuc
            $loi_xac_thuc[] = 'Bạn chưa nhập số điện thoại';
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul style="pading:0;color:red;">
        <?php
            if( count( $loi_xac_thuc ) > 0 ) {
                foreach( $loi_xac_thuc as $key => $value ){
                    echo "<li> {$value} </li>";
                }
            }
        ?>
    </ul>
    

    <form action="" method="POST" >
        <table>
            <tr>
                <td> <label for="ho_va_ten"> Họ Và Tên </label> </td>
                <td> 
                    <input type="text" name="ho_va_ten" id="ho_va_ten" > 
                    <p style="color:red"><?php echo $ho_va_ten_msg; ?></p>
                </td>
            </tr>
            <tr>
                <td> <label for="email"> Email </label> </td>
                <td> 
                    <input type="text" name="email" id="email" > 
                    <p style="color:red"><?php echo $email_msg; ?></p>
                </td>
            </tr>
            <tr>
                <td> <label for="phone"> Số Điện Thoại </label> </td>
                <td> 
                    <input type="text" name="phone" id="phone"> 
                    <p style="color:red"><?php echo $phone_msg; ?></p>
                </td>
            </tr>
            <tr>
                <td>  </td>
                <td> <input type="submit" id="submit" value="Đăng Ký"> </td>
            </tr>
        </table>
    </form>
</body>
</html>