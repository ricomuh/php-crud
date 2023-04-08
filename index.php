<?php

// DISINI KITA AKAN MENAMPILKAN SELURUH DATA MAHASISWA YANG ADA DI DATABASE

// panggil file koneksi.php
require_once "lib/koneksi.php";

// query untuk menampilkan semua data mahasiswa
// query adalah perintah untuk mengambil data dari database (dalam bentuk string)
$sql = "SELECT * FROM students";

/**
 * ~PERHATIAN!~
 * Penjelasan query di atas:
 * 
 * "SELECT * FROM students"
 * 
 * SELECT        = untuk memilih data
 * *             = untuk memilih semua kolom
 * FROM students = dari tabel students
 */

// lalu simpan hasil query ke variabel $result
$result = mysqli_query($db, $sql);

// cek apakah query berhasil
if (!$result)
    // jika query gagal, tampilkan pesan error
    die("Query Error: " . mysqli_errno($db) . " - " . mysqli_error($db));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ini adalah css dari bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- BOOTSTRAP sangat berguna untuk pengerjaan desain website dikarenakan kita tidak perlu/sedikit untuk mengkoding CSS nya -->
    <!-- pelajari selengkapnya di: https://www.w3schools.com/bootstrap5/ -->

    <title>Daftar Mahasiswa</title>
</head>

<body>
    <!-- kita akan memanggil file navbar.php -->
    <!-- menggunakan metode seperti ini bagus, karena kita tidak perlu untuk menulis navbarnya lagi -->
    <?php include_once "components/navbar.php"; ?>

    <?php
    /**
     *  penggunaan kode php di dalam html adalah sebagai berikut:
     * <?php kode php ?>
     * kita bisa menggunakan kode php di mana saja di dalam html asalkan file tersebut berformat .php
     */
    ?>

    <!-- ini adalah container -->
    <main class="container">
        <h1 class="mt-3">Daftar Mahasiswa</h1>

        <!-- tabel mahasiswa -->
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- looping untuk menampilkan semua data mahasiswa menggunakan while loop -->
                <!-- mysqli_fetch_assoc() untuk mengambil data dalam bentuk array asosiatif -->
                <!-- mysqli_fetch_assoc() akan mengembalikan nilai false jika tidak ada data -->
                <?php $i = 1; ?>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $row['nim']; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                        <td>
                            <a href="edit.php?nim=<?= $row['nim']; ?>" class="btn btn-warning">Edit</a>
                            <a href="hapus.php?nim=<?= $row['nim']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
    </main>

    <!-- javascript -->
    <!-- ini adalah javascript dari bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>