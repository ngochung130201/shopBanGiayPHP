<?php
 include '../include/header.php'

?>
<div class="container">
    <?php
    include '../include/slider.php'
    ?>
    <div class="category " data-aos="fade-down"   data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out">
    <div class="container__category">
        <h3>Danh mục</h3>
        <ul class="category__list">
            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'bangiay') or die ('Không
                thể kết nối tới database'.
                mysqli_connect_error());
                $showproduct='SELECT * FROM product';
                $result=mysqli_query($conn,$showproduct);
                if(mysqli_num_rows($result)!=0){
                    while($row=mysqli_fetch_assoc($result)){
                  
            ?>
            <li class="category__list-item " >
                <a href="" class="category__link">
                    <img class="category__img" src="../../backend/images/product/<?php echo $row['Image'] ?>" alt="">
                    <span class="category__link-title"><?php echo $row['Title']?></span>
                </a>
            </li>
            <?php }} ?>
            <!-- <li class="category__list-item">
                <a href="" class="category__link">
                    <img class="category__img" src="../assets/img/category/p1.jpg" alt="">
                    <span class="category__link-title">Giày 1</span>
                </a>
            </li>
            <li class="category__list-item">
                <a href="" class="category__link">
                    <img class="category__img" src="../assets/img/category/p1.jpg" alt="">
                    <span class="category__link-title">Giày 1</span>
                </a>
            </li>
            <li class="category__list-item">
                <a href="" class="category__link">
                    <img class="category__img" src="../assets/img/category/p1.jpg" alt="">
                    <span class="category__link-title">Giày 1</span>
                </a>
            </li>
            <li class="category__list-item">
                <a href="" class="category__link">
                    <img class="category__img" src="../assets/img/category/p1.jpg" alt="">
                    <span class="category__link-title">Giày 1</span>
                </a>
            </li>
            <li class="category__list-item">
                <a href="" class="category__link">
                    <img class="category__img" src="../assets/img/category/p1.jpg" alt="">
                    <span class="category__link-title">Giày 1</span>
                </a>
            </li>
            <li class="category__list-item">
                <a href="" class="category__link">
                    <img class="category__img" src="../assets/img/category/p1.jpg" alt="">
                    <span class="category__link-title">Giày 1</span>
                </a>
            </li>
            <li class="category__list-item">
                <a href="" class="category__link">
                    <img class="category__img" src="../assets/img/category/p1.jpg" alt="">
                    <span class="category__link-title">Giày 1</span>
                </a>
            </li>
            <li class="category__list-item">
                <a href="" class="category__link">
                    <img class="category__img" src="../assets/img/category/p1.jpg" alt="">
                    <span class="category__link-title">Giày 1</span>
                </a>
            </li>
            <li class="category__list-item">
                <a href="" class="category__link">
                    <img class="category__img" src="../assets/img/category/p1.jpg" alt="">
                    <span class="category__link-title">Giày 1</span>
                </a>
            </li> -->
        </ul>
    </div>
    </div>
        <!-- Product -->
        <div class="product" data-aos="fade-down"   data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out">
            <?php 
            $conn = mysqli_connect('localhost', 'root', '', 'bangiay') or die ('Không
            thể kết nối tới database'.
            mysqli_connect_error());
            $showproduct='SELECT * FROM product';
            $result=mysqli_query($conn,$showproduct);
                if(mysqli_num_rows($result)!=0){
                    while($row=mysqli_fetch_assoc($result)){
            ?>
           <div class="product__item">
           <a href="" class="product__link">
                <img class="product__img" src="../../backend/images/product/<?php echo $row['Image']?>" alt="">
                <span class="product__title"><?php echo $row['Title'] ?></span>
            </a>
            <div class="product__price">
                <span><?php echo $row['PriceNew'] ?></span>
                <span><?php echo $row['Price'] ?></span>
            </div>
           </div>
           <?php }} ?>
           <!-- <div class="product__item">
           <a href="" class="product__link">
                <img class="product__img" src="../assets/img/product/giay1.png" alt="">
                <span class="product__title">Áo Khoác Cardigan M Tay Hoa Màu Be Ulzzang Hàn Quốc</span>
            </a>
            <div class="product__price">
                <span>74.000d</span>
                <span>Đã bán 127</span>
            </div>
           </div>
           <div class="product__item">
           <a href="" class="product__link">
                <img class="product__img" src="../assets/img/product/giay1.png" alt="">
                <span class="product__title">Áo Khoác Cardigan M Tay Hoa Màu Be Ulzzang Hàn Quốc</span>
            </a>
            <div class="product__price">
                <span>74.000d</span>
                <span>Đã bán 127</span>
            </div>
           </div>
           <div class="product__item">
           <a href="" class="product__link">
                <img class="product__img" src="../assets/img/product/giay1.png" alt="">
                <span class="product__title">Áo Khoác Cardigan M Tay Hoa Màu Be Ulzzang Hàn Quốc</span>
            </a>
            <div class="product__price">
                <span>74.000d</span>
                <span>Đã bán 127</span>
            </div>
           </div>
           <div class="product__item">
           <a href="" class="product__link">
                <img class="product__img" src="../assets/img/product/giay1.png" alt="">
                <span class="product__title">Áo Khoác Cardigan M Tay Hoa Màu Be Ulzzang Hàn Quốc</span>
            </a>
            <div class="product__price">
                <span>74.000d</span>
                <span>Đã bán 127</span>
            </div>
           </div>
           <div class="product__item">
           <a href="" class="product__link">
                <img class="product__img" src="../assets/img/product/giay1.png" alt="">
                <span class="product__title">Áo Khoác Cardigan M Tay Hoa Màu Be Ulzzang Hàn Quốc</span>
            </a>
            <div class="product__price">
                <span>74.000d</span>
                <span>Đã bán 127</span>
            </div>
           </div>
            <div class="product__item">
           <a href="" class="product__link">
                <img class="product__img" src="../assets/img/product/giay1.png" alt="">
                <span class="product__title">Áo Khoác Cardigan M Tay Hoa Màu Be Ulzzang Hàn Quốc</span>
            </a>
            <div class="product__price">
                <span>74.000d</span>
                <span>Đã bán 127</span>
            </div>
           </div>
           <div class="product__item">
           <a href="" class="product__link">
                <img class="product__img" src="../assets/img/product/giay1.png" alt="">
                <span class="product__title">Áo Khoác Cardigan M Tay Hoa Màu Be Ulzzang Hàn Quốc</span>
            </a>
            <div class="product__price">
                <span>74.000d</span>
                <span>Đã bán 127</span>
            </div>
           </div>
           <div class="product__item">
           <a href="" class="product__link">
                <img class="product__img" src="../assets/img/product/giay1.png" alt="">
                <span class="product__title">Áo Khoác Cardigan M Tay Hoa Màu Be Ulzzang Hàn Quốc</span>
            </a>
            <div class="product__price">
                <span>74.000d</span>
                <span>Đã bán 127</span>
            </div>
           </div>
           <div class="product__item">
           <a href="" class="product__link">
                <img class="product__img" src="../assets/img/product/giay1.png" alt="">
                <span class="product__title">Áo Khoác Cardigan M Tay Hoa Màu Be Ulzzang Hàn Quốc</span>
            </a>
            <div class="product__price">
                <span>74.000d</span>
                <span>Đã bán 127</span>
            </div>
           </div>
           <div class="product__item">
           <a href="" class="product__link">
                <img class="product__img" src="../assets/img/product/giay1.png" alt="">
                <span class="product__title">Áo Khoác Cardigan M Tay Hoa Màu Be Ulzzang Hàn Quốc</span>
            </a>
            <div class="product__price">
                <span>74.000d</span>
                <span>Đã bán 127</span>
            </div>
           </div>
           <div class="product__item">
           <a href="" class="product__link">
                <img class="product__img" src="../assets/img/product/giay1.png" alt="">
                <span class="product__title">Áo Khoác Cardigan M Tay Hoa Màu Be Ulzzang Hàn Quốc</span>
            </a>
            <div class="product__price">
                <span>74.000d</span>
                <span>Đã bán 127</span>
            </div>
           </div>
           <div class="product__item">
           <a href="" class="product__link">
                <img class="product__img" src="../assets/img/product/giay1.png" alt="">
                <span class="product__title">Áo Khoác Cardigan M Tay Hoa Màu Be Ulzzang Hàn Quốc</span>
            </a>
            <div class="product__price">
                <span>74.000d</span>
                <span>Đã bán 127</span>
            </div>
           </div>
           <div class="product__item">
           <a href="" class="product__link">
                <img class="product__img" src="../assets/img/product/giay1.png" alt="">
                <span class="product__title">Áo Khoác Cardigan M Tay Hoa Màu Be Ulzzang Hàn Quốc</span>
            </a>
            <div class="product__price">
                <span>74.000d</span>
                <span>Đã bán 127</span>
            </div>
           </div>
            <div class="product__item">
           <a href="" class="product__link">
                <img class="product__img" src="../assets/img/product/giay1.png" alt="">
                <span class="product__title">Áo Khoác Cardigan M Tay Hoa Màu Be Ulzzang Hàn Quốc</span>
            </a>
            <div class="product__price">
                <span>74.000d</span>
                <span>Đã bán 127</span>
            </div>
           </div>
           <div class="product__item">
           <a href="" class="product__link">
                <img class="product__img" src="../assets/img/product/giay1.png" alt="">
                <span class="product__title">Áo Khoác Cardigan M Tay Hoa Màu Be Ulzzang Hàn Quốc</span>
            </a>
            <div class="product__price">
                <span>74.000d</span>
                <span>Đã bán 127</span>
            </div>
           </div>
        </div> -->
        <!-- end  Product -->
    </div>
</div>


<?php 
include '../include/footer.php'

?>
<script>
  AOS.init();
</script>
