<!DOCTYPE html>
<html lang=\"id\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Latihan 7 - Form Method GET</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
            padding: 50px;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 1000px;
            margin: 0 auto;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 30px;
            text-align: center;
            border-bottom: 3px solid #3498db;
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
        .form-section h2, .result-section h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #3498db;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 15px;
            vertical-align: middle;
        }
        td:first-child {
            width: 30%;
            font-weight: bold;
            color: #495057;
        }
        input[type=\"text\"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ced4da;
            border-radius: 8px;
            font-size: 1.1rem;
            transition: border 0.3s;
        }
        input[type=\"text\"]:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }
        .btn-group {
            text-align: center;
            margin-top: 25px;
        }
        .btn-submit, .btn-reset {
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            margin: 0 10px;
            transition: transform 0.3s;
        }
        .btn-submit:hover, .btn-reset:hover {
            transform: translateY(-3px);
        }
        .btn-submit {
            background: #3498db;
            color: white;
        }
        .btn-reset {
            background: #95a5a6;
            color: white;
        }
        .result-display {
            background: #2c3e50;
            color: white;
            padding: 25px;
            border-radius: 10px;
            margin-top: 20px;
            font-family: 'Courier New', monospace;
        }
        .result-item {
            margin: 15px 0;
            padding: 15px;
            background: rgba(255,255,255,0.1);
            border-radius: 5px;
            border-left: 4px solid #3498db;
        }
        .result-label {
            color: #f1c40f;
            font-weight: bold;
            font-size: 1.1rem;
        }
        .result-value {
            color: #ecf0f1;
            font-size: 1.2rem;
            margin-top: 5px;
        }
        .url-display {
            background: #34495e;
            padding: 20px;
            border-radius: 8px;
            margin: 25px 0;
            font-family: 'Courier New', monospace;
            word-break: break-all;
            border: 1px solid #4a6491;
        }
        .url-label {
            color: #bdc3c7;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }
        .btn-back {
            display: inline-block;
            background: #3498db;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            font-weight: bold;
        }
        .note {
            background: #e3f2fd;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #2196f3;
            margin: 20px 0;
        }
        .comparison {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin: 30px 0;
        }
        .comparison-box {
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        .post-box {
            background: #e8f5e9;
            border: 2px solid #4caf50;
        }
        .get-box {
            background: #fff3e0;
            border: 2px solid #ff9800;
        }
        .method-title {
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        @media (max-width: 768px) {
            .form-container, .comparison {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
</head>
<body>
    <div class=\"container\">
        <h1>Latihan 7: Penerapan Method GET pada Form</h1>
        
        <div class=\"note\">
            <strong>Keterangan:</strong> Form dengan method GET. Data form akan terlihat di URL browser.
            Cocok untuk data yang tidak sensitif dan pencarian.
        </div>
        
        <div class=\"form-container\">
            <div class=\"form-section\">
                <h2><i class=\"fas fa-edit\"></i> Form Input Data</h2>
                <form method=\"get\" action=\"\">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>
                                <input type=\"text\" name=\"nama\" 
                                       value=\"<?php echo isset(\['nama']) ? htmlspecialchars(\['nama']) : ''; ?>\" 
                                       placeholder=\"Masukkan nama lengkap\">
                            </td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>:</td>
                            <td>
                                <input type=\"text\" name=\"nim\" 
                                       value=\"<?php echo isset(\['nim']) ? htmlspecialchars(\['nim']) : ''; ?>\" 
                                       placeholder=\"Masukkan NIM\">
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
                
                <?php if (isset(\['submit'])): ?>
                <div class=\"url-display\">
                    <div class=\"url-label\">URL Saat Ini:</div>
                    <div style=\"color: #f1c40f; font-weight: bold;\">
                        <?php 
                        \ = \"http://\".\['HTTP_HOST'].\['REQUEST_URI'];
                        echo htmlspecialchars(\);
                        ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            
            <div class=\"result-section\">
                <h2><i class=\"fas fa-chart-bar\"></i> Hasil Input</h2>
                
                <?php
                if (isset(\['submit'])) {
                    \ = isset(\['nama']) ? htmlspecialchars(\['nama']) : '';
                    \ = isset(\['nim']) ? htmlspecialchars(\['nim']) : '';
                ?>
                
                <div class=\"result-display\">
                    <h3 style=\"color: #f1c40f; margin-top: 0;\">INI OUTPUT SESUAI INPUTAN DARI FORM DIATAS</h3>
                    
                    <div class=\"result-item\">
                        <div class=\"result-label\">Nama :</div>
                        <div class=\"result-value\"><?php echo \ ? \ : '[Belum diisi]'; ?></div>
                    </div>
                    
                    <div class=\"result-item\">
                        <div class=\"result-label\">NIM :</div>
                        <div class=\"result-value\"><?php echo \ ? \ : '[Belum diisi]'; ?></div>
                    </div>
                    
                    <div style=\"margin-top: 25px; padding: 20px; background: rgba(52, 152, 219, 0.3); border-radius: 8px;\">
                        <strong><i class=\"fas fa-info-circle\"></i> Metode:</strong> \<br>
                        <strong><i class=\"fas fa-link\"></i> Parameter URL:</strong> nama=<?php echo urlencode(\); ?>&nim=<?php echo urlencode(\); ?>
                    </div>
                </div>
                
                <?php } else { ?>
                
                <div style=\"text-align: center; padding: 40px; color: #7f8c8d;\">
                    <i style=\"font-size: 3rem; color: #bdc3c7; margin-bottom: 20px; display: block;\" class=\"fas fa-database\"></i>
                    <h3>Data Akan Muncul Di Sini</h3>
                    <p>Isi form dan klik \"Simpan\" untuk melihat data muncul di URL</p>
                    
                    <div style=\"margin-top: 30px; padding: 20px; background: #f0f0f0; border-radius: 8px; text-align: left;\">
                        <strong>Contoh URL setelah submit:</strong><br>
                        <code style=\"color: #e74c3c;\">latihan7.php?nama=Ridho&nim=12344555&submit=Simpan</code>
                    </div>
                </div>
                
                <?php } ?>
                
                <div class=\"code-box\" style=\"background: #34495e; color: white; padding: 15px; border-radius: 8px; margin-top: 20px; font-family: monospace; font-size: 0.9rem;\">
                    <strong>Kode PHP untuk mengambil data GET:</strong><br>
                    if(isset(\['submit'])) {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;\ = \['nama'];<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;\ = \['nim'];<br>
                    }
                </div>
            </div>
        </div>
        
        <div class=\"comparison\">
            <div class=\"comparison-box post-box\">
                <div class=\"method-title\" style=\"color: #2e7d32;\">Method POST</div>
                <p>Data tidak terlihat di URL</p>
                <p>Lebih aman untuk data sensitif</p>
                <p>Tidak ada batasan panjang data</p>
                <p><strong>Contoh:</strong> Login, form pembayaran</p>
            </div>
            
            <div class=\"comparison-box get-box\">
                <div class=\"method-title\" style=\"color: #ef6c00;\">Method GET</div>
                <p>Data terlihat di URL</p>
                <p>Cocok untuk data tidak sensitif</p>
                <p>Terbatas panjang URL (~2000 karakter)</p>
                <p><strong>Contoh:</strong> Pencarian, filter, bookmark</p>
            </div>
        </div>
        
        <div style=\"text-align: center; margin-top: 40px;\">
            <a href=\"index.html\" class=\"btn-back\">← Kembali ke Daftar Latihan</a>
        </div>
    </div>
</body>
</html>
