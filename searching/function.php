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

// bisa gunakan function tambah seperti dibawah tanpa htmlspecialchars

// function tambah($data) {
//     global $db;
//     $nrp = $data["nrp"];
//     $nama_mhs = $data["nama_mhs"];
//     $prodi = $data["prodi"];

//     // query insert data
//     $query = "INSERT INTO mahasiswa VALUES('$nrp', '$nama_mhs', '$prodi')";
//     mysqli_query($db, $query);
//     // setelah dijalankan mysqli_query, si function tambah mengembalikkan angka, angka yang di dapat dr mysqli_affected_rows
//     return mysqli_affected_rows($db);
// }

// gunakan htmlspecialchars agar user tidak bisa melakukan aneh aneh, seperti mengetikkan script html ke dalam web

function tambah($data) {
    global $db;
    $nrp = htmlspecialchars($data["nrp"]);
    $nama_mhs = htmlspecialchars($data["nama_mhs"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "INSERT INTO mahasiswa VALUES('','$nrp', '$nama_mhs', '$prodi','$gambar')";
    mysqli_query($db, $query);
    // setelah dijalankan mysqli_query, si function tambah mengembalikkan angka, angka yang di dapat dr mysqli_affected_rows
    return mysqli_affected_rows($db);
}

function hapus($id) {
    global $db;
    mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($db);
}

function update($data) {
    global $db;
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama_mhs = htmlspecialchars($data["nama_mhs"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "UPDATE mahasiswa SET
                nrp = '$nrp',
                nama_mhs = '$nama_mhs',
                prodi = '$prodi',
                gambar = '$gambar'
                WHERE id = $id";
    mysqli_query($db, $query);
    // setelah dijalankan mysqli_query, si function tambah mengembalikkan angka, angka yang di dapat dr mysqli_affected_rows
    return mysqli_affected_rows($db);
}

function cari($keyword) {
    // buat function cari, lalu data akan ditangkap variabel baru yaitu $keyword

    // $query =  "SELECT * FROM mahasiswa WHERE nama_mhs = '$keyword' ";
    // $query =  "SELECT * FROM mahasiswa WHERE nama_mhs LIKE '$keyword%' ";
    $query =  "SELECT * FROM mahasiswa WHERE nama_mhs LIKE '%$keyword%' OR nrp LIKE '%$keyword%' OR prodi LIKE '%$keyword%'";
    // LIKE ini bisa tambahkan wildcard, agar bisa dicari yg gk lengkap, caranya dengan tanda %, dengan fleksibel
    // jika ingin mencari semua field bisa tambahkan kata OR,

    // manggil function query yg sudah dibuat di dalam function cari ini
    return query($query);
}
?>