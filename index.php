<?php
session_start();
include("koneksi/koneksi.php");
?>

<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head.php") ?>
</head>

<body>
    <?php
    if(isset($_GET["include"])) {
        $include = $_GET["include"];

        if($include == "login"){
            // jika parameter include adalah "landing", tampilkan halaman landing
            include("include/login.php");
        }
    }
    else{
        // Jika tidak ada parameter include, maka tampilkan halaman daftar
        include("include/daftar.php");
    }
    ?>

    
</body>

</html>
