<!DOCTYPE html>
<html>
<head>
    <title>Input Buku - Perpustakaan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
    <h1>INPUT DATA BUKU</h1>
</div>
<a href="tampil_perpus.php">Lihat Data</a> | 
<a href="index.php">Home</a>
<br/><br/>
<form action="proses_input_perpus.php" method="post">
    <table>
        <tr><td>Kode Buku</td><td><input type="text" name="kode_buku" required></td></tr>
        <tr><td>Judul</td><td><input type="text" name="judul_buku" required></td></tr>
        <tr><td>Pengarang</td><td><input type="text" name="pengarang" required></td></tr>
        <tr><td>Penerbit</td><td><input type="text" name="penerbit" required></td></tr>
        <tr><td>Tahun</td><td><input type="number" name="tahun_terbit" required></td></tr>
        <tr><td>Jumlah</td><td><input type="number" name="jumlah" required></td></tr>
        <tr><td></td><td><input type="submit" value="Simpan" class="tombol"></td></tr>
    </table>
</form>
</body>
</html>
