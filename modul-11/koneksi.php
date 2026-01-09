<?php
// MODUL 11: KONEKSI DATABASE
// File: koneksi.php
// Fungsi: Menghubungkan PHP dengan MySQL

// Konfigurasi database
$host = "localhost";      // Server database (local)
$username = "root";       // Username default XAMPP
$password = "";           // Password default XAMPP (kosong)
$database = "unipma";     // Nama database yang dibuat

// Membuat koneksi
$koneksi = mysqli_connect($host, $username, $password, $database);

// Cek apakah koneksi berhasil
if (!$koneksi) {
    // Jika gagal, tampilkan pesan error
    die("? KONEKSI GAGAL: " . mysqli_connect_error());
}

// Set karakter encoding ke UTF-8
mysqli_set_charset($koneksi, "utf8");

// Pesan sukses (hanya untuk debugging)
// echo "? Koneksi database berhasil!";
?>
