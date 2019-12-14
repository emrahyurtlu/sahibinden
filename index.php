<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sahibinden Satılık, Kiralık, Emlak, Oto, Alışveriş Ürünleri</title>
    <link rel="shortcut icon" href="https://www.sahibinden.com/favicon.ico" type="image/x-icon"/>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/site.css">

    <script type="text/js" src="js/bootstrap.min.js"></script>
    <script type="text/js" src="js/site.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
</head>
<body>
<!-- Header Starts -->
<div class="container-fluid header-container">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand logo" href="/">Sahibinden</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <form class="form-inline" id="navbar-search-form">
                        <input class="form-control mr-sm-2" type="search" id="input-search" onfocus="search()"
                               placeholder="Kelime, ilan no veya mağaza adı ile ara" aria-label="Search">
                        <button class="" type="submit" id="btn-search-submit"></button>
                    </form>

                    <a href="https://www.sahibinden.com/arama/detayli" id="detailed-search-link">
                        Detaylı Arama</a>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link right-nav-link" href="#">Giriş Yap</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link right-nav-link" id="register-link" href="#">Üye Ol</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary" id="btn-ucretsiz-ilan" href="#">Ücretsiz* İlan Ver</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header Ends -->

<!-- Body Stars-->
<div class="container">
    <div class="row">
        <div class="col-12">
            <img src="images/ads/ad-1.png" class="ml-auto mr-auto d-block mt-2" alt="Ad 1">
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="mt-3"></div>
            <ul class="leftnav-category">
                <li class="leftnav-category-item category-acil-acil"><a href="#">Acil Acil</a></li>
                <li class="leftnav-category-item category-fiyati-dusen"><a href="#">Fiyatı Düşenler</a></li>
                <li class="leftnav-category-item category-son-48-saat"><a href="#">Son 48 Saat / 1 Hafta / 1 Ay</a></li>
            </ul>

            <ul class="leftnav-category">
                <li class="leftnav-category-item category-oto-360"><a href="#">Oto360 <span
                        class="new-category">yeni</span></a></li>
                <li class="leftnav-category-item category-emlak-360"><a href="#">Emlak360 <span class="new-category">yeni</span></a>
                </li>
            </ul>

            <!--Category Emlak-->
            <ul class="leftnav-category">
                <li class="leftnav-category-item category-emlak"><a href="#">Emlak</a> <span>(1.049.770)</span></li>
                <li class="leftnav-category-item"><a href="#">Konut</a> <span>(711.908)</span></li>
                <li class="leftnav-category-item"><a href="#">İşyeri</a> <span>(133.321)</span></li>
                <li class="leftnav-category-item"><a href="#">Arsa</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Projeler</a></li>
                <li class="leftnav-category-item"><a href="#">Bina</a> <span>(9.777)</span></li>
                <li class="leftnav-category-item"><a href="#">Devremülk</a> <span>(2.114)</span></li>
                <li class="leftnav-category-item"><a href="#">Turistik Tesis</a> <span>(1.762)</span></li>
            </ul>
            <!--Category Emlak-->

            <!--Category Vasıta-->
            <ul class="leftnav-category">
                <li class="leftnav-category-item category-vasita"><a href="#">Vasıta</a> <span>(439.867)</span></li>
                <li class="leftnav-category-item"><a href="#">Otomobil</a> <span>(257.523)</span></li>
                <li class="leftnav-category-item"><a href="#">Arazi, SUV & Pickup</a> <span>(36.061)</span></li>
                <li class="leftnav-category-item"><a href="#">Motosiklet</a> <span>(29.866)</span></li>
                <li class="leftnav-category-item"><a href="#">Minivan & Panelvan</a> <span>(58.965)</span></li>
                <li class="leftnav-category-item"><a href="#">Ticari Araçlar</a> <span>(35.356)</span></li>
                <li class="leftnav-category-item"><a href="#">Kiralık Araçlar</a> <span>(8.916)</span></li>
                <li class="leftnav-category-item"><a href="#">Deniz Araçları</a> <span>(4.115)</span></li>
                <li class="leftnav-category-item"><a href="#">Hasarlı Araçlar</a> <span>(4.365)</span></li>
                <li class="leftnav-category-item category-show-all"><a href="#">Tümünü Göster</a></li>
            </ul>
            <!--Category Vasıta-->

            <!--Category Yedek Parça, Aksesuar, Donanım & Tuning-->
            <ul class="leftnav-category">
                <li class="leftnav-category-item category-yedek-parca"><a href="#">Yedek Parça, Aksesuar, Donanım &
                    Tuning</a> <span>(1.827.171)</span></li>
                <li class="leftnav-category-item"><a href="#">Otomotiv Ekipmanları</a> <span>(711.908)</span></li>
                <li class="leftnav-category-item"><a href="#">Motosiklet Ekipmanları</a> <span>(133.321)</span></li>
                <li class="leftnav-category-item"><a href="#">Deniz Aracı Ekipmanları</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item category-show-all"><a href="#">Tümünü Göster</a></li>
            </ul>
            <!--Category Yedek Parça, Aksesuar, Donanım & Tuning-->

            <!--Category İkinci El ve Sıfır Alışveriş-->
            <ul class="leftnav-category">
                <li class="leftnav-category-item category-ikinci-el-ve-sifir"><a href="#">İkinci El ve Sıfır
                    Alışveriş</a> <span>(1.827.171)</span></li>
                <li class="leftnav-category-item"><a href="#">Bilgisayar</a> <span>(711.908)</span></li>
                <li class="leftnav-category-item"><a href="#">Cep Telefonu</a> <span>(133.321)</span></li>
                <li class="leftnav-category-item"><a href="#">Fotoğraf & Kamera</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Ev Dekorasyon</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Ev Elektroniği</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Elektrikli Ev Aletleri</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Giyim & Aksesuar</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Saat</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Anne & Bebek</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Kişisel Bakım & Kozmetik</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Hobi & Oyuncak</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Oyun & Konsol</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Kitap, Dergi & Film</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Müzik</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Spor</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Takı, Mücevher & Altın</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Koleksiyon</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Antika</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Bahçe & Yapı Market</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Teknik Elektronik</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Ofis & Kırtasiye</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Yiyecek & İçecek</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Diğer Her Şey</a> <span>(190.886)</span></li>
            </ul>
            <!--Category İkinci El ve Sıfır Alışveriş-->

            <!--Category İş Makineleri & Sanayi-->
            <ul class="leftnav-category">
                <li class="leftnav-category-item category-is-makineleri"><a href="#">İş Makineleri & Sanayi</a> <span>(1.827.171)</span>
                </li>
                <li class="leftnav-category-item"><a href="#">İş Makineleri</a> <span>(711.908)</span></li>
                <li class="leftnav-category-item"><a href="#">Tarım Makineleri</a> <span>(133.321)</span></li>
                <li class="leftnav-category-item"><a href="#">Sanayi</a> <span>(190.886)</span></li>
                <li class="leftnav-category-item"><a href="#">Elektrik & Enerji</a> <span>(190.886)</span></li>
            </ul>
            <!--Category İş Makineleri & Sanayi-->

            <!--Category Ustalar ve Hizmetler-->
            <ul class="leftnav-category">
                <li class="leftnav-category-item category-ustalar-hizmetler"><a href="#">Ustalar ve Hizmetler</a> <span>(1.827.171)</span>
                </li>
                <li class="leftnav-category-item"><a href="#">Ev Tadilat & Dekorasyon</a></li>
                <li class="leftnav-category-item"><a href="#">Nakliye</a></li>
                <li class="leftnav-category-item"><a href="#">Araç Servis & Bakım</a></li>
                <li class="leftnav-category-item category-show-all"><a href="#">Tümünü Göster</a></li>
            </ul>
            <!--Category Ustalar ve Hizmetler-->

            <!--Category Özel Ders Verenler-->
            <ul class="leftnav-category">
                <li class="leftnav-category-item category-ozel-ders"><a href="#">Özel Ders Verenler</a>
                    <span>(8.275)</span></li>
                <li class="leftnav-category-item"><a href="#">Lise & Üniversite Hazırlık</a></li>
                <li class="leftnav-category-item"><a href="#">İlköğretim</a></li>
                <li class="leftnav-category-item"><a href="#">Yabancı Dil</a></li>
                <li class="leftnav-category-item category-show-all"><a href="#">Tümünü Göster</a></li>
            </ul>
            <!--Category Özel Ders Verenler-->

            <!--Category İş İlanları-->
            <ul class="leftnav-category">
                <li class="leftnav-category-item category-is-ilanlari"><a href="#">İş İlanları</a> <span>(12.486)</span>
                </li>
                <li class="leftnav-category-item"><a href="#">Avukatlık & Hukuki Danışmanlık</a></li>
                <li class="leftnav-category-item"><a href="#">Eğitim</a></li>
                <li class="leftnav-category-item"><a href="#">Eğlence ve Aktiviteler</a></li>
                <li class="leftnav-category-item"><a href="#">Güzellik ve Bakım</a></li>
                <li class="leftnav-category-item"><a href="#">IT ve Yazılım Geliştirme</a></li>
                <li class="leftnav-category-item"><a href="#">İnsan Kaynakları</a></li>
                <li class="leftnav-category-item category-show-all"><a href="#">Tümünü Göster</a></li>
            </ul>
            <!--Category İş İlanları-->

            <!--Category Yardımcı Arayanlar-->
            <ul class="leftnav-category">
                <li class="leftnav-category-item category-yardimci-arayanlar"><a href="#">Yardımcı Arayanlar</a> <span>(1.240)</span>
                </li>
                <li class="leftnav-category-item"><a href="#">Bebek & Çocuk Bakıcısı</a></li>
                <li class="leftnav-category-item"><a href="#">Yaşlı & Hasta Bakıcısı</a></li>
                <li class="leftnav-category-item"><a href="#">Temizlikçi & Ev İşlerine Yardımcı</a></li>
            </ul>
            <!--Category Yardımcı Arayanlar-->

            <!--Category Hayvanlar Alemi-->
            <ul class="leftnav-category">
                <li class="leftnav-category-item category-hayvanlar-alemi"><a href="#">Hayvanlar Alemi</a> <span>(87.697)</span>
                </li>
                <li class="leftnav-category-item"><a href="#">Evcil Hayvanlar</a></li>
                <li class="leftnav-category-item"><a href="#">Akvaryum Balıkları</a></li>
                <li class="leftnav-category-item"><a href="#">Aksesuarlar</a></li>
                <li class="leftnav-category-item"><a href="#">Bakım Ürünleri</a></li>
                <li class="leftnav-category-item"><a href="#">Yem & Mama</a></li>
                <li class="leftnav-category-item"><a href="#">Kümes Hayvanları</a></li>
                <li class="leftnav-category-item"><a href="#">Büyükbaş Hayvanlar</a></li>
                <li class="leftnav-category-item"><a href="#">Küçükbaş Hayvanlar</a></li>
                <li class="leftnav-category-item category-show-all"><a href="#">Tümünü Göster</a></li>
            </ul>
            <!--Category Hayvanlar Alemi-->

            <h3 class="category-title">Seçtiklerimiz</h3>
            <ul class="leftnav-category">
                <li class="leftnav-category-item category-hikayeni-paylas"><a href="#">Hikayeni Paylaş</a></li>
                <li class="leftnav-category-item category-efsane-ilanlar"><a href="#">Efsane İlanlar</a></li>
                <li class="leftnav-category-item category-ilginç-ilanlar"><a href="#">İlginç İlanlar</a></li>
            </ul>

            <h3 class="category-title">Haberler
                <small>
                    <a href="#">Tüm Haberler</a>
                </small>
            </h3>
            <ul class="leftnav-category">
                <li><a href="#" style="font-weight: normal">ECHO Awards'tan sahibinden.com'a 3 ödül</a></li>
                <li><a href="#">sahibinden.com 6 Kategoride Altın Örümcek Ödülü'nün Sahibi Oldu!</a></li>
            </ul>
        </div>
        <div class="col-9">
            <div class="mt-3"></div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_1.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_2.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_3.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_4.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_5.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_6.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_7.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_8.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_9.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_10.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_11.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_12.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_13.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_14.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_15.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_1.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_2.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_3.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_4.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_5.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_6.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_7.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_8.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_9.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_10.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_11.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_12.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_13.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_14.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_15.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_1.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_2.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_3.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_4.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_5.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_6.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_7.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_8.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_9.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_10.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_11.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_12.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_13.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_14.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_15.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_1.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_2.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_3.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_4.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_5.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_6.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_7.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_8.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_9.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_10.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <a href="#"><img src="images/thumbs/thmb_11.jpg" class="img-fluid" alt="Image"></a>
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="row">
                <div class="com-12">
                    <img src="images/ads/ad-2.png" class="justify-content-center" alt="Ad 2">
                </div>
            </div>

            <h3 class="category-title font-weight-bold mt-3">
                Projeler
                <small>
                    <a href="#">Tüm projeleri göster</a>
                </small>
            </h3>

            <div class="projectCard float-left mr-2 mb-2">
                <a href="#"><img src="images/projects/project1.jpg" class="img-fluid" alt="Image"></a>
                <a href="#" class="font-weight-bold d-block">Avcılar Exclusive (İzmir / Bayraklı)</a>
                <p class="d-block mb-0"><span class="font-weight-bold">m<sup>2</sup>:</span> 100 m<sup>2</sup> - 173
                    m<sup>2</sup></p>
                <p class="d-block mb-0"><span class="font-weight-bold">Teslim Tarihi:</span> Haziran 2021</p>
            </div>

            <div class="projectCard float-left mr-2 mb-2">
                <a href="#"><img src="images/projects/project2.jpg" class="img-fluid" alt="Image"></a>
                <a href="#" class="font-weight-bold d-block">Torun Center (İstanbul / Şişli)</a>
                <p class="d-block mb-0"><span class="font-weight-bold">m<sup>2</sup>:</span> 100 m<sup>2</sup> - 173
                    m<sup>2</sup></p>
                <p class="d-block mb-0"><span class="font-weight-bold">Teslim Tarihi:</span> Hemen Teslim</p>
            </div>

            <div class="clearfix"></div>


            <h3 class="category-title font-weight-bold mt-3">
                İlginç ilanlar
                <small>
                    <a href="#">Tüm ilginç ilanları göster</a>
                </small>
            </h3>
            <div class="width-100 productCard float-left mr-3 mb-3">
                <img src="images/thumbs/interesting/thmb_144190656dfv.jpg" class="img-fluid" alt="Image">
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <img src="images/thumbs/interesting/thmb_373185768lb6.jpg" class="img-fluid" alt="Image">
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <img src="images/thumbs/interesting/thmb_397694640n4m.jpg" class="img-fluid" alt="Image">
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <img src="images/thumbs/interesting/thmb_655603344p63.jpg" class="img-fluid" alt="Image">
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <img src="images/thumbs/interesting/thmb_755149533mye.jpg" class="img-fluid" alt="Image">
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <img src="images/thumbs/interesting/thmb_37114466063f.jpg" class="img-fluid" alt="Image">
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <div class="width-100 productCard float-left mr-3 mb-3">
                <img src="images/thumbs/interesting/thmb_70933087579r.jpg" class="img-fluid" alt="Image">
                <a href="#">2015 Highline Dsg...</a>
            </div>

            <h3 class="category-title font-weight-bold mt-3">
                Popüler ürünler
            </h3>
            <div class="height-150 float-left mr-3 mb-3" id="home-popular-products">
                <ul>
                    <li><a href="#"><p>Dijital Fotoğraf Makinesi</p></a></li>
                    <li><a href="#"><p>Oyun Konsolları</p></a></li>
                    <li><a href="#"><p>Küçük Ev Aletleri</p></a></li>
                    <li><a href="#"><p>Bisiklet</p></a></li>
                    <li><a href="#"><p>4K Televizyonlar</p></a></li>
                </ul>
            </div>

            <div class="row">
                <div class="com-12">
                    <img src="images/ads/ad-3.png" class="justify-content-center" alt="Ad 3">
                </div>
            </div>

            <h3 class="category-title font-weight-bold mt-3">
                Popüler Aramalar
            </h3>

            <ul class="list-unstyled">
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">İkinci el</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span
                        class="badge badge-home">iPhone 11 Pro Max</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">iPhone 11 Pro</span></a>
                </li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Redmi Note 7</span></a>
                </li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Apple Watch S5</span></a>
                </li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">P30 Lite</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">İkinci El Araba</span></a>
                </li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">DJI Drone</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Bebek Arabası</span></a>
                </li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Lastik Fiyatları</span></a>
                </li>
            </ul>

            <h3 class="category-title font-weight-bold mt-3">
                En Çok Aranan Hizmetler
            </h3>

            <ul class="list-unstyled">
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Boyacı</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span
                        class="badge badge-home">Evden Eve Nakliye</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Mantolama</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Su Tesisatı</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span
                        class="badge badge-home">Doğal Gaz Tesisatı</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Oto Boya</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Oto Tamiri</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Elektrikçi</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Çilingir</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Plaka</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Parke</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Mutfak Yenileme</span></a>
                </li>
            </ul>

            <h3 class="category-title font-weight-bold mt-3">
                En Çok Aranan İş İlanları
            </h3>

            <ul class="list-unstyled">
                <li class="list-inline-item mb-2"><a href="#"><span
                        class="badge badge-home">Restoran ve Konaklama</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span
                        class="badge badge-home">Mağaza ve Perakendecilik</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Mantolama</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span
                        class="badge badge-home">Tekstil ve Konfeksiyon</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Ofis Elemanı</span></a>
                </li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Satış</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span
                        class="badge badge-home">Müşteri Hizmetleri</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">İstanbul İş İlanları</span></a>
                </li>
                <li class="list-inline-item mb-2"><a href="#"><span
                        class="badge badge-home">Ankara İş İlanları</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span
                        class="badge badge-home">İzmir İş İlanları</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span
                        class="badge badge-home">Adana İş İlanları</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span
                        class="badge badge-home">Bursa İş İlanları</span></a></li>
                <li class="list-inline-item mb-2"><a href="#"><span class="badge badge-home">Antalya İş İlanları</span></a>
                </li>
            </ul>

        </div>
    </div>
