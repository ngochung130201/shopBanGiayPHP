<?php
 include "./db_product.php";
$id = $_GET['ID'];
if(isset($_POST['submit'])){
   
    $product_name=$_POST['name'];
    $product_price=$_POST['price'];
    $product_conent=$_POST['conent'];
    $product_description=$_POST['description'];
    $product_pricenNew=$_POST['pricenNew'];
    $product_image=$_POST['image'];
    // $createDate = date();
    // $UpDate = date();

    $sql = "UPDATE `product` SET `ID`='$id',`Title`='$product_name',`Image`='$product_image',`Description`='$product_description',`Price`='$product_price',`PriceNew`='$product_pricenNew',`Content`='$product_conent' WHERE ID = '$id'";
    $result = mysqli_query($conn,$sql);
   
    if($result){
       header("location:admin.php");
    }
    else {
        var_dump($result);
    }

}
?>

<?php
include './include/Header.php'
?>
<?php
include './script/Script.php'
?>


<!-- Left Panel -->


<div class="row ml-3" >
    <div class="col-lg-12 mt-3">
       <form action="" method="POST" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header"><strong>Cập nhật sản phẩm</strong></div>
            <div class="card-body card-block">
            <?php 
                 include './db_product.php';
                     $id = $_GET['ID'];

                   $sql = "SELECT * FROM `product` WHERE ID = $id LIMIT 1";
              $result = mysqli_query($conn, $sql);
                 while ($row = mysqli_fetch_assoc($result)){
                                        ?>
                <div class="form-group"><label for="name" class=" form-control-label">Tên sản phẩm</label><input type="text" name="name" id="name" value="<?php echo $row['Title']?>" placeholder="Nhập tên sản phẩm" class="form-control"></div>
                <div class="form-group"><label for="price" class=" form-control-label">Giá sản phẩm</label><input type="text" id="price" name="price"  value="<?php echo  $row['Price']?>" placeholder="" class="form-control"></div>
                <div class="form-group"><label for="conent" class=" form-control-label">Chi tiết ngắn</label><input type="text" id="conent" name="conent" value="<?php echo $row['Content'] ?>" placeholder="" class="form-control"></div>
                <div class="form-group"><label for="description" class=" form-control-label">Chi tiết sản phẩm</label><input type="text" name="description" value="<?php echo $row['Description'] ?>" id="description" placeholder="" class="form-control"></div>
                <div class="form-group"><label for="pricenNew" class=" form-control-label">Giá mới</label><input type="text" id="pricenNew" name="pricenNew" value="<?php echo $row['PriceNew'] ?>" placeholder="" class="form-control"></div>
               
                <div class="form-group"><label for="image" class=" form-control-label">Hình ảnh</label><input type="file" name="image" id="image"  value="<?php echo $row['Image'] ?>"placeholder="image" class="form-control">
                <img width="200px" src="./images/product/<?php echo $row['Image']; ?>">
            
            </div>
                <?php
                   }
                    ?>
            </div>
        </div>
        <a class="btn btn-primary" href="#" role="button">Hủy</a>
        <input class="btn btn-success" type="submit" name="submit" value="Tạo mới">
    </form>
    </div>
</div>

<!-- /#right-panel -->

<!-- Scripts -->

<?php
include './include/footer.php';
?>