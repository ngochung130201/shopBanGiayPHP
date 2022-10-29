<?php
define("PI",3.14);
$a = rand(1, 4);
$b = rand(10, 100);
echo "a = $a <br>";
echo "b = $b <br>";

switch ($a) {
    case 1:
        echo " chu vi hinh vuong  canh $b = <br>", $b * 4;
        echo " Dien tich hinh vuong canh $b = <br>", $b * 2;
        # code...
        break;
    case 2:
        echo "Chu vi  hinh tron canh $b = <br>", $b *2  * PI;
        echo " dien tich hinh tron canh $b = <br>", $b * $b * PI;
        # code...
        break;
    case 3:
        echo "tinh chu vi tam giac canh a = $a b = $b = ", $b * 3;
        echo "Dien tich tam giac canh a = $a b = $b =", $a * $b / 2;
        # code...
        break;
    case 4:
        echo " chu vi hinh chu nhat canh a = $a b = $b = ", ($a + $b) * 2;
        echo " <br>dien tich hinh chu nhat canh a = $a b = $b = ", $b * $a;
        # code...
        break;
    default:
        # code...
        break;
}
   // bai 3
