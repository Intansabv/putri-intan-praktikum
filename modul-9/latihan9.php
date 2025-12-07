<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 9 - Array Multidimensi</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f6d365, #fda085);
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
            border-bottom: 3px solid #d35400;
            padding-bottom: 15px;
        }
        .method-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin: 30px 0;
        }
        .method-box {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            border: 2px solid #e9ecef;
        }
        .method-title {
            font-size: 1.4rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #d35400;
            text-align: center;
        }
        .code-display {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 20px;
            border-radius: 8px;
            font-family: "Courier New", monospace;
            font-size: 0.9rem;
            margin: 20px 0;
            overflow-x: auto;
        }
        .output-display {
            background: #fff8e1;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #ffa000;
            margin: 20px 0;
            font-family: "Courier New", monospace;
        }
        .array-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        .array-table th {
            background: #d35400;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .array-table td {
            padding: 12px;
            border: 1px solid #eee;
            text-align: center;
        }
        .array-table tr:nth-child(even) {
            background: #f9f9f9;
        }
        .array-visual {
            background: #f0f0f0;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .array-cell {
            display: inline-block;
            padding: 10px;
            margin: 5px;
            background: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            min-width: 80px;
            text-align: center;
        }
        .array-index {
            font-size: 0.8rem;
            color: #7f8c8d;
        }
        .btn-back {
            display: inline-block;
            background: #d35400;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            font-weight: bold;
        }
        .note {
            background: #ffebcc;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #e67e22;
            margin: 20px 0;
        }
        .theory-box {
            background: #f0f7ff;
            padding: 20px;
            border-radius: 10px;
            margin: 30px 0;
            border: 2px dashed #3498db;
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
        <h1>Latihan 9: Array Multidimensi</h1>
        
        <div class="note">
            <strong>Keterangan:</strong> Array multidimensi adalah array yang berisi array lainnya. 
            Berguna untuk menyimpan data yang terstruktur seperti tabel (baris dan kolom).
        </div>
        
        <div class="theory-box">
            <h3><i class="fas fa-cubes"></i> Konsep Array Multidimensi</h3>
            <p><strong>Array 2D</strong> = Array di dalam array (seperti tabel/matriks).</p>
            <p><strong>Contoh:</strong> Data buah dengan nama dan warna</p>
            <p>• $buah[0][0] = "Apel" (baris 0, kolom 0 = nama)</p>
            <p>• $buah[0][1] = "Merah" (baris 0, kolom 1 = warna)</p>
            <p>• $buah[1][0] = "Pisang" (baris 1, kolom 0 = nama)</p>
            <p>• $buah[1][1] = "Kuning" (baris 1, kolom 1 = warna)</p>
        </div>
        
        <h2 style="text-align: center; color: #2c3e50; margin: 40px 0 20px;">
            <i class="fas fa-layer-group"></i> 2 Cara Mendeklarasikan Array Multidimensi
        </h2>
        
        <div class="method-container">
            <!-- METODE 1: Associative -->
            <div class="method-box">
                <div class="method-title">CARA PERTAMA (Associative)</div>
                <div class="code-display">
                    // Array multidimensi associative<br>
                    $buah = array(<br>
                    &nbsp;&nbsp;"Apel" => array(<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"Warna" => "Merah",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"Rasa" => "Manis"<br>
                    &nbsp;&nbsp;),<br>
                    &nbsp;&nbsp;"Pisang" => array(<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"Warna" => "Kuning",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"Rasa" => "Manis"<br>
                    &nbsp;&nbsp;)<br>
                    );<br><br>
                    echo "Warna buah Apel: ".$buah["Apel"]["Warna"];
                </div>
                
                <div class="output-display">
                    <strong>Output:</strong><br>
                    <?php
                    // Cara 1: Associative array
                    $buah = array(
                        "Apel" => array(
                            "Warna" => "Merah",
                            "Rasa" => "Manis"
                        ),
                        "Pisang" => array(
                            "Warna" => "Kuning", 
                            "Rasa" => "Manis"
                        )
                    );
                    
                    echo "Warna buah Apel: ".$buah["Apel"]["Warna"]."<br>";
                    echo "Warna buah Pisang: ".$buah["Pisang"]["Warna"];
                    ?>
                </div>
                
                <div class="array-visual">
                    <strong>Visualisasi Array:</strong><br><br>
                    <div style="display: flex; gap: 20px;">
                        <div>
                            <div class="array-cell" style="background: #ffcccc;">
                                <div class="array-index">["Apel"]</div>
                                <div style="font-weight: bold;">Array</div>
                                <div style="font-size: 0.8rem;">(
                                    <div style="text-align: left; margin-left: 10px;">
                                        ["Warna"] => "Merah"<br>
                                        ["Rasa"] => "Manis"
                                    </div>
                                )</div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="array-cell" style="background: #fffacd;">
                                <div class="array-index">["Pisang"]</div>
                                <div style="font-weight: bold;">Array</div>
                                <div style="font-size: 0.8rem;">(
                                    <div style="text-align: left; margin-left: 10px;">
                                        ["Warna"] => "Kuning"<br>
                                        ["Rasa"] => "Manis"
                                    </div>
                                )</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <table class="array-table">
                    <thead>
                        <tr>
                            <th>Buah</th>
                            <th>Warna</th>
                            <th>Rasa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Apel</td>
                            <td><?php echo $buah["Apel"]["Warna"]; ?></td>
                            <td><?php echo $buah["Apel"]["Rasa"]; ?></td>
                        </tr>
                        <tr>
                            <td>Pisang</td>
                            <td><?php echo $buah["Pisang"]["Warna"]; ?></td>
                            <td><?php echo $buah["Pisang"]["Rasa"]; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- METODE 2: Numeric -->
            <div class="method-box">
                <div class="method-title">CARA KEDUA (Numeric)</div>
                <div class="code-display">
                    // Array multidimensi numeric<br>
                    $buah2 = array(<br>
                    &nbsp;&nbsp;array("Apel", "Merah", "Manis"),<br>
                    &nbsp;&nbsp;array("Pisang", "Kuning", "Manis")<br>
                    );<br><br>
                    echo $buah2[0][0]." Warna: ".$buah2[0][1];<br>
                    echo " Rasa: ".$buah2[0][2];
                </div>
                
                <div class="output-display">
                    <strong>Output:</strong><br>
                    <?php
                    // Cara 2: Numeric array
                    $buah2 = array(
                        array("Apel", "Merah", "Manis"),
                        array("Pisang", "Kuning", "Manis")
                    );
                    
                    echo $buah2[0][0]." Warna: ".$buah2[0][1]." Rasa: ".$buah2[0][2]."<br>";
                    echo $buah2[1][0]." Warna: ".$buah2[1][1]." Rasa: ".$buah2[1][2];
                    ?>
                </div>
                
                <div class="array-visual">
                    <strong>Visualisasi sebagai Tabel 2D:</strong><br><br>
                    <div style="display: inline-block; padding: 10px; background: #f0f0f0; border-radius: 8px;">
                        <table style="border-collapse: collapse; background: white;">
                            <tr style="background: #d35400; color: white;">
                                <th style="padding: 10px; border: 1px solid #ccc;">[0][0]</th>
                                <th style="padding: 10px; border: 1px solid #ccc;">[0][1]</th>
                                <th style="padding: 10px; border: 1px solid #ccc;">[0][2]</th>
                            </tr>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #ccc; background: #ffcccc;">
                                    <?php echo $buah2[0][0]; ?>
                                </td>
                                <td style="padding: 10px; border: 1px solid #ccc; background: #ffcccc;">
                                    <?php echo $buah2[0][1]; ?>
                                </td>
                                <td style="padding: 10px; border: 1px solid #ccc; background: #ffcccc;">
                                    <?php echo $buah2[0][2]; ?>
                                </td>
                            </tr>
                            <tr style="background: #d35400; color: white;">
                                <th style="padding: 10px; border: 1px solid #ccc;">[1][0]</th>
                                <th style="padding: 10px; border: 1px solid #ccc;">[1][1]</th>
                                <th style="padding: 10px; border: 1px solid #ccc;">[1][2]</th>
                            </tr>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #ccc; background: #fffacd;">
                                    <?php echo $buah2[1][0]; ?>
                                </td>
                                <td style="padding: 10px; border: 1px solid #ccc; background: #fffacd;">
                                    <?php echo $buah2[1][1]; ?>
                                </td>
                                <td style="padding: 10px; border: 1px solid #ccc; background: #fffacd;">
                                    <?php echo $buah2[1][2]; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <table class="array-table">
                    <thead>
                        <tr>
                            <th>Index</th>
                            <th>Buah</th>
                            <th>Warna</th>
                            <th>Rasa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>[0]</td>
                            <td><?php echo $buah2[0][0]; ?></td>
                            <td><?php echo $buah2[0][1]; ?></td>
                            <td><?php echo $buah2[0][2]; ?></td>
                        </tr>
                        <tr>
                            <td>[1]</td>
                            <td><?php echo $buah2[1][0]; ?></td>
                            <td><?php echo $buah2[1][1]; ?></td>
                            <td><?php echo $buah2[1][2]; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div style="margin-top: 40px; background: #f8f9fa; padding: 25px; border-radius: 10px;">
            <h3><i class="fas fa-table"></i> Contoh Array Multidimensi: Data Siswa</h3>
            
            <?php
            // Contoh array multidimensi: data siswa
            $siswa = array(
                array(
                    "NIM" => "2021001",
                    "Nama" => "Ahmad Santoso",
                    "Kelas" => "TI-A"
                ),
                array(
                    "NIM" => "2021002", 
                    "Nama" => "Budi Pratama",
                    "Kelas" => "TI-B"
                ),
                array(
                    "NIM" => "2021003",
                    "Nama" => "Citra Dewi",
                    "Kelas" => "TI-C"
                )
            );
            ?>
            
            <div class="code-display" style="font-size: 0.85rem;">
                $siswa = array(<br>
                &nbsp;&nbsp;array("NIM" => "2021001", "Nama" => "Ahmad Santoso", "Kelas" => "TI-A"),<br>
                &nbsp;&nbsp;array("NIM" => "2021002", "Nama" => "Budi Pratama", "Kelas" => "TI-B"),<br>
                &nbsp;&nbsp;array("NIM" => "2021003", "Nama" => "Citra Dewi", "Kelas" => "TI-C")<br>
                );
            </div>
            
            <table class="array-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach($siswa as $data) {
                        echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>{$data['NIM']}</td>";
                        echo "<td>{$data['Nama']}</td>";
                        echo "<td>{$data['Kelas']}</td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
            
            <div style="margin-top: 20px; padding: 15px; background: #e8f5e9; border-radius: 8px;">
                <strong>Mengakses data spesifik:</strong><br>
                <?php
                echo "Nama siswa pertama: ".$siswa[0]["Nama"]."<br>";
                echo "Kelas siswa kedua: ".$siswa[1]["Kelas"];
                ?>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="index.html" class="btn-back">← Kembali ke Daftar Latihan</a>
        </div>
    </div>
</body>
</html>
