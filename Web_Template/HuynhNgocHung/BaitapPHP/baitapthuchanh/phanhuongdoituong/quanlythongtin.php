<?php
    class NhanVien{
        public $hoten;
        public $gioitinh;
        public $ngay;
        public $hesocon;
        public $luongcoban;
        public $hesoluong;
        public function __construct($hoten, $gioitinh, $ngay, $hesocon, $luongcoban, $hesoluong) {
            $this -> hoten = $hoten;
            $this ->gioitinh = $gioitinh; //
            $this ->ngay = $ngay; //
            $this ->hesocon = $hesocon; //
            $this ->luongcoban = $luongcoban;
            $this ->hesoluong = $hesoluong;
        }
        public function tinhTienThuong($ngay){
       
      
            $getDate = getdate();
            $namhientai = $getDate['year'];
            $nambatdau = explode("-",$ngay)[2];
            echo "Nam bat dau $nambatdau";
            echo " <br/> nam hien tai $namhientai";
           $sonamlamviec =($namhientai-$nambatdau);
             echo "<br />So nam lam viec la  $sonamlamviec <br />";
            $tienthuong = $sonamlamviec * 1000000;
           
            return $tienthuong;
           
           

        }
    }
  
class NhanVienVP extends NhanVien{
    public $songayvang;
    public $dinhmucvang;
    public $dongiaphat;
    public function __construct($luongcoban,$hesoluong,$songayvang,$dinhmucvang,$dongiaphat,$gioitinh) {
        $this->songayvang = $songayvang;
        $this->dinhmucvang = $dinhmucvang;
        $this->dongiaphat = $dongiaphat;
        $this->gioitinh = $gioitinh;
        $this->hesoluong = $hesoluong;
        $this->luongcoban = $luongcoban;

    }
    public function tinhTienPhat($songayvang,$dinhmucvang,$dongiaphat){
        if($songayvang > $dinhmucvang){
            echo "<br/> Dinh muc vang : $dinhmucvang < $songayvang";

            $tienphat = $songayvang * $dongiaphat; //
            return $tienphat;
        }
    }
    public function tinhTroCap($gioitinh,$hesocon)
    {
        if($gioitinh == "nu"){
            $tientrocap = 200000 * $hesocon * 1.5;
            return  $tientrocap ;
        }
        else{
            $tientrocap = 200000 * $hesocon;
            return $tientrocap;
        }
    }
    public function tinhtienLuong($luongcoban,$hesoluong,$tienphat){
        $tienluong = $luongcoban * $hesoluong - $tienphat;
        return $tienluong;
    }
}
class NhanVienSX extends NhanVien{
   public $sosanpham;
   public $dinhmucSP;
   public $dongiaSP;
   public function __construct($hesocon,$sosanpham,$dinhmucSP,$dongiaSP){// {
    $this -> sosanpham = $sosanpham;
    $this ->dinhmucSP = $dinhmucSP;
    $this -> dongiaSP = $dongiaSP;
    $this -> hesocon = $hesocon;
   }
   public function tinhtienthuongSX($sosanpham,$dinhmucSP,$dongiaSP){
    if($sosanpham>$dinhmucSP){
        echo " <br/> So san pham la : $sosanpham . Don gia : $dongiaSP . Dinh muc $dinhmucSP";
        $tienthuongSX = ($sosanpham * $dinhmucSP) * $dongiaSP*0.03;
        return $tienthuongSX; 
    }

   }
   public function tinhTroCapSX($hesocon){
    echo "<br/> He so con $hesocon";
    $tientrocapSX = $hesocon * 120000;
    return $tientrocapSX;
   }
   public function tienTienLuong($sosanpham,$dongiaSP,$dinhmucSP){
        echo " <br/> So san pham la : $sosanpham . Don gia : $dongiaSP . Dinh muc $dinhmucSP";
        $tienluongSX = ($sosanpham * $dongiaSP) +  ($sosanpham * $dinhmucSP) * $dongiaSP*0.03;
        return $tienluongSX;
   }
}
$HoTen = $_POST["HoTen"];
 $nhanvien = new NhanVien("hung","nam","2-9-2001","2","500",3);
 $tienthuong = $nhanvien ->tinhTienThuong("2-9-2005");

 echo "tien thuong nhan vien nhan duoc la $tienthuong VND";
