<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/config.php";

    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

   if ($user) {

       if (password_verify($_POST["password"], $user["password_hash"])) {

            session_start();

            $_SESSION["user_id"] = $user["id"];

            header("Location: index.php");
            exit;
        
       }
   }

   $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="shortcut icon" href="images/login.png" type="image/png">
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<body>
    <header class="header">
        <h1 class="logo">Jelajah<span>Nusantara</span></a></h1>

        <nav class="navbar">
            <a href="login.php">Beranda</a>
            <a href="tentang.html">Tentang</a>
            <a href="profil.html">PROFIL</a>
        </nav>

    </header>

    <div class="background"></div>
        <div class="container">
        <div class="content">
            <h2><i class='bx bxl-firebase'></i>JelajahNusantara</h2>

            <div class="text-sci">
                <h2 class="logo">Welcome ! <br><span>To Our Website</span></h2>
                <p> Paket Tour Travel Bersahabat </p>
                
                <div class="sosial-icon">
                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-google'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>
        </div>

        <div class="logreg-box">
            <div class="form-box login">

                
                <form method="POST">  
                    <h2>LOGIN</h2>

                    <?php if ($is_invalid): ?>
                        <em>Login tidak valid</em>
                    <?php endif; ?>

                    <div class="input-box">
                        <span class="icon"><i class='bx bx-envelope'></i></span>
                        <input type="email" name="email" id="email"
                        value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                        <label for="email">Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" name="password" id="password">
                        <label>Password</label>
                        <span id="password-error"></span>
                        <span class="show-password"><i class="fas fa-eye-slash" onclick="show()"></i></span>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot password?</a>
                    </div>

                    <button type="submit" class="btn">LOGIN</button>
                    
                    <div class="login-register">
                        <p>Belum Memiliki Akun ? <a href="signup.html" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>
        <script src="js/login.js"></script>
    </body>
</html>