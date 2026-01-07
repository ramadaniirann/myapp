<?php
require 'db/connection.php';

$query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar Database</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h2>Daftar Siswa</h2>
    
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Umur</th>
                <th>Alamat</th> <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row['name']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['age']; ?></td> <td><?= $row['address']; ?></td> <td>
                    <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> | 
                    <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <br><hr><br>

    <h3>Tambah Data Baru</h3>
    <form action="create.php" method="POST">
        <label>Nama :</label><br>
        <input type="text" name="nama" required> <br><br>

        <label>Email :</label><br>
        <input type="email" name="email" required> <br><br>

        <label>Umur :</label><br>
        <input type="number" name="umur" required> <br><br>

        <label>Alamat :</label><br> <textarea name="alamat" rows="3"></textarea> <br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>