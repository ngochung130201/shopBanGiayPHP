<?php
include './db_product.php';
$id = $_GET['ID'];
$sql = "DELETE FROM `product` WHERE ID = $id";
$result = mysqli_query($conn,$sql);
if($result){
    header("Location:Admin.php");
}
else {
    echo "Loi";
    echo $result;
}

?>