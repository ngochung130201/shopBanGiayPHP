<?php
 include "./db_product.php";
$id = $_GET['ID'];
if(isset($_POST['submit'])){
   
    $category_name=$_POST['name'];
    $category_conent=$_POST['conent'];
    $category_status=$_POST['status'];
    $fileName = $_FILES['image']['name'];
    $template = $_FILES['image']['tmp_name'];
    $folder = "./images/category/" . $fileName;
     $createDate = date("Y-m-d H:i:s");
     $UpDate = date("Y-m-d H:i:s");

    $sql = "UPDATE `category` SET Title='$category_name',Image='$fileName',Content='$category_conent',CreateDate='$createDate',UpdateDate='$UpDate' WHERE ID = '$id'";
    $result = mysqli_query($conn,$sql);
    if(move_uploaded_file($template,$folder)){
        echo "<script>
        alert('uploaded file uploaded');
        <script>";
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
            <div class="card-header"><strong>Cập nhật sản phẩm</strong></div>
            <div class="card-body card-block">
            <?php 
                 include './db_product.php';
                     $id = $_GET['ID'];
                   $sql = "SELECT * FROM category WHERE ID = $id LIMIT 1";
              $result = mysqli_query($conn, $sql);
                 while ($row = mysqli_fetch_assoc($result)){
                                    ?>
                 <div class="form-group"><label for="name" class=" form-control-label">Tên danh mục</label><input type="text" name="name" id="name" placeholder="Nhập tên sản phẩm" class="form-control" value="<?php echo $row['Title'] ?>"></div>
                 <div class="form-group"><label for="image" class=" form-control-label">Hình ảnh</label><input type="file" name="image" id="image" placeholder="image" class="form-control"></div>
                 <div class="form-group"><label for="conent" class=" form-control-label">Content</label><input type="text" name="conent" id="conent" placeholder="conent" class="form-control"></div>
                 <div class="form-group"><label for="status" class=" form-control-label">Trạng thái </label><input type="checkbox" name="status" id="status"  class="form-control"></div>
                <img width="200px" src="./images/category/<?php echo $row['Image']; ?>">
            
            </div>
            
                <?php
                   }
                    ?>
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