<?php
require_once "fonksiyon.php";




$adsoyad =guvenlik($_POST["adsoyad"]); // Etiketleri temizle
$telefon = guvenlik($_POST["telefon"]);
$email= guvenlik($_POST["email"]);
/*
echo "$adsoyad - $telefon - $email <br>";
var_dump($_POST) ."<br>"; //Post ile gelen tüm veriler gelir.
echo "<br> <br>";
echo strlen($adsoyad)."<br>"; //Ad Soyad Karakter sayısı
echo mb_strlen($adsoyad)."<br>"; //Türkçe Karakterleri tek sayar.
echo "<br> <hr>";

   /* Bos ise Kontrol etmek için

is_empty($adsoyad)
strlen($adsoyad) <= 0
$adsoyad == ""
*/


if ($adsoyad == '' || $email == '' || strlen($telefon) < 10) {
    echo "<script>
    alert('Ad Soyad, Email veya Telefon Hatalı!');
    window.top.location = 'index.php'; //Index sayfasına geri döndürme
    </script>";
    die();
}
//echo "$adsoyad - $telefon - $email <br>";

//$dosya = fopen("rehber.txt" ,"wbt"); //Dosya açma  dosya kıpı w byte t Sıfırdan olusturulur.
//fwrite($dosya,"$adsoyad | $email | $telefon");
//fclose($dosya); // Dosya Kapama

//$dosya = fopen("rehber.txt" ,"wbt"); //Dosya açma  dosya kıpı w byte t ile yeniden dosya olusur.
$dosya = fopen("rehber.txt" ,"abt"); //Dosya açma  dosya kıpı abt ile yeni kişiyi ekler silmez.dosya yok ıse olusturur ekler.
 $sonuc = fwrite($dosya,"$adsoyad | $email | $telefon\n");
fclose($dosya); // Dosya Kapama

if ($sonuc){  //if ($sonuc===true) aynisi
    echo "<script>
    alert('$adsoyad Kayıt işlemi başarılı.');
    window.top.location = 'index.php'; //Index sayfasına geri döndürme
    </script>";

}else{
    echo "<script>
    alert('Hata : $adsoyad Kayıt Başarısız.');
    window.top.location = 'index.php'; //Index sayfasına geri döndürme
    </script>";
}

