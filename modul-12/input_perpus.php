<!DOCTYPE html>
<html>
<head>
    <title>Input Data Buku - Perpustakaan Kota Madiun</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
        }
        input, select, textarea {
            width: 300px;
            padding: 5px;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="judul">
    <h1>PERPUSTAKAAN KOTA MADIUN</h1>
    <h2>Form Input Data Buku</h2>
</div>

<div class="container">
    <?php
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "sukses"){
            echo '<p style="color:green; font-weight:bold;">Data buku berhasil disimpan!</p>';
        }else if($pesan == "gagal"){
            echo '<p style="color:red; font-weight:bold;">Gagal menyimpan data!</p>';
        }
    }
    ?>
    
    <a href="tampil_perpus.php" class="tombol">Lihat Data Buku</a>
    <br><br>
    
    <form action="proses_input_perpus.php" method="post">
        <div class="form-group">
            <label for="kode_buku">Kode Buku:</label>
            <input type="text" name="kode_buku" id="kode_buku" required>
        </div>
        
        <div class="form-group">
            <label for="judul_buku">Judul Buku:</label>
            <input type="text" name="judul_buku" id="judul_buku" required>
        </div>
        
        <div class="form-group">
            <label for="pengarang">Pengarang:</label>
            <input type="text" name="pengarang" id="pengarang" required>
        </div>
        
        <div class="form-group">
            <label for="penerbit">Penerbit:</label>
            <input type="text" name="penerbit" id="penerbit" required>
        </div>
        
        <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit:</label>
            <input type="number" name="tahun_terbit" id="tahun_terbit" min="1900" max="2026" required>
        </div>
        
        <div class="form-group">
            <label for="jumlah">Jumlah Stok:</label>
            <input type="number" name="jumlah" id="jumlah" min="1" required>
        </div>
        
        <div class="form-group">
            <input type="submit" value="Simpan Data" class="btn">
            <input type="reset" value="Reset" class="btn" style="background-color:#f44336;">
        </div>
    </form>
</div>
</body>
</html>
