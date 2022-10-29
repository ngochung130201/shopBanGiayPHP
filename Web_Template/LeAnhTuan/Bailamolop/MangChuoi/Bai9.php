<?php 
if(isset($_POST['mangA']))
$mangA=$_POST['mangA'];
else
$mangA="";
if(isset($_POST['mangB']))
$mangB=$_POST['mangB'];
else
$mangB="";
if(isset($_POST['resultA']))
$resultA=$_POST['resultA'];
else
$resultA="";
if(isset($_POST['resultB']))
$resultB=$_POST['resultB'];
else
$resultB="";
if(isset($_POST['resultC']))
$resultC=$_POST['resultC'];
else
$resultC="";
if(isset($_POST['tangdan']))
$tangdan=$_POST['tangdan'];
else
$tangdan="";
if(isset($_POST['giamdan']))
$giamdan=$_POST['giamdan'];
else
$giamdan="";
$resultC=array();
$tangdan=array();
$giamdan=array();
function countA($mangA){
    $arr=explode(",",$mangA);
    $count=count($arr);
    return $count;
}
function countB($mangB){
    $arr=explode(",",$mangB);
    $count=count($arr);
    return $count;
}
function MergeArray($A,$B){
    $c=array_merge($A,$B);
    return $c;
}
function TangDan($arr){
    $count=count($arr);
    $benhat=0;
    $trunggian=0;
    for($i=0;$i<$count;$i++){
        $benhat=$arr[$i];
        for($j=$i;$j<$count;$j++){
            if($benhat>$arr[$j]){
                $trunggian=$arr[$j];
                $arr[$j]=$benhat;
                $benhat=$trunggian;
                $arr[$i]=$benhat;
            }
        }
    }
    return $arr;
}
function GiamDan($arr){
    $count=count($arr);
    $lonnhat=0;
    $trunggian=0;
    for($i=0;$i<$count;$i++){
        $lonnhat=$arr[$i];
        for($j=$i;$j<$count;$j++){
            if($lonnhat<$arr[$j]){
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
    $arrA=explode(",",$mangA);
    $arrB=explode(",",$mangB);
    $resultA=countA($mangA);
    $resultB=countB($mangB);
    $resultC=MergeArray($arrA,$arrB);
    $tangdan=TangDan($resultC);
    $giamdan=GiamDan($resultC);
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
    <form action="" method="post">
        <table border="1">
            <th><Label>ĐẾM PHẦN TỬ, GHÉP MẢNG VÀ SẮP XẾP</Label></th>
            <tr>
                <td><Label>Mảng A:</Label></td>
                <td><input type="text" name="mangA" id=""></td>
            </tr>
            <tr>
                <td><Label>Mảng B:</Label></td>
                <td><input type="text" name="mangB" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Thực hiện"></td>
            </tr>
            <tr>
                <td><Label>Số phần tử mảng A:</Label></td>
                <td><input type="text" name="resultA" id="" value="<?php echo "$resultA" ?>"></td>
            </tr>
            <tr>
                <td><Label>Số phần tử mảng B:</Label></td>
                <td><input type="text" name="resultB" id="" value="<?php echo "$resultB" ?>"></td>
            </tr>
            <tr>
                <td><Label>Mảng C:</Label></td>
                <td><input type="text" name="resultC" id="" value="<?php $count=count($resultC);for($i=0;$i<$count;$i++) echo $resultC[$i]."," ?>"></td>
            </tr>
            <tr>
                <td><Label>Mảng C tăng dần:</Label></td>
                <td><input type="text" name="tangdan" id="" value="<?php $count=count($tangdan);for($i=0;$i<$count;$i++) echo $tangdan[$i]."," ?>"></td>
            </tr>
            <tr>
                <td><Label>Mảng C giảm dần:</Label></td>
                <td><input type="text" name="giamdan" id="" value="<?php $count=count($giamdan);for($i=0;$i<$count;$i++) echo $giamdan[$i]."," ?>"></td>
            </tr>
        </table>
    </form>
</body>
</html>