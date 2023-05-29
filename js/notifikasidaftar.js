function validateForm() {
    var nama = document.getElementById("nama").value;
    var email = document.getElementById("email").value;
    var perusahaan = document.getElementById("perusahaan").value;
    var agenda = document.getElementById("agenda").value;

    // Show SweetAlert2 error message if either field is empty
    if (nama === "" || email === "" || perusahaan === "" || agenda === "") {
        Swal.fire({
            icon: 'error',
            title: 'Gagal Daftar',
            text: 'Mohon Lengkapi Data Diri',
        });
        return false;
    }
}
