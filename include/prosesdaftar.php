<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usernamepw_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $perusahaan = $_POST['perusahaan'];
    $agenda = $_POST['agenda'];

    $sql = "INSERT INTO `user` (`nama`,`email`,`perusahaan`,`agenda`) 
            VALUES ('$nama','$email','$perusahaan','$agenda')";

    if ($conn->query($sql) === TRUE) {
        $cookie_name = "username_password";
        
        // ambil username dan password dari database secara acak
        $sql = "SELECT username, pass FROM notifikasi ORDER BY RAND() LIMIT 1";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $username = $row['username'];
        $password = $row['pass'];
        
        // pastikan nilai $username dan $password tidak kosong
        if (!empty($username) && !empty($password)) {
            $cookie_value = "$username,$password";
            $cookie_time = time() + 30; // set cookie untuk 30 detik
        
            // cek apakah cookie sudah ada dan belum melewati 30 detik
            if (isset($_COOKIE[$cookie_name]) && time() < $_COOKIE[$cookie_name]) {
                list($username, $password) = explode(",", $_COOKIE[$cookie_name]);
            } else {
                // set cookie baru dengan username dan password yang baru
                setcookie($cookie_name, $cookie_value, $cookie_time);
            }
        }
        

        $message = "Username : $username, Password : $password";

        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js'></script>
        <link href='https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css' rel='stylesheet'>

        <script>
        Swal.fire({
            title: 'Berhasil disimpan',
            html: '<h3><strong>Username :</strong> $username</h3><h4><strong>Password :</strong> $password</h4><h3>Disarankan Untuk Screenshoot Data ini !</h3>',
            icon: 'success',
            didOpen: function() {
              // membuat username dan password dapat dicopy
                const usernameElm = document.createElement('textarea');
                usernameElm.value = '$username';
                document.body.appendChild(usernameElm);
                usernameElm.select();
                document.execCommand('copy');
                document.body.removeChild(usernameElm);
        
                const passwordElm = document.createElement('textarea');
                passwordElm.value = '$password';
                document.body.appendChild(passwordElm);
                passwordElm.select();
                document.execCommand('copy');
                document.body.removeChild(passwordElm);
            }
            }).then(function() {
            window.location.href = 'index.php?include=login';
            });
        </script>
        ";
    }
}
?>