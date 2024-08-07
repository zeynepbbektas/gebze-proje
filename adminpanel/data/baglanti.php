<?php
include_once "libs/functions.php";

$ayarlar = getAyarlar();
if ($ayarlar != false) {
    $sitebaslik = $ayarlar[0]["baslik"];
    $siteanahtar = $ayarlar[0]["anahtar"];
    $siteaciklama = $ayarlar[0]["aciklama"];
    $siteURL = $ayarlar[0]["url"];
}
?>
