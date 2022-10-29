
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #btn{
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<body>
    
<form action="Bai1Ketqua.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="">Nhập Họ Tên:</label>
                    <input type="text" name="HoTen" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Nhập Địa Chỉ</label>
                    <input type="text" name="Diachi">
                </td>
            </tr>
            <tr>
                <td>
                   <div id="btn">
                   <input type="submit" name="Tinh" id="" value="Hiển thị" width="100%">
                   </div>
                </td>
            </tr>
            <tr>
                <td>
                    <Label>Giáo Viên:</Label>
                    <select name="trinhdo" id="">
                        <option value="0">Cử Nhân</option>
                        <option value="1">Thạc Sĩ</option>
                        <option value="2">Tiến Sĩ</option>
                    </select>
                    <Label>Lương cơ bản:</Label>
                    <input type="text" name="LongCB" id="">
                <!-- <td>
                    <Label>Giáo Viên:</Label>
                    <!-- <label for="">Trình Độ:</label>
                    <input type="radio" name="trinhdo" id="Cunhan" value=0>
                    <label for="Cunhan">Cử Nhân</label>
                    <input type="radio" name="trinhdo" id="Thacsi" value=1>
                    <label for="Thacsi">Thạc Sĩ</label>
                    <input type="radio" name="trinhdo" id="Tiensi" value=2>
                    <label for="Tiensi">Tiến Sĩ</label> -->
                </td>
            </tr>
            <tr>
                
            </tr>
            <tr>
                <td><Label>Sinh Viên</Label>
                    <Label>Lớp Học</Label>
                    <input type="text" name="Lophoc" id="">
                    <Label>Ngành</Label>
                    <select name="Nganh" id="">
                        <option value="0">CNTT</option>
                        <option value="1">Kế Toán</option>
                    </select>

                </td>
            </tr>
        </table>         
    </form>
</body>
</html>