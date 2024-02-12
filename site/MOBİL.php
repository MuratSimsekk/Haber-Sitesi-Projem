<?php
    include("../admin/php/baglanti.php");
    include("../site/Header.php");
 ?>

</header>
<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix pt-25 gray-bg">
        <div class="container">
            <div class="trending-main">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="slider-active">
                       
                <?php
    $Sql = $baglanti->query("SELECT * FROM haberler ORDER BY ID"); /*DESC LIMIT 2*/
    
    while($sonuc = $Sql->fetch_assoc()) {
        $kategori = $sonuc['KATEGORI'];
        $dosyaAdi = basename($_SERVER['PHP_SELF']);
        
        // Dosya adının index.php olup olmadığını kontrol et
        if ($dosyaAdi == 'index.php') {
            echo ' 
            <!-- Single -->
            <div class="single-slider">
                <div class="trending-top mb-30">
                    <div class="trend-top-img" href="icerik.php?ID='.$sonuc['ID'].'">  <!--haber baslık -->
                        <img alt="" src="'.$sonuc['KAPAKRESMI'].'"> <!--haber kapakres -->
                        <div class="trend-top-cap">
                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">' . $sonuc['KATEGORI'] . '</span>                                            <h2><a href="icerik.php?ID='.$sonuc['ID'].'">'.$sonuc['BASLIK'].'</a></h2>
                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single -->
            ';
        } else {
            // Dosya adından '.php' uzantısından önceki kelimeyi al
            $dosyaKelime = substr($dosyaAdi, 0, strpos($dosyaAdi, '.'));
            
            // Kategori ile dosya kelimesini karşılaştır
            if ($kategori == $dosyaKelime) {
                echo ' 
                <!-- Single -->
                <div class="single-slider">
                    <div class="trending-top mb-30">
                        <div class="trend-top-img" href="icerik.php?ID='.$sonuc['ID'].'">  <!--haber baslık -->
                            <img alt="" src="'.$sonuc['KAPAKRESMI'].'"> <!--haber kapakres -->
                            <div class="trend-top-cap">
                                <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">' . $sonuc['KATEGORI'] . '</span>                                            <h2><a href="icerik.php?ID='.$sonuc['ID'].'">'.$sonuc['BASLIK'].'</a></h2>
                                <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                ';
            }
        }
    }
?>


                       <?php
    $Sql = $baglanti->query("SELECT * FROM haberler ORDER BY ID"); /*DESC LIMIT 2*/
    
    while($sonuc = $Sql->fetch_assoc()) {
        $kategori = $sonuc['KATEGORI'];
        $dosyaAdi = basename($_SERVER['PHP_SELF']);
        
        // Dosya adının index.php olup olmadığını kontrol et
        if ($dosyaAdi == 'index.php') {
            echo ' 
            <!-- Single -->
            <div class="single-slider">
                <div class="trending-top mb-30">
                    <div class="trend-top-img" href="icerik.php?ID='.$sonuc['ID'].'">  <!--haber baslık -->
                        <img alt="" src="'.$sonuc['KAPAKRESMI'].'"> <!--haber kapakres -->
                        <div class="trend-top-cap">
                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">' . $sonuc['KATEGORI'] . '</span>                                            <h2><a href="icerik.php?ID='.$sonuc['ID'].'">'.$sonuc['BASLIK'].'</a></h2>
                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single -->
            ';
        } else {
            // Dosya adından '.php' uzantısından önceki kelimeyi al
            $dosyaKelime = substr($dosyaAdi, 0, strpos($dosyaAdi, '.'));
            
            // Kategori ile dosya kelimesini karşılaştır
            if ($kategori == $dosyaKelime) {
                echo ' 
                <!-- Single -->
                <div class="single-slider">
                    <div class="trending-top mb-30">
                        <div class="trend-top-img" href="icerik.php?ID='.$sonuc['ID'].'">  <!--haber baslık -->
                            <img alt="" src="'.$sonuc['KAPAKRESMI'].'"> <!--haber kapakres -->
                            <div class="trend-top-cap">
                                <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">' . $sonuc['KATEGORI'] . '</span>                                            <h2><a href="icerik.php?ID='.$sonuc['ID'].'">'.$sonuc['BASLIK'].'</a></h2>
                                <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                ';
            }
        }
    }
