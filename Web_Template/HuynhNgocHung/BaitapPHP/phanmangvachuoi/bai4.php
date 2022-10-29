<?php 
     function tong($arr)
     {
        $tong = 0;
         for ($i = 0; $i < count($arr); $i++) {
            $tong = $tong +$i;             
         }
 
         return -1;
     }
 
     $str = "";
 
     $str_kq = "";
 
     $ketqua = "";
    
   
     if ( isset($_POST['tinh'])) {
 
         $str = $_POST['mang'];
 
         $arr = explode(",", $str);
 
         $str_kq = implode(",", $arr);
         $ketqua = tong($arr);

     }
 
     ?>

<?php
 include 'headerboostrap.php';
?>
<form action="" method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Nhap day so</label>
    <input type="text" class="form-control" value="<?php echo $str; ?> " id="mang" placeholder="Example input">
  </div>
  <div class="form-group">
    
    <input type="submit" class="form-control" id="" value="Tong day so">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Tong day so</label>
    <input type="text" class="form-control " value="<?php echo $ketqua; ?> "   id="tong" name="kq">
  </div>
</form>

    <?php
 include 'footerboostrap.php';
?>
