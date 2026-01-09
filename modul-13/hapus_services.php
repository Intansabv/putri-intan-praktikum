<?php
include 'koneksi_services.php';

$id_servis = $_GET['id'];
$query = "DELETE FROM servis WHERE id_servis='$id_servis'";

if(mysqli_query($koneksi, $query)){
    header("location:tampil_services.php?pesan=hapus");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
