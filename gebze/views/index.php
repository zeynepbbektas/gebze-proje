<?php
define("data", "/data")
   ?>
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
   <link rel="stylesheet" href="styles.css" />

</head>

<body>
   <?php
   include_once 'C:/xampp/htdocs/gebze/libs/functions.php';
   $conn = dbConnect();
   $haberler = gethaberler($conn);
   $isler = getIsler($conn);
   $duyurular = getDuyurular($conn);
   ?>

   <?php
   include_once 'C:/xampp/htdocs/gebze/data/ust.php';
   ?>

   <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="resimler/9.jpg" class="d-block w-100" alt="...">
            <div class="carousel-overlay"></div>
         </div>
         <div class="carousel-item">
            <img src="resimler/2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-overlay"></div>
         </div>
         <div class="carousel-item">
            <img src="resimler/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-overlay"></div>
         </div>
         <div class="carousel-item">
            <img src="resimler/4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-overlay"></div>
         </div>
         <div class="carousel-item">
            <img src="resimler/5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-overlay"></div>
         </div>
         <div class="carousel-item">
            <img src="resimler/6.jpg" class="d-block w-100" alt="...">
            <div class="carousel-overlay"></div>
         </div>
         <div class="carousel-item">
            <img src="resimler/7.jpg" class="d-block w-100" alt="...">
            <div class="carousel-overlay"></div>
         </div>
         <div class="carousel-item">
            <img src="resimler/8.jpg" class="d-block w-100" alt="...">
            <div class="carousel-overlay"></div>
         </div>
         <div class="carousel-item">
            <img src="resimler/3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-overlay"></div>
         </div>
      </div>
   </div>





   <section class="isler">
      <div class="explorer_europe">
         <div class="container">
            <div class="explorer_wrap">
               <div class="row align-items-center">
                  <div class="col-xl-6 col-md-4">
                     <h3>Sağlam İşler</h3>
                  </div>
               </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
               <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="row">
                     <?php foreach ($isler as $is): ?>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                           <div class="single_explorer">
                              <div class="thumb">
                                 <img src="resimler/<?php echo htmlspecialchars($is['resim']); ?>" alt="">
                              </div>
                              <div class="explorer_bottom d-flex">
                                 <div class="explorer_info">
                                    <h3><a
                                          href="http://localhost:8080/gebze/views/is-detay.php?id=<?php echo $is['id']; ?>">
                                          <?php echo htmlspecialchars($is['baslik']); ?>
                                       </a></h3>
                                    <p>
                                       <?php
                                       $aciklama = htmlspecialchars($is['aciklama']);
                                       $maxLength = 120;
                                       if (strlen($aciklama) > $maxLength) {
                                          $aciklama = substr($aciklama, 0, $maxLength) . '...';
                                       }
                                       echo $aciklama;
                                       ?>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php endforeach; ?>
                  </div>
               </div>
            </div>
   </section>

   <div class="content">
      <div class="detailpages detailpages4">
         <div class="container-xl">
            <div class="row">
               <div class="col-lg-12">
                  <div>

                     <section class="pb-5 slider">
                        <h2>Haberler</h2>
                        <div class="swiper pt-5 intro" id="slider1">
                           <div class="swiper-wrapper">
                              <?php foreach ($haberler as $haber): ?>
                                 <div class="swiper-slide">
                                    <a
                                       href="http://localhost:8080/gebze/views/haber-detay.php?id=<?php echo $haber['id']; ?>">
                                       <img class="img-fluid"
                                          src="resimler/<?php echo htmlspecialchars($haber['resim']); ?>" />
                                       <div class="description d-flex pe-5"
                                          style="position: absolute; bottom: 0; z-index: 1; background-color: #ffffffe8; padding: 15px 30px; right: 0;width:100%;">
                                          <div>
                                             <h5 class="text-primary fw-bold">
                                                <?php echo htmlspecialchars($haber['baslik']); ?>
                                             </h5>
                                             <p class="d-none d-lg-block m-0">
                                                <?php
                                                $aciklama_others = htmlspecialchars($haber['aciklama']);
                                                $maxLength = 210;
                                                if (strlen($aciklama_others) > $maxLength) {
                                                   $aciklama_others = substr($aciklama_others, 0, $maxLength) . '...';
                                                }
                                                echo $aciklama_others;
                                                ?>
                                             </p>
                                          </div>
                                          <button type="button"
                                             onclick="window.location.href='haber_detay.php?id=<?php echo $haber['id']; ?>'"
                                             class="btn btn-primary h-100 d-flex align-items-center rounded-0"
                                             style="position: absolute; right: 0; bottom: 0;"><i
                                                class="bi bi-chevron-double-right"></i></button>
                                       </div>
                                    </a>
                                 </div>
                              <?php endforeach; ?>
                           </div>
                           <div class="swiper-pagination"></div>
                           <div class="swiper-button-prev"></div>
                           <div class="swiper-button-next"></div>
                        </div>
                     </section>
                  </div>
                  <p><br></p>
               </div>
            </div>
            <p><br></p>
         </div>
      </div>
   </div>
   <section>
   <div class="block-area">
      <div class="block-title-6">
         <h2>Duyurular</h2>
      </div>
      <?php foreach ($duyurular as $duyuru): ?>
         <article class="card card-full hover-a mb-module">
            <div class="row">
               <!--thumbnail-->
               <div class="col-3 pe-2 pe-md-0">
                  <div class="ratio_180-123 image-wrapper">
                     <a href="http://localhost:8080/gebze/views/duyuru-detay.php?id=<?php echo $duyuru['id']; ?>">
                        <img class="img-fluid lazy" src="resimler/<?php echo $duyuru['resim']; ?>" alt="Image description">
                     </a>
                  </div>
               </div>
               <div class="col-9">
                  <div class="card-body pt-0">
                     <!--title-->
                     <h3 class="card-title h5 h4-sm h3-lg">
                        <a
                           href="http://localhost:8080/gebze/views/duyuru-detay.php?id=<?php echo $duyuru['id']; ?>"><?php echo htmlspecialchars($duyuru['baslik']); ?></a>
                     </h3>
                     <!--content text-->

                     <!-- author, date & comments -->
                     <div class="card-text text-muted small">
                        <span class="d-none d-sm-inline me-1">
                           <a class="fw-bold" href="#">John Doe</a>
                        </span>
                        <time datetime="2019-10-21">October 21, 2018</time>
                        <span title="5 comment" class="ms-1">
                           <span class="icon-comments"></span> 5 Comment
                        </span>
                     </div>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
      </article>
      <div class="gap-0"></div>
   </div></section>
   <!--End Block-->
   <div class="mayor  text-end d-inline-block float-end" style="z-index:1;">
      <div class="bg-white   py-3 px-3 shadow"
         style="position: absolute; bottom: 0; right: 0; border-top-left-radius: 10px;    text-align: center;">
         <div>
            <div class="d-none d-lg-flex gap-2 justify-content-center">
               <a href="https://www.facebook.com/gebzebelediye" target="_blank" class="fs-5"><i
                     class="bi bi-facebook"></i></a>
               <a href="https://x.com/gebze_belediye" target="_blank" class="fs-5"><i class="bi bi-twitter"></i></a>
               <a href="https://www.instagram.com/gebze_belediyesi/" target="_blank" class="fs-5"><i
                     class="bi bi-instagram"></i></a>
               <a href="https://www.youtube.com/channel/UCj2OaUgzp76dOS2jTlz2frg" target="_blank" class="fs-5"><i
                     class="bi bi-youtube"></i></a>


            </div>
         </div>

         <i class="bi bi-arrow-right btn btn-primary text-white fw-bold btn-sm text-uppercase text-truncate ">
            İncele
         </i>
         </a>
      </div>
   </div>
   <div class="container-xl">
      <p><br></p>
   </div>


   <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
               <input autofocus v-model="searchText" placeholder="bir şeyler arayın" type="text" class="form-control">
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div v-if="searchResults.length>0" class="modal-body">
               <div v-for="item in searchResults">
                  <h5>{{item.modelName}}</h5>
                  <div v-for="result in item.data">
                     <a :href="'/'+result.slug" class="py-2 d-block"><i class="bi bi-arrow-right"></i>
                        {{result.name}}</a>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
   <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
   <script>
      const {
         createApp
      } = Vue

      createApp({
         data() {
            return {
               searchText: null,
               searchResults: [],
            }
         },
         watch: {
            searchText: function () {
               this.search();
            }
         },
         methods: {
            search: function () {
               const self = this;

               if (self.searchText != null ? self.searchText.length == 0 : true) {
                  self.searchResults = [];
               } else {
                  var req = new XMLHttpRequest();
                  req.responseType = 'json';
                  req.open('GET', "/arama?query=" + self.searchText, true);
                  req.onload = function () {
                     var jsonResponse = req.response;
                     self.searchResults = req.response;
                  };
                  req.send(null);
               }

            }
         }
      }).mount('#searchModal')
   </script>
   <script>
      const observer = new IntersectionObserver(
         ([e]) => e.target.toggleAttribute('stuck', e.intersectionRatio < 1), {
         threshold: [1]
      }
      );

      observer.observe(document.querySelector('nav'));
      window.onload = function () {
         for (var links = document.links, i = 0, a; a = links[i]; i++) {
            const url = new URL(a.href);
            const searchParams = url.searchParams;
            if (searchParams.get('page') == null) {
               if (a.host !== location.host) {
                  a.target = '_blank';
               }
            }

         }
      }

      function getCookie(name) {
         var dc = document.cookie;
         var prefix = name + "=";
         var begin = dc.indexOf("; " + prefix);
         if (begin == -1) {
            begin = dc.indexOf(prefix);
            if (begin != 0) return null;
         } else {
            begin += 2;
            var end = document.cookie.indexOf(";", begin);
            if (end == -1) {
               end = dc.length;
            }
         }
         return decodeURI(dc.substring(begin + prefix.length, end));
      }
      if (getCookie('cookiebar')) {
         document.getElementById("cookiebar").style.display = "none";
      }

      function readCookie(state = true) {
         if (state) {
            var date = new Date();
            date.setDate(date.getDate() + 30);
            var utcTime = date.toUTCString();
            document.cookie = "cookiebar=" + state + "; expires=" + utcTime;
         }
         document.getElementById("cookiebar").style.display = "none";

      }
   </script>
   <script>
      const slider1 = new Swiper('#slider1', {
         loop: true,
         pagination: {
            el: '.swiper-pagination',
         },
         effect: 'cards',
         speed: 1000,
         // Navigation arrows
         navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
         },
         centeredSlides: true,
         autoplay: {
            delay: 3000,
         },
      });
   </script>
   <script>
      const news = new Swiper('.newslider', {
         loop: true,
         spaceBetween: 10,
         slidesPerView: 4,
         speed: 1000,
         breakpoints: {
            '0': {
               slidesPerView: 1,
            },
            '768': {
               slidesPerView: 4,
            },
         },
         navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
         },

         autoplay: {
            delay: 2000,
         },
      });
   </script>
   <section class="footer">
      <?php
      include_once ('C:/xampp/htdocs/gebze/data/footer.php');
      ?>
   </section>
</body>

</html>