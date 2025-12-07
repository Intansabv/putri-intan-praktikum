<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 8 - Array 1 Dimensi</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #d4fc79, #96e6a1);
            padding: 50px;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 1100px;
            margin: 0 auto;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 30px;
            text-align: center;
            border-bottom: 3px solid #27ae60;
            padding-bottom: 15px;
        }
        .method-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin: 30px 0;
        }
        .method-box {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            border: 2px solid #e9ecef;
            transition: transform 0.3s;
        }
        .method-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .method-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid;
            text-align: center;
        }
        .method-1 .method-title { border-bottom-color: #e74c3c; }
        .method-2 .method-title { border-bottom-color: #3498db; }
        .method-3 .method-title { border-bottom-color: #9b59b6; }
        .code-display {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 15px;
            border-radius: 8px;
            font-family: "Courier New", monospace;
            font-size: 0.9rem;
            margin: 15px 0;
            overflow-x: auto;
        }
        .output-display {
            background: #e8f6f3;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #1abc9c;
            margin: 15px 0;
            font-family: "Courier New", monospace;
        }
        .array-item {
            padding: 8px 15px;
            margin: 5px 0;
            background: white;
            border-radius: 5px;
            border: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
        }
        .array-index {
            color: #e74c3c;
            font-weight: bold;
        }
        .array-value {
            color: #2c3e50;
            font-weight: bold;
        }
        .btn-back {
            display: inline-block;
            background: #27ae60;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            font-weight: bold;
        }
        .note {
            background: #d5f4e6;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #27ae60;
            margin: 20px 0;
        }
        .theory-box {
            background: #f0f7ff;
            padding: 20px;
            border-radius: 10px;
            margin: 30px 0;
            border: 2px dashed #3498db;
        }
        @media (max-width: 992px) {
            .method-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 768px) {
            .method-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>Latihan 8: Array Satu Dimensi</h1>
        
        <div class="note">
            <strong>Keterangan:</strong> Array berguna untuk menyimpan sejumlah data yang bertipe sama dengan nama variabel yang sama.
            Yang membedakan adalah melalui index nya. Index array dimulai dari 0. Tapi di PHP, juga memungkinkan pendeklarasian index array berupa huruf.       
        </div>
        
        <div class="theory-box">
            <h3><i class="fas fa-lightbulb"></i> Konsep Array 1 Dimensi</h3>
            <p><strong>Array</strong> = Struktur data yang menyimpan kumpulan nilai dalam satu variabel.</p>
            <p><strong>Index</strong> = Posisi elemen dalam array (biasanya dimulai dari 0).</p>
            <p><strong>Elemen</strong> = Nilai yang disimpan dalam array.</p>
            <p><strong>Contoh:</strong> $kota = ["Jakarta", "Bandung", "Surabaya"];</p>
            <p>• $kota[0] = "Jakarta"</p>
            <p>• $kota[1] = "Bandung"</p>
            <p>• $kota[2] = "Surabaya"</p>
        </div>
        
        <h2 style="text-align: center; color: #2c3e50; margin: 40px 0 20px;">
            <i class="fas fa-code"></i> 3 Cara Mendeklarasikan Array
        </h2>
        
        <div class="method-container">
            <!-- METODE 1 -->
            <div class="method-box method-1">
                <div class="method-title">CARA PERTAMA</div>
                <div class="code-display">
                    // Deklarasi per elemen<br>
                    $kota[0] = "Yogyakarta";<br>
                    $kota[1] = "Jakarta";<br>
                    $kota[2] = "Malang";<br>
                    print("Kota ke-2: $kota[2]");
                </div>
                
                <div class="output-display">
                    <strong>Output:</strong><br>
                    <?php
                    // Cara 1
                    $kota[0] = "Yogyakarta";
                    $kota[1] = "Jakarta";
                    $kota[2] = "Malang";
                    print("Kota ke-2: $kota[2]");
                    ?>
                </div>
                
                <div class="array-visual">
                    <strong>Visual Array:</strong>
                    <div class="array-item">
                        <span class="array-index">[0]</span>
                        <span class="array-value"><?php echo $kota[0]; ?></span>
                    </div>
                    <div class="array-item">
                        <span class="array-index">[1]</span>
                        <span class="array-value"><?php echo $kota[1]; ?></span>
                    </div>
                    <div class="array-item">
                        <span class="array-index">[2]</span>
                        <span class="array-value"><?php echo $kota[2]; ?></span>
                    </div>
                </div>
                
                <p style="font-size: 0.9rem; color: #666; margin-top: 15px;">
                    <i class="fas fa-info-circle"></i> Index ditentukan manual
                </p>
            </div>
            
            <!-- METODE 2 -->
            <div class="method-box method-2">
                <div class="method-title">CARA KEDUA</div>
                <div class="code-display">
                    // Menggunakan array()<br>
                    $kota2 = array(<br>
                    &nbsp;&nbsp;0 => "Jember",<br>
                    &nbsp;&nbsp;1 => "Solo",<br>
                    &nbsp;&nbsp;2 => "Surabaya"<br>
                    );<br>
                    print("Kota ke-0: $kota2[0]");
                </div>
                
                <div class="output-display">
                    <strong>Output:</strong><br>
                    <?php
                    // Cara 2
                    $kota2 = array(
                        0 => "Jember",
                        1 => "Solo", 
                        2 => "Surabaya"
                    );
                    print("Kota ke-0: $kota2[0]");
                    ?>
                </div>
                
                <div class="array-visual">
                    <strong>Visual Array:</strong>
                    <div class="array-item">
                        <span class="array-index">[0]</span>
                        <span class="array-value"><?php echo $kota2[0]; ?></span>
                    </div>
                    <div class="array-item">
                        <span class="array-index">[1]</span>
                        <span class="array-value"><?php echo $kota2[1]; ?></span>
                    </div>
                    <div class="array-item">
                        <span class="array-index">[2]</span>
                        <span class="array-value"><?php echo $kota2[2]; ?></span>
                    </div>
                </div>
                
                <p style="font-size: 0.9rem; color: #666; margin-top: 15px;">
                    <i class="fas fa-info-circle"></i> Menggunakan fungsi array()
                </p>
            </div>
            
            <!-- METODE 3 -->
            <div class="method-box method-3">
                <div class="method-title">CARA KETIGA</div>
                <div class="code-display">
                    // Index berupa string (associative array)<br>
                    $inisialKota = array(<br>
                    &nbsp;&nbsp;"JOG" => "Yogyakarta",<br>
                    &nbsp;&nbsp;"SBY" => "Surabaya",<br>
                    &nbsp;&nbsp;"BDG" => "Bandung"<br>
                    );<br>
                    echo "Inisial JOG: ".$inisialKota["JOG"];
                </div>
                
                <div class="output-display">
                    <strong>Output:</strong><br>
                    <?php
                    // Cara 3
                    $inisialKota = array(
                        "JOG" => "Yogyakarta",
                        "SBY" => "Surabaya",
                        "BDG" => "Bandung"
                    );
                    echo "Inisial JOG: ".$inisialKota["JOG"];
                    ?>
                </div>
                
                <div class="array-visual">
                    <strong>Visual Array:</strong>
                    <div class="array-item">
                        <span class="array-index">["JOG"]</span>
                        <span class="array-value"><?php echo $inisialKota["JOG"]; ?></span>
                    </div>
                    <div class="array-item">
                        <span class="array-index">["SBY"]</span>
                        <span class="array-value"><?php echo $inisialKota["SBY"]; ?></span>
                    </div>
                    <div class="array-item">
                        <span class="array-index">["BDG"]</span>
                        <span class="array-value"><?php echo $inisialKota["BDG"]; ?></span>
                    </div>
                </div>
                
                <p style="font-size: 0.9rem; color: #666; margin-top: 15px;">
                    <i class="fas fa-info-circle"></i> Associative array (key-value)
                </p>
            </div>
        </div>
        
        <div style="margin-top: 40px; background: #f8f9fa; padding: 25px; border-radius: 10px;">
            <h3><i class="fas fa-list"></i> Menampilkan Semua Elemen Array</h3>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px;">
                <div>
                    <h4>Dengan print_r():</h4>
                    <div class="code-display" style="font-size: 0.8rem;">
                        echo "&lt;pre&gt;";<br>
                        print_r($kota);<br>
                        echo "&lt;/pre&gt;";
                    </div>
                    <div class="output-display">
                        <strong>Output $kota:</strong><br>
                        <?php
                        echo "<pre>";
                        print_r($kota);
                        echo "</pre>";
                        ?>
                    </div>
                </div>
                
                <div>
                    <h4>Dengan foreach loop:</h4>
                    <div class="code-display" style="font-size: 0.8rem;">
                        foreach($kota2 as $index => $value) {<br>
                        &nbsp;&nbsp;echo "[$index] = $value&lt;br&gt;";<br>
                        }
                    </div>
                    <div class="output-display">
                        <strong>Output $kota2:</strong><br>
                        <?php
                        foreach($kota2 as $index => $value) {
                            echo "[$index] = $value<br>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="index.html" class="btn-back">← Kembali ke Daftar Latihan</a>
        </div>
    </div>
</body>
</html>
