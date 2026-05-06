<?php

$host       = "mysql.railway.internal"; 
$kullanici  = "root";
$sifre      = "PYnjAAGPtwSmtEDLIcDMIdjityKlkpMv"; 
$veritabani = "railway";

$baglan = mysqli_connect($host, $kullanici, $sifre, $veritabani);

if (!$baglan) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}

mysqli_set_charset($baglan, "utf8");

?>
