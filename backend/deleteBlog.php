<?php
include './db_product.php';
$id = $_GET['ID'];
$sql = "DELETE FROM `blog` WHERE ID = $id";
$result = mysqli_query($conn,$sql);
if($result){
    header("Location:indexBlog.php");
}
else {
    echo "Loi";
    echo $result;
}

?>