<?php
include 'ayar.php'; // Veritabanı bağlantısını dahil et

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = getDuyurularById($id, $conn);

    if ($result) {
        $selectedDuyuru = mysqli_fetch_assoc($result);
    } else {
        $_SESSION['message'] = "Veri alınırken hata oluştu.";
        $_SESSION['type'] = "danger";
        header("Location:" . SITE . "duyurular");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $baslik = $_POST["baslik"];
        $aciklama = $_POST["aciklama"];
        $resim = $_POST["resim"];

        $result = editDuyurular( $id, $baslik, $aciklama, $resim, $conn);
        
        if ($result === true) {
            $_SESSION['message'] = "$baslik baslikli duyuru güncellendi.";
            $_SESSION['type'] = "success";
            header("Location:" . SITE . "duyurular");
            exit();
        } else {
            echo "<div class='alert alert-danger'>$result</div>"; // Hata mesajını göster
        }
    }
} else {
    $_SESSION['message'] = "Geçersiz ID.";
    $_SESSION['type'] = "danger";
    header("Location:" . SITE . "duyurular");
    exit();
}
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Müdürlükler</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
              <li class="breadcrumb-item active">Müdürlükler</li>
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
                <form action="<?=SITE?>duyurular-edit/<?php echo $selectedDuyuru["id"]; ?>" method="POST">

                        <div class="mb-3">
                            <label for="baslik" class="form-label">baslik</label>
                            <input type="text" class="form-control" name="baslik" id="baslik" value="<?php echo htmlspecialchars($selectedDuyuru["baslik"]); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="aciklama" class="form-label">aciklama</label>
                            <input type="text" class="form-control" name="aciklama" id="aciklama" value="<?php echo htmlspecialchars($selectedDuyuru["aciklama"]); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="resim" class="form-label">resim</label>
                            <textarea name="resim" id="resim" class="form-control"><?php echo htmlspecialchars($selectedDuyuru["resim"]); ?></textarea>
                        </div>            

                        <input type="submit" value="Güncelle" class="btn btn-primary">
                    
                    </form>
                </div>
            </div>

        </div>    
    
    </div>

</div>
