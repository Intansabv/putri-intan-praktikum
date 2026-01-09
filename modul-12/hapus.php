<?php
include 'koneksi.php';
$npm = $_GET['npm'];
mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE npm='$npm'");
header("location:tampil.php?pesan=hapus");
?>
