<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form {
        display: flex;
        flex-direction: column;
        width: 30%;
        
    }
    input {
        padding: 0.5rem;
    }
    input[type="submit"] {
        margin-top: 1rem;
        width: 100px;

    }
    input[type="reset"]{
        margin-top: 1rem;
        width: 100px;
        margin-left: 1rem;
    }
    .flex {
        display: flex;
        justify-content: center;
    }
</style>
<body>

    <form action="./xulythongtin.php" method="post">
        <label for="name">Ho ten :</label>
        <input type="text" name="name" id="name" required>
        <label for="Diachi">Dia chi :</label>
        <input type="text" name="Diachi" id="Diachi" required >
        <label for="sdt">So dien thoai :</label>
        <input type="number" name="sdt" id="sdt" required>
        <label for="gt">Gioi tinh :</label>
      <div class="flex">
        
        <input type="radio" name="gt" id="Nam" value="Nam">
        <label for="Nam">Nam </label>
        <input type="radio" name="gt" id="Nu" value="Nu">
        <label for="Nu">Nu </label>
      </div>

        <label for="quoctich">Quoc tich:</label>
        <select name="quoctich" id="quoctich">
            <option value="Viet Nam">Viet Nam</option>
            <option value="Han quoc">Han quoc</option>
           
        </select>
        <div class="">
        <input type="checkbox" name="check_list[]" value="PHP & MYSQL"><label>PHP & MYSQL</label><br/>
<input type="checkbox" name="check_list[]" value="C#"><label>C#</label><br/>
<input type="checkbox" name="check_list[]" value="XML"><label>XML</label><br/>
<input type="checkbox" name="check_list[]" value="Python"><label>Python</label><br/>
    </div>
      
       
        <label for="ghichu"></label>
        <textarea name="ghichu" required id="ghichu" cols="30" rows="10"></textarea>
       <div class="flex">
       <input type="submit" value="Gui" name="Gui" id="Gui">
        <input type="reset" value="Huy" name="Huy" id="Huy">
       </div>
    </form>
</body>
</html>