<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 - Hello World</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            padding: 50px;
            text-align: center;
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
        }
        .code-box {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 20px;
            border-radius: 10px;
            text-align: left;
            font-family: 'Courier New', monospace;
            margin: 20px 0;
            overflow-x: auto;
        }
        .output {
            background: #d5f4e6;
            padding: 20px;
            border-radius: 10px;
            border-left: 5px solid #1abc9c;
            margin: 20px 0;
            font-size: 1.2em;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Latihan 1: Hello World</h1>
        
        <div class="code-box">
            <h3>Kode PHP:</h3>
            <pre>&lt;?php
echo "Hello World";
?&gt;</pre>
        </div>
        
        <div class="output">
            <h3>Output:</h3>
            <?php
            echo "Hello World";
            ?>
        </div>
        
        <p><strong>Keterangan:</strong> Untuk mencetak sebuah teks menggunakan perintah echo.</p>
        
        <a href="index.html" class="btn-back">← Kembali ke Daftar Latihan</a>
    </div>
</body>
</html>
