<?php

// Memuat handler login agar permintaan masuk diproses sebelum halaman ditampilkan.
require_once __DIR__ . '/includes/login-handler.php';
// Memuat template halaman login sebagai tampilan utama aplikasi.
require_once __DIR__ . '/views/login.php';
