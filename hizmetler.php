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
  <title>Kuralpan Dekorasyon | Hizmetlerimiz</title>

 
  <link rel="stylesheet" href="/kuralpan_dekorasyon/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">



 
  <link rel="stylesheet" href="css/stil_genel.css">
  <link rel="stylesheet" href="css/hizmetler.css">
<link rel="stylesheet" href="/kuralpan_dekorasyon/css/cookie.css?v=10">

</head>

<body class="kp-body">


  <?php include __DIR__ . '/icerik/ust_menu.php'; ?>
  <header class="kp-page-hero" style="--kp-hero-bg: url('/kuralpan_dekorasyon/img/hero/hero-home.jpg');">
  <div class="container kp-page-hero-inner">
    <h1 class="kp-page-title">HİZMETLERİMİZ</h1>
    <div class="kp-breadcrumb">
      <a href="/kuralpan_dekorasyon/index.php">Anasayfa</a>
      <span>/</span>
      <span>Hizmetlerimiz</span>
    </div>
  </div>
</header>


  <main class="kp-main">


    <section class="kp-services-hero">
      <div class="container-fluid kp-services-hero-container">
        <div class="row">

        
          <div class="col-lg-9">
            <div class="kp-services-hero-content">
              <div class="kp-services-badge">HİZMETLERİMİZ</div>

              <h1 class="kp-services-title">
                İhtiyacınıza Uygun<br>
                Profesyonel Çözümler
              </h1>

              <p class="kp-services-text">
                İç mekân tasarımından anahtar teslim tadilata, boya-badana ve zemin uygulamalarına kadar
                tüm süreçlerde planlı, şeffaf ve kaliteli hizmet sunuyoruz.
              </p>

              <div class="kp-services-buttons">
                <a href="/kuralpan_dekorasyon/iletisim.php" class="btn kp-btn-primary">
                  Teklif Al
                </a>
                <a href="#hizmet-listesi" class="btn kp-btn-outline">
                  Hizmetleri Gör
                </a>
              </div>
            </div>
          </div>

        
        </div>
      </div>
    </section>

   
    <section id="hizmet-listesi" class="kp-services-section">
      <div class="container">
        <div class="kp-section-head">
          <h2 class="kp-section-title">Hizmetler</h2>
          <p class="kp-section-subtitle">
            Aşağıdaki başlıklardan ihtiyacınıza uygun hizmeti seçebilir, detaylı bilgi için teklif alabilirsiniz.
          </p>
        </div>

        <div class="row g-4">

        
          <div class="col-md-6 col-lg-4" id="ic-mekan">
            <div class="kp-service-card">
              <div class="kp-service-icon"><i class="bi bi-house"></i></div>
              <h3 class="kp-service-title">İç Mekan Tasarımı</h3>
              <p class="kp-service-text">
                Konsept tasarım, renk–malzeme seçimi, alan planlaması ve uygulama danışmanlığı.
              </p>
              <ul class="kp-service-list">
                <li><i class="bi bi-check2"></i> 2D/3D fikir desteği</li>
                <li><i class="bi bi-check2"></i> Fonksiyonel alan planı</li>
                <li><i class="bi bi-check2"></i> Malzeme & renk uyumu</li>
              </ul>
             <div class="kp-service-actions">
  <a class="kp-btn-secondary" href="ic_mekan_tasarimi.php">
    Ayrıntılı Bilgi <i class="bi bi-info-circle"></i>
  </a>

  <a class="kp-btn-primary" href="iletisim.php">
    Teklif Al <i class="bi bi-arrow-right"></i>
  </a>
</div>

            </div>
          </div>

      
          <div class="col-md-6 col-lg-4" id="anahtar-teslim">
            <div class="kp-service-card">
              <div class="kp-service-icon"><i class="bi bi-tools"></i></div>
              <h3 class="kp-service-title">Anahtar Teslim Tadilat</h3>
              <p class="kp-service-text">
                Keşiften teslimata tüm süreci yönetiriz: planlama, tedarik ve uygulama.
              </p>
              <ul class="kp-service-list">
                <li><i class="bi bi-check2"></i> Süreç & bütçe planı</li>
                <li><i class="bi bi-check2"></i> Usta koordinasyonu</li>
                <li><i class="bi bi-check2"></i> Temiz teslim</li>
              </ul>
             <div class="kp-service-actions">
  <a class="kp-btn-secondary" href="anahtar_teslim_tadilat.php">
    Ayrıntılı Bilgi <i class="bi bi-info-circle"></i>
  </a>

  <a class="kp-btn-primary" href="iletisim.php">
    Teklif Al <i class="bi bi-arrow-right"></i>
  </a>
