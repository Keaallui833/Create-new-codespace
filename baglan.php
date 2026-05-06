<?php
// Kemal SMM Veritabanı Bağlantı Ayarları
$host = "localhost"; // Sunucu adresi (Codespace için genelde budur)
$user = "root";      // Kullanıcı adı
$pass = "";          // Şifre (Şu anlık boş bırakıyoruz)
$db   = "smm_panel"; // Veritabanı adı

// Bağlantıyı Kuruyoruz
$baglanti = mysqli_connect($host, $user, $pass, $db);

// Hata kontrolü
if (!$baglanti) {
    die("Bağlantı başarısız abi: " . mysqli_connect_error());
}
?>
