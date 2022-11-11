<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="text-align: center;">
<form method="post" action="controller.php">
    <b>Adı Soyadı:</b><br>
    <input type="text" name="adsoyad">
    <br><br>
    <b>E-mail Adresi:</b><br>
    <input type="email" name="email">
    <br><br>
    <b>Telefon Numarası:</b><br>
    <input type="tel" name="telefon">
    <br><br>
    <input type="submit" value="Kaydet">
</form>
<?php

/*
 * Tümünü Okumada
$dosya = fopen("rehber.txt","rb"); // okuma kipi
$icerik = fread($dosya,filesize(("rehber.txt")));//dosya oku tamamini oku
 echo $icerik;
*/
//Satır Satır  okuma  işleme için ıse;
//$dosya = fopen("rehber.txt", "rb"); // okuma kipi
//while (!feof($dosya)) {
//    $icerik =  fgets($dosya); // Satir satir getir.
//    echo "$icerik<br>";
//} // not file end off file dosyanin sonuna gelinceye kadar.
//fclose($dosya);


//ARRAY ILE KULLANIM
$satirlar = array();
$dosya = fopen("rehber.txt", "rb"); // okuma kipi
while (!feof($dosya)) {
    $icerik[] =  fgets($dosya); // Satir satir getir.
}
fclose($dosya);
foreach ($satirlar as $satir){
    echo "$satir<br>";
}


?>
</body>
</html>