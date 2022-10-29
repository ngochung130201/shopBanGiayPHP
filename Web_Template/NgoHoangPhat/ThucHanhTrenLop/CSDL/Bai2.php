<?php 
$conn=mysqli_connect('localhost', 'root', '', 'qlbansua')
or die("Couldn't connect to database".mysqli_connect_error());
$code="Select * FROM khach_hang";
$result=mysqli_query($conn,$code);
$rows=mysqli_num_rows($result);
function KhachHang($result)
{
    $mau=0;
    if(mysqli_num_rows($result)!=0)
    {
        while($row=mysqli_fetch_row($result))
        {
            $mau++;
            echo "<tr>";
            $field=mysqli_num_fields($result);
            for($i=0;$i<$field;$i++)
            {
                if($mau%2==0)
                {
                    if($i==2)
                    {
                        if($row[$i]==0)
                        echo "<td style='background-color:aqua'><img src='male.png'  width='20px'></td>";
                        //echo "<td>Nam</td>";
                        if($row[$i]==1)
                        echo "<td style='background-color:aqua'><img src='female.png'  width='20px'></td>";
                       // echo "<td>Nữ</td>";
                        
                    }        
                    else
                    echo "<td style='background-color:aqua'>$row[$i]</td>";
                }             
                else
                {
                    if($i==2)
                    {
                        if($row[$i]==0)
                        echo "<td><img src='male.png'  width='20px'></td>";
                       // echo "<td>Nam</td>";
                        if($row[$i]==1)
                         echo "<td><img src='female.png' width='20px'></td>";
                        //echo "<td>Nữ</td>";
                    }   
                    else
                        echo "<td>$row[$i]</td>";
                }   
            }
        }
        echo "</tr>";
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
    <form action="" method="post">
        <table border="1">
            <th>Mã KH</th>
            <th>Tên Khách Hàng</th>
            <th>Giới Tính</th>
            <th>Địa Chỉ</th>
            <th>Số Điện Thoại</th>
            <th>Email</th>
            p*6>lorem
            <img src="" alt="">
            <?php 
            while($rows)
            {KhachHang($result);}
            ?>
        </table>
    </form>
</body>
</html>