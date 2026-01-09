<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pasien - Klinik Sehat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
    <h1>KLINIK SEHAT MADIUN</h1>
    <h2>Edit Data Pasien</h2>
</div>

<?php
include 'koneksi_klinik.php';
$id_pasien = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id_pasien='$id_pasien'");
$data = mysqli_fetch_array($query);
?>

<a href="tampil_klinik.php">Kembali ke Data Pasien</a>
<br/><br/>

<h3>Edit Data Pasien</h3>
<form action="update_klinik.php" method="post">
    <input type="hidden" name="id_pasien" value="<?php echo $data['id_pasien']; ?>">
    <table>
        <tr>
            <td>No. RM</td>
            <td><input type="text" name="no_rm" value="<?php echo $data['no_rm']; ?>" required></td>
        </tr>
        <tr>
            <td>Nama Pasien</td>
            <td><input type="text" name="nama_pasien" value="<?php echo $data['nama_pasien']; ?>" required></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" required></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="L" <?php echo ($data['jenis_kelamin']=='L')?'checked':''; ?>> Laki-laki
                <input type="radio" name="jenis_kelamin" value="P" <?php echo ($data['jenis_kelamin']=='P')?'checked':''; ?>> Perempuan
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" rows="3" required><?php echo $data['alamat']; ?></textarea></td>
        </tr>
        <tr>
            <td>No. Telepon</td>
            <td><input type="text" name="no_telp" value="<?php echo $data['no_telp']; ?>" required></td>
        </tr>
        <tr>
            <td>Keluhan</td>
            <td><textarea name="keluhan" rows="3" required><?php echo $data['keluhan']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update Data" class="tombol"></td>
        </tr>
    </table>
</form>
</body>
</html>
