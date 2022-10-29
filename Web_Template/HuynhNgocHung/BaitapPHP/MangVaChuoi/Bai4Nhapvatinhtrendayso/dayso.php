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
        <input type="text" name="dayso" id="">
        <input type="submit" name="tinh" value="Tong day so">
        <input type="text" name="kq" value=<?php echo "$kq"; ?>>
    </form>
</body>
</html>
<?php
    if(isset($_POST['tinh'])){
       if(isset($_POST['kq'])){
        $kq = $_POST['kq'];

       }
       else {
        $kq = "";
       }
      $dayso = $_POST['dayso'];
      $chuoithanhmang = explode(",", $dayso); 
     function TongMang($chuoithanhmang){
        $tong = 0;
        foreach($chuoithanhmang as $value){
            $tong += $value;
            
        }
        return $tong;
    }
 $kq =TongMang($chuoithanhmang);
 echo "$kq";
     
    }

?>