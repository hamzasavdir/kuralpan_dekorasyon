


<?php
$ROOT = realpath(__DIR__);

while ($ROOT && !file_exists($ROOT . "/index.php")) {
    $parent = dirname($ROOT);
    if ($parent === $ROOT) break;
    $ROOT = $parent;
}
?>




<!doctype html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kuralpan Dekorasyon | Hakkımızda</title>

 
  <link rel="stylesheet" href="/kuralpan_dekorasyon/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  
 
  <link rel="stylesheet" href="/kuralpan_dekorasyon/css/stil_genel.css">

  <link rel="stylesheet" href="css/cookie.css">
</head>

<body class="kp-body">

  <?php include __DIR__ . '/icerik/ust_menu.php'; ?>
  <header class="kp-page-hero" style="--kp-hero-bg: url('/kuralpan_dekorasyon/img/hero/hero-home.jpg');">
  <div class="container kp-page-hero-inner">
    <h1 class="kp-page-title">HAKKIMIZDA</h1>
    <div class="kp-breadcrumb">
      <a href="/kuralpan_dekorasyon/index.php">Anasayfa</a>
      <span>/</span>
      <span>Hakkımızda</span>
    </div>
  </div>
</header>


  <main class="kp-main">

  
    <section class="kp-about-hero">
      <div class="container-fluid kp-about-hero-container">
        <div class="row">

       
          <div class="col-lg-9">
            <div class="kp-about-hero-content">
              <div class="kp-about-badge">HAKKIMIZDA</div>

              <h1 class="kp-about-title">
                Kalite Odaklı<br>
                Dekorasyon ve Tadilat
              </h1>

              <p class="kp-about-text">
                Kuralpan Dekorasyon; iç mekan tasarımı, anahtar teslim tadilat ve
                dekorasyon uygulamalarında güvenilir, planlı ve kaliteli hizmet anlayışıyla çalışır.
                Amacımız, her projede estetik ve işlevselliği bir araya getirerek uzun ömürlü çözümler sunmaktır.
              </p>

              <div class="kp-about-stats">
                <div class="kp-stat">
                  <div class="kp-stat-number">100%</div>
                  <div class="kp-stat-label">Müşteri Memnuniyeti</div>
                </div>
                <div class="kp-stat">
                  <div class="kp-stat-number">Kaliteli</div>
                  <div class="kp-stat-label">Malzeme & İşçilik</div>
                </div>
                <div class="kp-stat">
                  <div class="kp-stat-number">Zamanında</div>
                  <div class="kp-stat-label">Teslimat</div>
                </div>
              </div>

            </div>
          </div>

          
        </div>
      </div>
    </section>


    <section class="kp-about-content">
      <div class="container">
        <div class="row g-4">

      
          <div class="col-lg-7">
            <div class="kp-about-card">
              <h2 class="kp-about-card-title">Biz Kimiz?</h2>
              <p class="kp-about-paragraph">
                Kuralpan Dekorasyon, yaşam alanlarını modern, kullanışlı ve şık hale getirmek için
                tasarım ve uygulama süreçlerini tek çatı altında yönetir. Her projede ihtiyaç analizi,
                planlama, malzeme seçimi ve uygulama adımlarını profesyonel şekilde yürütürüz.
              </p>
              <p class="kp-about-paragraph">
                Ev, ofis ve ticari mekanlarda; iç mekan tasarımı, boya-badana, alçı-asmatavan,
                zemin uygulamaları, mutfak-banyo yenileme gibi hizmetleri bütüncül bir yaklaşımla sunarız.
              </p>
            </div>
          </div>

   
          <div class="col-lg-5">
            <div class="kp-about-card">
              <h2 class="kp-about-card-title">Çalışma Prensiplerimiz</h2>

              <ul class="kp-about-list">
                <li><i class="bi bi-check2-circle"></i> Şeffaf fiyatlandırma ve net planlama</li>
                <li><i class="bi bi-check2-circle"></i> Kaliteli malzeme ve düzgün işçilik</li>
                <li><i class="bi bi-check2-circle"></i> Temiz teslim, düzenli çalışma</li>
                <li><i class="bi bi-check2-circle"></i> Zamanında teslimat</li>
                <li><i class="bi bi-check2-circle"></i> İhtiyaca uygun tasarım yaklaşımı</li>
              </ul>

              <div class="kp-about-cta">
                <a href="/kuralpan_dekorasyon/iletisim.php" class="btn kp-btn-primary w-100">
                  Teklif Al
                </a>
              </div>
            </div>
          </div>

        </div>

    
        <div class="row g-4 mt-1">
          <div class="col-md-4">
            <div class="kp-info-card">
              <h5>Planlama</h5>
              <p>Ölçülendirme, keşif ve proje planını netleştiriyoruz.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="kp-info-card">
              <h5>Uygulama</h5>
              <p>Uygulama sürecini düzenli ve kontrollü yürütüyoruz.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="kp-info-card">
              <h5>Teslim</h5>
              <p>Temiz teslim ve memnuniyet odaklı final kontrol sağlıyoruz.</p>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main>
<?php include __DIR__ . '/icerik/cookie_banner.php'; ?>


<section class="kp-cta">
  <div class="container">
    <div class="kp-cta-box">
      <h2 class="kp-cta-title">
        Hayalinizdeki Mekân Sadece Bir<br>
        Adım Uzağınızda
      </h2>

      <a href="/kuralpan_dekorasyon/iletisim.php" class="kp-cta-btn">
        ÜCRETSİZ KEŞİF TALEP ET
        <span class="kp-cta-btn-icon">↗</span>
      </a>
    </div>
  </div>
</section>
<?php include __DIR__ . '/icerik/reklam_pano.php'; ?>


  
  <?php include __DIR__ . '/icerik/alt_footer.php'; ?>

  <script src="/kuralpan_dekorasyon/js/bootstrap.bundle.min.js"></script>
 
  
<?php include __DIR__ . "/icerik/cookie_banner.php"; ?>


<script src="/kuralpan_dekorasyon/js/edge-ad.js"></script>


<div class="kp-edge-ad" id="kpEdgeAd">


 
  <a class="kp-edge-ad-link" href="/kuralpan_dekorasyon/iletisim.php">
    <span class="kp-edge-ad-tag">REKLAM</span>
    <span class="kp-edge-ad-text">BOYA<br>REKLAMI</span>
  </a>

</div>



</body>
</html>
