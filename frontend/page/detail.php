<?php
include '../include/header.php'
?>
  <div class="body-container">
  <div class="body-side-detail">
  <div class="body-side-detail-content">
    <div class="body-side-detail-content-show-image">
        <div class="image1"><img src="https://cf.shopee.vn/file/473cb278e3f50a0eec6b919c80986705_tn" alt=""></div>
        <div class="image1"><img src="https://cf.shopee.vn/file/1b6d25f703014f3cb8a7b975bb04031e_tn" alt=""></div>
        <div class="image1"><img src="https://cf.shopee.vn/file/1569c69943a8e7ff1ccd2855c126ee17_tn" alt=""></div>
        <div class="image1"><img src="https://cf.shopee.vn/file/473cb278e3f50a0eec6b919c80986705_tn" alt=""></div>
        <div class="image1"><img src="https://cf.shopee.vn/file/1b6d25f703014f3cb8a7b975bb04031e_tn" alt=""></div>
        <div class="image1"><img src="https://cf.shopee.vn/file/1569c69943a8e7ff1ccd2855c126ee17_tn" alt=""></div>
    </div>
  </div>
    <div class="body-side-detail-slider">
        <div class="image"><img class="image2" onclick="currentSlide(1)" src="https://cf.shopee.vn/file/473cb278e3f50a0eec6b919c80986705_tn" alt=""></div>
        <div class="image"><img  class="image2" onclick="currentSlide(2)" src="https://cf.shopee.vn/file/1b6d25f703014f3cb8a7b975bb04031e_tn" alt=""></div>
        <div class="image"><img  class="image2" onclick="currentSlide(3)" src="https://cf.shopee.vn/file/1569c69943a8e7ff1ccd2855c126ee17_tn" alt=""></div>
        <div class="image"><img  class="image2" onclick="currentSlide(4)" src="https://cf.shopee.vn/file/473cb278e3f50a0eec6b919c80986705_tn" alt=""></div>
        <div class="image"><img  class="image2" onclick="currentSlide(5)" src="https://cf.shopee.vn/file/1b6d25f703014f3cb8a7b975bb04031e_tn" alt=""></div>
        <div class="image"><img class="image2" onclick="currentSlide(6)" src="https://cf.shopee.vn/file/1569c69943a8e7ff1ccd2855c126ee17_tn" alt=""></div>
    </div>
    <div class="body-side-detail-share">
      <div class="body-side-share-sharebutton">
        <ul>
          <li><span>Chia sẻ:</span></li>
          <li><a href="#" id=""><i class='bx bxl-messenger' style="color: aqua;"></i></a></li>
          <li><a href="" id=""><i class='bx bxl-facebook-circle' style="color:blue ;" ></i></a></li>
          <li><a href="" id=""><i class='bx bxl-pinterest' style="color:red ;"></i></a></li>
          <li><a href="" id=""><i class='bx bxl-twitter'style="color: aqua;" ></i></a></li>
        </ul>
      </div>
      <div class="body-side-share-hearticon">
        <ul>
          <li>
            <a href=""><i class='bx bxs-heart' style="color:red ;"></i>Yêu thích</a>
          </li>
        </ul>    
      </div>
    </div>
  </div>
  <div class="body-left-detail">
    <div class="body-left-detail-name">  
        <div class="favorite"><span>Yêu thích</span></div>
        <span class="title">Tai nghe chụp tai không dây bluetooth STN28 màu sắc cute,âm thanh ấm bass mạnh- Phụ Kiện 123</span>
    </div>
    <div class="body-left-detail-rating">
      <div class="rating-star">
        <ul>
          <li><span>4.8</span></li>
          <li><i class='bx bxs-star'></i></li>
          <li><i class='bx bxs-star'></i></li>
          <li><i class='bx bxs-star'></i></li>
          <li><i class='bx bxs-star'></i></li>
          <li><i class='bx bxs-star-half'></i></li>
        </ul>
      </div>
      <div class="rating-comment">
        <ul>
          <li><span>170</span></li>
          <li><span style="text-decoration:none ;color:#767676">Đánh giá</span></li>
        </ul>
      </div>
      <div class="rating-sold">
        <ul>
          <li><span>515</span></li>
          <li><span style="text-decoration:none ; color:#767676">Đã Bán</span></li>
        </ul>
      </div>
      <div class="rating-warning">
        <ul><li><a href="#">Tố Cáo</a></li></ul>       
      </div>
    </div>
    <div class="body-left-detail-price">
      <div class="oldprice"><span>₫115.000</span></div>
      <div class="newprice"><span>₫119.000</span></div>
      <div class="sales"><span>21% giảm</span></div>
    </div>
    <div class="body-left-detail-transport">
      <div class="body-left-detail-transport-title">
        <ul><li><span>Vận chuyển</span></li></ul>
      </div>
      <div class="body-left-detail-transport-type">
        <ul>
          <li><img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/1cdd37339544d858f4d0ade5723cd477.png" width="25px" height="15px" alt=""> Miễn phí vận chuyển</li>
          <li><i class='bx bxs-truck' ></i>Vận chuyển tới <select name="ChooseCity" id="">
            <option value="KH">Khánh Hòa</option>
            <option value="HCM">Hồ Chí Minh</option>
            <option value="DN">Đà Nẵng</option>
          </select>
          </li>
          <li>Phí vận chuyển: 0đ</li>
        </ul>
      </div>
    </div>
    <div class="body-left-detail-amount">
      <span>Số lượng</span>
      <div class="amount-button">
        <button id="decrease" onclick="">-</button>
        <input id="number" type="text" role="spinbutton" value="0">
        <button id="increase" onclick="increaseNumber(1)">+</button>
      </div>
      <span>Số lượng còn lại: 1120 sản phẩm</span>
    </div>
    <div class="body-left-detail-payment">
      <div class="body-left-detail-payment-addcart">
        <button><i class='bx bx-cart-add'></i> Thêm Vào Giỏ Hàng</button>
      </div>
      <div class="body-left-detail-payment-buynow">
        <button>Mua Ngay</button>
      </div>
    </div>
    <div class="body-left-detail-infomation">
      <ul>
        <li><img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/83e10a1f95cb083579c089448ef8dd3b.png" alt=""> Shop Đảm Bảo</li>
        <li><span>3 Ngày Trả Hàng / Hoàn Tiền</span></li>
      </ul>
    </div>
  </div>
</div>
<div class="body-description">
  <div class="body-description-content">
      <div class="body-description-title"><span>MÔ TẢ SẢN PHẨM</span></div>
      <div class="body-description-detail">
      <span>BINTECH CAM KẾT:</span>
      <ul>
        <li>Mang lại cho quý khách những sản phẩm tốt nhất, đẹp nhất.</li>
        <li>Nếu hàng bị lỗi do sản xuất. BINTECH cam kết sẽ hoàn tiền hoặc gửi lại sản mới thay thế cho quý khách.</li>
        <li>Cửa hàng đồ chơi công nghệ số 1 Việt Nam</li>
      </ul>
    </div>
  </div>
</div>

<?php 
include '../include/footer.php'
?>
  
  </body>
</html>