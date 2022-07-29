<?php
// cek apakah tidak ada data di $_GET, karena kalau tidak membawa data dari index2, maka akan error
if ( !isset($_GET["nama"]) || 
    !isset($_GET["nrp"])) {
    // tanda seru di depan isset adalah not, maka jika tidak superglobals $_get nama tidak dibuat, maka redirect
    // redirect
    header("Location: index2.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>

<ul>
    <li><?php echo $_GET["nama"]?></li>
    <!-- "nama" diambil dari key yg dikirimkan url di index2 -->
    <li><?php echo $_GET["nrp"]?></li>
</ul>

<a href="index2.php">kembali ke daftar mahasiswa</a>
</body>
</html>