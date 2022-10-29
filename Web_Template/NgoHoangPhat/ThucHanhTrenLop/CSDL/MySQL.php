<form action="testcsdl" method="POST">
<?php
$conn = mysqli_connect('localhost', 'root', '', 'qlbansua')
or die ('Không thể kết nối tới database'. mysqli_connect_error());

$sqlbangsua = "SELECT * FROM sua";
$result = mysqli_query($conn, $sqlbangsua);
$row=mysqli_num_rows($result);

$sqlcau1="SELECT Ten_hang_sua,Dia_chi,Dien_Thoai FROM hang_sua";    
$resultcau1 = mysqli_query($conn, $sqlcau1);
$rowcau1=mysqli_num_rows($resultcau1);


$a=0;
function Cau1($resultcau1,$a)
{
    if(mysqli_num_rows($resultcau1)!=0)
    {
        echo "<table border='1'>";
        while($row=mysqli_fetch_row($resultcau1))
        {
            $a++;
            $field=mysqli_num_fields($resultcau1);
            echo "<tr>";
            for($i=0;$i<$field;$i++)
            {
                if($a%2==0)
                {
                    echo "<td style='background-color:#e7e9eb'>$row[$i]</td>";
                }
                else{
                echo "<td style='background-color:#45e0a8'>$row[$i]</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
function CSDL($result,$a){
if(mysqli_num_rows($result)!=0){
    // cứ 1 lần lặp là mysqli_fecth_row tự xuống 1 dòng, phải lặp lại nguyên câu lệnh fetch_row
    while($row = mysqli_fetch_row($result)){
        $a++;
        echo "<tr>";
        $field=mysqli_num_fields($result);
        for($i=0;$i<$field;$i++)
        {
            if($a%2==0)
            {
                echo "<td style='background-color:#e7e9eb'>$row[$i]</td>";
            }
            else{
            echo "<td style='background-color:#45e0a8'>$row[$i]</td>";
            }
        }   
        echo "</tr>";
    }
}
}
?> 
</form>