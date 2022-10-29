
<?php 

if(empty($_POST['name'])){
    echo "ban chua nhap ten chu ho <br/>";
}
if(empty($_POST['old'])){
    echo "Chua nhap chi so cu  <br/>";
}
if(empty($_POST['new'])){
    echo "Chua nhap chi so Moi <br/>";
}
if(isset($_POST['old']))  
    $old=($_POST['old']); 
if(isset($_POST['new'])) 
    $new=($_POST['new']); 
if(isset($_POST['price'])) 
    $new=($_POST['price']); 
if(isset($_POST['tinh']))
            $tinh=($new - $old) * $price;
            echo $tinh;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>tinh dien tich HCN</title>

    <style type="text/css">

       

        table{

            background: #ffd94d;

            border: 0 solid yellow;

        }

        thead{

            background: #fff14d;    

        }

        td {

            color: blue;

        }

        h3{

            font-family: verdana;

            text-align: center;

            /* text-anchor: middle; */

            color: #ff8100;

            font-size: medium;

        }

    </style>

</head>



<body>










<form align='center' action="" method="post">
<table>
    <thead>
        <th colspan="2" align="center"><h3>Tính tiền điệnn</h3></th>
    </thead>
    <tr><td>Tên chủ hộ</td>
     <td><input type="text" name="name"/></td>
    <tr><td>Chỉ số cũ</td>
     <td><input type="number" name="old" value="0"/></td>

    </tr>
    <tr><td>Chỉ số mới</td>
    <td><input type="number" name="new" value="0" value="0 "/></td>
    </tr>
    <tr><td>Đơn giá</td>
     <td><input type="number" name="new" value="20000"/></td>
    </tr>

    <tr><td>Số tiên thanh toán:</td>
     <td><input type="text" name="tinh" disabled value="<?php  echo $tinh;?> "/></td>
    </tr>
    <tr>

     <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>



    </tr>



</table>



</form>



</body>



</html>

