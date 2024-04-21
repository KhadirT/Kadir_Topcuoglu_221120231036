<?php
// Formdan gelen verileri al
$ad = $_POST['ad'];
$email = $_POST['email'];
$konu = $_POST['konu'];
$mesaj = $_POST['mesaj'];

// E-posta gönderilecek adres
$alici_email = "alici@example.com";

// E-posta başlığı
$eposta_basligi = "İletişim Formu: $konu";

// E-posta içeriği
$eposta_icerigi = "Ad: $ad\n";
$eposta_icerigi .= "E-posta: $email\n";
$eposta_icerigi .= "Mesaj: \n$mesaj";

// E-posta gönder
mail($alici_email, $eposta_basligi, $eposta_icerigi);

// Başarı mesajı
echo "Mesajınız başarıyla gönderildi. Size en kısa sürede geri dönüş yapacağız.";
?>
