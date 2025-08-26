<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <?php
        if(isset($_POST['username'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = mysqli_query(mysql: $koneksi, query: "SELECT*FROM user where username= '$username' and password= '$password'");

            if(mysqli_num_rows(result: $query) > 0){
                $data = mysqli_fetch_assoc(result: $query);
                $_SESSION["username"] = $data;
                echo '<script> alert("selamat Datang, ' . $data['nama'].'"); location.href="home.php";</script>';
            } else{
                echo '<script>alert("Username/Password tidak sesuai");</script>';
            }
        }
      ?>
        <div class="navbar">
            <h1 class="title">EDUVERSE</h1>
            <ul class="menu">
                <li><a href="#" class="layanan">LayananKami</a></li>
                <li><a href="#" class="ulasan">Ulasan</a></li>
                <li><button class="user" type="button"><img src="Profile foto.png" alt="Profile Foto" class="profile"></button></li>
            </ul>
        </div>
  <main class="container">
    <section class="login-box" role="main" aria-label="Login form section">
      <div class="illustration" aria-hidden="true">
        <img src="login.png"
             alt="Illustration showing four people sitting on chairs in a circle engaged in group discussion with speech bubbles and light bulb ideas"
             onerror="this.style.display='none';" />
      </div>
      <form action="#" method="POST" aria-labelledby="login-title" novalidate>
        <h2 id="login-title">Login</h2>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" name="username" placeholder="username" autocomplete="username" required />
        
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" placeholder="password" autocomplete="current-password" required />
        
        <div class="options">
          <label>
            <input type="checkbox" name="remember" />
            Remember me
          </label>
          <a href="#" class="forgot-password" tabindex="0">Forgot password?</a>
        </div>
        
        <button type="submit" class="login-btn" aria-label="Login button" href="home.html">Login</button>
        <p class="signup-link">Don't have an account? <a href="registerasi.php">Create</a></p>
      </form>
      </main>
          <div class="footer">
            <div class="anu">
                <h3>EDUVERSE</h3>
                <p>Jl. Tanah Baru Jl. Kemiri Jaya No.99, Beji, Kecamatan Beji, Kota Depok, Jawa Barat 16421</p>
            </div>
            <div class="eto">
                <h3>Hubungi Kami</h3>
                <p><img src="./assets foto/whatsapp.png" alt="" class="whatsapp">08179756081</p>
                <p><img src="./assets foto/gmail.png" alt="" class="gmail">eduverse@gmail.com</p>
                <p><img src="./assets foto/instagram.png" alt="" class="instagram">@EDUVERSE</p>
            </div>
        </div>

</body>
</html>