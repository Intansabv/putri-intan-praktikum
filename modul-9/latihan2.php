<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 - Perulangan For</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            padding: 50px;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 30px;
            text-align: center;
        }
        .code-box {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 20px;
            border-radius: 10px;
            text-align: left;
            font-family: 'Courier New', monospace;
            margin: 20px 0;
        }
        .output {
            background: #e8f4fc;
            padding: 20px;
            border-radius: 10px;
            border-left: 5px solid #3498db;
            margin: 20px 0;
        }
        .btn-back {
            display: inline-block;
            background: #3498db;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .loop-item {
            padding: 8px;
            border-bottom: 1px dashed #ddd;
            color: #e74c3c;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Latihan 2: Perulangan For di PHP</h1>
        
        <div class="code-box">
            <h3 style='color: #ecf0f1;'>Kode PHP:</h3>
            <pre>&lt;?php
for(\ = 1; \ <= 10; \++) {
    echo "Perulangan ke-\&lt;br/&gt;";
}
?&gt;</pre>
        </div>
        
        <div class="output">
            <h3>Output Perulangan:</h3>
            <?php
            for( = 1;  <= 10; ++) {
                echo "<div class='loop-item'>Perulangan ke-</div>";
            }
            ?>
        </div>
        
        <p><strong>Keterangan:</strong> Penerapan perulangan for untuk mencetak teks 10 kali.</p>
        
        <div style="text-align: center;">
            <a href="index.html" class="btn-back">← Kembali ke Daftar Latihan</a>
        </div>
    </div>
</body>
</html>
