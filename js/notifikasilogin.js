function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Show SweetAlert2 error message if either username or password is empty
    if (username === "" || password === "") {
        Swal.fire({
            icon: 'error',
            title: 'Gagal Login',
            text: 'Username atau password tidak boleh kosong!',
        });
        return false;
    }
}