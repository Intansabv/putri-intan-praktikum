<!DOCTYPE html>
<html>
<head>
    <title>Modul 12 - Input Data ke Database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .menu-project {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }
        .project-card {
            width: 300px;
            padding: 20px;
            border: 2px solid #4CAF50;
            border-radius: 10px;
            text-align: center;
            background-color: #f9f9f9;
        }
        .project-card h3 {
            color: #4CAF50;
        }
        .project-links a {
            display: block;
            margin: 10px 0;
            padding: 10px;
            background-color: #2196F3;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .project-links a:hover {
            background-color: #0b7dda;
        }
    </style>
</head>
<body>
<div class="judul">
    <h1>MODUL 12: Input Data ke Database dengan PHP</h1>
    <h2>Tugas Praktikum - 3 Project dengan Fitur Input Data</h2>
    <h3>www.unipma.ac.id</h3>
</div>

<div class="menu-project">
    <!-- PROJECT 1: PERPUSTAKAAN -->
    <div class="project-card">
        <h3>PROJECT 1: PERPUSTAKAAN</h3>
        <p>Sistem Input Data Buku Perpustakaan Kota Madiun</p>
        <div class="project-links">
            <a href="input_perpus.php">?? Input Data Buku</a>
            <a href="tampil_perpus.php">?? Lihat Data Buku</a>
        </div>
    </div>
    
    <!-- PROJECT 2: KLINIK -->
    <div class="project-card">
        <h3>PROJECT 2: KLINIK SEHAT</h3>
        <p>Sistem Pendaftaran Pasien Klinik Sehat Madiun</p>
        <div class="project-links">
            <a href="input_klinik.php">?? Input Data Pasien</a>
            <a href="tampil_klinik.php">?? Lihat Data Pasien</a>
        </div>
    </div>
    
    <!-- PROJECT 3: SERVICES MOTOR -->
    <div class="project-card">
        <h3>PROJECT 3: SERVICES MOTOR</h3>
        <p>Sistem Input Servis Motor Madiun</p>
        <div class="project-links">
            <a href="input_services.php">??? Input Data Servis</a>
            <a href="tampil_services.php">?? Lihat Data Servis</a>
        </div>
    </div>
</div>

<div style="text-align:center; margin-top:50px;">
    <h3>Database SQL Files:</h3>
    <a href="buat_database_perpus.sql" class="tombol">?? SQL Perpustakaan</a>
    <a href="buat_database_klinik.sql" class="tombol">?? SQL Klinik</a>
    <a href="buat_database_services.sql" class="tombol">?? SQL Services</a>
</div>
</body>
</html>
