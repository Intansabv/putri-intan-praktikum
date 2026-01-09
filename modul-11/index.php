<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODUL 11: Database dengan PHP dan MySQL</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <!-- HEADER -->
        <div class="header">
            <h1><i class="fas fa-database"></i> MODUL 11: DATABASE PHP & MYSQL</h1>
            <h2>Praktikum Pemrograman Web Dasar</h2>
            <h3>Universitas PGRI Madiun | Teknik Informatika</h3>
            <p><strong>Nama:</strong> Putri Intan | <strong>NIM:</strong> 2305101108 | <strong>Kelas:</strong> [ISI_KELAS]</p>
        </div>

        <!-- NAVIGASI -->
        <div style="background: #ecf0f1; padding: 15px; text-align: center;">
            <a href="index.php" class="btn"><i class="fas fa-home"></i> Home</a>
            <a href="tambah_data.php" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
            <a href="form_perpus.html" class="btn"><i class="fas fa-book"></i> Form Perpus</a>
            <a href="form_services.html" class="btn"><i class="fas fa-motorcycle"></i> Form Services</a>
            <a href="form_klinik.html" class="btn"><i class="fas fa-hospital"></i> Form Klinik</a>
        </div>

        <!-- KONTEN UTAMA -->
        <div class="table-container">
            <h2 class="table-title"><i class="fas fa-users"></i> DATA MAHASISWA UNIVERSITAS PGRI MADIUN</h2>
            
            <?php
            // ============================================
            // BAGIAN 1: INCLUDE KONEKSI DATABASE
            // ============================================
            include "koneksi.php";
            
            // ============================================
            // BAGIAN 2: QUERY UNTUK MENGAMBIL DATA
            // ============================================
            $query = "SELECT * FROM mahasiswa ORDER BY npm ASC";
            $result = mysqli_query($koneksi, $query);
            
            // ============================================
            // BAGIAN 3: CEK APAKAH QUERY BERHASIL
            // ============================================
            if (!$result) {
                echo "<div style='background: #ffebee; color: #c62828; padding: 15px; border-radius: 5px; margin: 20px 0;'>
                        <i class='fas fa-exclamation-triangle'></i> <strong>ERROR:</strong> " . mysqli_error($koneksi) . "
                      </div>";
            }
            
            // ============================================
            // BAGIAN 4: TAMPILKAN DATA DALAM TABEL
            // ============================================
            ?>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Alamat</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    // ============================================
                    // BAGIAN 5: LOOPING DATA DARI DATABASE
                    // ============================================
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td>" . htmlspecialchars($row['npm']) . "</td>";
                            echo "<td><strong>" . htmlspecialchars($row['nama']) . "</strong></td>";
                            echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
                            echo "<td><span style='background: #e3f2fd; padding: 5px 10px; border-radius: 3px;'>" . htmlspecialchars($row['kelas']) . "</span></td>";
                            echo "<td>
                                    <a href='#' class='btn'><i class='fas fa-edit'></i></a>
                                    <a href='#' class='btn btn-danger'><i class='fas fa-trash'></i></a>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        // ============================================
                        // BAGIAN 6: JIKA DATA KOSONG
                        // ============================================
                        echo "<tr>
                                <td colspan='6' style='text-align: center; padding: 30px;'>
                                    <i class='fas fa-database' style='font-size: 48px; color: #bdc3c7; margin-bottom: 10px; display: block;'></i>
                                    <h3>Data belum tersedia</h3>
                                    <p>Silakan tambah data mahasiswa terlebih dahulu</p>
                                    <a href='tambah_data.php' class='btn btn-success'><i class='fas fa-plus'></i> Tambah Data Pertama</a>
                                </td>
                              </tr>";
                    }
                    
                    // ============================================
                    // BAGIAN 7: TUTUP KONEKSI DATABASE
                    // ============================================
                    mysqli_close($koneksi);
                    ?>
                </tbody>
            </table>
            
            <!-- STATISTIK -->
            <div style="background: #e8f5e9; padding: 15px; border-radius: 5px; margin-top: 20px;">
                <p><i class="fas fa-chart-bar"></i> <strong>STATISTIK:</strong> 
                   Total Data: <strong><?php echo ($no-1); ?> mahasiswa</strong> | 
                   Tanggal: <?php echo date('d F Y'); ?> | 
                   Waktu: <?php echo date('H:i:s'); ?>
                </p>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            <p><i class="fas fa-graduation-cap"></i> <strong>PRAKTIKUM MODUL 11</strong> - Database dengan PHP dan MySQL</p>
            <p>Dibuat oleh: Putri Intan | Teknik Informatika | Universitas PGRI Madiun</p>
            <p>© <?php echo date('Y'); ?> - All rights reserved</p>
        </div>
    </div>

    <script>
    // Script sederhana untuk konfirmasi hapus
    document.addEventListener('DOMContentLoaded', function() {
        var deleteButtons = document.querySelectorAll('.btn-danger');
        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function(e) {
                if (!confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    e.preventDefault();
                }
            });
        });
    });
    </script>
</body>
</html>
