<!DOCTYPE html>
<html>
<head>
    <title>Kemal SMM Panel</title>
    <meta charset="utf-8">
    <style>
        body { background-color: #121212; color: white; font-family: Arial; text-align: center; padding-top: 100px; }
        .box { border: 2px solid #007bff; padding: 40px; display: inline-block; border-radius: 10px; background-color: #1e1e1e; }
        input { padding: 10px; margin: 10px 0; width: 200px; border-radius: 5px; border: none; }
        button { background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="box">
        <h2>🚀 Kemal SMM Giriş</h2>
        <form action="dashboard.php" method="POST">
            <input type="text" name="kullanici" placeholder="Kullanıcı Adı" required><br>
            <input type="password" name="sifre" placeholder="Şifre" required><br>
            <button type="submit">Giriş Yap</button>
        </form>
    </div>
</body>
</html>
