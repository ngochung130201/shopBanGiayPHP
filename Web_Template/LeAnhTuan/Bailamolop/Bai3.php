<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Bai2.4b.php" method="POST">
        <table>
            <tr>
                <td>
                    <span>Họ Tên:</span>
                    <input type="text" name="Name">
                </td>
            </tr>
            <tr>
                <td>
                    <span>Địa Chỉ:</span>
                    <input type="text" name="Address">
                </td>
            </tr>
            <tr>
                <td>
                    <span>Số Điện Thoại:</span>
                    <input type="text" name="Phone">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="sex" id="Male" value="Nam">
                    <label for="Male">Nam</label>
                    <input type="radio" name="sex" id="Female" value="Nu">
                    <label for="Female">Nữ</label>
                </td>
            </tr> 
            <tr>
                <td>
                    <span>Quốc Tịch:</span>
                    <select name="quoctich" id="quoctich">
                        <option value="Vietnam">Việt Nam</option>
                        <option value="Nhatban">Nhật Bản</option>
                        <option value="My">Mỹ</option>
                        <option value="Hanquoc">Hàn Quốc</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Các môn đã học:</span>
                    <input type="checkbox" name="check_list[]" id="php" value="PHP & MySQL">PHP & MySQL</input>
                    <!-- //<label for="php">PHP & MySQL</label> -->
                    <input type="checkbox" name="check_list[]" id="csharp" value="C#"> C# </input>
                    <!-- <label for="csharp">C#</label> -->
                    <input type="checkbox" name="check_list[]" id="xml" value="XML"> XML </input>
                    <!-- <label for="xml">XML</label> -->
                    <input type="checkbox" name="check_list[]" id="python" value="Python"> Python </input>
                    <!-- <label for="python">Python</label> -->
                </td>
            </tr> 
            <tr>
                <td>
                    <span>Ghi chú</span>
                    <textarea name="ghichu" id="ghichu" cols="30" rows="10"></textarea>
                </td>
            </tr> 
            <tr>
                <td>
                    <input type="submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>