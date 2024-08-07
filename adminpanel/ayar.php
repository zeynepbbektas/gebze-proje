<?php
$server = "localhost";
$username = "root";
$password = "12345678";
$database = "yonetimpaneli";

$conn = mysqli_connect($server, $username, $password, $database);
mysqli_set_charset($conn, "UTF8");

if (mysqli_connect_errno() > 0) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}


?>
