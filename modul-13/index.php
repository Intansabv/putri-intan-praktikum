<!DOCTYPE html>
<html>
<head>
    <title>MODUL 13 - Update dan Delete Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .project-container {
            display: flex;
            justify-content: space-around;
            margin-top: 40px;
        }
        .project-box {
            width: 350px;
            padding: 20px;
            border: 3px solid #2196F3;
            border-radius: 10px;
            background-color: #f9f9f9;
            text-align: center;
        }
        .project-title {
            color: #2196F3;
            margin-bottom: 20px;
        }
        .features {
            text-align: left;
            margin: 20px 0;
        }
        .features li {
            margin: 8px 0;
        }
    </style>
</head>
<body>
<div class="judul">
    <h1>MODUL 13: Update dan Delete Data di Database dengan PHP</h1>
    <h2>Tugas Praktikum - Implementasi CRUD Lengkap</h2>
    <h3>www.unipma.ac.id</h3>
</div>

<div class="project-container">
    <!-- PROJECT 1: PERPUSTAKAAN -->
    <div class="project-box">
        <h2 class="project-title">??? PERPUSTAKAAN</h2>
        <p>Sistem Manajemen Buku dengan CRUD Lengkap</p>
        <div class="features">
            <h4>Fitur:</h4>
            <ul>
                <li>? Input Data Buku</li>
                <li>? Tampil Data Buku</li>
                <li>? <strong>Update Data Buku</strong></li>
                <li>? <strong>Delete Data Buku</strong></li>
            </ul>
        </div>
        <a href="input_perpus.php" class="tombol">Input Data</a>
        <a href="tampil_perpus.php" class="tombol">Lihat Data</a>
    </div>
    
    <!-- PROJECT 2: KLINIK -->
    <div class="project-box">
        <h2 class="project-title">?? KLINIK SEHAT</h2>
        <p>Sistem Pendaftaran Pasien dengan CRUD Lengkap</p>
        <div class="features">
            <h4>Fitur:</h4>
            <ul>
                <li>? Input Data Pasien</li>
                <li>? Tampil Data Pasien</li>
                <li>? <strong>Update Data Pasien</strong></li>
                <li>? <strong>Delete Data Pasien</strong></li>
            </ul>
        </div>
        <a href="input_klinik.php" class="tombol">Input Data</a>
        <a href="tampil_klinik.php" class="tombol">Lihat Data</a>
    </div>
    
    <!-- PROJECT 3: SERVICES MOTOR -->
    <div class="project-box">
        <h2 class="project-title">??? SERVICES MOTOR</h2>
        <p>Sistem Servis Motor dengan CRUD Lengkap</p>
        <div class="features">
            <h4>Fitur:</h4>
            <ul>
                <li>? Input Data Servis</li>
                <li>? Tampil Data Servis</li>
                <li>? <strong>Update Data Servis</strong></li>
                <li>? <strong>Delete Data Servis</strong></li>
            </ul>
        </div>
        <a href="input_services.php" class="tombol">Input Data</a>
        <a href="tampil_services.php" class="tombol">Lihat Data</a>
    </div>
</div>

<div style="text-align:center; margin-top:50px;">
    <h3>?? Database SQL Files:</h3>
    <a href="buat_database_perpus.sql" class="tombol">?? SQL Perpustakaan</a>
    <a href="buat_database_klinik.sql" class="tombol">?? SQL Klinik</a>
    <a href="buat_database_services.sql" class="tombol">?? SQL Services</a>
</div>

<div style="background-color:#e8f5e8; padding:20px; margin-top:30px; border-radius:10px;">
    <h3>?? Tugas Praktikum MODUL 13 Selesai!</h3>
    <p><strong>Keterangan:</strong> Semua project sudah memiliki fitur CRUD lengkap:</p>
    <p>? <strong>C</strong>reate (Input) | ? <strong>R</strong>ead (Tampil) | ? <strong>U</strong>pdate (Edit) | ? <strong>D</strong>elete (Hapus)</p>
</div>
</body>
</html>
