<?php
include 'koneksi.php';
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];

$query = "INSERT INTO mahasiswa (npm, nama, alamat, kelas) VALUES ('$npm', '$nama', '$alamat', '$kelas')";
mysqli_query($koneksi, $query);

header("location:tampil.php?pesan=input");
?>
