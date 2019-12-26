<?php
include 'config.php';
$product_id = $_GET['id'];

if (empty($product_id))
    header('Location: /');

$sql = "SELECT * FROM product where product_id=" . $product_id;
$query = mysqli_query($conn, $sql);
$product = mysqli_fetch_object($query);

if (empty($product))
    header('Location: /');

/*echo "<pre>";
print_r($product);
echo "</pre>";*/

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <?php include 'includes/head.inc.php'; ?>
    <title><?php echo $product->brand . " > " . $product->model . " > " . $product->title ?></title>
</head>
<body>
<!-- Header Starts -->
<div class="box-full" id="topnav-container">
    <div class="box">
        <div class="row">
            <div class="column">
                <?php include 'includes/navbar.inc.php'; ?>
            </div>
        </div>
    </div>
</div>
<!-- Header Ends -->

<!-- Breadcrupm Starts -->
<div class="box-full breadcrumb-bg">
    <div class="box">
        <div class="row">
            <div class="column-6">
                <nav>
                    <ol class="breadcrumb-custom">
                        <li class="breadcrumb-item float-left mr-1"><a href="#">Vasıta</a></li>
                        <li class="breadcrumb-item float-left mr-1"><a href="#">Otomobil</a></li>
                        <li class="breadcrumb-item float-left mr-1"><a href="#"><?php echo $product->brand ?></a></li>
                        <li class="breadcrumb-item float-left mr-1"><a href="#"><?php echo $product->model ?></a></li>
                        <li class="breadcrumb-item float-left mr-1"><a href="#"><?php echo $product->package ?></a></li>
                    </ol>
                </nav>
            </div>
            <div class="column-6">
                <div class="float-right breadcrumb-right-nav">
                    <ul class="list-unstyled mt-0">
                        <li class="nav-item seperator float-left mr-1">
                            <a class="nav-link" href="#">Favori İlanlarım</a>
                        </li>
                        <li class="seperator float-left mr-1">
                            <a class="nav-link" href="#">Favori Aramalarım</a>
                        </li>
                        <li class="seperator float-left mr-1">
                            <a class="nav-link" href="#">Size Özel İlanlar</a>
                        </li>
                        <li class="float-left mr-1">
                            <a class="nav-link" href="#">İlan Karşılaştırması</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrupm Ends -->

