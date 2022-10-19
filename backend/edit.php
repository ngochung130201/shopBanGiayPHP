<?php
include './include/Header.php'
?>
<?php
include './script/Script.php'
?>


<!-- Left Panel -->


<div class="row ml-3" >
    <div class="col-lg-12 mt-3">
       <form action="" method="POST">
        <div class="card">
            <div class="card-header"><strong>Cập nhật sản phẩm</strong></div>
            <div class="card-body card-block">
                <div class="form-group"><label for="name" class=" form-control-label">Tên sản phẩm</label><input type="text" id="name" placeholder="Nhập tên sản phẩm" class="form-control"></div>
                <div class="form-group"><label for="Description" class=" form-control-label">Chi tiết sản phẩm</label><input type="text" id="Description" placeholder="" class="form-control"></div>
                <div class="form-group"><label for="price" class=" form-control-label">Giá sản phẩm</label><input type="text" id="price" placeholder="" class="form-control"></div>
               
                <div class="form-group"><label for="image" class=" form-control-label">Hình ảnh</label><input type="file" id="image" placeholder="image" class="form-control"></div>
            </div>
        </div>
        <a class="btn btn-primary" href="#" role="button">Hủy</a>
        <input class="btn btn-success" type="submit" value="Cập nhật">
    </form>
    </div>
</div>

<!-- /#right-panel -->

<!-- Scripts -->

<?php
include './include/footer.php';
?>