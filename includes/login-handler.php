<?php

// Memulai session untuk menyimpan status dan data pengguna yang berhasil masuk.
session_start();
// Memuat koneksi database dari direktori di atas folder handler ini.
require_once __DIR__ . '/../conn/koneksi.php';

// Menyiapkan pesan kesalahan dalam keadaan kosong sebelum validasi login.
$pesan_eror = '';

// Memastikan proses login hanya berjalan ketika tombol login dikirim.
if (isset($_POST['login'])) {
    // Membersihkan username dari karakter khusus sebelum digunakan dalam query.
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    // Mengubah password menjadi format hash MD5 yang sesuai dengan data lama di database.
    $password = md5($_POST['password']);
    // Mencari akun dengan username dan password yang diberikan.
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    // Menjalankan query autentikasi pada database.
    $result = mysqli_query($conn, $query);

    // Memastikan query berhasil dan menemukan setidaknya satu akun yang cocok.
    if ($result && mysqli_num_rows($result) > 0) {
        // Mengambil data akun yang ditemukan dalam bentuk array asosiatif.
        $user_data = mysqli_fetch_assoc($result);

        // Menandai session sebagai sudah terautentikasi.
        $_SESSION['login'] = true;
        // Menyimpan ID pengguna untuk kebutuhan halaman berikutnya.
        $_SESSION['user_id'] = $user_data['id_user'];
        // Menyimpan username pengguna ke dalam session.
        $_SESSION['username'] = $user_data['username'];
        // Menyimpan email pengguna ke dalam session.
        $_SESSION['email'] = $user_data['email'];

        // Mengarahkan pengguna yang berhasil login menuju dashboard.
        header('Location: index.php');
        // Menghentikan script agar template login tidak ikut diproses.
        exit;
    }

    // Mengisi pesan ketika kredensial tidak cocok dengan data database.
    $pesan_eror = 'Username atau password salah. Silakan coba lagi.';
}
