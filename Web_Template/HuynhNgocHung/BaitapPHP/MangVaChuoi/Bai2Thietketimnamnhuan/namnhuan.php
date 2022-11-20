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
    $nam = $_POST['namnhuan'];
    if (isset($_POST['kq']))
        $kq = $_POST['kq'];
    else
        $kq = "";

    function nam_nhuan($nam)
    {
        if ($nam % 400 == 0 || $nam % 4 == 0 && $nam % 100 != 0) {
            return 1;
        }
        return 0;
    }
    $arr = array();
    foreach (range(2000, $nam) as $year) {
        // echo "<br/> $year";
        $kqvonglap = nam_nhuan($year);
        if ($kqvonglap == 1) {
            $arr[] = $year;
        }
    }
    ?>
    <h4>Năm nhập và nhỏ hơn năm 2000</h4>
    <form method="POST">
        <span>Tìm năm nhuận</span>
        <label for=""></label>
        <input min="18  00" max="2022" type="number" name="namnhuan" id="namnhuan">
        <br/>
        <textarea name="kq" id="" cols="30" rows="10">
        <?php  echo  $kq = implode(" ", $arr) . " la nam nhuan" ;?>
        </textarea>
    
        <input type="submit" value="Tìm năm nhuận">
    </form>
</body>

</html>
