<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['nama']));
    $message = htmlspecialchars(trim($_POST['pesan']));

    echo "<h2>Terima kasih $name</h2>";
    echo "<p>Pesan kamu: $message</p>";
} else {
    echo "Metode Request tidak valid";
}
?>