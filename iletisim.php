<?php
$ROOT = realpath(__DIR__);

while ($ROOT && !file_exists($ROOT . "/index.php")) {
    $parent = dirname($ROOT);
    if ($parent === $ROOT) break;
    $ROOT = $parent;
}
?>


<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/veritabani/veritabani_baglanti.php';

$formSuccess = false;
$formError = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $ad      = trim($_POST["ad"] ?? "");
    $email   = trim($_POST["email"] ?? "");
    $telefon = trim($_POST["telefon"] ?? "");
    $konu    = trim($_POST["konu"] ?? "");
    $mesaj   = trim($_POST["mesaj"] ?? "");


    if ($ad === "" || $email === "" || $telefon === "" || $konu === "" || $mesaj === "") {
        $formError = "Lütfen tüm alanları doldurun.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formError = "Lütfen geçerli bir e-posta adresi girin.";
    } else {

      
        $sql = "INSERT INTO iletisim_talepleri
                (ad, email, telefon, konu, mesaj, ip_adresi, user_agent)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $baglanti->prepare($sql);

        $ipAdres   = $_SERVER["REMOTE_ADDR"] ?? null;
        $userAgent = $_SERVER["HTTP_USER_AGENT"] ?? null;

        $stmt->bind_param("sssssss", $ad, $email, $telefon, $konu, $mesaj, $ipAdres, $userAgent);

        if ($stmt->execute()) {
            $formSuccess = true;
           
            $_POST = [];
        } else {
            $formError = "Kayıt sırasında hata oluştu.";
        }

        $stmt->close();
    }
}
?>
<!doctype html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kuralpan Dekorasyon | İletişim</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="/kuralpan_dekorasyon/css/bootstrap.min.css">
<link rel="stylesheet" href="/kuralpan_dekorasyon/icerik/ust_menu.php">
<link rel="stylesheet" href="/kuralpan_dekorasyon/css/stil_genel.css">

<link rel="stylesheet" href="css/cookie.css">


</head>

<body class="kp-body">

  
    <?php include __DIR__ . '/icerik/ust_menu.php'; ?>
    <header class="kp-page-hero" style="--kp-hero-bg: url('/kuralpan_dekorasyon/img/hero/hero-home.jpg');">
  <div class="container kp-page-hero-inner">
    <h1 class="kp-page-title">İLETİŞİM</h1>
    <div class="kp-breadcrumb">
      <a href="/kuralpan_dekorasyon/index.php">Anasayfa</a>
      <span>/</span>
      <span>İletişim</span>
    </div>
  </div>
</header>

 

  <main class="kp-main">
    <section class="kp-contact-section">
      <div class="container kp-contact-container">

        <div class="row g-4 align-items-stretch">

         
          <div class="col-12 col-lg-5">
            <div class="kp-contact-left">

              <div class="kp-contact-badge">İLETİŞİM</div>

              <h1 class="kp-contact-title">İletişime Geçin</h1>
              <p class="kp-contact-text">
                Projeleriniz için bizimle hemen iletişime geçin. Size en kısa sürede dönüş yapalım.
              </p>

              <div class="kp-contact-info">

                <div class="kp-info-item">
                  <div class="kp-info-icon"><i class="bi bi-telephone"></i></div>
                  <div class="kp-info-body">
                    <div class="kp-info-label">Telefon:</div>
                    <a class="kp-info-value" href="tel:+905334660218">+90 533 466 02 18</a>
                  </div>
                </div>

                <div class="kp-info-item">
                  <div class="kp-info-icon"><i class="bi bi-envelope"></i></div>
                  <div class="kp-info-body">
                    <div class="kp-info-label">Mail:</div>
                    <a class="kp-info-value" href="mailto:kuralpandekorasyon@gmail.com">kuralpandekorasyon@gmail.com</a>
                  </div>
                </div>

                <div class="kp-info-item">
                  <div class="kp-info-icon"><i class="bi bi-geo-alt"></i></div>
                  <div class="kp-info-body">
                    <div class="kp-info-label">Adres:</div>
                    <div class="kp-info-value">
                      Esenkent Mahallesi Çetinemeç Caddesi Yadigar Sokak No:32 Ümraniye / İstanbul
                    </div>
                    <a class="kp-map-link" target="_blank" rel="noopener"
                       href="https://www.google.com/maps/place/Esenkent,+Yadigar+Sk.+No:34,+34776+%C3%9Cmraniye%2F%C4%B0stanbul/@41.0072104,29.1830197,19z">
                      Haritada Aç
                    </a>
                  </div>
                </div>

              </div>

            </div>
          </div>

        
          <div class="col-12 col-lg-7">
            <div class="kp-form-card">
              <h2 class="kp-form-title">Teklif Alın</h2>

              <?php if ($formSuccess): ?>
                <div class="alert alert-success kp-alert" role="alert">
                  Mesajınız başarıyla gönderildi. En kısa sürede dönüş yapacağız.
                </div>
              <?php elseif ($formError !== ""): ?>
                <div class="alert alert-danger kp-alert" role="alert">
                  <?php echo htmlspecialchars($formError); ?>
                </div>
              <?php endif; ?>

              <form method="post" action="iletisim.php" class="kp-form">
                <div class="row g-3">

                  <div class="col-12 col-md-6">
                    <input type="text" name="ad" class="form-control kp-input"
                           placeholder="Adınız"
                           value="<?php echo htmlspecialchars($_POST['ad'] ?? ''); ?>"
                           required>
                  </div>

                  <div class="col-12 col-md-6">
                    <input type="email" name="email" class="form-control kp-input"
                           placeholder="E-posta"
                           value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                           required>
                  </div>

                  <div class="col-12 col-md-6">
                    <input type="text" name="telefon" class="form-control kp-input"
                           placeholder="Telefon"
                           value="<?php echo htmlspecialchars($_POST['telefon'] ?? ''); ?>"
                           required>
                  </div>

                  <div class="col-12 col-md-6">
                    <input type="text" name="konu" class="form-control kp-input"
                           placeholder="Konu"
                           value="<?php echo htmlspecialchars($_POST['konu'] ?? ''); ?>"
                           required>
                  </div>

                  <div class="col-12">
                    <textarea name="mesaj" class="form-control kp-textarea"
                              placeholder="Mesajınız"
                              required><?php echo htmlspecialchars($_POST['mesaj'] ?? ''); ?></textarea>
                  </div>

                  <div class="col-12">
                    <button type="submit" class="btn kp-submit-btn">GÖNDER</button>
                  </div>

                </div>
              </form>

            </div>
          </div>

        </div>

       
        <div class="kp-map-wrap">
          <div class="kp-map-ratio">
            <iframe
              src="https://www.google.com/maps?q=Esenkent%20Mahallesi%20%C3%87etineme%C3%A7%20Caddesi%20Yadigar%20Sokak%20No:32%20%C3%9Cmraniye%20%C4%B0stanbul&output=embed"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              allowfullscreen
              title="Kuralpan Dekorasyon Konum">
            </iframe>
          </div>
        </div>

      </div>
    </section>
  </main>
<?php include __DIR__ . '/icerik/cookie_banner.php'; ?>

<?php include __DIR__ . '/icerik/reklam_pano.php'; ?>


 
  <?php if (file_exists(__DIR__ . '/icerik/alt_footer.php')): ?>
    <?php include __DIR__ . '/icerik/alt_footer.php'; ?>
  <?php endif; ?>

  <script src="js/bootstrap.bundle.min.js"></script>
  

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
