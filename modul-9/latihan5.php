<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5 - Penghitungan Angka</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #a8edea, #fed6e3);
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
            border-bottom: 3px solid #e67e22;
            padding-bottom: 15px;
        }
        .calculator {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin: 30px 0;
        }
        .input-section, .result-section {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            border: 2px solid #e9ecef;
        }
        .number-input {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #495057;
        }
        input[type=\"number\"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ced4da;
            border-radius: 8px;
            font-size: 1.1rem;
        }
        .operations {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin: 20px 0;
        }
        .op-btn {
            padding: 15px;
            border: none;
            border-radius: 8px;
            background: #e67e22;
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }
        .op-btn:hover {
            background: #d35400;
        }
        .result-display {
            background: #2c3e50;
            color: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            margin: 20px 0;
            font-family: 'Courier New', monospace;
        }
        .result-value {
            font-size: 2.5rem;
            font-weight: bold;
            color: #f1c40f;
            margin: 15px 0;
        }
        .calculation {
            font-size: 1.3rem;
            color: #bdc3c7;
        }
        .btn-back {
            display: inline-block;
            background: #e67e22;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            font-weight: bold;
        }
        .note {
            background: #fff9e6;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #f1c40f;
            margin: 20px 0;
        }
        @media (max-width: 768px) {
            .calculator {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Latihan 5: Penghitungan Angka</h1>
        
        <div class="note">
            <strong>Keterangan:</strong> Penerapan variabel dan pengambilan nilai variabel untuk melakukan penghitungan matematika.
        </div>
        
        <div class="calculator">
            <div class="input-section">
                <h2>Input Angka</h2>
                
                <form method="post" action="">
                    <div class="number-input">
                        <label for="angka1">Angka Pertama:</label>
                        <input type="number" id="angka1" name="angka1" step="any" 
                               value="<?php echo isset(\['angka1']) ? \['angka1'] : '15'; ?>" required>
                    </div>
                    
                    <div class="number-input">
                        <label for="angka2">Angka Kedua:</label>
                        <input type="number" id="angka2" name="angka2" step="any" 
                               value="<?php echo isset(\['angka2']) ? \['angka2'] : '7'; ?>" required>
                    </div>
                    
                    <div class="operations">
                        <button type="submit" name="operasi" value="tambah" class="op-btn">+</button>
                        <button type="submit" name="operasi" value="kurang" class="op-btn">-</button>
                        <button type="submit" name="operasi" value="kali" class="op-btn">×</button>
                        <button type="submit" name="operasi" value="bagi" class="op-btn">÷</button>
                    </div>
                </form>
            </div>
            
            <div class="result-section">
                <h2>Hasil Perhitungan</h2>
                
                <?php
                if (\[\"REQUEST_METHOD\"] == \"POST\" && isset(\['operasi'])) {
                    \ = (float)\['angka1'];
                    \ = (float)\['angka2'];
                    \ = \['operasi'];
                    
                    switch(\) {
                        case 'tambah':
                            \ = \ + \;
                            \ = '+';
                            \ = 'Penjumlahan';
                            break;
                        case 'kurang':
                            \ = \ - \;
                            \ = '-';
                            \ = 'Pengurangan';
                            break;
                        case 'kali':
                            \ = \ * \;
                            \ = '×';
                            \ = 'Perkalian';
                            break;
                        case 'bagi':
                            if (\ != 0) {
                                \ = \ / \;
                                \ = '÷';
                                \ = 'Pembagian';
                            } else {
                                \ = 'Tak Terhingga';
                                \ = '÷';
                                \ = 'Pembagian dengan nol';
                            }
                            break;
                        default:
                            \ = 0;
                            \ = '';
                            \ = '';
                    }
                } else {
                    // Nilai default
                    \ = 15;
                    \ = 7;
                    \ = 22;
                    \ = '+';
                    \ = 'Penjumlahan';
                }
                ?>
                
                <div class="result-display">
                    <div class="calculation">
                        <?php echo \ . ' ' . \ . ' ' . \ . ' = '; ?>
                    </div>
                    <div class="result-value"><?php echo \; ?></div>
                    <div><?php echo \; ?></div>
                </div>
                
                <div class="code-box" style="background: #34495e; color: white; padding: 15px; border-radius: 8px; margin-top: 20px; font-family: monospace; font-size: 0.9rem;">
                    <strong>Kode PHP:</strong><br>
                    \ = <?php echo \; ?>;<br>
                    \ = <?php echo \; ?>;<br>
                    \ = \ <?php echo \; ?> \;<br>
                    echo \"Hasil: \". \;
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="index.html" class="btn-back">← Kembali ke Daftar Latihan</a>
        </div>
    </div>
</body>
</html>
