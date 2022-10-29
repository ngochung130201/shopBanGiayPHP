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
        if(isset($_POST['NameCH']))
            $NameCH=trim($_POST['NameCH']);
        else 
            $NameCH="Name";
        if(isset($_POST['csc']))
            $csc=trim($_POST['csc']);
        else $csc=0;
        if(isset($_POST['csm']))
            $csm=trim($_POST['csm']);
        else   $csm=0;
        if(isset($_POST['dg']))
            $dg=trim($_POST['dg']);
        else $dg=0;
        if(isset($_POST['Tinh']))
        {
            if(is_numeric($csc)&&is_numeric($csm)&&is_numeric($dg)&& !empty($NameCH))
            {
                if($csm>$csc)
                {
                    $TT=($csm-$csc)*$dg;
                }
                else{
                    $csm="Số bé";
                    $csc="Số lớn";
                    $TT="";
                }             
            }             
            else{
                if(empty($NameCH))
                    {
                        $NameCH="Nhập Tên";
                    }
                echo "<font color='pink'>Nhập số </font>";   
                $TT="";              
            }
        }
        else $TT=0; 
    ?>
    <form action="" method="POST">
        <table>
            <thead>
            <th colspan="2" align="center"><h3>Tính Tiền Điện</h3></th>
        </thead>
        <tr>
            <td>Tên Chủ Hộ:</td>
            <td><input type="text" name="NameCH" value="<?php echo $NameCH;?>"/></td>
        </tr>
        <tr>
            <td>Chỉ Số Cũ:</td>
            <td><input type="text" name="csc" value="<?php echo $csc;?>"/></td>
        </tr>
        <tr>
            <td>Chỉ Số Mới:</td>
            <td><input type="text" name="csm" value="<?php echo $csm;?>"/></td>
        </tr>
        <tr>
            <td>Đơn Giá:</td>
            <td><input type="text" name="dg" value="<?php echo $dg;?>"/></td>
        </tr>
        <tr>
            <td>Số Tiền Thanh Toán:</td>
            <td><input type="text" name="TT" disabled="disabled" value="<?php echo $TT;?>"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="Tính" name="Tinh" /></td>
        </tr>
        </table>
    </form>
</body>
</html>