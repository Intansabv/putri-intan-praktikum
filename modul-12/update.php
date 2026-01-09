<?php
include 'koneksi.php';
$npm_lama = $_POST['npm_lama'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi, "UPDATE mahasiswa SET npm='$npm', nama='$nama', alamat='$alamat', kelas='$kelas' WHERE npm='$npm_lama'");
header("location:tampil.php?pesan=update");
?>
