<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" &gt; <html xmlns="http://www.w3.org/1999/xhtml" &gt; <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phát sinh mảng và tính toán </title>
</head>
<?php
function tao_mang($sopt)
{
    for ($i = 0; $i < $sopt; $i++)
        $mang[$i] = rand(0, 20);
    return $mang;
}

function xuat_mang($mang)
{
    $sopt = count($mang);
    $chuoi = "";
    for ($i = 0; $i < $sopt; $i++)
        $chuoi = $chuoi . $mang[$i] . ", ";
    return $chuoi;
}

function tinh_tong($mang)
{
    $sopt = count($mang);
    $tongm = 0;
    for ($i = 0; $i < $sopt; $i++)
        $tongm = $tongm + $mang[$i];
    return $tongm;
}

function tim_max($mang)
{
    $sopt = count($mang);
    $max = $mang[0];
    for ($i = 0; $i < $sopt; $i++) {
        if ($max < $mang[$i])
            $max = $mang[$i];
    }
    return $max;
}

function tim_min($mang)
{
    $sopt = count($mang);
    $min = $mang[0];
    for ($i = 0; $i < $sopt; $i++) {
        if ($min > $mang[$i])
            $min = $mang[$i];
    }
    return $min;
}
if (isset($_POST["sopt"])) {
    $sopt = $_POST["sopt"];
    $mang = tao_mang($sopt);
    $mangkq = xuat_mang($mang);
    $tongm = tinh_tong($mang);
    $max = tim_max($mang);
    $min = tim_min($mang);
}
?>

<body>
    <form action="" method="post">
        <table width="526" border="0" align="center" bgcolor="#FFCCCC">
            <tr bgcolor="#CC00FF">
                <td align="center" colspan="2">
                    <font color="#FFFFFF"><b>PHÁT SINH MẢNG VÀ TÍNH TOÁN</b></font>
                </td>
            </tr>
            <tr bgcolor="#FF99CC">
                <td>Nhập số phần tử:</td>
                <td><input name="sopt" type="text" value="<?php echo $_POST["sopt"]; ?>" size="40" /></td>
            </tr>
            <tr bgcolor="#FF99CC">
                <td align="center" colspan="2"><input type="submit" value="Phát sinh và tính toán" style="background-color:#FFFF00" /></td>
            </tr>
            <tr>
                <td>Mảng: </td>
                <td><input name="mangkq" type="text" value="<?php echo $mangkq; ?>" size="40" style="background-color:#FF6699" /></td>
            </tr>
            <tr>
                <td>GTLN(Max)trong mảng: </td>
                <td><input type="text" name="max" value="<?php echo $max; ?>" style="background-color:#FF6699" /></td>
            </tr>
            <tr>
                <td>GTNN(Min)trong mảng: </td>
                <td><input type="text" name="min" value="<?php echo $min; ?>" style="background-color:#FF6699" /></td>
            </tr>
            <tr>
                <td>Tổng mảng: </td>
                <td><input type="text" name="tongm" value="<?php echo $tongm; ?>" style="background-color:#FF6699" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">(<font color="#FF0000">Ghi chú:</font> Các phần tử trong mảng sẽ có giá trị từ 0 đến 20)</td>
            </tr>
        </table>
    </form>
</body>

</html>