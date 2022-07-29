<?php
include "function.php";
// Cek apakah tomobol submit sudah ditekan atau belum
// if (isset($_POST["submit"])) {
//     var_dump($_POST);
// }

if (isset($_POST["submit"])) {

    $nrp = $_POST["nrp"];
    $nama_mhs = $_POST["nama_mhs"];
    $prodi = $_POST["prodi"];

    // query insert data
    $query = "INSERT INTO mahasiswa VALUES('$nrp', '$nama_mhs', '$prodi')";
    mysqli_query($db, $query);

    // cek apakah data berhasil ditambahkan atau tidak
    // var_dump((mysqli_affected_rows($db)));

    if (mysqli_affected_rows($db) > 0) {
        echo "berhasil";
    } else {
        echo "gagal";
        echo "<br>";
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
                <input type="text" name="nrp" id="nrp">
                <!-- for kaitannya dengann id, jika label di klik maka akan ke klik juga yg input -->
            </li>

            <li>
                <label for="nama">Nama Mahasiswa : </label>
                <input type="text" name="nama_mhs" id="nama">
            </li>

            <li>
                <label for="prodi">Program Studi : </label>
                <input type="text" name="prodi" id="prodi">
            </li>

            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
    
</body>
</html>