<?php


function createMudurlukler(string $ad, string $yetkili, string $e_posta,string $resim, string $yonetmelik) {
   include "ayar.php";

   # sorgu
   $query = "INSERT INTO mudurlukler(ad, yetkili, e_posta, resim, yonetmelik) VALUES ('$ad', '$yetkili', '$e_posta', '$resim', '$yonetmelik')";
   $result = mysqli_query($conn,$query);

   mysqli_close($conn);

   return $result;
}  
function getAyarlar() {
    include "ayar.php";

    $sql = "SELECT baslik, anahtar, aciklama, url FROM ayarlar WHERE ID = 1";
    $result = $conn->query($sql);

    $ayarlar = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $ayarlar[] = $row;
        }
    }

    mysqli_close($conn);
    
    return $ayarlar;
}
function createMeclisUyeleri(string $isim, string $resim, string $gorev) {
   include "ayar.php";

   # sorgu
   $query = "INSERT INTO meclis_uyeleri(isim, resim, gorev) VALUES ('$isim', '$resim', '$gorev')";
   $result = mysqli_query($conn,$query);

   mysqli_close($conn);

   return $result;
}  

function getMudurlukler($conn) {
   $sql = "SELECT id, ad, yetkili, e_posta, resim, yonetmelik FROM mudurlukler";
   $result = $conn->query($sql);
   return $result;
}


function getMeclisUyeleri($conn) {
   $sql = "SELECT id, isim, resim, gorev FROM meclis_uyeleri";
   $result = $conn->query($sql);
   
   if (!$result) {
       die("Sorgu hatası: " . $conn->error);
   }
   
   return $result;
}

function getBaskanYardimcilari($conn) {
   $sql = "SELECT id, isim, unvan, telefon, email, resim FROM baskan_yardimcilari";
   $result = $conn->query($sql);
   
   if (!$result) {
       die("Sorgu hatası: " . $conn->error);
   }

   return $result;
}

function createBaskanYardimcilari(string $isim, string $unvan, string $telefon, string $email, string $resim) {
   include "ayar.php";

   $query = "INSERT INTO baskan_yardimcilari (isim, unvan, telefon, email, resim) VALUES ('$isim', '$unvan', '$telefon', '$email', '$resim')";
   $result = mysqli_query($conn, $query);
   mysqli_close($conn);

   return $result;
}
function getMudurluklerById(int $mudurlukId, $conn) {
   $query = "SELECT * FROM mudurlukler WHERE id = ?";
   
   if ($stmt = mysqli_prepare($conn, $query)) {
       mysqli_stmt_bind_param($stmt, 'i', $mudurlukId);
       mysqli_stmt_execute($stmt);
       $result = mysqli_stmt_get_result($stmt);
       mysqli_stmt_close($stmt);
       return $result;
   } else {
       echo "Hata: " . mysqli_error($conn);
       return false;
   }
}

function editMudurlukler(int $id, string $ad, string $yetkili, string $e_posta, string $resim, string $yonetmelik, $conn) {
   $query = "UPDATE mudurlukler SET ad=?, yetkili=?, e_posta=?, resim=?, yonetmelik=? WHERE id=?";
   if ($stmt = mysqli_prepare($conn, $query)) {
       mysqli_stmt_bind_param($stmt, 'sssssi', $ad, $yetkili, $e_posta, $resim, $yonetmelik, $id);
       mysqli_stmt_execute($stmt);
       if (mysqli_stmt_affected_rows($stmt) > 0) {
           $result = true;
       } else {
           $result = "Güncelleme başarısız: " . mysqli_stmt_error($stmt);
       }
       mysqli_stmt_close($stmt);
   } else {
       $result = "Sorgu hazırlanırken hata oluştu: " . mysqli_error($conn);
   }
   return $result;
}



