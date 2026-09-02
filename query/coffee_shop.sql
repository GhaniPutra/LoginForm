CREATE TABLE IF NOT EXISTS `user` (
    `id_user` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL,
    `password` CHAR(32) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id_user`),
    UNIQUE KEY `uq_user_username` (`username`),
    UNIQUE KEY `uq_user_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `user` (`username`, `password`, `email`)
VALUES ('admin', MD5('admin123'), 'admin@miaou.local')
ON DUPLICATE KEY UPDATE
    `email` = VALUES(`email`);

SELECT `id_user`, `username`, `email`
FROM `user`
WHERE `username` = 'admin'
  AND `password` = MD5('admin123');
