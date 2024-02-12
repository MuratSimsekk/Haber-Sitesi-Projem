<?php

include("_header.php");
include("php/baglanti.php");


 ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Anasayfa</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
            <li class="breadcrumb-item active"></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <?php
  $query5 = "SELECT * FROM sayfalar";
  $select_all_pages = mysqli_query($baglanti,$query5);
  $al_pages = mysqli_num_rows($select_all_pages);

    ?>

   <?php
    $query6 = "SELECT * FROM menular";
    $select_all_menu = mysqli_query($baglanti,$query6);
    $al_menu = mysqli_num_rows($select_all_menu);

      ?>

            <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="far fa-clipboard"></i>
                  </div>
                  <hr>
                  <?php
                  $query = "SELECT * FROM haberler";
                  $select_all_posts = mysqli_query($baglanti,$query);
                  $post_count = mysqli_num_rows($select_all_posts);
                  echo "<div class = 'mr-5'>{$post_count} Haber </div>";



                    ?>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="yaziListele.php">
                  <span class="float-left">Detaylı Bilgi</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="far fa-comment"></i>
                  </div>
                    <hr>
                 <?php
                  $query = "SELECT * FROM menular";
                  $select_all_posts = mysqli_query($baglanti,$query);
                  $post_count = mysqli_num_rows($select_all_posts);
                  echo "<div class = 'mr-5'>{$post_count} Menü </div>";



                    ?>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="comments.php">
                  <span class="float-left">Detaylı Bilgi</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-list-ul"></i>
                  </div>
                  <hr> <?php
                  $query = "SELECT * FROM kategoriler";
                  $select_all_posts = mysqli_query($baglanti,$query);
                  $post_count = mysqli_num_rows($select_all_posts);
                  echo "<div class = 'mr-5'>{$post_count} Kategori </div>";



                    ?>
            
                </div>
                <a class="card-footer text-white clearfix small z-1" href="kategoriler.php">
                  <span class="float-left">Detaylı Bilgi</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-user" aria-hidden="true"></i>
                  </div>
                  <hr> <?php
                  $query = "SELECT * FROM kullanicilar";
                  $select_all_posts = mysqli_query($baglanti,$query);
                  $post_count = mysqli_num_rows($select_all_posts);
                  echo "<div class = 'mr-5'>{$post_count} Kullanıcı</div>";



                    ?>
          
                </div>
                <a class="card-footer text-white clearfix small z-1" href="kullaniciListele.php">
                  <span class="float-left">Detaylı Bilgi</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <hr>

</div>
<!-- /.content-wrapper -->

<?php
include("footer.php");

 ?>
