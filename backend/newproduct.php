<?php 
if(isset($_POST['name']))
$name=$_POST['name'];
else
$name=null;
if(isset($_POST['description']))
$description=$_POST['description'];
else
$description=null;
if(isset($_POST['price']))
$price=$_POST['price'];
else
$price=null;
// if(isset($_POST['img']))
// $img=$_POST['img'];
// else
// $img=null;
$link=__DIR__ ."images/";
if(!empty($_FILES))
{
    $img=$_FILES['img']['name'];
    move_uploaded_file($_FILES["img"]["tmp_name"],$link.$_FILES["img"]["name"]);    
}
else
$img=null;
$currdate=date('Y/m/d');
// $img = !empty($img) ? "'$img'" : "NULL";
$conn = mysqli_connect('localhost', 'root', '', 'bangiay') or die ('Không
thể kết nối tới database'.
mysqli_connect_error());
$newproduct="INSERT INTO product(Title,Image,Description,Price,CreateDate,UpdateDate)
VALUES('$name','$img','$description','$price','$currdate','$currdate')";
$result = mysqli_query($conn,$newproduct);


function add($result){
    if($result)
    {
        echo '<script language="javascript">';
        echo 'alert("Da them thanh cong")';
        echo '</script>';
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Them that bai")';
        echo '</script>';

    }
}
if(isset($_POST['insert']))
{
    // echo '<script language="javascript">';
    // echo 'alert("'.$img.'")';
    // echo '</script>';
add($result);
}
?>