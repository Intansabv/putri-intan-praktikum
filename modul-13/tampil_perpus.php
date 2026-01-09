<!DOCTYPE html>
<html>
<head>
    <title>Data Buku - Perpustakaan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
    <h1>DATA BUKU PERPUSTAKAAN</h1>
</div>

<?php
if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "input") echo "<p style='color:green'>Data berhasil diinput!</p>";
    if($pesan == "update") echo "<p style='color:blue'>Data berhasil diupdate!</p>";
    if($pesan == "hapus") echo "<p style='color:red'>Data berhasil dihapus!</p>";
}
?>

<a href="input_perpus.php" class="tombol">+ Tambah Buku</a>
<a href="index.php" class="tombol">Home</a>
<br/><br/>

<table border="1">
    <tr>
        <th>No</th><th>Kode Buku</th><th>Judul</th><th>Pengarang</th>
        <th>Penerbit</th><th>Tahun</th><th>Jumlah</th><th>Aksi</th>
    </tr>
    <?php
    include 'koneksi_perpus.php';
    $query = mysqli_query($koneksi, "SELECT * FROM buku");
    $no = 1;
    while($data = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>".$data['kode_buku']."</td>";
        echo "<td>".$data['judul_buku']."</td>";
        echo "<td>".$data['pengarang']."</td>";
        echo "<td>".$data['penerbit']."</td>";
        echo "<td>".$data['tahun_terbit']."</td>";
        echo "<td>".$data['jumlah']."</td>";
        echo "<td>
                <a href='edit_perpus.php?id=".$data['id_buku']."' class='edit'>Edit</a>
                <a href='hapus_perpus.php?id=".$data['id_buku']."' class='hapus' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
              </td>";
        echo "</tr>";
        $no++;
    }
    ?>
</table>
</body>
</html>
