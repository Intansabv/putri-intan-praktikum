<!DOCTYPE html>
<html>
<head>
    <title>Data Servis Motor</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
    <h1>SERVICES MOTOR MADIUN</h1>
    <h2>Data Servis Motor</h2>
</div>

<div style="width:90%; margin:0 auto;">
    <a href="input_services.php" class="tombol">+ Input Servis Baru</a>
    <br><br>
    
    <table border="1" class="table">
        <tr>
            <th>No</th><th>No. Polisi</th><th>Pemilik</th><th>Merk</th>
            <th>Tipe Servis</th><th>Keluhan</th><th>Biaya</th><th>Tgl Servis</th><th>Status</th><th>Aksi</th>
        </tr>
        <?php
        include 'koneksi_services.php';
        $query = "SELECT * FROM servis ORDER BY id_servis DESC";
        $result = mysqli_query($koneksi, $query);
        $no = 1;
        
        while($row = mysqli_fetch_array($result)){
            $status_color = ($row['status']=='Selesai')?'green':'orange';
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$row['no_polisi']."</td>";
            echo "<td>".$row['nama_pemilik']."</td>";
            echo "<td>".$row['merk_motor']."</td>";
            echo "<td>".$row['tipe_servis']."</td>";
            echo "<td>".substr($row['keluhan'],0,20)."...</td>";
            echo "<td>Rp ".number_format($row['biaya'],0,',','.')."</td>";
            echo "<td>".$row['tgl_servis']."</td>";
            echo "<td style='color:".$status_color.";'>".$row['status']."</td>";
            echo "<td>
                    <a href='edit_services.php?id=".$row['id_servis']."' class='edit'>Edit</a>
                    <a href='hapus_services.php?id=".$row['id_servis']."' class='hapus'>Hapus</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
