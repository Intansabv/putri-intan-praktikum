<?php
// PROSES FORM KLINIK SEHAT
include "koneksi_klinik.php";

// Ambil data dari form
$no_rm = mysqli_real_escape_string($koneksi_klinik, $_POST['no_rm']);
$nama_pasien = mysqli_real_escape_string($koneksi_klinik, $_POST['nama_pasien']);
$jk = mysqli_real_escape_string($koneksi_klinik, $_POST['jk']);
$tempat_lahir = mysqli_real_escape_string($koneksi_klinik, $_POST['tempat_lahir']);
$tanggal_lahir = mysqli_real_escape_string($koneksi_klinik, $_POST['tanggal_lahir']);
$umur = mysqli_real_escape_string($koneksi_klinik, $_POST['umur']);
$alamat = mysqli_real_escape_string($koneksi_klinik, $_POST['alamat']);
$no_telp = mysqli_real_escape_string($koneksi_klinik, $_POST['no_telp']);
$nama_keluarga = mysqli_real_escape_string($koneksi_klinik, $_POST['nama_keluarga']);
$no_telp_keluarga = mysqli_real_escape_string($koneksi_klinik, $_POST['no_telp_keluarga']);
$hubungan = mysqli_real_escape_string($koneksi_klinik, $_POST['hubungan']);
$keluhan = mysqli_real_escape_string($koneksi_klinik, $_POST['keluhan']);
$lama_keluhan = mysqli_real_escape_string($koneksi_klinik, $_POST['lama_keluhan']);
$obat = mysqli_real_escape_string($koneksi_klinik, $_POST['obat']);
$dokter = mysqli_real_escape_string($koneksi_klinik, $_POST['dokter']);
$tanggal_berobat = mysqli_real_escape_string($koneksi_klinik, $_POST['tanggal_berobat']);
$jam_praktek = mysqli_real_escape_string($koneksi_klinik, $_POST['jam_praktek']);
$catatan = mysqli_real_escape_string($koneksi_klinik, $_POST['catatan']);

// Handle checkbox riwayat[]
$riwayat_penyakit = "";
if (isset($_POST['riwayat']) && is_array($_POST['riwayat'])) {
    $riwayat_penyakit = implode(", ", $_POST['riwayat']);
}

// Query insert
$query = "INSERT INTO pasien 
          (no_rm, nama_pasien, jk, tempat_lahir, tanggal_lahir, umur, alamat, no_telp,
           nama_keluarga, no_telp_keluarga, hubungan, keluhan, lama_keluhan, 
           riwayat_penyakit, obat, dokter, tanggal_berobat, jam_praktek, catatan) 
          VALUES 
          ('$no_rm', '$nama_pasien', '$jk', '$tempat_lahir', '$tanggal_lahir', '$umur', '$alamat', '$no_telp',
           '$nama_keluarga', '$no_telp_keluarga', '$hubungan', '$keluhan', '$lama_keluhan',
           '$riwayat_penyakit', '$obat', '$dokter', '$tanggal_berobat', '$jam_praktek', '$catatan')";

if (mysqli_query($koneksi_klinik, $query)) {
    echo "<!DOCTYPE html>
          <html>
          <head>
              <title>Pendaftaran Berhasil!</title>
              <link rel='stylesheet' href='style.css'>
          </head>
          <body>
              <div class='container'>
                  <div class='header' style='background: linear-gradient(135deg, #27ae60 0%, #219653 100%);'>
                      <h1><i class='fas fa-check-circle'></i> PENDAFTARAN KLINIK BERHASIL</h1>
                  </div>
                  
                  <div style='text-align: center; padding: 50px;'>
                      <div style='font-size: 80px; color: #27ae60; margin-bottom: 20px;'>
                          <i class='fas fa-check-circle'></i>
                      </div>
                      <h2>? Data Pasien Berhasil Disimpan di Database!</h2>
                      
                      <div style='background: #f8f9fa; padding: 20px; border-radius: 5px; margin: 20px auto; max-width: 600px; text-align: left;'>
                          <p><strong>Database:</strong> db_klinik_sehat</p>
                          <p><strong>Tabel:</strong> pasien</p>
                          <p><strong>No. RM:</strong> $no_rm</p>
                          <p><strong>Nama Pasien:</strong> $nama_pasien</p>
                          <p><strong>Dokter:</strong> $dokter</p>
                          <p><strong>Tanggal Berobat:</strong> $tanggal_berobat ($jam_praktek)</p>
                          <p><strong>Keluhan:</strong> " . substr($keluhan, 0, 50) . "...</p>
                      </div>
                      
                      <div style='background: #e8f5e9; padding: 15px; border-radius: 5px; margin: 20px 0;'>
                          <p><i class='fas fa-info-circle'></i> <strong>Info:</strong> Datang 30 menit sebelum jadwal. Bawa kartu berobat jika ada.</p>
                      </div>
                      
                      <div style='margin-top: 30px;'>
                          <a href='tampil_klinik.php' class='btn'>
                              <i class='fas fa-database'></i> Lihat Data Pasien
                          </a>
                          <a href='form_klinik.html' class='btn' style='background: #27ae60;'>
                              <i class='fas fa-plus'></i> Daftar Pasien Baru
                          </a>
                          <a href='index.php' class='btn'>
                              <i class='fas fa-home'></i> Halaman Utama
                          </a>
                      </div>
                  </div>
              </div>
          </body>
          </html>";
} else {
    echo "<script>
            alert('? Gagal menyimpan data pasien!\\nError: " . addslashes(mysqli_error($koneksi_klinik)) . "');
            window.history.back();
          </script>";
}

mysqli_close($koneksi_klinik);
?>
