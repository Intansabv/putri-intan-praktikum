<?php
include 'koneksi_perpus.php';

$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$jumlah = $_POST['jumlah'];
$tanggal_input = date('Y-m-d');

$query = "INSERT INTO buku (kode_buku, judul_buku, pengarang, penerbit, tahun_terbit, jumlah, tanggal_input) 
          VALUES ('$kode_buku', '$judul_buku', '$pengarang', '$penerbit', '$tahun_terbit', '$jumlah', '$tanggal_input')";

if(mysqli_query($koneksi, $query)){
    header("location:input_perpus.php?pesan=sukses");
} else {
    header("location:input_perpus.php?pesan=gagal");
}

mysqli_close($koneksi);
?>
