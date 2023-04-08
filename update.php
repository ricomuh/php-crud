<?php

// DISINI KITA AKAN MENANGANI DATA YANG DIKIRIM DARI HALAMAN EDIT.PHP

// memanggil file koneksi.php
include_once "lib/koneksi.php";

// menangkap data yang dikirim dari halaman edit.php
$nim_lama = $_POST['nim_lama'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

// query untuk mengubah data ke database
$query = "UPDATE students SET nim='$nim', nama='$nama', alamat='$alamat' WHERE nim='$nim_lama'";

/**
 * q: kenapa kita menggunakan query UPDATE?
 * a: karena kita akan mengubah data yang sudah ada di database
 * 
 * Penjelasan query:
 * UPDATE students SET nim='$nim', nama='$nama', alamat='$alamat' WHERE nim='$nim_lama'
 * 
 * UPDATE adalah keyword untuk mengubah data
 * students adalah nama tabel yang akan kita ubah
 * SET adalah keyword untuk menentukan kolom mana yang akan kita ubah
 * nim='$nim', nama='$nama', alamat='$alamat' adalah kolom yang akan kita ubah
 * WHERE adalah keyword untuk menentukan kondisi
 * nim='$nim_lama' adalah kondisi dimana nim yang akan kita ubah adalah nim yang lama
 */

// mengeksekusi query
mysqli_query($db, $query);

// mengalihkan halaman ke halaman index.php
header("location:index.php");