function deleteMudurlukler(int $id, $conn) {
   $query = "DELETE FROM mudurlukler WHERE id=?";
   if ($stmt = mysqli_prepare($conn, $query)) {
       mysqli_stmt_bind_param($stmt, 'i', $id);
       $result = mysqli_stmt_execute($stmt);
       mysqli_stmt_close($stmt);
       return $result;
   } else {
       return false;
   }
}

function getHaberler($conn) {
   $sql = "SELECT id, baslik, aciklama, resim, haber_url FROM haberler";
   $result = $conn->query($sql);
   
   if (!$result) {
       die("Sorgu hatası: " . $conn->error);
   }
   
   return $result;
}
function createHaberler(string $baslik, string $aciklama, string $resim, string $haber_url) {
   include "ayar.php";

   $query = "INSERT INTO haberler(baslik, aciklama, resim, haber_url) VALUES ('$baslik','$aciklama', '$resim', '$haber_url')";
   $result = mysqli_query($conn,$query);

   mysqli_close($conn);

   return $result;
}  

function getYardimcilarById(int $yardimciId, $conn) {
   $query = "SELECT * FROM baskan_yardimcilari WHERE id = ?";
   
   if ($stmt = mysqli_prepare($conn, $query)) {
       mysqli_stmt_bind_param($stmt, 'i', $yardimciId);
       mysqli_stmt_execute($stmt);
       $result = mysqli_stmt_get_result($stmt);
       mysqli_stmt_close($stmt);
       return $result;
   } else {
       echo "Hata: " . mysqli_error($conn);
       return false;
   }
}

function editYardimcilar(int $id, string $isim, string $unvan, string $telefon, string $email, string $resim, $conn) {
   $query = "UPDATE baskan_yardimcilari SET isim=?, unvan=?, telefon=?, email=?, resim=? WHERE id=?";
   if ($stmt = mysqli_prepare($conn, $query)) {
       mysqli_stmt_bind_param($stmt, 'sssssi', $isim, $unvan, $telefon, $email, $resim, $id);
       mysqli_stmt_execute($stmt);
       if (mysqli_stmt_affected_rows($stmt) > 0) {
           $result = true;
       } else {
           $result = "Güncelleme başarısız: " . mysqli_stmt_error($stmt);
       }
       mysqli_stmt_close($stmt);
   } else {
       $result = "Sorgu hazırlanırken hata oluştu: " . mysqli_error($conn);
   }
   return $result;
}
function deleteYardimcilar(int $id, $conn) {
   $query = "DELETE FROM baskan_yardimcilari WHERE id=?";
   if ($stmt = mysqli_prepare($conn, $query)) {
       mysqli_stmt_bind_param($stmt, 'i', $id);
       $result = mysqli_stmt_execute($stmt);
       mysqli_stmt_close($stmt);
       return $result;
   } else {
       return false;
   }
}

