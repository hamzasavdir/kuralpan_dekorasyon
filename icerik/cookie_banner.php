<?php

?>

<?php if (!isset($_COOKIE['kp_cookie_consent'])): ?>
<div class="kp-cookiebar" id="kpCookieBar" role="dialog" aria-label="Çerez Bildirimi">
  <div class="kp-cookiebar__inner">

    <div class="kp-cookiebar__text">
      Çerezler, içeriği ve reklamları kişiselleştirmek, sosyal medya özellikleri sağlamak ve trafiğimizi analiz etmek için kullanılmaktadır.
      Detaylı bilgi: <a href="/kuralpan_dekorasyon/cerez_politikasi.php?tab=about">"Çerez Politikası"</a>
    </div>

    <div class="kp-cookiebar__actions">
      <button type="button" class="kp-btn" id="kpOpenCookieModal">Çerez Ayarları</button>
      <button type="button" class="kp-btn kp-btn--primary" data-kp-action="acceptAll" id="kpAcceptAllFromBar">Tümüne izin ver</button>
    </div>

  </div>
</div>
<?php endif; ?>

<div class="kp-cmodal" id="kpCookieModal" aria-hidden="true">
  <div class="kp-cmodal__backdrop" data-kp-close="1"></div>

  <div class="kp-cmodal__dialog" role="dialog" aria-modal="true" aria-label="Çerez Tercihleri" tabindex="-1">
    <button type="button" class="kp-cmodal__close" id="kpCloseCookieModal" aria-label="Kapat">×</button>
    <?php include __DIR__ . "/cookie_panel.php"; ?>
  </div>
</div>
