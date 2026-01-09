<?php
// PROSES FORM SERVICES MOTOR
include "koneksi_services.php";

// Ambil data dari form
$nama_pemilik = mysqli_real_escape_string($koneksi_services, $_POST['nama_pemilik']);
$no_hp = mysqli_real_escape_string($koneksi_services, $_POST['no_hp']);
$email = mysqli_real_escape_string($koneksi_services, $_POST['email']);
$no_plat = mysqli_real_escape_string($koneksi_services, $_POST['no_plat']);
$merk_motor = mysqli_real_escape_string($koneksi_services, $_POST['merk_motor']);
$tipe_motor = mysqli_real_escape_string($koneksi_services, $_POST['tipe_motor']);
$tahun = mysqli_real_escape_string($koneksi_services, $_POST['tahun']);
$tanggal_service = mysqli_real_escape_string($koneksi_services, $_POST['tanggal_service']);
$jam_service = mysqli_real_escape_string($koneksi_services, $_POST['jam_service']);
$keterangan = mysqli_real_escape_string($koneksi_services, $_POST['keterangan']);
$mekanik = mysqli_real_escape_string($koneksi_services, $_POST['mekanik']);

// Handle checkbox service[]
$jenis_service = "";
if (isset($_POST['service']) && is_array($_POST['service'])) {
    $jenis_service = implode(", ", $_POST['service']);
}

// Query insert
$query = "INSERT INTO service 
          (nama_pemilik, no_hp, email, no_plat, merk_motor, tipe_motor, tahun,
           jenis_service, tanggal_service, jam_service, keterangan, mekanik) 
          VALUES 
          ('$nama_pemilik', '$no_hp', '$email', '$no_plat', '$merk_motor', '$tipe_motor', '$tahun',
           '$jenis_service', '$tanggal_service', '$jam_service', '$keterangan', '$mekanik')";

if (mysqli_query($koneksi_services, $query)) {
    echo "<!DOCTYPE html>
          <html>
          <head>
              <title>Booking Berhasil!</title>
              <link rel='stylesheet' href='style.css'>
          </head>
          <body>
              <div class='container'>
                  <div class='header' style='background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);'>
                      <h1><i class='fas fa-check-circle'></i> BOOKING SERVICE MOTOR BERHASIL</h1>
                  </div>
                  
                  <div style='text-align: center; padding: 50px;'>
                      <div style='font-size: 80px; color: #27ae60; margin-bottom: 20px;'>
                          <i class='fas fa-check-circle'></i>
                      </div>
                      <h2>? Data Booking Berhasil Disimpan!</h2>
                      
                      <div style='background: #f8f9fa; padding: 20px; border-radius: 5px; margin: 20px auto; max-width: 600px; text-align: left;'>
                          <p><strong>Database:</strong> db_services_motor</p>
                          <p><strong>Tabel:</strong> service</p>
                          <p><strong>Nama Pemilik:</strong> $nama_pemilik</p>
                          <p><strong>No. Plat:</strong> $no_plat</p>
                          <p><strong>Merk Motor:</strong> $merk_motor</p>
                          <p><strong>Tanggal Service:</strong> $tanggal_service ($jam_service)</p>
                          <p><strong>Mekanik:</strong> $mekanik</p>
                      </div>
                      
                      <div style='background: #f9ebea; padding: 15px; border-radius: 5px; margin: 20px 0;'>
                          <p><i class='fas fa-info-circle'></i> <strong>Info:</strong> Datang 15 menit sebelum jadwal. Bawa STNK asli.</p>
                      </div>
                      
                      <div style='margin-top: 30px;'>
                          <a href='tampil_services.php' class='btn'>
                              <i class='fas fa-database'></i> Lihat Data Booking
                          </a>
                          <a href='form_services.html' class='btn' style='background: #e74c3c;'>
                              <i class='fas fa-plus'></i> Booking Lagi
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
            alert('? Gagal menyimpan booking!\\nError: " . addslashes(mysqli_error($koneksi_services)) . "');
            window.history.back();
          </script>";
}

mysqli_close($koneksi_services);
?>