function getUyelerById(int $uyeId, $conn) {
   $query = "SELECT * FROM meclis_uyeleri WHERE id = ?";
   
   if ($stmt = mysqli_prepare($conn, $query)) {
       mysqli_stmt_bind_param($stmt, 'i', $uyeId);
       mysqli_stmt_execute($stmt);
       $result = mysqli_stmt_get_result($stmt);
       mysqli_stmt_close($stmt);
       return $result;
   } else {
       echo "Hata: " . mysqli_error($conn);
       return false;
   }
}
function deleteUyeler(int $id, $conn) {
   $query = "DELETE FROM meclis_uyeleri WHERE id=?";
   if ($stmt = mysqli_prepare($conn, $query)) {
       mysqli_stmt_bind_param($stmt, 'i', $id);
       $result = mysqli_stmt_execute($stmt);
       mysqli_stmt_close($stmt);
       return $result;
   } else {
       return false;
   }
}
function editUyeler(int $id, string $isim,  string $gorev, string $resim, $conn) {
   $query = "UPDATE meclis_uyeleri SET isim=?, gorev=?, resim=? WHERE id=?";
   if ($stmt = mysqli_prepare($conn, $query)) {
       mysqli_stmt_bind_param($stmt, 'sssssi', $isim, $gorev, $resim, $id);
       mysqli_stmt_execute($stmt);
       if (mysqli_stmt_affected_rows($stmt) > 0) {
           $result = true;
       } else {
           $result = "Güncelleme başarısız: " . mysqli_stmt_error($stmt);
       }
       mysqli_stmt_close($stmt);
   } else {
       $result = "Sorgu hazırlanırken hata oluştu: " . mysqli_error($conn);
   }
   return $result;
}
function getHaberlerById($id, $conn) {
    $sql = "SELECT * FROM haberler WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return $result;
}
function deleteHaberler(int $id, $conn) {
   $query = "DELETE FROM haberler WHERE id=?";
   if ($stmt = mysqli_prepare($conn, $query)) {
       mysqli_stmt_bind_param($stmt, 'i', $id);
       $result = mysqli_stmt_execute($stmt);
       mysqli_stmt_close($stmt);
       return $result;
   } else {
       return false;
   }
}
function editHaberler(int $id, string $baslik,  string $aciklama, string $resim, string $haber_url, $conn) {
   $query = "UPDATE haberler SET baslik=?, aciklama=?, resim=?, haber_url=? WHERE id=?";
   if ($stmt = mysqli_prepare($conn, $query)) {
       mysqli_stmt_bind_param($stmt, 'sssssi', $baslik, $aciklama, $resim, $haber_url, $id);
       mysqli_stmt_execute($stmt);
       if (mysqli_stmt_affected_rows($stmt) > 0) {
           $result = true;
       } else {
           $result = "Güncelleme başarısız: " . mysqli_stmt_error($stmt);
       }
       mysqli_stmt_close($stmt);
   } else {
       $result = "Sorgu hazırlanırken hata oluştu: " . mysqli_error($conn);
   }
   return $result;
}
function getDuyurular($conn) {
    $sql = "SELECT id, baslik, aciklama, resim FROM duyurular";
    $result = $conn->query($sql);
    
    if (!$result) {
        die("Sorgu hatası: " . $conn->error);
    }
    
    return $result;
 }
 function createDuyurular(string $baslik, string $aciklama, string $resim) {
    include "ayar.php";
 
    $query = "INSERT INTO duyurular (baslik, aciklama, resim) VALUES ('$baslik','$aciklama', '$resim')";
    $result = mysqli_query($conn,$query);
 
    mysqli_close($conn);
 
    return $result;
 }  
 function getDuyurularById($id, $conn) {
    $sql = "SELECT * FROM duyurular WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return $result;
}
 function deleteDuyurular(int $id, $conn) {
    $query = "DELETE FROM duyurular WHERE id=?";
    if ($stmt = mysqli_prepare($conn, $query)) {
        mysqli_stmt_bind_param($stmt, 'i', $id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    } else {
        return false;
    }
}
function editDuyurular(int $id, string $baslik,  string $aciklama, string $resim, $conn) {
   $query = "UPDATE duyurular SET baslik=?, aciklama=?, resim=? WHERE id=?";
   if ($stmt = mysqli_prepare($conn, $query)) {
       mysqli_stmt_bind_param($stmt, 'sssssi', $baslik, $aciklama, $resim, $id);
       mysqli_stmt_execute($stmt);
       if (mysqli_stmt_affected_rows($stmt) > 0) {
           $result = true;
       } else {
           $result = "Güncelleme başarısız: " . mysqli_stmt_error($stmt);
       }
       mysqli_stmt_close($stmt);
   } else {
       $result = "Sorgu hazırlanırken hata oluştu: " . mysqli_error($conn);
   }
   return $result;
}

function getUserFullName() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    return isset($_SESSION['adsoyad']) ? $_SESSION['adsoyad'] : 'Misafir';
}
function getSaglamisler($conn) {
    $sql = "SELECT id, baslik, aciklama, resim FROM saglamisler";
    $result = $conn->query($sql);
    
    if (!$result) {
        die("Sorgu hatası: " . $conn->error);
    }
    
    return $result;
 }
 function createSaglamisler(string $baslik, string $aciklama, string $resim) {
    include "ayar.php";
 
    $query = "INSERT INTO saglamisler (baslik, aciklama, resim) VALUES ('$baslik','$aciklama', '$resim')";
    $result = mysqli_query($conn,$query);
 
    mysqli_close($conn);
 
    return $result;
 }  
 function getSaglamislerById($id, $conn) {
    $sql = "SELECT * FROM saglamisler WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return $result;
}
 function deleteSaglamisler(int $id, $conn) {
    $query = "DELETE FROM saglamisler WHERE id=?";
    if ($stmt = mysqli_prepare($conn, $query)) {
        mysqli_stmt_bind_param($stmt, 'i', $id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    } else {
        return false;
    }
}
function editSaglamisler(int $id, string $baslik,  string $aciklama, string $resim, $conn) {
   $query = "UPDATE saglamisler SET baslik=?, aciklama=?, resim=? WHERE id=?";
   if ($stmt = mysqli_prepare($conn, $query)) {
       mysqli_stmt_bind_param($stmt, 'sssssi', $baslik, $aciklama, $resim, $id);
       mysqli_stmt_execute($stmt);
       if (mysqli_stmt_affected_rows($stmt) > 0) {
           $result = true;
       } else {
           $result = "Güncelleme başarısız: " . mysqli_stmt_error($stmt);
       }
       mysqli_stmt_close($stmt);
   } else {
       $result = "Sorgu hazırlanırken hata oluştu: " . mysqli_error($conn);
   }
   return $result;
}
function createHizmetler(string $icon, string $baslik, string $telefon, string $eposta, string $adres, string $aciklama, string $resim, string $detayli_bilgi) {
    include "ayar.php";

    $query = "INSERT INTO hizmetler (icon, baslik, telefon, eposta, adres, aciklama, resim, detayli_bilgi) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($conn, $query)) {
        mysqli_stmt_bind_param($stmt, 'ssssssss', $icon, $baslik, $telefon, $eposta, $adres, $aciklama, $resim, $detayli_bilgi);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    } else {
        $result = false;
    }
    mysqli_close($conn);

    return $result;
}

