<?php
    // include file proses.php
    require 'prosesdaftar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar form</title>
    <link rel="stylesheet" href="./css/daftar.css" />
    <!-- tambahkan SweetAlert2 CSS dan JavaScript -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="login-card-daftar">
        <img src="foto/pln-e.png" class="img-fluid">
        <br>
        <br>
        <h3>Selamat Datang di WiFi Guest PLN Enjiniring</h3>
        <br>
        <p>Silahkan daftar untuk memulai sesi Anda</p>

        <form class="login-form-daftar" method="post" onsubmit="return validateForm()">
            <input type="text" placeholder="Nama Lengkap" name="nama" id="nama">
            <input type="email" placeholder="Email" name="email" id="email">
            <input type="text" placeholder="Perusahaan" name="perusahaan" id="perusahaan">
            <input type="text" placeholder="Agenda" name="agenda" id="agenda">
            <button type="submit" name="submit"><a>DAFTAR</a></button>
        </form>
        <br>
        <!-- <p>Sudah memiliki akun? Login <a href=" index.php?include=login">disini</a></p> -->
        <p>&copy; 2023 <a href="https://www.plne.co.id/">PLN-E</a>. All rights reserved.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
    <script src="./js/notifikasidaftar.js"></script>

</body>

</html>