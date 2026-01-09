<?php
// KONEKSI DATABASE KLINIK SEHAT
$host = "localhost";
$username = "root";
$password = "";
$database = "db_klinik_sehat";

$koneksi_klinik = mysqli_connect($host, $username, $password, $database);

if (!$koneksi_klinik) {
    die("Koneksi database klinik sehat gagal: " . mysqli_connect_error());
}

mysqli_set_charset($koneksi_klinik, "utf8");
?>
