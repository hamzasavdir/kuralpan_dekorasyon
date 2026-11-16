<?php

?>

<nav class="navbar navbar-expand-lg navbar-dark navbar-kuralpan">
    <div class="container-fluid">

 
        <a class="navbar-brand d-flex align-items-center" href="/kuralpan_dekorasyon/index.php">
            <img src="/kuralpan_dekorasyon/img/image.png"
                 alt="Kuralpan Dekorasyon"
                 class="navbar-image me-2">
            
        </a>

       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#kuralpanNavbar" aria-controls="kuralpanNavbar"
                aria-expanded="false" aria-label="Menüyü Aç/Kapat">
            <span class="navbar-toggler-icon"></span>
        </button>

       
        <div class="collapse navbar-collapse" id="kuralpanNavbar">

         
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 navbar-center-menu">

                <li class="nav-item">
                    <a class="nav-link" href="/kuralpan_dekorasyon/index.php">ANASAYFA</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/kuralpan_dekorasyon/hakkimizda.php">HAKKIMIZDA</a>
                </li>
<li class="nav-item">
                    <a class="nav-link" href="/kuralpan_dekorasyon/hizmetler.php">HİZMETLERİMİZ</a>
                </li>
                
                    <div class="dropdown-menu dropdown-menu-dark p-3 mega-menu"
                         aria-labelledby="hizmetlerDropdown">

                        <div class="row g-3">

                          >
                            <div class="col-md-6 col-lg-3">
                                <a href="/kuralpan_dekorasyon/hizmetler.php#ic-mekan"
                                   class="mega-kart-link">
                                    <div class="mega-kart">
                                        <div class="mega-kart-ikon">🏠</div>
                                        <h6 class="mega-kart-baslik">İç Mekan Tasarımı</h6>
                                        <p class="mega-kart-metin">
                                            Daire, villa ve ofisler için konsept tasarım,
                                            2D/3D sunum ve renk–malzeme danışmanlığı.
                                        </p>
                                    </div>
                                </a>
                            </div>

                         
                            <div class="col-md-6 col-lg-3">
                                <a href="/kuralpan_dekorasyon/hizmetler.php#anahtar-teslim"
                                   class="mega-kart-link">
                                    <div class="mega-kart">
                                        <div class="mega-kart-ikon">🛠️</div>
                                        <h6 class="mega-kart-baslik">Anahtar Teslim Tadilat</h6>
                                        <p class="mega-kart-metin">
                                            Mutfak, banyo ve tüm yaşam alanlarında
                                            baştan sona yenileme ve uygulama.
                                        </p>
                                    </div>
                                </a>
                            </div>

                           
                            <div class="col-md-6 col-lg-3">
                                <a href="/kuralpan_dekorasyon/hizmetler.php#ofis-uygulamalari"
                                   class="mega-kart-link">
                                    <div class="mega-kart">
                                        <div class="mega-kart-ikon">💼</div>
                                        <h6 class="mega-kart-baslik">Ofis Uygulamaları</h6>
                                        <p class="mega-kart-metin">
                                            Kurumsal kimliğinize uygun, verimliliği artıran
                                            ofis planlama ve uygulama çözümleri.
                                        </p>
                                    </div>
                                </a>
                            </div>

                          
                            <div class="col-md-6 col-lg-3">
                                <a href="/kuralpan_dekorasyon/hizmetler.php#zemin-parke"
                                   class="mega-kart-link">
                                    <div class="mega-kart">
                                        <div class="mega-kart-ikon">🎨</div>
                                        <h6 class="mega-kart-baslik">Zemin &amp; Boya</h6>
                                        <p class="mega-kart-metin">
                                            Zemin kaplama, parke ve boya–badana ile
                                            mekanın genel atmosferini yeniliyoruz.
                                        </p>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="mt-3 en-kucuk-yazi text-end">
                            Tüm detaylar için
                            <a href="/kuralpan_dekorasyon/hizmetler.php">Hizmetler sayfasını</a> inceleyin.
                        </div>

                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/kuralpan_dekorasyon/projeler.php">PROJELER</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/kuralpan_dekorasyon/sss.php">SSS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/kuralpan_dekorasyon/iletisim.php">İLETİŞİM</a>
                </li>
            </ul>

           
            <div class="navbar-right-actions">
                
                <a href="/kuralpan_dekorasyon/iletisim.php"
                   class="btn btn-navbar-teklif d-flex align-items-center">
                    <span class="me-2">TEKLİF AL</span>
                    <span class="btn-navbar-teklif-icon">➜</span>
                </a>

               
                <button class="btn btn-navbar-round"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasMenu"
                        aria-controls="offcanvasMenu">
                    ☰
                </button>
            </div>

        </div><
    </div>
</nav>


<div class="offcanvas offcanvas-end offcanvas-menu-kuralpan"
     tabindex="-1"
     id="offcanvasMenu"
     aria-labelledby="offcanvasMenuLabel">

    <div class="offcanvas-header">
        
        <button type="button"
                class="btn-close text-reset"
                data-bs-dismiss="offcanvas"
                aria-label="Kapat"></button>
    </div>

    <div class="offcanvas-body">
        

        <?php
      
        include __DIR__ . '/sol_menu.php';
        ?>
    </div>

</div>
<a class="kp-wa-fab" href="https://wa.me/905334660218" target="_blank" rel="noopener" aria-label="WhatsApp">
  <i class="bi bi-whatsapp"></i>
</a>
