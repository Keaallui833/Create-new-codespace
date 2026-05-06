<?php
$host = "kopyaladığın_mysqlhost_buraya";
$kullanici = "root"; // veya oradaki user
$sifre = "o_uzun_sifre_buraya";
$veritabani = "railway"; // veya oradaki database adı

$baglan = mysqli_connect($host, $kullanici, $sifre, $veritabani);

if (!$baglan) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}
?>
