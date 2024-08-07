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
        integrity="sha512-Snh6WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="kurumsal.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="meclis.css" />

</head>

<body class="meclis">

    <?php
    include_once('C:/xampp/htdocs/gebze/data/ust.php');
    include_once('C:/xampp/htdocs/gebze/data/kurumsalmenu.php');
    include_once('C:/xampp/htdocs/gebze/libs/functions.php');

    $conn = dbConnect();
    $meclisUyeleri = getMeclisUyeleri($conn);
    ?>

<div class="container">
    <h3 class="tiitle">Meclis Üyeleri</h3>
    <div class="cardss">
        <?php foreach ($meclisUyeleri as $uye): ?>
            <div class="card-container">
                
                    <img class="round" src="<?= htmlspecialchars($uye['resim']); ?>" alt="<?= htmlspecialchars($uye['isim']); ?>">
               
                <h3><?= htmlspecialchars($uye['isim']); ?></h3>
                <p><?= htmlspecialchars($uye['gorev']); ?></p>
                
            </div>
        <?php endforeach; ?>
    </div>
</div>
    <?php
    include_once('C:/xampp/htdocs/gebze/data/footer.php');
    $conn->close();
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXlY3h7/6p2Qo2cF8PpjoB9nstlZ9sFj3PaXtNf9B6N/j5wAc0E5DndW0yoj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWi2+2eAHRH6yGgmEc3E78CIob6FGjo56Cj2IJo1zR6ZoQ8hYJYBsQHBbh"
        crossorigin="anonymous"></script>
</body>

</html>
