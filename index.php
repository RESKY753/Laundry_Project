<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup Form</title>
    <link rel="stylesheet" href="Assets/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <!-- Login Form -->
        <div class="form-box login">
            <form action="Models/m_login.php" method="POST">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" name="username" placeholder="Username" required autocomplete="off">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required autocomplete="off">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" name="login" class="btn">Login</button>
                <p>hubungi kami di bawah ini jika ada laporan bug😃</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-gmail'></i></a>
                    <a href=""><i class='bx bxl-whatsapp'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <form action="Models/m_login.php" method="POST">
                <h1>Registration</h1>
                <div class="input-box">
                    <input type="text" name="nama" placeholder="Nama Lengkap" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-box">
                    <input type="number" name="id_outlet" placeholder="ID Outlet" required>
                    <i class='bx bxs-home'></i>
                </div>
                <div class="input-box">
                    <select name="role" required>
                        <option value="">-- Pilih Role --</option>
                        <option value="admin">Admin</option>
                        <option value="kasir">Kasir</option>
                        <option value="owner">Owner</option>
                    </select>
                </div>
                <button type="submit" name="register" class="btn">Register</button>
            </form>
        </div>

        <!-- Toggle Panel -->
        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>welcome to laundry</h1>
                <p>belum punya akun?</p>
                <button class="btn register-btn">Register</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>selamat datang kembali!</h1>
                <p>udah punya akun?</p>
                <button class="btn login-btn">Loginnn</button>
            </div>
        </div>
    </div>

    <script src="Views/SignUp_LogIn_Form.js"></script>
</body>
</html>
