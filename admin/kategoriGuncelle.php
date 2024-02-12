<?php
include("php/baglanti.php");

// Formdan gönderilen verileri alın
$ID = $_POST['ID'];
$K_ADI = $_POST['KATEGORIADI'];
$sayfasec = $_POST['SAYFASEC'];

// Güncelleme sorgusu
$guncelleSorgu = "UPDATE kategoriler SET KATEGORIADI='$K_ADI', SAYFASEC='$sayfasec' WHERE ID='$ID'";

// Sorguyu çalıştır ve sonucu kontrol et
if ($baglanti->query($guncelleSorgu) === TRUE) {
    echo "Kategori başarıyla güncellendi";
} else {
    echo "Güncelleme hatası: " . $baglanti->error;
}

// Veritabanı bağlantısını kapat
$baglanti->close();
?>

