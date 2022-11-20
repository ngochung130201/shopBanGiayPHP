<?php

$number = $_POST["number"];
$array = array();
if(isset($_POST["submit"])){
    for( $i = 0; $i <$number; $i++){
        $rand = rand(1,$number);
        $array[$i]=$rand;
        echo "$array[$i] <br>";
     
       
       // print_r($array);
    
       //print_r($array);
    //    b dem xem co bao nhieu thanh phan trong mang co gia tri chan
    }
    
}
foreach($array as $value){
    $dem =0;
    echo "Gia tri co trong mang la $value <br>";
    if(!$value % 2 == 0){
        echo "Khong co so chan <br>";
    }
    else {
      $sochan =  $dem++;
        echo "So chan co trong mang la $sochan  <br>";
    }
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
    <form action="" method="POST">
        <label for="number">Nhập vào 1 số tự nhiên</label>
        <input type="text" name="number" value="" id="number">
        <input type="submit" id="submit" name="submit" value="Gửi">
    </form>
</body>
</html>