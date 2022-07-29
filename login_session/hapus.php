<?php

session_start();

// jika tidak ada session login, kembalikan ke halaman login
if ( !isset($_SESSION["login"])) {
    header("Location: login.php");
}

include "function.php";

// akan membuat variabel id yang akan menangkap id dari url yg di file index, yg di tag anchor DELETE
$id = $_GET["id"];

// kita bkin function hapus yg berisi id, kita akan mengirimin id ke function hapus
if ( hapus($id) > 0) {
    echo "
            <script>
                alert('data berhasil dihapus');
                document.location.href = 'index.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('data gagal dihapus');
                document.location.href = 'index.php';
            </script>
        ";
}
?>