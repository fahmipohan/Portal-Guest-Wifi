<?php
    // include file proses.php
    require 'proseslogin.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login form</title>
    <link rel="stylesheet" href="./css/login.css" />
    <!-- Include SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="login-card">
        <img style="max-width: 100%;
    height: auto;" src="foto/pln-e.png" class="img-fluid">
        <br><br>
        <h3>Selamat Datang di WiFi Guest PLN Enjiniring</h3>
        <br>
        <p>Silahkan login untuk memulai sesi Anda</p>


        <form class="login-form" method="post" onsubmit="return validateForm()">
            <input type="text" placeholder="Username" name="username" id="username">
            <input type="password" placeholder="Password" name="pass" id="password">
            <button type="submit" name="submit">
                <span><a>MASUK</a></span>
            </button>
        </form>
        <br>
        <!-- <p>Belum memiliki akun? Daftar <a href="index.php?include=daftar">disini</a></p> -->
        <p>&copy; 2023 <a href="https://www.plne.co.id/">PLN-E</a>. All rights reserved.</p>
    </div>

    <!-- Include SweetAlert2 library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
    <script src="./js/notifikasilogin.js"></script>

</body>

</html>