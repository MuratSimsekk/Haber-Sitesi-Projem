 <!-- Footer Start-->
   <footer>
    <div class="footer-main footer-bg">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.php">  <?php
                    $Sql = $baglanti->query("SELECT * FROM ayar ORDER BY  ID DESC LIMIT 1 ");
                    while($sonuc = $Sql->fetch_assoc()){
                        echo'


                <img src="'.$sonuc['LOGO'].'" alt="" width="200px" height="150px">

                 ';
                         }
                           ?> 
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">Lorem Ipsum, kısaca Lipsum, masaüstü yayıncılık ve basın yayın sektöründe kullanılan taklit yazı bloğu olarak tanımlanır.</p>
                                        <p class="info2">Suite 721 İstanbul, 10034</p>
                                        <p class="info2">Phone: +90 (0)543 834 2322 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
    <div class="single-footer-caption mb-50">
        <div class="footer-tittle">
            <h4>Popüler Post</h4>
        </div>
        <!-- Popular post -->
        <?php
        $Sql = $baglanti->query("SELECT * FROM haberler ORDER BY ID DESC LIMIT 3");
        while ($sonuc = $Sql->fetch_assoc()) {
            echo '
            <div class="whats-right-single mb-20">
                <div class="whats-right-img" href="icerik.php?ID=' . $sonuc['ID'] . '">
                    <img src="' . $sonuc['KAPAKRESMI'] . '" alt="" width="120px" height="90px">
                </div>
                <div class="whats-right-cap">
                    <h4><a href="icerik.php?ID=' . $sonuc['ID'] . '">' . $sonuc['BASLIK'] . '</a></h4>
                    <p>Jhon | 2 hours ago</p> 
                </div>
            </div>
            ';
        }
        ?>
    </div>
</div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="banner">
                                <img src="assets/img/gallery/body_card4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart" aria-hidden="true"></i> by <a href="" target="_blank">MuratŞimşek</a>   
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Search model Begin -->
<div class="search-model-box">
    <div class="d-flex align-items-center h-100 justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->    
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
</body>
</html>