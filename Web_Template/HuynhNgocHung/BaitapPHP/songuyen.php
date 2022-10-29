<?php
    $fp = @fopen("E:\HocTap\PHP\BTPHP\songuyento.txt","w+");
    if(!$fp){
        echo "Mo file khong thanh cong";
    }
    else {
        $n = rand(1, 100);
        if($n<2){
            echo "n khong phai la so nguyen to  <br>";
            }
        $count = 0;
        for ($i=2; $i < sqrt($n) ; $i++) { 
            # code...
            if( $n% $i==0){
                echo "So nguyen to <b>$i</b> <br>";
                $count++;
                fwrite($fp,$data);
                
            }
            else {
                echo " khong phai la so nguyen to $i  <br>";
            }
        }
    }
     
?>