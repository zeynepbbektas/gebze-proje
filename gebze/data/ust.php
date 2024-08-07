<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/2.5.0/remixicon.css">
    <title>Responsive Navbar</title>
</head>

<body>
    <header class="header">
        <nav class="nav container">
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__burger"></i>
                <i class="ri-close-line nav__close"></i>
            </div>
            <div class="nav__data">
                <a href="index.php" class="nav__logo">
                    <img src="resimler/logo.png" alt="">
                </a>

            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="index.php" class="nav__link">Anasayfa</a></li>
                    <li class="dropdown__item">
                        <div class="nav__link">
                            Kurumsal <i class="fa-solid fa-caret-down"></i>
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
                                    <i class="ri-bar-chart-line"></i> Belediye Meclisi <i
                                        class="ri-add-line dropdown__add"></i>
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
                    <li class="dropdown__item">
                        <div class="nav__link">
                            Gebze <i class="fa-solid fa-caret-down"></i>
                        </div>
                        <ul class="dropdown__menu">
                            <li>
                                <a href="tarihce.php" class="dropdown__link">
                                    <i class="ri-user-line"></i> Gebze Tarihçesi
                                </a>
                            </li>
                            <li>
                                <a href="bugunku-gebze.php" class="dropdown__link">
                                    <i class="ri-lock-line"></i> Bugünkü Gebze
                                </a>
                            </li>
                            <li>
                                <a href="nufus-yapisi.php" class="dropdown__link">
                                    <i class="ri-message-3-line"></i> Nüfus Yapısı
                                </a>
                            </li>
                            <li>
                                <a href="ekonomik.php" class="dropdown__link">
                                    <i class="ri-message-3-line"></i> Ekonomik Yapı
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="hizmetler.php" class="nav__link">Hizmetler</a></li>
                    <li><a href="iletisim.php" class="nav__link">İletişim</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <script>
        const navToggle = document.querySelector('.nav__toggle');
        const navMenu = document.querySelector('.nav__menu');

        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('show-menu');
            navToggle.classList.toggle('show-icon');
        });
    </script>
</body>

</html>