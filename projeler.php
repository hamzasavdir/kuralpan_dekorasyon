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

<style>
  .kp-lb{position:fixed; inset:0; display:none; place-items:center; z-index:999999; padding:18px;}
  .kp-lb.is-open{display:grid;}
  .kp-lb-backdrop{position:absolute; inset:0; background:rgba(0,0,0,.65);}
  .kp-lb-content{position:relative; z-index:1; max-width:min(1100px,96vw); max-height:90vh;}
  .kp-lb-content img{max-width:100%; max-height:90vh; display:block; border-radius:12px; background:#000;}
  .kp-lb-close{position:absolute; top:-12px; right:-12px; width:44px; height:44px; border-radius:999px; border:none; cursor:pointer; font-size:28px; background:#fff;}
</style>

<style>
  .kp-project-title{ color:#111 !important; }
  .kp-project-text{ color:#333 !important; }
  .kp-project-link{ color:#2e8fe8 !important; }
  .kp-project-body{ background:#f8fafc !important; }
</style>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kuralpan Dekorasyon | Projeler</title>

 

 
  <link rel="stylesheet" href="/kuralpan_dekorasyon/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  
  <link rel="stylesheet" href="/kuralpan_dekorasyon/css/stil_genel.css">
  <link rel="stylesheet" href="css/cookie.css">
</head>

<body class="kp-body">

 
  <?php include __DIR__ . '/icerik/ust_menu.php'; ?>
  <header class="kp-page-hero" style="--kp-hero-bg: url('/kuralpan_dekorasyon/img/hero/hero-home.jpg');">
  <div class="container kp-page-hero-inner">
    <h1 class="kp-page-title">PROJELER</h1>
    <div class="kp-breadcrumb">
      <a href="/kuralpan_dekorasyon/index.php">Anasayfa</a>
      <span>/</span>
      <span>Projeler</span>
    </div>
  </div>
</header>


  <main class="kp-main">

   
    <section class="kp-projects-hero">
      <div class="container-fluid kp-projects-hero-container">
        <div class="row">

         
          <div class="col-lg-9">
            <div class="kp-projects-hero-content">
              <div class="kp-projects-badge">PROJELER</div>

              <h1 class="kp-projects-title">
                Tamamladığımız<br>
                Çalışmalar
              </h1>

              <p class="kp-projects-text">
                Tamamladığımız her proje, kaliteye verdiğimiz önemin ve işimize duyduğumuz saygının bir yansımasıdır.
Planlama aşamasından teslim sürecine kadar tüm çalışmaları titizlikle yürütüyor, müşterilerimize uzun ömürlü ve estetik çözümler sunuyoruz.
              </p>

              <div class="kp-projects-buttons">
                <a href="/kuralpan_dekorasyon/iletisim.php" class="btn kp-btn-primary">Teklif Al</a>
                <a href="#proje-listesi" class="btn kp-btn-outline">Projeleri Gör</a>
              </div>
            </div>
          </div>

          

        </div>
      </div>
    </section>


<section id="proje-listesi" class="kp-projects-section">
  <div class="container">

    <div class="kp-section-head">
      <h2 class="kp-section-title">Proje Galerisi</h2>
      <p class="kp-section-subtitle">
        
      </p>
    </div>

    <div class="row g-4">

     
      <div class="col-md-6 col-lg-4">
        <div class="kp-project-card">
          <a class="kp-project-thumb" href="/kuralpan_dekorasyon/img/projeler/proje1.jpg" data-kp-lightbox>
            <img src="/kuralpan_dekorasyon/img/projeler/proje1.jpg" alt="Modern Salon Yenileme">
          </a>
          <div class="kp-project-body">
            <h3 class="kp-project-title">Modern Salon Yenileme</h3>
            <p class="kp-project-text">Boya-badana, dekoratif duvar paneli ve aydınlatma düzenlemeleri.</p>
            <a class="kp-project-link" href="/kuralpan_dekorasyon/iletisim.php">
              Benzerini İste <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

    
      <div class="col-md-6 col-lg-4">
        <div class="kp-project-card">
          <a class="kp-project-thumb" href="/kuralpan_dekorasyon/img/projeler/proje2.jpg" data-kp-lightbox>
            <img src="/kuralpan_dekorasyon/img/projeler/proje2.jpg" alt="Mutfak Dolap & Tezgah">
          </a>
          <div class="kp-project-body">
            <h3 class="kp-project-title">Mutfak Dolap & Tezgah</h3>
            <p class="kp-project-text">Dolap yenileme, tezgah değişimi ve seramik uygulaması.</p>
            <a class="kp-project-link" href="/kuralpan_dekorasyon/iletisim.php">
              Benzerini İste <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      
      <div class="col-md-6 col-lg-4">
        <div class="kp-project-card">
          <a class="kp-project-thumb" href="/kuralpan_dekorasyon/img/projeler/proje3.jpg" data-kp-lightbox>
            <img src="/kuralpan_dekorasyon/img/projeler/proje3.jpg" alt="Banyo Komple Yenileme">
          </a>
          <div class="kp-project-body">
            <h3 class="kp-project-title">Banyo Komple Yenileme</h3>
            <p class="kp-project-text">Seramik, tesisat kontrolü ve duş alanı tasarımı.</p>
            <a class="kp-project-link" href="/kuralpan_dekorasyon/iletisim.php">
              Benzerini İste <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

    
      <div class="col-md-6 col-lg-4">
        <div class="kp-project-card">
          <a class="kp-project-thumb" href="/kuralpan_dekorasyon/img/projeler/proje4.jpg" data-kp-lightbox>
            <img src="/kuralpan_dekorasyon/img/projeler/proje4.jpg" alt="Ofis Dönüşüm Projesi">
          </a>
          <div class="kp-project-body">
            <h3 class="kp-project-title">Ofis Dönüşüm Projesi</h3>
            <p class="kp-project-text">Bölümleme, zemin ve aydınlatma ile kurumsal düzenleme.</p>
            <a class="kp-project-link" href="/kuralpan_dekorasyon/iletisim.php">
              Benzerini İste <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      
      <div class="col-md-6 col-lg-4">
        <div class="kp-project-card">
          <a class="kp-project-thumb" href="/kuralpan_dekorasyon/img/projeler/proje5.jpg" data-kp-lightbox>
            <img src="/kuralpan_dekorasyon/img/projeler/proje5.jpg" alt="Zemin & Parke Uygulaması">
          </a>
          <div class="kp-project-body">
            <h3 class="kp-project-title">Zemin & Parke Uygulaması</h3>
            <p class="kp-project-text">Zemin hazırlığı ve laminat/parke uygulamaları.</p>
            <a class="kp-project-link" href="/kuralpan_dekorasyon/iletisim.php">
              Benzerini İste <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

    
      <div class="col-md-6 col-lg-4">
        <div class="kp-project-card">
          <a class="kp-project-thumb" href="/kuralpan_dekorasyon/img/projeler/proje6.jpg" data-kp-lightbox>
            <img src="/kuralpan_dekorasyon/img/projeler/proje6.jpg" alt="Dekoratif TV Ünitesi">
          </a>
          <div class="kp-project-body">
            <h3 class="kp-project-title">Dekoratif TV Ünitesi</h3>
            <p class="kp-project-text">Çıta uygulama, niş detay ve dekoratif aydınlatma.</p>
            <a class="kp-project-link" href="/kuralpan_dekorasyon/iletisim.php">
              Benzerini İste <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

     
      <div class="col-md-6 col-lg-4">
        <div class="kp-project-card">
          <a class="kp-project-thumb" href="/kuralpan_dekorasyon/img/projeler/proje7.jpg" data-kp-lightbox>
            <img src="/kuralpan_dekorasyon/img/projeler/proje7.jpg" alt="Alçıpan Asma Tavan">
          </a>
          <div class="kp-project-body">
            <h3 class="kp-project-title">Alçıpan Asma Tavan</h3>
            <p class="kp-project-text">Spot aydınlatmalı asma tavan ve detaylı alçıpan uygulaması.</p>
            <a class="kp-project-link" href="/kuralpan_dekorasyon/iletisim.php">
              Benzerini İste <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

     
      <div class="col-md-6 col-lg-4">
        <div class="kp-project-card">
          <a class="kp-project-thumb" href="/kuralpan_dekorasyon/img/projeler/proje8.jpg" data-kp-lightbox>
            <img src="/kuralpan_dekorasyon/img/projeler/proje8.jpg" alt="Duvar Kağıdı Uygulama">
          </a>
          <div class="kp-project-body">
            <h3 class="kp-project-title">Duvar Kağıdı Uygulama</h3>
            <p class="kp-project-text">Keşif, zemin hazırlığı ve temiz işçilikle duvar kağıdı uygulaması.</p>
            <a class="kp-project-link" href="/kuralpan_dekorasyon/iletisim.php">
              Benzerini İste <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

     
      <div class="col-md-6 col-lg-4">
        <div class="kp-project-card">
          <a class="kp-project-thumb" href="/kuralpan_dekorasyon/img/projeler/proje9.jpg" data-kp-lightbox>
            <img src="/kuralpan_dekorasyon/img/projeler/proje9.jpg" alt="Balkon / Teras Yenileme">
          </a>
          <div class="kp-project-body">
            <h3 class="kp-project-title">Balkon / Teras Yenileme</h3>
            <p class="kp-project-text">Dış mekâna uygun zemin kaplama, su yalıtımı ve dekoratif düzenleme.</p>
            <a class="kp-project-link" href="/kuralpan_dekorasyon/iletisim.php">
              Benzerini İste <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

     
      <div class="col-md-6 col-lg-4">
        <div class="kp-project-card">
          <a class="kp-project-thumb" href="/kuralpan_dekorasyon/img/projeler/proje10.jpg" data-kp-lightbox>
            <img src="/kuralpan_dekorasyon/img/projeler/proje10.jpg" alt="Kapı & Pencere Doğrama">
          </a>
          <div class="kp-project-body">
            <h3 class="kp-project-title">Kapı & Pencere Doğrama</h3>
            <p class="kp-project-text">Kapı değişimi, fitil/kol yenileme ve pencere sızdırmazlık iyileştirmeleri.</p>
            <a class="kp-project-link" href="/kuralpan_dekorasyon/iletisim.php">
              Benzerini İste <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

 
      <div class="col-md-6 col-lg-4">
        <div class="kp-project-card">
          <a class="kp-project-thumb" href="/kuralpan_dekorasyon/img/projeler/proje11.jpg" data-kp-lightbox>
            <img src="/kuralpan_dekorasyon/img/projeler/proje11.jpg" alt="İç Cephe Boya & Badana">
          </a>
          <div class="kp-project-body">
            <h3 class="kp-project-title">İç Cephe Boya & Badana</h3>
            <p class="kp-project-text">Astarlama, saten alçı düzeltme ve profesyonel boya uygulaması.</p>
            <a class="kp-project-link" href="/kuralpan_dekorasyon/iletisim.php">
              Benzerini İste <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

 
      <div class="col-md-6 col-lg-4">
        <div class="kp-project-card">
          <a class="kp-project-thumb" href="/kuralpan_dekorasyon/img/projeler/proje12.jpg" data-kp-lightbox>
            <img src="/kuralpan_dekorasyon/img/projeler/proje12.jpg" alt="Mutfak Seramik & Tezgah Arası">
          </a>
          <div class="kp-project-body">
            <h3 class="kp-project-title">Çatı Tadialtı</h3>
            <p class="kp-project-text">Çatınızın yalıtım bakım su kaçaklarına karşı yapılan uygulamalar.</p>
            <a class="kp-project-link" href="/kuralpan_dekorasyon/iletisim.php">
              Benzerini İste <i class="bi bi-arrow-right"></i>
            </a>
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
        TEKLİF AL
        <span class="kp-cta-btn-icon">↗</span>
      </a>
    </div>
  </div>
</section>

<div class="kp-lb" id="kpLightbox" aria-hidden="true">
  <div class="kp-lb-backdrop" data-kp-lb-close="1"></div>
  <div class="kp-lb-content" role="dialog" aria-label="Görsel">
    <button class="kp-lb-close" type="button" data-kp-lb-close="1" aria-label="Kapat">×</button>
    <img id="kpLightboxImg" src="" alt="Büyük Görsel">
  </div>
</div>

<?php include __DIR__ . '/icerik/reklam_pano.php'; ?>



 
  <?php include __DIR__ . '/icerik/alt_footer.php'; ?>

  <script src="/kuralpan_dekorasyon/js/bootstrap.bundle.min.js"></script>
  

<?php include __DIR__ . "/icerik/cookie_banner.php"; ?>
<script src="js/cookie.js"></script>

<script src="/kuralpan_dekorasyon/js/proje_lightbox.js"></script>


<script>
document.addEventListener("DOMContentLoaded", () => {
  const lb = document.getElementById("kpLightbox");
  const img = document.getElementById("kpLightboxImg");
  if(!lb || !img){ console.log("Lightbox element yok"); return; }

  function open(src){
    img.src = src;
    lb.classList.add("is-open");
    lb.setAttribute("aria-hidden","false");
    document.body.style.overflow="hidden";
  }
  function close(){
    lb.classList.remove("is-open");
    lb.setAttribute("aria-hidden","true");
    img.src="";
    document.body.style.overflow="";
  }

  document.addEventListener("click",(e)=>{
    const a = e.target.closest("[data-kp-lightbox]");
    if(a){
      e.preventDefault();
      console.log("Lightbox açılıyor:", a.getAttribute("href"));
      open(a.getAttribute("href"));
      return;
    }
    if(e.target.closest("[data-kp-lb-close='1']")){
      e.preventDefault();
      close();
    }
  });

  document.addEventListener("keydown",(e)=>{
    if(e.key==="Escape" && lb.classList.contains("is-open")) close();
  });
});
</script>

<script src="/kuralpan_dekorasyon/js/edge-ad.js"></script>


<div class="kp-edge-ad" id="kpEdgeAd">



  <a class="kp-edge-ad-link" href="/kuralpan_dekorasyon/iletisim.php">
    <span class="kp-edge-ad-tag">REKLAM</span>
    <span class="kp-edge-ad-text">BOYA<br>REKLAMI</span>
  </a>

</div>


</body>
</html>
