<?php 
if(isset($_POST['nhap']))
$nhap=$_POST['nhap'];
else
$nhap="";
if(isset($_POST['giatri']))
$giatri=$_POST['giatri'];
else
$giatri="";
if(isset($_POST['replace']))
$replace=$_POST['replace'];
else
$replace="";
if(isset($_POST['oldarray']))
$oldarray=$_POST['oldarray'];
else
$oldarray="";
if(isset($_POST['newarray']))
$newarray=$_POST['newarray'];
else
$newarray="";
$replacearray=array();
$oldarray=explode(",",$nhap);
$newarray=array();
function Replace($oldarray,$giatri,$replace,$replacearray){ 
    $count=count($oldarray);
    for($i=0;$i<$count;$i++){
        if($oldarray[$i]==$giatri)
        {
            $oldarray[$i]=$replace;
            break;
        }
    }
    $replacearray=$oldarray;
    return $replacearray;
}
if(isset($_POST['Tinh'])){
    $newarray=Replace($oldarray,$giatri,$replace,$replacearray);
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
    <form action="Bai7.php" method="POST">
        <table border="1">
            <th colspan="2" style="background-color:pink"><Label>Thay Thế</Label></th>
            <tr>
                <td style="background-color:#ffd6f1">
                    <Label>Nhập mảng:</Label>
                </td>
                <td style="background-color:#ffd6f1"><input type="text" name="nhap" id=""></td>
            </tr>
            <tr>
                <td style="background-color:#ffd6f1">
                    <Label>Nhập giá trị cần thay thế:</Label>     
                </td>
                <td style="background-color:#ffd6f1"><input type="text" name="giatri" id=""></td>
            </tr>
            <tr>
                <td style="background-color:#ffd6f1">
                    <Label>Giá trị thay thế:</Label>               
                </td>
                <td style="background-color:#ffd6f1"><input type="text" name="replace" id=""></td>
            </tr>
            <tr>
                <th colspan="2"><input type="submit" name="Tinh" value="Tính" style="background-color:yellow"></th>
            </tr>
            <tr>
                <td><Label>Mảng cũ:</Label></td>
                <td><input type="text" style="background-color:#ffa3a3" name="oldarray" value="<?php $count=count($oldarray); for($i=0;$i<$count;$i++) echo $oldarray[$i]." "; ?>"></td>
            </tr>
            <tr>
                <td><Label>Mảng sau khi thay thế:</Label></td>
                <td><input type="text" style="background-color:#ffa3a3" name="newarray" value="<?php  $count=count($newarray); for($i=0;$i<$count;$i++) echo $newarray[$i]." " ?>"></td>
            </tr>
        </table>
    </form>
</body>
</html>