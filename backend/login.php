<?php
session_start();
if (isset($_SESSION['email'])) {
    header('location:admin.php');
}

$conn = mysqli_connect('localhost', 'root', '', 'bangiay') or die ('Không
thể kết nối tới database'.
mysqli_connect_error());
$sql = "SELECT * FROM account";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)!=0){
while($row = mysqli_fetch_row($result)){
  
    if (isset($_POST['dangnhap'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($email ==$row[2] && md5($password)== $row[3] && $row[4]==1) {
            // tao sesion
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('location:admin.php');
        } else {
            echo "<script>alert('Sai Email hoac mat khau');</script>";
        }
    }

}
}
// $menu="SELECT * FROM product";
// $resultmenu=mysqli_query($conn,$menu);
// if(mysqli_num_rows($resultmenu))
// {
//     while($row=mysqli_fetch_row($resultmenu))
//     {
//         $field=mysqli_num_fields($resultmenu);
//         for($i=0;$i<$field;$i++){
//             echo $row[$i];
//         }
//     }
// }


?>
    <?php
// include './backend/include/showproduct.php';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web ban giay</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/toast.css">




    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>

<body class="bg-main">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="../../frontend/assets/img/logo.png" width="200px " alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox"> Nhớ mật khẩu 
                            </label>
                            <label class="pull-right">
                                <a href="#">Quên mật khẩu?</a>
                            </label>

                        </div>
                        <button name="dangnhap" type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Đăng nhập</button>
                        <!-- <div class="container">
  <button name="show" class="show">Đăng nhập</button>
</div> -->

<!-- <div class="toast jam" aria-hidden="true">
  <span class="close" aria-role="button" tabindex="0">&times;</span>
  Lightly toasted with jam.
</div> -->
                        <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Đăng nhập với Facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-google"></i>Đăng nhập với Google</button>
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="./js/Toast.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>