<?php

// DISINI KITA AKAN MENANGANI DATA YANG DIKIRIM DARI HALAMAN TAMBAH.PHP

// memanggil file koneksi.php
include_once "lib/koneksi.php";

// menangkap data yang dikirim dari halaman tambah.php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
// variabel $_POST adalah variabel array yang digunakan untuk menangkap data yang dikirim dari form
// kita menggunakan variable $_POST karena kita menggunakan method POST untuk mengirimkan data dari form

// query untuk menambahkan data ke database
$query = "INSERT INTO students VALUES ('$nim', '$nama', '$alamat')";
// query ini akan menambahkan data ke database dengan nilai nim, nama, dan alamat sesuai dengan yang dikirim dari halaman tambah.php

// mengeksekusi query
mysqli_query($db, $query);

// mengalihkan halaman ke halaman index.php
header("location:index.php");

// kita tidak perlu menutup tag php karena file ini hanya berisi script php saja
