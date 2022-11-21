<?php
include '../include/header.php';
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "bangiay";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);
if (!$conn) {
    die("Ket noi that bai" . mysqli_connect_error());
}
?>