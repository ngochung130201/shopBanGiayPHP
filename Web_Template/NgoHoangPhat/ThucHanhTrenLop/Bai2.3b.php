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
        $firstnumber=$_REQUEST['FirstNumber'];
        $secondnumber=$_REQUEST['SecondNumber'];
        if(is_numeric($firstnumber)&&is_numeric($secondnumber))
        {
            if(isset($_POST['pt'])&& $_POST['pt']=='Cong')
            {
                $Ketqua=$firstnumber+$secondnumber;
                $pheptinh='Cộng';
            }
            if(isset($_POST['pt'])&& $_POST['pt']=='Tru')
            {
                $Ketqua=$firstnumber-$secondnumber;
                $pheptinh='Trừ';
            }
                
            if(isset($_POST['pt'])&& $_POST['pt']=='Nhan')
            {
                $Ketqua=$firstnumber*$secondnumber;
                $pheptinh='Nhân';
            }
                
            if(isset($_POST['pt'])&& $_POST['pt']=='Chia')
            {
                $Ketqua=$firstnumber*$secondnumber;
                $pheptinh='Chia';
            }
        }
        else
        {
            $Ketqua=0;
            echo "Vui lòng nhập kiểu số";
            $pheptinh="";
        }
            
    ?>
    <form action="" method="post">
        <span>Chọn phép tính:<?php echo "$pheptinh" ?></span>
        <table>
        <tr>
            <td>
                <span>Số 1:</span>
                <input type="text" name="" value="<?php echo "$firstnumber"; ?>" >
            </td>
        </tr>
        <tr>
            <td>
                <span>Số 2:</span>
                <input type="text" name="" value="<?php echo" $secondnumber"; ?>">
            </td>
        </tr>
        <tr>
            <td>
                <span>Kết quả:</span>
                <input type="text" name="Ketqua" value=<?php echo "$Ketqua" ?>>
            </td>
        </tr>
        <tr>
            <td>
                <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
            </td>
        </tr>
        </table>
    </form>
</body>
</html>