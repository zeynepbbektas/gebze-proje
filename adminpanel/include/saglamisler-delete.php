<?php
include 'ayar.php'; 

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    if (deleteSaglamisler($id, $conn)) {
        $_SESSION['message'] = "$id id numaralı müdürlük silindi.";
        $_SESSION['type'] = "success";
    } else {
        $_SESSION['message'] = "Silme işlemi sırasında bir hata oluştu.";
        $_SESSION['type'] = "danger";
    }

    header("Location:" . SITE . "duyurular");
    exit();
} else {
    $_SESSION['message'] = "Geçersiz ID.";
    $_SESSION['type'] = "danger";
    header("Location:" . SITE . "duyurular");
    exit();
}
?>