?>
                            <!-- Single -->
                   <?php
    $Sql = $baglanti->query("SELECT * FROM haberler ORDER BY ID"); /*DESC LIMIT 2*/
    
    while($sonuc = $Sql->fetch_assoc()) {
        $kategori = $sonuc['KATEGORI'];
        $dosyaAdi = basename($_SERVER['PHP_SELF']);
        
        // Dosya adının index.php olup olmadığını kontrol et
        if ($dosyaAdi == 'index.php') {
            echo ' 
            <!-- Single -->
            <div class="single-slider">
                <div class="trending-top mb-30">
                    <div class="trend-top-img" href="icerik.php?ID='.$sonuc['ID'].'">  <!--haber baslık -->
                        <img alt="" src="'.$sonuc['KAPAKRESMI'].'"> <!--haber kapakres -->
                        <div class="trend-top-cap">
                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">' . $sonuc['KATEGORI'] . '</span>                                            <h2><a href="icerik.php?ID='.$sonuc['ID'].'">'.$sonuc['BASLIK'].'</a></h2>
                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single -->
            ';
        } else {
            // Dosya adından '.php' uzantısından önceki kelimeyi al
            $dosyaKelime = substr($dosyaAdi, 0, strpos($dosyaAdi, '.'));
            
            // Kategori ile dosya kelimesini karşılaştır
            if ($kategori == $dosyaKelime) {
                echo ' 
                <!-- Single -->
                <div class="single-slider">
                    <div class="trending-top mb-30">
                        <div class="trend-top-img" href="icerik.php?ID='.$sonuc['ID'].'">  <!--haber baslık -->
                            <img alt="" src="'.$sonuc['KAPAKRESMI'].'"> <!--haber kapakres -->
                            <div class="trend-top-cap">
                                <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">' . $sonuc['KATEGORI'] . '</span>                                            <h2><a href="icerik.php?ID='.$sonuc['ID'].'">'.$sonuc['BASLIK'].'</a></h2>
                                <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                ';
            }
        }
    }
?>
                        </div>
                    </div>
                    <!-- Right content -->

                    <div class="col-lg-4">
                            <!-- Trending Top -->
                        <div class="row">
                       
<style>
    .trending-top {
        margin-bottom: 10px; /* Yukarı doğru 20 piksel taşıma */
    }
</style>
                        <?php
    $page = basename($_SERVER['PHP_SELF']); // Mevcut sayfanın adını alın
    $Sql = "";

    if ($page == 'index.php') {
        // index.php sayfası için filtreleme yapmadan verileri çekin
        $Sql = $baglanti->query("SELECT * FROM haberler ORDER BY ID ASC LIMIT 1");
    } else {
        // Diğer sayfalar için KATEGORI alanıyla eşleşen verileri çekin
        $kategori = str_replace('.php', '', $page); // Sayfa adından '.php' uzantısını kaldırın
        $Sql = $baglanti->query("SELECT * FROM haberler WHERE KATEGORI = '$kategori' ORDER BY ID ASC LIMIT 1");
    }

    while ($sonuc = $Sql->fetch_assoc()) {
        echo '
        <!-- Single -->
        <div class="single-slider">
            <div class="trending-top mb-30">
                <div class="trend-top-img" href="icerik.php?ID=' . $sonuc['ID'] . '">  <!--haber baslık -->
                    <img alt="" src="' . $sonuc['KAPAKRESMI'] . '"> <!--haber kapakres -->
                    <div class="trend-top-cap">
                        <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">' . $sonuc['KATEGORI'] . '</span>
                        <h2><a href="icerik.php?ID=' . $sonuc['ID'] . '">' . $sonuc['BASLIK'] . '</a></h2>
                        <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single -->
        ';
    }
