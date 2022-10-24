<?php
include './db_product.php';
$id = $_GET['ID'];
$sql = "DELETE FROM `category` WHERE ID = $id";
$result = mysqli_query($conn,$sql);
if($result){
    header("Location:indexCategory.php");
}
else {
    echo "Loi";
    echo $result;
}

?>