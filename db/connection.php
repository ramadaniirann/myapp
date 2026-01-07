<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "school";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die ("koneksi gagal");
}
?>