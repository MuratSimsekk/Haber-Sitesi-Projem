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
          <h1 class="m-0 text-dark">Kategori Güncelleme Paneli</h1>
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
            <h3 class="card-title"></h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" id="form" enctype="multipart/form-data" method="post" name="form">
            <div class="card-body">
              <div class="form-group col-md-12">
                <label>Kategori Adı</label>
                  <?php
    $ID = $_GET['ID'];
    $Sql = $baglanti->query("SELECT * FROM kategoriler WHERE ID='$ID'");
    $sonuc = $Sql->fetch_assoc();

     $baglanti->select_db('habersite');

        $sql1 = $baglanti->query("SELECT URL FROM sayfalar");
    ?>
                <input type="text" class="form-control" id="KATEGORIADI"  name="KATEGORIADI"  value="<?php echo isset($sonuc['KATEGORIADI']) ? $sonuc['KATEGORIADI'] : ''; ?>">
              </div>
               <div class="form-group col-md-12">
                    <label>Sayfa Seçiniz</label>
                    <select class="form-control" name="SAYFASEC">
                      <option><?php echo isset($sonuc['SAYFASEC']) ? $sonuc['SAYFASEC'] : ''; ?></option>
                       <?php
                       while($sonuc1 = $sql1->fetch_assoc()){

                        echo '<option>'.$sonuc1["URL"].'</option>';
                        }
                      ?>
                    </select>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Güncelle</button>
              <input type="hidden" name="ID" value="<?php echo $ID; ?>">
            </div>
          </div>
          </form>
        </div>
    </div>
</div>


<?php

include("footer.php");

 ?>

 <script>

 $('#form').submit(function(e) {
    e.preventDefault();
    $.ajax({
      url:"kategoriGuncelle.php",
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
