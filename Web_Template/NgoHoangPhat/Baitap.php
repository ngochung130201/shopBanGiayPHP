<?php 
    $n=5; 
    $trunggian=0; 
    $a=0;
    for($i =1;$i<=$n;$i++)
    {
        $so=rand(0,65);
        $b=$so;     
        // echo "$so \t";
        if($b!=$trunggian)
        {
            echo "$so \t";
        }
        else
        {
            echo "Co so bi trung";
            $i=$i-1;
        }
        $a=$so;
        $trunggian=$a;
    }
?>