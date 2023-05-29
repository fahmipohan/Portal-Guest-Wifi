<?php
$koneksi = mysqli_connect("localhost","root","","usernamepw_db");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?>