<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Account | User Registration</title>

    <style>
        /* GENERAL */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #fce4ec, #e3f2fd);
            padding: 30px 20px;
        }

        /* MAIN CONTAINER */

        .container {
            width: 100%;
            max-width: 480px;
            background: #ffffff;
            padding: 38px;
            border-radius: 22px;
            box-shadow: 0 12px 35px rgba(120, 90, 110, 0.12);
        }

        /* HEADER */

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header .icon {
            font-size: 42px;
            margin-bottom: 12px;
        }

        h2 {
            color: #59445b;
            font-size: 27px;
            margin-bottom: 8px;
        }

        .header p {
            color: #999;
            font-size: 13px;
        }

        /* FORM */

        .form-group {
            margin-bottom: 19px;
        }

        .form-group > label {
            display: block;
            margin-bottom: 8px;
            color: #59445b;
            font-size: 14px;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 14px;
            border: 1px solid #eadce7;
            border-radius: 10px;
            outline: none;
            font-size: 14px;
            transition: 0.3s;
        }

        input:focus {
            border-color: #d58db7;
            box-shadow: 0 0 0 3px rgba(213, 141, 183, 0.12);
        }

        input::placeholder {
            color: #aaa;
        }

        /* PASSWORD */

        .password-box {
            position: relative;
        }

        .password-box input {
            padding-right: 48px;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #aa8da2;
            font-size: 19px;
            user-select: none;
        }

        .toggle-password:hover {
            color: #d58db7;
        }

        /* TERMS AND CONDITIONS */

        .terms {
            display: flex;
            align-items: flex-start;
            gap: 9px;
            margin: 5px 0 22px;
            color: #777;
            font-size: 13px;
            line-height: 1.6;
        }

        .terms input {
            width: 17px;
            height: 17px;
            margin-top: 3px;
            padding: 0;
            accent-color: #d58db7;
            flex-shrink: 0;
            cursor: pointer;
        }

        .terms label {
            margin: 0;
            font-weight: normal;
            cursor: pointer;
        }

        .terms a {
            color: #d45b96;
            text-decoration: none;
            font-weight: 600;
        }

        .terms a:hover {
            text-decoration: underline;
        }

        /* REGISTER BUTTON */

        .register-btn {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 11px;
            background: #d58db7;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .register-btn:hover {
            background: #bd75a0;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(213, 141, 183, 0.25);
        }

        /* DIVIDER */

        .divider {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 25px 0;
            color: #aaa;
            font-size: 12px;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        /* SOCIAL BUTTONS */

        .social-buttons {
            display: flex;
            gap: 12px;
        }

        .social-btn {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            padding: 12px 8px;
            background: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            color: #777;
            font-size: 12px;
            cursor: pointer;
            transition: 0.3s;
        }

        .social-btn:hover {
            background: #faf5f8;
            border-color: #d58db7;
        }

        .google-icon {
            font-size: 20px;
            font-weight: bold;
            color: #4285F4;
        }

        .facebook-icon {
            width: 19px;
            height: 19px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #1877F2;
            border-radius: 50%;
            color: white;
            font-weight: bold;
            font-size: 15px;
        }

        /* FOOTER */

        .footer {
            text-align: center;
            margin-top: 25px;
            color: #aaa;
            font-size: 12px;
        }

        /* RESPONSIVE */

        @media (max-width: 450px) {
            .container {
                padding: 27px 22px;
            }

            h2 {
                font-size: 24px;
            }

            .social-buttons {
                flex-direction: column;
            }
        }

    </style>
</head>

<body>

    <div class="container">

        <!-- HEADER -->

        <div class="header">
            <div class="icon">🌷</div>

            <h2>Create Account</h2>

            <p>
                Silakan isi data diri untuk membuat akun baru.
            </p>
        </div>


        <!-- REGISTRATION FORM -->

        <form action="proses.php" method="POST">

            <!-- FULL NAME -->

            <div class="form-group">

                <label for="nama_lengkap">
                    Nama Lengkap
                </label>

                <input
                    type="text"
                    id="nama_lengkap"
                    name="nama_lengkap"
                    placeholder="Masukkan nama lengkap"
                    required
                >

            </div>


            <!-- EMAIL -->

            <div class="form-group">

                <label for="email">
                    Alamat Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="contoh@email.com"
                    required
                >

            </div>


            <!-- USERNAME -->

            <div class="form-group">

                <label for="username">
                    Username
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Buat username"
                    required
                >

            </div>


            <!-- PASSWORD -->

            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <div class="password-box">

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Minimal 8 karakter"
                        minlength="8"
                        required
                    >

                    <span
                        class="toggle-password"
                        id="togglePassword"
                        onclick="togglePasswordVisibility()"
                        title="Lihat password"
                        role="button"
                        tabindex="0"
                        aria-label="Lihat password"
                    >
                        👁
                    </span>

                </div>

            </div>


            <!-- TERMS AND CONDITIONS -->

            <div class="terms">

                <input
                    type="checkbox"
                    name="terms"
                    value="accepted"
                    id="terms"
                    required
                >

                <label for="terms">

                    By clicking Create Account, you agree to the

                    <a href="#terms">
                        Terms of Use
                    </a>

                    and

                    <a href="#privacy">
                        Privacy Policy
                    </a>.

                </label>

            </div>


            <!-- CREATE ACCOUNT BUTTON -->

            <button
                type="submit"
                class="register-btn"
            >
                Create Account
            </button>

        </form>


        <!-- DIVIDER -->

        <div class="divider">
            OR SIGN UP WITH
        </div>


        <!-- SOCIAL REGISTRATION -->

        <div class="social-buttons">

            <button
                type="button"
                class="social-btn"
            >

                <span class="google-icon">G</span>

                Sign up with Google

            </button>


            <button
                type="button"
                class="social-btn"
            >

                <span class="facebook-icon">f</span>

                Sign up with Facebook

            </button>

        </div>


        <!-- FOOTER -->

        <div class="footer">
            User Registration System © 2026
        </div>

    </div>


    <!-- PASSWORD VISIBILITY SCRIPT -->

    <script>

        function togglePasswordVisibility() {

            const password =
                document.getElementById("password");

            const icon =
                document.getElementById("togglePassword");

            if (password.type === "password") {

                password.type = "text";

                icon.textContent = "🙈";

                icon.title = "Sembunyikan password";

                icon.setAttribute(
                    "aria-label",
                    "Sembunyikan password"
                );

            } else {

                password.type = "password";

                icon.textContent = "👁";

                icon.title = "Lihat password";

                icon.setAttribute(
                    "aria-label",
                    "Lihat password"
                );

            }

        }

        document.getElementById("togglePassword")
            .addEventListener("keydown", function(event) {

                if (event.key === "Enter" || event.key === " ") {

                    event.preventDefault();

                    togglePasswordVisibility();

                }

            });

    </script>

</body>
</html>
