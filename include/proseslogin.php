<?php
// Database connection parameters
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
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    // menyeleksi data pada tabel notifikasi dengan username dan password yang sesuai
    $sql = "SELECT username FROM notifikasi WHERE username='$username' AND pass='$pass'";

    // menghitung jumlah data yang ditemukan
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        $berhasil = "Login Berhasil";
    } else {
        $message = "<p>Username atau Password Salah.</p><p>Silakan coba lagi !</p>";
    }
}

// Include SweetAlert2 library
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>';

// Check if there is a message to display
if (isset($berhasil)) {
    // Show SweetAlert2 success message
    echo '<script>
    Swal.fire({
        icon: "success",
        title: "'.$berhasil.'",
        text: "Selamat datang!",
        allowOutsideClick: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.open("https://www.plne.co.id", "_blank");
        }
    });
    </script>';
} elseif (isset($message)) {
    // Show SweetAlert2 error message
    echo '<script>
    Swal.fire({
        icon: "error",
        title: "Gagal Login",
        html: "'.$message.'",
    });
    </script>';
}
?>