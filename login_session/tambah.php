<?php
session_start();

// jika tidak ada session login, kembalikan ke halaman login
if ( !isset($_SESSION["login"])) {
    header("Location: login.php");
}

include "function.php";
// Cek apakah tomobol submit sudah ditekan atau belum
// if (isset($_POST["submit"])) {
//     var_dump($_POST);
// }

if (isset($_POST["submit"])) {
    // var_dump($_POST); 
    // var_dump($_FILES);
    // die;

    // cek apakah data berhasil ditambahkan atau tidak
    // jadi data dari elemen form diambil, dimasukin ke tambah, nnti akan ditangkap oleh variabel $data
    if (tambah($_POST) > 0) {
        // menggunakan JS, karena bisa memindahkan langsung ke halaman index
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>
        ". PHP_EOL;
        echo mysqli_error($db);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>

    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <!-- enctype berfungsi untuk mengelola file, solah olah memiliki 2 jalur, untuk string dikelola post, untuk file dikelola oleh enctype -->
        <!--  -->
        <ul>
            <input type="hidden" name="id">
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required>
                <!-- for kaitannya dengann id, jika label di klik maka akan ke klik juga yg input -->
            </li>

            <li>
                <label for="nama">Nama Mahasiswa : </label>
                <input type="text" name="nama_mhs" id="nama" required>
            </li>

            <li>
                <label for="prodi">Program Studi : </label>
                <input type="text" name="prodi" id="prodi" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar">
            </li>

            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>

   
</body>
</html>