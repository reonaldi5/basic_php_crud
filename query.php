<?php
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