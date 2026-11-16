<?php $BASE="/kuralpan_dekorasyon"; ?>
<!doctype html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kuralpan Dekorasyon | İç Mekan Tasarımı</title>

  <link rel="stylesheet" href="<?= $BASE ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="<?= $BASE ?>/css/stil_genel.css">
  <link rel="stylesheet" href="<?= $BASE ?>/css/hizmet_detay.css">
  <link rel="stylesheet" href="<?= $BASE ?>/css/cookie.css">
</head>

<body class="kp-body">
<?php include __DIR__ . '/icerik/ust_menu.php'; ?>

<main class="kp-main kp-detail-main">
  <div class="container">

    <section class="kp-dhero mt-3">
      <div class="kp-dhero-inner">
        <div class="kp-dbadge"><i class="bi bi-house-heart"></i> İÇ MEKAN TASARIMI</div>
        <h1 class="kp-dtitle">Yaşam Alanınızı “Sadece Güzel” Değil,<br> Aynı Zamanda Fonksiyonel Hale Getirelim</h1>
        <p class="kp-dlead">
          İç mekân tasarımı, yalnızca mobilya seçmek değildir. Doğru planlama yapılmadığında mekân daralır, ışık yanlış düşer,
          depolama yetersiz kalır ve “oldu” sandığınız dekor kısa sürede yorar. Kuralpan Dekorasyon olarak; alanı ölçer,
          ihtiyaçlarınızı dinler, stilinizi netleştirir ve görsel olarak etkileyici, kullanımda rahat bir mekânı adım adım kurarız.
        </p>

        <div class="kp-dchips">
          <div class="kp-dchip"><i class="bi bi-aspect-ratio"></i> Alan planı & yerleşim</div>
          <div class="kp-dchip"><i class="bi bi-palette2"></i> Renk–malzeme uyumu</div>
          <div class="kp-dchip"><i class="bi bi-lightbulb"></i> Aydınlatma kurgusu</div>
          <div class="kp-dchip"><i class="bi bi-bounding-box-circles"></i> 2D/3D yönlendirme</div>
        </div>

        <div class="kp-dactions">
          <a class="kp-dbtn kp-dbtn--back" href="<?= $BASE ?>/hizmetler.php#ic-mekan"><i class="bi bi-arrow-left"></i> Hizmetlere Dön</a>
          <a class="kp-dbtn kp-dbtn--offer" href="<?= $BASE ?>/iletisim.php">Teklif Al <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </section>

    <section class="kp-dsection">
      <div class="row g-4">
        <div class="col-lg-6">
          <div class="card kp-dcard h-100">
            <div class="card-body">
              <h2 class="kp-dh2">Bu hizmet size ne kazandırır?</h2>
              <p class="kp-dsub">“Güzel görünüm” kadar “yaşamı kolaylaştırma” da önemlidir. Amacımız gösteriş değil; dengeli ve uzun ömürlü bir düzen kurmaktır.</p>
              <ul class="kp-dlist">
                <li><i class="bi bi-check-circle"></i> Alanı verimli kullanır; ferahlık hissini artırır.</li>
                <li><i class="bi bi-check-circle"></i> Işığı iyileştirir; daha sıcak bir atmosfer oluşturur.</li>
                <li><i class="bi bi-check-circle"></i> Bütçeyi korur; gereksiz harcamayı azaltır.</li>
                <li><i class="bi bi-check-circle"></i> Stil bütünlüğü sağlar; mekân “tamamlanmış” görünür.</li>
                <li><i class="bi bi-check-circle"></i> Uygulama risklerini azaltır; ölçü/uyum hataları düşer.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card kp-dcard h-100">
            <div class="card-body">
              <h2 class="kp-dh2">En çok talep edilen çözümler</h2>
              <p class="kp-dsub">En hızlı fark yaratan dokunuşları doğru yerde kullanırız. Mekânınız “yenilenmiş” değil, “yeni bir düzene kavuşmuş” gibi hissettirir.</p>
              <ul class="kp-dlist">
                <li><i class="bi bi-check-circle"></i> Salon: TV ünitesi, duvar düzeni, oturma kurgusu.</li>
                <li><i class="bi bi-check-circle"></i> Yatak odası: depolama planı, başlık duvarı, ışık dengesi.</li>
                <li><i class="bi bi-check-circle"></i> Antre: vestiyer/dresuar, ayna ile ferahlık.</li>
                <li><i class="bi bi-check-circle"></i> Çalışma alanı: odak artıran yerleşim, kablo düzeni.</li>
                <li><i class="bi bi-check-circle"></i> Renk & doku: uyumlu palet, doğru malzeme hissi.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="kp-dsection">
      <h2 class="kp-dh2">Nasıl ilerliyoruz?</h2>
      <p class="kp-dsub">Süreci şeffaf yürütürüz: ne yapılacak, ne zaman yapılacak, hangi malzeme seçilecek. Böylece sürpriz değil, kontrollü ilerleme olur.</p>

      <div class="row g-3">
        <div class="col-lg-6"><div class="kp-dstep"><div class="kp-dstep-no">1</div><div><h4>Keşif & İhtiyaç Analizi</h4><p>Alan ölçümü, kullanım alışkanlıkları ve beklenti netleştirilir.</p></div></div></div>
        <div class="col-lg-6"><div class="kp-dstep"><div class="kp-dstep-no">2</div><div><h4>Yerleşim & Konsept</h4><p>Fonksiyonel plan, mobilya ölçülendirme ve tasarım dili oluşturulur.</p></div></div></div>
        <div class="col-lg-6"><div class="kp-dstep"><div class="kp-dstep-no">3</div><div><h4>Renk–Malzeme–Işık</h4><p>Duvar/zemin/doku uyumu ve aydınlatma planı belirlenir.</p></div></div></div>
        <div class="col-lg-6"><div class="kp-dstep"><div class="kp-dstep-no">4</div><div><h4>Uygulama & Teslim</h4><p>İşçilik ve bitiş kontrolleri yapılarak temiz teslim edilir.</p></div></div></div>
      </div>
    </section>

    <section class="kp-dsection">
      <div class="row g-4">
        <div class="col-lg-7">
          <div class="card kp-dcard h-100">
            <div class="card-body">
              <h2 class="kp-dh2">Uygulama kapsamı</h2>
              <p class="kp-dsub">İsteğe göre danışmanlık veya uygulama dahil ilerleriz. En sık talep edilen kapsamlar:</p>
              <div class="row g-3">
                <div class="col-md-6">
                  <ul class="kp-dlist">
                    <li><i class="bi bi-check-circle"></i> Yerleşim planı / ölçülendirme</li>
                    <li><i class="bi bi-check-circle"></i> Renk paleti & malzeme seçimi</li>
                    <li><i class="bi bi-check-circle"></i> Duvar dekoru (panel/çıta vb.)</li>
                    <li><i class="bi bi-check-circle"></i> Aydınlatma düzeni</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="kp-dlist">
                    <li><i class="bi bi-check-circle"></i> Depolama çözümleri</li>
                    <li><i class="bi bi-check-circle"></i> Mobilya uyum kontrolü</li>
                    <li><i class="bi bi-check-circle"></i> Usta koordinasyonu (opsiyonel)</li>
                    <li><i class="bi bi-check-circle"></i> Son kontrol & teslim</li>
                  </ul>
                </div>
              </div>
              <div class="alert alert-primary mt-3 mb-0" style="border-radius:14px;">
                <b>Not:</b> Keşiften sonra mekâna özel alternatifli plan çıkarır, bütçeyi netleştiririz.
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="kp-dcta h-100 d-flex flex-column justify-content-center">
            <div>
              <h3>İlk adım: keşif ve doğru plan</h3>
              <p>Bize alan fotoğrafı/ölçü veya kısa bir ihtiyaç listesi gönderin. Size uygun tasarım dili, malzeme önerileri ve uygulama planıyla hızlıca geri dönüş yapalım.</p>
            </div>
            <div class="d-flex justify-content-center mt-2">
              <a class="kp-dbtn kp-dbtn--offer" href="<?= $BASE ?>/iletisim.php">Hemen Teklif Al <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="kp-dsection pb-4">
      <h2 class="kp-dh2">Sık sorulanlar</h2>
      <p class="kp-dsub">Karar vermeden önce en çok sorulan soruları netleştirelim.</p>

      <div class="accordion" id="faqIcMekan">
        <div class="accordion-item kp-faq-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ic1">Süreç ne kadar sürer?</button>
          </h2>
          <div id="ic1" class="accordion-collapse collapse show" data-bs-parent="#faqIcMekan">
            <div class="accordion-body">Kapsama göre değişir. Keşif sonrası size aşama aşama bir plan ve süre tahmini sunarız.</div>
          </div>
        </div>

        <div class="accordion-item kp-faq-item mt-2">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ic2">Bütçeyi nasıl kontrol ediyorsunuz?</button>
          </h2>
          <div id="ic2" class="accordion-collapse collapse" data-bs-parent="#faqIcMekan">
            <div class="accordion-body">“Olmazsa olmaz/opsiyonel” ayrımı yapar, alternatifli malzeme seçenekleriyle bütçeyi yönetilebilir tutarız.</div>
          </div>
        </div>

        <div class="accordion-item kp-faq-item mt-2">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ic3">Uygulamayı da siz mi yapıyorsunuz?</button>
          </h2>
          <div id="ic3" class="accordion-collapse collapse" data-bs-parent="#faqIcMekan">
            <div class="accordion-body">İsteğe göre danışmanlık veya uygulama dahil paket sunarız. Uygulamada koordinasyon ve kalite kontrol tarafımızdan yürütülür.</div>
          </div>
        </div>
      </div>
    </section>

  </div>
</main>

<?php include __DIR__ . '/icerik/cookie_banner.php'; ?>
<?php include __DIR__ . '/icerik/alt_footer.php'; ?>

<script src="<?= $BASE ?>/js/bootstrap.bundle.min.js"></script>

</body>
</html>
