<?php
// KONEKSI DATABASE SERVICES MOTOR
$host = "localhost";
$username = "root";
$password = "";
$database = "db_services_motor";

$koneksi_services = mysqli_connect($host, $username, $password, $database);

if (!$koneksi_services) {
    die("Koneksi database services motor gagal: " . mysqli_connect_error());
}

mysqli_set_charset($koneksi_services, "utf8");
?>
