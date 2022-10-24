<?php
include './db_product.php';
$id = $_GET['ID'];
$sql = "DELETE FROM `account` WHERE ID = $id";
$result = mysqli_query($conn,$sql);
if($result){
    header("Location:accout.php");
}
else {
    echo "Loi";
    echo $result;
}

?>