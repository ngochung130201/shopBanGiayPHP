<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td><input type="text" name="n" /></td>
            </tr>
            <tr>
                <td><input type="submit" name="tinh" value="Tính"></td>
            </tr>
        </table>
    </form>
    <?php
    $number=array();
    $demchan=0;
    $demnhohon=0; 
    $tongAm=0;
    $benhat=0;
    $trunggian=0;
        if(isset($_POST['n']))
            $n=trim($_POST['n']);
        else $n=0;
        if(isset($_POST['tinh']))
            {
                echo "Các số ngẫu nhiên được tạo trong khoảng 0 đến $n: ";
                for($i=0;$i<$n;$i++)
                {
                    $ngaunhien=rand(-$n,$n);
                    echo "$ngaunhien \t";
                    $number[$i]=$ngaunhien;
                } 
                echo "<br> Các số chẵn là:";
                for($i=0;$i<$n;$i++)
                {
                    if($number[$i]%2==0)
                    {
                        echo "$number[$i] \t";
                        $demchan++;
                    }
                }
                echo "<br> Số lượng các số chẵn là: $demchan";
                echo "<br> Các số nhỏ hơn 100 là: ";
                for($i=0;$i<$n;$i++)
                {
                    if($number[$i]<100)
                    {
                        echo "$number[$i] \t";
                        $demnhohon++;
                    }
                }
                echo "<br> Số lượng số nhỏ hơn 100 là: $demnhohon";
                for($i=0;$i<$n;$i++)
                {
                    if($number[$i]<0)
                    {
                        $tongAm+=$number[$i];
                    }
                }
                echo "<br> Tổng của các số âm trong mảng là: $tongAm";
                echo "<br> Các vị trí của số 0 trong mảng là:";
                for($i=0;$i<$n;$i++)
                {
                    if($number[$i]==0)
                    {
                        echo "$i \t";   
                    }
                }
                echo "<br> Mảng sau khi sắp xếp tăng dần: ";
                for($i=0;$i<$n;$i++)
                {
                    $benhat=$number[$i];
                    for($j=$i;$j<$n;$j++)
                    {
                        if($benhat>$number[$j])
                        {
                            $trunggian=$number[$j];
                            $number[$j]=$benhat;
                            $benhat=$trunggian;
                            $number[$i]=$benhat;
                        }
                    }
                    echo "$number[$i] \t";
                }
            }
    ?>
</body>
</html>