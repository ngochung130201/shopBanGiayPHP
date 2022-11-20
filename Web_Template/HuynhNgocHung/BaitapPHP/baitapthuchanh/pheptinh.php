
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 3 </title>
</head>
<body>
    
<form action="./ketquapheptinh.php" method="POST" aria-multiline="">
    <h2>Phép tính trên hai số</h2>
    <div class="">
        <span>Chọn phép tính :</span>
        <input type="checkbox" name="cong" id="cong" >
        <label for="cong"> Cộng </label>
        <input type="checkbox" name="tru" id="tru">
        <label for="tru"> Trừ </label>
        <input type="checkbox" name="nhan" id="nhan">
        <label for="nhan"> Nhân </label>
        <input type="checkbox" name="chia" id="chia">
        <label for="chia"> Chia </label>
    </div>
    <div>
        <label for="sothucnhat" >Số thứ nhất :</label>
        <input type="text" name="s1" id="s1"   >
        <label for="sothucnhat">Số thứ nhì :</label>
        <input type="text" name="s2" id="s2"   >
    </div>
    <input type="submit" value="Tinh" name="tinh" id="tinh" >
</form>
</body>
</html>
