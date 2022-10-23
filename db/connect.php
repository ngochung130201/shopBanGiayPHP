<?php

$conn = mysqli_connect('localhost', 'root', '', 'bangiay') or die ('Không
thể kết nối tới database'.
mysqli_connect_error());
$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)!=0){
while($row = mysqli_fetch_row($result)){
    var_dump($row);
    echo $row;
}
}


?>