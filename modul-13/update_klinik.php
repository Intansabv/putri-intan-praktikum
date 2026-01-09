<?php
include 'koneksi_klinik.php';

$id_pasien = $_POST['id_pasien'];
$no_rm = $_POST['no_rm'];
$nama_pasien = $_POST['nama_pasien'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$keluhan = $_POST['keluhan'];

$query = "UPDATE pasien SET 
          no_rm='$no_rm',
          nama_pasien='$nama_pasien',
          tgl_lahir='$tgl_lahir',
          jenis_kelamin='$jenis_kelamin',
          alamat='$alamat',
          no_telp='$no_telp',
          keluhan='$keluhan'
          WHERE id_pasien='$id_pasien'";

if(mysqli_query($koneksi, $query)){
    header("location:tampil_klinik.php?pesan=update");
} else {
    header("location:tampil_klinik.php?pesan=gagal");
}
?>
