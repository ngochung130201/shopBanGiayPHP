<?php
  function Connect()
 {
  # code...
  $conn = mysqli_connect('localhost', 'root', '', 'qlbansua')
  or die ('Không thể kết nối tới database'. mysqli_connect_error());
  return $conn;
 }

?> 

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  background-color: red;
}

.table__center {
  text-align:center ; color:blue;
}
.red {
  background-color: red;
}
</style>
</head>
<body>

<h2 class="table__center">Thông tin hãng sữa</h2>
<table>
  <tr>
    <th>Mã HS</th>
    <th>Tên hãng sữa</th>
    <th>Địa chỉ</th>
    <th>Điện thoại</th>
    <th>Email</th>
  </tr>
  <tr>
  <?php


 $selectAll = 'SELECT * FROM hang_sua';
 $resultAll = mysqli_query(Connect(), $selectAll);
 if(mysqli_num_rows($resultAll)!=0){
    while($row = mysqli_fetch_array($resultAll)){     
    for ($i=0; $i<mysqli_num_fields($resultAll); $i++)
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "<td>" . $row[4] . "</td>";
    echo "</tr>"; 

        
    }
    }
 ?> 
  </tr>
</table>
<h3 class="table__center">Liệt kê danh sách hãng sữa gồm tên hãng sữa địa chỉ,số điện thoại </h3>
<table>
  <tr>

    <th>Tên hãng sữa</th>
    <th>Địa chỉ</th>
    <th>Điện thoại</th>

  </tr>
  <tr>
  <?php


 $selectAll = 'SELECT * FROM hang_sua';
 $resultAll = mysqli_query(Connect(), $selectAll);
 if(mysqli_num_rows($resultAll)!=0){
    while($row = mysqli_fetch_array($resultAll)){     
    for ($i=0; $i<mysqli_num_fields($resultAll); $i++)
    echo "<tr>";
 
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[3] . "</td>";

    echo "</tr>"; 

        
    }
    }
 ?> 
  </tr>
</table>
<h3  class="table__center">Liệt kê danh sách khách hàng gồm có các thông tin sau: tên khách hàng, địa chỉ, điện thoại, danh sách
sẽ được sắp theo thứ tự tên khách hàng tăng dần.</h3>
<table>
  <tr>
    <th >Mã Khách Hàng</th>
    <th>Tên Khách hàng</th>
    <th>Giới tính</th>
    <th>Địa chỉ</th>
    <th>Số điện thoại</th>
  </tr>
  <tr>
  <?php


 $selectAll = 'SELECT * FROM khach_hang ORDER BY Ten_khach_hang';
 $resultAll = mysqli_query(Connect(), $selectAll);
 if(mysqli_num_rows($resultAll)!=0){
    while($row = (mysqli_fetch_array($resultAll))){     
    for ($i=0; $i<mysqli_num_fields($resultAll); $i++)
    echo "<tr class=' '>";
    echo "<td >" . $row[0] . "</td>";
    echo "<td >" . $row[1] . "</td>";
    echo "<td>" . ($row[2] == 1 ? " <img src='./a.jpg' style='width: 20px ;' >  " :" <img src='./b.jpg' style='width: 20px ;' >") . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "<td>" . $row[4] . "</td>";
    echo "</tr>"; 

        
    }
    }
 ?> 
  </tr>
</table>

</body>
</html>

<?php



?>