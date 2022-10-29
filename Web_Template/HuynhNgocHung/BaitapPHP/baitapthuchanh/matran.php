<?php
 $row = $_POST['dong'];
 $col = $_POST['cot'];
$matran = array();
for ($i = 0; $i < $row; $i++) {
    $matran = [];
    for ($j = 0; $j < $col; $j++) {
        $matran[] = rand(-1000, 1000);
    }
    $result[] = $matran;
    echo "$result";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mang hai chieu</title>
</head>
<body>
    <form action="" method="POST">
        <label for="dong">Nhap so dong</label>
        <input type="number"  min="2" max="5" value=<?php echo $row ?> name="dong" id="dong">
     
        <br>
        <label for="dong">Nhap so cot</label>
      
        <input type="number" min="2" max="5" value=<?php echo $col ?> name="cot" id="cot">
        <br>    
        <input type="submit" value="Xu ly">
        <br>
        <textarea name="kq" id="" cols="30" rows="10"></textarea>
    </form>
</body>
</html>

