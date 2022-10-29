<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    $ngaunhien=array();
    $chanle=0;
        if(isset($_POST['SoDong']) && $_POST['SoDong'])
        {
            $socot=trim($_POST['SoCot']);
            $sodong=trim($_POST['SoDong']);
        }
        else
        {
            $socot=0;
            $sodong=0;
        }
        if(isset($_POST['Tinh']))
        {
            for($i=0;$i<$sodong;$i++)
            {
                for($j=0;$j<$socot;$j++)
                {
                    $ngaunhien[$i][$j]=rand(-1000,1000);
                }
            }
            // for($i=0;$i<$sodong;$i++)
            // {
            //     for($j=0;$j<$socot;$j++)
            //     {
            //         if($i%2==0 && $j%2!=0)
            //         {
            //             // $chanle=$ngaunhien[$i][$j];
            //             //print_r($ngaunhien);
            //         }
            //     }
            // }
        }
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <span>Nhập số dòng:</span>
                    <input type="text" name="SoDong">
                </td>
            </tr>
            <tr>
                <td>
                    <span>Nhập số cột</span>
                    <input type="text" name="SoCot">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="Tinh" value="Tính">
                </td>
            </tr>
            <tr>
                <td>
                    <textarea name="Matran" id="" cols="30" rows="10">
                       <?php 
                       for($i=0;$i<$sodong;$i++)
                       {
                           for($j=0;$j<$socot;$j++)
                           {                           
                               echo $ngaunhien[$i][$j]."\t";
                           }
                           echo "\n";
                       }
                       echo "\n";
                       echo "Các số trên dòng chẵn cột lẻ:";
                        for($i=0;$i<$sodong;$i++)
                        {
                            for($j=0;$j<$socot;$j++)
                            {
                                if($i%2==0 && $j%2!=0)
                                {
                                    echo $ngaunhien[$i][$j]."\t";
                                    // echo "Các số trên dòng chẵn cột lẻ:".$ngaunhien[$i][$j]."\t";
                                }
                            }
                        }
                       ?>
                    </textarea>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>