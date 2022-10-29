
<?php
 include 'headerboostrap.php';
?>
  <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
    <?php
 include 'footerboostrap.php';
?>

<?php
   $number = $_POST["number"];
   $array = array();
   $dem = 0;
   if(isset($_POST["submit"])){
       for( $i = 0; $i <$number; $i++){
           $rand = rand(1,$number);
           $array[$i]=$rand;


           if($array[$i]%2 ==0){
                $dem++;
             
              }
          
          
          // print_r($array);
       
          //print_r($array);
       //    b dem xem co bao nhieu thanh phan trong mang co gia tri chan
       }
      
     
   }
   
 





?>