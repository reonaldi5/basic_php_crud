<?php

// $_GET
// superglobals bersifat array associative
// $_GET["nama"] = "ujang";
// $_GET["nrp"] = "1152900059";

// khusus untuk $_get bisa mnegisi array menggunakan url webnya
// http://localhost/php_wpu/request_methods/index.php?nama=ujang
// saya akan memasukkan data dengan key nya nama, value nya ujang dengan data mengirim metode $_get
// http://localhost/php_wpu/request_methods/index.php?nama=ujang&nrp=1152800090 
var_dump($_GET);


?>