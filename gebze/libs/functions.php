<?php
function dbConnect() {
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "yonetimpaneli";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }

    return $conn;
}
function getBaskanYardimcilari($conn) {
    $sql = "SELECT isim, unvan, telefon, email, resim FROM baskan_yardimcilari";
    $result = $conn->query($sql);

    $baskanYardimcilari = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $baskanYardimcilari[] = $row;
        }
    }

    return $baskanYardimcilari;
}

function getMeclisUyeleri($conn) {
    $sql = "SELECT isim, resim, gorev FROM meclis_uyeleri";
    $result = $conn->query($sql);
    
    $meclisUyeleri = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $meclisUyeleri[] = $row;
        }
    }
    return $meclisUyeleri;
}

function getMudurlukler($conn) {
    $sql = "SELECT ad, yetkili, e_posta, resim, yonetmelik FROM mudurlukler";
    $result = $conn->query($sql);
    
    $mudurlukler = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $mudurlukler[] = $row;
        }
    }
    return $mudurlukler;
}

function getHaberler($conn) {
    $sql = "SELECT id, baslik, aciklama, resim, haber_url FROM haberler";
    $result = $conn->query($sql);
    
    $haberler = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $haberler[] = $row;
        }
    }
    return $haberler;
}

function getIsler($conn) {
    $sql = "SELECT id, baslik, aciklama, resim, url FROM saglamisler ORDER BY id DESC LIMIT 6";
    $result = $conn->query($sql);
    
    $isler = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $isler[] = $row;
        }
    }
    return $isler;
}

function getHizmetler($conn) {
    $sql = "SELECT id, icon, baslik, telefon, eposta, adres, aciklama, detayli_bilgi FROM hizmetler";
    $result = $conn->query($sql);
    
    $hizmetler = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $hizmetler[] = $row;
        }
    }
    return $hizmetler;
}

function getDuyurular($conn) {
    $sql = "SELECT id, baslik, aciklama, resim FROM duyurular";
    $result = $conn->query($sql);
    
    $duyurular = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $duyurular[] = $row;
        }
    }
    return $duyurular;
}

?>
