<?php
 include "./db_product.php";

if(isset($_POST['submit'])){
   
    $product_name=$_POST['name'];
    $product_price=$_POST['price'];
    $product_content=$_POST['conent'];
    $product_description=$_POST['description'];
    $product_priceNew=$_POST['priceNew'];
    $fileName = $_FILES['image']['name'];
    $template = $_FILES['image']['tmp_name'];
    $folder = "./images/product/" . $fileName;
  
    // $createDate = date();
    // $UpDate = date();

    $sql = "INSERT INTO product(ID, Title, Image, Description, Price, PriceNew, Content) 
    VALUES (Null,'$product_name','$fileName','$product_description','$product_price', '$product_priceNew','$product_content')";
    $result = mysqli_query($conn,$sql);
    if(move_uploaded_file($template,$folder)){
        echo "<script>
        alert('uploaded file uploaded');
        <script>";
        header("location:admin.php");
       }
       else {
        echo " co loi khi Upload  thanh cong";
       }
    if($result){
    //    header("location:admin.php");
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
            <div class="card-header"><strong>Tạo mới sản phẩm</strong></div>
            <div class="card-body card-block">
                <div class="form-group"><label for="name" class=" form-control-label">Tên sản phẩm</label><input type="text" name="name" id="name" placeholder="Nhập tên sản phẩm" class="form-control"></div>
                <div class="form-group"><label for="price" class=" form-control-label">Giá sản phẩm</label><input type="text" id="price" name="price" placeholder="" class="form-control"></div>
                <div class="form-group"><label for="conent" class=" form-control-label">Chi tiết ngắn</label><input type="text" id="conent" name="conent" placeholder="" class="form-control"></div>
                <div class="form-group"><label for="description" class=" form-control-label">Chi tiết sản phẩm</label><input type="text" name="description" id="description" placeholder="" class="form-control"></div>
                <div class="form-group"><label for="priceNew" class=" form-control-label">Giá mới</label><input type="text" id="pricenNew" name="priceNew" placeholder="" class="form-control"></div>
               
                <div class="form-group"><label for="image" class=" form-control-label">Hình ảnh</label><input type="file" name="image" id="image" placeholder="image" class="form-control"></div>
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