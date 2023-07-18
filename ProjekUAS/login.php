<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Form Login</div>
        <div class="title signup">Form Registrasi</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Daftar</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="proseslogin.php" method="POST" class="login">
            <pre>
            </pre>
            <div class="field">
              <input type="text" name="username" placeholder="Masukan Username" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Masukan Password" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
            <div class="signup-link">Buat akun <a href="">Daftar sekarang</a></div>
          </form>
          <form action="prosesdaftar.php" method="POST" class="signup">
            <div class="field">
              <input type="text" name="nama" placeholder="Masukan Nama" required>
            </div>
            <div class="field">
              <input type="text" name="username" placeholder="Masukan Username" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Masukan Password" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="Submit" value="Daftar">
            </div>
            <div class="signup-link">Sudah punya akun? <a href="">Login</a></div>
          </form>
        </div>
      </div>
    </div>
  <script  src="js/script.js"></script>


   

      
</body>
</html>