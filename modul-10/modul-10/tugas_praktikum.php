<html>
<head><title>Tugas String dan Tanggal</title></head>
<body>
<form method="post" action="tugas_praktikum.php">
    Masukkan Nama, Email dan Password<br>
    Default Nama = belajar, Email = test@gmail.com dan Password = madfun<br><br>
    
    Isian data :<br>
    Nama : <INPUT TYPE="TEXT" NAME="nama"><br>
    Email : <INPUT TYPE="TEXT" NAME="email"><br>
    Password : <INPUT TYPE="PASSWORD" NAME="password"><br>
    <INPUT TYPE="SUBMIT" VALUE="Cek"><br>
</form>

<?php
if (isset($_POST['email'])) {
    if (empty($_POST['email'])) {
        print("Harap mengisi email <br>\n");
    } else {
        $email = $_POST['email'];
        if (strpos($email, 'test@gmail.com') !== false) {
            print("Alamat email $email valid<br>\n");
        } else {
            print("Alamat email $email tidak valid<br>\n");
        }
    }
}

if (isset($_POST['password'])) {
    $nama = "belajar";
    $pass_valid = crypt("madfun", $nama);
    $enkripsi = crypt($_POST['password'], $nama);
    
    if ($pass_valid == $enkripsi) {
        print("Password valid");
    } else {
        print("Password salah");
    }
}
?>
</body></html>
