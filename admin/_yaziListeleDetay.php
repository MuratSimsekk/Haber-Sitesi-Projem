<?php

include("_header.php");
include("php/baglanti.php");

 ?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark">Habar Güncelleme Paneli</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
             <li class="breadcrumb-item active">HaberGüncelle</li>
           </ol>
         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </section>
   <!-- /.content-header -->
   <!-- Main content -->
   <section class="content">
     <div class="col-md-12">
       <!-- Small boxes (Stat box) -->
       <!-- Main row -->
         <div class="card card-primary">
           <div class="card-header">
             <h3 class="card-title">detay</h3>
           </div>
           <!-- /.card-header -->
           <!-- form start -->


             <form role="form" id="form" enctype="multipart/form-data" method="post" name="form">
    <?php
    $ID = $_GET['ID'];
    $Sql = $baglanti->query("SELECT * FROM haberler WHERE ID='$ID'");
    $sonuc = $Sql->fetch_assoc();
    ?>

    <?php/*
    if (isset($_POST["haber_guncelle"])) {
        $ID = $_POST["ID"];
        $BASLIK = $_POST["BASLIK"];
        $ICERIK = $_POST["ICERIK"];

        $sql_query2 = "UPDATE yazilar SET BASLIK ='$BASLIK', ICERIK ='$ICERIK' WHERE ID ='$_POST[ID]'";
        $edit_user_query = mysqli_query($baglanti, $sql_query2);
        header("Location:_yaziListeleDetay.php");
    }*/
    ?>

 
    <div class="card-body">
        <div class="form-group">
            <label for="BASLIK">Başlık</label>
            <input type="text" class="form-control" id="BASLIK" name="BASLIK" value="<?php echo isset($sonuc['BASLIK']) ? $sonuc['BASLIK'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="KAPAKRESMI">Resim</label>
            <input type="text" class="form-control" id="KAPAKRESMI" name="KAPAKRESMI" disabled value="<?php echo isset($sonuc['KAPAKRESMI']) ? $sonuc['KAPAKRESMI'] : ''; ?>">
        </div>
        <div class="mb-3">
            <textarea class="textarea" placeholder="Place some text here"
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="ICERIK" name="ICERIK"><?php echo isset($sonuc['ICERIK']) ? $sonuc['ICERIK'] : ''; ?></textarea>
        </div>
        <input type="hidden" name="ID" value="<?php echo isset($sonuc['ID']) ? $sonuc['ID'] : ''; ?>">
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary" name="haber_guncelle">Güncelle</button>
    </div>
</form>

         </div>
     </div><!-- /.container-fluid -->
   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

 <?php
 include("footer.php");
 ?> <!--
<script>
  $('#form').submit(function(e) {
    e.preventDefault();
    $.ajax({
      url: "yaziGuncelle.php",
      method: "post",
      data: $("form").serialize(),
      dataType: "text",
      success: function(strMessage) {
        $("Message").text(strMessage);
        $("#form")[0].reset();
        alert("Haber Başarıyla Güncellendi");
        location.reload();
      }
    });
  });
</script>-->

<script>
 $('#form').submit(function(e) {
  e.preventDefault();
  var formData = new FormData(this);
  $.ajax({
    url: "yaziGuncelle.php",
    method: "post",
    data: formData,
    dataType: "text",
    contentType: false,
    processData: false,
    success: function(strMessage) {
      $("#Message").text(strMessage);
      $("#form")[0].reset();
      alert("Haber başarıyla güncellendi");
      location.reload();
    }
  });
});

 </script>

