<?php
include 'config.php';

$message = "";
if (!empty($_POST)) {
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "INSERT INTO users (`email`, `pass`, `name_surname`) VALUES ('$username', MD5($password), '$name')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $message = "Başarıyla kayıt oldunuz. Giriş yapabilirsiniz.";

        $user = new stdClass();
        $user->name_surname = $name;
        $user->email = $username;

        $_SESSION["user"] = $user;
        header('Location: /');
    } else {
        $message = "Kayıt esnasında bir hata oluştu. Lütfen daha sonra tekrar deneyiniz.";
        $message = mysqli_error($conn);
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
                <h3>Üye Girişi</h3>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name" class="control-label">Ad Soyad</label>
                        <input type="text" id="name" name="name" class="form-control"
                               placeholder="Lütfen ad soyad giriniz" required></div>

                    <div class="form-group">
                        <label for="username" class="control-label">E-posta</label>
                        <input type="email" id="username" name="username" class="form-control"
                               placeholder="Lütfen eposta giriniz" required></div>
                    <div class="form-group">
                        <label for="password">Şifre</label>
                        <input type="password" name="password" id="password" class="form-control"
                               placeholder="Lütfen şifre giriniz" required/>
                    </div>
                    <div class="form-group">
                        <div class="mt-2">
                            <label for="remember-me" class="control-label">
                                <input type="checkbox" id="remember-me"> Üyelik sözleşmesini kabul ediyorum.
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="mt-2">
                            <label for="remember-me" class="control-label">
                                <input type="checkbox" id="remember-me"> Tarafıma SMS gönderilmesini kabul ediyorum.
                            </label>
                        </div>
                    </div>
                    <div class="form-group pt-3">
                        <button type="submit" class="btn btn-login">Kayıt Ol</button>
                    </div>


                    <div class="form-group">
                        <div class="mt-3">
                            <strong style="color: red;"><?php echo $message; ?></strong>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="column-6 pt-5">
            <div class="login-frame">
                <h3>Üye Misiniz?</h3>
                <p style="text-align: center; color: #36454d;width: 315px;">
                    Eğer üye iseniz lütfen giriş yapınız.
                </p>

                <button onclick="window.location.href='login.php'" class="btn-register">Giriş Yap</button>
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