function getHizmetlerById($id) {
    include "ayar.php";
    $sql = "SELECT * FROM hizmetler WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    mysqli_close($conn);
    return $result;
}

function deleteHizmetler(int $id) {
    include "ayar.php";
    $query = "DELETE FROM hizmetler WHERE id=?";
    if ($stmt = mysqli_prepare($conn, $query)) {
        mysqli_stmt_bind_param($stmt, 'i', $id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    } else {
        $result = false;
    }
    mysqli_close($conn);
    return $result;
}

function editHizmetler(int $id, string $icon, string $baslik, string $telefon, string $eposta, string $adres, string $aciklama, string $resim, string $detayli_bilgi) {
    include "ayar.php";
    $query = "UPDATE hizmetler SET icon=?, baslik=?, telefon=?, eposta=?, adres=?, aciklama=?, resim=?, detayli_bilgi=? WHERE id=?";
    if ($stmt = mysqli_prepare($conn, $query)) {
        mysqli_stmt_bind_param($stmt, 'ssssssssi', $icon, $baslik, $telefon, $eposta, $adres, $aciklama, $resim, $detayli_bilgi, $id);
        mysqli_stmt_execute($stmt);
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            $result = true;
        } else {
            $result = "Güncelleme başarısız: " . mysqli_stmt_error($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        $result = "Sorgu hazırlanırken hata oluştu: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    return $result;
}
function getHizmetler($conn) {
    $sql = "SELECT id, icon, baslik, telefon, eposta, adres, aciklama, resim, detayli_bilgi FROM hizmetler";
    $result = $conn->query($sql);
    
    if (!$result) {
        die("Sorgu hatası: " . $conn->error);
    }
 
    return $result;
 }
 
?>
