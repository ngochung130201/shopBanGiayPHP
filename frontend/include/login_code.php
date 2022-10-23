<?php 
if(isset($_POST['email']))
$email=$_POST['email'];
else
$email=null;
if(isset($_POST['password']))
$password=$_POST['password'];
else
$password=null;
$conn = mysqli_connect('localhost', 'root', '', 'bangiay') or die ('Không
thể kết nối tới database'.
mysqli_connect_error());
$error="";
if(isset($_POST['login']))
{
    $login='SELECT * FROM account';
    $result=mysqli_query($conn,$login);
    if(mysqli_num_rows($result)!=0)
    {
        while($row=mysqli_fetch_row($result))
        {
            if($email==$row[2] && $password==$row[3] && $row[4]==1)
            {
                header('location:home.php');
            }
            else{
                // header('location:login.php');
                $error="<span style='color:red'>Sai tài khoản mật khẩu</span>";
            }
        }
    }
}
//hihi
?>