<?php
 include "./db_product.php";

if(isset($_POST['submit'])){
    $blog_name=$_POST['name'];
    $blog_conent=$_POST['conent'];
    $Des=$_POST['Des'];
    $fileName = $_FILES['image']['name'];
    $template = $_FILES['image']['tmp_name'];
    $folder = "./images/blog/" . $fileName;
     $createDate = date("Y-m-d H:i:s");
     $UpDate = date("Y-m-d H:i:s");
    $sql = "INSERT INTO blog(`ID`, `Title`, `Image`, `Content`, `Des`) VALUES (NULL,'$blog_name','$fileName','$blog_conent','$Des')";
    $result = mysqli_query($conn,$sql);
    if(move_uploaded_file($template,$folder)){
        echo "<script>
        alert('uploaded file uploaded');
        <script>";
        header("location:indexBlog.php");
       }
       else {
        echo " co loi khi Upload  thanh cong";
       }
    if($result){
       header("location:indexBlog.php");
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
            <div class="card-header"><strong>Tạo Tin tức</strong></div>
            <div class="card-body card-block">
                <div class="form-group"><label for="name" class=" form-control-label">Tên sản phẩm</label><input type="text" name="name" id="name" placeholder="Nhập tên sản phẩm" class="form-control"></div>
               
                <div class="form-group"><label for="conent" class=" form-control-label">Chi tiết ngắn</label><input type="text" id="conent" name="conent" placeholder="" class="form-control"></div>
                <div class="form-group"><label for="Des" class=" form-control-label">Chi tiết sản phẩm</label><input type="text" name="Des" id="Des" placeholder="" class="form-control"></div>
               
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