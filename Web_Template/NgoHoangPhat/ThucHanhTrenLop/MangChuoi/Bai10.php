<?php 
session_start();
if(isset($_POST['name']))
$name=$_POST['name'];
else
$name=null;
if(isset($_POST['rank']))
$rank=$_POST['rank'];
else
$rank=null;
if(isset($_POST['show']))
$show=$_POST['show'];
else
$show=null;
$song=array();
$dem=0;
function ThemBaiHat($song,$name,$rank)
{
    $so=intval($rank);
    $song[$so]=$name;
    $_SESSION['song']=$song;
    return $_SESSION['song'];
}
if(isset($_POST['add']))
{
    $show=ThemBaiHat($song,$name,$rank);
    $dem=$rank;
    echo "Thêm thành công";
}

// if(isset($_POST['showrank']))
// {
//     //$show=ThemBaiHat($song,$name,$rank);
//     $dem=intval($rank);
// }
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
            <th>Thứ Hạng Các Bài Hát</th>
            <tr>
                <td><Label>Tên Bài Hát:</Label></td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td><Label>Thứ Hạng:</Label>
                </td>
                <td><input type="text" name="rank" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="add" value="Thêm"><input type="submit" name="showrank" value="Hiển Thi Rank"></td>
            </tr>
            <tr>
                <td>
                    <textarea name="show" id="" cols="40" rows="20"><?php 
                    for($i=0;$i<=intval($dem);$i++)
                    {
                        if(empty($show[$i]))
                        {
                        echo "Hạng $i: Không có bài hát nào được xếp hạng"; 
                        echo "\n";   
                        }
                        else
                        echo "Hạng:$i ".$show[$i];
                    } 
                    ?></textarea>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
