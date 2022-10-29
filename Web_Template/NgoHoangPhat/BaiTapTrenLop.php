<?php 
    define("pi",3.14);
    $a=rand(1,4);
    $b=rand(10,100);
    switch($a)
    {
        case 1:
            echo "Chu vi hinh vuong co canh b=$b la ",$b*4;
            echo "<br> Dien tich hinh vuong co canh b=$b la",$b*$b;
            break;
        case 2:
            echo "Chu vi hinh tron co ban kinh b=$b la ",2*$b*pi;
            echo "<br>Dien tich hinh tron co ban kinh b=$b la ",$b*$b*pi;
            break;
        case 3:
            echo "Chu vi tam giac deu co canh la b=$b la",3*$b;
            echo "<br> Dien tich tam giac deu co canh la b=$b la ";
            
    }
?>