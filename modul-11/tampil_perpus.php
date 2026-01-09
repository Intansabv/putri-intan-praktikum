<!DOCTYPE html>
<html>
<head>
    <title>Data Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-database"></i> DATABASE: db_perpus_madiun</h1>
            <h2>Tabel: anggota | Data Anggota Perpustakaan</h2>
        </div>

        <div class="table-container">
            <?php
            include "koneksi_perpus.php";
            
            $query = "SELECT * FROM anggota ORDER BY id DESC";
            $result = mysqli_query($koneksi_perpus, $query);
            ?>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode Anggota</th>
                        <th>Nama</th>
                        <th>JK</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Tanggal Daftar</th>
                        <th>Jenis</th>
                        <th>Masa Berlaku</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td><strong>" . htmlspecialchars($row['kode_anggota']) . "</strong></td>";
                            echo "<td>" . htmlspecialchars($row['nama_anggota']) . "</td>";
                            echo "<td>" . $row['jk'] . "</td>";
                            echo "<td>" . htmlspecialchars($row['no_telp']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                            echo "<td>" . $row['tanggal_daftar'] . "</td>";
                            echo "<td>" . htmlspecialchars($row['jenis_anggota']) . "</td>";
                            echo "<td>" . $row['masa_berlaku'] . " tahun</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='9' style='text-align: center; padding: 30px;'>Belum ada data di database</td></tr>";
                    }
                    
                    mysqli_close($koneksi_perpus);
                    ?>
                </tbody>
            </table>
            
            <div style="margin-top: 20px; background: #f8f9fa; padding: 15px; border-radius: 5px;">
                <p><strong>Informasi Database:</strong></p>
                <p>• Nama Database: <code>db_perpus_madiun</code></p>
                <p>• Nama Tabel: <code>anggota</code></p>
                <p>• Jumlah Field: 12 field</p>
                <p>• Total Data: <?php echo mysqli_num_rows($result); ?> record</p>
            </div>
            
            <div style="margin-top: 20px;">
                <a href="form_perpus.html" class="btn btn-success">
                    <i class="fas fa-plus"></i> Tambah Data
                </a>
                <a href="index.php" class="btn">
                    <i class="fas fa-home"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</body>
</html>
