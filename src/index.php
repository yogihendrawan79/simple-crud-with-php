<!DOCTYPE html>
<html>

<head>
  <title>Halaman LogIn Web Penginputan Data Nilai | STMIK"AMIKBANDUNG"</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <!-- cek pesan notifikasi -->
  <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo '<script type="text/javascript">';
                echo ' alert("Login gagal! username dan password salah!")';
                echo '</script>';
            }else if($_GET['pesan'] == "logout"){
                echo '<script type="text/javascript">';
                echo ' alert("Anda berhasil keluar!")';
                echo '</script>';
            }else if($_GET['pesan'] == "belum_login"){
                echo '<script type="text/javascript">';
                echo ' alert("Anda harus login untuk mengakses halaman admin")';
                echo '</script>';
            } 
        }
    ?>
  <div class="center">
    <h1>Login</h1>
    <form method="post" action="cek_login.php">
      <div class="txt_field">
        <input type="text" name="username" required>
        <span></span>
        <label>Username</label>
      </div>
      <div class="txt_field">
        <input type="password" name="password" required>
        <span></span>
        <label>Password</label>
      </div>
      <div class="pass">Forgot Password?</div>
      <input type="submit" value="Login">
      <div class="singup_link">
        Not a member? <a href="#">Singup</a>
      </div>
    </form>
  </div>
</body>

</html>