$nhanvienvanphong = new NhanVienVP(500,3,2,3,5,"nu");
$tienphat = $nhanvienvanphong ->tinhTienPhat(5,3,20);
echo "<br/> Tien phat cua nhan vien van phong = $tienphat VND";
$tientrocapNam = $nhanvienvanphong ->tinhTroCap("nam",2);
$tientrocapNu = $nhanvienvanphong ->tinhTroCap("nu",2);
echo "<br/> Tien tro cap nhan vien nu la : $tientrocapNu VND";
echo "<br/> Tien tro cap nhan vien nam la : $tientrocapNam VND";
$tienluong = $nhanvienvanphong ->tinhtienLuong(500,3,10);
echo "<br/> Tien luong cua nhan vien la : $tienluong VND";

$nhanviensx = new NhanVienSX(5,3,10,20);
 $tienthuongsx =$nhanviensx ->tinhtienthuongSX(10,3,20);
 $tienluongsx = $nhanviensx ->tienTienLuong(10,20,100);
 $tientrocapsx = $nhanviensx ->tinhTroCapSX(10);
 echo "<br/> Tien luong cua nhan vien la : $tienluongsx VND";
 echo "<br/> Tien tro cap la $tientrocapsx VND" ;
echo "<br/> Tien thuong la $tienthuongsx VND";
 $getDate = getdate();
 echo $getDate();
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
<form action="Bai2.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="">Họ và Tên:</label>
                </td>
                <td>
                    <input type="text" name="HoTen">
                </td>
                <td>
                    <Label>Số con:</Label>
                </td>
                <td>
                    <input type="text" name="Socon">
                </td>
            </tr>
            <tr>
                <td>
                <Label>Ngày Sinh:</Label>
                </td>
                <td>
                    <input type="text" name="Ngaysinh" id="">
                </td>
                <td>
                    <Label>Ngày vào làm:</Label>
                </td>
                <td>
                    <input type="text" name="Ngayvaolam">
                </td>
            </tr>
            <tr>
                <td>
                    <Label>Giới tính:</Label>
                </td>
                <td>
                    <input type="radio" name="sex" id="" value="Nam">Nam</input>
                    <input type="radio" name="sex" id="" value="Nữ">Nữ</inpput>
                </td>
                <td>
                    <Label>Hệ số lương:</Label>
                </td>
                <td>
                    <input type="text" name="Hesoluong">
                </td>
            </tr>
            <tr>
                <td>
                    <Label>Loại nhân viên:</Label>
                </td>
                <td>
                    <input type="radio" name="Vanphong" id="" value="Văn Phòng">Văn Phòng
                </td>
                <td>
                    <input type="radio" name="Sanxuat" id="" value="Sản Xuất">Sản Xuất
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>
                    <Label>Số ngày vắng:</Label>
                    <input type="text" name="Songayvang" id="">
                </td>
                <td>
                    <Label>Số sản phẩm:</Label>
                    <input type="text" name="Sosanpham" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Tính lương">
                </td>
            </tr>
            <tr>
                <td>
                <label for="">Tiền Lương:</label>
                </td>
                <td>
                 <input type="text" name="Tienluong">
                </td>
                <td>
                    <Label>Trợ Cấp:</Label>
                </td>
                <td>
                    <input type="text" name="Trocap" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <Label>Tiền thưởng:</Label>
                </td>
                <td>
                    <input type="text" name="Tienthuong" id="">
                </td>
                <td>
                    <Label>Tiền Phạt:</Label>
                </td>
                <td>
                    <input type="text" name="Tienphat" id="">
                </td>
            </tr>
            <tr></tr>
        </table>
    </form>
</body>
</html>