</div>
<!-- Body Ends-->

<div class="container-fluid pl-0 pr-0">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mt-4"></div>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <ul class="list-unstyled ml-2 mr-2 footer-nav">
                                    <li><h2>Kurumsal</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Hakkımızda</a></li>
                                            <li><a href="#">Medya İletişimi ve Görseller</a></li>
                                            <li><a href="#">İnsan Kaynakları</a></li>
                                            <li><a href="#">İletişim</a></li>
                                        </ul>
                                    </li>
                                </ul>

                                <ul class="list-unstyled ml-2 mr-2 footer-nav">
                                    <li><h2>Hizmetlerimiz</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Doping</a></li>
                                            <li><a href="#">Güvenli e-Ticaret (GeT)</a></li>
                                            <li><a href="#">Toplu Ürün Girişi</a></li>
                                            <li><a href="#">Reklam</a></li>
                                            <li><a href="#">sahibinden Doğal Reklam</a></li>
                                            <li><a href="#">Mobil</a></li>
                                        </ul>
                                    </li>
                                </ul>

                                <ul class="list-unstyled ml-2 mr-2 footer-nav">
                                    <li><h2>Mağazalar</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Mağazam</a></li>
                                            <li><a href="#">Mağaza Açmak İstiyorum</a></li>
                                            <li><a href="#">Neden Mağaza?</a></li>
                                            <li><a href="#">Maliyeti Nedir?</a></li>
                                            <li><a href="#">Emlak Ofisim</a></li>
                                            <li><a href="#">Galerim</a></li>
                                        </ul>
                                    </li>
                                </ul>

                                <ul class="list-unstyled ml-2 mr-2 footer-nav">
                                    <li><h2>Gizlilik ve Kullanım</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Güvenli Alışverişin İpuçları</a></li>
                                            <li><a href="#">Sözleşmeler ve Kurallar</a></li>
                                            <li><a href="#">Üyelik Sözleşmesi</a></li>
                                            <li><a href="#">Kullanım Koşulları</a></li>
                                            <li><a href="#">Site Haritası</a></li>
                                            <li><a href="#">Kişisel Verilerin Korunması</a></li>
                                            <li><a href="#">Yardım ve İşlem Rehberi</a></li>
                                        </ul>
                                    </li>
                                </ul>

                                <ul class="list-unstyled ml-2 mr-2 footer-nav">
                                    <li><h2>Bizi Takip Edin</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="https://www.facebook.com/sahibindencom" target="_blank">Facebook</a>
                                            </li>
                                            <li><a href="#" target="_blank">Twitter</a></li>
                                            <li><a href="#" target="_blank">Linkedin</a></li>
                                            <li><a href="#" target="_blank">Instagram</a></li>
                                            <li><a href="#" target="_blank">Youtube</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="contact-menu list-unstyled">
                        <li class="call-center">
                            <p class="mb-0">7/24 Müşteri Hizmetleri</p>
                            <span>0 850 222 44 44</span>
                        </li>
                        <li class="help-center">
                            <p class="mb-0">Yardım Merkezi</p>
                            <a href="https://yardim.sahibinden.com/hc/tr">yardim.sahibinden.com</a>
                        </li>
                        <li class="store-logos">
                            <a target="_blank" href="#"
                               class="store-logo googleplay mr-1"></a>
                            <a target="_blank"
                               href="#"
                               class="store-logo apple"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="warningText warning-text">
                        sahibinden.com'da yer alan kullanıcıların oluşturduğu tüm içerik, görüş ve bilgilerin doğruluğu, eksiksiz ve değişmez olduğu, yayınlanması ile ilgili yasal yükümlülükler içeriği oluşturan kullanıcıya aittir. Bu içeriğin, görüş ve bilgilerin yanlışlık, eksiklik veya yasalarla düzenlenmiş kurallara aykırılığından sahibinden.com hiçbir şekilde sorumlu değildir. Sorularınız için ilan sahibi ile irtibata geçebilirsiniz. <br> Yer Sağlayıcı Belge No : 581</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="copyright">
                        Copyright © 2000-2019 sahibinden.com</p>
                </div>
                <div class="col-6">
                    <a rel="nofollow" href="#" title="English" class="language-selection-link ">English</a>
                    <p class="d-inline float-right copyright">(*) Bireysel üyeler için, limitli adetlerde, belirli kategorilerde ve belirli kampanyalarda</p>

                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>