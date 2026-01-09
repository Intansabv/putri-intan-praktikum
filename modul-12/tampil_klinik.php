<!DOCTYPE html>
<html>
<head>
    <title>Data Pasien - Klinik Sehat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
    <h1>KLINIK SEHAT MADIUN</h1>
    <h2>Data Pasien</h2>
</div>

<div style="width:90%; margin:0 auto;">
    <a href="input_klinik.php" class="tombol">+ Daftarkan Pasien Baru</a>
    <br><br>
    
    <table border="1" class="table">
        <tr>
            <th>No</th><th>No. RM</th><th>Nama Pasien</th><th>Tgl Lahir</th>
            <th>JK</th><th>Alamat</th><th>No. Telp</th><th>Keluhan</th><th>Tgl Daftar</th><th>Aksi</th>
        </tr>
        <?php
        include 'koneksi_klinik.php';
        $query = "SELECT * FROM pasien ORDER BY id_pasien DESC";
        $result = mysqli_query($koneksi, $query);
        $no = 1;
        
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$row['no_rm']."</td>";
            echo "<td>".$row['nama_pasien']."</td>";
            echo "<td>".$row['tgl_lahir']."</td>";
            echo "<td>".($row['jenis_kelamin']=='L'?'Laki':'Perempuan')."</td>";
            echo "<td>".substr($row['alamat'],0,30)."...</td>";
            echo "<td>".$row['no_telp']."</td>";
            echo "<td>".substr($row['keluhan'],0,30)."...</td>";
            echo "<td>".$row['tgl_daftar']."</td>";
            echo "<td>
                    <a href='edit_klinik.php?id=".$row['id_pasien']."' class='edit'>Edit</a>
                    <a href='hapus_klinik.php?id=".$row['id_pasien']."' class='hapus'>Hapus</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
