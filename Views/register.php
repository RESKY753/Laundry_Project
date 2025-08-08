<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <div class="auth-container">
    <form class="auth-form" action="register.php" method="POST">
      <h2>Register</h2>
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required />
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required />
      </div>
      <div class="input-group">
        <label for="confirm">Konfirmasi Password</label>
        <input type="password" name="confirm" id="confirm" required />
      </div>
      <button type="submit">Daftar</button>
      <p class="link">Sudah punya akun? <a href="login.html">Login</a></p>
    </form>
  </div>
</body>
</html>