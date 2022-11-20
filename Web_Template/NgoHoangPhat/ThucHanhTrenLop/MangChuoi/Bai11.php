<?php 
if(isset($_POST['sodong']))
$sodong=$_POST['sodong'];
else
$sodong="";
if(isset($_POST['socot']))
$socot=$_POST['socot'];
else
$socot="";
if(isset($_POST['result']))
$result=$_POST['result'];
else
$result="";
if(isset($_POST['total']))
$total=$_POST['total'];
else
$total="";
function TaoMang($sodong,$socot){
    $arr=array();
    for($i=0;$i<$sodong;$i++){
        for($j=0;$j<$socot;$j++){
            $arr[$i][$j]=rand(-1000,1000);
        }
    }
    return $arr;
}

function BoiSo($mang,$sodong,$socot){
    $tong=0;
    for($i=0;$i<$sodong;$i++){
        for($j=0;$j<$socot;$j++){
            if($mang[$i][$j]%10==0)
            $tong+=$mang[$i][$j];
        }
    }
    return $tong;
}
$ketqua=array();
if(isset($_POST['submit'])){    
    $ketqua=TaoMang($sodong,$socot);
    $total=BoiSo($ketqua,$sodong,$socot);
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
        <table>
            <th><Label>MẢNG 2 CHIỀU</Label></th>
            <tr>
                <td><Label>Số Dòng:</Label></td>
                <td><input type="text" name="sodong" id=""></td>
            </tr>
            <tr>
                <td><Label>Số cột:</Label></td>
                <td><input type="text" name="socot" id=""></td>
            </tr>
            <tr>
                <td><Label>Các phần tử ma trận</Label></td>
                <td><textarea name="result" id="" cols="30" rows="10"><?php 
                for($i=0;$i<$sodong;$i++) {
                    for($j=0;$j<$socot;$j++) {
                        echo $ketqua[$i][$j].",";
                    }
                    echo "\n";
                }
                ?></textarea></td>
            </tr>
            <tr>
                <td><Label>Tổng bội số 10:</Label></td>
                <td><input type="text" name="total" id="" value="<?php echo "$total" ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Tính"></td>
            </tr>
        </table>
    </form>
</body>
</html>