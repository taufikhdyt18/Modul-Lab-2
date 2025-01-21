<?php
if (isset($_POST['Input'])) {
    $nama = htmlspecialchars($_POST['nama']);
    echo "Nama Anda: <b>$nama</b>";
}
?>
