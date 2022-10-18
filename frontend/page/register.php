<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký ngay | Shop Giay</title>
    <link rel="stylesheet" href="../style/auth.css">
</head>
<body>
    <div class="header__register">
        <div class="header__regis">
            <a href="" class="header__regis-logo">
            <img src="../assets/img/shopee-seeklogo.com.svg" alt="logo">
                <span>Đăng ký</span>
            </a>
            <a href="" class="header__regis-help">
                Bạn cần giúp đỡ
            </a>
        </div>

    </div>
    <div class="header__register-body">
        <div class="header__content">
            <img src="../assets/img/shopee-seeklogo.com.svg" alt="">
            <span>Nền tản thương mại yêu thích Đông Nam Á</span>
        </div>
        <div class="header__register_form">
            <form action="" class="register">
                <span>
                    Đăng ký
                </span>
                <div class="register__input">
                    <input type="number" class="register__input-phone" placeholder="Số điện thoại" name="" id="">
                    <input type="submit" class="register__input-next"  value="Tiếp theo">
                </div>
                <div class="flex">
                    <div class="register__op">

                    </div>
                    <span class="register__span"> Hoặc</span>
                    <div class="register__op">

                    </div>
                </div>
                <div class="flex">
                    <a href="" class="register__button">
                        <img src="../assets/img/icons8-facebook.svg" alt="">
                        Facebook
                    </a>
                    <a href="" class="register__button">
                      <img src="../assets/img/icons8-google.svg" alt="">
                      Google
                    </a>
                </div>
                <div class="register__dk">
                    <span>Bằng việc đăng kí, bạn đã đồng ý với Shopee 
                        về 
                    <a href="">Điều khoản dịch vụ & Chính sách bảo mật</a>
                    </span>
                </div>
                <div class="flex register__login">
                    <span>Bạn đã có tài khoản ?</span>
                    <a href="../page/login.php">Đăng nhập</a>
                </div>

            </form>
        </div>
    </div>
    <?php 
    include '../include/footer.php';
    
    ?>
</body>
</html>