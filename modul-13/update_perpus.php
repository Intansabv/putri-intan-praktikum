<?php
include 'koneksi_perpus.php';

$id_buku = $_POST['id_buku'];
$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$jumlah = $_POST['jumlah'];

$query = "UPDATE buku SET 
          kode_buku='$kode_buku', 
          judul_buku='$judul_buku', 
          pengarang='$pengarang', 
          penerbit='$penerbit', 
          tahun_terbit='$tahun_terbit', 
          jumlah='$jumlah' 
          WHERE id_buku='$id_buku'";

if(mysqli_query($koneksi, $query)){
    header("location:tampil_perpus.php?pesan=update");
} else {
    header("location:tampil_perpus.php?pesan=gagal");
}
?>
