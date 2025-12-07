<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Latihan 6 - PENERAPAN METHOD POST PADA FORM</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #ffecd2, #fcb69f);
            padding: 50px;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 900px;
            margin: 0 auto;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 30px;
            text-align: center;
            border-bottom: 3px solid #e74c3c;
            padding-bottom: 15px;
        }
        .form-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin: 30px 0;
        }
        .form-section, .result-section {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            border: 2px solid #e9ecef;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 12px;
            vertical-align: top;
        }
        td:first-child {
            width: 35%;
            font-weight: bold;
            color: #495057;
        }
        input[type=\"text\"], input[type=\"email\"], select {
            width: 100%;
            padding: 10px;
            border: 2px solid #ced4da;
            border-radius: 5px;
            font-size: 1rem;
        }
        input[type=\"radio\"] {
            margin-right: 8px;
        }
        .radio-group label {
            margin-right: 20px;
            cursor: pointer;
        }
        .btn-group {
            text-align: center;
            margin-top: 20px;
        }
        .btn-submit, .btn-reset {
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            margin: 0 10px;
        }
        .btn-submit {
            background: #27ae60;
            color: white;
        }
        .btn-reset {
            background: #e74c3c;
            color: white;
        }
        .result-display {
            background: #2c3e50;
            color: white;
            padding: 25px;
            border-radius: 10px;
            margin-top: 20px;
            font-family: 'Courier New', monospace;
            display: <?php echo (isset(\['submit']) ? 'block' : 'none'); ?>;
        }
        .result-item {
            margin: 10px 0;
            padding: 10px;
            background: rgba(255,255,255,0.1);
            border-radius: 5px;
        }
        .result-label {
            color: #f1c40f;
            font-weight: bold;
        }
        .btn-back {
            display: inline-block;
            background: #e74c3c;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            font-weight: bold;
        }
        .note {
            background: #ffeaa7;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #fdcb6e;
            margin: 20px 0;
        }
        @media (max-width: 768px) {
            .form-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>Latihan 6: Penerapan Method POST pada Form</h1>
        
        <div class=\"note\">
            <strong>Keterangan:</strong> Form dengan method POST. Nilai dari variabel form diambil dan ditampilkan dengan menggunakan variabel \.
        </div>
        
        <div class=\"form-container\">
            <div class=\"form-section\">
                <h2>Form Input Data</h2>
                <form method=\"post\" action=\"\">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>
                                <input type=\"text\" name=\"nama\" value=\"<?php echo isset(\['nama']) ? htmlspecialchars(\['nama']) : ''; ?>\" placeholder=\"Masukkan nama\">
                            </td>
                        </tr>
                        <tr>
                            <td>Mata Kuliah</td>
                            <td>:</td>
                            <td>
                                <select name=\"mk\">
                                    <option value=\"\">--- Pilih Mata Kuliah ---</option>
                                    <option value=\"Pemrograman Terstruktur\" <?php echo (isset(\['mk']) && \['mk'] == 'Pemrograman Terstruktur') ? 'selected' : ''; ?>>Pemrograman Terstruktur</option>
                                    <option value=\"Pemrograman Web\" <?php echo (isset(\['mk']) && \['mk'] == 'Pemrograman Web') ? 'selected' : ''; ?>>Pemrograman Web</option>
                                    <option value=\"Pemrograman Berorientasi Objek\" <?php echo (isset(\['mk']) && \['mk'] == 'Pemrograman Berorientasi Objek') ? 'selected' : ''; ?>>Pemrograman Berorientasi Objek</option>
                                    <option value=\"Algoritma & Struktur Data\" <?php echo (isset(\['mk']) && \['mk'] == 'Algoritma & Struktur Data') ? 'selected' : ''; ?>>Algoritma & Struktur Data</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td class=\"radio-group\">
                                <label>
                                    <input type=\"radio\" name=\"jk\" value=\"Laki-laki\" <?php echo (isset(\['jk']) && \['jk'] == 'Laki-laki') ? 'checked' : ''; ?>> Laki-laki
                                </label>
                                <label>
                                    <input type=\"radio\" name=\"jk\" value=\"Perempuan\" <?php echo (isset(\['jk']) && \['jk'] == 'Perempuan') ? 'checked' : ''; ?>> Perempuan
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>
                                <input type=\"email\" name=\"email\" value=\"<?php echo isset(\['email']) ? htmlspecialchars(\['email']) : ''; ?>\" placeholder=\"contoh@email.com\">
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"3\" align=\"center\">
                                <div class=\"btn-group\">
                                    <input type=\"submit\" name=\"submit\" value=\"Simpan\" class=\"btn-submit\">
                                    <input type=\"reset\" name=\"Reset\" value=\"Reset\" class=\"btn-reset\">
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            
            <div class=\"result-section\">
                <h2>Hasil Input</h2>
                
                <?php
                if (isset(\['submit'])) {
                    \ = isset(\['nama']) ? htmlspecialchars(\['nama']) : '';
                    \ = isset(\['mk']) ? htmlspecialchars(\['mk']) : '';
                    \ = isset(\['jk']) ? htmlspecialchars(\['jk']) : '';
                    \ = isset(\['email']) ? htmlspecialchars(\['email']) : '';
                ?>
                
                <div class=\"result-display\" style=\"display: block;\">
                    <h3>INI OUTPUT SESUAI INPUTAN DARI FORM DIATAS</h3>
                    
                    <div class=\"result-item\">
                        <span class=\"result-label\">Nama :</span> <?php echo \ ? \ : '[Belum diisi]'; ?>
                    </div>
                    
                    <div class=\"result-item\">
                        <span class=\"result-label\">Mata Kuliah :</span> <?php echo \ ? \ : '[Belum dipilih]'; ?>
                    </div>
                    
                    <div class=\"result-item\">
                        <span class=\"result-label\">Jenis Kelamin :</span> <?php echo \ ? \ : '[Belum dipilih]'; ?>
                    </div>
                    
                    <div class=\"result-item\">
                        <span class=\"result-label\">Email :</span> <?php echo \ ? \ : '[Belum diisi]'; ?>
                    </div>
                    
                    <div style=\"margin-top: 20px; padding: 15px; background: rgba(52, 152, 219, 0.2); border-radius: 5px;\">
                        <strong>Metode:</strong> \<br>
                        <strong>URL:</strong> Tidak berubah (data tidak terlihat di URL)
                    </div>
                </div>
                
                <?php } else { ?>
                
                <div style=\"text-align: center; padding: 40px; color: #7f8c8d;\">
                    <i style=\"font-size: 3rem; color: #bdc3c7; margin-bottom: 20px; display: block;\" class=\"fas fa-clipboard-list\"></i>
                    <h3>Belum Ada Data</h3>
                    <p>Isi form di samping dan klik \"Simpan\" untuk melihat hasilnya</p>
                </div>
                
                <?php } ?>
                
                <div class=\"code-box\" style=\"background: #34495e; color: white; padding: 15px; border-radius: 8px; margin-top: 20px; font-family: monospace; font-size: 0.9rem;\">
                    <strong>Kode PHP untuk mengambil data:</strong><br>
                    \ = \['nama'];<br>
                    \ = \['mk'];<br>
                    \ = \['jk'];<br>
                    \ = \['email'];
                </div>
            </div>
        </div>
        
        <div style=\"text-align: center; margin-top: 40px;\">
            <a href=\"index.html\" class=\"btn-back\">← Kembali ke Daftar Latihan</a>
        </div>
    </div>
</body>
</html>
