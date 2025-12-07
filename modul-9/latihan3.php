<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 - PEMROGRAMAN WEB</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
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
        .example {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin: 30px 0;
        }
        .code-box {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 25px;
            border-radius: 10px;
            font-family: 'Courier New', monospace;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        .result-box {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            border: 2px solid #e9ecef;
        }
        .php-in-html {
            color: #e74c3c;
            font-weight: bold;
            font-size: 1.2em;
        }
        .html-in-php {
            color: #3498db;
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
            background: #fffde7;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #ffd600;
            margin: 20px 0;
        }
        @media (max-width: 768px) {
            .example {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Latihan 3: PHP di dalam HTML</h1>
        
        <div class="note">
            <strong>Keterangan:</strong> Kita bisa menuliskan kode PHP didalam HTML, ataupun menuliskan kode HTML dalam kode PHP.
        </div>
        
        <h2>1. PHP di dalam HTML</h2>
        <div class="example">
            <div class="code-box">
                <h3 style='color: #ecf0f1; margin-top: 0;'>Kode:</h3>
                <pre>&lt;font color="red"&gt;
&lt;?php echo "Tulisan ini berwarna merah"; ?&gt;
&lt;/font&gt;</pre>
            </div>
            
            <div class="result-box">
                <h3>Hasil:</h3>
                <font color="red">
                    <?php echo "Tulisan ini berwarna merah"; ?>
                </font>
            </div>
        </div>
        
        <h2>2. HTML di dalam PHP</h2>
        <div class="example">
            <div class="code-box">
                <h3 style='color: #ecf0f1; margin-top: 0;'>Kode:</h3>
                <pre>&lt;?php
echo "
&lt;br/&gt;
&lt;b&gt;Tulisan dalam bold atau tebal&lt;/b&gt;
";
?&gt;</pre>
            </div>
            
            <div class="result-box">
                <h3>Hasil:</h3>
                <?php
                echo "<br/><b class='html-in-php'>Tulisan dalam bold atau tebal</b>";
                ?>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="index.html" class="btn-back">← Kembali ke Daftar Latihan</a>
        </div>
    </div>
</body>
</html>
