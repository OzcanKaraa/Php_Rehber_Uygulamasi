<?php
//Guvenlik Konrolu
function guvenlik($metin){
//    $metin = strip_tags($metin); //Taglari çıkarır.
//    $metin = htmlspecialchars($metin); //Ozel karakterler temizler
    $metin = htmlspecialchars(strip_tags($metin));
    return $metin;
}