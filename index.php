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
  <title>Kuralpan Dekorasyon | Ana Sayfa</title>

  


  <link rel="stylesheet" href="/kuralpan_dekorasyon/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

 
  <link rel="stylesheet" href="/kuralpan_dekorasyon/css/stil_genel.css?v=1">

   <link rel="stylesheet" href="/kuralpan_dekorasyon/css/cookie.css">
</head>

<body class="kp-body">


  <?php include __DIR__ . '/icerik/ust_menu.php'; ?>

  <main class="kp-main">


<section class="kp-hero kp-hero-bg">
  <div class="container-fluid kp-hero-container">
    <div class="row">

     
      <div class="col-12">
        <div class="kp-hero-content">
          <h1 class="kp-hero-title">
            Yaşam Alanlarınızı<br>
            Baştan Yaratıyoruz
          </h1>

          <p class="kp-hero-text">
            Kuralpan Dekorasyon olarak iç mekân tasarımı, anahtar teslim tadilat
            ve dekorasyon çözümleri sunuyoruz.
          </p>

          <div class="kp-hero-buttons">
            <a href="/kuralpan_dekorasyon/hizmetler.php" class="btn kp-btn-primary">
              Hizmetlerimizi İncele
            </a>
            <a href="/kuralpan_dekorasyon/iletisim.php" class="btn kp-btn-outline">
              Teklif Al
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="kp-myt-block">
  <div class="container">

    <div class="kp-myt-grid">

     
      <div class="kp-myt-left">
        <div class="kp-myt-photo kp-myt-photo--big">
          <img src="/kuralpan_dekorasyon/img/content/about-left.jpg"
               alt="Kuralpan Dekorasyon - Çalışma Görseli">
        </div>
      </div>

   
      <div class="kp-myt-center">
        <span class="kp-myt-pill">HAKKIMIZDA</span>

        <h2 class="kp-myt-title">
          Deneyim, Güven ve Estetiğin Buluşma Noktası
        </h2>

        <p class="kp-myt-text">
          Kuralpan Dekorasyon olarak, yıllara dayanan tecrübemizle sadece mekânları değil,
          yaşam alanlarını da tasarlıyoruz. Estetik dokunuşlarımızla konforu birleştiriyor,
          güvenilir hizmet anlayışımızla hayallerinizi gerçeğe dönüştürüyoruz.
        </p>

        <a href="/kuralpan_dekorasyon/hakkimizda.php" class="kp-myt-btn">
          HAKKIMIZDA <span class="kp-myt-btn-ico">↗</span>
        </a>

       
        <div class="kp-myt-stats">
          <div class="kp-myt-stat">
            <div class="kp-myt-num">950+</div>
            <div class="kp-myt-cap">TAMAMLANAN PROJE</div>
          </div>

          <div class="kp-myt-divider"></div>

          <div class="kp-myt-stat">
            <div class="kp-myt-num">25+</div>
            <div class="kp-myt-cap">YILLIK TECRÜBE</div>
          </div>

          <div class="kp-myt-divider"></div>

          <div class="kp-myt-stat">
            <div class="kp-myt-num">%100</div>
            <div class="kp-myt-cap">MÜŞTERİ MEMNUNİYETİ</div>
          </div>
        </div>
      </div>

      
      <div class="kp-myt-right">
        <div class="kp-myt-photo kp-myt-photo--small">
          <img src="/kuralpan_dekorasyon/img/content/about-right.jpg"
               alt="Kuralpan Dekorasyon - Uygulama Görseli">
        </div>
      </div>

    </div>

  </div>
</section>

<section class="kp-faq-block">
  <div class="container">
    <div class="kp-faq-grid">

      
      <div class="kp-faq-left">

        <span class="kp-faq-pill">SIKÇA SORULAN SORULAR</span>

        <h2 class="kp-faq-title">
          Merak Ettikleriniz<br>
          Bizim İçin Önemli
        </h2>

        <p class="kp-faq-text">
          Aklınızdaki sorulara hızlı ve net cevaplar.
          Hizmetlerimizle ilgili en çok sorulan konuları sizin için derledik.
        </p>

       
        <div class="kp-faq-accordion">

          <div class="kp-faq-item active">
            <button class="kp-faq-question">
              1. Tadilat süreci ne kadar sürer?
              <span>+</span>
            </button>
            <div class="kp-faq-answer">
              Projenin kapsamına göre değişmekle birlikte,
              ortalama 2–6 hafta arasında tamamlanır.
            </div>
          </div>

          <div class="kp-faq-item">
            <button class="kp-faq-question">
              2. Ücretsiz keşif hizmetiniz var mı?
              <span>+</span>
            </button>
            <div class="kp-faq-answer">
              Evet. İstanbul ve çevresinde ücretsiz keşif hizmeti sunuyoruz.
              Uzman ekibimiz yerinde inceleme yapar.
            </div>
          </div>

        </div>

        <a href="/kuralpan_dekorasyon/sss.php" class="kp-faq-btn">
          SSS <span class="kp-faq-btn-ico">↗</span>
        </a>

      </div>

      
      <div class="kp-faq-right">

        <div class="kp-faq-image">
          <img src="/kuralpan_dekorasyon/img/content/faq-right.jpg" alt="Tadilat Görseli">
        </div>

        <div class="kp-faq-bars">
          <div class="kp-bar">
            <div class="kp-bar-label">
              İç Mekan Tadilat ve Dekorasyon
              <span>100%</span>
            </div>
            <div class="kp-bar-line"><span></span></div>
          </div>

          <div class="kp-bar">
            <div class="kp-bar-label">
              Anahtar Teslim Projeler
              <span>100%</span>
            </div>
            <div class="kp-bar-line"><span></span></div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>


   
    <section class="kp-home-info">
      <div class="container">
        <div class="row g-4">

          <div class="col-md-4">
            <div class="kp-info-card">
              <h5>İç Mekan Tasarımı</h5>
              <p>Daire, villa ve ofisler için estetik ve fonksiyonel çözümler.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="kp-info-card">
              <h5>Anahtar Teslim Tadilat</h5>
              <p>Başından sonuna tüm süreci biz yönetiyoruz.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="kp-info-card">
              <h5>Kaliteli Uygulama</h5>
              <p>Deneyimli ekip, kaliteli malzeme ve zamanında teslim.</p>
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


<script src="/kuralpan_dekorasyon/js/home.js"></script>

<script src="/kuralpan_dekorasyon/js/edge-ad.js"></script>


<div class="kp-edge-ad" id="kpEdgeAd">


 
  <a class="kp-edge-ad-link" href="/kuralpan_dekorasyon/iletisim.php">
    <span class="kp-edge-ad-tag">REKLAM</span>
    <span class="kp-edge-ad-text">BOYA<br>REKLAMI</span>
  </a>

</div>

</body>
</html>
