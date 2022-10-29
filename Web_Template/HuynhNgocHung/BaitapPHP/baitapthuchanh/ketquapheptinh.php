<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// cau a


if(isset($_POST["tinh"])){
    if(is_numeric($s1)&& is_numeric($s2)){
        if(isset( $_POST['cong'])){
            $ketqua = $s1 + $s2;
            $check = 'check';
        }
        if(isset($_POST["tru"])){
            $ketqua = $s1 - $s2;
        }
        if(isset($_POST["nhan"])){
            $ketqua = $s1 * $s2;
        }
        if(isset($_POST["chia"])){
            $ketqua = $s1 / $s2;
        }
        
    }
    else {
        echo "Vui long nhap so";
        $ketqua = "";
    }
}
else { 
    $ketqua = 0;
}

?>
<form action="" method="POST">
<input type="text" name="ketqua" disabled="disabled" value=<?php echo "$ketqua" ?> >
</form>
</body>
</html>