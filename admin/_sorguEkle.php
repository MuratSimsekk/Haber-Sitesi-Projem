<?php

include("php/baglanti.php");

 /*
//içerik ekle
$BASLIK = $_POST['BASLIK'];
$ICERIK = $_POST['ICERIK'];
$TARIH=date('Y-m-d H:i:s');
$DURUM=$_POST['DURUM'];
$post_comment_number=$_POST['post_comment_number'];

$KAPAKRESMI=$_FILES['KAPAKRESMI']['name'];
$KAPAKRESMI_TEMP=$_FILES['KAPAKRESMI']['tmp_name'];
move_uploaded_file($KAPAKRESMI_TEMP, "./img/$KAPAKRESMI");


$KATEGORI=$_POST['KATEGORI'];


if ($_POST['ICERIK']) {


$sql = "INSERT INTO haberler (BASLIK, ICERIK, KAPAKRESMI,KATEGORI) VALUES ('$BASLIK', '$ICERIK', '$KAPAKRESMI','$KATEGORI')";
if ($baglanti->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $baglanti->error;
}
}



$BASLIK = $_POST['BASLIK'];
$ICERIK = $_POST['ICERIK'];
$TARIH=date('Y-m-d H:i:s');
$DURUM=$_POST['DURUM'];
$post_comment_number=$_POST['post_comment_number'];

$KAPAKRESMI=$_FILES['KAPAKRESMI']['name'];
$KAPAKRESMI_TEMP=$_FILES['KAPAKRESMI']['tmp_name'];
$hedefKlasor = "./img/";
$hedefDosya = $hedefKlasor . $KAPAKRESMI;
move_uploaded_file($KAPAKRESMI_TEMP, "$hedefDosya");

   $KAPAKRESMI = $hedefDosya;
$KATEGORI=$_POST['KATEGORI'];


if ($_POST['ICERIK']) {


$sql = "INSERT INTO haberler (BASLIK, ICERIK, KAPAKRESMI,KATEGORI) VALUES ('$BASLIK', '$ICERIK', '$KAPAKRESMI','$KATEGORI')";
if ($baglanti->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $baglanti->error;
}
}

*/


// Sayfa ekle
$SAYFAADI = $_POST['SAYFAADI'];
$URL = $_POST['URL'];

if ($_POST['URL']) {
    $SQL = "INSERT INTO sayfalar (SAYFAADI, URL) VALUES ('$SAYFAADI', '$URL')";
    
    if ($baglanti->query($SQL) === TRUE) {
        echo "New record created successfully";
        
        $indexContent = file_get_contents('../site/index.php');
        $newPageContent = $indexContent;
        
        $newPagePath = '../site/' . $URL . '.php';
        
        if (file_put_contents($newPagePath, $newPageContent)) {
            echo "New PHP page created: $URL.php";
        } else {
            echo "Failed to create PHP page: $URL.php";
        }
    } else {
        echo "Error: " . $SQL . "<br>" . $baglanti->error;
    }
}



//Menü Ekleme
$MENUADI = $_POST['MENUADI'];
$MENUSEC = $_POST['MENUSEC'];
$SAYFASEC = $_POST['SAYFASEC'];

if ($_POST['MENUADI']) {
$Sql = "INSERT INTO menular (MENUSEC,MENUADI,SAYFASEC) VALUES ('$MENUSEC', '$MENUADI','$SAYFASEC')";
if ($baglanti->query($Sql) === TRUE) {
    echo "Kategori Eklendi";
} else {
    echo "Error: " . $Sql . "<br>" . $baglanti->error;
}

}
//Kategori Ekleme
$KATEGORIADI = $_POST['KATEGORIADI'];
$sayfasec= $_POST['SAYFASEC'];
if ($_POST['KATEGORIADI']) {

$Sql = "INSERT INTO Kategoriler (KATEGORIADI,SAYFASEC) VALUES ('$KATEGORIADI','$sayfasec')";
if ($baglanti->query($Sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $Sql . "<br>" . $baglanti->error;
}

}

//Kullanıcı EKleme

$ADSOYAD = $_POST['ADSOYAD'];
$EPOSTA = $_POST['EPOSTA'];
$HAKKINDA = $_POST['HAKKINDA'];
$KADI = $_POST['KADI'];
$SIFRE = $_POST['SIFRE'];
if ($_POST['KADI']) {


$sql = "INSERT INTO kullanicilar (ADSOYAD,  EPOSTA, HAKKINDA,KADI, SIFRE) VALUES ('$ADSOYAD','$EPOSTA', '$HAKKINDA','$KADI','$SIFRE')";
if ($baglanti->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $baglanti->error;
}
}





$baglanti->close();




 ?>
