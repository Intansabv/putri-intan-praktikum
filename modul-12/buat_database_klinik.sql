CREATE DATABASE IF NOT EXISTS klinik_sehat;
USE klinik_sehat;

CREATE TABLE IF NOT EXISTS pasien (
    id_pasien INT AUTO_INCREMENT PRIMARY KEY,
    no_rm VARCHAR(20) UNIQUE,
    nama_pasien VARCHAR(100),
    tgl_lahir DATE,
    jenis_kelamin ENUM('L', 'P'),
    alamat TEXT,
    no_telp VARCHAR(15),
    keluhan TEXT,
    tgl_daftar DATE
);
