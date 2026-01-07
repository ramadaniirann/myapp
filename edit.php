<?php
require 'db/connection.php';

$id = $_GET['id'];
$query = "SELECT * FROM students WHERE id=$id";
$result = mysqli_query($conn, $query);
$student = mysqli_fetch_assoc($result);
?>

<h3>Edit Data Siswa</h3>
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $student['id']; ?>">
    
    <label>Nama :</label><br>
    <input type="text" name="nama" value="<?= $student['name']; ?>"> <br><br>

    <label>Email :</label><br>
    <input type="email" name="email" value="<?= $student['email']; ?>"> <br><br>

    <label>Umur :</label><br>
    <input type="number" name="umur" value="<?= $student['age']; ?>"> <br><br>

    <label>Alamat :</label><br> <textarea name="alamat" rows="3"><?= $student['address']; ?></textarea> <br><br>

    <button type="submit">Update</button>
</form>