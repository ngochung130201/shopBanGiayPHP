
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h3 {
        color: darkorchid;

    }
    input{
        margin-bottom: 2rem;
    }
    input[type="submit"]{
        margin-top: 2rem;
    }
    form {
        width: 800px;
    }
</style>
<body>
    <h3>Chọn các phép tính trên phân số</h3>
  <form action="" method="post">
  <div class="">
        <span>Nhập phân số thứ 1 : </span>
        <label for="tuso1">Tử số:</label>
        <input type="text" name="tuso1" >
        <label for="mauso1">Mẫu số:</label>
        <input type="text" name="mauso1">
    </div> 
      <div class="">
        <span>Nhập phân số thứ 2 :</span>
        <label for="tuso2" >Tử số:</label>
        <input type="text" name="tuso2">
        <label for="mauso2">Mẫu số:</label>
        <input type="text" name="mauso2">
        
    </div>
    <div>
    
    </div>  
   <div class="">
     <fieldset>
  <legend>Chọn phép tính</legend>
  <input type="radio" name="pt" id="pt" value="+">Cộng 
        <input type="radio" name="pt" id="pt"  value="-">Trừ 
        <input type="radio"  name="pt" id="pt" value="*">Nhân
        <input type="radio" name="pt" id="pt"  value="/">Chia
       
</fieldset>
   </div>
    <input type="submit" name="tinh" value="Kết quả"  >
  </form>
</body>
</html>
<?php
class PhanSo {
    protected $tuso1;
    protected $mauso1;
    protected $tuso2;
    protected $mauso2;
    protected $pt;
    public function __construct($tuso1, $mauso1,$pt, $tuso2, $mauso2){
        $this->tuso1 = $tuso1;
        $this->mauso1 = $mauso1;
        $this -> pt = $pt;
        $this->tuso2 = $tuso2;
        $this->mauso2 = $mauso2;
    }
    public function TinhPhanSo($tuso1, $mauso1,$pt, $tuso2, $mauso2){
        if($pt == '+'){
            $kq = $tuso1/$mauso1 + $tuso2/$mauso2;
            echo "Phep tinh cong la : $tuso1/$mauso1 + $tuso2/$mauso2 = $kq";
        }
        if($pt == '-'){
            $kq = $tuso1/$mauso1 - $tuso2/$mauso2;
            echo "Phep tinh tru la : $tuso1/$mauso1 - $tuso2/$mauso2 = $kq";
          
        }
        if($pt == '*'){
            $kq = $tuso1/$mauso1 * $tuso2/$mauso2;
            echo "Phep tinh nhan la : $tuso1/$mauso1 * $tuso2/$mauso2 = $kq";
           
        }
        if($pt == '/'){
            $kq = $tuso1/$mauso1 / $tuso2/$mauso2;
            echo "Phep tinh chia la : $tuso1/$mauso1 / $tuso2/$mauso2 = $kq";
           
        }
    }
}
if($_POST['tinh']){
  
    $pt = $_POST['pt'];
    $tuso1 = $_POST['tuso1']; 
    $mauso1 = $_POST['mauso1'];
    $tuso2 = $_POST['tuso2']; 
    $mauso2 = $_POST['mauso2'];
    $phanso = new PhanSo($tuso1, $mauso1, $pt,$tuso2,$mauso2);
    $phanso ->TinhPhanSo($tuso1, $mauso1, $pt,$tuso2,$mauso2);
  
}
?>