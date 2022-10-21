<?php
 session_start();
 if(!isset($_SESSION['email'])){
    header("location:login.php");
    exit();
 };
?>

<?php
// include './backend/include/showproduct.php';
?>
<?php
include './include/Header.php'
?>
  <?php
   include './script/Script.php'
   ?>
  

    <!-- Left Panel -->

   <?php
   include '../backend/view/sanpham/index.php'
   ?>
    <!-- /#right-panel -->

    <!-- Scripts -->
  
        <?php 
      include './include/footer.php';
      ?>
