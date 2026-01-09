<?php
// File: detail_pasien.php
// Menampilkan detail lengkap pasien

include "koneksi_klinik.php";

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id == 0) {
    header("Location: tampil_klinik.php");
    exit();
}

$query = "SELECT * FROM pasien WHERE id = $id";
$result = mysqli_query($koneksi_klinik, $query);

if (mysqli_num_rows($result) == 0) {
    echo "<script>alert('Data pasien tidak ditemukan!'); window.location='tampil_klinik.php';</script>";
    exit();
}

$row = mysqli_fetch_assoc($result);
mysqli_close($koneksi_klinik);

// Format tanggal
$tanggal_lahir = date('d F Y', strtotime($row['tanggal_lahir']));
$tanggal_berobat = date('d F Y', strtotime($row['tanggal_berobat']));
$tanggal_input = date('d F Y H:i:s', strtotime($row['tanggal_input']));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Pasien - <?php echo htmlspecialchars($row['nama_pasien']); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header" style="background: linear-gradient(135deg, #27ae60 0%, #219653 100%);">
            <h1><i class="fas fa-user-injured"></i> DETAIL REKAM MEDIS PASIEN</h1>
            <h2>No. RM: <?php echo htmlspecialchars($row['no_rm']); ?></h2>
        </div>

        <div class="form-container" style="text-align: left;">
            <!-- Kartu Pasien -->
            <div style="background: white; border: 2px solid #27ae60; border-radius: 10px; padding: 20px; margin-bottom: 30px;">
                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eee; padding-bottom: 15px; margin-bottom: 15px;">
                    <div>
                        <h2 style="color: #2c3e50; margin: 0;"><?php echo htmlspecialchars($row['nama_pasien']); ?></h2>
                        <p style="margin: 5px 0 0 0; color: #7f8c8d;">
                            <i class="fas fa-venus-mars"></i> <?php echo ($row['jk'] == 'L' ? 'Laki-laki' : 'Perempuan'); ?> | 
                            <i class="fas fa-birthday-cake"></i> <?php echo $tanggal_lahir; ?> (<?php echo $row['umur']; ?> tahun) |
                            <i class="fas fa-phone"></i> <?php echo htmlspecialchars($row['no_telp']); ?>
                        </p>
                    </div>
                    <div style="background: #27ae60; color: white; padding: 10px 20px; border-radius: 5px;">
                        <strong>No. RM:</strong><br>
                        <span style="font-size: 24px;"><?php echo htmlspecialchars($row['no_rm']); ?></span>
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <!-- Kolom Kiri -->
                    <div>
                        <h3><i class="fas fa-home"></i> Data Alamat</h3>
                        <p><strong>Alamat:</strong><br><?php echo nl2br(htmlspecialchars($row['alamat'])); ?></p>
                        
                        <h3><i class="fas fa-users"></i> Data Keluarga</h3>
                        <p><strong>Nama Keluarga:</strong> <?php echo htmlspecialchars($row['nama_keluarga']); ?></p>
                        <p><strong>Hubungan:</strong> <?php echo htmlspecialchars($row['hubungan']); ?></p>
                        <p><strong>Telp. Keluarga:</strong> <?php echo htmlspecialchars($row['no_telp_keluarga']); ?></p>
                    </div>
                    
                    <!-- Kolom Kanan -->
                    <div>
                        <h3><i class="fas fa-stethoscope"></i> Data Medis</h3>
                        <p><strong>Keluhan Utama:</strong><br><?php echo nl2br(htmlspecialchars($row['keluhan'])); ?></p>
                        <p><strong>Lama Keluhan:</strong> <?php echo htmlspecialchars($row['lama_keluhan']); ?></p>
                        <p><strong>Riwayat Penyakit:</strong> <?php echo htmlspecialchars($row['riwayat_penyakit']); ?></p>
                        <p><strong>Obat yang Dikonsumsi:</strong> <?php echo htmlspecialchars($row['obat']); ?></p>
                    </div>
                </div>
                
                <!-- Data Kunjungan -->
                <div style="margin-top: 20px; padding-top: 20px; border-top: 1px solid #eee;">
                    <h3><i class="fas fa-calendar-check"></i> Data Kunjungan Terakhir</h3>
                    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 15px;">
                        <div style="background: #f8f9fa; padding: 15px; border-radius: 5px;">
                            <p><strong><i class="fas fa-user-md"></i> Dokter</strong></p>
                            <p style="font-size: 18px; margin: 10px 0;"><?php echo htmlspecialchars($row['dokter']); ?></p>
                        </div>
                        <div style="background: #f8f9fa; padding: 15px; border-radius: 5px;">
                            <p><strong><i class="fas fa-calendar-alt"></i> Tanggal Berobat</strong></p>
                            <p style="font-size: 18px; margin: 10px 0;"><?php echo $tanggal_berobat; ?></p>
                        </div>
                        <div style="background: #f8f9fa; padding: 15px; border-radius: 5px;">
                            <p><strong><i class="fas fa-clock"></i> Jam Praktek</strong></p>
                            <p style="font-size: 18px; margin: 10px 0;"><?php echo htmlspecialchars($row['jam_praktek']); ?></p>
                        </div>
                    </div>
                </div>
                
                <!-- Catatan -->
                <?php if (!empty($row['catatan'])): ?>
                <div style="margin-top: 20px; padding: 15px; background: #fff3cd; border-radius: 5px; border-left: 4px solid #ffc107;">
                    <h4><i class="fas fa-comment-medical"></i> Catatan Tambahan</h4>
                    <p><?php echo nl2br(htmlspecialchars($row['catatan'])); ?></p>
                </div>
                <?php endif; ?>
            </div>
            
            <!-- Informasi Sistem -->
            <div style="background: #f8f9fa; padding: 15px; border-radius: 5px; margin-top: 20px;">
                <p><strong><i class="fas fa-info-circle"></i> Informasi Sistem:</strong></p>
                <p>• <strong>Database:</strong> db_klinik_sehat</p>
                <p>• <strong>Tabel:</strong> pasien</p>
                <p>• <strong>ID Record:</strong> <?php echo $row['id']; ?></p>
                <p>• <strong>Status:</strong> 
                    <?php 
                    $status_color = '';
                    if ($row['status'] == 'Menunggu') $status_color = '#fff3cd';
                    elseif ($row['status'] == 'Diperiksa') $status_color = '#cce5ff';
                    else $status_color = '#d4edda';
                    ?>
                    <span style="background: <?php echo $status_color; ?>; padding: 3px 10px; border-radius: 3px;">
                        <?php echo $row['status']; ?>
                    </span>
                </p>
                <p>• <strong>Tanggal Input:</strong> <?php echo $tanggal_input; ?></p>
            </div>
            
            <div style="margin-top: 30px; text-align: center;">
                <a href="tampil_klinik.php" class="btn">
                    <i class="fas fa-arrow-left"></i> Kembali ke Daftar
                </a>
                <button onclick="window.print()" class="btn" style="background: #3498db;">
                    <i class="fas fa-print"></i> Cetak Kartu Pasien
                </button>
                <a href="form_klinik.html" class="btn" style="background: #27ae60;">
                    <i class="fas fa-plus"></i> Pasien Baru
                </a>
            </div>
        </div>
    </div>
</body>
</html>
