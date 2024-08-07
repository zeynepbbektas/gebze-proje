<!doctype html>
<html lang="tr">

<head>
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-PHCG53X96Y"></script>
   <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag('js', new Date());

      gtag('config', 'G-PHCG53X96Y');
   </script>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="icon" type="image/x-icon" href="/b81b1de5de69a404903354c75f5b7b05/8/logo (3)_1.png">
   <title>Gebze Belediyesi</title>
   <meta name="description" content="">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
   <link rel="stylesheet" href="styles.css"/>

</head>

<body class="">

<div class="overlay"></div>

<header class="header">
         <nav class="nav container">
            <div class="nav__data">
            <a href="index.php" class="nav__logo">
            <img src="resimler/logo.png" alt="">
              </a>

               
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line nav__burger"></i>
                  <i class="ri-close-line nav__close"></i>
               </div>
            </div>
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li><a href="index.php" class="nav__link">Anasayfa</a></li>
                  <li class="dropdown__item">
                     <div class="nav__link">
                        Kurumsal <i class="fa-solid fa-caret-down"></i></a>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="baskan.php" class="dropdown__link">
                              <i class="ri-pie-chart-line"></i> Belediye Başkanı
                           </a>                          
                        </li>

                        <li>
                           <a href="baskan-yardimcilari.php" class="dropdown__link">
                              <i class="ri-arrow-up-down-line"></i> Başkan Yardımcıları
                           </a>
                        </li>
                        <li class="dropdown__subitem">
                           <div class="dropdown__link">
                              <i class="ri-bar-chart-line"></i> Belediye Meclisi <i class="ri-add-line dropdown__add"></i>
                           </div>

                           <ul class="dropdown__submenu">
                              <li>
                                 <a href="meclis-uyeleri.php" class="dropdown__sublink">
                                    <i class="ri-file-list-line"></i> Meclis Üyeleri
                                 </a>
                              </li>
      
                              <li>
                                 <a href="meclis-kararlari.php" class="dropdown__sublink">
                                    <i class="ri-cash-line"></i> Meclis Kararları
                                 </a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  
                  <li><a href="#" class="nav__link">Haberler</a></li>
                  <li class="dropdown__item">
                     <div class="nav__link">
                        Gebze <i class="fa-solid fa-caret-down"></i></a>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="tarihce.php" class="dropdown__link">
                              <i class="ri-user-line"></i> Tarihçe
                           </a>                          
                        </li>

                        <li>
                           <a href="bugunku-gebze.php" class="dropdown__link">
                              <i class="ri-lock-line"></i> Bugünkü Gebze
                           </a>
                        </li>

                        <li>
                           <a href="tarihi-yerler.php" class="dropdown__link">
                              <i class="ri-message-3-line"></i> Tarihi yerler
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li><a href="hizmetler.php" class="nav__link">Hizmetler</a></li>
                  <li><a href="iletişim.php" class="nav__link">İletişim</a></li>
               </ul>
            </div>
         </nav>
      </header>


</body>
</html>