<?php
// KONEKSI DATABASE PERPUSTAKAAN
$host = "localhost";
$username = "root";
$password = "";
$database = "db_perpus_madiun";

$koneksi_perpus = mysqli_connect($host, $username, $password, $database);

if (!$koneksi_perpus) {
    die("Koneksi database perpustakaan gagal: " . mysqli_connect_error());
}

mysqli_set_charset($koneksi_perpus, "utf8");
?>
