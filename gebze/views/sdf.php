<style>
 .minister-nav {
    width: 230px; /* Navbar genişliği */
    background-color: blue; /* Navbar arkaplan rengi */
    padding: 50px; /* İç kenar boşlukları */
    height: 300px; /* Ekran yüksekliğine göre tam boy */
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Hafif gölge */
    position: fixed; /* Sabit konumlandırma */
    top: 80; 
    left: 25;
    overflow-y: auto; /* Taşan içeriğin kaydırılması */
}

.minister-nav .nav-link {
    color: #333; /* Link rengi */
    text-decoration: none; /* Link alt çizgisi kaldırma */
    padding: 10px 0; /* Link iç kenar boşlukları */
}

.minister-nav .nav-link.active {
    font-weight: bold; /* Aktif link kalın yazı */
    font-family: ;
}

.minister-nav .nav-link:hover {
    color: #e9ecef; /* Link üzerine gelindiğinde arkaplan rengi */
}

/* İçerik alanı */
.content {
    margin-left: 250px; /* Navbar genişliği kadar sol kenar boşluğu */
    padding: 20px; /* İç kenar boşlukları */
    flex: 1; /* Kalan alanı kapla */
    background-color: #ffffff; /* İçerik arkaplan rengi */
}
</style>



<div class="minister-resume-block">
    <div class="row no-gutters">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 mt-5">
            <!-- Vertical Nav -->
            <!-- Vertical Nav -->
<ul class="nav flex-column minister-nav">
    <li class="nav-item">
        <a class="nav-link title" href="#minister-navList" data-toggle="collapse" aria-expanded="true">
            Başkan
            <span style="float: right">
                <img src="/images/icons/angle-down.svg" />
            </span>
        </a>
    </li>
    <ul id="minister-navList" class="collapse list-unstyled show">
        <li class="nav-item">
            <a class="nav-link link active"
                href="minister-resume">Özgeçmiş</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link "
                href="minister-message">Başkanın Mesajı</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link "
                href="message-to-minister">Başkana Mesaj</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link "
                href="minister-album">Başkanın Albümü</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link "
                href="photo-with-minister">Başkan ile Fotoğrafın</a>
        </li>
        <li class="nav-item">
            <a href="http://bunyaminciftci.com.tr/" target="_blank"
                class="nav-link link " href="#">
                Başkanın Sitesi</a>
        </li>
    </ul>
</ul>
        </div>