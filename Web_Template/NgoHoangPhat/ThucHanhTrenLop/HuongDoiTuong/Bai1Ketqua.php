<?php
    if(isset($_POST['HoTen']))
    $ht=$_POST['HoTen'];
    else
    $ht="";
    if(isset($_POST['Diachi']))
    $dc=$_POST['Diachi'];
    else
    $dc="";
    if(isset($_POST['sex']))
    $gt=$_POST['HoTen'];
    else
    $gt="";
    if(isset($_POST['trinhdo']))
    $trinhdo=$_POST['trinhdo'];
    else
    $trinhdo=3;
    if(isset($_POST['Lophoc']))
        $Lophoc=$_POST['Lophoc'];
    else
    $Lophoc="";
    if(isset($_POST['Nganh']))
    $Nganh=$_POST['Nganh'];
    else
    $Nganh="";
    $LuongCoBan=1500000;
        class People{
            public $HoTen;
            public $Diachi;
            public $GioiTinh;
            public function __construct($HoTen,$Diachi,$GioiTinh)
            {
                $this->HoTen = $HoTen;
                $this->Diachi = $Diachi;
                $this->GioiTinh = $GioiTinh;
            }
            public function getName()
            {
                return $this->HoTen;
            }
            public function getDiachi()
            {
                return $this->Diachi;
            }
            public function getGioiTinh()
            {
                return $this->GioiTinh;
            }
        }
        class SinhVien extends People
        {
            public $LopHoc;
            public $NganhHoc=array("Công Nghệ Thông Tin","Kế Toán Tài Chính");
            public function  __construct($LopHoc,$NganhHoc)
            {
                $this->LopHoc = $LopHoc;
                $this->NganhHoc = $NganhHoc;
            }
            public function TinhDiem($NganhHoc)
            {
                if($NganhHoc=='CNTT')
                    $Diemthuong=1;
                if($NganhHoc=='KinhTe')
                    $Diemthuong=1.5;
                    else
                    $Diemthuong=0;
            }
           public function NganhHoc($NganhHoc)
            {
                if($NganhHoc==0)
                    $text="Bạn Học Công Nghệ Thông Tin";
                if($NganhHoc==1)
                $text="Bạn Học Kế Toán";
                return $text;
            }
        }
        class GiangVien extends People
        {
            public $Trinhdo=array("CuNhan","ThacSi","TienSi");
            public $LuongCoBan;
            public $Luong=0;
            public function __construct()
            {
                // $this->Trinhdo=$Trinhdo;
                // $this->LuongCoBan=$LuongCoBan;
            }
            public function KiemTra($Trinhdo,$LuongCoBan)
            {
                if($Trinhdo==0)
                {
                    $Luong=$LuongCoBan*2.34;
                    return $Luong;
                }
                //return $Luong;
                if($Trinhdo==1)
                {
                    $Luong=$LuongCoBan*3.67;
                    return $Luong;
                }
                if($Trinhdo==2)
                {
                    $Luong=$LuongCoBan*5.66;
                    return $Luong;
                }
                
            }
            public function KiemTraTrinhDo($Trinhdo)
            {
                $text="";
                if($Trinhdo==0)
                {
                    $text="Bạn có trình độ là Cử Nhân";
                }
                //return $Luong;
                if($Trinhdo==1)
                {
                    $text="Bạn có trình độ là Thạc Sĩ";
                }
                if($Trinhdo==2)
                {
                     $text="Bạn có trình độ là Tiến Sĩ";
                }
                return $text;
            }
        }
            $sv=new People($ht,$dc,$gt);
            $ttsv=new SinhVien($Lophoc,$Nganh);
            $gv=new GiangVien();
            $ten=$sv->getName();
            $nganhhoc=$ttsv->NganhHoc($Nganh);
            $gioitinh=$sv->getGioiTinh();
            $diachi=$sv->getDiachi();
            $luong=$gv->KiemTra($trinhdo,$LuongCoBan);
            $rank=$gv->KiemTraTrinhDo($trinhdo);
        // $sv=new People($HoTen,$Diachi,$GioiTinh);
        // echo $sv->getName();
        // $giangvien=new GiangVien();
        // echo $giangvien->KiemTra(1,1500000);
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
            <th><h3>Thông tin Giáo Viên, Học Sinh</h3></th>
            <tr>
                <td>
                    <label for="">Họ Tên:</label>
                </td>
                <td>
                    <input type="text" name="" id="" disabled="disabled"
                    value="<?php echo "$ten" ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Địa chỉ:</label>
                </td>
                <td>
                    <input type="text" name="" id="" disabled="disabled"
                    value="<?php echo "$diachi" ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Giới Tính:</label>
                </td>
                <td>
                    <input type="text" name="" id="" value="<?php echo "$gioitinh" ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <Label>Lương:</Label>
                </td>
                <td>
                    <input type="text" name="" id="" value="<?php echo "$luong" ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Trình Độ Giảng Viên:</label>
                </td>
                <td>
                    <input type="text" value="<?php echo "$rank" ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <Label>Học Lớp:</Label>
                    <input type="text" name="" id="" value="<?php echo "$Lophoc" ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <Label>Ngành Học</Label>
                    <input type="text" disabled="disabled" value="<?php echo "$nganhhoc" ?>">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>