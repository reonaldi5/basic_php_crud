<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<h1>Selamat datang, <?php echo $_POST["nama"]?></h1>
<!-- data yg dikirim dari index4, karena menggunakan method post, maka akan ditangkap kembali di halaman ini dengan superglobals post -->
<!-- "nama" diambil dari name atribut tag input di index4, name digunakan sebagai key dalam array assoiative superglobals $_post -->
    
</body>
</html>