?>   


                            <?php
    $page = basename($_SERVER['PHP_SELF']); // Mevcut sayfanın adını alın
    $Sql = "";

    if ($page == 'index.php') {
        // index.php sayfası için filtreleme yapmadan verileri çekin
        $Sql = $baglanti->query("SELECT * FROM haberler ORDER BY ID ASC LIMIT 1");
    } else {
        // Diğer sayfalar için KATEGORI alanıyla eşleşen verileri çekin
        $kategori = str_replace('.php', '', $page); // Sayfa adından '.php' uzantısını kaldırın
        $Sql = $baglanti->query("SELECT * FROM haberler WHERE KATEGORI = '$kategori' ORDER BY ID ASC LIMIT 1");
    }

    while ($sonuc = $Sql->fetch_assoc()) {
        echo '
        <!-- Single -->
        <div class="single-slider">
            <div class="trending-top mb-30">
                <div class="trend-top-img" href="icerik.php?ID=' . $sonuc['ID'] . '">  <!--haber baslık -->
                    <img alt="" src="' . $sonuc['KAPAKRESMI'] . '"> <!--haber kapakres -->
                    <div class="trend-top-cap">
                        <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">' . $sonuc['KATEGORI'] . '</span>
                        <h2><a href="icerik.php?ID=' . $sonuc['ID'] . '">' . $sonuc['BASLIK'] . '</a></h2>
                        <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single -->
        ';
    }
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="whats-news-wrapper">
                    <!-- Heading & Nav Button -->
                    <div class="row justify-content-between align-items-end mb-15">
                        <div class="col-xl-4">
                            <div class="section-tittle mb-30">
                                <h3>GÜNDEM</h3>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-9">
   <div class="properties__button">
    <!--Nav Button  -->                                            
    <nav>                                                 
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <?php
            // Veritabanına bağlantıyı sağla
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "habersite";
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Kategorileri veritabanından çek
            $sql = "SELECT * FROM kategoriler";
            $result = $conn->query($sql);

            // Kategorileri ekle
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $sayfaSec = $row["SAYFASEC"];
                    $sayfaSecWithPHP = $sayfaSec . ".php";
                    echo '<a class="nav-item nav-link" id="nav-' . $row["KATEGORIADI"] . '-tab" data-toggle="tab" href="' . $row["SAYFASEC"] . 'php'.'" role="tab" aria-controls="nav-' . $row["KATEGORIADI"] . '" aria-selected="false">' . $row["KATEGORIADI"] . '</a>';
                }
            }

            // Veritabanı bağlantısını kapat
            $conn->close();
            ?>
        </div>
    </nav>
    <!--End Nav Button  -->
</div>


