CREATE DATABASE IF NOT EXISTS perpustakaan_madiun;
USE perpustakaan_madiun;

CREATE TABLE IF NOT EXISTS buku (
    id_buku INT AUTO_INCREMENT PRIMARY KEY,
    kode_buku VARCHAR(20) UNIQUE,
    judul_buku VARCHAR(200),
    pengarang VARCHAR(100),
    penerbit VARCHAR(100),
    tahun_terbit YEAR,
    jumlah INT,
    tanggal_input DATE
);
