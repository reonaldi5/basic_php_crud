<?php
require "function.php";

$mahasiswa = query("SELECT * FROM mahasiswa");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0" >

    <tr>
        <th>No.</th>
        <th>NRP</th>
        <th>Nama Mahasiswa</th>
        <th>Program Studi</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ( $mahasiswa as $row ) : ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row["nrp"]; ?></td>
        <td><?php echo $row["nama_mhs"]; ?></td>
        <td><?php echo $row["prodi"]; ?></td>
        <td><img src="img/<?php echo $row["gambar"]; ?>" alt="gambar" width="50"></td>
        <td>
            <a href="">Edit</a> |
            <a href="">Delete</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
    
</body>
</html>


