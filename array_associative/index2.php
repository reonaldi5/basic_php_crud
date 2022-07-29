<?php

// $mahasiswa = [["ujang", "1152500090"],["bagus", "1152700065"]];
// array diatas adalah array numerik, karena index menggunakan angka

// array assoicative
// array yg pasangan key dan value
// key nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
    "nama" => "ujang",
    "nrp" => "1152800090",
    "gambar" => "gambar1.jpg",
    ],
    [
    "nama" => "doni",
    "nrp" => "1152800065",
    "gambar" => "gambar1jpg"
    ],
];

// echo $mahasiwa[3]; kalau ini array numerik, jadi index nya udh kita buat sendiri
// echo $mahasiswa["nama"];

// echo $mahasiswa[0]["nama"];

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

    <?php foreach ($mahasiswa as $mhs) :?>
        <ul>
            <li>nama : <?php echo $mhs["nama"];?></li>
            <li>nrp : <?php echo $mhs["nrp"];?></li>
            <li>
                <img src="../img/<?php echo $mhs["gambar"];?>" alt="gambar">
            </li>
        </ul>
    <?php endforeach;?>

</body>
</html>