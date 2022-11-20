<?php 
if(isset($_POST['nhap']))
$nhap=$_POST['nhap'];
else
$nhap="";
if(isset($_POST['tangdan']))
$tangdan=$_POST['tangdan'];
else
$tangdan="";
if(isset($_POST['giamdan']))
$giamdan=$_POST['giamdan'];
else
$giamdan="";

$tangdan=array();
$giamdan=array();
function Tangdan($nhap){
    $arr=explode(",",$nhap);
    $count=count($arr);
    $benhat=0;
    $trunggian=0;
    for($i=0;$i<$count;$i++)
    {
        $benhat=$arr[$i];
        for($j=$i;$j<$count;$j++)
        {
            if($benhat>$arr[$j])
            {
                $trunggian=$arr[$j];
                $arr[$j]=$benhat;
                $benhat=$trunggian;
                $arr[$i]=$benhat;
            }
        }
    }
    return $arr;
}

function GiamDan($nhap){
    $arr=explode(",",$nhap);
    $count=count($arr);
    $lonnhat=0;
    $trunggian=0;
    for($i=0;$i<$count;$i++)
    {
        $lonnhat=$arr[$i];
        for($j=$i;$j<$count;$j++)
        {
            if($lonnhat<$arr[$j])
            {
                $trunggian=$arr[$j];
                $arr[$j]=$lonnhat;
                $lonnhat=$trunggian;
                $arr[$i]=$lonnhat;
            }
        }
    }
    return $arr;
}
if(isset($_POST['submit'])){
    $giamdan=GiamDan($nhap);
    $tangdan=Tangdan($nhap);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tdbutton{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <table border="1">
            <th colspan="2" style="background-color:#339A99 ;">SẮP XẾP MẢNG</th>
            <tr style="background-color:#D1DED4;">
                <td ><Label>Nhập Mảng:</Label></td>
                <td><input type="text" name="nhap" id=""></td>
            </tr>
            <tr style="background-color:#D1DED4;">
                <td class="tdbutton" colspan="2"><input type="submit" name="submit" value="Sắp xếp tăng giảm"></td>
            </tr>
            <tr style="background-color:#D1DED4;">
                <td colspan="2"><Label>Sau khi sắp xếp:</Label></td>
            </tr>
            <tr style="background-color:#D1DED4;">
                <td><Label>Tăng dần:</Label></td>
                <td><input style="background-color:aqua;" type="text" name="tangdan" id="" value="<?php $count=count($tangdan); for($i=0;$i<$count;$i++) echo $tangdan[$i].","; ?>"></td>
            </tr>
            <tr style="background-color:#D1DED4;">
                <td><Label>Giảm Dần</Label></td>
                <td><input style="background-color:aqua;" type="text" name="giamdan" id="" value="<?php $count=count($giamdan); for($i=0;$i<$count;$i++) echo $giamdan[$i]."," ?>"></td>
            </tr>
        </table>
    </form>
</body>
</html>