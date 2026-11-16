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
  <title>Kuralpan Dekorasyon | Sık Sorulan Sorular</title>

  


  <link rel="stylesheet" href="/kuralpan_dekorasyon/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  
  <link rel="stylesheet" href="/kuralpan_dekorasyon/css/stil_genel.css">
  <link rel="stylesheet" href="css/cookie.css">
</head>

<body class="kp-body">

 
  <?php include __DIR__ . '/icerik/ust_menu.php'; ?>
  <header class="kp-page-hero" style="--kp-hero-bg: url('/kuralpan_dekorasyon/img/hero/hero-home.jpg');">
  <div class="container kp-page-hero-inner">
    <h1 class="kp-page-title">SSS</h1>
    <div class="kp-breadcrumb">
      <a href="/kuralpan_dekorasyon/index.php">Anasayfa</a>
      <span>/</span>
      <span>SSS</span>
    </div>
  </div>
</header>


  <main class="kp-main">

   
    <section class="kp-sss-hero">
      <div class="container-fluid kp-sss-hero-container">
        <div class="row">

          
          <div class="col-lg-9">
            <div class="kp-sss-hero-content">
              <div class="kp-sss-badge">SSS</div>

              <h1 class="kp-sss-title">
                Sık Sorulan<br>
                Sorular
              </h1>

              <p class="kp-sss-text">
                Hizmetlerimiz, çalışma sürecimiz ve fiyatlandırma hakkında
                merak edilen soruların cevaplarını burada bulabilirsiniz.
              </p>

              <div class="kp-sss-buttons">
                <a href="/kuralpan_dekorasyon/iletisim.php" class="btn kp-btn-primary">
                  Teklif Al
                </a>
                <a href="#sss-listesi" class="btn kp-btn-outline">
                  Soruları Gör
                </a>
              </div>
            </div>
          </div>

          

        </div>
      </div>
    </section>

   
    <section id="sss-listesi" class="kp-sss-section">
      <div class="container">

        <div class="kp-section-head">
          <h2 class="kp-section-title">Merak Edilenler</h2>
          <p class="kp-section-subtitle">
            En sık sorulan soruları ve cevaplarını aşağıda bulabilirsiniz.
          </p>
        </div>

        <div class="accordion kp-sss-accordion" id="sssAccordion">

         
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button"
                      data-bs-toggle="collapse" data-bs-target="#sss1">
                Keşif ve teklif süreci nasıl ilerliyor?
              </button>
            </h2>
            <div id="sss1" class="accordion-collapse collapse show"
                 data-bs-parent="#sssAccordion">
              <div class="accordion-body">
                Öncelikle ücretsiz keşif yapılır. Alan ölçülendirilir, ihtiyaçlar belirlenir
                ve buna uygun detaylı bir teklif hazırlanır.
              </div>
            </div>
          </div>

       
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button"
                      data-bs-toggle="collapse" data-bs-target="#sss2">
                Anahtar teslim tadilat neyi kapsar?
              </button>
            </h2>
            <div id="sss2" class="accordion-collapse collapse"
                 data-bs-parent="#sssAccordion">
              <div class="accordion-body">
                Planlama, malzeme temini, uygulama ve temiz teslim dahil tüm süreçleri kapsar.
                Siz sadece sonucu teslim alırsınız.
              </div>
            </div>
          </div>

     
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button"
                      data-bs-toggle="collapse" data-bs-target="#sss3">
                Kullanılan malzemeleri kim seçiyor?
              </button>
            </h2>
            <div id="sss3" class="accordion-collapse collapse"
                 data-bs-parent="#sssAccordion">
              <div class="accordion-body">
                Malzemeler müşteri tercihi doğrultusunda seçilir. Dilerseniz alternatifler
                sunarak karar sürecinde destek oluruz.
              </div>
            </div>
          </div>

      
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button"
                      data-bs-toggle="collapse" data-bs-target="#sss4">
                İş süresi ne kadar sürer?
              </button>
            </h2>
            <div id="sss4" class="accordion-collapse collapse"
                 data-bs-parent="#sssAccordion">
              <div class="accordion-body">
                İşin kapsamına göre değişmekle birlikte, başlangıçta net bir süre planı
                paylaşılır ve bu plana sadık kalınır.
              </div>
            </div>
          </div>

    
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button"
                      data-bs-toggle="collapse" data-bs-target="#sss5">
                Fiyatlandırma nasıl belirleniyor?
              </button>
            </h2>
            <div id="sss5" class="accordion-collapse collapse"
                 data-bs-parent="#sssAccordion">
              <div class="accordion-body">
                Alan büyüklüğü, iş kapsamı ve malzeme tercihleri dikkate alınarak
                şeffaf ve detaylı bir fiyatlandırma yapılır.
              </div>
            </div>
          </div>


          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button"
                      data-bs-toggle="collapse" data-bs-target="#sss6">
                İş bittikten sonra destek alabilir miyim?
              </button>
            </h2>
            <div id="sss6" class="accordion-collapse collapse"
                 data-bs-parent="#sssAccordion">
              <div class="accordion-body">
                Evet. İş tesliminden sonra da oluşabilecek konularda destek sağlamaya devam ederiz.
              </div>
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
