<?php
include 'koneksi_services.php';

$no_polisi = $_POST['no_polisi'];
$nama_pemilik = $_POST['nama_pemilik'];
$merk_motor = $_POST['merk_motor'];
$tipe_servis = $_POST['tipe_servis'];
$keluhan = $_POST['keluhan'];
$biaya = $_POST['biaya'];
$tgl_servis = date('Y-m-d');

$query = "INSERT INTO servis VALUES (NULL, '$no_polisi', '$nama_pemilik', '$merk_motor', '$tipe_servis', '$keluhan', '$biaya', '$tgl_servis', 'Proses')";

mysqli_query($koneksi, $query);
header("location:tampil_services.php?pesan=input");
?>
