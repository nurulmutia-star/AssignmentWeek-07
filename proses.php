<?php
require_once "koneksi.php";

function tampilkanPesan($judul, $pesan, $berhasil = false) {
    $warna = $berhasil ? "#d58db7" : "#e58b8b";
    $ikon = $berhasil ? "✓" : "!";
    ?>
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hasil Registrasi</title>
        <style>
            * {
                box-sizing: border-box;
                font-family: 'Segoe UI', sans-serif;
            }

            body {
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background: linear-gradient(135deg, #fce4ec, #e3f2fd);
                padding: 20px;
            }

            .card {
                width: 100%;
                max-width: 430px;
                padding: 40px 30px;
                background: white;
                border-radius: 22px;
                text-align: center;
                box-shadow: 0 12px 35px rgba(120,90,110,.12);
            }

            .icon {
                width: 65px;
                height: 65px;
                margin: auto auto 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50%;
                background: <?= htmlspecialchars($warna) ?>;
                color: white;
                font-size: 35px;
            }

            h2 { color: #59445b; }

            p {
                color: #888;
                line-height: 1.6;
            }

            a {
                display: inline-block;
                margin-top: 20px;
                padding: 13px 25px;
                background: #d58db7;
                color: white;
                text-decoration: none;
                border-radius: 10px;
            }

            a:hover { background: #bd75a0; }
        </style>
    </head>
    <body>
        <div class="card">
            <div class="icon"><?= $ikon ?></div>
            <h2><?= htmlspecialchars($judul) ?></h2>
            <p><?= htmlspecialchars($pesan) ?></p>
            <a href="index.php">Kembali ke Registrasi</a>
        </div>
    </body>
    </html>
    <?php
}

// Memastikan form dikirim menggunakan POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    tampilkanPesan(
        "Akses Ditolak",
        "Silakan mengisi formulir registrasi terlebih dahulu."
    );
    exit;
}

// Mengambil data dari form
$nama = trim($_POST["nama_lengkap"] ?? "");
$email = trim($_POST["email"] ?? "");
$username = trim($_POST["username"] ?? "");
$password = $_POST["password"] ?? "";

// Menghapus tag HTML dari input teks
$nama = strip_tags($nama);
$email = strip_tags($email);
$username = strip_tags($username);

// Validasi nama
if (empty($nama)) {
    tampilkanPesan("Registrasi Gagal", "Nama lengkap wajib diisi.");
    exit;
}

if (is_numeric($nama) || !preg_match("/^[\p{L}\s'.-]+$/u", $nama)) {
    tampilkanPesan("Registrasi Gagal", "Nama hanya boleh berisi huruf dan spasi.");
    exit;
}

// Validasi email
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    tampilkanPesan("Registrasi Gagal", "Masukkan alamat email yang valid.");
    exit;
}

// Validasi username
if (!preg_match("/^[a-zA-Z0-9_]{4,20}$/", $username)) {
    tampilkanPesan(
        "Registrasi Gagal",
        "Username harus 4-20 karakter dan hanya boleh berisi huruf, angka, atau underscore."
    );
    exit;
}

// Validasi password
if (strlen($password) < 8) {
    tampilkanPesan("Registrasi Gagal", "Password minimal harus 8 karakter.");
    exit;
}

// Mengecek email yang sudah terdaftar
$cekEmail = mysqli_prepare(
    $conn,
    "SELECT id FROM users WHERE email = ?"
);

mysqli_stmt_bind_param($cekEmail, "s", $email);
mysqli_stmt_execute($cekEmail);
mysqli_stmt_store_result($cekEmail);

if (mysqli_stmt_num_rows($cekEmail) > 0) {
    mysqli_stmt_close($cekEmail);
    tampilkanPesan("Registrasi Gagal", "Email sudah digunakan.");
    exit;
}

mysqli_stmt_close($cekEmail);

// Mengecek username yang sudah terdaftar
$cekUsername = mysqli_prepare(
    $conn,
    "SELECT id FROM users WHERE username = ?"
);

mysqli_stmt_bind_param($cekUsername, "s", $username);
mysqli_stmt_execute($cekUsername);
mysqli_stmt_store_result($cekUsername);

if (mysqli_stmt_num_rows($cekUsername) > 0) {
    mysqli_stmt_close($cekUsername);
    tampilkanPesan("Registrasi Gagal", "Username sudah digunakan.");
    exit;
}

mysqli_stmt_close($cekUsername);

// Mengamankan password menggunakan hash
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// Menyimpan data ke database
$query = mysqli_prepare(
    $conn,
    "INSERT INTO users (nama_lengkap, email, username, password)
     VALUES (?, ?, ?, ?)"
);

mysqli_stmt_bind_param(
    $query,
    "ssss",
    $nama,
    $email,
    $username,
    $passwordHash
);

if (mysqli_stmt_execute($query)) {
    tampilkanPesan(
        "Registrasi Berhasil!",
        "Akun kamu berhasil dibuat dan data sudah tersimpan di database.",
        true
    );
} else {
    tampilkanPesan(
        "Registrasi Gagal",
        "Terjadi kesalahan saat menyimpan data. Silakan coba kembali."
    );
}

mysqli_stmt_close($query);
mysqli_close($conn);
?>