</div>

            </div>
          </div>

         
          <div class="col-md-6 col-lg-4" id="ofis-uygulamalari">
            <div class="kp-service-card">
              <div class="kp-service-icon"><i class="bi bi-building"></i></div>
              <h3 class="kp-service-title">Ofis Uygulamaları</h3>
              <p class="kp-service-text">
                Kurumsal kimliğe uygun, verimliliği artıran modern ofis çözümleri.
              </p>
              <ul class="kp-service-list">
                <li><i class="bi bi-check2"></i> Bölümleme / düzen</li>
                <li><i class="bi bi-check2"></i> Akustik & aydınlatma</li>
                <li><i class="bi bi-check2"></i> Hızlı dönüşüm</li>
              </ul>
              <div class="kp-service-actions">
  <a class="kp-btn-secondary" href="ofis_uygulamalari.php">
    Ayrıntılı Bilgi <i class="bi bi-info-circle"></i>
  </a>

  <a class="kp-btn-primary" href="iletisim.php">
    Teklif Al <i class="bi bi-arrow-right"></i>
  </a>
</div>

            </div>
          </div>

       
          <div class="col-md-6 col-lg-4" id="banyo">
            <div class="kp-service-card">
              <div class="kp-service-icon"><i class="bi bi-droplet"></i></div>
              <h3 class="kp-service-title">Banyo Yenileme</h3>
              <p class="kp-service-text">
                Seramik, tesisat, duş alanı, dolap ve aksesuarlarla komple banyo dönüşümü.
              </p>
              <ul class="kp-service-list">
                <li><i class="bi bi-check2"></i> Su yalıtımı kontrolü</li>
                <li><i class="bi bi-check2"></i> Modern seramik seçimleri</li>
                <li><i class="bi bi-check2"></i> İşlevsel depolama</li>
              </ul>
             <div class="kp-service-actions">
  <a class="kp-btn-secondary" href="banyo_yenileme.php">
    Ayrıntılı Bilgi <i class="bi bi-info-circle"></i>
  </a>

  <a class="kp-btn-primary" href="iletisim.php">
    Teklif Al <i class="bi bi-arrow-right"></i>
  </a>
</div>

            </div>
          </div>

       
          <div class="col-md-6 col-lg-4" id="mutfak">
            <div class="kp-service-card">
              <div class="kp-service-icon"><i class="bi bi-egg-fried"></i></div>
              <h3 class="kp-service-title">Mutfak Yenileme</h3>
              <p class="kp-service-text">
                Dolap, tezgah, seramik ve aydınlatma ile mutfağınızı baştan tasarlarız.
              </p>
              <ul class="kp-service-list">
                <li><i class="bi bi-check2"></i> Ergonomik plan</li>
                <li><i class="bi bi-check2"></i> Dayanıklı yüzeyler</li>
                <li><i class="bi bi-check2"></i> Temiz işçilik</li>
              </ul>
              <div class="kp-service-actions">
  <a class="kp-btn-secondary" href="mutfak_yenileme.php">
    Ayrıntılı Bilgi <i class="bi bi-info-circle"></i>
  </a>

  <a class="kp-btn-primary" href="iletisim.php">
    Teklif Al <i class="bi bi-arrow-right"></i>
  </a>
</div>

            </div>
          </div>

      
          <div class="col-md-6 col-lg-4" id="zemin-parke">
            <div class="kp-service-card">
              <div class="kp-service-icon"><i class="bi bi-grid-3x3-gap"></i></div>
              <h3 class="kp-service-title">Zemin & Parke</h3>
              <p class="kp-service-text">
                Zemin hazırlığı, şap düzeltme ve parke/laminat uygulamaları.
              </p>
              <ul class="kp-service-list">
                <li><i class="bi bi-check2"></i> Düzgün altyapı</li>
                <li><i class="bi bi-check2"></i> Dayanıklı uygulama</li>
                <li><i class="bi bi-check2"></i> Şık görünüm</li>
              </ul>
              <div class="kp-service-actions">
  <a class="kp-btn-secondary" href="zemin_parke.php">
    Ayrıntılı Bilgi <i class="bi bi-info-circle"></i>
  </a>

  <a class="kp-btn-primary" href="iletisim.php">
    Teklif Al <i class="bi bi-arrow-right"></i>
  </a>
</div>

            </div>
          </div>

     
          <div class="col-md-6 col-lg-4" id="boya-badana">
            <div class="kp-service-card">
              <div class="kp-service-icon"><i class="bi bi-paint-bucket"></i></div>
              <h3 class="kp-service-title">Boya - Badana</h3>
              <p class="kp-service-text">
                Yüzey hazırlığı, astar, boya uygulaması ve temiz teslim.
              </p>
              <ul class="kp-service-list">
                <li><i class="bi bi-check2"></i> Kenar bantlama</li>
                <li><i class="bi bi-check2"></i> Leke/çatlak onarımı</li>
                <li><i class="bi bi-check2"></i> Temiz çalışma</li>
              </ul>
             <div class="kp-service-actions">
  <a class="kp-btn-secondary" href="boya_badana.php">
    Ayrıntılı Bilgi <i class="bi bi-info-circle"></i>
  </a>

  <a class="kp-btn-primary" href="iletisim.php">
    Teklif Al <i class="bi bi-arrow-right"></i>
  </a>
