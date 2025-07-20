<?php
include 'config.php';

$nama  = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

mysqli_query($koneksi, "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')");

header("Location: index.php?status=berhasil");
?>
