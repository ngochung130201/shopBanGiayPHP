<?php include 'MySQL.php'; ?>
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
        <table border="1">
            <tr>
                <td>Mã Sữa</td>
                <td>Tên Sữa</td>
                <td>Mã Hàng Sữa</td>
                <td>Mã Loại Sữa</td>
                <td>Trọng Lượng</td>
                <td>Đơn giá</td>
                <td>Thành Phần Dinh Dưỡng</td>
                <td>Lợi Ích</td>
                <td>Hình</td>
            </tr>
            <?php for($i=0;$i<$row;$i++)
            {
                echo CSDL($result,$a);
            }
             ?>
        </table>
        <?php 
        echo "<h1>Cau 1</h1>";
            for($i=0;$i<$rowcau1;$i++)
                echo Cau1($resultcau1,$a);
        ?>
    </form>
</body>
</html>