<?php
include("_header.php");
include("php/baglanti.php");

if (isset($_GET['ID'])) {
  $ID = $_GET['ID'];

  // Sayfa silme
  if ($baglanti) {
    $stmt = $baglanti->prepare("SELECT URL FROM sayfalar WHERE ID = ?");
    $stmt->bind_param("i", $ID);
    $stmt->execute();
    $stmt->bind_result($URL);
    $stmt->fetch();
    $stmt->close();
    
    // Sayfayı veritabanından sil
    $stmt = $baglanti->prepare("DELETE FROM sayfalar WHERE ID = ?");
    $stmt->bind_param("i", $ID);
    $stmt->execute();
    
    // Sorgu sonucunu kontrol et
    if ($stmt->affected_rows > 0) {
      echo "Sayfa silindi.";
      
      // Program dosyasını sil
      $dosyaYolu = '../site/' . $URL . '.php';
      if (unlink($dosyaYolu)) {
        echo "Program dosyası silindi.";
      } else {
        echo "Program dosyası silinirken bir hata oluştu.";
      }
    } else {
      echo "Sayfa silinirken bir hata oluştu.";
    }
    
    $stmt->close();
  } else {
    echo "Veritabanı bağlantısı başarısız.";
  }
}

header("Location: sayfaEkle.php");
?>
