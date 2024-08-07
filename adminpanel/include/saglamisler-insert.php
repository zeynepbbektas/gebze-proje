<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $baslik = $_POST["baslik"];
    $aciklama = $_POST["aciklama"];
    $resim = $_POST["resim"];

    if (createDuyurular($baslik, $aciklama, $resim)) {
        $_SESSION['message'] = $baslik . " isimli blog eklendi";
        $_SESSION['type'] = "success";

    } else {
        echo "hata";
    }
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
              <li class="breadcrumb-item active">Müd</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     
 

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="baslik" class="form-label">baslik</label>
                            <input type="text" class="form-control" name="baslik" id="ad">
                        </div>
                        <div class="mb-3">
                            <label for="aciklama" class="form-label">aciklama</label>
                            <input type="text" class="form-control" name="aciklama" id="aciklama">
                        </div>
                        <div class="form-group">
                        <label for="resim">Resim</label>
                        <input type="file" class="form-control-file" id="resim" name="resim">
                    </div>

                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
