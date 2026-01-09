<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Servis - Services Motor</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
    <h1>SERVICES MOTOR MADIUN</h1>
    <h2>Edit Data Servis</h2>
</div>

<?php
include 'koneksi_services.php';
$id_servis = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM servis WHERE id_servis='$id_servis'");
$data = mysqli_fetch_array($query);
?>

<a href="tampil_services.php">Kembali ke Data Servis</a>
<br/><br/>

<h3>Edit Data Servis</h3>
<form action="update_services.php" method="post">
    <input type="hidden" name="id_servis" value="<?php echo $data['id_servis']; ?>">
    <table>
        <tr>
            <td>No. Polisi</td>
            <td><input type="text" name="no_polisi" value="<?php echo $data['no_polisi']; ?>" required></td>
        </tr>
        <tr>
            <td>Nama Pemilik</td>
            <td><input type="text" name="nama_pemilik" value="<?php echo $data['nama_pemilik']; ?>" required></td>
        </tr>
        <tr>
            <td>Merk Motor</td>
            <td>
                <select name="merk_motor" required>
                    <option value="Honda" <?php echo ($data['merk_motor']=='Honda')?'selected':''; ?>>Honda</option>
                    <option value="Yamaha" <?php echo ($data['merk_motor']=='Yamaha')?'selected':''; ?>>Yamaha</option>
                    <option value="Suzuki" <?php echo ($data['merk_motor']=='Suzuki')?'selected':''; ?>>Suzuki</option>
                    <option value="Kawasaki" <?php echo ($data['merk_motor']=='Kawasaki')?'selected':''; ?>>Kawasaki</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tipe Servis</td>
            <td>
                <select name="tipe_servis" required>
                    <option value="Servis Ringan" <?php echo ($data['tipe_servis']=='Servis Ringan')?'selected':''; ?>>Servis Ringan</option>
                    <option value="Servis Berat" <?php echo ($data['tipe_servis']=='Servis Berat')?'selected':''; ?>>Servis Berat</option>
                    <option value="Ganti Oli" <?php echo ($data['tipe_servis']=='Ganti Oli')?'selected':''; ?>>Ganti Oli</option>
                    <option value="Tune Up" <?php echo ($data['tipe_servis']=='Tune Up')?'selected':''; ?>>Tune Up</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Keluhan</td>
            <td><textarea name="keluhan" rows="3" required><?php echo $data['keluhan']; ?></textarea></td>
        </tr>
        <tr>
            <td>Biaya (Rp)</td>
            <td><input type="number" name="biaya" value="<?php echo $data['biaya']; ?>" required></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <select name="status" required>
                    <option value="Proses" <?php echo ($data['status']=='Proses')?'selected':''; ?>>Proses</option>
                    <option value="Selesai" <?php echo ($data['status']=='Selesai')?'selected':''; ?>>Selesai</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update Data" class="tombol"></td>
        </tr>
    </table>
</form>
</body>
</html>
