<?php
include '../include/header.php'
?>
   <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"
    ></script>
    <script type="text/javascript">
      (function () {
        emailjs.init("hCtIQakB2WN2ifM3e");
      })();
    </script>
    <div class="container">
        <div class="contact">
            <div class="contact__form">
                <h3>Thông tin liên hệ</h3>
                <form action="">
                   <div class="blog__input">
                    <label for="name">Tên liên hệ</label>
                    <input type="text" id="name" name="name" placeholder="">
                   </div>
                   <div class="blog__input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="">
                   </div>
                   <div class="blog__input">
                    <h3 >Nội dung</h3>
                  <textarea name="message" id="message" style="width:100%" rows="10">

                  </textarea>
                   </div>
                </form>
                <button onclick="sendMail()"  class="contact__submit">Gửi</button>
            </div>
            <div class="contact_map">
          
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.706301466552!2d109.20237589999999!3d12.2681437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317067ed3a052f11%3A0xd464ee0a6e53e8b7!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBOaGEgVHJhbmc!5e0!3m2!1svi!2s!4v1666504444597!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
<?php
include '../include/footer.php'
?>
 <script src="../js/sendmail.js"></script>