</div>

                    </div>
                    <!-- Tab content -->
                    <div class="row">
                        <div class="col-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- card one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">       
                                    <div class="row">

                                        <!-- Left Details Caption -->

                                         <?php
    $page = basename($_SERVER['PHP_SELF']); // Mevcut sayfanın adını alın
    $Sql = "";

    if ($page == 'index.php') {
        // index.php sayfası için filtreleme yapmadan verileri çekin
        $Sql = $baglanti->query("SELECT * FROM haberler ORDER BY ID ASC LIMIT 1");
    } else {
        // Diğer sayfalar için KATEGORI alanıyla eşleşen verileri çekin
        $kategori = str_replace('.php', '', $page); // Sayfa adından '.php' uzantısını kaldırın
        $Sql = $baglanti->query("SELECT * FROM haberler WHERE KATEGORI = '$kategori' ORDER BY ID ASC LIMIT 1");
    }

    while ($sonuc = $Sql->fetch_assoc()) {
                            echo '
                             <div class="col-xl-6 col-lg-12">
                                            <div class="whats-news-single mb-40 mb-40">
                                                <div class="whates-img" href="icerik.php?ID='.$sonuc['ID'].'">
                                                    <img src="'.$sonuc['KAPAKRESMI'].'"  alt="">
                                                </div>
                                                <div class="whates-caption">
                                                    <h4><a href="icerik.php?ID='.$sonuc['ID'].'">'.$sonuc['BASLIK'].'</a></h4>
                                                    <!--<span>by Alice cloe   -   Jun 19, 2020</span>-->
                                                    
                                                </div>
                                            </div>
                                        </div>
                            ';

                             }

                             ?>
                                        <!-- Right single caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                <!-- single -->
                         <?php
                        $page = basename($_SERVER['PHP_SELF']); // Mevcut sayfanın adını alın
                        $Sql = "";

                        if ($page == 'index.php') {
                            // index.php sayfası için filtreleme yapmadan verileri çekin
                            $Sql = $baglanti->query("SELECT * FROM haberler ORDER BY ID ASC LIMIT 3");
                        } else {
                            // Diğer sayfalar için KATEGORI alanıyla eşleşen verileri çekin
                            $kategori = str_replace('.php', '', $page); // Sayfa adından '.php' uzantısını kaldırın
                            $Sql = $baglanti->query("SELECT * FROM haberler WHERE KATEGORI = '$kategori' ORDER BY ID ASC LIMIT 3");
                        }

                        while ($sonuc = $Sql->fetch_assoc()) {
                            echo '
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img" href="icerik.php?ID='.$sonuc['ID'].'">
                                                            <img src="'.$sonuc['KAPAKRESMI'].'" alt="" width="125" height="100">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">' . $sonuc['KATEGORI'] . '</span>
                                                            <h4><a href="icerik.php?ID='.$sonuc['ID'].'">'.$sonuc['BASLIK'].'</a></h4> 
                                                        </div>
                                                    </div>
                                                </div>
                             ';

                             }
                               ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card two -->
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="row">
                                        <!-- Left Details Caption -->
                                        <div class="col-xl-6">
                                            <div class="whats-news-single mb-40">
                                                <div class="whates-img">
                                                    <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                                </div>
                                                <div class="whates-caption">
                                                    <h4><a href="#">Secretart for Economic Air
                                                        plane that looks like</a></h4>
                                                    <span>by Alice cloe   -   Jun 19, 2020</span>
                                                    <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Right single caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                <!-- single -->
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img1.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img3.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorg">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorr">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card three -->
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="row">
                                        <!-- Left Details Caption -->
                                        <div class="col-xl-6">
                                            <div class="whats-news-single mb-40">
                                                <div class="whates-img">
                                                    <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                                </div>
                                                <div class="whates-caption">
                                                    <h4><a href="#">Secretart for Economic Air
                                                        plane that looks like</a></h4>
                                                    <span>by Alice cloe   -   Jun 19, 2020</span>
                                                    <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Right single caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                <!-- single -->
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img1.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img3.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorg">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorr">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card fure -->
                                <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                    <div class="row">
                                        <!-- Left Details Caption -->
                                        <div class="col-xl-6">
                                            <div class="whats-news-single mb-40">
                                                <div class="whates-img">
                                                    <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                                </div>
                                                <div class="whates-caption">
                                                    <h4><a href="#">Secretart for Economic Air
                                                        plane that looks like</a></h4>
                                                    <span>by Alice cloe   -   Jun 19, 2020</span>
                                                    <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Right single caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                <!-- single -->
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img1.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img3.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorg">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorr">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card Five -->
                                <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                                    <div class="row">
                                        <!-- Left Details Caption -->
                                        <div class="col-xl-6">
                                            <div class="whats-news-single mb-40">
                                                <div class="whates-img">
                                                    <img src="assets/img/gallery/whats_news_details1.png" alt="">
                                                </div>
                                                <div class="whates-caption">
                                                    <h4><a href="#">Secretart for Economic Air
                                                        plane that looks like</a></h4>
                                                    <span>by Alice cloe   -   Jun 19, 2020</span>
                                                    <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Right single caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                <!-- single -->
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img1.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img3.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorg">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorr">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- End Nav Card -->
                        </div>
                    </div>
                </div>
                <!-- Banner -->
                <div class="banner-one mt-20 mb-30">
                    <img src="assets/img/gallery/body_card1.png" alt="">
                </div>
                </div>
                <div class="col-lg-4">
              
                    <!-- Most Recent Area -->
                    <div class="most-recent-area">
                        <!-- Section Tittle -->
                        <div class="small-tittle mb-20">
                            <h4>En Yeni</h4>
                        </div>
                        <!-- Details -->
                            <?php
                        $page = basename($_SERVER['PHP_SELF']); // Mevcut sayfanın adını alın
                        $Sql = "";

                        if ($page == 'index.php') {
                            // index.php sayfası için filtreleme yapmadan verileri çekin
                            $Sql = $baglanti->query("SELECT * FROM haberler ORDER BY ID ASC LIMIT 1");
                        } else {
                            // Diğer sayfalar için KATEGORI alanıyla eşleşen verileri çekin
                            $kategori = str_replace('.php', '', $page); // Sayfa adından '.php' uzantısını kaldırın
                            $Sql = $baglanti->query("SELECT * FROM haberler WHERE KATEGORI = '$kategori' ORDER BY ID ASC LIMIT 1");
                        }

                        while ($sonuc = $Sql->fetch_assoc()) {
                            echo '
                        <div class="most-recent mb-40">
                            <div class="most-recent-img" href="icerik.php?ID='.$sonuc['ID'].'">
                                <img src="'.$sonuc['KAPAKRESMI'].'">
                                <div class="most-recent-cap">
                                    <span class="bgbeg">' . $sonuc['KATEGORI'] . '</span>
                                    <h4><a href="icerik.php?ID='.$sonuc['ID'].'">'.$sonuc['BASLIK'].'</a></h4>
                                    <p>Jhon  |  2 hours ago</p>
                                </div>
                            </div>
                        </div>

                            ';

                             }

                             ?>
                        <!-- Single -->
                         <?php
                        $page = basename($_SERVER['PHP_SELF']); // Mevcut sayfanın adını alın
                        $Sql = "";

                        if ($page == 'index.php') {
                            // index.php sayfası için filtreleme yapmadan verileri çekin
                            $Sql = $baglanti->query("SELECT * FROM haberler ORDER BY ID ASC LIMIT 2");
                        } else {
                            // Diğer sayfalar için KATEGORI alanıyla eşleşen verileri çekin
                            $kategori = str_replace('.php', '', $page); // Sayfa adından '.php' uzantısını kaldırın
                            $Sql = $baglanti->query("SELECT * FROM haberler WHERE KATEGORI = '$kategori' ORDER BY ID ASC LIMIT 2");
                        }

                        while ($sonuc = $Sql->fetch_assoc()) {
                            echo '

                        <div class="most-recent-single">
                            <div class="most-recent-images" href="icerik.php?ID='.$sonuc['ID'].'">
                                <img src="'.$sonuc['KAPAKRESMI'].'" alt="" width="150px" height="100px">
                            </div>
                            <div class="most-recent-capt">
                                <h4><a href="icerik.php?ID='.$sonuc['ID'].'">'.$sonuc['BASLIK'].'</a></h4>
                                <p>Jhon  |  2 hours ago</p>
                            </div>
                        </div>
                        ';

                             }

                             ?>
                             
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->
    <!--   Weekly2-News start -->
    <div class="weekly2-news-area pt-50 pb-30 gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <div class="row">
                    <!-- Banner -->
                    <div class="col-lg-3">
                        <div class="home-banner2 d-none d-lg-block">
                            <img src="assets/img/gallery/body_card2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="slider-wrapper">
                            <!-- section Tittle -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="small-tittle mb-30">
                                        <h4>En Popüler</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="weekly2-news-active d-flex">
                                        <!-- Single -->
                                        <?php
                        $page = basename($_SERVER['PHP_SELF']); // Mevcut sayfanın adını alın
                        $Sql = "";

                        if ($page == 'index.php') {
                            // index.php sayfası için filtreleme yapmadan verileri çekin
                            $Sql = $baglanti->query("SELECT * FROM haberler ORDER BY ID ASC LIMIT 4");
                        } else {
                            // Diğer sayfalar için KATEGORI alanıyla eşleşen verileri çekin
                            $kategori = str_replace('.php', '', $page); // Sayfa adından '.php' uzantısını kaldırın
                            $Sql = $baglanti->query("SELECT * FROM haberler WHERE KATEGORI = '$kategori' ORDER BY ID ASC LIMIT 4");
                        }

                        while ($sonuc = $Sql->fetch_assoc()) {
                            echo '
                                        <div class="weekly2-single">
                                            <div class="weekly2-img" href="icerik.php?ID='.$sonuc['ID'].'">
                                                <img src="'.$sonuc['KAPAKRESMI'].'">
                                            </div>
                                            <div class="weekly2-caption">
                                                <h4><a href="icerik.php?ID='.$sonuc['ID'].'">'.$sonuc['BASLIK'].'</a></h4>
                                                <p>Jhon  |  2 hours ago</p>
                                            </div>
                                        </div> 

                        ';

                             }

                             ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>           

    <!--   Weekly3-News start -->
    <div class="weekly3-news-area pt-80 pb-130">
        <div class="container">
            <div class="weekly3-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-wrapper">
                            <!-- Slider -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="weekly3-news-active dot-style d-flex">
                                        <?php
                        $page = basename($_SERVER['PHP_SELF']); // Mevcut sayfanın adını alın
                        $Sql = "";

                        if ($page == 'index.php') {
                            // index.php sayfası için filtreleme yapmadan verileri çekin
                            $Sql = $baglanti->query("SELECT * FROM haberler ORDER BY ID ASC LIMIT 5");
                        } else {
                            // Diğer sayfalar için KATEGORI alanıyla eşleşen verileri çekin
                            $kategori = str_replace('.php', '', $page); // Sayfa adından '.php' uzantısını kaldırın
                            $Sql = $baglanti->query("SELECT * FROM haberler WHERE KATEGORI = '$kategori' ORDER BY ID ASC LIMIT 5");
                        }

                        while ($sonuc = $Sql->fetch_assoc()) {
                            echo '
                                        <div class="weekly3-single" href="icerik.php?ID='.$sonuc['ID'].'">
                                            <div class="weekly3-img">
                                                <img src="'.$sonuc['KAPAKRESMI'].'" alt="">
                                            </div>
                                            <div class="weekly3-caption">
                                                <h4><a href="icerik.php?ID='.$sonuc['ID'].'">'.$sonuc['BASLIK'].'</a></h4>
                                                <p>19 Jan 2020</p>
                                            </div>
                                        </div> 

                                        ';

                             }

                             ?>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>           
    <!-- End Weekly-News -->
    <!-- banner-last Start -->
    <div class="banner-area gray-bg pt-90 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <div class="banner-one">
                        <img src="assets/img/gallery/body_card3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-last End -->
</main>
<?php 
include('../site/Footer.php')
?>
   