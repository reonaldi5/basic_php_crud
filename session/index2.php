<?php
// jalankan juga session_start
session_start();

echo  $_SESSION["nama"];
// nama ini akan selalu ada sampai nilai itu akan hilang dalam 1 sesi, 1 sesi ketika jika browser nya di close ataupun komputer di restart
// biar nilai nama ada lagi di index2, kembali lagi ke index
?>