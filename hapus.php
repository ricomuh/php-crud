<?php

// DISINI KITA AKAN MENGHAPUS DATA YANG DIKIRIM DARI HALAMAN INDEX.PHP

$nim = $_GET['nim']; // menangkap data nim yang dikirim dari halaman index.php, penjelasan ada di file edit.php

// memanggil file koneksi.php
include_once "lib/koneksi.php";

// query untuk menghapus data
$query = "DELETE FROM students WHERE nim='$nim'";
// query ini akan menghapus data dari database dengan nilai nim sesuai dengan yang dikirim dari halaman index.php

// mengeksekusi query
mysqli_query($db, $query);

// mengalihkan halaman ke halaman index.php
header("location:index.php");
