<!DOCTYPE html>
<html>
<head>
    <title>Data Pasien - Klinik Sehat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
    <h1>DATA PASIEN KLINIK SEHAT</h1>
</div>

<?php
if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "input") echo "<p style='color:green'>Data berhasil diinput!</p>";
    if($pesan == "update") echo "<p style='color:blue'>Data berhasil diupdate!</p>";
    if($pesan == "hapus") echo "<p style='color:red'>Data berhasil dihapus!</p>";
}
?>

<a href="input_klinik.php" class="tombol">+ Tambah Pasien</a>
<a href="index.php" class="tombol">Home</a>
<br/><br/>

<table border="1">
    <tr>
        <th>No</th><th>No. RM</th><th>Nama Pasien</th><th>Tgl Lahir</th>
        <th>JK</th><th>Alamat</th><th>No. Telp</th><th>Keluhan</th><th>Aksi</th>
    </tr>
    <?php
    include 'koneksi_klinik.php';
    $query = mysqli_query($koneksi, "SELECT * FROM pasien");
    $no = 1;
    while($data = mysqli_fetch_array($query)){
        $jk = ($data['jenis_kelamin']=='L')?'Laki':'Perempuan';
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>".$data['no_rm']."</td>";
        echo "<td>".$data['nama_pasien']."</td>";
        echo "<td>".$data['tgl_lahir']."</td>";
        echo "<td>$jk</td>";
        echo "<td>".substr($data['alamat'],0,30)."...</td>";
        echo "<td>".$data['no_telp']."</td>";
        echo "<td>".substr($data['keluhan'],0,30)."...</td>";
        echo "<td>
                <a href='edit_klinik.php?id=".$data['id_pasien']."' class='edit'>Edit</a>
                <a href='hapus_klinik.php?id=".$data['id_pasien']."' class='hapus' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
              </td>";
        echo "</tr>";
        $no++;
    }
    ?>
</table>
</body>
</html>
