<?php 

$conn = mysqli_connect('localhost', 'root', '', 'qlbansua') 
or die ('Không
thể kết nối tới database'.
mysqli_connect_error());
$sql = "SELECT * FROM sua";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)!=0){
    while($row = mysqli_fetch_array($result)){
  echo ($row[0]);
    }
    }
    


