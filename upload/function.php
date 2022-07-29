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


    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    // jika $gambar tidak menerima data dari upload, maka return false, dan kode query insert data tidak dijalankan
    // maka dari itu data gagal ditambahkan, karena tambah($_POST) < 0

    // query insert data
    $query = "INSERT INTO mahasiswa VALUES('','$nrp', '$nama_mhs', '$prodi', '$gambar')";
    mysqli_query($db, $query);

    // setelah dijalankan mysqli_query, si function tambah mengembalikkan angka, angka yang di dapat dr mysqli_affected_rows
    return mysqli_affected_rows($db);
}

function upload() {
    // ambil dlu isi $_FILES
    $namaFile = $_FILES['gambar']['name'];
    // karena array multidimensi, maka dari itu kita mengambil nama file dari array gambar

    $ukuranFile = $_FILES['gambar']['size'];

    // untuk mengetahui ada gambar yang di upload atau tidak
    $error = $_FILES['gambar']['error'];

    // tempat penyimpanan sementara
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar di upload
    // didalam array gambar lalu array error, jika int(4), maka gambar atau file belum di upload
    if ($error === 4) {

        echo "<script>
                alert('pilih gambar terlebih dahulu');
            </script>";
        
        return false;
    }

    // mengecek yang di upload itu gambar atau bukan
    // cek apakah yang diupload adalah gambar

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'svg'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    // exploade itu sebuah fungsi untuk memecah string menjadi array
    // akan dirubah menjadi array gambar, jpg
    // gambar.jpg = ['gambar', 'jpg'];
    // semua ekstensi harus kecil semua hurufnya,
    //kemudian ekstensi yang diambil ke dalam $ekstensiGambar adalah array yang terakhir maka dari itu menggunakan end()

    
    if ( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
        // in_array buat ngecek adakah sebuah string di dalam sebuah array
        // di dalam parameter in_array, ada needle dan haystack
        // ada jarum dan jerami

        echo "<script>
                alert('yang anda upload bukan gambar');
            </script>";

        return false;
    }

    // cek jika ukurannya yang diupload terlalu besar, dalam ukuran byte
    if ( $ukuranFile > 1000000 ) {
        echo "<script>
                alert('ukuran gambar terlalu besar');
            </script>";

        return false;
    }

    // lolos pengecekan, gambar siap diupload
  

    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    // uniqid() akan membangkitkan string random

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
    // mengapa di return, supaya  $gambar yang diatas di //upload gambar keisi
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
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    

    // query insert data
    $query = "UPDATE mahasiswa SET
                nrp = '$nrp',
                nama_mhs = '$nama_mhs',
                prodi = '$prodi'
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