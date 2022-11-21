<?php
include '../include/header.php';
include 'db_connect.php';
?>

<div class="container">
    <div class="blog">
        <div class="blog__header">
            <h3>Tin tức</h3>
            <span>Be Classy - Thương hiệu giày Tây dành cho Ta </span>
            <p>Toàn bộ sản phẩm của BE CLASSY đều được thiết kế và sản xuất từ các nghệ nhân đóng giày dày dạn kinh
                nghiệm nhất. Kiểu giày Tây nhưng được Be Classy thiết kế theo chuẩn phom chân của các quý ông Việt. Với
                châm ngôn “Giày Tây dành cho Ta” Be Classy mong muốn tạo nên những chiếc giày Tây mang nét Việt riêng,
                nâng tầm đẳng cấp cho giày Việt và thêm nét mạnh mẽ lịch lãm riêng biệt
                dành cho các quá ông.</p>
        </div>
        <div class="blog__container">
            <?php
            
            $sql = "SELECT * FROM blog";
        
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['ID'];
                $title = $row['Title'];
                $img = $row['Image'];
                $des = $row['Des'];
                ?>
            <div class="blog__list">
                <a href="/frontend/page/blog_detail?id=<?= $id ?>" class="blog__item">
                    <img src="<?= $img ?>" alt="" class="blog__img">
                    <span class="blog_title"><?= $title ?></span>
                    <p>
                    <?= $des ?>
                    </p>
                </a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php
include '../include/footer.php'
?>
