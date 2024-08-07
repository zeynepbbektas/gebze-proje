<?php
define("data", "/data");
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

    if (isset($_GET['id'])) {
        $id = (int) $_GET['id'];
        $conn = dbConnect();

        $query = "SELECT * FROM duyurular WHERE id = $id";
        $result = mysqli_query($conn, $query);
        $duyuru = mysqli_fetch_assoc($result);

        $query_others = "SELECT * FROM duyurular WHERE id != $id ";
        $result_others = mysqli_query($conn, $query_others);

    } else {
        die("Geçersiz duyuru ID'si.");
    }

    include_once 'C:/xampp/htdocs/gebze/data/ust.php';
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav>

    <header class="header-image">
        <img src="resimler/<?php echo htmlspecialchars($duyuru['resim']); ?>" alt="Üst Resim" class="img-fluid">
    </header>
    <div class="bradcam_area bradcam_bg_3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <div class="icon">
                            <i class="flaticon-food"></i>
                        </div>
                        <h4><?php echo htmlspecialchars($duyuru['baslik']); ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="listing_details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="single_details">
                        <p><?php echo htmlspecialchars($duyuru['aciklama']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $query = "SELECT * FROM duyurular";
    $result = mysqli_query($conn, $query);
    $duyurular = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    ?>
    <section class="isler">
        <div class="explorer_europe">
            <div class="container">
                <div class="explorer_wrap">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-md-4">
                            <h3>duyurular</h3>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row" id="duyurular-list">
                            <?php foreach ($duyurular as $index => $duyuru_others): ?>
                                <div class="col-xl-4 col-lg-4 col-md-6 duyuru-item"
                                    style="display: <?php echo $index < 6 ? 'block' : 'none'; ?>">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="resimler/<?php echo htmlspecialchars($duyuru_others['resim']); ?>"
                                                alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <div class="explorer_info">
                                                <h3><a
                                                        href="duyuru-detay.php?id=<?php echo htmlspecialchars($duyuru_others['id']); ?>">
                                                        <?php echo htmlspecialchars($duyuru_others['baslik']); ?>
                                                    </a></h3>
                                                <p>
                                                    <?php
                                                    $aciklama_others = htmlspecialchars($duyuru_others['aciklama']);
                                                    $maxLength = 120;
                                                    if (strlen($aciklama_others) > $maxLength) {
                                                        $aciklama_others = substr($aciklama_others, 0, $maxLength) . '...';
                                                    }
                                                    echo $aciklama_others;
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <button id="loadMore" class="btn btn-primary mt-4">Daha Fazla</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const duyuruItems = document.querySelectorAll('.duyuru-item');
            const loadMoreButton = document.getElementById('loadMore');
            let visibleItems = 6;

            loadMoreButton.addEventListener('click', function () {
                for (let i = visibleItems; i < visibleItems + 6 && i < duyuruItems.length; i++) {
                    duyuruItems[i].style.display = 'block';
                }
                visibleItems += 6;

                if (visibleItems >= duyuruItems.length) {
                    loadMoreButton.style.display = 'none';
                }
            });
        });
    </script>


    <div class="col-12">
        <div class="ua-space"></div>
    </div>

    <?php
    include_once 'C:/xampp/htdocs/gebze/data/footer.php';
    ?>
</body>

</html>