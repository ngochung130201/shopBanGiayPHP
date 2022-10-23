<?php
if (isset($_POST['username']))
    $username = $_POST['username'];
else
    $username = null;
if (isset($_POST['email']))
    $email = $_POST['email'];
else
    $email = null;
if (isset($_POST['password']))
   {
    $password = $_POST['password'];
    $md5Password=md5($password);
   }

else
    $md5Password = null;
$error = "";
$conn = mysqli_connect('localhost', 'root', '', 'bangiay') or die('Không
thể kết nối tới database' .
    mysqli_connect_error());

if (isset($_POST['register'])) {
    $roid = 2;
    $newuser = "INSERT INTO account(UseName,Email,Password,RoID) VALUES ('$username', '$email', '$md5Password','$roid')";
    $result = mysqli_query($conn, $newuser);
    //kiem tra xem biến kết nối với câu lệnh truy vấn đã được thực thi thành công chưa
    if ($result) {
        header('location:login.php');
    } else {
        $error = "<span style='color:red'>Sai Thông Tin Đăng Ký</span>";
    }
}
//hehe
