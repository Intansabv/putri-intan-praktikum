<!DOCTYPE html>
<html>
<head>
    <title>Input Pasien - Klinik Sehat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
    <h1>INPUT DATA PASIEN</h1>
</div>
<a href="tampil_klinik.php">Lihat Data</a> | 
<a href="index.php">Home</a>
<br/><br/>
<form action="proses_input_klinik.php" method="post">
    <table>
        <tr><td>No. RM</td><td><input type="text" name="no_rm" required></td></tr>
        <tr><td>Nama Pasien</td><td><input type="text" name="nama_pasien" required></td></tr>
        <tr><td>Tanggal Lahir</td><td><input type="date" name="tgl_lahir" required></td></tr>
        <tr><td>Jenis Kelamin</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="L" required> Laki-laki
                <input type="radio" name="jenis_kelamin" value="P"> Perempuan
            </td>
        </tr>
        <tr><td>Alamat</td><td><textarea name="alamat" rows="3" required></textarea></td></tr>
        <tr><td>No. Telepon</td><td><input type="text" name="no_telp" required></td></tr>
        <tr><td>Keluhan</td><td><textarea name="keluhan" rows="3" required></textarea></td></tr>
        <tr><td></td><td><input type="submit" value="Simpan" class="tombol"></td></tr>
    </table>
</form>
</body>
</html>
