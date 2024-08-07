<?php 
   define("data","/data")
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
   <link rel="stylesheet" href="styles.css"/>
   <link rel="stylesheet" href="style.css"/>

</head>

<body>
<?php
include_once('C:/xampp/htdocs/gebze/data/ust.php');
?>


    <section class="iletisim">
    <h2 class="hh">İLETİŞİM BİLGİLERİ</h2>
        <div class="row">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3020.003857060245!2d29.437620075547745!3d40.805909031861994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb2088efaa11d3%3A0x575a512b11a2fd35!2zR2ViemUgQmVsZWRpeWUgQmHFn2thbmzEscSfxLE!5e0!3m2!1str!2str!4v1719556689742!5m2!1str!2str" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="container1">
                <div class="iletisimbilgisi">
                    <div class="box3">
                        <div class="text">
                          <h3>Adres</h3>
                          <p>Güzeller Mahallesi. Bahar Cad. N:1 41400 Gebze/KOCAELİ</p>
                        </div>
                    </div>
                    <div class="box3">
                        <div class="text">
                          <h3>Telefon</h3>
                          <p>+90 262 642 0430 / +90 262 642 0438</p>
                        </div>
                    </div>
                    <div class="box3">
                        <div class="text">
                          <h3>E-posta</h3>
                          <p>gebze@gebze.bel.tr</p>
                        </div>
                    </div>
                    <div class="box3">
                        <div class="text">
                          <h3>KEP Adresi</h3>
                          <p>gebzebelediyesi@hs01.kep.tr</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
      </section>
      <?php
include_once('C:/xampp/htdocs/gebze/data/footer.php');
?>
</body>
</html>
