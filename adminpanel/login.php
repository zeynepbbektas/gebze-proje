<?php
@session_start();
@ob_start();
define("DATA", "data/");
define("SAYFA", "include/");
define("SINIF", "class/");
include "ayar.php";
include_once (DATA . "baglanti.php");
define("SITE", $siteURL);

$hataMesaji = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullaniciadi = $_POST['kullaniciadi'];
    $sifre = $_POST['sifre'];

    if (!empty($kullaniciadi) && !empty($sifre)) {
        $kullaniciadi = mysqli_real_escape_string($conn, $kullaniciadi);
        $query = "SELECT * FROM kullanicilar WHERE kullaniciadi = '$kullaniciadi'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            if ($sifre == $user['sifre']) {
                $_SESSION['kullaniciadi'] = $user['kullaniciadi'];
                $_SESSION['adsoyad'] = $user['adsoyad'];
                header("Location: index.php"); // Doğru yönlendirme
                exit();
            } else {
                $hataMesaji = "Kullanıcı adı veya şifre hatalı.";
            }
        } else {
            $hataMesaji = "Kullanıcı adı veya şifre hatalı.";
        }
    } else {
        $hataMesaji = "Lütfen kullanıcı adı ve şifre girin.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="style.css"> <!-- CSS dosyasını bağlama -->
</head>
<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form action="login.php" method="POST" class="login">
                    <!-- Hata mesajı alanı -->
                    <?php if (!empty($hataMesaji)): ?>
                        <div class="error-message">
                            <?= $hataMesaji ?>
                        </div>
                    <?php endif; ?>
                    <div class="login__field">
                        <label for="kullaniciadi">Kullanıcı Adı:</label>
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" name="kullaniciadi" id="kullaniciadi" class="login__input" placeholder="User name / Email" required>
                    </div>
                    <div class="login__field">
                        <label for="sifre">Şifre:</label>
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="sifre" id="sifre" class="login__input" placeholder="Password" required>
                    </div>
                    <button type="submit" class="button login__submit">
                        <span class="button__text">Giriş Yap</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
            
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>        
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>        
        </div>
    </div>
</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css?family=Raleway:400,700');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Raleway, sans-serif;
}

body {
    background: linear-gradient(90deg, #3aafd0, #63c7de);
}

.container {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

.screen {
    background: linear-gradient(90deg, #065894, #0b6ea5);
    position: relative;
    height: 600px;
    width: 360px;
    box-shadow: 0px 0px 24px #5C5696;
}

.screen__content {
    z-index: 1;
    position: relative;
    height: 100%;
}

.screen__background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 0;
    -webkit-clip-path: inset(0 0 0 0);
    clip-path: inset(0 0 0 0);
}

.screen__background__shape {
    transform: rotate(45deg);
    position: absolute;
}

.screen__background__shape1 {
    height: 520px;
    width: 520px;
    background: #FFF;
    top: -50px;
    right: 120px;
    border-radius: 0 72px 0 0;
}

.screen__background__shape2 {
    height: 220px;
    width: 220px;
    background: #2596be;
    top: -172px;
    right: 0;
    border-radius: 32px;
}

.screen__background__shape3 {
    height: 540px;
    width: 190px;
    background: linear-gradient(270deg, #2b5da4, #2596be);
    top: -24px;
    right: 0;
    border-radius: 32px;
}

.screen__background__shape4 {
    height: 400px;
    width: 200px;
    background: #107fad;
    top: 420px;
    right: 50px;
    border-radius: 60px;
}

.login {
    width: 320px;
    padding: 30px;
    padding-top: 156px;
}

.error-message {
    background-color: #ff4d4d;
    color: white;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
    text-align: center;
}

.login__field {
    padding: 20px 0px;
    position: relative;
}

.login__icon {
    position: absolute;
    color: #2b5da4;
    margin-left: 5px;
}

.login__input {
    border: none;
    border-bottom: 2px solid #D1D1D4;
    background: none;
    padding: 10px;
    padding-left: 24px;
    font-weight: 700;
    width: 75%;
    transition: .2s;
    margin: 15px;
    border-radius: 20px;
}

.login__input:active,
.login__input:focus,
.login__input:hover {
    outline: none;
    border-bottom-color: #2b5da4;
}

.login__submit {
    background: #fff;
    font-size: 14px;
    margin-top: 30px;
    padding: 16px 20px;
    border-radius: 26px;
    border: 1px solid #D4D3E8;
    text-transform: uppercase;
    font-weight: 700;
    display: flex;
    align-items: center;
    width: 100%;
    color: #4C489D;
    box-shadow: 0px 2px 2px #5C5696;
    cursor: pointer;
    transition: .2s;
}

.login__submit:active,
.login__submit:focus,
.login__submit:hover {
    border-color: #6A679E;
    outline: none;
}

.button__icon {
    font-size: 24px;
    margin-left: auto;
    color: #2b5da4;
}

</style>
