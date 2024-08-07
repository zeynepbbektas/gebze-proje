<?php
@session_start();
@ob_start();


// Kullanıcı oturumu kontrolü
if (!isset($_SESSION['kullaniciadi'])) {
    header("Location: " . SITE . "login");
    exit();
}

// Kullanıcının ad soyad bilgilerini al
$adsoyad = $_SESSION['adsoyad'];
?>

<?php
include 'ayar.php'; // Veritabanı bağlantısını dahil et

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = getYardimcilarById($id, $conn);

    if ($result) {
        $selectedYardimci = mysqli_fetch_assoc($result);
    } else {
        $_SESSION['message'] = "Veri alınırken hata oluştu.";
        $_SESSION['type'] = "danger";
        header("Location:" . SITE . "baskanyardimcilari");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isim = $_POST["isim"];
        $unvan = $_POST["unvan"];
        $telefon = $_POST["telefon"];
        $email = $_POST["email"];
        $resim = $_POST["resim"];

        $result = editYardimcilar( $id, $isim, $unvan, $telefon, $email, $resim, $conn);
        
        if ($result === true) {
            $_SESSION['message'] = "$isim isimli müdürlük güncellendi.";
            $_SESSION['type'] = "success";
            header("Location:" . SITE . "baskanyardimcilari");
            exit();
        } else {
            echo "<div class='alert alert-danger'>$result</div>"; // Hata mesajını göster
        }
    }
} else {
    $_SESSION['message'] = "Geçersiz ID.";
    $_SESSION['type'] = "danger";
    header("Location:" . SITE . "baskanyardimcilari");
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
                <form action="<?=SITE?>baskanyardimcilari-edit/<?php echo $selectedYardimci["id"]; ?>" method="POST">

                        <div class="mb-3">
                            <label for="isim" class="form-label">isim</label>
                            <input type="text" class="form-control" name="isim" id="isim" value="<?php echo htmlspecialchars($selectedYardimci["isim"]); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="unvan" class="form-label">unvan</label>
                            <input type="text" class="form-control" name="unvan" id="unvan" value="<?php echo htmlspecialchars($selectedYardimci["unvan"]); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="telefon" class="form-label">telefon</label>
                            <input type="text" class="form-control" name="telefon" id="telefon" value="<?php echo htmlspecialchars($selectedYardimci["telefon"]); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?php echo htmlspecialchars($selectedYardimci["email"]); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="resim" class="form-label">resim</label>
                            <textarea name="resim" id="resim" class="form-control"><?php echo htmlspecialchars($selectedYardimci["resim"]); ?></textarea>
                        </div>            

                        <input type="submit" value="Güncelle" class="btn btn-primary">
                    
                    </form>
                </div>
            </div>

        </div>    
    
    </div>

</div>
