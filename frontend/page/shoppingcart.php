<?php
include '../include/header.php'
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- ===== Link Swiper's CSS ===== -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- ===== Fontawesome CDN Link ===== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <!-- ===== CSS ===== -->
  <link rel="stylesheet" href="../styles/shopingcart.css">

  <!--<title>Card with Sliding Feature</title>-->
</head>
<body>
  <br><br>
  <div class="productcont">
        <div class="product">
            <h3 class="productname">Giày 1</h3>
            <p>Miêu tả giày 2</p>
            <p class="price">$5.05</p>
            <button class="addtocart">Sale 25%</button>
        </div>
        <div class="product">
            <h3 class="productname">Giày 2</h3>
            <p>Miêu tả giày 2</p>
            <p class="price">$8.50</p>
            <button class="addtocart">Sale 25%</button>
        </div>
        <div class="product">
            <h3 class="productname">Giày 3</h3>
            <p>Miêu tả giày 3</p>
            <p class="price">$10.50</p>
            <button class="addtocart">Sale 25%</button>
        </div>
        </div>
        <div class="cart-container">
          <hr>
          <table id="carttotals">
            <tr>
              <td><strong>Sản phẩm</strong></td>
              <td><strong>Tổng tiền</strong></td>
            </tr>
            <tr>
              <td>x <span id="itemsquantity">0</span></td>
             
              <td>$<span id="total">0</span></td>
            </tr></table>

            
            <div class="cart-buttons">
        <button id="emptycart">Xóa hàng</button>
        <button id="checkout">Mua hàng</button>
      </div>
    </div>
  </div>

  <section>

    <div class="swiper mySwiper container">
      <div class="swiper-wrapper content">

        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="https://cf.shopee.vn/file/473cb278e3f50a0eec6b919c80986705_tn" alt="">
            </div>

 

            <div class="name-money">
              <span class="name">Giày</span>
              <br>
              <span class="money"> 99.9$</span>
            </div>

 

            <div class="button">
              <button class="AddCart">Thêm vào giỏ hàng</button>
              <button class="Buy">Mua ngay</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="https://cf.shopee.vn/file/1b6d25f703014f3cb8a7b975bb04031e_tn" alt="">
            </div>

 

            <div class="name-money">
              <span class="name">Giày</span>
              <br>
              <span class="money"> 99.9$</span>
            </div>

 

            <div class="button">
              <button class="AddCart">Thêm vào giỏ hàng</button>
              <button class="Buy">Mua ngay</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="https://cf.shopee.vn/file/473cb278e3f50a0eec6b919c80986705_tn" alt="">
            </div>

 

            <div class="name-money">
              <span class="name">Giày</span>
              <br>
              <span class="money"> 99.9$</span>
            </div>

 

            <div class="button">
              <button class="AddCart">Thêm vào giỏ hàng</button>
              <button class="Buy">Mua ngay</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="https://cf.shopee.vn/file/1569c69943a8e7ff1ccd2855c126ee17_tn" alt="">
            </div>

 

            <div class="name-money">
              <span class="name">Giày</span>
              <br>
              <span class="money"> 99.9$</span>
            </div>

 

            <div class="button">
              <button class="AddCart">Thêm vào giỏ hàng</button>
              <button class="Buy">Mua ngay</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="https://cf.shopee.vn/file/473cb278e3f50a0eec6b919c80986705_tn" alt="">
            </div>

 

            <div class="name-money">
              <span class="name">Giày</span>
              <br>
              <span class="money"> 99.9$</span>
            </div>

 

            <div class="button">
              <button class="AddCart">Thêm vào giỏ hàng</button>
              <button class="Buy">Mua ngay</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="https://cf.shopee.vn/file/1b6d25f703014f3cb8a7b975bb04031e_tn" alt="">
            </div>

 

            <div class="name-money">
              <span class="name">Giày</span>
              <br>
              <span class="money"> 99.9$</span>
            </div>

 

            <div class="button">
              <button class="AddCart">Thêm vào giỏ hàng</button>
              <button class="Buy">Mua ngay</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="https://cf.shopee.vn/file/1569c69943a8e7ff1ccd2855c126ee17_tn" alt="">
            </div>

 

            <div class="name-money">
              <span class="name">Giày</span>
              <br>
              <span class="money"> 99.9$</span>
            </div>

 

            <div class="button">
              <button class="AddCart">Thêm vào giỏ hàng</button>
              <button class="Buy">Mua ngay</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="https://cf.shopee.vn/file/473cb278e3f50a0eec6b919c80986705_tn" alt="">
            </div>

 

            <div class="name-money">
              <span class="name">Giày</span>
              <br>
              <span class="money"> 99.9$</span>
            </div>

 

            <div class="button">
              <button class="AddCart">Thêm vào giỏ hàng</button>
              <button class="Buy">Mua ngay</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="https://cf.shopee.vn/file/1b6d25f703014f3cb8a7b975bb04031e_tn" alt="">
            </div>

 

            <div class="name-money">
              <span class="name">Giày</span>
              <br>
              <span class="money"> 99.9$</span>
            </div>

 

            <div class="button">
              <button class="AddCart">Thêm vào giỏ hàng</button>
              <button class="Buy">Mua ngay</button>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>


  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>


  <?php
  include '../include/footer.php'
    ?>

</body>

</html>