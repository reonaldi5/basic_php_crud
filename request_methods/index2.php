<?php

$mahasiswa = [
    [
    "nama" => "ujang",
    "nrp" => "1152800090",
    "gambar" => "gambar1.jpg",
    ],
    [
    "nama" => "doni",
    "nrp" => "1152800065",
    "gambar" => "gambar1.jpg"
    ],
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach ($mahasiswa as $mhs) :?>
        
    <li>
       <a href="index3.php?nama=<?php echo $mhs["nama"];?>&nrp=<?php echo $mhs["nrp"];?>"><?php echo $mhs["nama"];?></a>
    </li>

<?php endforeach;?>
</ul>

</body>
</html>