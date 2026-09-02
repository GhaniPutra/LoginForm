<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - CoffeeShop MIAOU</title>
    <link href="./src/output.css" rel="stylesheet">
</head>
<body class="h-full bg-[#FAF6F0] text-[#2C1D12] antialiased">
    <div class="flex min-h-full flex-col lg:flex-row">
        <aside class="relative hidden overflow-hidden bg-[#2C1D12] p-12 text-[#FAF6F0] lg:flex lg:w-5/12 lg:flex-col lg:justify-between lg:p-16">
            <div class="absolute -left-24 -top-24 h-96 w-96 rounded-full bg-[#C87D43]/20 blur-3xl"></div>
            <div class="relative">
                <p class="text-xs font-bold uppercase tracking-[0.25em] text-[#D3BDA0]">MIAOU COFFEE &bull; PORTAL</p>
                <div class="my-32">
                    <p class="mb-4 text-xs font-semibold uppercase tracking-widest text-[#C87D43]">Artisan Blend Experience</p>
                    <h1 class="font-serif text-5xl font-bold leading-tight">Setiap cangkir,<br><span class="font-normal italic text-[#E6D7C3]">cerita penuh dedikasi.</span></h1>
                    <p class="mt-6 max-w-md text-sm leading-relaxed text-[#D3BDA0]">Sistem manajemen untuk menyajikan seduhan terbaik dan mengelola operasional CoffeeShop MIAOU.</p>
                </div>
            </div>
            <p class="relative border-t border-white/10 pt-6 text-xs text-[#D3BDA0]/70">Est. 2024 &mdash; Artisan Roastery</p>
        </aside>

        <main class="flex flex-1 items-center justify-center px-6 py-12 sm:px-12 lg:px-16">
            <div class="w-full max-w-md">
                <p class="mb-8 text-xs font-bold uppercase tracking-[0.25em] text-[#C87D43] lg:hidden">MIAOU COFFEE</p>
                <div class="mb-8">
                    <h2 class="font-serif text-4xl font-bold">Selamat Datang</h2>
                    <p class="mt-3 text-sm leading-6 text-[#84613D]">Masukkan kredensial akun barista atau staf untuk melanjutkan.</p>
                </div>

                <?php if (!empty($pesan_eror)): ?>
                    <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-800" role="alert">
                        <p class="font-semibold">Gagal Masuk</p>
                        <p class="mt-1 text-xs"><?php echo htmlspecialchars($pesan_eror); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (isset($_GET['msg']) && $_GET['msg'] === 'belum_login'): ?>
                    <div class="mb-6 rounded-xl border border-amber-200 bg-amber-50 p-4 text-sm text-amber-800" role="alert">
                        <p class="font-semibold">Akses Terbatas</p>
                        <p class="mt-1 text-xs">Silakan masuk terlebih dahulu.</p>
                    </div>
                <?php endif; ?>

                <form action="index.php" method="POST" class="space-y-5">
                    <div>
                        <label for="username" class="mb-2 block text-xs font-bold uppercase tracking-wider text-[#4B331F]">Username</label>
                        <input type="text" name="username" id="username" autocomplete="username" required class="block w-full rounded-xl border border-[#D3BDA0]/60 bg-white px-4 py-3 text-sm outline-none transition focus:border-[#C87D43] focus:ring-2 focus:ring-[#C87D43]/20" placeholder="Masukkan username akun">
                    </div>
                    <div>
                        <label for="password" class="mb-2 block text-xs font-bold uppercase tracking-wider text-[#4B331F]">Password</label>
                        <div class="relative">
                            <input type="password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-xl border border-[#D3BDA0]/60 bg-white px-4 py-3 pr-12 text-sm outline-none transition focus:border-[#C87D43] focus:ring-2 focus:ring-[#C87D43]/20" placeholder="Masukkan password">
                            <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 px-4 text-xs font-semibold text-[#84613D] hover:text-[#2C1D12]" aria-label="Tampilkan password">Lihat</button>
                        </div>
                    </div>
                    <button type="submit" name="login" class="w-full rounded-xl bg-[#C87D43] px-5 py-3.5 text-sm font-semibold text-white transition hover:bg-[#A9622D] focus:outline-none focus:ring-2 focus:ring-[#C87D43] focus:ring-offset-2">Masuk ke Dashboard</button>
                </form>
                <p class="mt-10 border-t border-[#E6D7C3] pt-6 text-center text-xs leading-relaxed text-[#84613D]">CoffeeShop MIAOU Management Portal</p>
            </div>
        </main>
    </div>
    <script src="./src/password-toggle.js"></script>
</body>
</html>
