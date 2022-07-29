<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<!-- <h1>Selamat datang, <?php echo $_POST["nama"]?></h1> -->
<?php if (isset($_POST["submiy"])) :?>
    <h1>Selamat datang, <?php echo $_POST["nama"]?></h1> 
<?php endif;?>

<form action="" method="post">
    <!-- jika action tidak diisi, maka defaultnya adalah mengirim data kehalaman ini sendiri, mengirim data ke dirinya sendiri -->
    <!-- kemudian kalau method tidak diisi, maka defaultnya adalah get -->
    <label for="nama">Nama : </label>
    <input type="text" name="nama" id="nama">
    <br>
    <button type="submit" name="submit">Kirim</button>
</form>


</body>
</html>