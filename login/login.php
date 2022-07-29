<?php

require "function.php";

if (isset($_POST["login"])) {

    $username =  $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    // mysqli_num_rows() untuk ngitung berapa baris yg dikembalikkan dari fungsi select * from, lalu masukkan parameter $result karena dari username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"]) ) {
            // password verify kebalikan dari password hash, dia ngecek sebuah string, sama ama hash nya
            // parameter 1 ada string yg blm diacak, dan sudah diacak

            header("Location: index.php");
            exit; // supaya berhenti pada saat header
        }
    }

    $error = true;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>

<h1>Halaman Login</h1>

<!-- error akan dibikin karena ada error aja -->
<?php if (isset($error)) :?>
    <p style="color: red; font-style:italic;">username atau password salah</p>
<?php endif;?>


<form action="" method="post">

    <ul>
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>

        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>

        <li>
            <button type="submit" name="login">Login</button>
        </li>
    </ul>
</form>
    
</body>
</html>