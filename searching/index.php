<?php
require "function.php";

$result = mysqli_query($db, "SELECT * FROM mahasiswa");
// $result = mysqli_query($db, "SELECT * FROM mahasiswa ORDER BY id ASC");
// $result = mysqli_query($db, "SELECT * FROM mahasiswa WHERE nrp = '1152000090'");
// <?php echo $row["gambar1"];

// jika user masuk ke halaman index ini, maka akan tampil dluan adalah variabel $result dluan


// tombol cari ditekan
if (isset($_POST["cari"])) {
    // $result akan berisi data pencarian, dari function cari,
    // lalu functionn cari ini akan mendapatkan data apapun dari user
    $result = cari($_POST["keyword"]);
}
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

<form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian" autocomplete="off">
    <!-- autofocus untuk otomatis aktif di aplikasi -->
    <!-- autocomplete agar history nya kehapus, atau dimatikan -->
    <button type="submit" name="cari">Cari</button>
</form>
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
    <?php foreach ( $result as $row ) : ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row["nrp"]; ?></td>
        <td><?php echo $row["nama_mhs"]; ?></td>
        <td><?php echo $row["prodi"]; ?></td>
        <td><img src="img/<?php echo $row["gambar"]; ?>" alt="gambar" width="50"></td>
        <td>
            <a href="update.php?id=<?php echo $row["id"]; ?>">Edit</a> |
            <!-- sama seperti hapus, kita ingin mengubah data mana -->
            <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?')">Delete</a>
            <!-- kita ingin hapus, data mana yang diahpus, gunakan field id sebagai primary key, menghapus data dengan id tertentu -->
            <!-- lalu liat hover delet di tabel, akan ada tampilan link dikiri bawah -->
            <!-- jika menghapus data lebih baik menggunakan konfimrasi kpd user agar tidak salah pencet -->
            <!-- pada saat di klik, kalau pencet ok akan menghasilkan true, jika cancel maka akan false, jika false maka tidak menjalankan hapus.php -->
        </td>
        
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
    
</body>
</html>


