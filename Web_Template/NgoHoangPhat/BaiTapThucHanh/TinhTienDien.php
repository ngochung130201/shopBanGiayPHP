<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tien Dien</title>
    <style type="text/css">
        body {  
            background-color: #d24dff;
        }
        table{
            background: #ffd94d;
            border: 0 solid yellow;
        }
        thead{
            background: #fff14d;    
        }
        td {
            color: blue;
        }
        h3{
            font-family: verdana;
            text-align: center;
            /* text-anchor: middle; */
            color: #ff8100;
            font-size: medium;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_POST['TenChuHo']))
            $TenChuHo=trim($_POST['TenChuHo']);
        else 
            $TenChuHo="Name";
        if(isset($_POST['ChiSoCu']))
            $ChiSoCu=trim($_POST['ChiSoCu']);
        else $ChiSoCu=0;
        if(isset($_POST['ChiSoMoi']))
            $ChiSoMoi=trim($_POST['ChiSoMoi']);
        else   $ChiSoMoi=0;
        if(isset($_POST['DonGia']))
            $DonGia=trim($_POST['DonGia']);
        else $DonGia=0;
        if(isset($_POST['Tinh']))
        {
            if(is_numeric($ChiSoCu)&&is_numeric($ChiSoMoi)&&is_numeric($DonGia)&& !empty($TenChuHo))
            {
                if($ChiSoMoi>$ChiSoCu)
                {
                    $ThanhToan=($ChiSoMoi-$ChiSoCu)*$DonGia;
                }
                else{
                    $ChiSoMoi="Số không được bé hơn";
                    $ChiSoCu="Số không được lớn hơn";
                    $ThanhToan="";
                }             
            }             
            else{
                if(empty($TenChuHo))
                    {
                        $TenChuHo="Vui lòng Nhập Tên";
                    }
                echo "<font color='red'>Vui long nhap so </font>";   
                $ThanhToan="";              
            }
        }
        else $ThanhToan=0; 
    ?>
    <form action="" method="POST">
        <table>
            <thead>
            <th colspan="2" align="center"><h3>Tính Tiền Điện</h3></th>
        </thead>
        <tr>
            <td>Tên Chủ Hộ:</td>
            <td><input type="text" name="TenChuHo" value="<?php echo $TenChuHo;?>"/></td>
        </tr>
        <tr>
            <td>Chỉ Số Cũ:</td>
            <td><input type="text" name="ChiSoCu" value="<?php echo $ChiSoCu;?>"/></td>
        </tr>
        <tr>
            <td>Chỉ Số Mới:</td>
            <td><input type="text" name="ChiSoMoi" value="<?php echo $ChiSoMoi;?>"/></td>
        </tr>
        <tr>
            <td>Đơn Giá:</td>
            <td><input type="text" name="DonGia" value="<?php echo $DonGia;?>"/></td>
        </tr>
        <tr>
            <td>Số Tiền Thanh Toán:</td>
            <td><input type="text" name="ThanhToan" disabled="disabled" value="<?php echo $ThanhToan;?>"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="Tính" name="Tinh" /></td>
        </tr>
        </table>
    </form>
</body>
</html>