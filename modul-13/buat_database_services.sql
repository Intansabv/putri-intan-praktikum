CREATE DATABASE IF NOT EXISTS services_motor;
USE services_motor;

CREATE TABLE IF NOT EXISTS servis (
    id_servis INT AUTO_INCREMENT PRIMARY KEY,
    no_polisi VARCHAR(15),
    nama_pemilik VARCHAR(100),
    merk_motor VARCHAR(50),
    tipe_servis VARCHAR(50),
    keluhan TEXT,
    biaya INT,
    tgl_servis DATE,
    status ENUM('Proses', 'Selesai') DEFAULT 'Proses'
);
