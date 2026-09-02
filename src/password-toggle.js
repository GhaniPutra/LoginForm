// Mengambil tombol toggle dan input password
const togglePassword = document.getElementById('togglePassword');
const passwordInput = document.getElementById('password');
const toggleText = document.getElementById('toggleText');

// Menjalankan perubahan tipe input dan state tombol saat tombol toggle ditekan
togglePassword?.addEventListener('click', () => {
    // Memeriksa apakah password sedang disembunyikan
    const isPassword = passwordInput.type === 'password';
    
    // Mengubah tipe input antara password dan text
    passwordInput.type = isPassword ? 'text' : 'password';
    
    // Memperbarui teks tombol
    if (toggleText) {
        toggleText.textContent = isPassword ? 'Sembunyikan' : 'Lihat';
    }
    
    // Memperbarui atribut aksesibilitas
    togglePassword.setAttribute('aria-label', isPassword ? 'Sembunyikan password' : 'Tampilkan password');
    togglePassword.setAttribute('aria-pressed', isPassword ? 'true' : 'false');
});