<!-- Body Stars-->
<div class="box">
    <div class="row">
        <div class="column-12">
            <div class="margin-top-16"></div>
            <h1 class="display-inline-block"><?php echo $product->title ?></h1>

            <nav class="float-right">
                <a class="pt-0 breadcrumb-nav mr-1" href="#" id="addFav">Favorilerime Ekle</a>
                <a class="pt-0 breadcrumb-nav mr-1" href="#" id="print">Yazdır</a>
                <a class="pt-0 breadcrumb-nav mr-1 share-icon" href="#" id="facebook"></a>
                <a class="pt-0 breadcrumb-nav mr-1 share-icon" href="#" id="twitter"></a>
                <a class="pt-0 breadcrumb-nav share-icon" href="#" id="email"></a>
            </nav>

            <div class="h1-divider mb-3"></div>
        </div>
    </div>
    <?php
    $sql = "SELECT * FROM product_images where product_id=" . $product_id;
    $query = mysqli_query($conn, $sql);
    $images = mysqli_fetch_all($query);
    $cover_url = $images[0][2];
    /*echo "<pre>";
    print_r($images);
    echo "</pre>";*/
    ?>
    <div class="row">
        <div class="column-6">
            <div class="row">
                <div class="column-12">
                    <img src="<?php echo $cover_url ?>" onclick="changeImg(++activeImg)"
                         id="product-img-showcase"
                         alt="Product Image"/>
                </div>
                <div class="column-12" id="product-images-container">
                    <?php
                    $imageId = 0;
                    for($i=0; $i<count($images); $i++){
                        $image_url = $images[$i][2];
                        $imageId = $i +1;
                        echo "<img onclick=\"changeImg('$imageId')\" id=\"img-$imageId\" class=\"product-thumb\"
                         src=\"$image_url\" alt=\"$product->title\">";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="column-3">
            <h3 class="price">
                <?php echo number_format($product->price, 0, ',', '.') ?> TL
            </h3>

            <div style="font-size: 12px; font-weight: bold">
                <a href="#">İstanbul</a>
                <span class="pl-1 pr-1">/</span>
                <a href="#">Ataşehir</a>
                <span class="pl-1 pr-1">/</span>
                <a href="#">Küçükbakkalköy</a>
            </div>

            <ul class="classifiedInfoList">
                <li>
                    <strong>İlan No</strong>&nbsp;
                    <span class="color-red"><?php echo $product->product_id ?></span>
                </li>
                <li>
                    <strong>
                        İlan Tarihi</strong>&nbsp;
                    <?php
                    $date = new DateTime($product->publish_date);
                    ?>
                    <span><?php echo strftime('%d %B %Y', $date->getTimestamp()) ?></span>
                </li>
                <li>
                    <strong>Marka</strong>&nbsp;
                    <span><?php echo $product->brand ?></span>
                </li>
                <li>
                    <strong>Seri</strong>&nbsp;
                    <span><?php echo $product->serie ?></span>
                </li>
                <li>
                    <strong>Model</strong>&nbsp;
                    <span><?php echo $product->model ?></span>
                </li>
                <li>
                    <strong>Yıl</strong>&nbsp;
                    <span><?php echo $product->year ?></span>
                </li>
                <li>
                    <strong>Yakıt</strong>&nbsp;
                    <span><?php echo $product->fuel_type ?></span>
                </li>
                <li>
                    <strong>Vites</strong>&nbsp;
                    <span><?php echo $product->gear_type ?></span>
                </li>
                <li>
                    <strong>KM</strong>&nbsp;
                    <span><?php echo number_format($product->km, 0, ",", ".") ?></span>
                </li>
                <li>
                    <strong>Kasa Tipi</strong>&nbsp;
                    <span>
                	Hatchback 5 kapı</span>
                </li>
                <li>
                    <strong>Motor Gücü</strong>&nbsp;
                    <span>
                	101 - 125 HP</span>
                </li>
                <li>
                    <strong>Motor Hacmi</strong>&nbsp;
                    <span>
                	1301 - 1600 cm3</span>
                </li>
                <li>
                    <strong>Çekiş</strong>&nbsp;
                    <span>
                	Önden Çekiş</span>
                </li>
                <li>
                    <strong>Renk</strong>&nbsp;
                    <span>
                	Beyaz</span>
                </li>
                <li>
                    <strong>Garanti</strong>&nbsp;
                    <span>
                	Evet</span>
                </li>
                <li>
                    <strong>Plaka / Uyruk</strong>&nbsp;
                    <span>
                	Türkiye (TR) Plakalı</span>
                </li>
                <li>
                    <strong>Kimden</strong>&nbsp;
                    <span>
                	Galeriden</span>
                </li>
                <li>
                    <strong>Takas</strong>&nbsp;
                    <span>
                    Evet&nbsp;
                </span>
                </li>
                <li>
                    <strong>Durumu</strong>&nbsp;
                    <span>
            İkinci El&nbsp;
            </span>
                </li>
            </ul>
            <div class="d-flex justify-content-center">
                <a href="#" rel="nofollow" class="product-feedback mr-0 ml-0">İlan ile İlgili Şikayetim Var</a>
            </div>

        </div>
        <div class="column-3">
            <div class="d-flex justify-content-center"><img src="assets/images/product_detail_contact.png"
                                                            alt="Detail img">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column-12">
            <img src="assets/images/product-detail-header.png" alt="">
        </div>
        <div class="column-12">
            <div class="ui-panel">
                <div class="ui-panel-header">
                    <a href="#product-details" class="ui-panel-toggle" onclick="togglePanel(this)">Açıklama</a>
                </div>
                <div class="ui-panel-content" id="product-details">
                    <div class="d-flex justify-content-between">
                        <p>
                            <?php echo $product->summary ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-12">
            <div class="ui-panel">
                <div class="ui-panel-header">
                    <a href="#product-properties" class="ui-panel-toggle" onclick="togglePanel(this)">Özellikler</a>
                </div>
                <div class="ui-panel-content" id="product-properties">
                    <h3>Güvenlik</h3>
                    <ul>
                        <li>
                            ABC
                        </li>
                        <li>
                            ABS
                        </li>
                        <li>
                            AEB
                        </li>
                        <li>
                            EBP
                        </li>
                        <li>
                            ASR
                        </li>
                        <li>
                            ESP / VSA
                        </li>
                        <li>
                            Airmatic
                        </li>
                        <li>
                            EDL
                        </li>
                        <li>
                            EBA
                        </li>
                        <li>
                            EBD
                        </li>
                        <li>
                            TCS
                        </li>
                        <li>
                            BAS
                        </li>
                        <li>
                            Distronic
                        </li>
                        <li>
                            Yokuş Kalkış Desteği
                        </li>
                        <li>
                            Zırhlı Araç
                        </li>
                        <li class="selected">
                            Gece Görüş
                        </li>
                        <li>
                            Şeritten Ayrılma İkazı
                        </li>
                        <li>
                            Şerit Değiştirme Yardımcısı
                        </li>
                        <li>
                            Hava Yastığı (Sürücü)
                        </li>
                        <li>
                            Hava Yastığı (Yolcu)
                        </li>
                        <li>
                            Hava Yastığı (Yan)
                        </li>
                        <li class="selected">
                            Hava Yastığı (Diz)
                        </li>
                        <li>
                            Hava Yastığı (Perde)
                        </li>
                        <li>
                            Hava Yastığı (Tavan)
                        </li>
                        <li>
                            Kör Nokta Uyarı Sistemi
                        </li>
                        <li>
                            Lastik Arıza Göstergesi
                        </li>
                        <li>
                            Yorgunluk Tespit Sistemi
                        </li>
                        <li>
                            Isofix
                        </li>
                        <li>
                            Alarm
                        </li>
                        <li>
                            Merkezi Kilit
                        </li>
                        <li>
                            Çocuk Kilidi
                        </li>
                        <li>
                            Immobilizer
                        </li>
                        <span class="clearfix"></span>
                    </ul>

                    <h3>İç Donanım</h3>
                    <ul>
                        <li>
                            Deri Koltuk
                        </li>
                        <li>
                            Kumaş Koltuk
                        </li>
                        <li>
                            Deri / Kumaş Koltuk
                        </li>
                        <li>
                            Elektrikli Ön Camlar
                        </li>
                        <li>
                            Elektrikli Arka Camlar
                        </li>
                        <li>
                            Klima (Analog)
                        </li>
                        <li>
                            Klima (Dijital)
                        </li>
                        <li>
                            Otm.Kararan Dikiz Aynası
                        </li>
                        <li>
                            Ön Kol Dayama
                        </li>
                        <li>
                            Arka Kol Dayama
                        </li>
                        <li>
                            Anahtarsız Giriş ve Çalıştırma
                        </li>
                        <li>
                            6 İleri Vites
                        </li>
                        <li class="selected">
                            7 İleri Vites
                        </li>
                        <li>
                            Hidrolik Direksiyon
                        </li>
                        <li>
                            Fonksiyonel Direksiyon
                        </li>
                        <li>
                            Ayarlanabilir Direksiyon
                        </li>
                        <li>
                            Deri Direksiyon
                        </li>
                        <li>
                            Ahşap Direksiyon
                        </li>
                        <li>
                            Isıtmalı Direksiyon
                        </li>
                        <li>
                            Koltuklar (Elektrikli)
                        </li>
                        <li>
                            Koltuklar (Hafızalı)
                        </li>
                        <li class="selected">
                            Koltuklar (Katlanır)
                        </li>
                        <li>
                            Koltuklar (Ön Isıtmalı)
                        </li>
                        <li>
                            Koltuklar (Arka Isıtmalı)
                        </li>
                        <li>
                            Koltuklar (Soğutmalı)
                        </li>
                        <li>
                            Hız Sabitleyici
                        </li>
                        <li>
                            Adaptive Cruise Control
                        </li>
                        <li>
                            Soğutmalı Torpido
                        </li>
                        <li>
                            Yol Bilgisayarı
                        </li>
                        <li>
                            Krom Kaplama
                        </li>
                        <li>
                            Ahşap Kaplama
                        </li>
                        <li>
                            Head-up Display
                        </li>
                        <li>
                            Start / Stop
                        </li>
                        <li class="selected">
                            Geri Görüş Kamerası
                        </li>
                        <li>
                            Ön Görüş Kamerası
                        </li>
                        <li>
                            3. Sıra Koltuk
                        </li>
                        <span class="clearfix"></span>
                    </ul>

                    <h3>Dış Donanım</h3>
                    <ul>
                        <li>
                            Hardtop
                        </li>
                        <li>
                            Far (LED)
                        </li>
                        <li>
                            Far (Halojen)
                        </li>
                        <li>
                            Far (Xenon)
                        </li>
                        <li>
                            Far (Bi Xenon)
                        </li>
                        <li>
                            Far (Sis)
                        </li>
                        <li>
                            Far (Adaptif)
                        </li>
                        <li>
                            Far Gece Sensörü
                        </li>
                        <li>
                            Far Yıkama
                        </li>
                        <li>
                            Aynalar (Elektrikli)
                        </li>
                        <li>
                            Aynalar (Otom.Katlanır)
                        </li>
                        <li>
                            Aynalar (Isıtmalı)
                        </li>
                        <li>
                            Aynalar (Hafızalı)
                        </li>
                        <li>
                            Park Sensörü (Arka)
                        </li>
                        <li>
                            Park Sensörü (Ön)
                        </li>
                        <li>
                            Park Asistanı
                        </li>
                        <li>
                            Alaşımlı Jant
                        </li>
                        <li>
                            Sunroof
                        </li>
                        <li>
                            Panoramik Cam Tavan
                        </li>
                        <li>
                            Yağmur Sensörü
                        </li>
                        <li>
                            Arka Cam Buz Çözücü
                        </li>
                        <li>
                            Panoramik Ön Cam
                        </li>
                        <li>
                            Romörk Çeki Demiri
                        </li>
                        <li>
                            Akıllı Bagaj Kapağı
                        </li>
                        <span class="clearfix"></span>
                    </ul>

                    <h3>Multimedya</h3>
                    <ul>
                        <li>
                            Radyo - Kasetçalar
                        </li>
                        <li>
                            Radyo - CD Çalar
                        </li>
                        <li>
                            Radyo - MP3 Çalar
                        </li>
                        <li>
                            Navigasyon
                        </li>
                        <li>
                            TV
                        </li>
                        <li>
                            Bluetooth - Telefon
                        </li>
                        <li>
                            USB / AUX
                        </li>
                        <li>
                            AUX
                        </li>
                        <li>
                            iPod Bağlantısı
                        </li>
                        <li class="selected">
                            6+ Hoparlör
                        </li>
                        <li>
                            CD Değiştirici
                        </li>
                        <li class="selected">
                            Arka Eğlence Paketi
                        </li>
                        <li>
                            DVD Değiştirici
                        </li>
                        <span class="clearfix"></span>
                    </ul>

                    <h3>Boyalı veya Değişen Parça</h3>
                    <div class="yellow-bg">
                        <strong>Aracın tüm parçaları orijinaldır. Değişen ve boyalı parçası bulunmamaktadır.</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-12">
            <div class="yourSecurity">
                <h4>Vasıta alırken/kiralarken bunlara dikkat edin!</h4>

                <p>
                    sahibinden.com, tüm kullanıcılar için tam bir güvenlik sağlamayı amaç edinmiştir. Siz de kendi
                    güvenliğiniz ve diğer kullanıcılar için, satın almak ya da kiralamak istediğiniz vasıta ile ilgili
                    kesin karar vermeden ön ödeme yapmamaya, avans ya da kapora ödememeye özen gösteriniz. İlan
                    sahiplerinin ilanlarda belirttiği herhangi bir bilgi ya da görselin gerçeği yansıtmadığını
                    düşünüyorsanız veya ilan sahiplerinin üyelik profillerindeki bilgilerin doğru olmadığını
                    düşünüyorsanız, lütfen bize <a href="/destek" rel="nofollow"
                                                   class="trackLinkClick trackId_vasita_uyari_haber_ver">haber
                        veriniz.</a></p>
            </div>
        </div>
        <div class="column-12">
            <div class="ui-panel">
                <div class="ui-panel-header">
                    <a href="#sponsored-links" class="ui-panel-toggle" onclick="togglePanel(this)">Sponsorlu
                        Bağlantı</a>
                </div>
                <div class="ui-panel-content" id="sponsored-links">
                    <div class="d-flex justify-content-between">
                        <img src="assets/images/sponsored-links.png" alt="Sponsored">
                    </div>
                </div>
            </div>
        </div>
        <div class="column-12">
            <p id="insurance-disclaimer">Tüm sigorta hizmetleri Koalay Com Sigorta ve Reasürans Brokerliği A.Ş.
                tarafından sağlanmaktadır.</p>
        </div>
    </div>
</div>
<!-- Body Ends-->

<div class="box-full pl-0 pr-0">
    <?php include 'includes/footer.inc.php'; ?>
</div>
</body>
</html>