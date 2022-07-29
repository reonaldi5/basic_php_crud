<?php
include "function.php";

// akan membuat variabel nrp yang akan menangkap nrp dari url yg di file index, yg di tag anchor DELETE
$id = $_GET["id"];

// kita bkin function hapus yg berisi nrp, kita akan mengirimin nrp ke function hapus
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