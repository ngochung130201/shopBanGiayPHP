<?php

    class People {
        protected $ten;
        protected $diachi;
        protected $gioitinh;
        public function __construct($ten, $diachi, $gioitinh){
            $this -> ten = $ten;
            $this -> diachi = $diachi;
            $this -> gioitinh = $gioitinh;

        }
        public function getTen()
        {
          return $this->ten;
        }
        public function getDiaChi()
        {
          return $this->diachi;
        }
        public function getGT()
        {
          return $this->gioitinh;
        }
       
    }
    class SinhVien  extends People{
        public $lophoc ;
        public $nganhhoc;
        public function __construct($ten, $diachi, $gioitinh,$lophoc,$nganhhoc){
            $this -> ten = $ten;
            $this -> diachi = $diachi;
            $this -> gioitinh = $gioitinh;
            $this -> lophoc = $lophoc;
            $this -> nganhhoc = $nganhhoc;

        }
        public function getLopHoc()
        {
          return $this->lophoc;
        }
        public function getnganhhoc()
        {
          return $this->nganhhoc;
        }
        public function tinhLuong($nganhhoc){
          if($nganhhoc == "CNTT"){
            $diemthuong = 1;
            return $diemthuong;
          }
          elseif($nganhhoc == "KT"){
            $diemthuong = 1.5;
            return $diemthuong;
          }
          else {
            $diemthuong = 0;
          }

        }
        
        
    }
    $sv1 = new SinhVien("hung","ninh hoa","nam","61CNTT","KT");
    // $sv2 = new SinhVien("hung","ninh hoa","nam","61CNTT","KT");
    // $sv3 = new SinhVien("hung","ninh hoa","nam","61CNTT","DL");
  
    // $nganhhocSv = $sv1 -> nganhhoc;
   
    // $namesv = $sv1 -> ten;
    // if($nganhhocSv == "CNTT" || $nganhhocSv == "cntt"){
    //     $diemthuong = 1;
    //     echo "Vi $namesv la Sinh vien nganh $nganhhocSv nen diem thuong la $diemthuong";
    // }
    // elseif($nganhhocSv == "KT" |  $nganhhocSv == "kt"){
    //     $diemthuong = 1.5;
    //     echo "Vi $namesv la Sinh vien nganh $nganhhocSv nen diem thuong la $diemthuong";
    // }
    // else {
    //     $diemthuong = 0;
    //     echo "Vi $namesv la Sinh vien nganh $nganhhocSv nen diem thuong la $diemthuong";
    // }

   class GiangVien  extends People{
         public  $luongCB ;
         public $trinhdo = array("Cu nhan","Thạc sĩ","Tiến sĩ");
        public function __construct($luongCB,$trinhdo) {
            $this -> luongCB = $luongCB;
            $this -> trinhdo = $trinhdo;
        }
        public function getTrinhdo(){
            
            return $this->trinhdo;
        }
       public function tinhLuong($trinhdo,$luongCB){
        if($trinhdo == "CuNhan"){
          $luong = $luongCB * 2.34;
          return $luong;
        }
        elseif($trinhdo=="ThacSi"){
          $luong = $luongCB * 3.67;
          return $luong;
        }
        else {
          $luong = $luongCB * 5.66;
          return $luong;
        }
       }
        

   }
  //  define("LUONG",15000);
  //  $gv = new GiangVien(LUONG,1);
  //  $td = $gv->trinhdo;
  //  $luong = 0;
  //  if($td == 0){
  //   $luong = LUONG * 2.34;
  //   echo  $luong;
  //  }
  //  if($td == 1){
  //   $luong = LUONG * 3.64;
  //   echo $luong;
  //  }
  //  if($td == 2){
  //   $luong = LUONG * 5.66;
  //   echo $luong;
  //  }
  $tensv = $_POST['ten'];
  $gt = $_POST['gt'];
  $dc = $_POST['dc'];
  $lop = $_POST['lop'];
  $nganh = $_POST['nganh'];
  $trinhdo = $_POST['trinhdo'];
  $luong = $_POST['luong'];
  if(isset($_POST['tinh'])){
    $sinhvien1 = new SinhVien($tensv,$dc,$gt,$lop,$nganh);
    $name1 = $sinhvien1 ->getTen();
    $gioitinh1 = $sinhvien1 -> getGT();
    $diachi1 = $sinhvien1 -> getDiaChi();
    $lophoc1 = $sinhvien1 ->getLopHoc();
    $nganhhoc1 = $sinhvien1 -> getnganhhoc();
    
    
    // $giaovien = new GiangVien($tensv,$dc,$gt,$lop,$nganh);
    // $name1 = $giaovien ->getTen();
    // $gioitinh1 = $giaovien -> getGT();
    // $diachi1 = $giaovien -> getDiaChi();
    // $tinhluong = $giaovien ->tinhLuong($trinhdo,$luong);
   
    
    
    
    // $kq2 = $name1 .$diachi1 .$gioitinh1 . $lophoc1 .$tinhluong ;
      $kq1 = $name1 .$diachi1 .$gioitinh1 . $lophoc1 .$nganhhoc1 ;

    
    
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <table border="1">
            <tr>
                <td>
                    <label for=""> Họ Tên:</label>
                    <input type="text"  name="ten" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for=""> Địa Chỉ</label>
                    <input type="text" name="dc">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Giới tính:</label>
                    <input type="radio" name="gt" value="Nam">Nam</input>
                    <input type="radio" name="gt" id="" value="Nữ">Nữ</input>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Chon đối tương</label>
                    <input type="radio" name="dt" value="SV">Giáo viên</input>
                    <input type="radio" name="dt" id="" value="SV">Sinh viên</input>
                </td>
            </tr>
            
            <div class="giaovien">
            <tr>
                <td>
                    <label for="">Giáo viên</label>
                    <label for="">Trinh do</label>
                    <select name="trinhdo" id="trinhdo">
                <option value="CN">Cử nhân</option>
                <option value="TS">Thạc sĩ</option>
                <option value="TienSi">Tiến sĩ</option>
               
                  </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Lương cơ bản</label>
                    <input type="text" name="luong">
                </td>
            </tr>
            </div>
            <div class="giaovien">
            <tr>
                <td>
                    <label for="">Sinh viên</label>
                    <label for="">Ngành</label>
                    <select name="nganh" id="nganh">
                <option value="CNTT">CNTT</option>
                <option value="KT">KT</option>
                <option value="khac">Khác</option>
               
                  </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Lớp</label>
                    <input type="text" name="lop">
                </td>
            </tr>
            </div>
            <tr>
                <td>
                   <div id="btn">
                   <input type="submit" name="tinh" id="" value="Hiển thị" width="100%">
                   </div>
                </td>
            </tr>
        </table>
    <textarea name="kq" id="" cols="30" rows="10">
    <?php
      echo  $kq1;
    
      
    ?>
<?php 

?>
    </textarea>
    </form>

</body>
</html>