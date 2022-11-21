<?php
 include "./db_product.php";
$id = $_GET['ID'];
if(isset($_POST['submit'])){
    $blog_name=$_POST['name'];
    $blog_conent=$_POST['conent'];
    $Des=$_POST['Des'];
    $fileName = $_FILES['image']['name'];
    $template = $_FILES['image']['tmp_name'];
    $folder = "./images/blog/" . $fileName;
     $createDate = date("Y-m-d H:i:s");
     $UpDate = date("Y-m-d H:i:s");

    $sql = "UPDATE `blog` SET `Title`=' $blog_name',`Image`='$fileName',`Content`='$blog_conent',`Des`=' $Des' WHERE ID = '$id'";
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
            <div class="card-header"><strong>Cập nhật Tin tức</strong></div>
            <div class="card-body card-block">
            <?php 
                 include './db_product.php';
                     $id = $_GET['ID'];
                   $sql = "SELECT * FROM blog WHERE ID = $id LIMIT 1";
              $result = mysqli_query($conn, $sql);
                 while ($row = mysqli_fetch_assoc($result)){
                                    ?>
                 <div class="form-group"><label for="name" class=" form-control-label">Tiêu đề</label><input type="text" name="name" id="name" placeholder="Nhập tên sản phẩm" class="form-control" value="<?php echo $row['Title'] ?>"></div>
                 <div class="form-group"><label for="image" class=" form-control-label">Hình ảnh</label><input type="file" name="image" id="image" placeholder="image" class="form-control"></div>
                 <div class="form-group"><label for="conent" class=" form-control-label">Content</label><input type="text" name="conent" id="conent" placeholder="conent" class="form-control" value="<?php echo $row['Content'] ?>"></div>
                 <div class="form-group"><label for="conent" class=" form-control-label">Content</label><input type="text" name="Des" id="Des" placeholder="Des" class="form-control" value="<?php echo $row['Des'] ?>"></div>
                <img width="200px" src="./images/category/<?php echo $row['Image']; ?>">
            
            </div>
            
                <?php
                   }
                    ?>
            </div>
            <a class="btn btn-primary" href="#" role="button">Hủy</a>
          <input class="btn btn-success" type="submit" name="submit" value="Cập nhật">
        </form>
    </div>
        
</div>

<!-- /#right-panel -->

<!-- Scripts -->

<?php
include './include/footer.php';
?>