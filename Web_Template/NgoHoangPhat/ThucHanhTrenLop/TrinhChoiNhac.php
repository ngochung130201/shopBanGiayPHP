<?php 
if(isset($_POST['chonnhac']))
$chonnhac=$_POST['chonnhac'];
else
$chonnhac=null;
function ChonNhac($chonnhac)
{
    if($chonnhac=="arcade")
    $link="/PHP/ThucHanhTrenLop/Song/Arcade - Duncan Laurence.mp3";
    if($chonnhac=="lily")
    $link="/PHP/ThucHanhTrenLop/Song/Lily - Alan Walker_ K-391_ Emelie Hollow.mp3";
    return $link;
}
if(isset($_POST['Chon']))
{
    $link=ChonNhac($chonnhac);
    echo "$link";
}
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
    <form action="TrinhChoiNhac.php" method="POST">
        <table>
            <select name="chonnhac" id="">
                <option value="arcade">Arcade</option>
                <option value="lily">Lily</option>
            </select>
            <audio controls>
                <source src="<?php echo "$link" ?>" type="audio/mp3">
            </audio>
            <input type="submit" name="Chon" value="Chon">
        </table>
    </form>
</body>
</html>