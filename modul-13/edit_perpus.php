<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Buku - Perpustakaan Kota Madiun</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
    <h1>PERPUSTAKAAN KOTA MADIUN</h1>
    <h2>Edit Data Buku</h2>
</div>

<?php
include 'koneksi_perpus.php';
$id_buku = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id_buku'");
$data = mysqli_fetch_array($query);
?>

<a href="tampil_perpus.php">Kembali ke Data Buku</a>
<br/><br/>

<h3>Edit Data Buku</h3>
<form action="update_perpus.php" method="post">
    <input type="hidden" name="id_buku" value="<?php echo $data['id_buku']; ?>">
    <table>
        <tr>
            <td>Kode Buku</td>
            <td><input type="text" name="kode_buku" value="<?php echo $data['kode_buku']; ?>" required></td>
        </tr>
        <tr>
            <td>Judul Buku</td>
            <td><input type="text" name="judul_buku" value="<?php echo $data['judul_buku']; ?>" required></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td><input type="text" name="pengarang" value="<?php echo $data['pengarang']; ?>" required></td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td><input type="text" name="penerbit" value="<?php echo $data['penerbit']; ?>" required></td>
        </tr>
        <tr>
            <td>Tahun Terbit</td>
            <td><input type="number" name="tahun_terbit" value="<?php echo $data['tahun_terbit']; ?>" required></td>
        </tr>
        <tr>
            <td>Jumlah Stok</td>
            <td><input type="number" name="jumlah" value="<?php echo $data['jumlah']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update Data" class="tombol"></td>
        </tr>
    </table>
</form>
</body>
</html>
