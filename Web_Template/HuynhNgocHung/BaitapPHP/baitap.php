<?php
 $fp = @fopen("E:\HocTap\PHP\BTPHP\capso.txt","w+");
 if(!$fp){
     echo "Mo file khong thanh cong";
 }
 else {
   $n = 5;
   // tao ra 5 cap so ngau nhien khac nhau gia tri moi cap so namw trong khoang [0,65]
     do{
        $capsoA = rand(0,65);
        $capsoB = rand(0,65);
        $capsoC = rand(0,65);
        $capsoD = rand(0,65);
        $capsoE = rand(0,65);
        
        if($capsoA != $capsoB){
           if($capsoC != $capsoD){
              if($capsoD!= $capsoE){
                 if($capsoE!= $capsoA){
                 echo "khac het <br>";
                 $data = $capsoA.''.$capsoB. ''.$capsoC. ''.$capsoD.''.$capsoE ;
                 // chuyen doi chuo thanh mang
                 $arrayData = str_split($data,2);
                 sort($arrayData);
               //   foreach($arrayData as $itemData){
               //    echo "$itemData-";
               //   }
              
                 // chuyen doi mang thanh chuoi
                  $stringConvert = implode('-',$arrayData);
                  echo "$stringConvert";
                  // echo $data ;
                  fwrite($fp,$stringConvert);
                 }
              }
           }
        }
       
        else {
           echo "co so bi trung";
        }
        
     }while( $n > 5 );
 }

?>
 
