<?php

// DISINI KITA AKAN MENAMPILKAN FORM UNTUK MENAMBAHKAN DATA MAHASISWA

// disini kita tidak perlu untuk memanggil file koneksi.php karena di halaman ini hanya berisi form untuk menambah data yang nantinya akan dikirim ke halaman tambah_aksi.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ini adalah css dari bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <!-- kita akan memanggil file navbar.php -->
    <?php include_once "components/navbar.php"; ?>

    <!-- ini adalah container -->
    <main class="container">
        <h1>Tambah Data Mahasiswa</h1>

        <!-- form untuk menambah data -->
        <form action="tambah_aksi.php" method="post">
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" class="form-control" id="nim" name="nim" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </main>

    <!-- javascript -->
    <!-- ini adalah javascript dari bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>