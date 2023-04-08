# Example PHP CRUD Application by [ricomuh](https://github.com/ricomuh)

## Description

Ini adalah contoh aplikasi CRUD sederhana dengan PHP dan MySQL. Aplikasi ini dibuat untuk membantu teman-teman yang ingin belajar membuat aplikasi CRUD dengan PHP dan MySQL.

Perlu diketahui bahwa aplikasi ini dibuat dengan tujuan belajar, sehingga tidak sepenuhnya sesuai dengan standar yang baik dalam pembuatan aplikasi.

Penjelasan tiap kode sudah saya tulis di dalamnya menggunakan komentar. Jadi, teman-teman bisa membaca komentar tersebut untuk memahami bagaimana aplikasi ini bekerja.

## Installation

1. Clone repository ini ke dalam folder htdocs pada xampp

2. Buat database baru di phpmyadmin dengan nama bebas, misalnya `db_kampus`

3. Buat tabel baru dengan nama `students` dan struktur kolom seperti berikut:

| Field  | Type        | Null | Key | Default | Extra |
| ------ | ----------- | ---- | --- | ------- | ----- |
| nim    | varchar(12) | NO   | PRI | NULL    |       |
| nama   | varchar(50) | NO   |     | NULL    |       |
| alamat | varchar(50) | NO   |     | NULL    |       |

4. Atur konfigurasi database di file `lib/koneksi.php`

5. Jalankan aplikasi dengan mengakses `http://localhost/php-crud/`

## Penjelasan Tiap File

### index.php

Pada file ini, kita akan menampilkan data dari tabel `students` ke dalam tabel HTML.

### tambah.php

Pada file ini, kita akan membuat form untuk menambahkan data ke dalam tabel `students`.

### tambah_aksi.php

Pada file ini, kita akan membuat proses untuk menambahkan data yang dikirim dari form `tambah.php` ke dalam tabel `students`.

### edit.php

Pada file ini, kita akan membuat form untuk mengubah data yang ada di dalam tabel `students`.

### update.php

Pada file ini, kita akan membuat proses untuk mengubah data yang dikirim dari form `edit.php` ke dalam tabel `students`.

### hapus.php

Pada file ini, kita akan membuat proses untuk menghapus data dari tabel `students`.

### lib/koneksi.php

Pada file ini, kita akan membuat koneksi ke database MySQL.

## Fitur

- [x] Create
- [x] Read
- [x] Update
- [x] Delete

## Lainnya

Jika ada pertanyaan, silahkan kontak saya di [Email](mailto:rico@leolitgames.com) atau [Telegram](https://t.me/ricomuh)
