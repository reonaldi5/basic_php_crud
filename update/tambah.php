<?php
include "function.php";
// Cek apakah tomobol submit sudah ditekan atau belum
// if (isset($_POST["submit"])) {
//     var_dump($_POST);
// }

if (isset($_POST["submit"])) {

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

    <form action="" method="post">
        <ul>
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
                <input type="text" name="gambar" id="gambar">
            </li>


            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>

    <!-- <div style="position: absolute; top:0; bottom:0; left:0; right:0; background-color:black; font-size: 100px; color: red; text-align: center" >
        HAHAHAHA ANDA TELAH DI HACK!!!!!!!!
    </div> -->
    
</body>
</html>