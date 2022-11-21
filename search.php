<?php
include "db_connect.php"
    ?>
<div class="container" style="padding-top: 100px;">

    <!-- Product -->
    <div class="product" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000"
        data-aos-easing="ease-in-out">
        <?php
        if (isset($_POST["search"]) && !empty($_POST["search"])) {
            $key = $_POST["search"];
            $sql = "SELECT * FROM product WHERE title LIKE '%$key%'";
        } else {
            $sql = "SELECT * FROM product";
        }
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $product_name = $row['Title'];
            $product_price = $row['Price'];
            $product_content = $row['Content'];
            $product_description = $row['Description'];
            $product_priceNew = $row['PriceNew'];
            $product_image = $row['Image'];
        ?>
        <div class="product__item">
            <a href="" class="product__link">
                <img class="product__img" src="<?= $product_image; ?>" alt="123">
                <span class="product__title">
                    <?= $product_name; ?>
                </span>
            </a>
            <div class="product__price">
                <span>
                    <?= $product_priceNew; ?>
                </span>
                <span>Giá gốc <?= $product_price; ?></span>
            </div>
        </div>
        <?php } ?>
        ?>

    </div>
</div>
<?php
include '../include/footer.php';
?>
<script>
init();
</script>