</div>

            </div>
          </div>

       
          <div class="col-md-6 col-lg-4" id="alci-asmatavan">
            <div class="kp-service-card">
              <div class="kp-service-icon"><i class="bi bi-layers"></i></div>
              <h3 class="kp-service-title">Alçı - Asma Tavan</h3>
              <p class="kp-service-text">
                Kartonpiyer, spot aydınlatma uyumlu asma tavan ve alçı uygulamaları.
              </p>
              <ul class="kp-service-list">
                <li><i class="bi bi-check2"></i> Düzgün yüzey</li>
                <li><i class="bi bi-check2"></i> Estetik detaylar</li>
                <li><i class="bi bi-check2"></i> Işık planı uyumu</li>
              </ul>
             <div class="kp-service-actions">
  <a class="kp-btn-secondary" href="alci_asma_tavan.php">
    Ayrıntılı Bilgi <i class="bi bi-info-circle"></i>
  </a>

  <a class="kp-btn-primary" href="iletisim.php">
    Teklif Al <i class="bi bi-arrow-right"></i>
  </a>
</div>

            </div>
          </div>

       
          <div class="col-md-6 col-lg-4" id="dekoratif-uygulamalar">
            <div class="kp-service-card">
              <div class="kp-service-icon"><i class="bi bi-stars"></i></div>
              <h3 class="kp-service-title">Dekoratif Uygulamalar</h3>
              <p class="kp-service-text">
                Duvar panelleri, çıta uygulama, niş/TV ünitesi gibi dekoratif çözümler.
              </p>
              <ul class="kp-service-list">
                <li><i class="bi bi-check2"></i> Modern çizgiler</li>
                <li><i class="bi bi-check2"></i> Özel ölçü uygulama</li>
                <li><i class="bi bi-check2"></i> Mekana uyum</li>
              </ul>
              <div class="kp-service-actions">
  <a class="kp-btn-secondary" href="dekoratif_uygulamalar.php">
    Ayrıntılı Bilgi <i class="bi bi-info-circle"></i>
  </a>

  <a class="kp-btn-primary" href="iletisim.php">
    Teklif Al <i class="bi bi-arrow-right"></i>
  </a>
</div>

            </div>
          </div>

        </div>
      </div>
    </section>

    
    <section class="kp-process-section">
      <div class="container">
        <div class="kp-section-head">
          <h2 class="kp-section-title">Çalışma Sürecimiz</h2>
          <p class="kp-section-subtitle">Her projeyi planlı ilerletir, düzenli bilgilendirme ile yönetiriz.</p>
        </div>

        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="kp-process-card">
              <div class="kp-process-no">01</div>
              <div class="kp-process-title">Keşif</div>
              <div class="kp-process-text">Alan inceleme, ihtiyaç analizi, ölçülendirme.</div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="kp-process-card">
              <div class="kp-process-no">02</div>
              <div class="kp-process-title">Planlama</div>
              <div class="kp-process-text">Malzeme seçimi, iş planı, zaman çizelgesi.</div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="kp-process-card">
              <div class="kp-process-no">03</div>
              <div class="kp-process-title">Uygulama</div>
              <div class="kp-process-text">Düzenli çalışma, kalite kontrol ve temizlik.</div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="kp-process-card">
              <div class="kp-process-no">04</div>
              <div class="kp-process-title">Teslim</div>
              <div class="kp-process-text">Son kontrol, temiz teslim ve memnuniyet.</div>
            </div>
          </div>
        </div>

      </div>
    </section>

 
  </main>

<section class="kp-cta">
  <div class="container">
    <div class="kp-cta-box">
      <h2 class="kp-cta-title">
        Hayalinizdeki Mekân Sadece Bir<br>
        Adım Uzağınızda
      </h2>

      <a href="/kuralpan_dekorasyon/iletisim.php" class="kp-cta-btn">
        TEKLİF AL
        <span class="kp-cta-btn-icon">↗</span>
      </a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/icerik/reklam_pano.php'; ?>

  
  
  <?php include __DIR__ . '/icerik/alt_footer.php'; ?>
<?php include __DIR__ . "/icerik/cookie_banner.php"; ?>
 <script src="/kuralpan_dekorasyon/js/bootstrap.bundle.min.js"></script>
  <script src="/kuralpan_dekorasyon/js/edge-ad.js"></script>


<div class="kp-edge-ad" id="kpEdgeAd">



  <a class="kp-edge-ad-link" href="/kuralpan_dekorasyon/iletisim.php">
    <span class="kp-edge-ad-tag">REKLAM</span>
    <span class="kp-edge-ad-text">BOYA<br>REKLAMI</span>
  </a>

</div>


</body>
</html>
