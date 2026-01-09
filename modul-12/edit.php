<?php
include 'koneksi.php';
$npm = $_GET['npm'];
$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE npm='$npm'"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
    <h1>Edit Data Mahasiswa</h1>
</div>
<br/>
<form action="update.php" method="post">
    <input type="hidden" name="npm_lama" value="<?php echo $data['npm']; ?>">
    <table>
        <tr>
            <td>NPM</td>
            <td><input type="text" name="npm" value="<?php echo $data['npm']; ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas" value="<?php echo $data['kelas']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>
