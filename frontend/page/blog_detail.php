<?php
include '../include/header.php';
include 'db_connect.php';
?>

<div class="container">
    <h1 style="text-align: center; font-size: 40px;">BLOG DÀNH CHO CÁC BẠN ĐẸP TRAI KHOAI TEO></h1>
    <hr>
    <br>
    <?php
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $parts = parse_url($url);
        parse_str($parts['query'], $query);
        $id = $query['id'];
        $sql = "SELECT * FROM blog where ID = $id";

        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $des = $row['Des'];
            ?>
            <h1 style="font-size: 30px;">Contents</h1>
            <hr style="width: 30%;">
            <br>
            <br>

            <p style="font-size: 24px; text-align: justify; height: 100vh;">
                <?= $des ?>
            </p>
        <?php
        }
        ?>
            
</div>
<?php
include '../include/footer.php'
?>