<?php
$host = 'localhost';
$db = 'banhang';
$user = 'root';
$pass = ''; 

$conn = mysqli_connect("localhost", "root", "", "banhang");
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");
?>
