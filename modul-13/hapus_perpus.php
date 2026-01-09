<?php
include 'koneksi_perpus.php';

$id_buku = $_GET['id'];
$query = "DELETE FROM buku WHERE id_buku='$id_buku'";

if(mysqli_query($koneksi, $query)){
    header("location:tampil_perpus.php?pesan=hapus");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
