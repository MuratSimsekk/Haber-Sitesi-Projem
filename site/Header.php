<?php
    include("../admin/php/baglanti.php");
 ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News  HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/ticker-style.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">

    <?php
                    $Sql = $baglanti->query("SELECT * FROM ayar ORDER BY  ID DESC LIMIT 1 ");
                    while($sonuc = $Sql->fetch_assoc()){
                        echo'


                <img src="'.$sonuc['LOGO'].'" alt="" width="70px" height="50px" s>

                 ';
                         }
                           ?> 
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-mid gray-bg">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">

                    <?php
                    $Sql = $baglanti->query("SELECT * FROM ayar ORDER BY  ID DESC LIMIT 1 ");
                    while($sonuc = $Sql->fetch_assoc()){
                        echo'
                    


                            <div class="logo">
                                <a href="index.php" class="logo"><img src="'.$sonuc['LOGO'].'" alt="resim" width="150px" height="100px" ></a>
                            </div>
                             ';
                            }
                        ?>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                                <img src="assets/img/gallery/header_card.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                      <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
    <!-- sticky -->
    <div class="sticky-logo">
        <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
    </div>
    <!-- Main-menu -->
    <div class="main-menu d-none d-md-block">
    <nav>
        <ul id="navigation">
            <?php
            // Veritabanına bağlantıyı sağla
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "habersite";
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Menüleri veritabanından çek
            $sql = "SELECT * FROM menular";
            $result = $conn->query($sql);

            // Menüleri ekle
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if ($row["MENUADI"] == "Kategoriler"||$row["MENUADI"] == "KATEGORİLER"||$row["MENUADI"] == "kategoriler") {
                        echo '<li><a href="' . $row["SAYFASEC"] . '">' . $row["MENUADI"] . '</a>';
                        echo '<ul class="submenu">';
                        
                        // Kategoriler tablosundan alt menüleri çek
                        $sql2 = "SELECT * FROM kategoriler";
                        $result2 = $conn->query($sql2);

                        // Alt menüleri ekle
                        if ($result2->num_rows > 0) {
                            while ($row2 = $result2->fetch_assoc()) {
                                echo '<li><a href="' . $row2['SAYFASEC'] . '.php">' . $row2["KATEGORIADI"] . '</a></li>';
                            }
                        }

                        echo '</ul>';
                        echo '</li>';
                    } else {
                        echo '<li><a href="' . $row["SAYFASEC"] . '.php">' . $row["MENUADI"] . '</a></li>';
                    }
                }
            }

            // Veritabanı bağlantısını kapat
            $conn->close();
            ?>
        </ul>
    </nav>
</div>


</div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="header-right f-right d-none d-lg-block">
                                <!-- Heder social -->
                                <ul class="header-social">    
                                    <li><a href="index.php"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.php"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.php"><i class="fab fa-instagram"></i></a></li>
                                    <li> <a href="index.php"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                                <!-- Search Nav -->
                                <div class="nav-search search-switch">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->