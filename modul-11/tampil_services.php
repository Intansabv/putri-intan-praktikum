<!DOCTYPE html>
<html>
<head>
    <title>Data Services Motor</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .status-menunggu { background: #fff3cd; color: #856404; padding: 3px 8px; border-radius: 3px; }
        .status-diproses { background: #cce5ff; color: #004085; padding: 3px 8px; border-radius: 3px; }
        .status-selesai { background: #d4edda; color: #155724; padding: 3px 8px; border-radius: 3px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header" style="background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);">
            <h1><i class="fas fa-database"></i> DATABASE: db_services_motor</h1>
            <h2>Tabel: service | Data Booking Service Motor</h2>
            <h3>Bengkel Motor "MAJU JAYA" Madiun</h3>
        </div>

        <div class="table-container">
            <?php
            include "koneksi_services.php";
            
            $query = "SELECT * FROM service ORDER BY tanggal_service DESC, jam_service ASC";
            $result = mysqli_query($koneksi_services, $query);
            ?>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Pemilik</th>
                        <th>No. HP</th>
                        <th>Plat Motor</th>
                        <th>Merk/Tipe</th>
                        <th>Jenis Service</th>
                        <th>Tanggal Service</th>
                        <th>Jam</th>
                        <th>Mekanik</th>
                        <th>Status</th>
                        <th>Tanggal Input</th>
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
                            } elseif ($row['status'] == 'Diproses') {
                                $status_class = 'status-diproses';
                            } elseif ($row['status'] == 'Selesai') {
                                $status_class = 'status-selesai';
                            }
                            
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td><strong>" . htmlspecialchars($row['nama_pemilik']) . "</strong></td>";
                            echo "<td>" . htmlspecialchars($row['no_hp']) . "</td>";
                            echo "<td><code>" . htmlspecialchars($row['no_plat']) . "</code></td>";
                            echo "<td>" . htmlspecialchars($row['merk_motor']) . "<br><small>" . htmlspecialchars($row['tipe_motor']) . " (" . $row['tahun'] . ")</small></td>";
                            echo "<td><small>" . htmlspecialchars(substr($row['jenis_service'], 0, 30)) . "...</small></td>";
                            echo "<td>" . $row['tanggal_service'] . "</td>";
                            echo "<td>" . $row['jam_service'] . "</td>";
                            echo "<td>" . htmlspecialchars($row['mekanik']) . "</td>";
                            echo "<td><span class='$status_class'>$status_text</span></td>";
                            echo "<td><small>" . date('d/m/Y H:i', strtotime($row['tanggal_input'])) . "</small></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='11' style='text-align: center; padding: 30px;'>
                                <i class='fas fa-motorcycle' style='font-size: 48px; color: #bdc3c7; margin-bottom: 10px; display: block;'></i>
                                <h3>Belum ada data booking service</h3>
                                <p>Silakan buat booking service terlebih dahulu</p>
                              </td></tr>";
                    }
                    
                    mysqli_close($koneksi_services);
                    ?>
                </tbody>
            </table>
            
            <div style="margin-top: 20px; background: #f9ebea; padding: 15px; border-radius: 5px;">
                <p><strong>?? STATISTIK DATABASE SERVICES MOTOR:</strong></p>
                <p>• <strong>Nama Database:</strong> <code>db_services_motor</code></p>
                <p>• <strong>Nama Tabel:</strong> <code>service</code></p>
                <p>• <strong>Jumlah Field:</strong> 14 field</p>
                <p>• <strong>Total Data:</strong> <?php echo mysqli_num_rows($result); ?> booking</p>
                
                <?php
                // Hitung statistik status
                include "koneksi_services.php";
                $total = mysqli_num_rows($result);
                $menunggu = mysqli_num_rows(mysqli_query($koneksi_services, "SELECT id FROM service WHERE status='Menunggu'"));
                $diproses = mysqli_num_rows(mysqli_query($koneksi_services, "SELECT id FROM service WHERE status='Diproses'"));
                $selesai = mysqli_num_rows(mysqli_query($koneksi_services, "SELECT id FROM service WHERE status='Selesai'"));
                mysqli_close($koneksi_services);
                
                if ($total > 0) {
                    echo "<p>• <strong>Status Booking:</strong> ";
                    echo "<span class='status-menunggu'>Menunggu: $menunggu</span> | ";
                    echo "<span class='status-diproses'>Diproses: $diproses</span> | ";
                    echo "<span class='status-selesai'>Selesai: $selesai</span>";
                    echo "</p>";
                }
                ?>
            </div>
            
            <div style="margin-top: 20px;">
                <a href="form_services.html" class="btn" style="background: #e74c3c;">
                    <i class="fas fa-plus"></i> Booking Service Baru
                </a>
                <a href="index.php" class="btn">
                    <i class="fas fa-home"></i> Halaman Utama
                </a>
                <button onclick="window.print()" class="btn">
                    <i class="fas fa-print"></i> Cetak Laporan
                </button>
            </div>
        </div>
        
        <div class="footer" style="background: #f9ebea;">
            <p><strong>BENGKEL MOTOR "MAJU JAYA" MADIUN</strong> | Sistem Database Services Motor v1.0</p>
            <p>© <?php echo date('Y'); ?> - Dibuat untuk Praktikum Modul 11: Database dengan PHP</p>
        </div>
    </div>
</body>
</html>
