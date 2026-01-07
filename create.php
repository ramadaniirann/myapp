<?php
require 'db/connection.php';

$name = $_POST['nama'];
$email = $_POST['email'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO students (name, email, age, address) VALUES ('$name', '$email', '$umur', '$alamat')";
mysqli_query($conn, $query);

header("Location: index.php");
?>