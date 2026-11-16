<?php
// cerez_politikasi.php
?>
<!doctype html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- SİTENİN ANA CSS'İ -->
  <link rel="stylesheet" href="/kuralpan_dekorasyon/css/style.css?v=10">

  <!-- COOKIE CSS (MUTLAKA) -->
  <link rel="stylesheet" href="/kuralpan_dekorasyon/css/cookie.css?v=10">

  <title>Çerez Politikası | Kuralpan Dekorasyon</title>
</head>
<body>

<?php include __DIR__ . "/icerik/ust_menu.php"; ?>

<div class="kp-cookie-page-wrap">
  <div class="kp-cookie-page">
    <h1>Çerez Politikası</h1>
    <p>Web sitemizde kullanıcı deneyimini iyileştirmek ve sitenin güvenli çalışmasını sağlamak amacıyla çerezler kullanılabilir.</p>

    <div class="kp-mini-actions">
      <button type="button" class="kp-btn kp-btn--primary" onclick="window.kpOpenCookieSettings('consent')">
        Çerez Ayarlarını Aç
      </button>
    </div>

    <h3>Çerez Nedir?</h3>
    <p>Çerezler, tarayıcınız aracılığıyla cihazınıza kaydedilen küçük metin dosyalarıdır.</p>

    <h3>Çerez Türleri</h3>
    <p><b>Gerekli:</b> Sitenin çalışması için zorunludur.</p>
    <p><b>Tercihler:</b> Dil/bölge gibi seçimleri hatırlayabilir.</p>
    <p><b>İstatistik:</b> Site performansını anonim şekilde analiz etmeye yardımcı olur.</p>
  </div>
</div>

<?php include __DIR__ . "/icerik/alt_footer.php"; ?>

</body>
</html>
