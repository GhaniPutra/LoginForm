// Mengambil tombol yang digunakan untuk menampilkan atau menyembunyikan password.
const togglePassword = document.getElementById('togglePassword');
// Mengambil input password yang tipe tampilannya akan diubah.
const passwordInput = document.getElementById('password');

// Menjalankan perubahan tipe input ketika tombol toggle ditekan.
togglePassword?.addEventListener('click', () => {
    // Memeriksa apakah password sedang disembunyikan.
    const isPassword = passwordInput.type === 'password';
    // Menampilkan password atau menyembunyikannya sesuai keadaan sebelumnya.
    passwordInput.type = isPassword ? 'text' : 'password';
    // Menyesuaikan teks tombol dengan aksi yang tersedia berikutnya.
    togglePassword.textContent = isPassword ? 'Sembunyikan' : 'Lihat';
    // Memperbarui label aksesibilitas agar sesuai dengan keadaan input.
    togglePassword.setAttribute('aria-label', isPassword ? 'Sembunyikan password' : 'Tampilkan password');
});
