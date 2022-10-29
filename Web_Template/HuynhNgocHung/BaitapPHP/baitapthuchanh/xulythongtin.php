<?php 
 $name = $_POST['name'];
 
 $Diachi = $_POST['Diachi'];
 $sdt = $_POST['sdt'];
if($_POST['gt'] == 'Nam'){
    $gt = 'Nam';

}
else {
    $gt = 'Nu';
}
 $quoctich = $_POST['quoctich'];
 $ghichu = $_POST['ghichu'];


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
    <h2><b>Ban da dang nhap thanh cong, duoi day la nhung thong tin ban nhap</b></h2>
    <?php
    
    echo " Ho ten : $name <br>";
    echo " So Dien thoai : $sdt <br>";
    echo " Gioi tinh : $gt <br>";
    echo " Quoc Tich : $quoctich <br>";
    echo " Ghi chu : $ghichu <br>";
    echo " Dia Chi : $Diachi <br>";
    echo "Mon hoc : " ;
    if(!empty($_POST['check_list'])){
        // Loop to store and display values of individual checked checkbox.
        foreach($_POST['check_list'] as $selected){
        echo " $selected ";
       
        }
        }
    
    ?>
    <br>
    <a href="./thongtin.php">Tro ve trang truoc</a>
</body>
</html>