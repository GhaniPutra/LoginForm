<!DOCTYPE html>
<!-- Menetapkan bahasa halaman ke Indonesia dan tinggi elemen HTML penuh. -->
<html lang="id" class="h-full">
<head>
    <!-- Menentukan encoding karakter agar teks Indonesia tampil benar. -->
    <meta charset="UTF-8">
    <!-- Mengatur viewport agar layout responsif pada perangkat mobile & desktop. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Menetapkan judul halaman pada tab browser. -->
    <title>Masuk &bull; CoffeeShop MIAOU Management Portal</title>
    <!-- Memuat stylesheet hasil kompilasi Tailwind CSS. -->
    <link href="./src/output.css" rel="stylesheet">
</head>
<!-- Menetapkan warna dasar hangat, teks kontras tinggi, dan penghalusan font. -->
<body class="min-h-full bg-coffee-50 font-sans text-coffee-900 antialiased selection:bg-amber-brand/20 selection:text-coffee-950">
    <!-- Layout container split screen 2 kolom responsif. -->
    <div class="flex min-h-screen flex-col lg:flex-row">
        
        <!-- ========================================================================= -->
        <!-- PANEL KIRI: Brand Showcase & Hero Section (40% Lebar Desktop) -->
        <!-- ========================================================================= -->
        <aside class="relative hidden overflow-hidden bg-coffee-900 text-coffee-50 lg:flex lg:w-[40%] lg:flex-col lg:justify-between lg:p-12 xl:p-16">
            <!-- Elemen dekoratif background dengan efek blur & gradien hangat. -->
            <div class="pointer-events-none absolute -left-28 -top-28 h-96 w-96 rounded-full bg-amber-brand/25 blur-3xl" aria-hidden="true"></div>
            <div class="pointer-events-none absolute -bottom-32 -right-24 h-96 w-96 rounded-full bg-amber-dark/30 blur-3xl" aria-hidden="true"></div>
            <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-coffee-800/40 via-transparent to-transparent" aria-hidden="true"></div>
            
            <!-- Header Brand Kiri (Top) -->
            <div class="relative z-10">
                <!-- Badge Merek dengan Icon Cangkir Kopi -->
                <div class="inline-flex items-center gap-2.5 rounded-full border border-coffee-700/60 bg-coffee-800/60 px-4 py-1.5 backdrop-blur-md">
                    <svg class="h-4 w-4 text-amber-brand" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h14.25c.621 0 1.125.504 1.125 1.125v2.25c0 2.485-2.015 4.5-4.5 4.5H3.75a.75.75 0 0 1-.75-.75V7.5c0-.414.336-.75.75-.75Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 8.25h1.875a2.625 2.625 0 0 1 0 5.25H18" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 18.75h15a.75.75 0 0 0 0-1.5H3a.75.75 0 0 0 0 1.5Z" />
                    </svg>
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-coffee-200">MIAOU COFFEE &bull; PORTAL</span>
                </div>
            </div>
            
            <!-- Konten Hero / Slogan Artisan (Center Vertically) -->
            <div class="relative z-10 flex flex-1 flex-col justify-center py-10 xl:py-14">
                <div class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-widest text-amber-brand">
                    <span class="h-px w-6 bg-amber-brand/60" aria-hidden="true"></span>
                    <span>Artisan Roastery & Brew</span>
                </div>
                
                <h1 class="mt-4 font-serif text-3xl font-bold leading-[1.15] text-coffee-50 sm:text-4xl xl:text-5xl">
                    Setiap cangkir,<br>
                    <span class="font-normal italic text-coffee-200">cerita penuh dedikasi.</span>
                </h1>
                
                <p class="mt-6 max-w-md text-sm leading-relaxed text-coffee-300">
                    Sistem manajemen terintegrasi untuk menyajikan seduhan terbaik, mengontrol inventaris biji kopi, dan memantau operasional CoffeeShop MIAOU setiap hari.
                </p>

                <!-- Feature Pills / Highlights -->
                <div class="mt-8 flex flex-wrap gap-2.5">
                    <span class="inline-flex items-center gap-1.5 rounded-lg border border-white/10 bg-white/5 px-3 py-1.5 text-xs text-coffee-200 backdrop-blur-sm">
                        <svg class="h-3.5 w-3.5 text-amber-brand" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        Point of Sale
                    </span>
                    <span class="inline-flex items-center gap-1.5 rounded-lg border border-white/10 bg-white/5 px-3 py-1.5 text-xs text-coffee-200 backdrop-blur-sm">
                        <svg class="h-3.5 w-3.5 text-amber-brand" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        Bean Stock Tracking
                    </span>
                    <span class="inline-flex items-center gap-1.5 rounded-lg border border-white/10 bg-white/5 px-3 py-1.5 text-xs text-coffee-200 backdrop-blur-sm">
                        <svg class="h-3.5 w-3.5 text-amber-brand" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        Barista Shift
                    </span>
                </div>
            </div>
            
            <!-- Footer Panel Kiri (Bottom) -->
            <div class="relative z-10 flex items-center justify-between border-t border-coffee-800 pt-6 text-xs text-coffee-400">
                <p>Est. 2024 &mdash; Artisan Roastery</p>
                <p class="text-coffee-500">&copy; <?php echo date('Y'); ?> CoffeeShop MIAOU</p>
            </div>
        </aside>

        <!-- ========================================================================= -->
        <!-- PANEL KANAN: Login Form Area (60% Lebar Desktop) -->
        <!-- ========================================================================= -->
        <main class="flex flex-1 items-center justify-center p-6 sm:p-12 lg:w-[60%] lg:flex-none lg:p-16 xl:p-20">
            <div class="w-full max-w-md">
                
                <!-- Identitas Brand Mobile (Hanya tampil di smartphone / tablet) -->
                <div class="mb-8 flex items-center gap-3 lg:hidden">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-coffee-900 text-amber-brand shadow-sm">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h14.25c.621 0 1.125.504 1.125 1.125v2.25c0 2.485-2.015 4.5-4.5 4.5H3.75a.75.75 0 0 1-.75-.75V7.5c0-.414.336-.75.75-.75Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 8.25h1.875a2.625 2.625 0 0 1 0 5.25H18" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 18.75h15a.75.75 0 0 0 0-1.5H3a.75.75 0 0 0 0 1.5Z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-amber-brand">MIAOU COFFEE</p>
                        <p class="text-xs text-coffee-600">Management Portal</p>
                    </div>
                </div>

                <!-- Judul dan Subjudul Halaman Form -->
                <div class="mb-8">
                    <h2 class="font-serif text-3xl font-bold tracking-tight text-coffee-900 sm:text-4xl">Selamat Datang</h2>
                    <p class="mt-2 text-sm leading-relaxed text-coffee-600">
                        Masukkan kredensial akun barista atau staf untuk mengakses sistem operasional.
                    </p>
                </div>

                <!-- Alert Pesan Kesalahan Autentikasi -->
                <?php if (!empty($pesan_eror)): ?>
                    <div class="mb-6 flex items-start gap-3 rounded-xl border border-red-200 bg-red-50/90 p-4 text-sm text-red-900 shadow-sm" role="alert" aria-live="assertive">
                        <svg class="mt-0.5 h-5 w-5 flex-shrink-0 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                        </svg>
                        <div>
                            <p class="font-semibold text-red-800">Autentikasi Gagal</p>
                            <p class="mt-0.5 text-xs leading-relaxed text-red-700"><?php echo htmlspecialchars($pesan_eror); ?></p>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Alert Pemberitahuan Akses Terbatas -->
                <?php if (isset($_GET['msg']) && $_GET['msg'] === 'belum_login'): ?>
                    <div class="mb-6 flex items-start gap-3 rounded-xl border border-amber-200 bg-amber-50/90 p-4 text-sm text-amber-900 shadow-sm" role="alert" aria-live="polite">
                        <svg class="mt-0.5 h-5 w-5 flex-shrink-0 text-amber-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                        <div>
                            <p class="font-semibold text-amber-800">Sesi Diperlukan</p>
                            <p class="mt-0.5 text-xs leading-relaxed text-amber-700">Silakan masuk menggunakan akun Anda untuk mengakses halaman internal.</p>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Form Login Card -->
                <div class="rounded-2xl border border-coffee-200/80 bg-white p-6 shadow-xl shadow-coffee-900/5 sm:p-8">
                    <form action="index.php" method="POST" class="space-y-5" novalidate autocomplete="on">
                        
                        <!-- Input Kolom Username -->
                        <div>
                            <label for="username" class="mb-2 block text-xs font-bold uppercase tracking-wider text-coffee-800">
                                Username
                            </label>
                            <div class="relative">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-coffee-400">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                </div>
                                <input 
                                    type="text" 
                                    name="username" 
                                    id="username" 
                                    autocomplete="username" 
                                    required 
                                    class="block w-full rounded-xl border border-coffee-300/80 bg-coffee-50/40 py-3 pl-10 pr-4 text-sm text-coffee-950 placeholder:text-coffee-400 outline-none transition duration-200 focus:border-amber-brand focus:bg-white focus:ring-4 focus:ring-amber-brand/15" 
                                    placeholder="Masukkan username barista / staf"
                                >
                            </div>
                        </div>

                        <!-- Input Kolom Password -->
                        <div>
                            <label for="password" class="mb-2 block text-xs font-bold uppercase tracking-wider text-coffee-800">
                                Password
                            </label>
                            <div class="relative">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-coffee-400">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                    </svg>
                                </div>
                                <input 
                                    type="password" 
                                    name="password" 
                                    id="password" 
                                    autocomplete="current-password" 
                                    required 
                                    class="block w-full rounded-xl border border-coffee-300/80 bg-coffee-50/40 py-3 pl-10 pr-20 text-sm text-coffee-950 placeholder:text-coffee-400 outline-none transition duration-200 focus:border-amber-brand focus:bg-white focus:ring-4 focus:ring-amber-brand/15" 
                                    placeholder="Masukkan password akun"
                                >
                                <!-- Tombol Toggle Password (Text + Icon) -->
                                <button 
                                    type="button" 
                                    id="togglePassword" 
                                    class="absolute inset-y-0 right-0 flex cursor-pointer items-center gap-1.5 px-3.5 text-xs font-semibold text-coffee-600 transition hover:text-amber-brand focus:outline-none focus:text-amber-brand" 
                                    aria-label="Tampilkan password"
                                    aria-pressed="false"
                                >
                                    <span id="toggleText">Lihat</span>
                                </button>
                            </div>
                        </div>

                        <!-- Tombol Submit Login -->
                        <button 
                            type="submit" 
                            name="login" 
                            class="group relative flex w-full cursor-pointer items-center justify-center gap-2 rounded-xl bg-amber-brand px-5 py-3.5 text-sm font-semibold text-white shadow-md shadow-amber-brand/25 transition duration-200 hover:bg-amber-dark hover:shadow-lg hover:shadow-amber-dark/30 focus:outline-none focus:ring-4 focus:ring-amber-brand/30 active:scale-[0.99]"
                        >
                            <span>Masuk ke Dashboard</span>
                            <svg class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </form>
                </div>

                <!-- Footer Informasi Bantuan & Versi -->
                <div class="mt-8 text-center">
                    <p class="text-xs text-coffee-500">
                        Perlu bantuan atau reset kredensial? Hubungi 
                        <a href="mailto:support@coffeemiaou.local" class="font-medium text-amber-brand underline-offset-2 hover:underline">
                            Administrator Roastery
                        </a>
                    </p>
                    <p class="mt-2 text-[11px] text-coffee-400">
                        CoffeeShop MIAOU &bull; Versi 1.2.0 (Build 2026)
                    </p>
                </div>

            </div>
        </main>
    </div>

    <!-- Memuat JavaScript interaktif untuk visibilitas password -->
    <script src="./src/password-toggle.js"></script>
</body>
</html>
