<?php
require "function.php";

$result = mysqli_query($db, "SELECT * FROM mahasiswa");
// <?php echo $row["gambar1"];
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

<a href="tambah.php">Tambah Data</a>
<br><br>

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
    <?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row["nrp"]; ?></td>
        <td><?php echo $row["nama_mhs"]; ?></td>
        <td><?php echo $row["prodi"]; ?></td>
        <td><img src="img/<?php echo $row["gambar"]; ?>" alt="gambar1" width="50"></td>
        <td>
            <a href="">Edit</a> |
            <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?')">Delete</a>
            <!-- kita ingin hapus, data mana yang diahpus, gunakan field nrp sebagai primary key, menghapus data dengan nrp tertentu -->
            <!-- lalu liat hover delet di tabel, akan ada tampilan link dikiri bawah -->
            <!-- jika menghapus data lebih baik menggunakan konfimrasi kpd user agar tidak salah pencet -->
            <!-- pada saat di klik, kalau pencet ok akan menghasilkan true, jika cancel maka akan false, jika false maka tidak menjalankan hapus.php -->
        </td>
        
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

</table>
    
</body>
</html>


