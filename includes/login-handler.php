<?php

session_start();
require_once __DIR__ . '/../conn/koneksi.php';

$pesan_eror = '';

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']);
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);

        $_SESSION['login'] = true;
        $_SESSION['user_id'] = $user_data['id_user'];
        $_SESSION['username'] = $user_data['username'];
        $_SESSION['email'] = $user_data['email'];

        header('Location: index.php');
        exit;
    }

    $pesan_eror = 'Username atau password salah. Silakan coba lagi.';
}
