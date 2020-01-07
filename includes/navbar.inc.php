<nav class="topnav">

    <div class="display-inline-block">
        <a id="logo" href="/">Sahibinden</a>
    </div>

    <div class="display-inline-block">
        <form class="form-inline" id="navbar-search-form">
            <input class="form-control" type="search" id="input-search" onfocus="search()" onblur="searchReset()"
                   placeholder="Kelime, ilan no veya mağaza adı ile ara" aria-label="Search">
            <button class="" type="submit" id="btn-search"></button>
            <a href="#" id="detailed-search-link">
                Detaylı Arama</a>
        </form>
    </div>

    <div class="display-inline-block float-right">
        <ul id="navbar-right">
            <li class="float-left">
                <?php

                $link = "";

                if ($_SESSION["user"] !== null) {
                    $link = "<a class=\"right-nav-link\" href=\"panel.php\">{$_SESSION["user"]->name}</a>";
                } else {
                    $link = "<a class=\"right-nav-link\" href=\"login.php\">Giriş Yap</a>";
                }

                echo $link;

                ?>
            </li>
            <li class="float-left">
                <span style="color: #fff;">|</span>
            </li>
            <li class="float-left">
                <?php
                if ($_SESSION["user"] == null) {
                    ?>
                    <a class="right-nav-link" id="register-link" href="register.php">Üye Ol</a>
                <?php } else { ?>
                    <a class="right-nav-link" id="register-link" href="logout.php">Çıkış</a>
                <?php } ?>
            </li>

            <li class="float-left">
                <a id="btn-ucretsiz-ilan" href="#"><strong>Ücretsiz*</strong> İlan Ver</a>
            </li>
        </ul>
    </div>

</nav>