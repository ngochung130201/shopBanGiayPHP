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
    $ten=$_POST["Name"];
    $diachi=$_POST["Address"];
    $sdt=$_POST['Phone'];
    $ghichu=$_POST['ghichu'];
    if(isset($_POST['sex']) && $_POST['sex']=='Nam')
    {
        $gioitinh='Nam';
    }
    if(isset($_POST['sex']) && $_POST['sex']=='Nu')
    {
        $gioitinh='Nu';
    }
    if(isset($_POST['quoctich']) && $_POST['quoctich']=='Vietnam')
        $quoctich='Việt Nam';
        if(isset($_POST['quoctich']) && $_POST['quoctich']=='Nhatban')
        $quoctich='Nhật Bản';
        if(isset($_POST['quoctich']) && $_POST['quoctich']=='My')
        $quoctich='Mỹ';
        if(isset($_POST['quoctich']) && $_POST['quoctich']=='Hanquoc')
        $quoctich='Hàn Quốc';
    if(isset($_POST['ghichu']))
    {
        $ghichu=$_POST['ghichu'];
    }    
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <span>Họ Tên: <?php echo "$ten" ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Địa chỉ: <?php echo "$diachi" ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Số điện thoại: <?php echo "$sdt" ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Giới Tính: <?php echo "$gioitinh" ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Quốc Tịch: <?php echo "$quoctich" ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Các môn đã học: <?php 
                    if(!empty($_POST['check_list']))
                    {
                        foreach($_POST['check_list'] as $monhoc)
                        {
                            echo "$monhoc ";
                        }
                    }
                    ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Ghi chú:<?php echo "$ghichu" ?></span>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>