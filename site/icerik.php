

    <?php

    
   include("../admin/php/baglanti.php");
include('../site/Header.php')


    ?>
<main>

<?php

  
    $ID=$_GET['ID'];
    $Sql=$baglanti->query("SELECT * FROM haberler WHERE ID='$ID'");
    $okuYaziCek=$Sql->fetch_assoc();

    
 ?>  <!-- About US Start -->
    <div class="about-area2 gray-bg pt-60 pb-60">
        <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Tittle -->
                        <div class="about-right mb-90">
                            <div class="about-img" >
                               <img alt="" src="<?php echo $okuYaziCek['KAPAKRESMI']; ?>"> 
                            </div>
                            <div class="heading-news mb-30 pt-30">
                                <h3><?php echo $okuYaziCek['BASLIK']; ?></h3>
                            </div>
                            <div class="about-prea">
                                <p class="about-pera1 mb-25"><?php echo $okuYaziCek['ICERIK']; ?></p>
                               
                            </div> 
                            
                       
                            <div class="social-share pt-30">
                                <div class="section-tittle">
                                    <h3 class="mr-20">Paylaş:</h3>
                                    <ul>
                                        <li><a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- From -->
                        <div class="row">
                            <div class="col-lg-8">
                                <form class="form-contact contact_form mb-80" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Yorum..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control error" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Adınız..">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control error" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control error" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Gönder'" placeholder="Konu Giriniz">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="submit" class="button button-contactForm boxed-btn boxed-btn2">Gönder</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <img src="assets/img/news/news_card.jpg" alt="">
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- About US End -->
</main>
   <?php 
include('../site/Footer.php')
?>