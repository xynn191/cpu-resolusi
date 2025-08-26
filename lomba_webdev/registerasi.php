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
    <link rel="stylesheet" href="register.css">
</head>
<body>
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
        <h2 id="login-title">Daftar</h2>

        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" placeholder="nama" autocomplete="nama" required/>

        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" name="username" placeholder="username" autocomplete="username" required />
        
        <label for="password" class="sr-only">Kata Sandi</label>
        <input type="password" id="password" name="password" placeholder="password" autocomplete="current-password" required />
        
        <div class="options">
          <label>
            <input type="checkbox" name="remember" />
            Remember me
          </label>
          <a href="#" class="forgot-password" tabindex="0">Forgot password?</a>
        </div>
        
        <button type="submit" class="login-btn" aria-label="Login button" href="home.html">Daftar</button>
        <p class="signup-link">Sudah punya akun?<a href="login.php">login</a></p>
      </form>
    <?php
        if(isset($_POST['username'])){
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Cek apakah username sudah ada
            $checkQuery = mysqli_query($koneksi, "SELECT*FROM user WHERE username='$username'");
            if(mysqli_num_rows($checkQuery) > 0) {
                echo '<script>alert("Username sudah terdaftar, silahkan gunakan username lain.")</script>';
            } else {
                // Jika username belum ada, lakukan insert
                $query = mysqli_query($koneksi,  "INSERT INTO user(nama, username, password) values('$nama', '$username', '$password')");
                if($query){
                    echo '<script>alert("selamat, pendaftaran anda bershasil. Silahkan Login")</script>';
                }else{
                    echo '<script>alert("pendaftaran gagal")</script>';
                }
            }
        }
        
    ?>
</body>
</html>