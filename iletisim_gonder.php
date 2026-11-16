<?php
session_start();
include __DIR__ . '/veritabani/veritabani_baglanti.php';


$ad = trim($_POST['ad']);
$eposta = trim($_POST['eposta']);
$telefon = trim($_POST['telefon']);
$konu = trim($_POST['konu']);
$mesaj = trim($_POST['mesaj']);


$ad = htmlspecialchars($ad, ENT_QUOTES);
$email = htmlspecialchars($eposta, ENT_QUOTES);
$telefon = htmlspecialchars($telefon, ENT_QUOTES);
$konu = htmlspecialchars($konu, ENT_QUOTES);
$mesaj = htmlspecialchars($mesaj, ENT_QUOTES);


$sorgu = $baglanti->prepare("INSERT INTO iletisim_talepleri (ad, email, telefon, konu, mesaj) VALUES (?, ?, ?, ?, ?)");
$sorgu->bind_param("sssss", $ad, $email, $telefon, $konu, $mesaj);

if ($sorgu->execute()) {
    echo "<script>alert('Mesajınız başarıyla iletildi. Teşekkür ederiz!'); window.location.href='iletisim.php';</script>";
} else {
    echo "<script>alert('Hata oluştu: " . $sorgu->error . "'); window.location.href='iletisim.php';</script>";
}

$baglanti->close();
?>
