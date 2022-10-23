<?php 
if(isset($_POST['username']))
$username=$_POST['username'];
else
$username=null;
if(isset($_POST['email']))
$email=$_POST['email'];
else
$email=null;
if(isset($_POST['password']))
$password=$_POST['password'];
else
$password=null;
$error="";
$conn= mysqli_connect('localhost', 'root', '', 'bangiay') or die ('Không
thể kết nối tới database'.
mysqli_connect_error());

if(isset($_POST['register'])){
    $roid=1;
$newuser="INSERT INTO account(UseName,Email,Password,RoID) VALUES ('$username', '$email', '$password','$roid')";
$result=mysqli_query($conn, $newuser);
//kiem tra xem biến kết nối với câu lệnh truy vấn đã được thực thi thành công chưa
if($result)
{
    header('location:login.php');
}
else
{
    $error= "<span style='color:red'>Sai Thông Tin Đăng Ký</span>";
}
}
//hehe
?>