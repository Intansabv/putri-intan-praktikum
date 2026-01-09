<?php
// PROSES FORM PERPUSTAKAAN
include "koneksi_perpus.php";

// Ambil data dari form
$kode_anggota = mysqli_real_escape_string($koneksi_perpus, $_POST['kode_anggota']);
$nama_anggota = mysqli_real_escape_string($koneksi_perpus, $_POST['nama_anggota']);
$jk = mysqli_real_escape_string($koneksi_perpus, $_POST['jk']);
$alamat = mysqli_real_escape_string($koneksi_perpus, $_POST['alamat']);
$no_telp = mysqli_real_escape_string($koneksi_perpus, $_POST['no_telp']);
$email = mysqli_real_escape_string($koneksi_perpus, $_POST['email']);
$tanggal_daftar = mysqli_real_escape_string($koneksi_perpus, $_POST['tanggal_daftar']);
$jenis_anggota = mysqli_real_escape_string($koneksi_perpus, $_POST['jenis_anggota']);
$instansi = mysqli_real_escape_string($koneksi_perpus, $_POST['instansi']);
$masa_berlaku = mysqli_real_escape_string($koneksi_perpus, $_POST['masa_berlaku']);

// Query insert
$query = "INSERT INTO anggota 
          (kode_anggota, nama_anggota, jk, alamat, no_telp, email, 
           tanggal_daftar, jenis_anggota, instansi, masa_berlaku) 
          VALUES 
          ('$kode_anggota', '$nama_anggota', '$jk', '$alamat', '$no_telp', '$email',
           '$tanggal_daftar', '$jenis_anggota', '$instansi', '$masa_berlaku')";

if (mysqli_query($koneksi_perpus, $query)) {
    echo "<!DOCTYPE html>
          <html>
          <head>
              <title>Sukses!</title>
              <link rel='stylesheet' href='style.css'>
              <style>
                  .success-box { text-align: center; padding: 50px; }
                  .success-icon { font-size: 80px; color: #27ae60; margin-bottom: 20px; }
              </style>
          </head>
          <body>
              <div class='container'>
                  <div class='header'>
                      <h1><i class='fas fa-check-circle'></i> PENDAFTARAN PERPUSTAKAAN BERHASIL</h1>
                  </div>
                  
                  <div class='success-box'>
                      <div class='success-icon'>
                          <i class='fas fa-check-circle'></i>
                      </div>
                      <h2>? Data Anggota Berhasil Disimpan di Database!</h2>
                      
                      <div style='background: #f8f9fa; padding: 20px; border-radius: 5px; margin: 20px auto; max-width: 600px;'>
                          <p><strong>Database:</strong> db_perpus_madiun</p>
                          <p><strong>Tabel:</strong> anggota</p>
                          <p><strong>Kode Anggota:</strong> $kode_anggota</p>
                          <p><strong>Nama:</strong> $nama_anggota</p>
                          <p><strong>Jenis Kelamin:</strong> " . ($jk == 'L' ? 'Laki-laki' : 'Perempuan') . "</p>
                          <p><strong>Tanggal Daftar:</strong> $tanggal_daftar</p>
                          <p><strong>Masa Berlaku:</strong> $masa_berlaku Tahun</p>
                      </div>
                      
                      <div style='margin-top: 30px;'>
                          <a href='tampil_perpus.php' class='btn'>
                              <i class='fas fa-database'></i> Lihat Data di Database
                          </a>
                          <a href='form_perpus.html' class='btn btn-success'>
                              <i class='fas fa-plus'></i> Tambah Data Lagi
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
            alert('? Gagal menyimpan data!\\nError: " . addslashes(mysqli_error($koneksi_perpus)) . "');
            window.history.back();
          </script>";
}

mysqli_close($koneksi_perpus);
?>
