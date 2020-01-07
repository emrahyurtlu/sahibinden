<?php
include 'config.php';
if ($_SESSION["user"] == null) {
    header('Location: /');
}
function changeName($name)
{
    $id = $_SESSION["user"]->id;
    $sql = "UPDATE users SET `name`='$name' WHERE `id`=$id";
    if(mysqli_query($conn, $sql)){
        $_SESSION["user"]->name = $name;
    } else {
        echo "ERROR: Could not able to execute: $sql "
            . mysqli_error($conn);
    }
}

function changePassword($password)
{
    $sql = "UPDATE users SET pass=MD5('$password') WHERE id={$_SESSION["user"]->id}";
    if (mysqli_query($conn, $sql)) {
        echo "Record was updated successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. "
            . mysqli_error($conn);
    }
}

$message1 = "";
$message2 = "";
if (!empty($_POST)) {

    $actionType = trim($_POST['type']);

    if ($actionType == "change_name") {
        $name = trim($_POST['name']);
        changeName($name);
        $message1 = "İşleminiz başarıyla gerçekleştirildi.";
    } else {
        $password = trim($_POST['password']);
        $password2 = trim($_POST['password2']);
        if ($password == $password2) {
            changePassword($password);
        } else {
            $message2 = "Girdiğiniz şifreler aynı değil. Lütfen tekrar deneyiniz.";
        }
    }

    mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <?php include 'includes/head.inc.php'; ?>
    <title>Panelim</title>
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
                <h3>Bilgilerimi Güncelle</h3>
                <form action="" method="post">
                    <input type="hidden" name="type" value="change_name">
                    <div class="form-group">
                        <label for="name" class="control-label">Ad Soyad</label>
                        <input type="text" id="name" name="name" class="form-control"
                               placeholder="Lütfen ad soyad giriniz" value="<?php echo $_SESSION["user"]->name; ?>"
                               required></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-login">Kaydet</button>
                    </div>
                    <div class="form-group">
                        <div class="mt-3">
                            <strong style="color: red"><?php echo $message1; ?></strong>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="column-6 pt-5">
            <div class="login-frame">
                <h3>Şifre Değiştir</h3>
                <form action="" method="post">
                    <input type="hidden" name="type" value="change_pass">
                    <div class="form-group">
                        <label for="password">Şifre</label>
                        <input type="password" name="password" id="password" class="form-control"
                               placeholder="Lütfen şifre giriniz" required/>
                    </div>
                    <div class="form-group">
                        <label for="password2">Şifre</label>
                        <input type="password" name="password2" id="password2" class="form-control"
                               placeholder="Lütfen ikinci şifre giriniz" required/>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-login">Şifremi Değiştir</button>
                    </div>
                    <div class="form-group">
                        <div class="mt-3">
                            <strong style="color: red"><?php echo $message2; ?></strong>
                        </div>
                    </div>
                </form>
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