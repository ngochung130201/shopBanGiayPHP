<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <form action="Bai3.php" method="POST">
        <table>
            <tr>
                <td>
                    <Label>Các phép tính trên phân số thứ 1:</Label>
                </td>
            </tr>
            <tr>
                <td><Label>Nhập phân số thứ 1: Tử số</Label></td>
                <td><input type="text" name="Tuso1" id=""></td>
                <td><Label>Mẫu số:</Label></td>
                <td><input type="text" name="Mauso1" id=""></td>
            </tr>
            <tr>
                <td><Label>Nhập phân số thứ 2: Tử số</Label></td>
                <td><input type="text" name="Tuso2" id=""></td>
                <td><Label>Mẫu số:</Label></td>
                <td><input type="text" name="Mauso2" id=""></td>
            </tr>
        </table>
        <div class="Pheptinh">
            <Label>Chọn phép tính:</Label>
            <input type="radio" name="pheptinh" id="Cong" value="cong">
            <label for="Cong">Cộng</label>
            <input type="radio" name="pheptinh" id="Tru" value="tru">
            <label for="Tru">Trừ</label>
            <input type="radio" name="pheptinh" id="Nhan" value="nhan">
            <label for="Nhan">Nhân</label>
            <input type="radio" name="pheptinh" id="Chia" value="chia">
            <label for="Chia">Chia</label>
        </div>
        <input type="submit" name="Tinh" value="Kết quả">
    </form>
</body>
</html>
<?php

use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;

if(isset($_POST['Tuso1']))
    $tuso1=$_POST['Tuso1'];
else
    $tuso1="";
    if(isset($_POST['Mauso1']))
    $mauso1=$_POST['Mauso1'];
else
    $mauso1="";
    if(isset($_POST['Tuso2']))
    $tuso2=$_POST['Tuso2'];
else
    $tuso2="";
    if(isset($_POST['Mauso2']))
    $mauso2=$_POST['Mauso2'];
else
    $mauso2="";
    if(isset($_POST['pheptinh']))
    $pheptinh=$_POST['pheptinh'];
else
    $pheptinh="";
    class TuSoMauso{
        protected $tuso1;
        protected $tuso2;
        protected $mauso1;
        protected $mauso2;

        function __construct($tuso1,$mauso1,$tuso2,$mauso2)
        {
            $this->tuso1=$tuso1;
            $this->tuso2=$tuso2;
            $this->mauso1=$mauso1;
            $this->mauso2=$mauso2;
        }
        public function getTuso1(){return $this->tuso1;}
        public function getTuso2(){return $this->tuso2;}
        public function getMauso1(){return $this->mauso1;}
        public function getMauso2(){return $this->mauso2;}
        
    }
    class Cong extends TuSoMauso
    {
        function PhepCong($tuso1,$mauso1,$tuso2,$mauso2)
        {
            $ketqua=($tuso1/$mauso1)+($tuso2/$mauso2);
            return $ketqua;
        }
    }
    class Tru extends TuSoMauso
    {
        function PhepTru($tuso1,$mauso1,$tuso2,$mauso2)
        {
            $ketqua=($tuso1/$mauso1)-($tuso2/$mauso2);
            return $ketqua;
        }
    }
    class Nhan extends TuSoMauso
    {
        function PhepNhan($tuso1,$mauso1,$tuso2,$mauso2)
        {
            $ketqua=($tuso1/$mauso1)*($tuso2/$mauso2);
            return $ketqua;
        }
    }
    class Chia extends TuSoMauso
    {
        function PhepChia($tuso1,$mauso1,$tuso2,$mauso2)
        {
            $ketqua=($tuso1/$mauso1)/($tuso2/$mauso2);
            return $ketqua;
        }
    }
    if(isset($_POST['Tinh']))
    {
        if($pheptinh=='cong')
        {
            $phepcong=new Cong($tuso1,$mauso1,$tuso2,$mauso2);
            $ketqua=$phepcong->PhepCong($tuso1,$mauso1,$tuso2,$mauso2);
        }
        if($pheptinh=='tru')
        {
            $pheptru=new Tru($tuso1,$mauso1,$tuso2,$mauso2);
            $ketqua=$pheptru->PhepTru($tuso1,$mauso1,$tuso2,$mauso2);
        }
        if($pheptinh=='nhan')
        {
            $phepnhan=new Nhan($tuso1,$mauso1,$tuso2,$mauso2);
            $ketqua=$phepnhan->PhepNhan($tuso1,$mauso1,$tuso2,$mauso2);
        }
        if($pheptinh=='chia')
        {
            $phepchia=new Chia($tuso1,$mauso1,$tuso2,$mauso2);
            $ketqua=$phepchia->PhepChia($tuso1,$mauso1,$tuso2,$mauso2);
        }
        if($pheptinh=='cong')
            echo "Phép cộng $tuso1/$mauso1 + $tuso2/$mauso2 là: $ketqua";
        if($pheptinh=='tru')
            echo "Phép trừ $tuso1/$mauso1 - $tuso2/$mauso2 là: $ketqua";
        if($pheptinh=='nhan')
            echo "Phép nhân $tuso1/$mauso1 * $tuso2/$mauso2 là: $ketqua";
        if($pheptinh=='chia')
            echo "Phép chia $tuso1/$mauso1 / $tuso2/$mauso2 là: $ketqua";
    }
 ?>