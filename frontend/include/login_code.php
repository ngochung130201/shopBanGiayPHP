<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src="../js/Toastr/toastr.min.js"></script>
<script>
function alertSuccess(message,url){
    $(function(){
        toastr.options.onHidden=function(){
            window.location.href=url;
        }
        toastr["error"](message, "Warning")
            toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates":true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }
        // toastr.error(message)
    })
}
</script>
<?php
if (isset($_POST['email']))
    $email = $_POST['email'];
else
    $email = null;
if (isset($_POST['password']))
    $password = $_POST['password'];
else
    $password = null;
$conn = mysqli_connect('localhost', 'root', '', 'bangiay') or die('Không
thể kết nối tới database' .
    mysqli_connect_error());
$error = "";
if (isset($_POST['login'])) {
    $login = 'SELECT * FROM account';
    $result = mysqli_query($conn, $login);
    if (mysqli_num_rows($result) != 0) {
        while ($row = mysqli_fetch_row($result)) {
            if ($email == $row[2] && md5($password) == $row[3] && $row[4] == 1) {
                header("Location: ../../backend/admin.php");
            }
            else if($email == $row[2] && md5($password) == $row[3] && $row[4] == 2){
                header('location:index.php');
                
            }
             else {
                echo '<script type="text/javascript">
                    alertSuccess("Sai Tài Khoản và Mật Khẩu","login.php")</script>';
                // // header('location:login.php');
                // $error = "<span style='color:red'>Sai tài khoản mật khẩu</span>";
            }
        }
    }
}
//hihi
