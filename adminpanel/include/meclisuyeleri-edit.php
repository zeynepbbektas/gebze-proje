<?php
include 'ayar.php'; // Veritabanı bağlantısını dahil et

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = getUyelerById($id, $conn);

    if ($result) {
        $selectedUye = mysqli_fetch_assoc($result);
    } else {
        $_SESSION['message'] = "Veri alınırken hata oluştu.";
        $_SESSION['type'] = "danger";
        header("Location:" . SITE . "meclisuyeleri");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isim = $_POST["isim"];
        $gorev = $_POST["gorev"];
        $resim = $_POST["resim"];

        $result = editUyeler($id, $isim, $gorev, $resim, $conn);

        if ($result === true) {
            $_SESSION['message'] = "$isim isimli müdürlük güncellendi.";
            $_SESSION['type'] = "success";
            header("Location:" . SITE . "meclisuyeleri");
            exit();
        } else {
            echo "<div class='alert alert-danger'>$result</div>"; // Hata mesajını göster
        }
    }
} else {
    $_SESSION['message'] = "Geçersiz ID.";
    $_SESSION['type'] = "danger";
    header("Location:" . SITE . "meclisuyeleri");
    exit();
}
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Meclis Üyeleri</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Meclis Üyeleri</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container my-3">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-body">
                        <form action="<?= SITE ?>meclisuyeleri-edit/<?php echo $selectedUye["id"]; ?>" method="POST">

                            <div class="mb-3">
                                <label for="isim" class="form-label">isim</label>
                                <input type="text" class="form-control" name="isim" id="isim"
                                    value="<?php echo htmlspecialchars($selectedUye["isim"]); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="gorev" class="form-label">gorev</label>
                                <input type="gorev" class="form-control" name="gorev" id="gorev"
                                    value="<?php echo htmlspecialchars($selectedUye["gorev"]); ?>">
                            </div>

                            <div class="mb-3">
                                <label for="resim" class="form-label">resim</label>
                                <textarea name="resim" id="resim"
                                    class="form-control"><?php echo htmlspecialchars($selectedUye["resim"]); ?></textarea>
                            </div>

                            <input type="submit" value="Güncelle" class="btn btn-primary">

                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>