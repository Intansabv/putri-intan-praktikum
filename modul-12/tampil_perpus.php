<!DOCTYPE html>
<html>
<head>
    <title>Data Buku - Perpustakaan Kota Madiun</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .container {
            width: 90%;
            margin: 0 auto;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        .table th {
            background-color: #4CAF50;
            color: white;
        }
        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .aksi a {
            text-decoration: none;
            padding: 5px 10px;
            margin: 2px;
            border-radius: 3px;
        }
        .edit {
            background-color: #2196F3;
            color: white;
        }
        .hapus {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
<div class="judul">
    <h1>PERPUSTAKAAN KOTA MADIUN</h1>
    <h2>Data Koleksi Buku</h2>
</div>

<div class="container">
    <a href="input_perpus.php" class="tombol">+ Tambah Buku Baru</a>
    <br><br>
    
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Jumlah</th>
                <th>Tanggal Input</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi_perpus.php';
            $query = "SELECT * FROM buku ORDER BY id_buku DESC";
            $result = mysqli_query($koneksi, $query);
            $no = 1;
            
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$row['kode_buku']."</td>";
                echo "<td>".$row['judul_buku']."</td>";
                echo "<td>".$row['pengarang']."</td>";
                echo "<td>".$row['penerbit']."</td>";
                echo "<td>".$row['tahun_terbit']."</td>";
                echo "<td>".$row['jumlah']."</td>";
                echo "<td>".$row['tanggal_input']."</td>";
                echo "<td class='aksi'>
                        <a href='edit_perpus.php?id=".$row['id_buku']."' class='edit'>Edit</a>
                        <a href='hapus_perpus.php?id=".$row['id_buku']."' class='hapus' onclick='return confirm(\"Yakin hapus data?\")'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
            
            if(mysqli_num_rows($result) == 0){
                echo "<tr><td colspan='9' style='text-align:center;'>Belum ada data buku</td></tr>";
            }
            
            mysqli_close($koneksi);
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
