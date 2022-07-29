<?php

// koneksi database
// mysqli_connect() wajib diisi parameter dengan tipe data string
// paramater pertama adalah host nya, yaitu localhost, kedua username nya yaitu root, ketiga adalah password kosongin aja
// keempat adalah nama database nya di mysql
$db = mysqli_connect("localhost", "root", "", "phpdasar");

// membuat function agar function query dapat digunakan di setiap file php yangb ingin query mysql

function query($query)
{   
    global $db;
    $result = mysqli_query($db, $query);
    $array = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $array[] = $row;
        // jadi menambahkan data kedalam array, data selanjutnya akan ditumpuk setelah data pertama,
        // jadi data pertama ditaro ke dalam array, data kedua akan di masukkan ke dalam array setelah data pertama, jadi data akan rapih
    }

    return $array;
}
?>