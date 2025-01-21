<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : "Tidak ada nama yang dikirim (POST)";
} elseif ($_SERVER["REQUEST_METHOD"] === "GET") {
    $nama = isset($_GET['nama']) ? htmlspecialchars($_GET['nama']) : "Tidak ada nama yang dikirim (GET)";
} else {
    $nama = "Metode pengiriman tidak didukung.";
}


echo "<h1>Data yang Diterima</h1>";
echo "<p>Nama: $nama</p>";
?>
