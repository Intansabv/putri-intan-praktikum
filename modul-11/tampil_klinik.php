<!DOCTYPE html>
<html>
<head>
    <title>Data Klinik Sehat</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .status-menunggu { background: #fff3cd; color: #856404; padding: 3px 8px; border-radius: 3px; }
        .status-diperiksa { background: #cce5ff; color: #004085; padding: 3px 8px; border-radius: 3px; }
        .status-selesai { background: #d4edda; color: #155724; padding: 3px 8px; border-radius: 3px; }
        .badge {
            display: inline-block;
            padding: 2px 6px;
            border-radius: 10px;
            font-size: 12px;
            margin: 2px;
        }
        .badge-L { background: #3498db; color: white; }
        .badge-P { background: #e84393; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header" style="background: linear-gradient(135deg, #27ae60 0%, #219653 100%);">
            <h1><i class="fas fa-database"></i> DATABASE: db_klinik_sehat</h1>
            <h2>Tabel: pasien | Data Pasien Klinik Sehat Madiun</h2>
            <h3>Sistem Informasi Rekam Medis Pasien</h3>
        </div>

        <div class="table-container">
            <?php
            include "koneksi_klinik.php";
            
            $query = "SELECT * FROM pasien ORDER BY tanggal_berobat DESC, id DESC";
            $result = mysqli_query($koneksi_klinik, $query);
            ?>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>No. RM</th>
                        <th>Nama Pasien</th>
                        <th>JK</th>
                        <th>Umur</th>
                        <th>Telepon</th>
                        <th>Keluhan</th>
                        <th>Dokter</th>
                        <th>Tanggal Berobat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Tentukan class status
                            $status_class = '';
                            $status_text = $row['status'];
                            if ($row['status'] == 'Menunggu') {
                                $status_class = 'status-menunggu';
                            } elseif ($row['status'] == 'Diperiksa') {
                                $status_class = 'status-diperiksa';
                            } elseif ($row['status'] == 'Selesai') {
                                $status_class = 'status-selesai';
                            }
                            
                            // Format keluhan (potong jika terlalu panjang)
                            $keluhan = htmlspecialchars($row['keluhan']);
                            if (strlen($keluhan) > 50) {
                                $keluhan = substr($keluhan, 0, 50) . '...';
                            }
                            
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td><strong><code>" . htmlspecialchars($row['no_rm']) . "</code></strong></td>";
                            echo "<td><strong>" . htmlspecialchars($row['nama_pasien']) . "</strong><br><small>" . htmlspecialchars($row['tempat_lahir']) . ", " . date('d/m/Y', strtotime($row['tanggal_lahir'])) . "</small></td>";
                            echo "<td><span class='badge badge-" . $row['jk'] . "'>" . $row['jk'] . "</span></td>";
                            echo "<td>" . $row['umur'] . " th</td>";
                            echo "<td>" . htmlspecialchars($row['no_telp']) . "</td>";
                            echo "<td><small>$keluhan</small></td>";
                            echo "<td>" . htmlspecialchars($row['dokter']) . "</td>";
                            echo "<td>" . $row['tanggal_berobat'] . "<br><small>" . $row['jam_praktek'] . "</small></td>";
                            echo "<td><span class='$status_class'>$status_text</span></td>";
                            echo "<td>
                                    <a href='detail_pasien.php?id=" . $row['id'] . "' class='btn' style='padding: 5px 10px; font-size: 12px;'>
                                        <i class='fas fa-eye'></i>
                                    </a>
                                    <a href='#' class='btn' style='padding: 5px 10px; font-size: 12px; background: #27ae60;'>
                                        <i class='fas fa-edit'></i>
                                    </a>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='11' style='text-align: center; padding: 30px;'>
                                <i class='fas fa-hospital' style='font-size: 48px; color: #bdc3c7; margin-bottom: 10px; display: block;'></i>
                                <h3>Belum ada data pasien</h3>
                                <p>Silakan daftarkan pasien terlebih dahulu</p>
                              </td></tr>";
                    }
                    
                    mysqli_close($koneksi_klinik);
                    ?>
                </tbody>
            </table>
            
            <div style="margin-top: 20px; background: #e8f5e9; padding: 15px; border-radius: 5px;">
                <p><strong>?? STATISTIK DATABASE KLINIK SEHAT:</strong></p>
                <p>• <strong>Nama Database:</strong> <code>db_klinik_sehat</code></p>
                <p>• <strong>Nama Tabel:</strong> <code>pasien</code></p>
                <p>• <strong>Jumlah Field:</strong> 22 field</p>
                <p>• <strong>Total Data:</strong> <?php echo mysqli_num_rows($result); ?> pasien</p>
                
                <?php
                // Hitung statistik
                include "koneksi_klinik.php";
                $total = mysqli_num_rows($result);
                $laki = mysqli_num_rows(mysqli_query($koneksi_klinik, "SELECT id FROM pasien WHERE jk='L'"));
                $perempuan = mysqli_num_rows(mysqli_query($koneksi_klinik, "SELECT id FROM pasien WHERE jk='P'"));
                
                // Hitung berdasarkan status
                $menunggu = mysqli_num_rows(mysqli_query($koneksi_klinik, "SELECT id FROM pasien WHERE status='Menunggu'"));
                $diperiksa = mysqli_num_rows(mysqli_query($koneksi_klinik, "SELECT id FROM pasien WHERE status='Diperiksa'"));
                $selesai = mysqli_num_rows(mysqli_query($koneksi_klinik, "SELECT id FROM pasien WHERE status='Selesai'"));
                
                mysqli_close($koneksi_klinik);
                
                if ($total > 0) {
                    echo "<p>• <strong>Jenis Kelamin:</strong> ";
                    echo "<span class='badge badge-L'>Laki-laki: $laki</span> | ";
                    echo "<span class='badge badge-P'>Perempuan: $perempuan</span>";
                    echo "</p>";
                    
                    echo "<p>• <strong>Status Pasien:</strong> ";
                    echo "<span class='status-menunggu'>Menunggu: $menunggu</span> | ";
                    echo "<span class='status-diperiksa'>Diperiksa: $diperiksa</span> | ";
                    echo "<span class='status-selesai'>Selesai: $selesai</span>";
                    echo "</p>";
                    
                    // Hitung persentase
                    $persen_laki = round(($laki / $total) * 100, 1);
                    $persen_perempuan = round(($perempuan / $total) * 100, 1);
                    echo "<p>• <strong>Distribusi:</strong> Laki-laki ($persen_laki%) | Perempuan ($persen_perempuan%)</p>";
                }
                ?>
            </div>
            
            <div style="margin-top: 20px; display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <a href="form_klinik.html" class="btn" style="background: #27ae60;">
                        <i class="fas fa-user-plus"></i> Daftar Pasien Baru
                    </a>
                    <a href="index.php" class="btn">
                        <i class="fas fa-home"></i> Halaman Utama
                    </a>
                </div>
                <div>
                    <button onclick="window.print()" class="btn">
                        <i class="fas fa-print"></i> Cetak Rekap
                    </button>
                    <a href="export_klinik.php" class="btn" style="background: #3498db;">
                        <i class="fas fa-file-export"></i> Export Data
                    </a>
                </div>
            </div>
        </div>
        
        <div class="footer" style="background: #e8f5e9;">
            <p><strong>KLINIK SEHAT MADIUN</strong> | Sistem Informasi Rekam Medis v1.0</p>
            <p>© <?php echo date('Y'); ?> - Praktikum Modul 11: Database PHP - Putri Intan</p>
            <p><i class="fas fa-shield-alt"></i> Data pasien dilindungi oleh UU No. 36 Tahun 2009 tentang Kesehatan</p>
        </div>
    </div>
    
    <script>
    // Script untuk filter data
    document.addEventListener('DOMContentLoaded', function() {
        // Tambahkan filter sederhana
        console.log('Sistem tampil data klinik loaded');
        
        // Highlight pasien baru (dalam 24 jam)
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach(row => {
            const statusCell = row.querySelector('td:nth-child(10)');
            if (statusCell && statusCell.textContent.trim() === 'Menunggu') {
                row.style.backgroundColor = '#fff9e6';
            }
        });
    });
    </script>
</body>
</html>
