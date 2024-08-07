<?php
include 'ayar.php'; // Veritabanı bağlantısını dahil et

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = getMudurluklerById($id, $conn);

    if ($result) {
        $selectedMudurluk = mysqli_fetch_assoc($result);
    } else {
        $_SESSION['message'] = "Veri alınırken hata oluştu.";
        $_SESSION['type'] = "danger";
        header("Location:" . SITE . "mudurlukler");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ad = $_POST["ad"];
        $yetkili = $_POST["yetkili"];
        $e_posta = $_POST["e_posta"];
        $resim = $_POST["resim"];
        $yonetmelik = $_POST["yonetmelik"];

        $result = editMudurlukler($id, $ad, $yetkili, $e_posta, $resim, $yonetmelik, $conn);
        
        if ($result === true) {
            $_SESSION['message'] = "$ad isimli müdürlük güncellendi.";
            $_SESSION['type'] = "success";
            header("Location:" . SITE . "mudurlukler");
            exit();
        } else {
            echo "<div class='alert alert-danger'>$result</div>"; // Hata mesajını göster
        }
    }
} else {
    $_SESSION['message'] = "Geçersiz ID.";
    $_SESSION['type'] = "danger";
    header("Location:" . SITE . "mudurlukler");
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
                <form action="<?=SITE?>mudurlukler-edit/<?php echo $selectedMudurluk["id"]; ?>" method="POST">

                        <div class="mb-3">
                            <label for="ad" class="form-label">Ad</label>
                            <input type="text" class="form-control" name="ad" id="ad" value="<?php echo htmlspecialchars($selectedMudurluk["ad"]); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="yetkili" class="form-label">Yetkili</label>
                            <input type="text" class="form-control" name="yetkili" id="yetkili" value="<?php echo htmlspecialchars($selectedMudurluk["yetkili"]); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="e_posta" class="form-label">E-posta</label>
                            <input type="email" class="form-control" name="e_posta" id="e_posta" value="<?php echo htmlspecialchars($selectedMudurluk["e_posta"]); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="resim" class="form-label">Resim</label>
                            <input type="text" class="form-control" name="resim" id="resim" value="<?php echo htmlspecialchars($selectedMudurluk["resim"]); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="yonetmelik" class="form-label">Yönetmelik</label>
                            <textarea name="yonetmelik" id="yonetmelik" class="form-control"><?php echo htmlspecialchars($selectedMudurluk["yonetmelik"]); ?></textarea>
                        </div>            

                        <input type="submit" value="Güncelle" class="btn btn-primary">
                    
                    </form>
                </div>
            </div>

        </div>    
    
    </div>

</div>
