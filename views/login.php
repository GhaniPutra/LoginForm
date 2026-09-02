<!DOCTYPE html>
<!-- Menetapkan bahasa halaman ke Indonesia dan tinggi elemen HTML penuh. -->
<html lang="id" class="h-full">
<head>
    <!-- Menentukan encoding karakter agar teks Indonesia tampil benar. -->
    <meta charset="UTF-8">
    <!-- Mengatur viewport agar layout responsif pada perangkat mobile. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Menetapkan judul halaman pada tab browser. -->
    <title>Masuk - CoffeeShop MIAOU</title>
    <!-- Memuat stylesheet hasil kompilasi Tailwind CSS. -->
    <link href="./src/output.css" rel="stylesheet">
</head>
<!-- Menetapkan warna dasar, warna teks, dan antialiasing halaman. -->
<body class="h-full bg-[#FAF6F0] text-[#2C1D12] antialiased">
    <!-- Membuat wadah utama yang berubah dari kolom ke baris pada layar besar. -->
    <div class="flex min-h-full flex-col lg:flex-row">
        <!-- Menampilkan panel identitas merek hanya pada layar besar. -->
        <aside class="relative hidden overflow-hidden bg-[#2C1D12] p-12 text-[#FAF6F0] lg:flex lg:w-5/12 lg:flex-col lg:justify-between lg:p-16">
            <!-- Menambahkan aksen visual buram pada panel merek. -->
            <div class="absolute -left-24 -top-24 h-96 w-96 rounded-full bg-[#C87D43]/20 blur-3xl"></div>
            <!-- Mengelompokkan identitas dan pesan utama panel. -->
            <div class="relative">
                <!-- Menampilkan label portal CoffeeShop MIAOU. -->
                <p class="text-xs font-bold uppercase tracking-[0.25em] text-[#D3BDA0]">MIAOU COFFEE &bull; PORTAL</p>
                <!-- Menampilkan pesan utama merek. -->
                <div class="my-32">
                    <!-- Menampilkan kategori pengalaman produk. -->
                    <p class="mb-4 text-xs font-semibold uppercase tracking-widest text-[#C87D43]">Artisan Blend Experience</p>
                    <!-- Menampilkan slogan utama halaman. -->
                    <h1 class="font-serif text-5xl font-bold leading-tight">Setiap cangkir,<br><span class="font-normal italic text-[#E6D7C3]">cerita penuh dedikasi.</span></h1>
                    <!-- Menjelaskan tujuan portal kepada pengguna internal. -->
                    <p class="mt-6 max-w-md text-sm leading-relaxed text-[#D3BDA0]">Sistem manajemen untuk menyajikan seduhan terbaik dan mengelola operasional CoffeeShop MIAOU.</p>
                </div>
            </div>
            <!-- Menampilkan tahun pendirian dan identitas roastery. -->
            <p class="relative border-t border-white/10 pt-6 text-xs text-[#D3BDA0]/70">Est. 2024 &mdash; Artisan Roastery</p>
        </aside>

        <!-- Menyediakan area utama untuk proses autentikasi pengguna. -->
        <main class="flex flex-1 items-center justify-center px-6 py-12 sm:px-12 lg:px-16">
            <!-- Membatasi lebar konten agar form tetap mudah dibaca. -->
            <div class="w-full max-w-md">
                <!-- Menampilkan identitas singkat pada layar kecil. -->
                <p class="mb-8 text-xs font-bold uppercase tracking-[0.25em] text-[#C87D43] lg:hidden">MIAOU COFFEE</p>
                <!-- Menampilkan judul dan petunjuk pengisian form. -->
                <div class="mb-8">
                    <!-- Menampilkan sapaan kepada pengguna. -->
                    <h2 class="font-serif text-4xl font-bold">Selamat Datang</h2>
                    <!-- Menjelaskan jenis akun yang dapat digunakan untuk masuk. -->
                    <p class="mt-3 text-sm leading-6 text-[#84613D]">Masukkan kredensial akun barista atau staf untuk melanjutkan.</p>
                </div>

                <!-- Menampilkan pesan kesalahan autentikasi bila tersedia. -->
                <?php if (!empty($pesan_eror)): ?>
                    <!-- Menandai pesan kesalahan agar dapat dibaca teknologi bantu. -->
                    <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-800" role="alert">
                        <!-- Menampilkan judul kesalahan. -->
                        <p class="font-semibold">Gagal Masuk</p>
                        <!-- Menampilkan detail kesalahan dengan aman dari HTML. -->
                        <p class="mt-1 text-xs"><?php echo htmlspecialchars($pesan_eror); ?></p>
                    </div>
                <?php endif; ?>

                <!-- Menampilkan pemberitahuan ketika pengguna belum login. -->
                <?php if (isset($_GET['msg']) && $_GET['msg'] === 'belum_login'): ?>
                    <!-- Menandai pemberitahuan pembatasan akses. -->
                    <div class="mb-6 rounded-xl border border-amber-200 bg-amber-50 p-4 text-sm text-amber-800" role="alert">
                        <!-- Menampilkan judul pemberitahuan. -->
                        <p class="font-semibold">Akses Terbatas</p>
                        <!-- Menjelaskan tindakan yang harus dilakukan pengguna. -->
                        <p class="mt-1 text-xs">Silakan masuk terlebih dahulu.</p>
                    </div>
                <?php endif; ?>

                <!-- Mengirim kredensial login ke index.php menggunakan metode POST. -->
                <form action="index.php" method="POST" class="space-y-5">
                    <!-- Mengelompokkan label dan input username. -->
                    <div>
                        <!-- Memberi nama yang jelas untuk kolom username. -->
                        <label for="username" class="mb-2 block text-xs font-bold uppercase tracking-wider text-[#4B331F]">Username</label>
                        <!-- Menerima username dan mengaktifkan validasi wajib browser. -->
                        <input type="text" name="username" id="username" autocomplete="username" required class="block w-full rounded-xl border border-[#D3BDA0]/60 bg-white px-4 py-3 text-sm outline-none transition focus:border-[#C87D43] focus:ring-2 focus:ring-[#C87D43]/20" placeholder="Masukkan username akun">
                    </div>
                    <!-- Mengelompokkan label, input password, dan tombol toggle. -->
                    <div>
                        <!-- Memberi nama yang jelas untuk kolom password. -->
                        <label for="password" class="mb-2 block text-xs font-bold uppercase tracking-wider text-[#4B331F]">Password</label>
                        <!-- Menjadikan area password sebagai referensi posisi tombol toggle. -->
                        <div class="relative">
                            <!-- Menyembunyikan password secara default dan mengaktifkan autocomplete aman. -->
                            <input type="password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-xl border border-[#D3BDA0]/60 bg-white px-4 py-3 pr-12 text-sm outline-none transition focus:border-[#C87D43] focus:ring-2 focus:ring-[#C87D43]/20" placeholder="Masukkan password">
                            <!-- Menyediakan tombol untuk mengubah visibilitas password. -->
                            <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 px-4 text-xs font-semibold text-[#84613D] hover:text-[#2C1D12]" aria-label="Tampilkan password">Lihat</button>
                        </div>
                    </div>
                    <!-- Mengirim form setelah pengguna memasukkan kredensial. -->
                    <button type="submit" name="login" class="w-full rounded-xl bg-[#C87D43] px-5 py-3.5 text-sm font-semibold text-white transition hover:bg-[#A9622D] focus:outline-none focus:ring-2 focus:ring-[#C87D43] focus:ring-offset-2">Masuk ke Dashboard</button>
                </form>
                <!-- Menampilkan identitas portal pada bagian bawah form. -->
                <p class="mt-10 border-t border-[#E6D7C3] pt-6 text-center text-xs leading-relaxed text-[#84613D]">CoffeeShop MIAOU Management Portal</p>
            </div>
        </main>
    </div>
    <!-- Memuat perilaku JavaScript untuk toggle password setelah HTML tersedia. -->
    <script src="./src/password-toggle.js"></script>
</body>
</html>
