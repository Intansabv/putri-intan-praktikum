<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4 - Variabel di PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fdfcfb, #e2d1c3);
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
            border-bottom: 3px solid #9b59b6;
            padding-bottom: 15px;
        }
        .variables-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 30px 0;
        }
        .var-card {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            border-top: 5px solid;
            transition: transform 0.3s;
        }
        .var-card:hover {
            transform: translateY(-5px);
        }
        .var-card.integer {
            border-top-color: #3498db;
        }
        .var-card.string {
            border-top-color: #e74c3c;
        }
        .var-card.float {
            border-top-color: #2ecc71;
        }
        .var-name {
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #2c3e50;
        }
        .var-value {
            font-size: 1.3rem;
            font-weight: bold;
            margin: 15px 0;
        }
        .var-type {
            font-size: 0.9rem;
            color: #7f8c8d;
            font-style: italic;
        }
        .code-box {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 20px;
            border-radius: 10px;
            margin: 25px 0;
            font-family: 'Courier New', monospace;
            font-size: 0.95rem;
        }
        .btn-back {
            display: inline-block;
            background: #9b59b6;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            font-weight: bold;
        }
        .note {
            background: #e8f6f3;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #1abc9c;
            margin: 20px 0;
        }
        @media (max-width: 768px) {
            .variables-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Latihan 4: Penulisan Variabel di PHP</h1>
        
        <div class="note">
            <strong>Keterangan:</strong> Menerapkan penulisan variabel di PHP untuk bilangan bulat, bilangan desimal, dan teks/tulisan.
            Untuk menyisipkan antara variabel dengan sebuah tulisan, maka dipisahkan dengan tanda titik (.)
        </div>
        
        <div class="code-box">
            <h3 style='color: #ecf0f1; margin-top: 0;'>Kode PHP:</h3>
            <pre>&lt;?php
\ = 17;          // integer
\ = \"Saya belajar PHP\";   // string
\ = 17.42;     // float

echo \"Nilai Variabel bilanganbulat : \". \ . \"&lt;br/&gt;\";
echo \"Nilai Variabel teks : \". \ . \"&lt;br/&gt;\";
echo \"Nilai Variabel bilangandesimal : \". \ . \"&lt;br/&gt;\";
?&gt;</pre>
        </div>
        
        <h2>Hasil Output Variabel:</h2>
        <div class="variables-grid">
            <?php
            // Deklarasi variabel
             = 17;
             = "Saya belajar PHP";
             = 17.42;
            ?>
            
            <div class="var-card integer">
                <div class="var-name">\</div>
                <div class="var-type">Tipe: Integer</div>
                <div class="var-value"><?php echo ; ?></div>
                <div>Bilangan bulat</div>
            </div>
            
            <div class="var-card string">
                <div class="var-name">\</div>
                <div class="var-type">Tipe: String</div>
                <div class="var-value">"<?php echo ; ?>"</div>
                <div>Teks/string</div>
            </div>
            
            <div class="var-card float">
                <div class="var-name">\</div>
                <div class="var-type">Tipe: Float/Double</div>
                <div class="var-value"><?php echo ; ?></div>
                <div>Bilangan desimal</div>
            </div>
        </div>
        
        <div style="background: #f0f0f0; padding: 20px; border-radius: 10px; margin: 25px 0;">
            <h3>Output dari echo:</h3>
            <?php
            echo "Nilai Variabel bilanganbulat : ".  . "<br/>";
            echo "Nilai Variabel teks : ".  . "<br/>";
            echo "Nilai Variabel bilangandesimal : ".  . "<br/>";
            ?>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="index.html" class="btn-back">← Kembali ke Daftar Latihan</a>
        </div>
    </div>
</body>
</html>
