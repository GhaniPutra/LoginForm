<?php

// Menentukan alamat server database.
$host = 'localhost';
// Menentukan nama pengguna database.
$user = 'root';
// Menentukan kata sandi database; nilainya kosong pada konfigurasi lokal ini.
$password = '';
// Menentukan nama database yang digunakan aplikasi.
$database = 'coffe_shop';

// Membuka koneksi MySQL menggunakan konfigurasi yang telah ditentukan.
$conn = mysqli_connect($host, $user, $password, $database);

// Menghentikan proses apabila koneksi database gagal dibuat.
if (!$conn) {
    // Menampilkan alasan kegagalan koneksi agar masalah mudah didiagnosis.
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

// Mengatur encoding koneksi agar data UTF-8 dapat diproses dengan benar.
mysqli_set_charset($conn, 'utf8mb4');
