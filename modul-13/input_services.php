<!DOCTYPE html>
<html>
<head>
    <title>Input Servis - Services Motor</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
    <h1>INPUT DATA SERVIS MOTOR</h1>
</div>
<a href="tampil_services.php">Lihat Data</a> | 
<a href="index.php">Home</a>
<br/><br/>
<form action="proses_input_services.php" method="post">
    <table>
        <tr><td>No. Polisi</td><td><input type="text" name="no_polisi" required></td></tr>
        <tr><td>Nama Pemilik</td><td><input type="text" name="nama_pemilik" required></td></tr>
        <tr><td>Merk Motor</td>
            <td>
                <select name="merk_motor" required>
                    <option value="">- Pilih -</option>
                    <option value="Honda">Honda</option>
                    <option value="Yamaha">Yamaha</option>
                    <option value="Suzuki">Suzuki</option>
                    <option value="Kawasaki">Kawasaki</option>
                </select>
            </td>
        </tr>
        <tr><td>Tipe Servis</td>
            <td>
                <select name="tipe_servis" required>
                    <option value="">- Pilih -</option>
                    <option value="Servis Ringan">Servis Ringan</option>
                    <option value="Servis Berat">Servis Berat</option>
                    <option value="Ganti Oli">Ganti Oli</option>
                    <option value="Tune Up">Tune Up</option>
                </select>
            </td>
        </tr>
        <tr><td>Keluhan</td><td><textarea name="keluhan" rows="3" required></textarea></td></tr>
        <tr><td>Biaya (Rp)</td><td><input type="number" name="biaya" required></td></tr>
        <tr><td></td><td><input type="submit" value="Simpan" class="tombol"></td></tr>
    </table>
</form>
</body>
</html>
