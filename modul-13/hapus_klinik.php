<?php
include 'koneksi_klinik.php';

$id_pasien = $_GET['id'];
$query = "DELETE FROM pasien WHERE id_pasien='$id_pasien'";

if(mysqli_query($koneksi, $query)){
    header("location:tampil_klinik.php?pesan=hapus");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
