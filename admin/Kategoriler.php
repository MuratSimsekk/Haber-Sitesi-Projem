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
          <h1 class="m-0 text-dark">Kategoriler</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
            <li class="breadcrumb-item active">KategoriEkleme</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
    <div class="col-md-12">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Kategori Ekleme Paneli</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" id="form" enctype="multipart/form-data" method="post" name="form">
            <?php
          $baglanti->select_db('habersite');

        $sql = $baglanti->query("SELECT URL FROM sayfalar ");
          ?>
            <div class="card-body">
              <div class="form-group col-md-12">
                <label>Kategori Adı</label>
                <input type="text" class="form-control" id="" placeholder="Kategori Adı" name="KATEGORIADI">
              </div>
               <div class="form-group col-md-12">
            <label>Sayfa Seçiniz</label>
            <select class="form-control" name="SAYFASEC">
              <option>Sayfa Seçiniz</option>
               <?php
               while($sonuc = $sql->fetch_assoc()){

         echo '<option>'.$sonuc["URL"].'</option>';
                }
              ?>
            </select>
          </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Ekle</button>
            </div>
          </form>
        </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> Kategori Listeleme Paneli</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Kategori Adı</th>
                  <th>SAYFA SEC</th>
                  <th>İşlemler</th>
                </tr>

                <?php

      $sql = $baglanti->query("SELECT * FROM Kategoriler");

   // Sonuçları Alalım.
    while($sonuc = $sql->fetch_assoc()){
      echo '<tr>';
        echo '<td>'.$sonuc["ID"].'</td>';
        echo '<td>'.$sonuc["KATEGORIADI"].'</td>';
        echo '<td>'.$sonuc["SAYFASEC"].'</td>';
        echo '<td>';

        echo '<a href="kategoriListeleDetay.php?ID='.$sonuc['ID'].'"class="btn btn-primary">Detay</a> ';
        echo '<a href="sorguSilKategori.php?ID='.$sonuc['ID'].'" class="btn btn-danger"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>' ;
        echo '</td>';

        echo '</tr>';


        }
            ?>
               </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div><!-- /.row -->

    </div>

  </div>
  </section>

</div>


<?php

include("footer.php");

 ?>

 <script>

 $('#form').submit(function(e) {
    e.preventDefault();
    $.ajax({
      url:"_sorguEkle.php",
      method:"post",
      data:$("form").serialize(),
      dataType:"text",
      success:function(strMessage){
        $("Message").text(strMessage);
        $("#form")[0].reset();
        alert("Kategori Başarıyla Eklendi");
        location.reload();
      }
    });

  });
 </script>
