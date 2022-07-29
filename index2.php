<?php
// koneksi database
// mysqli_connect() wajib diisi parameter dengan tipe data string
// paramater pertama adalah host nya, yaitu localhost, kedua username nya yaitu root, ketiga adalah password kosongin aja
// keempat adalah nama database nya di mysql
$db = mysqli_connect("localhost", "root", "", "phpdasar");


// ambil data dari tabel mahasiswa di db phpdasar / query data mahasiswa

// mysqli_query() parameter pertama yaitu mysqli_connect, daripada kita copas mysqli connect, mending dibuatkan variabel
// parameter kedua diisi queri mysql
// mysqli_query($db, "SELECT * FROM mahasiswa");
// disarankan penulisan queri memakai upper case, agar bisa membedakan walaupun jika lower case bisa juga
// tidak terdapat pesan berhasil atau gagal pada mysqli query, caranya adalah membuatkan variabel lalu var dump

$result = mysqli_query($db, "SELECT * FROM mahasiswa");
// var_dump($result); -> untuk menampilkan data jika berhasil konek ke tabel db
// if ( !$result ){
//     echo mysqli_error($db);
// }
//if adalah cara untuk menampilkan jika koneksi db error

// ambil data(fetch) mahasiswa dari object variabel result
// mysqli_fetch_row()[1] -> mengembalikkan array numerik, jadi jika emg ingin menampilkan satu row menggunakan index array
// mysqli_fetch_assoc() -> mengembalikkan array associative, berupa string dari field tabel
// mysqli_fetch_array() -> mengembalikkan keduanya, double data jadinya

// $row = mysqli_fetch_assoc($result);
// var_dump($row);

// while( $row = mysqli_fetch_assoc($result)) {
//     var_dump($row);
// }

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
    <?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row["nrp"]; ?></td>
        <td><?php echo $row["nama_mhs"]; ?></td>
        <td><?php echo $row["prodi"]; ?></td>
        <td><img src="img/<?php echo $row["gambar1"]; ?>" alt="gambar1" width="50"></td>
        <td>
            <a href="">Edit</a> |
            <a href="">Delete</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

</table>
    
</body>
</html>


