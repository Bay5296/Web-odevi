<?php
// E-posta ve şifreyi al
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Doğru bilgiler
$dogru_email = "b241210082@sakarya.edu.tr";
$dogru_sifre = "1den8ekadar";

// Karşılaştır
if ($email === $dogru_email && $password === $dogru_sifre) {
    // Başarılı giriş → index.html'e yönlendir
    header("Location: anasayfa.html");
    exit();
} else {
    // Hatalı giriş → tekrar giriş sayfasına dön, uyarı ver
    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <title>Giriş Hatası</title>
        <style>
            body { font-family: sans-serif; background: #f8f8f8; padding: 40px; text-align: center; 
       background-image: url('img/hata.jpg');
      background-size: cover;
      background-repeat: no-repeat;
     
      margin: 0;
}
            .box { max-width: 400px; margin: auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.2); }
            a { display: inline-block; margin-top: 20px; color: #007BFF; text-decoration: none; }
        </style>
    </head>
    <body>
        <div class='box'>
            <h2>Hatalı Giriş</h2>
            <p>E-posta veya şifre yanlış!</p>
            <a href='index.html'>Geri Dön</a>
        </div>
    </body>
    </html>";
}
?>
