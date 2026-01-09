<?php
include 'koneksi_services.php';

$id_servis = $_POST['id_servis'];
$no_polisi = $_POST['no_polisi'];
$nama_pemilik = $_POST['nama_pemilik'];
$merk_motor = $_POST['merk_motor'];
$tipe_servis = $_POST['tipe_servis'];
$keluhan = $_POST['keluhan'];
$biaya = $_POST['biaya'];
$status = $_POST['status'];

$query = "UPDATE servis SET 
          no_polisi='$no_polisi',
          nama_pemilik='$nama_pemilik',
          merk_motor='$merk_motor',
          tipe_servis='$tipe_servis',
          keluhan='$keluhan',
          biaya='$biaya',
          status='$status'
          WHERE id_servis='$id_servis'";

if(mysqli_query($koneksi, $query)){
    header("location:tampil_services.php?pesan=update");
} else {
    header("location:tampil_services.php?pesan=gagal");
}
?>
