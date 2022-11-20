<?php
    $random=array();
    if(isset($_POST['GTLN']))
        $GTLN=$_POST['GTLN'];
    else
        $GTLN="";
    if(isset($_POST['nhap']))
        $Nhap=$_POST['nhap'];
    else
    $Nhap="";
    if(isset($_POST['Mang']))
        $Mang=$_POST['Mang'];
    else
    $Mang="";
    if(isset($_POST['GTLN']))
    $GTLN=$_POST['GTLN'];
    else
    $GTLN="";
    if(isset($_POST['GTNN']))
        $GTNN=$_POST['GTNN'];
    else
    $GTNN="";
    if(isset($_POST['Ketqua']))
        $Ketqua=$_POST['Ketqua'];
    else
    $Ketqua="";

    function TaoMang($Nhap)
    {
            for($i=0;$i<$Nhap;$i++)
            {
                $random[$i]=rand(0,20);
            }
            return $random;
            // for($i=0;$i<$Nhap;$i++)
            // {
            //     echo $random[$i]." ";
            // }
    }
    function XuatMang($random)
    {
    //     $dem=count($random);
    //    // $chuoi="";
    //    for($i=0;$i<$dem;$i++)
    //         {
    //             echo $random[$i]." ";
    //         }
    return $random;
    }
    function GTLN($random)
    {
        $dem=count($random);
        $MAX=$random[0];
        for($i=0;$i<$dem;$i++)
        {
            if($MAX<$random)
                $MAX=$random[$i];
        }
        return $MAX;
    }
    function GTNN($random)
    {
        $dem=count($random);
        $MIN=$random[0];
        for($i=0;$i<$dem;$i++)
        {
            if($MIN>$random)
                $MIN=$random[$i];
        }
        return $MIN;
    }
    function Tong($random)
    {
        $dem=count($random);
        $Tong=0;
        for($i=0;$i<$dem;$i++)
            $Tong+=$random[$i];
        return $Tong;
    }
    if(isset($_POST['Tinh']))
    {
    $mang=TaoMang($Nhap);
    $Mang=XuatMang($mang);
    $GTLN=GTLN($mang);
    $GTNN=GTNN($mang);
    $Ketqua=Tong($mang);
    //$Mang=XuatMang($mang);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">

    table th td{

        color: #ffff00;
        display: table-cell;
        background-color: gray;     
        border:1px solid black;
    }

    table th{

        background-color: pink;

        font-style: vni-times;

        color: yellow;

    }
    .SubmitButton {
        margin: auto;
        display: block;
        background-color: #ffff00;
    }
    .Result{
        Background-color: #FFA8A6;  
    }

</style>
</head>
<body>
    <form action="Bai5.php" method="post">
        <table border="1">
            <th colspan="2"><h3>Phát Sinh Mảng</h3></th>
            <tr>
                <td style="background-color: #FFDBF6 ;">
                    <label for="">Nhập số phần tử:</label>
                </td>
                <td style="background-color: #FFDBF6 ;">
                     <input type="text" name="nhap">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="background-color: #FFDBF6 ;">
                    <input class="SubmitButton" type="submit" name="Tinh" value="Phát sinh và tính toán">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Mảng</label>
                    
                </td>
                <td>
                <input class="Result" type="text" name="Mang" disabled="disabled" id=""
                    value="<?php $dem=count($Mang);
                        for($i=0;$i<$dem;$i++)
                        {
                            echo $Mang[$i]." ";
                        }
                    ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">GTLN (MAX) Trong mảng:</label>
                    
                </td>
                <td>
                <input class="Result" type="text" name="GTLN" disabled="disabled" id=""
                    value="<?php echo "$GTLN" ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">GTNN (MIN) Trong mảng</label>
                    
                </td>
                <td>
                <input class="Result" type="text" name="GTNN" disabled="disabled" id=""
                    value="<?php echo "$GTNN" ?>"
                    >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tổng Mảng:</label>
                    
                </td>
                <td>
                <input class="Result" type="text" name="Ketqua" disabled="disabled" id=""
                    value="<?php echo "$Ketqua" ?>"
                    >
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
