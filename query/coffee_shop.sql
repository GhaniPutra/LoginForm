-- Membuat tabel pengguna jika tabel tersebut belum tersedia.
CREATE TABLE IF NOT EXISTS `user` (
    -- Menyimpan ID unik yang bertambah otomatis.
    `id_user` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    -- Menyimpan username dengan panjang maksimal 50 karakter.
    `username` VARCHAR(50) NOT NULL,
    -- Menyimpan hash password MD5 sepanjang 32 karakter.
    `password` CHAR(32) NOT NULL,
    -- Menyimpan alamat email pengguna.
    `email` VARCHAR(100) NOT NULL,
    -- Menjadikan ID pengguna sebagai kunci utama tabel.
    PRIMARY KEY (`id_user`),
    -- Mencegah username yang sama digunakan lebih dari satu akun.
    UNIQUE KEY `uq_user_username` (`username`),
    -- Mencegah email yang sama digunakan lebih dari satu akun.
    UNIQUE KEY `uq_user_email` (`email`)
-- Menggunakan InnoDB dan encoding UTF-8 untuk mendukung transaksi serta karakter Indonesia.
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Menambahkan akun administrator awal ke dalam tabel pengguna.
INSERT INTO `user` (`username`, `password`, `email`)
-- Membuat password admin menggunakan fungsi hash MD5 di sisi database.
VALUES ('admin', MD5('admin123'), 'admin@miaou.local')
-- Memperbarui email apabila username admin sudah ada.
ON DUPLICATE KEY UPDATE
    `email` = VALUES(`email`);

-- Mengambil data akun administrator untuk memeriksa hasil seed database.
SELECT `id_user`, `username`, `email`
-- Menentukan tabel sumber data akun.
FROM `user`
-- Membatasi hasil hanya untuk username administrator.
WHERE `username` = 'admin'
-- Memastikan password yang dicari sesuai dengan password seed.
  AND `password` = MD5('admin123');
