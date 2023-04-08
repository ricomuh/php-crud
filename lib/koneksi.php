<?php
// atur koneksi ke database
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "db_kampus";

$db = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// cek koneksi ke database
if (mysqli_connect_errno())
    // jika koneksi gagal, tampilkan pesan error
    die("Koneksi ke database gagal: " . mysqli_connect_error());
