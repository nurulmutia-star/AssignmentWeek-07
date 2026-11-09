# User Registration System – Assignment Week 07

## 1. Deskripsi Aplikasi

User Registration System merupakan aplikasi registrasi pengguna berbasis web yang dibuat menggunakan HTML, CSS, PHP, dan MySQL.

Aplikasi ini dikembangkan untuk memenuhi tugas Minggu 07 mata kuliah Aplikasi Web. Tujuan dari aplikasi ini adalah membuat halaman registrasi yang dapat menerima input data pengguna dan menyimpannya ke dalam database.

## 2. Fitur Aplikasi

Beberapa fitur yang tersedia dalam aplikasi ini:

- Form registrasi pengguna.
- Input nama lengkap.
- Input alamat email.
- Input username.
- Input password dengan minimal 8 karakter.
- Fitur show/hide password.
- Checkbox persetujuan Terms of Use dan Privacy Policy.
- Validasi input formulir.
- Penyimpanan data pengguna ke database MySQL.
- Password disimpan menggunakan metode hashing.
- Halaman notifikasi ketika registrasi berhasil.

## 3. Teknologi yang Digunakan

- HTML: Membuat struktur halaman registrasi.
- CSS: Mengatur tampilan dan desain aplikasi.
- JavaScript: Mengatur fitur show/hide password.
- PHP: Memproses data registrasi.
- MySQL: Menyimpan data pengguna.
- phpMyAdmin: Mengelola database.
- Laragon: Menjalankan server lokal.

## 4. Struktur Folder

```text
week07-registration/
│
├── index.php
├── koneksi.php
├── proses.php
├── test-koneksi.php
├── database.sql
└── README.md
```

## 5. Database

Nama database: `db_registration_week07`

Nama tabel: `users`

Struktur tabel users terdiri dari:

- id
- nama_lengkap
- email
- username
- password
- created_at

## 6. Cara Menjalankan Aplikasi

1. Pastikan Laragon sudah aktif.
2. Jalankan Apache dan MySQL.
3. Import file `database.sql` melalui phpMyAdmin.
4. Pastikan konfigurasi database pada `koneksi.php` sudah sesuai.
5. Simpan folder project di dalam direktori `www`.
6. Buka browser.
7. Masukkan alamat berikut:

```text
http://localhost/week07-registration/
```

8. Halaman registrasi akan ditampilkan.
9. Isi seluruh data yang diperlukan.
10. Centang persetujuan Terms of Use dan Privacy Policy.
11. Klik tombol Create Account.
12. Data pengguna akan diproses dan disimpan ke database.

## 7. Kesimpulan

Melalui pembuatan aplikasi ini, saya mempelajari bagaimana menghubungkan halaman registrasi dengan database MySQL menggunakan PHP.

Selain itu, tugas ini membantu memahami proses pengiriman data melalui form, koneksi database, pengolahan data, serta penyimpanan password menggunakan hashing.

---

**Assignment Week 07 – Aplikasi Web**  
**Universitas Ary Ginanjar**
