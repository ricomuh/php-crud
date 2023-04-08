<?php

// DISINI ADALAH HALAMAN UNTUK MENGEDIT DATA MAHASISWA

// kita ambil data yang ada di GET, yaitu nim
// variable GET adalah variable array yang digunakan untuk menangkap data yang dikirim dari URL
// kira-kira seperti ini: http://localhost/php-crud/edit.php?nim=1234567890
// nim ini akan kita gunakan untuk mengambil data mahasiswa dari database
$nim = $_GET['nim'];

// memanggil file koneksi.php
include_once "lib/koneksi.php";

// query untuk mengambil data mahasiswa berdasarkan nim
$query = "SELECT * FROM students WHERE nim = '$nim'";
// query ini akan mengambil data mahasiswa dari database dengan nilai nim sesuai dengan yang dikirim dari halaman index.php

// q: kenapa kita perlu mengambil data mahasiswa berdasarkan nim? padahal halaman edit.php hanya berisikan form untuk mengedit data mahasiswa
// a: karena kita hanya akan mengedit data mahasiswa yang sudah ada di database, bukan menambahkan data baru. kita juga perlu mengetahui data mahasiswa yang akan kita edit

// mengeksekusi query
$result = mysqli_query($db, $query);

// cek apakah query berhasil
if (!$result)
    // jika query gagal, tampilkan pesan error
    die("Query Error: " . mysqli_errno($db) . " - " . mysqli_error($db));

// mengambil data mahasiswa dari database
// karena kita hanya mengambil 1 data berdasarkan nim, maka kita hanya perlu menggunakan mysqli_fetch_assoc()
// mysqli_fetch_assoc() akan mengembalikan nilai array yang berisi data mahasiswa
$student = mysqli_fetch_assoc($result); // $student adalah variable array yang berisi 1 data mahasiswa
// pada halaman index.php, kita juga menggunakan mysqli_fetch_assoc() dalam looping berbentuk while, sehingga kita bisa menampilkan banyak data mahasiswa

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ini adalah css dari bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- title berdasarkan nama mahasiswa -->
    <title>Edit Mahasiswa - <?= $student['nama']; ?></title>

</head>

<body>
    <!-- kita akan memanggil file navbar.php -->
    <?php include_once "components/navbar.php"; ?>

    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1>Edit Mahasiswa</h1>
                <form action="update.php" method="POST">
                    <!-- ini adalah input hidden yang berisi nim mahasiswa -->
                    <input type="hidden" name="nim_lama" value="<?= $student['nim']; ?>">
                    <!-- kita perlu mengirimkan nim lama karena kita akan mengedit data berdasarkan nim lama -->
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" value="<?= $student['nim']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $student['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $student['alamat']; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </main>

    <!-- ini adalah javascript dari bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>