<?php
include 'config.php';
$message = "";
if (!empty($_POST)) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM users where email='$username' AND pass=MD5($password)";
    $query = mysqli_query($conn, $sql);
    $user = mysqli_fetch_object($query);

    if (empty($user)) {
        $message = "Kullanıcı adı yada şifreniz yanlış!";
    } else {
        $message = "Başarıyla giriş yaptınız.";

        $_SESSION["user"] = $user;
        header('Location: /');
    }


}

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <?php include 'includes/head.inc.php'; ?>
    <title>Giriş yap</title>
</head>
<body>
<!-- Header Starts -->
<div class="box-full" id="topnav-container" style="background-color: white">
    <div class="box">
        <div class="row">
            <div class="column">
                <?php include 'includes/login.navbar.inc.php'; ?>
            </div>
        </div>
    </div>
</div>
<!-- Header Ends -->

<!-- Body Stars-->
<div class="box">
    <div class="row">
        <div class="column-6 pt-5">
            <div class="login-frame">
                <h3>Üye Ol</h3>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username" class="control-label">E-posta</label>
                        <input type="email" id="username" name="username" class="form-control"
                               placeholder="Lütfen eposta giriniz" required></div>
                    <div class="form-group">
                        <div style="display: flex; justify-content: space-between">
                            <label for="password">Şifre</label>
                            <a href="#" style="color: #868f94 !important">Şifremi Unuttum</a>
                        </div>

                        <input type="password" name="password" id="password" class="form-control"
                               placeholder="Lütfen şifre giriniz" required/>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-login">Giriş Yap ve Devam Et</button>
                    </div>

                    <div class="form-group">
                        <div class="mt-2">
                            <label for="remember-me" class="control-label">
                                <input type="checkbox" id="remember-me"> Beni hatırla
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mt-3">
                            <strong style="color: red"><?php echo $message; ?></strong>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="column-6 pt-5">
            <div class="login-frame">
                <h3>Henüz Üye Değil Misiniz?</h3>
                <p style="text-align: center; color: #36454d;width: 315px;">
                    Üyelerimize özel hizmetlerimizden faydalanabilmek için üye olun.
                </p>

                <button onclick="window.location.href='register.php'" class="btn-register">Hemen Üye Ol</button>
            </div>
        </div>
    </div>
</div>
<!-- Body Ends-->

<div class="box-full pl-0 pr-0">
    <?php include 'includes/footer.inc.php'; ?>
</div>
</body>
</html>