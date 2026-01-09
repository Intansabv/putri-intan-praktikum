<!DOCTYPE html>
<html>
<head>
    <title>Data Servis - Services Motor</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
    <h1>DATA SERVIS MOTOR</h1>
</div>

<?php
if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "input") echo "<p style='color:green'>Data berhasil diinput!</p>";
    if($pesan == "update") echo "<p style='color:blue'>Data berhasil diupdate!</p>";
    if($pesan == "hapus") echo "<p style='color:red'>Data berhasil dihapus!</p>";
}
?>

<a href="input_services.php" class="tombol">+ Tambah Servis</a>
<a href="index.php" class="tombol">Home</a>
<br/><br/>

<table border="1">
    <tr>
        <th>No</th><th>No. Polisi</th><th>Pemilik</th><th>Merk</th>
        <th>Tipe Servis</th><th>Biaya</th><th>Tgl Servis</th><th>Status</th><th>Aksi</th>
    </tr>
    <?php
    include 'koneksi_services.php';
    $query = mysqli_query($koneksi, "SELECT * FROM servis");
    $no = 1;
    while($data = mysqli_fetch_array($query)){
        $status_color = ($data['status']=='Selesai')?'green':'orange';
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>".$data['no_polisi']."</td>";
        echo "<td>".$data['nama_pemilik']."</td>";
        echo "<td>".$data['merk_motor']."</td>";
        echo "<td>".$data['tipe_servis']."</td>";
        echo "<td>Rp ".number_format($data['biaya'],0,',','.')."</td>";
        echo "<td>".$data['tgl_servis']."</td>";
        echo "<td style='color:$status_color;'>".$data['status']."</td>";
        echo "<td>
                <a href='edit_services.php?id=".$data['id_servis']."' class='edit'>Edit</a>
                <a href='hapus_services.php?id=".$data['id_servis']."' class='hapus' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
              </td>";
        echo "</tr>";
        $no++;
    }
    ?>
</table>
</body>
</html>
