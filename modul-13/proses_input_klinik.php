<?php
include 'koneksi_klinik.php';

$no_rm = $_POST['no_rm'];
$nama_pasien = $_POST['nama_pasien'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$keluhan = $_POST['keluhan'];
$tgl_daftar = date('Y-m-d');

$query = "INSERT INTO pasien VALUES (NULL, '$no_rm', '$nama_pasien', '$tgl_lahir', '$jenis_kelamin', '$alamat', '$no_telp', '$keluhan', '$tgl_daftar')";

mysqli_query($koneksi, $query);
header("location:tampil_klinik.php?pesan=input");
?>
