<!DOCTYPE html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Xử lý n</title>

</head>

<body>

    <?php

    if (isset($_POST['n'])) $n = $_POST['n'];

    else $n = 0;



    $ketqua = "";

    if (isset($_POST['hthi'])) {    //tạo mảng có n phần tử, các phần tử có giá trị [-100,200]

        $arr = array();

        for ($i = 0; $i < $n; $i++) {

            $x = rand(-100, 200);

            $arr[$i] = $x;
        }

        //In ra mảng vừa tạo

        $ketqua = "Mảng được tạo là:" . implode(" ", $arr) . "&#13;&#10;";



        //Tìm và in ra các số dương chẵn trong mảng dùng hàm foreach
        // Gia tri lon nhat co trong mang la 
    

        function TimMax($arr)
        {

            $max = null;
            $position = null;

            for ($i = 0; $i < count($arr); $i++) {
                if ($max == null) {
                    $max = $arr[$i];
                    $position = $i;
                } else {
                    if ($arr[$i] > $max) {
                        $max = $arr[$i];
                        $position = $i;
                    }
                }
            }

            echo "Giá trị lớn nhất là $max, nằm tại vị trí $position";
        }
        function TimMin($arr)
        {

            $min = null;
            $position = null;

            for ($i = 0; $i < count($arr); $i++) {
                if ($min == null) {
                    $min = $arr[$i];
                    $position = $i;
                } else {
                    if ($arr[$i] < $min) {
                        $min = $arr[$i];
                        $position = $i;
                    }
                }
            }

            echo "<br/> Giá trị Nho nhất là $min, nằm tại vị trí $position";
        }
        
      $max =  TimMax($arr);
      $min = TimMin($arr);
    }

    ?>

    <form action="" method="post">

        Nhập n: <input type="text" name="n" value="<?php echo $n ?>" />

        <input type="submit" name="hthi" value="Hiển thị" /><br>

        Kết quả: <br>

        <textarea cols="70" rows="10" name="ketqua"> <?php echo $ketqua ?></textarea>

    </form>

</body>

</html>