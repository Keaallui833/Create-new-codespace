<?php

// Railway 'Variables' sekmesinden kopyaladığın bilgileri buraya yaz:
$host       = "kopyaladığın_MYSQLHOST_buraya";      // Örn: mysql.railway.internal
$kullanici  = "root";                               // Genelde root olur, MYSQLUSER'a bak
$sifre      = "kopyaladığın_MYSQLPASSWORD_buraya";  // O uzun karışık şifre
$veritabani = "railway";                            // MYSQLDATABASE kısmındaki isim

// Bağlantıyı kuruyoruz
$baglan = mysqli_connect($host, $kullanici, $sifre, $veritabani);

// Bağlantı kontrolü - Eğer hata varsa ekrana yazar
if (!$baglan) {
    die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
}

// Türkçe karakter sorunu olmasın diye
mysqli_set_charset($baglan, "utf8");

?>
