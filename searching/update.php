<?php
include "function.php";
// ambil data dari url berdasarkan id, karena id yg primary key
$id = $_GET["id"];
// id ini akan digunakan untuk mengambil data mahasiswa

// query data mahasiswa berdasarkan id
$mhs  = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// karena $id integer, tidakperlu bungkus dia dengan kutip satu
// var_dump($mhs);
// var_dump($mhs["id"]);
// jika seperti ini tidak bisa tampil, karena ada array numerik, biasanya array assoc
// karena di function query $array merupakan array kosong
// var_dump($mhs[0]["id"]); // inilah yang akan kita masukin ke dalam value, array nol bisa dimasukkin ke akhir dari query yg diatas
// jadi tinggal seperti ini var_dump($mhs["id"]);


// Cek apakah tomobol submit sudah ditekan atau belum
// if (isset($_POST["submit"])) {
//     var_dump($_POST);
// }

if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
    // jadi data dari elemen form diambil, dimasukin ke tambah, nnti akan ditangkap oleh variabel $data
    if (update($_POST) > 0) {
        // menggunakan JS, karena bisa memindahkan langsung ke halaman index
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
            
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
    <title>Update Data Mahasiswa</title>
</head>
<body>

    <h1>Update Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <input type="hidden" name="id" value="<?php echo $mhs["id"]?>">
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required value="<?php echo $mhs["nrp"]?>">
                <!-- for kaitannya dengann id, jika label di klik maka akan ke klik juga yg input -->
            </li>

            <li>
                <label for="nama">Nama Mahasiswa : </label>
                <input type="text" name="nama_mhs" id="nama" required value="<?php echo $mhs["nama_mhs"]?>">
            </li>

            <li>
                <label for="prodi">Program Studi : </label>
                <input type="text" name="prodi" id="prodi" required value="<?php echo $mhs["prodi"]?>">
            </li>

            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required value="<?php echo $mhs["gambar"]?>">
            </li>

            <li>
                <button type="submit" name="submit">Update Data</button>
            </li>
        </ul>
    </form>

    <!-- <div style="position: absolute; top:0; bottom:0; left:0; right:0; background-color:black; font-size: 100px; color: red; text-align: center" >
        HAHAHAHA ANDA TELAH DI HACK!!!!!!!!
    </div> -->
    
</body>
</html>